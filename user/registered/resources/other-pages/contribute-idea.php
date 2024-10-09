<?php
    
    include '../../../../libraries/functions/IncludeAll.php';
    include '../../../../libraries/functions/DBFetchInfo.php';

    //confirm session is set
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content="Welcome to the KeNHAVATE User Dashboard. Manage your ideas, track submissions, and engage with challenges to shape Kenya's highways. Collaborate with others, view your challenge rankings, and showcase your awards for outstanding contributions.">
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
            <nav id="sidebar" class="col-lg-3 d-flex flex-column sidebar">
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
                        
                        <?php
                            // Get the current URL path
                            $currentUrl = $_SERVER['REQUEST_URI'];

                            // Determine which menu item should be active
                            $dashboardActive = strpos($currentUrl, 'user-dashboard') !== false ? 'active' : 'inactive';
                            $contributeIdeaActive = strpos($currentUrl, 'contribute-idea') !== false ? 'active' : 'inactive';
                            $yourIdeasActive = strpos($currentUrl, 'your-ideas') !== false ? 'active' : 'inactive';
                            $requestCollabActive = strpos($currentUrl, 'request-collaborations') !== false ? 'active' : 'inactive';
                            $collabInboxActive = strpos($currentUrl, 'collaboration-inbox') !== false ? 'active' : 'inactive';
                            $challengeArenaActive = strpos($currentUrl, 'challenge-arena') !== false ? 'active' : 'inactive';
                            $challengeCollectionActive = strpos($currentUrl, 'challenge-collection') !== false ? 'active' : 'inactive';
                            $leadershipboardActive = strpos($currentUrl, 'leadership-board') !== false ? 'active' : 'inactive';
                        ?>

                        <ul class="nav flex-column">
                            <li class="nav-header w-100 mb-2 d-flex justify-content-center align-items-center">
                                <a href="user-dashboard" class="nav-link px-4 py-2 w-100 d-flex position-relative <?php echo $dashboardActive; ?>">
                                    <i class="bi bi-house-door"></i>&nbsp;Dashboard
                                </a>
                            </li>
                            <li class="nav-header w-100 mb-2 d-flex justify-content-center align-items-center">
                                <a href="contribute-idea" class="nav-link px-4 py-2 w-100 d-flex position-relative <?php echo $contributeIdeaActive; ?>">
                                    <i class="bi bi-lightbulb"></i>&nbsp;Contribute&nbsp;Idea
                                </a>
                            </li>
                            <li class="nav-header w-100 mb-2 d-flex justify-content-center align-items-center">
                                <a href="your-ideas" class="nav-link px-4 py-2 w-100 d-flex position-relative <?php echo $yourIdeasActive; ?>">
                                    <i class="bi bi-lightning"></i>&nbsp;Your&nbsp;Ideas
                                </a>
                            </li>
                            <li class="nav-header w-100 mb-2 d-flex justify-content-center align-items-center">
                                <a href="request-collaborations" class="nav-link px-4 py-2 w-100 d-flex position-relative <?php echo $requestCollabActive; ?>">
                                    <i class="bi bi-person-plus"></i>&nbsp;Request&nbsp;Collaborations
                                </a>
                            </li>
                            <li class="nav-header w-100 mb-2 d-flex justify-content-center align-items-center">
                                <a href="collaboration-inbox" class="nav-link px-4 py-2 w-100 d-flex position-relative <?php echo $collabInboxActive; ?>">
                                    <i class="bi bi-chat-square-dots"></i>&nbsp;Collaboration&nbsp;Inbox
                                </a>
                            </li>
                            <li class="nav-header w-100 mb-2 d-flex justify-content-center align-items-center">
                                <a href="challenge-arena" class="nav-link px-4 py-2 w-100 d-flex position-relative <?php echo $challengeArenaActive; ?>">
                                    <i class="bi bi-trophy"></i>&nbsp;Challenge&nbsp;Arena
                                </a>
                            </li>
                            <li class="nav-header w-100 mb-2 d-flex justify-content-center align-items-center">
                                <a href="challenge-collection" class="nav-link px-4 py-2 w-100 d-flex position-relative <?php echo $challengeCollectionActive; ?>">
                                    <i class="bi bi-puzzle"></i>&nbsp;Challenge&nbsp;Collection
                                </a>
                            </li>
                            <li class="nav-header w-100 d-flex justify-content-center align-items-center">
                                <a href="leaderhip-board" class="nav-link px-4 py-2 w-100 d-flex position-relative <?php echo $leadershipboardActive; ?>">
                                    <i class="bi bi-cup"></i>&nbsp;Leadership&nbsp;Board
                                </a>
                            </li>
                        </ul>

                    </article>
                </div>
                <article class="px-4 py-3 d-flex justify-content-center sticky-bottom bg-light w-100" style="z-index: 0; box-shadow: 0px -14px 28px -20px #929292;">
                    <a href=""><i class="bi bi-box-arrow-in-right"></i> logout</a>
                </article>
            </nav>
            
            <main class="col-lg-9 main-content p-0">
                <nav class="sticky-top d-flex px-4 py-3 mb-2" style="z-index: 1; background-color: var(--white-color);">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        
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
                        <h4 class="mb-0">Contribute Idea</h4>
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
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card card-beige h-100">
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
                                        </lottie-player> Date
                                    </h5>
                                    <?php
                                        // Get the current day of the week (1 = Monday, 2 = Tuesday, ..., 7 = Sunday)
                                        $currentDay = date('N'); // 1 for Monday to 7 for Sunday

                                        // Array of day names
                                        $days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

                                        // Determine previous and next days
                                        $previousDay = ($currentDay - 1 < 1) ? 7 : $currentDay - 1;
                                        $nextDay = ($currentDay + 1 > 7) ? 1 : $currentDay + 1;

                                        // Button output
                                        echo '<div class="btn-group mt-2" role="group">';
                                            foreach ([$previousDay, $currentDay, $nextDay] as $day) {
                                                $btnClass = ($day == $currentDay) ? 'btn-warning' : 'btn-secondary';
                                                echo "<button type='button' class='btn $btnClass'>{$days[$day - 1]}</button>";
                                            }
                                        echo '</div>';
                                    ?>

                                    <div class="d-flex justify-content-center align-items-center my-4">
                                        <h5 class="">
                                        <?php
                                            // Get the current date
                                            $formattedDate = date('j F, Y'); // 'j' for day without leading zeros, 'F' for full month name, 'Y' for 4-digit year

                                            // Echo the formatted date
                                            echo $formattedDate;
                                        ?>
                                        </h5>
                                    </div>
                                    <p>Last day active: <span class="card-text text-danger">6 October, 2023</span></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card card-beige h-100">
                                <div class="card-body">
                                    <h5 class="card-title d-flex flex-row mb-3" style="gap: 10px;">
                                        <lottie-player
                                            src="image-library-KeNHA/lottieflow-radio-07-000000-easey.json" 
                                            background="transparent" 
                                            speed="1" 
                                            style="width: 20px; height: 20px;" 
                                            loop 
                                            autoplay>
                                        </lottie-player> Current Challenge Spotlight
                                    </h5>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <h6 style="text-decoration: underline;" id="latestChallengeTitle">PowerPoint Presentation Template Design Challenge</h6>
                                    </div>
                                    <p class="card-text truncate-6" id="latestChallengeDescription">
                                        The Planning, Research and Compliance Directorate (PRC) is excited to launch our staff Innovation challenge initiative to encourage staff to be innovative and knowledge sharers. 
                                        The Directorate is posting this challenge to provide an opportunity for all staff to showcase their creativity through designing dynamic presentation templates. 
                                        To participate in this challenge, all you need to do is login to the Innovation Management Portal (KeNHAVATE), follow the guidelines provided and submit your solution to the challenge question by the stated deadline (21st February, 2024).
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="btn btn-attempt">Attempt <i class="bi bi-send-check"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card card-yellow h-100">
                                <div class="card-body position-relative">
                                    <h5 class="card-title d-flex flex-row mb-3" style="gap: 10px;">
                                        <lottie-player
                                            src="image-library-KeNHA/lottieflow-radio-07-000000-easey.json" 
                                            background="transparent" 
                                            speed="1" 
                                            style="width: 20px; height: 20px;" 
                                            loop 
                                            autoplay>
                                        </lottie-player> Idea Improvement Tips
                                    </h5>
                                    <div class="position-absolute bg-danger rounded-pill px-2 py-1" style="transform: rotate(15deg); top: -5px; right: -10px;">
                                        <i class="bi bi-stars text-white">new</i>
                                    </div>
                                    <div class="tip-card" id="tipCard">
                                        <h6 style="text-decoration: underline;" id="tipTitle"></h6>
                                        <p class="card-text" id="tipContent"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card card-beige h-100">
                                <div class="card-body position-relative">
                                    <h5 class="card-title d-flex flex-row mb-3" style="gap: 10px;">
                                        <lottie-player
                                            src="image-library-KeNHA/lottieflow-radio-07-000000-easey.json" 
                                            background="transparent" 
                                            speed="1" 
                                            style="width: 20px; height: 20px;" 
                                            loop 
                                            autoplay>
                                        </lottie-player> Quick Tips
                                    </h5>
                                    <div class="position-absolute bg-danger rounded-pill px-2 py-1" style="transform: rotate(15deg); top: -5px; right: -10px;">
                                        <i class="bi bi-stars text-white">new</i>
                                    </div>
                                    <p class="card-text">
                                        <ul>
                                            <li>Each challenge comes with its own unique rewards and submission guidelines, so be sure to review them carefully.</li>
                                            <li>By sharing your idea publicly, you may attract collaboration requests from interested parties. You can also reach out with collaboration requests for publicly shared ideas.</li>
                                        </ul>
                                    </p>
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
    <script src="user/registered/js/contribute-idea.js"></script>
    
</body>
</html>