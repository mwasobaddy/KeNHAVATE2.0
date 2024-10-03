

<div class="nav-topest d-flex justify-content-center align-items-center">
                            <h2 data-text="KeNHAVATE...">KeNHAVATE...</h2>
                        </div>

                        <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light d-flex flex-column" style="box-shadow: 0 0 40px rgb(0 0 0 / 45%);">
                            <div class="container bg-light m-0" style="min-width: 100%;">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" style="border: none;">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div style="width: 165px;">
                                    <img class="img-fluid" src="image-library-KeNHA/KeNHA-Logo.webp" alt="">
                                </div>
                                <div class="d-flex d-lg-none" style="padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);">
                                    <i class="bi bi-search" id="searchToggleMobile"></i>
                                </div>
                                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item d-flex align-items-center">
                                            <a class="nav-link" href="user-guest" id="home">
                                                <i class="bi bi-house-door-fill bi-icon"></i>
                                                Home
                                            </a>
                                        </li>
                                        <hr class="dropdown-divider" style="border-top: var(--bs-border-width) solid; opacity: .25; color: black;">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" id="innovationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-lightbulb-fill bi-icon"></i>
                                                Innovations
                                            </a>
                                            <ul class="dropdown-menu w-lg-100 text-start text-lg-center" aria-labelledby="innovationDropdown">
                                                <a class="dropdown-item" href="innovation-areas" id="innovationArea">Innovation Areas</a>
                                                <hr class="dropdown-divider" style="border-top: var(--bs-border-width) solid; opacity: .25; color: black;">
                                                <a class="dropdown-item" href="innovation-challenges" id="innovationChallenges">Periodic Challenges</a>
                                            </ul>
                                        </li>
                                        <hr class="dropdown-divider" style="border-top: var(--bs-border-width) solid; opacity: .25; color: black;">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle"id="helpDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-question-circle-fill bi-icon"></i>
                                                Help
                                            </a>
                                            <ul class="dropdown-menu w-lg-100 text-start text-lg-center" aria-labelledby="helpDropdown">
                                                <a class="dropdown-item" href="faq" id="faq">FAQs</a>
                                                <hr class="dropdown-divider" style="border-top: var(--bs-border-width) solid; opacity: .25; color: black;">
                                                <a class="dropdown-item" href="who-we-are" id="whoWeAre">Who We Are</a>
                                                <hr class="dropdown-divider" style="border-top: var(--bs-border-width) solid; opacity: .25; color: black;">
                                                <a class="dropdown-item" href="chat-us" id="chatUs">Chat Us</a>
                                            </ul>
                                        </li>
                                        <hr class="dropdown-divider" style="border-top: var(--bs-border-width) solid; opacity: .25; color: black;">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" id="legalDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-file-earmark-text-fill bi-icon"></i>
                                                Legal
                                            </a>
                                            <ul class="dropdown-menu w-lg-100 text-start text-lg-center" aria-labelledby="legalDropdown">
                                                <a class="dropdown-item" href="terms-and-conditions" id="termsAndConditions">Terms & Conditions</a>
                                                <hr class="dropdown-divider" style="border-top: var(--bs-border-width) solid; opacity: .25; color: black;">
                                                <a class="dropdown-item" href="privacy-policy" id="privacyPolicy">Policy</a>
                                            </ul>
                                        </li>
                                        <hr class="dropdown-divider" style="border-top: var(--bs-border-width) solid; opacity: .25; color: black;">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-person-fill bi-icon"></i>
                                                Account
                                            </a>
                                            <ul class="dropdown-menu px-lg-3" aria-labelledby="accountDropdown">
                                                <a class="sign-in-button dropdown-item" href="auth/user-signin">Sign In</a>
                                                <hr class="dropdown-divider" style="border-top: var(--bs-border-width) solid; opacity: .25; color: black;">
                                                <a class="dropdown-item" href="auth/user-signup">Register</a>
                                            </ul>
                                        </li>
                                        <hr class="dropdown-divider" style="border-top: var(--bs-border-width) solid; opacity: .25; color: black;">
                                        <li class="nav-item d-flex d-lg-none align-items-center justify-content-center">
                                            <a class="sign-in-button bg-yellow nav-link w-100 text-center" href="auth/user-signin">
                                                sign in
                                                <i class="bi bi-box-arrow-in-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-none d-lg-flex" style="padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);">
                                    <i class="bi bi-search" id="searchToggleDesktop"></i>
                                </div>
                            </div>
                            <!-- Search form that toggles visibility -->
                            <div id="searchForm" class="search-form bg-light w-100 invisable" style="padding-right: calc(var(--bs-gutter-x)* .5); padding-left: calc(var(--bs-gutter-x)* .5);">
                                <form class="d-flex overflow-hidden" style="border: 1px solid #6c757d; border-radius: 50px;" role="search">
                                    <input class="form-control me-2 ps-3" type="search" placeholder="Search" aria-label="Search" aria-describedby="inputGroup-sizing-sm" style="border: none; box-shadow: none; outline: none;">
                                    <button class="btn btn-secondary" type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                        </nav>