<?php
    
    include '../../libraries/functions/IncludeAll.php';
    include '../../libraries/functions/DBFetchInfo.php';

    //uunset session-id['doubleEncryptedSessionId']

    unset($_SESSION['doubleEncryptedSessionId']);
    
    
    $totalUsers = totalUsers($con);
    $totalSubmissions = totalSubmissions($con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="KeNHAVATE is KeNHA's innovation portal. Submit ideas, participate in challenges, and collaborate to shape Kenya's future highways.">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Base URL -->
        <base href="/KeNHAVATE/">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="user/guest/css/home-guest.css">
        <title>Home :: | :: KeNHAVATE :: | :: Kenya National Highway Authority :: |:: KeNHA</title>
    </head>
    <body class="d-flex justify-content-center">
        <div class="home-content row w-100 m-0 p-0" style="background-image: url('image-library-KeNHA/Hand-holding-lightbulb (1).png'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
            <div class="col-12 m-0 p-0 d-flex justify-content-center">
                <div class="row w-100 d-flex justify-content-center glassmorphic-colorless">
                    <div class="p-0 col-md-10">
                        
                        <?php include './resources/navbar/guest-nav.php'; ?>

                        <header class="jumbotron d-flex align-items-center text-center position-relative overflow-hidden" style="background-color: #231F20; padding: 50px 0;">
                            <div class="header-bg"></div>
                            <div class="container position-relative d-grid">
                                <h1 class="header-animate display-4 fw-bolder py-3 px-4" style="justify-self: center; color: #F8EBD5; background-color: black;">Welcome to KeNHAVATE</h1>
                                <p class="header-animate lead">Innovate Beyond Boundaries, Collaborate Without Limits, Transform Ideas into Reality, Win What Matters!!</p>
                            </div>
                        </header>

                        <main class="container">
                            <section class="animate intro  position-relative d-grid" style="background-color: #ffffff; border-radius: 10px; padding: 30px; margin-top: -50px;">
                                <article>
                                    <h2 class="text-center">KeNHA's Innovation Hub</h2>
                                    <p>Kenhavate is KeNHA's first innovation portal, spearheaded by the Department of Research, Innovation, and Knowledge Management. It's your platform to shape the future of highway innovation in Kenya.</p>
                                </article>
                                <a class="header-animate get-started" style="justify-self: center;" href="auth/user-signin">
                                    <div class="d-flex align-items-center" style="gap: 4px;">
                                        <div>Get Started </div>
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

                            <section class="overview row mt-5">
                                <article class="animate col-sm-6 col-md-4 mb-5 px-3">
                                    <div class="card h-100 text-center" style="background-color: #ffffff; border-radius: 10px;">
                                        <div class="card-body">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/iltqorsz.json"
                                                trigger="loop"
                                                colors="primary:#121331,secondary:#08a88a"
                                                style="width:80px;height:80px">
                                            </lord-icon>
                                            <h5 class="card-title mt-3">Submit Ideas</h5>
                                            <p class="card-text">Share your innovative solutions to improve Kenya's highway infrastructure and management.</p>
                                        </div>
                                    </div>
                                </article>
                                <article class="animate col-sm-6 col-md-4 mb-5 px-3">
                                    <div class="card h-100 text-center" style="background-color: #ffffff; border-radius: 10px;">
                                        <div class="card-body">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/eszyyflr.json"
                                                trigger="loop"
                                                colors="primary:#121331,secondary:#08a88a"
                                                style="width:80px;height:80px">
                                            </lord-icon>
                                            <h5 class="card-title mt-3">Participate in Challenges</h5>
                                            <p class="card-text">Engage in periodic innovation challenges with exciting rewards for groundbreaking ideas.</p>
                                        </div>
                                    </div>
                                </article>
                                <article class="animate col-sm-6 col-md-4 mb-5 px-3">
                                    <div class="card h-100 text-center" style="background-color: #ffffff; border-radius: 10px;">
                                        <div class="card-body">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/nocovwne.json"
                                                trigger="loop"
                                                colors="primary:#121331,secondary:#08a88a"
                                                style="width:80px;height:80px">
                                            </lord-icon>
                                            <h5 class="card-title mt-3">Track Your Progress</h5>
                                            <p class="card-text">View and manage your submissions, check challenge statuses, and monitor your innovation journey.</p>
                                        </div>
                                    </div>
                                </article>
                                <article class="animate col-sm-6 col-md-4 mb-5 px-3">
                                    <div class="card h-100 text-center" style="background-color: #ffffff; border-radius: 10px;">
                                        <div class="card-body">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/uukerzzv.json"
                                                trigger="loop"
                                                colors="primary:#121331,secondary:#08a88a"
                                                style="width:80px;height:80px">
                                            </lord-icon>
                                            <h5 class="card-title mt-3">Collaborate</h5>
                                            <p class="card-text">Connect with fellow innovators, share insights, and build on each other's ideas.</p>
                                        </div>
                                    </div>
                                </article>
                                <article class="animate col-sm-6 col-md-4 mb-5 px-3">
                                    <div class="card h-100 text-center" style="background-color: #ffffff; border-radius: 10px;">
                                        <div class="card-body">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/pithnlch.json"
                                                trigger="loop"
                                                colors="primary:#121331,secondary:#08a88a"
                                                style="width:80px;height:80px">
                                            </lord-icon>
                                            <h5 class="card-title mt-3">Learn and Grow</h5>
                                            <p class="card-text">Access resources, workshops, and mentorship to enhance your innovation skills.</p>
                                        </div>
                                    </div>
                                </article>
                                <article class="animate col-sm-6 col-md-4 mb-5 px-3">
                                    <div class="card h-100 text-center" style="background-color: #ffffff; border-radius: 10px;">
                                        <div class="card-body">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/vcuhguff.json"
                                                trigger="loop"
                                                colors="primary:#121331,secondary:#08a88a"
                                                style="width:80px;height:80px">
                                            </lord-icon>
                                            <h5 class="card-title mt-3">Receive Expert Feedback</h5>
                                            <p class="card-text">Get valuable insights and constructive feedback on your ideas from KeNHA's panel of experts.</p>
                                        </div>
                                    </div>
                                </article>
                            </section>

                            <section class="featured-challenges bg-light py-5 mb-5">
                                <div class="container position-relative">
                                    <h2 class="animate text-center mb-4">Featured Challenges</h2>
                                    <div id="carouselExampleDark" class="carousel carousel-dark slide d-flex flex-row" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <!-- Carousel indicators will be added dynamically -->
                                        </div>
                                        <div class="carousel-inner" style="height: fit-content;">
                                            <!-- Carousel items will be added dynamically -->
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </section>

                            <section class="kenha-stats bg-light py-5 mb-5">
                                <div class="container">
                                    <h2 class="animate text-center mb-5">KeNHAVATE PORTAL Impact</h2>
                                    <div class="row">
                                        <div class="col-md-10 mx-auto">
                                            <p class="animate lead text-justify mb-5">
                                                The KeNHAVATE PORTAL is designed to drive innovation and collaboration. This section of showcases key metrics that demonstrate the platform's influence and engagement.
                                            </p>
                                            <p class="animate lead text-justify">
                                                This section includes:
                                                <ul>
                                                    <li>
                                                        <p class="lead text-justify">
                                                            Total Submissions: This metric tracks the cumulative number of ideas, and challenges that have been submitted through the PORTAL.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="lead text-justify">
                                                            Active Users: This metric represents the number of users who are actively engaged and involved with the PORTAL.
                                                        </p>
                                                    </li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="text-align: justify;">
                                        <div class="animate col-sm-6 mb-4">
                                            <div class="card h-100 text-center">
                                                <div class="card-body">
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/lupuorrc.json"
                                                        trigger="loop"
                                                        colors="primary:#121331,secondary:#08a88a"
                                                        style="width:80px;height:80px">
                                                    </lord-icon>
                                                    <h3 class="stat-number" data-target="<?php echo $totalSubmissions; ?>">0</h3>
                                                    <p class="stat-title">Total Submissions</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="animate col-sm-6 mb-4">
                                            <div class="card h-100 text-center">
                                                <div class="card-body">
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/eszyyflr.json"
                                                        trigger="loop"
                                                        colors="primary:#121331,secondary:#08a88a"
                                                        style="width:80px;height:80px">
                                                    </lord-icon>
                                                    <h3 class="stat-number" data-target="<?php echo $totalUsers; ?>">0</h3>
                                                    <p class="stat-title">Active Users</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="how-it-works bg-light py-5 mb-5">
                                <div class="container">
                                    <h2 class="text-center mb-4">How It Works</h2>
                                    <div class="row text-center">
                                        <div class="animate col-md-4 mb-3">
                                            <div class="card h-100 text-center">
                                                <div class="card-body">
                                                    <i class="fas fa-user-plus fa-3x mb-3"></i>
                                                    <h5>Sign Up</h5>
                                                    <p>Sign up for a KeNHAVATE account and sign in to get started with the innovation portal.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="animate col-md-4 mb-3">
                                            <div class="card h-100 text-center">
                                                <div class="card-body">
                                                    <i class="fas fa-lightbulb fa-3x mb-3"></i>
                                                    <h5>Submit Ideas</h5>
                                                    <p>Contribute your innovative copy-righted ideas and participate in exciting challenges hosted on the platform. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="animate col-md-4 mb-3">
                                            <div class="card h-100 text-center">
                                                <div class="card-body">
                                                    <i class="fas fa-trophy fa-3x mb-3"></i>
                                                    <h5>Win Prizes</h5>
                                                    <p>Get rewarded and recognized for your contributions if your innovations or challenge submissions become viable.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </main>
                        
                        <?php include './resources/footer/guest-footer.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="home-loader w-100 h-100 d-flex justify-content-center align-items-center">
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
        <script src="user/guest/js/home-guest.js"></script>
    </body>
</html>