<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'connection.php';
header('Content-Type: application/json');

// Capture the incoming JSON data
$data = json_decode(file_get_contents('php://input'), true);

// Validate JSON
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['success' => false, 'message' => 'Invalid JSON input']);
    exit();
}

// Assign data to variables, ensuring default values if keys are missing
$name = $data['name'] ?? '';
$email = $data['email'] ?? '';
$phone = $data['phone'] ?? '';
$message = $data['message'] ?? '';
$packageName = $data['packageName'] ?? '';
$packagePrice = $data['packagePrice'] ?? '';

// Establish database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Connection failed: ' . $conn->connect_error]);
    exit();
}

// Prepare and execute SQL statement
$sql = "INSERT INTO users (name, email, phone, message, package_name, package_price) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo json_encode(['success' => false, 'message' => 'Prepare failed: ' . $conn->error]);
    exit();
}
$stmt->bind_param('ssssss', $name, $email, $phone, $message, $packageName, $packagePrice);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Data saved successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Execute failed: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
