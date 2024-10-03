
<?php
    require_once '../../../libraries/functions/IncludeAll.php';
    require_once '../../../libraries/functions/DBFetchInfo.php';

    //uunset session-id['doubleEncryptedSessionId']

    unset($_SESSION['doubleEncryptedSessionId']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sign up for a KeNHAVATE account to submit ideas, participate in challenges, and collaborate to shape Kenya's future highways.">
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
        <link rel="stylesheet" href="user/guest/css/signup.css">
        <title>Sign Up - KeNHAVATE - Kenya National Highway Authority - KeNHA</title>
    </head>
    <body class="d-flex justify-content-center">
        

        <main class="d-flex align-items-center">
            <section class="w-100">
                <div class="container px-4">
                    <div class="signup-content main-row row">
                        <div class="col-md-6 py-5 position-relative overflow-hidden signup-img-col bg-Beige">
                            <div class="yellow-circle">
                                <div class="position-absolute" style="background-color: #fff200; height: 100%; width: 200%; border-radius: 50%; z-index: 1; top: -50%; left: -50%;"></div>
                            </div>
                            <div class="position-relative" style="z-index: 1;">
                                <article class="d-grid">
                                    <h5 class="text-center">Hi There!</h5>
                                    <p>
                                        Sign up for an account to become part 
                                        of our community. It's quick, easy, and 
                                        opens up a world of opportunities. If 
                                        you need any assistance during the sign-up 
                                        process, our support team is here to help!
                                    </p>
                                    <a class="btn px-4 bg-black text-white" href="auth/user-signin" style="border-radius: 50px; width: fit-content; justify-self: center;"><i class="bi bi-box-arrow-in-right"></i> sign in</a>
                                </article>
                            </div>
                            <article class="lottie-holder position-relative" style="z-index: 1;">
                                <lottie-player src="https://lottie.host/ed206907-6eed-4d08-957e-16f10dce9e4b/pTyS1QJW66.json"
                                    speed="1"
                                    loop
                                    autoplay
                                    direction="1"
                                    mode="normal">
                                </lottie-player>
                            </article>
                        </div>
                        <div class="col-md-6 py-md-5 d-flex flex-column justify-content-center signup-content-col">
                            <article class="d-flex justify-content-center mb-4">
                                <lord-icon
                                    src="https://cdn.lordicon.com/mebvgwrs.json"
                                    trigger="loop"
                                    stroke="bold"
                                    colors="primary:#000000,secondary:#794628,tertiary:#e83a30,quaternary:#000000,quinary:#ebe6ef"
                                    style="width:100px;height:100px; border: 1px solid black; border-radius: 50%; background-color: #fff200; border-bottom-right-radius: 0px; box-shadow: 0 8px 25px #7c7c7c;">
                                </lord-icon>
                            </article>
                            <div>
                                <form class="row position-relative g-3 justify-content-center overflow-hidden needs-validation" novalidate id="signupForm">

                                    <!-- Error and Success Messages -->
                                    <div id="errorMsg" class="col-md-11 text-white text-center mt-3 py-2 errorMsg" style="background-color: #dc3545; border-radius: 15px"></div>
                                    <div id="successMsg" class="col-md-11 text-white text-center mt-3 py-2 successMsg" style="background-color: #198754; border-radius: 15px"></div>

                                    <!-- Personal info Field -->
                                    <div class="col-md-11 px-3 mt-4 w-100 personal-section active">
                                        <h1 class="text-center justify-self-center mb-3">Sign Up</h1>
                                        <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <div class="d-flex ps-3 align-items-center overflow-hidden" style="border-radius: 50px; border: 1px solid black; background-color: #d7d7d7;">
                                                    <i class="bi bi-person pe-2"></i>
                                                    <input type="text" class="form-control" id="first-name" placeholder="Enter your first name" required style="outline: none; box-shadow: none; border: none; border-radius: 0;">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="d-flex ps-3 align-items-center overflow-hidden" style="border-radius: 50px; border: 1px solid black; background-color: #d7d7d7;">
                                                    <i class="bi bi-person-bounding-box pe-2"></i>
                                                    <input type="tetxt" class="form-control" id="other-names" placeholder="Enter your other-names" required style="outline: none; box-shadow: none; border: none; border-radius: 0;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3 ps-3 align-items-center overflow-hidden" style="border-radius: 50px; border: 1px solid black; background-color: #d7d7d7;">
                                            <i class="bi bi-envelope-at pe-2"></i>
                                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required style="outline: none; box-shadow: none; border: none; border-radius: 0;">
                                        </div>
                                        <div class="d-flex mb-3 ps-3 align-items-center overflow-hidden" style="border-radius: 50px; border: 1px solid black; background-color: #d7d7d7;">
                                            <i class="bi bi-telephone pe-2"></i>
                                            <input type="number" class="form-control" id="mobile-number" placeholder="Enter your mobile number 07..." required style="outline: none; box-shadow: none; border: none; border-radius: 0;">
                                        </div>
                                        <div class="d-flex ps-3 align-items-center overflow-hidden" style="border-radius: 50px; border: 1px solid black; background-color: #d7d7d7;">
                                            <i class="bi bi-gender-ambiguous pe-2"></i> <!-- Change icon to a gender-related one -->
                                            <select class="form-control" id="gender" required style="outline: none; box-shadow: none; border: none; border-radius: 0;">
                                                <option value="" disabled selected>Select your gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="my-4 w-100">
                                            <button class="send-OTP btn w-100 bg-yellow" type="button" id="submitPersonalButton" style="border-radius: 50px; border: 1px solid black;"><i class="bi bi-box-arrow-in-right"></i> sign up</button>
                                        </div>
                                    </div>

                                    <!-- professional info Fields -->
                                    <div class="col-md-11 px-3 mt-4 w-100 professional-section">
                                        <h1 class="text-center justify-self-center mb-3">Work Information</h1>

                                        <div class="d-flex mb-3 ps-3 align-items-center overflow-hidden" style="border-radius: 50px; border: 1px solid black; background-color: #d7d7d7;">
                                            <i class="bi-person-vcard pe-2"></i>
                                            <input type="text" class="form-control" id="designation" placeholder="Enter your designation." required style="outline: none; box-shadow: none; border: none; border-radius: 0;">
                                        </div>

                                        <div class="d-flex mb-3 ps-3 align-items-center overflow-hidden" style="border-radius: 50px; border: 1px solid black; background-color: #d7d7d7;">
                                            <i class="bi bi-building pe-2"></i> <!-- Icon for directorate -->
                                            <select class="form-control" id="directorate" required style="outline: none; box-shadow: none; border: none; border-radius: 0;">
                                                <option value="" disabled selected>Select your directorate</option>
                                                <!-- Directorate With Departments -->
                                                <option value="PRC">Planning, Research & Compliance</option>
                                                <option value="HDS">Highway Design & Safety</option>
                                                <option value="Development">Development</option>
                                                <option value="Maintenance">Maintenance</option>
                                                <option value="PPP">Public Private Partnerships</option>
                                                <option value="CS">Corporate Services</option>
                                                <!-- Directorate Without Departments -->
                                                <option value="CS&LS">Corporation Secretary & Legal Services</option>
                                                <option value="AS">Audit Services</option>
                                            </select>
                                        </div>

                                        <div class="d-flex mb-3 ps-3 align-items-center overflow-hidden" style="border-radius: 50px; border: 1px solid black; background-color: #d7d7d7;">
                                            <i class="bi bi-building pe-2"></i> <!-- Icon for department -->
                                            <select class="form-control" id="department" required style="outline: none; box-shadow: none; border: none; border-radius: 0;">
                                                <option value="" disabled selected>Select your department</option>
                                                <!-- Options will be populated dynamically -->
                                            </select>
                                        </div>


                                        <!-- Submit Button -->
                                        <div class="my-4 w-100 d-flex flex-row justify-content-between">
                                            <button class="back-to-email btn bg-black text-white" type="button" id="backPersonalDetails" style="border-radius: 50px; border: 1px solid #fff200; width: 40%;">back</button>
                                            <button class="sign-in btn bg-yellow" type="button" id="submitProfessionalButton" style="border-radius: 50px; border: 1px solid black; width: 40%;"><i class="bi bi-box-arrow-in-right"></i> sign up</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="signup-loader w-100 h-100 d-flex justify-content-center align-items-center">
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
                </div>
            </section>
        </main>
        
        <!-- Bootstrap 5 JS (Optional, only if you need Bootstrap JS functionality) -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

        <!-- LordIcon js -->
        <script src="https://cdn.lordicon.com/lordicon.js"></script>

        <!-- LottieFlow animated Icon js -->
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

        <!-- jQuery (required for your $(document).ready function) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="user/guest/js/signup.js"></script>
    </body>
</html>