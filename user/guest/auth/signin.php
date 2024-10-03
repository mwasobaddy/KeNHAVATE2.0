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
        <meta name="description" content="Sign in to your KeNHAVATE account to submit ideas, participate in challenges, and collaborate to shape Kenya's future highways.">
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
        <!-- LottieFly Script -->
        <script src="https://lottie.host/ed206907-6eed-4d08-957e-16f10dce9e4b/pTyS1QJW66.json"></script>
        <!-- Custom CSS -->
        <link rel="stylesheet" href="user/guest//css/signin.css">
        <title>Sign In - KeNHAVATE - Kenya National Highway Authority - KeNHA</title>
    </head>
    <body class="d-flex justify-content-center">
        

        <main class="d-flex align-items-center">
            <section class="w-100">
                <div class="container px-4">
                    <div class="signin-content main-row row">
                        <div class="col-md-6 py-5 position-relative overflow-hidden signin-img-col bg-Beige">
                            <div class="yellow-circle">
                                <div class="position-absolute" style="background-color: #fff200; height: 100%; width: 200%; border-radius: 50%; z-index: 1; top: -50%; left: -50%;"></div>
                            </div>
                            <div class="position-relative" style="z-index: 1;">
                                <article class="d-grid">
                                    <h5 class="text-center">Welcome Back!</h5>
                                    <p>
                                        We’re excited to have you back! Please 
                                        sign in to submit your ideas, collaborate, 
                                        attempt exciting challenges, and track 
                                        your progress. If you need any assistance, 
                                        our support team is here to help!
                                    </p>
                                    <a class="btn px-4 bg-black text-white" href="auth/user-signup" style="border-radius: 50px; width: fit-content; justify-self: center;"><i class="bi bi-box-arrow-in-right"></i> sign up</a>
                                </article>
                            </div>
                            <article class="lottie-holder position-relative" style="z-index: 1;">
                                <lottie-player src="https://lottie.host/433f3c2f-edf9-492f-aec3-6723a342cee2/5e5lrB3xwI.json"
                                    speed="1"
                                    loop
                                    autoplay
                                    direction="1"
                                    mode="normal">
                                </lottie-player>
                            </article>
                        </div>
                        <div class="col-md-6 py-md-5 d-flex flex-column justify-content-center signin-content-col">
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
                                <form class="row position-relative g-3 justify-content-center overflow-hidden needs-validation" novalidate id="signinForm">

                                    <!-- Error and Success Messages -->
                                    <div id="errorMsg" class="col-md-11 text-white text-center mt-3 py-2 errorMsg" style="background-color: #dc3545; border-radius: 15px"></div>
                                    <div id="successMsg" class="col-md-11 text-white text-center mt-3 py-2 successMsg" style="background-color: #198754; border-radius: 15px"></div>

                                    <!-- Email Input Field -->
                                    <div class="col-md-11 px-3 mt-4 w-100 email-section active">
                                        <h1 class="text-center justify-self-center mb-3">Sign In</h1>
                                        <div class="d-flex ps-3 align-items-center overflow-hidden" style="border-radius: 50px; border: 1px solid black; background-color: #d7d7d7;">
                                            <i class="bi bi-envelope-at-fill pe-2"></i>
                                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required style="outline: none; box-shadow: none; border: none; border-radius: 0;">
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid email address.
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="my-4 w-100">
                                            <button class="send-OTP btn w-100 bg-yellow d-flex justify-content-center" type="button" id="sendOtpButton" style="border-radius: 50px; border: 1px solid black;"><i class="bi bi-send"></i> send OTP</button>
                                        </div>
                                    </div>

                                    <!-- OTP Input Fields -->
                                    <div class="col-md-11 px-3 mt-4 w-100 OTP-section">
                                        <h1 class="text-center justify-self-center mb-3">Verify Your Email Address</h1>
                                        <p class="text-center mb-1">Please enter the 6-digit code we sent to</p>
                                        <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" class="d-flex w-100 justify-content-center text-center text-decoration-underline" id="emailDisplay"></a>
                                        <div class="otp-group" id="otp-group">
                                            <input type="text" class="form-control otp-input" pattern="\d*" title="Please enter a digit" maxlength="1" style="outline: none; box-shadow: none; border: 1px solid black; border-radius: 50px;" oninput="validateInput(this)">
                                            <input type="text" class="form-control otp-input" pattern="\d*" title="Please enter a digit" maxlength="1" style="outline: none; box-shadow: none; border: 1px solid black; border-radius: 50px;" oninput="validateInput(this)">
                                            <input type="text" class="form-control otp-input" pattern="\d*" title="Please enter a digit" maxlength="1" style="outline: none; box-shadow: none; border: 1px solid black; border-radius: 50px;" oninput="validateInput(this)">
                                            <span>-</span>
                                            <input type="text" class="form-control otp-input" pattern="\d*" title="Please enter a digit" maxlength="1" style="outline: none; box-shadow: none; border: 1px solid black; border-radius: 50px;" oninput="validateInput(this)">
                                            <input type="text" class="form-control otp-input" pattern="\d*" title="Please enter a digit" maxlength="1" style="outline: none; box-shadow: none; border: 1px solid black; border-radius: 50px;" oninput="validateInput(this)">
                                            <input type="text" class="form-control otp-input" pattern="\d*" title="Please enter a digit" maxlength="1" style="outline: none; box-shadow: none; border: 1px solid black; border-radius: 50px;" oninput="validateInput(this)">
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter the OTP.
                                        </div>

                                        <!-- Timer and Resend Button -->
                                        <div class="mt-3 text-center">
                                            <span id="timer"></span>
                                            <button type="button" id="resendButton" class="btn btn-link p-0" style="display: none;">resend OTP</button>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="my-4 w-100 d-flex flex-row justify-content-between">
                                            <button class="back-to-email btn bg-black text-white" type="button" id="backEmailSection" style="border-radius: 50px; border: 1px solid #fff200; width: 40%;">back</button>
                                            <button class="sign-in btn bg-yellow" type="button" id="verifyOtpButton" style="border-radius: 50px; border: 1px solid black; width: 40%;"><i class="bi bi-box-arrow-in-right"></i> sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="signin-loader w-100 h-100 d-flex justify-content-center align-items-center">
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

        <script src="user/guest/js/signin.js"></script>
    </body>
</html>