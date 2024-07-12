<?php
include_once('include/cl_db.php');

$db = new DB;
$db->open();

if (isset($_POST['submit'])) {
    $to = 'muzaffar.o16@gmail.com';
    $subject = "New Lead";


    $ip = $db->get_client_ip();
    $getLocationByIp = $db->getLocationByIp();
    $country = $getLocationByIp['countryCode'];

    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $service = $_POST['service'];
    $package = $_POST['packageName'];
    $price = $_POST['packagePrice'];

    $db->insertLead($user_name, $email, $phone, $message, $service, $package, $price, $ip, $country);

    // Email content
    $headers = "From: " . strip_tags($email) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message_content = '
        <table width="100%" border="1" style="font-size:14px; font-family:arial;" cellspacing="0" cellpadding="3">
            <tr><td>Name</td><td>' . $user_name . '</td></tr>
            <tr><td>Email</td><td>' . $email . '</td></tr>
            <tr><td>Country</td><td>' . $country . '</td></tr>
            <tr><td>IP</td><td>' . $ip . '</td></tr>
            <tr><td>Mobile Number</td><td>' . $phone . '</td></tr>
            <tr><td>Message</td><td>' . $message . '</td></tr>
            <tr><td>Service</td><td>' . $service . '</td></tr>
            <tr><td>Package</td><td>' . $package . '</td></tr>
            <tr><td>Price</td><td>' . $price . '</td></tr>
        </table>';

    // Send email
    $mail_sent = mail($to, $subject, $message_content, $headers);

    if ($mail_sent) {
        echo 'success'; // Optional success message
    } else {
        echo 'error'; // Optional error message
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Perfect Horizon - Your Marketing Catalyst.</title>

    <!-- META ROBOT -->
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height">
    <meta name="description" content="#" />

    <!-- META CONTENT -->
    <meta content="Probdone" name="Abdul Haseeb Q. a.k.a twistyBRAT 鬼 ]; | info@probdone.com | https://probdone.com | https://www.buymeacoffee.com/twistybrat" />
    <meta property="og:type" content="website">
    <meta content="Perfect Horizon - Your Marketing Catalyst" property="og:title">
    <meta content="Perfect Horizon - Your Marketing Catalyst" property="twitter:title">
    <meta content="summary_large_image" name="twitter:card">

    <!-- FAV ICON  -->
    <link href="64bfa5eec3353671101c9bd1/64cf5d1c0aef8ef8c7af9673_fav.png" rel="shortcut icon" type="image/x-icon">
    <link href="64bfa5eec3353671101c9bd1/64ff09edbfa8ab51e7e1b7af_Adsorb%20favicon%20%28black%20bg%29%201.png" rel="apple-touch-icon">

    <link href="64bfa5eec3353671101c9bd1/css/adsorb.webflow.4f8cb529b.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Droid Sans:400,700", "Sora:100,200,300,regular,500,600,700,800:latin,latin-ext"]
            }
        });
    </script>
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <script defer="" src="npm/%40finsweet/attributes-scrolldisable%401/scrolldisable.js"></script>
    <script src="cookie/cookie.js"></script>

    <style>
        @media (min-width:992px) {
            html.w-mod-js:not(.w-mod-ix) [data-w-id="defa40de-86da-ae8d-c445-1abbb969543a"] {
                -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                opacity: 0;
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="6e1b7f4f-791d-fb8c-b102-7151b4a6f07a"] {
                -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                opacity: 0;
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="7b1a9a0c-3527-de17-6f8a-dc59c3868fd4"] {
                -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                opacity: 0;
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="d7c2bd56-bbaa-4a97-97ba-ed10a7c95829"] {
                -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                opacity: 0;
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="1de41b1a-5b96-affb-4f6a-a63ef71a0c2e"] {
                -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                opacity: 0;
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="b8863902-fbdc-0f20-0a63-8c661491a53c"] {
                opacity: 0;
                background-color: rgba(12, 13, 15, 0);
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="88aee854-b25d-dcca-7ebe-72cb6728b97e"] {
                background-color: rgb(117, 120, 123);
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f424c"] {
                -webkit-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f424b"] {
                -webkit-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f424a"] {
                -webkit-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f4249"] {
                opacity: 0;
            }
        }

        @media (max-width:991px) and (min-width:768px) {
            html.w-mod-js:not(.w-mod-ix) [data-w-id="defa40de-86da-ae8d-c445-1abbb969543a"] {
                -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                opacity: 0;
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="6e1b7f4f-791d-fb8c-b102-7151b4a6f07a"] {
                -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                opacity: 0;
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="7b1a9a0c-3527-de17-6f8a-dc59c3868fd4"] {
                -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                opacity: 0;
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="d7c2bd56-bbaa-4a97-97ba-ed10a7c95829"] {
                -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                opacity: 0;
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="1de41b1a-5b96-affb-4f6a-a63ef71a0c2e"] {
                -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                opacity: 0;
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="b8863902-fbdc-0f20-0a63-8c661491a53c"] {
                opacity: 0;
                background-color: rgba(12, 13, 15, 0);
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="88aee854-b25d-dcca-7ebe-72cb6728b97e"] {
                background-color: rgb(117, 120, 123);
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f424c"] {
                -webkit-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f424b"] {
                -webkit-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f424a"] {
                -webkit-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f4249"] {
                opacity: 0;
            }
        }

        h1.gs_reveal.gs_reveal_fromDown_sn {
            color: white;
        }

        section.mainBanner {
            position: relative;
            text-align: center;
            padding: 6% 0;
        }

        section.mainBanner {
            text-align: center;
            /* padding: 10% 0; */
            display: grid;
            /* place-items: center; */
            height: 95vh;
        }
    </style>

</head>

<body>
    <div data-w-id="ef17cb56-1d5f-2824-ec19-90cbd2b4533a" class="nav-component">
        <div data-w-id="692688d0-ff5f-87e8-a3dd-65e7a6247c72" class="nav-background"></div>
        <div class="padding_nav">
            <div class="nav_container">
                <a href="index.html" aria-current="page" class="nav_logo w-inline-block w--current">
                    <img src="64bfa5eec3353671101c9bd1/64bfc8c739ee3610119fc697_logo1.svg" loading="lazy" alt="" class="logo-image">
                </a>
                <div class="nav_menu">
                    <div class="nav_list">
                        <a href="packages.php" class="nav_header-link w-inline-block">
                            <div class="nav_link-inner">
                                <div class="nav_link">Our Services</div>
                                <div class="nav_link">Our Services</div>
                            </div>
                            <div class="link-11_underline has-right-origin"></div>
                            <div class="link-11_underline has-left-origin"></div>
                        </a>
                        <a href="about.html" class="nav_header-link w-inline-block">
                            <div class="nav_link-inner">
                                <div class="nav_link">About Perfect Horizon</div>
                                <div class="nav_link">About Perfect Horizon</div>
                            </div>
                            <div class="link-11_underline has-right-origin"></div>
                            <div class="link-11_underline has-left-origin"></div>
                        </a>
                        <a href="career.html" class="nav_header-link w-inline-block">
                            <div class="nav_link-inner">
                                <div class="nav_link">Get in touch</div>
                                <div class="nav_link">Get in touch</div>
                            </div>
                            <div class="link-11_underline has-right-origin"></div>
                            <div class="link-11_underline has-left-origin"></div>
                        </a>
                    </div>
                    <a fs-mirrorclick-element="" data-w-id="0553af30-30d5-f0a2-bcf1-18069f7d5f43" href="#" class="button w-inline-block">
                        <div class="text-size-regular text-style-allcaps">Get a quote</div>
                        <div class="button_ic is-default">
                            <div class="ic ic-size-medium w-embed"><svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="8" y="8" width="8" height="8" rx="4" fill="currentcolor"></rect>
                                </svg></div>
                        </div>
                        <div class="button_ic is-hover">
                            <div class="ic ic-size-medium w-embed">
                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="22" height="22" rx="11" fill="white"></rect>
                                    <g clip-path="url(#clip0_1687_1045)">
                                        <path d="M8.70017 8.70011L8.70017 9.86331L13.3076 9.86743L8.28769 14.8873L9.11265 15.7123L14.1325 10.6924L14.1284 15.2998L15.2998 15.2998L15.2998 8.70011L8.70017 8.70011Z" fill="currentcolor"></path>
                                    </g>
                                    <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="currentcolor"></rect>
                                    <defs>
                                        <clippath id="clip0_1687_1045">
                                            <rect width="14" height="14" fill="white" transform="translate(5 19) rotate(-90)"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
                <div data-w-id="ef17cb56-1d5f-2824-ec19-90cbd2b4534d" class="nav_burger">
                    <div class="nav_burger-frame">
                        <div class="nav_burger-line is-1"></div>
                        <div class="nav_burger-line is-2"></div>
                        <div class="nav_burger-line is-3"></div>
                    </div>
                </div>
            </div>
        </div>
        <div fs-scrolldisable-element="when-visible" class="open-menu">
            <div class="nav_menu is-tablet">
                <div class="nav_list">
                    <a href="packages.php" class="nav_link heading-style-h3">What we do</a>
                    <a href="about.html" class="nav_link heading-style-h3">About Perfect Horizon</a>
                    <a href="contact.html" class="nav_link heading-style-h3">Get in touch</a>
                </div>
                <a fs-mirrorclick-element="" data-w-id="0553af30-30d5-f0a2-bcf1-18069f7d5f43" href="contact.html" class="button w-inline-block">
                    <div class="text-size-regular text-style-allcaps">Get a quote</div>
                    <div class="button_ic is-default">
                        <div class="ic ic-size-medium w-embed">
                            <svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="8" y="8" width="8" height="8" rx="4" fill="currentcolor"></rect>
                            </svg>
                        </div>
                    </div>
                    <div class="button_ic is-hover">
                        <div class="ic ic-size-medium w-embed">
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="1" y="1" width="22" height="22" rx="11" fill="white"></rect>
                                <g clip-path="url(#clip0_1687_1045)">
                                    <path d="M8.70017 8.70011L8.70017 9.86331L13.3076 9.86743L8.28769 14.8873L9.11265 15.7123L14.1325 10.6924L14.1284 15.2998L15.2998 15.2998L15.2998 8.70011L8.70017 8.70011Z" fill="currentcolor"></path>
                                </g>
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="currentcolor"></rect>
                                <defs>
                                    <clippath id="clip0_1687_1045">
                                        <rect width="14" height="14" fill="white" transform="translate(5 19) rotate(-90)"></rect>
                                    </clippath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
            <div class="nav_element">
                <div class="menu-lottie" data-w-id="eccf2794-4af1-3860-442b-9c55f1aaabfa" data-animation-type="lottie" data-src="https://assets-global.website-files.com/64bfa5eec3353671101c9bd1/64f885c762524263f8706468_adsorb_graphic_element_safari.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-duration="0">
                </div>
            </div>
        </div>
    </div>

    <main class="main-wrapper">
        <section class="mainBanner">
            <div class="shape3">
                <img src="assets/images/bannerlogo.png" alt="">
            </div>
            <div class="container">
                <h1 class="gs_reveal gs_reveal_fromDown_sn"><span>Thank</span> You</h1>
                <a href="./" class="btnn-postion-hover mn-btn gs_reveal gs_reveal_fromDown" data-modal="#login-modal" style="color:#fff;">Back to Home <span></span></a>

            </div>
        </section>
    </main>


</body>

</html>