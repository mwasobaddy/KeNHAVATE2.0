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
    <title>Discover Who We Are :: | :: KeNHAVATE :: | :: Kenya National Highway Authority :: |:: KeNHA</title>
    <meta name="description" content="Learn about KeNHAVATE's mission, history, and commitment to revolutionizing Kenya's highway infrastructure through innovation and sustainability.">
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
    <link rel="stylesheet" href="user/guest/css/who-we-are.css">
</head>
<body class="d-flex justify-content-center">
    <div class="who-we-are-content row w-100 m-0 p-0" style="background-image: url('image-library-KeNHA/Hand-holding-lightbulb (1).png'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="col-12 m-0 p-0 d-flex justify-content-center">
            <div class="row w-100 d-flex justify-content-center glassmorphic-colorless">
                <div class="p-0 col-md-10">    
                    
                    <?php include '../navbar/guest-nav.php'; ?>

                    <header>
                        <div class="header-bg"></div>
                        <article class="container">
                            <h1 class="header-animate">Discover Who We Are</h1>
                            <p class="header-animate">We Develop & Maintain Quality National Trunk Road Network to All for Prosperity</p>
                        </article>
                    </header>

                    <main class="container">
                        <section class="animate appear intro">
                            <h2>Our Mission</h2>
                            <p>At KeNHAVATE, we are committed to revolutionizing Kenya's highway infrastructure through innovation, sustainability, and world-class engineering. Our mission is to develop and manage resilient, safe and adequate National Trunk Roads for sustainable development through Innovation and Optimal utilization of resources.</p>
                        </section>

                        <section class="overflow-hidden">
                            <h2>Our Journey</h2>
                            <div class="timeline d-flex flex-column align-items-center">
                                <div class="milestone row justify-content-start left w-100">
                                    <article class="milestone-content col-md-6">
                                        <h3>2008 - Establishment</h3>
                                        <p><i>"Kenya National Highways Authority (KeNHA) is a statutory body established under the Kenya Roads Act of 2007."</i></p>
                                    </article>
                                </div>
                                <div class="milestone row justify-content-end right w-100">
                                    <article class="milestone-content col-md-6">
                                        <h3>2022 - Direco Department</h3>
                                        <p><i>"Launched dedicated innovation department to foster cutting-edge solutions."</i></p>
                                    </article>
                                </div>
                                <div class="milestone row justify-content-start left w-100">
                                    <article class="milestone-content col-md-6">
                                        <h3>2019 - Research, Innovation & Knowledge Mangement Department Operationalized</h3>
                                        <p><i>"The department was designed to spearhead research initiatives, drive cutting-edge innovations, and effectively manage and disseminate knowledge across the organization."</i></p>
                                    </article>
                                </div>
                                <div class="milestone row justify-content-end right w-100">
                                    <article class="milestone-content col-md-6">
                                        <h3>2023 - KeNHAVATE: KeNHA's Innovation Hub was launched </h3>
                                        <p><i>"KeNHAVATE was born with the aim of aggregating and harnessing cutting-edge knowledge to drive advancements in road infrastructure."</i></p>
                                    </article>
                                </div>
                            </div>
                        </section>

                        <section>
                            <h2>Our Leadership</h2>
                            <div class="team-grid row">
                                <article class="animate team-member col-md-6 col-lg-4">
                                    <img src="image-library-KeNHA/Eng-Kungu-Ndungu.png" alt="Eng. Kungu Ndungu">
                                    <h3>Eng. Kungu Ndungu</h3>
                                    <p><strong>Director General Kenya National Highways Authority</strong></p>
                                    <p><i>"With years of experience in infrastructure development, Eng. Kungu Ndungu leads KeNHA's vision for innovative and sustainable road networks."</i></p>
                                </article>
                                <article class="animate team-member col-md-6 col-lg-4">
                                    <img src="image-library-KeNHA/Eng-Njuguna-Gatitu.webp" alt="Eng. Njuguna Gatitu">
                                    <h3>Eng. Njuguna Gatitu</h3>
                                    <p><strong>Director Policy, Research & Compliance (PRC)</strong></p>
                                    <p><i>"Eng. Njuguna Gatitu spearheads PRC initiatives, driving KeNHAVATE to the forefront of road technology."</i></p>
                                </article>
                                <article class="animate team-member col-md-6 col-lg-4">
                                    <img src="https://via.placeholder.com/150" alt="Dr. Eng. Victoria Akumu">
                                    <h3>Dr. Eng. Victoria Akumu</h3>
                                    <p><strong>Deputy Director Research, Innovation & Knowledge Mangement</strong></p>
                                    <p><i>"Dr. Eng. Victoria Akumu spearheads our cutting-edge research and development initiatives, driving KeNHAVATE to the forefront of road technology."</i></p>
                                </article>
                            </div>
                        </section>

                        <section>
                            <h2 class="animate">Our Vision for the Future</h2>
                            <p class="animate">As we look ahead, KeNHAVATE envisions a Kenya where every road tells a story of innovation, sustainability, and progress. We're not just building highways; we're creating arteries of development that connect communities, foster economic growth, and preserve our natural heritage.</p>
                            <p class="animate">Join us on this exciting journey as we continue to push the boundaries of what's possible in road infrastructure. Together, we're paving the way for a brighter, more connected future for Kenya.</p>
                        </section>
                    </main>
                    
                    <?php include '../footer/guest-footer.php'; ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="who-we-are-loader w-100 h-100 d-flex justify-content-center align-items-center">
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
    <script src="user/guest/js/who-we-are.js"></script>
</body>
</html>