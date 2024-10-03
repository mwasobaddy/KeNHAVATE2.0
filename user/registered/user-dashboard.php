<?php
    
    include '../../libraries/functions/IncludeAll.php';
    include '../../libraries/functions/DBFetchInfo.php';

    //confirm session is set
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="KeNHAVATE is KeNHA's innovation portal. Submit ideas, participate in challenges, and collaborate to shape Kenya's future highways.">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
    <link rel="stylesheet" href="user/registered/css/user-dashboard.css">
    <title>Dashboard :: | :: KeNHAVATE :: | :: Kenya National Highway Authority :: |:: KeNHA</title>





    <!-- border radius

        are the main border radius utility classes:

        .rounded: Applies a small border-radius (0.25rem).
        .rounded-sm: Applies a smaller border-radius (0.2rem).
        .rounded-lg: Applies a larger border-radius (0.3rem).
        .rounded-pill: Applies a fully rounded border radius (50%).
        .rounded-circle: Applies a circular border radius (for square elements).
        .rounded-0: Removes the border radius (no rounding).

    -->
        
</head>
<body>
    <div class="home-content container-fluid d-flex justify-content-center p-0 m-0">
        <div class="row w-100">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-lg-3 d-flex flex-column sidebar">
                <!-- Toggle button for small screens -->   
                <div class="px-4 py-3 mb-3 sticky-top bg-light w-100 d-flex justify-content-center" style="z-index: 1; box-shadow: 0px 7px 28px -20px #929292; ">
                    <img class="img-fluid" src="image-library-KeNHA/KeNHA-Logo.webp" alt="" style="width: 165px;">

                    <button id="sidebarToggle1" class="d-flex d-lg-none toggle-btn position-absolute align-self-end pe-2" style="outline: none; border: none; box-shadow: none; background-color: transparent;  right: 0; top: 30%;">
                        <lottie-player
                            src="image-library-KeNHA/lottieflow-menu-nav-11-6-000000-easey.json" 
                            background="transparent" 
                            speed="1" 
                            style="width: 30px; height: 30px;" 
                            loop 
                            autoplay>
                        </lottie-player>
                    </button> 
                </div>
                <div class="nav-listed px-4 d-flex align-items-center flex-column flex-fill">
                    <article class="mb-5 d-flex flex-column align-items-center">
                        <div class="mb-1 overflow-hidden rounded-circle" style="width: 100px; height: 100px;">
                            <img src="https://via.placeholder.com/100" alt="">
                        </div>
                        <h5 class="mb-1">John Doe</h5>
                        <p class="mb-1">Role: user <i class="bi bi-circle-fill text-success"></i></p>
                        <p class="px-3 rounded-pill" style="border: 1px solid #00000026;">Edit</p>
                    </article>
                    <article class="mb-5">
                        <ul class="nav flex-column">
                            <li class="nav-header w-100 mb-2 d-flex justify-content-center align-items-center">
                                <a href="#" class="nav-link px-4 py-2 w-100 d-flex position-relative active"><i class="bi bi-house-door"></i>&nbsp;Dashboard</a>
                            </li>
                            
                            <li class="nav-header w-100 mb-2 d-flex justify-content-center align-items-center">
                                <a href="#" class="nav-link px-4 py-2 w-100 d-flex position-relative inactive"><i class="bi bi-lightbulb"></i>&nbsp;Share&nbsp;idea</a>
                            </li>

                            <li class="nav-header w-100 mb-2 d-flex justify-content-center align-items-center">
                                <a href="#" class="nav-link px-4 py-2 w-100 d-flex position-relative inactive"><i class="bi bi-eye"></i>&nbsp;Idea&nbsp;gallery</a>
                            </li>

                            <li class="nav-header w-100 mb-2 d-flex justify-content-center align-items-center">
                                <a href="#" class="nav-link px-4 py-2 w-100 d-flex position-relative inactive"><i class="bi bi-trophy"></i>&nbsp;Challenge&nbsp;arena</a>
                            </li>

                            <li class="nav-header w-100 mb-2 d-flex justify-content-center align-items-center">
                                <a href="#" class="nav-link px-4 py-2 w-100 d-flex position-relative inactive"><i class="bi bi-eye"></i>&nbsp;Challenge&nbsp;gallery</a>
                            </li>
                            
                            <li class="nav-header w-100 d-flex justify-content-center align-items-center">
                                <a href="#" class="nav-link px-4 py-2 w-100 d-flex position-relative inactive"><i class="bi bi-cup"></i>&nbsp;Leadershipboard</a>
                            </li>
                        </ul>
                    </article>
                </div>
                <article class="px-4 py-3 d-flex justify-content-center sticky-bottom bg-light w-100" style="z-index: 0; box-shadow: 0px -14px 28px -20px #929292;">
                    <a href=""><i class="bi bi-box-arrow-in-right"></i> logout</a>
                </article>
            </nav>

            <!-- Main content -->
            <main class="col-lg-9 main-content p-0">
                <nav class="sticky-top d-flex px-4 py-3 mb-2" style="z-index: 1; background-color: var(--white-color);">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <!-- Toggle button for small screens -->
                        <button id="sidebarToggle2" class="d-lg-none toggle-btn" style="outline: none; border: none; box-shadow: none; background-color: transparent;">
                            <lottie-player
                                src="image-library-KeNHA/lottieflow-menu-nav-03-000000-easey.json" 
                                background="transparent" 
                                speed="1" 
                                style="width: 30px; height: 30px;" 
                                loop 
                                autoplay>
                            </lottie-player>
                        </button>
                        <h4 class="mb-0">Dashboard</h4>
                        <i class="bi bi-bell"></i>
                    </div>
                </nav>
                
                <div class="px-4">
                    <div class="mb-4 d-flex justify-content-center">
                        <form id="searchForm" action="#" method="GET" class="px-3 d-flex align-items-center justify-content-center rounded" style="gap: 10px; border: 1px solid var(--bs-gray); width: fit-content;">
                            <i class="bi bi-search text-light"></i> 
                            <input class="p-2" type="search" name="" id="" placeholder="search here...">
                        </form>
                    </div>
                    <div class="mb-4">
                        <div class="card h-100">
                            <div class="card-body d-none">
                                <h5 class="card-title d-flex flex-row justify-content-center text-danger w-100" style="gap: 10px;">
                                    <i class="bi bi-exclamation-circle-fill"></i> Polite Notice!
                                </h5>
                                <p class="card-text">
                                    1. Submissions found to be plagiarized will result in the permanent suspension of your account on this platform.
                                </p>
                                <p class="card-text">
                                    2. KeNHA disclaims any responsibility for the submission of plagiarized content or instances of copyright infringement, including potential legal actions. Each individual is solely accountable for their submissions and any resulting consequences.
                                </p>
                                <p class="card-text">
                                    3. We strongly advise you to secure copyright for your submissions through the Kenya Industrial Property Institute (KIPI) to mitigate any potential risks.
                                </p>
                                <p class="card-text">
                                    4. Please be aware that maintaining the integrity of your work is paramount. Engage in thorough research and proper citation practices to ensure originality and avoid any infringements on intellectual property rights.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card card-yellow h-100">
                                <div class="card-body">
                                    <h5 class="card-title d-flex flex-row" style="gap: 10px;">
                                        <lottie-player
                                            src="image-library-KeNHA/lottieflow-radio-07-000000-easey.json" 
                                            background="transparent" 
                                            speed="1" 
                                            style="width: 20px; height: 20px;" 
                                            loop 
                                            autoplay>
                                        </lottie-player> Your Submissions
                                    </h5>
                                    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 150px;">
                                        <p><u><strong>Total</strong></u></p>
                                        <h1 class="display-4">12</h1>
                                    </div>
                                    <p class="card-text">Ideas: 78%</p>
                                    <p class="card-text">Challenges: 22%</p>
                                </div>
                            </div>
                        </div>

                        <!-- Full Report Card -->
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title d-flex flex-row" style="gap: 10px;">
                                        <lottie-player
                                            src="image-library-KeNHA/lottieflow-radio-07-000000-easey.json" 
                                            background="transparent" 
                                            speed="1" 
                                            style="width: 20px; height: 20px;" 
                                            loop 
                                            autoplay>
                                        </lottie-player> Important Information
                                    </h5>
                                    <p class="card-text text-danger">Kindly take time to go click and go through each of the following:</p>
                                    <ul>
                                        <li><a href="">1. Idea Submissions Guidelines</a></li>
                                        <li><a href="">2. Challenge Submissions Guidelines</a></li>
                                        <li><a href="">3. Terms & Conditions</a></li>
                                        <li><a href="">4. Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Bounce Rate Card -->
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Bounce Rate</h5>
                                    <div class="btn-group mt-2" role="group">
                                        <button type="button" class="btn btn-secondary">Mon</button>
                                        <button type="button" class="btn btn-warning">Tue</button>
                                        <button type="button" class="btn btn-secondary">Wed</button>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center mt-4" style="height: 100px;">
                                        <h1 class="display-4">23%</h1>
                                    </div>
                                    <p class="card-text text-danger">-10% Since last day</p>
                                </div>
                            </div>
                        </div>

                        <!-- ROI Card -->
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card card-gray h-100">
                                <div class="card-body">
                                    <h5 class="card-title">ROI</h5>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 150px;">
                                        <h1 class="display-4">283%</h1>
                                    </div>
                                    <p class="card-text">Return On Investment</p>
                                </div>
                            </div>
                        </div>

                        <!-- Web Score Card -->
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100">
                                <img src="https://via.placeholder.com/320" class="card-img-top" alt="Web Score with AI">
                                <div class="card-body">
                                    <h5 class="card-title">Web Score with AI</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Customer Churn Rate Card -->
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Customer Churn Rate</h5>
                                    <div id="churnRateChart" style="height: 200px;"></div>
                                </div>
                            </div>
                        </div>

                        
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Idea Improvement Tips</h5>
                    </div>
                    <div class="card-body tip-card" id="tipCard">
                        <h5 class="card-title" id="tipTitle">Tip Title</h5>
                        <p class="card-text" id="tipContent">Tip content goes here.</p>
                    </div>
                </div>

                        

                        <!-- ROI Card -->
                        <div class="col-12 mt-md-5 mb-4">
                            <div class="card card-beige h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Idea submission process</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="img-fluid w-100" src="image-library-KeNHA/idea-review-process.png" alt="">
                                        </div>
                                        <div class="col-md-6">

                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    
                                                    <h5 class="card-title">1. Idea Generation</h5>
                                                    <p class="card-text">This initial phase involves brainstorming and cultivating a diverse array of creative ideas. The objective is to explore various potential solutions to problems or identify opportunities for improvement. Idea generation can be enhanced through brainstorming sessions, workshops, online collaboration tools, or individual reflection. The focus is on encouraging out-of-the-box thinking and incorporating a wide range of perspectives.</p>
                                                </div>
                                                <div class="swiper-slide">
                                                    
                                                    <h5 class="card-title">2. Idea evaluation</h5>
                                                    <p class="card-text">During this phase, the generated ideas are rigorously assessed against predefined criteria. This evaluation process helps identify the most feasible and effective ideas that align with our goals and resources. Various methods can be employed, such as SWOT analysis (Strengths, Weaknesses, Opportunities, Threats), cost-benefit analysis, risk assessment, and alignment with strategic objectives. The aim is to narrow down the pool to those ideas with the highest potential for success</p>
                                                </div>
                                                <div class="swiper-slide">
                                                    
                                                    <h5 class="card-title">3. Idea Implementation</h5>
                                                    <p class="card-text">Once the most promising ideas are selected, the implementation phase commences. This stage involves transforming the chosen ideas into tangible projects or initiatives. Key activities include planning, resource allocation, assigning responsibilities, setting timelines, and defining key performance indicators (KPIs) to measure progress and success. Effective implementation may require collaboration across various departments within KeNHA.</p>
                                                </div>
                                                <div class="swiper-slide">
                                                    
                                                    <h5 class="card-title">4. Reward for Approved Ideas</h5>
                                                    <p class="card-text">To encourage active participation in the innovation process, KeNHA will offer rewards for approved ideas. These rewards may take various forms, such as monetary bonuses, recognition, promotions, or additional benefits. Such incentives not only acknowledge the contributions of individuals who provide valuable ideas but also foster a culture of innovation and encourage continuous engagement.</p>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next d-none"></div>
                                            <div class="swiper-button-prev d-none"></div>
                                            <div class="swiper-pagination"></div>
                                            <div class="autoplay-progress">
                                            <svg viewBox="0 0 48 48">
                                                <circle cx="24" cy="24" r="20"></circle>
                                            </svg>
                                            <span></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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
    <script src="https://cdn.jsdelivr.net/npm/@lottiefiles/lottie-player@latest"></script>

    <!-- jQuery (required for your $(document).ready function) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom js -->
    <script src="user/registered/js/user-dashboard.js"></script>
    
</body>
</html>