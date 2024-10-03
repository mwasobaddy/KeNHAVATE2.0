<?php

    require_once '../../../../libraries/functions/IncludeAll.php';
    require_once '../../../../libraries/functions/DBFetchInfo.php';

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
    <title>Our Periodic Challenges :: | :: KeNHAVATE :: | :: Kenya National Highway Authority :: |:: KeNHA</title>
    <meta name="description" content="Explore and participate in KeNHAVATE's current challenges aimed at improving Kenya's road infrastructure through innovation and collaboration.">
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
    <link rel="stylesheet" href="user/guest/css/innovation-challenges.css">
</head>
<body class="d-flex justify-content-center">
    <div class="innovation-challenges-content row w-100 m-0 p-0" style="background-image: url('image-library-KeNHA/Hand-holding-lightbulb (1).png'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="col-12 m-0 p-0 d-flex justify-content-center">
            <div class="row w-100 d-flex justify-content-center glassmorphic-colorless">
                <div class="p-0 col-md-10">    
                    
                    <?php include '../navbar/guest-nav.php'; ?>

                    <header>
                        <div class="header-bg"></div>
                        <div class="container">
                            <h1>KeNHAVATE Challenges</h1>
                            <p>Join us in shaping the future of Kenya's road infrastructure</p>
                        </div>
                    </header>
                    
                    <main class="container">
                        <section class="animate appear intro">
                            <h2>Important Notice</h2>
                            <p>The challenges displayed here are periodic and have specific time limits. Please be aware that once the time for a challenge runs out, it becomes inactive and you will no longer be able to participate in it.</p>
                            <p> We encourage you to participate in ongoing challenges while they are active to make the most of your opportunities. Stay tuned for new challenges and updates!</p>
                        </section>

                        <section class="glassmorphic-colorless py-5 px-3 mt-5">
                            <div class="filters">
                                <select id="status-filter">
                                    <option value="">All Statuses</option>
                                    <option value="active">Active</option>
                                    <option value="ongoing">Ongoing</option>
                                    <option value="expired">Expired</option>
                                </select>
                            </div>

                            <div id="challenges-grid" class="row">

                            </div>

                            <div id="pagination" class="pagination">

                            </div>
                        </section>
                    </main>
                    
                    <?php include '../footer/guest-footer.php'; ?>
                </div>
            </div>
        </div>
    </div>
        
    <div class="innovation-challenges-loader w-100 h-100 d-flex justify-content-center align-items-center">
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
    <script src="user/guest/js/innovation-challenges.js"></script>
</body>
</html>
