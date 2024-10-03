<?php
    session_start();
    
    // Check if the specific session variable is set
    if (isset($_SESSION['doubleEncryptedSessionId'])) {
        // Unset the specific session variable
        unset($_SESSION['doubleEncryptedSessionId']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Our Privacy Policy :: | :: KeNHAVATE :: | :: Kenya National Highway Authority :: | :: KeNHA</title>
    <meta name="description" content="Learn about KeNHAVATE's commitment to protecting your privacy and how we handle your personal information in line with Kenyan data protection laws.">
    <meta name="keywords" content="KeNHAVATE, privacy policy, data protection, Kenya, road infrastructure, personal information">
    <meta name="author" content="KeNHAVATE">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Base URL -->
    <base href="/KeNHAVATE/">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="user/guest/css/privacy-policy.css">
</head>
<body class="d-flex justify-content-center">
    <div class="privacy-policy-content row w-100 m-0 p-0" style="background-image: url('image-library-KeNHA/Hand-holding-lightbulb (1).png'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="col-12 m-0 p-0 d-flex justify-content-center">
            <div class="row w-100 d-flex justify-content-center glassmorphic-colorless">
                <div class="p-0 col-md-10">    
                    
                    <?php include '../navbar/guest-nav.php'; ?>

                    <header>
                        <div class="header-bg"></div>
                        <div class="container">
                            <h1 class="header-animate">Privacy Policy</h1>
                            <p class="header-animate">Learn about KeNHAVATE's commitment to protecting your privacy and how we handle your personal information in compliance with Kenyan data protection laws.</p>
                        </div>
                    </header>

                    <main class="container">
                        <section class="intro">
                            <p class="animate">Introduction</p>

                            <strong class="text-danger animate"><i class="bi bi-exclamation-diamond-fill"></i> At Kenya National Highways Authority (KeNHA), we are committed to protecting the privacy and security of our users. This Privacy Policy outlines the types of information we collect, how we use and protect that information, and your rights regarding your personal data.</strong>
                        </section>
                        <section class="privacy-section my-5">
                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">Information We Collect</h2>
                                <p>
                                    We may collect the following types of information:
                                </p>
                                <ul>
                                    <li>Personal identification information (Name, email address, phone number, etc.)</li>
                                    <li>Log data (IP address, browser type, and settings)</li>
                                    <li>Cookies and tracking technologies</li>
                                </ul>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">How We Use Your Information</h2>
                                <p>
                                    The information we collect is used in the following ways:
                                </p>
                                <ul>
                                    <li>To provide and maintain our services</li>
                                    <li>To notify you about changes to our services</li>
                                    <li>To provide customer support</li>
                                    <li>To monitor the usage of our service</li>
                                    <li>To detect, prevent, and address technical issues</li>
                                </ul>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">Data Protection</h2>
                                <p>
                                    We take the security of your personal data seriously. We implement a variety of security measures to maintain the safety of your personal information. However, please be aware that no method of transmission over the Internet or method of electronic storage is 100% secure.
                                </p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">Your Rights</h2>
                                <p>
                                    You have the right to:
                                </p>
                                <ul>
                                    <li>Access and request a copy of your personal data</li>
                                    <li>Rectify any inaccurate personal data</li>
                                    <li>Erase your personal data under certain conditions</li>
                                    <li>Object to or restrict the processing of your personal data</li>
                                    <li>Withdraw consent to the processing of your personal data</li>
                                </ul>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">Changes to This Privacy Policy</h2>
                                <p>
                                    We may update our Privacy Policy from time to time. Any changes will be posted on this page with an updated revision date.
                                </p>
                            </article>
                            
                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">Contact Information</h2>
                                <p>If you have any questions, complains, or claims regarding the site and these Terms, please contact us at:</p>
                                <strong style="margin-bottom: 20px;">
                                    <span>Director, Policy, Research and Compliance.</span></br>
                                    <span><a href="mailto:dpsc@kenha.co.ke">mailto:dpsc@kenha.co.ke</a></span></br>
                                    <span>Block C, 4th Floor, Barabara Plaza,</span></br>
                                    <span>Mazao Road, JKIA Airport,</span></br>
                                    <span>Nairobi Kenya.</span></br>
                                </strong>
                            </article>
                        </section>
                    </main>
                    
                    <?php include '../footer/guest-footer.php'; ?>
                </div>
            </div>
        </div>
    </div>
        
    <div class="privacy-policy-loader w-100 h-100 d-flex justify-content-center align-items-center">
        <lottie-player
            src="https://lottie.host/9af2d4e7-dd42-423a-8904-c7dc09ca2459/rqArWFcV5E.json"
            background="#000000"
            speed="1"
            style="width: 300px; height: 300px"
            loop 
            autoplay
            direction="1"
            mode="normal">
        </lottie-player>
    </div>
    
    <!-- Bootstrap 5 JS (Optional, only if you need Bootstrap JS functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- LordIcon js -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <!-- LottieFlow animated Icon js -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- jQuery (required for your $(document).ready function) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <!-- Custom js -->
    <script src="user/guest/js/privacy-policy.js"></script>
</body>
</html>
