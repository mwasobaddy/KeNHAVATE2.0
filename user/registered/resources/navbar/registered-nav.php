

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
    <a href="log-out"><i class="bi bi-box-arrow-in-right"></i> logout</a>
</article>