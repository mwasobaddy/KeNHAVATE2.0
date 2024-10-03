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
    <title>Our Innovation Areas :: | :: KeNHAVATE :: | :: Kenya National Highway Authority :: |:: KeNHA</title>
    <meta name="description" content="Explore KeNHAVATE's innovative solutions in road construction, customer service, safety, climate resilience, and value optimization. Join us in revolutionizing infrastructure.">
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
    <link rel="stylesheet" href="user/guest/css/innovation-areas.css">
</head>
<body class="d-flex justify-content-center">
    <div class="innovation-area-content row w-100 m-0 p-0" style="background-image: url('image-library-KeNHA/Hand-holding-lightbulb (1).png'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="col-12 m-0 p-0 d-flex justify-content-center">
            <div class="row w-100 d-flex justify-content-center glassmorphic-colorless">
                <div class="p-0 col-md-10">    
                    
                    <?php include '../navbar/guest-nav.php'; ?>


                    <header class="">
                        <div class="header-bg"></div>
                        <article class="container">
                            <h1 class="header-animate">Our Core Innovation Areas</h1>
                            <p class="header-animate">Pioneering the Future of Road Infrastructure</p>
                        </article>
                    </header>
                    
                    <main class="container">
                        <section class="animate intro d-grid">
                            <h2>Transforming Infrastructure Through Innovation</h2>
                            <p>At KeNHAVATE, we're not just building roads; we're paving the way for a smarter, safer, and more sustainable future. Our innovation hub is the epicenter of groundbreaking ideas that are reshaping the landscape of road infrastructure and services. Discover how you can be part of this exciting journey of transformation.</p>
                            <a class="cta-button" href="auth/user-signin">
                                <div class="d-flex align-items-center" style="gap: 4px;">
                                    <div>Submit Your Innovative Idea </div>
                                    <div class="d-flex align-items-center">
                                        <lord-icon
                                            src="https://cdn.lordicon.com/fttvwdlw.json"
                                            trigger="loop"
                                            stroke="bold"
                                            state="loop-roll"
                                            colors="primary:#231F20,secondary:#ff0000">
                                        </lord-icon>
                                    </div>
                                </div>
                            </a>
                        </section>

                        <section class="row" style="margin-top: 50px;">
                            <article class="animate col-lg-6 col-xl-4 mb-5 px-3">
                                <div class="card p-2 h-100">
                                    <div class="card-body">
                                        <h2 class="card-title mt-3">
                                            <i class='bi bi-person-check'></i>
                                            Customer Service Excellence
                                        </h2>
                                        <p class="card-text">Revolutionize our client interactions and organizational systems for unparalleled service delivery.</p>
                                        <ul class="key-points">
                                            <li>How can technology or processes improve communication with clients?</li>
                                            <li>What innovative solutions can streamline query resolution?</li>
                                            <li>Are there ways to personalize and enhance the customer experience?</li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="animate col-lg-6 col-xl-4 mb-5 px-3">
                                <div class="card p-2 h-100">
                                    <div class="card-body">    
                                        <h2 class="card-title mt-3">
                                            <i class='bi bi-shield-check'></i>
                                            Quality & Safety Innovation
                                        </h2>
                                        <p class="card-text">Enhance road longevity and user safety through cutting-edge technologies and practices.</p>
                                        <ul class="key-points">
                                            <li>How can we maintain high-quality road standards while minimizing pollution?</li>
                                            <li>What sustainable materials or practices could be implemented?</li>
                                            <li>How can road safety be improved through innovative practices?</li>
                                        </ul>

                                    </div>
                                </div>
                            </article>
                            <article class="animate col-lg-6 col-xl-4 mb-5 px-3">
                                <div class="card p-2 h-100">
                                    <div class="card-body">    
                                        <h2 class="card-title mt-3">
                                            <i class='bi bi-gear'></i>
                                            Advanced Road Materials
                                        </h2>
                                        <p class="card-text">Pioneer next-gen materials for durable, sustainable, and intelligent road infrastructure.</p>
                                        <ul class="key-points">
                                            <li>Are there new asphalt mixtures or eco-friendly additives that improve durability?</li>
                                            <li>What advanced reinforcement techniques could reduce maintenance needs?</li>
                                            <li>How can your idea contribute to cost-effectiveness and resilience in road construction?</li>
                                        </ul>

                                    </div>
                                </div>
                            </article>
                            <article class="animate col-lg-6 col-xl-4 mb-5 px-3">
                                <div class="card p-2 h-100">
                                    <div class="card-body">    
                                        <h2 class="card-title mt-3">
                                            <i class='bi bi-laptop'></i>
                                            Construction Technologies
                                        </h2>
                                        <p class="card-text">Transform road construction with revolutionary technologies and methodologies.</p>
                                        <ul class="key-points">
                                            <li>What new technologies can enhance the foundational strength of road pavements?</li>
                                            <li>How can inventive engineering improve road longevity and safety?</li>
                                            <li>What role can data-driven insights and smart technologies play in optimizing road construction processes and materials?</li>
                                        </ul>

                                    </div>
                                </div>
                            </article>
                            <article class="animate col-lg-6 col-xl-4 mb-5 px-3">
                                <div class="card p-2 h-100">
                                    <div class="card-body">    
                                        <h2 class="card-title mt-3">
                                            <i class='bi bi-umbrella'></i>
                                            Climate Resilience Solutions
                                        </h2>
                                        <p class="card-text">Develop adaptive infrastructure to combat and mitigate effects of climate change.</p>
                                        <ul class="key-points">
                                            <li>How can sustainable materials and practices be incorporated into road design?</li>
                                            <li>What advanced drainage systems or renewable energy sources could be utilized?</li>
                                            <li>How can infrastructure be made more adaptable to changing climate conditions?</li>
                                        </ul>

                                    </div>
                                </div>
                            </article>
                            <article class="animate col-lg-6 col-xl-4 mb-5 px-3">
                                <div class="card p-2 h-100">
                                    <div class="card-body">    
                                        <h2 class="card-title mt-3">
                                            <i class='bi bi-cash'></i>
                                            Value Optimization & Revenue
                                        </h2>
                                        <p class="card-text">Maximize resource utilization and unlock new revenue streams for sustainable growth.</p>
                                        <ul class="key-points">
                                            <li>What strategies or innovations can ensure high-quality outputs and optimize resource utilization while maintaining cost-effectiveness?</li>
                                            <li>How can data analytics or market insights uncover underutilized resources?</li>
                                            <li>What monetization strategies can be implemented to enhance financial resilience?</li>
                                        </ul>

                                    </div>
                                </div>
                            </article>
                        </section>
                    </main>
                    
                    <?php include '../footer/guest-footer.php'; ?>
                </div>
            </div>
        </div>
    </div>
        
    <div class="innovation-area-loader w-100 h-100 d-flex justify-content-center align-items-center">
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
    <script src="user/guest/js/innovation-areas.js"></script>
</body>
</html>