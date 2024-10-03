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
    <title>Get Your Question Answered :: | :: KeNHAVATE :: | :: Kenya National Highway Authority :: |:: KeNHA</title>
    <meta name="description" content="Explore answers to frequently asked questions about KeNHAVATE, Kenya's premier innovation hub for road infrastructure and design initiatives.">
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
    <link rel="stylesheet" href="user/guest/css/FAQ.css">

    <meta name="description" content="Find answers to common questions about KeNHAVATE, Kenya's Road Innovation Leaders. Learn about our services, partnerships, and how to submit your innovative ideas.">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
</head>
<body class="d-flex justify-content-center">
    <div class="faq-content row w-100 m-0 p-0" style="background-image: url('image-library-KeNHA/Hand-holding-lightbulb (1).png'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="col-12 m-0 p-0 d-flex justify-content-center">
            <div class="row w-100 d-flex justify-content-center glassmorphic-colorless">
                <div class="p-0 col-md-10">    
                    
                    <?php include '../navbar/guest-nav.php'; ?>

                    <header>
                        <div class="header-bg"></div>
                        <div class="container">
                            <h1 class="header-animate">Most Frequently Asked Questions</h1>
                            <p class="header-animate position-relative">Discover the answers to your most pressing questions about the services we offer.</p>
                        </div>
                    </header>
    
                    <main class="special-container container my-5 overflow-hidden">
                        <section class="row g-5">
                            <div class="col-lg-6">
                                <article class="faq-section">
                                    <h2 class="animate">Account Questions</h2>

                                    <div class="animate faq">
                                        <h6>What is KeNHAVATE?</h6>
                                        <p>KeNHAVATE is a platform developed by the Kenya National Highways Authority (KeNHA) to foster and manage innovative ideas aimed at improving road infrastructure in Kenya. It allows individuals and organizations to submit their innovative solutions for review and potential implementation.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>How do I create an account on kenhavate?</h6>
                                        <p>To create an account, click <a href="auth/user-signup">sign up</a>. Follow the prompts to enter your information and complete the registration process.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>Is there a fee to create an account?</h6>
                                        <p>No, creating an account on kenhavate is completely free.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>Can I use kenhavate without creating an account?</h6>
                                        <p>While you can browse some public content, you need an account to submit ideas, participate in challenges, or collaborate with other users.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>How do I sign in to my account?</h6>
                                        <p>Click <a href="auth/user-signin">sign in</a> and enter your email and a One Time Password (OTP), will be send to your email to login.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>Can I change my user information?</h6>
                                        <p>Yes, but you are limited in the number of profile details you can change in your account settings after logging in.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>What happens if my account is suspended?</h6>
                                        <p>If your account is suspended, you'll be temporarily unable to access certain features. You'll receive an email explaining the reason and duration of the suspension.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>How can I get my account unbanned?</h6>
                                        <p>Contact our support team <a href="chat-us">here</a> to discuss the reason for the ban and potential steps for reinstatement.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>Can I have multiple accounts?</h6>
                                        <p>We generally recommend having only one account per user. Multiple accounts may be subject to banning.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>How can I delete my account?</h6>
                                        <p>You can request account deletion through your account settings or by contacting our support team.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <article class="faq-section">
                                    <h2 class="animate">General Questions</h2>

                                    <div class="animate faq">
                                        <h6>How do I submit an idea on kenhavate?</h6>
                                        <p>After logging in, navigate to the "Submit Idea" section and fill out the required fields to describe your innovation.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>What are innovation areas, and how do I choose one for my idea?</h6>
                                        <p>Our innovation areas are categories <a href="innovation-areas">here</a>. When submitting, you'll be prompted to select the most relevant area for your concept.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>How often are new challenges posted?</h6>
                                        <p>We run periodic challenges. The frequency varies, but you can check the <a href="innovation-challenges">challenges</a> section for current and upcoming opportunities.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>Can I participate in multiple challenges simultaneously?</h6>
                                        <p>Yes, you can participate in as many challenges as you like, as long as you meet each challenge's specific requirements.</p>
                                    </div>
                                    <!-- kindly review this part-->
                                    <div class="animate faq">
                                        <h6>How do I send a collaboration request to another user?</h6>
                                        <p>"this will bw explained more "Visit the user's profile and click on the "Send Collaboration Request" button. Include a message explaining why you'd like to collaborate.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>What should I do if I receive a collaboration request?</h6>
                                        <p>You'll receive a notification. You can either accept or decline the request from your notifications panel.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>Can I edit my submitted ideas or challenge entries?</h6>
                                        <p>Typically, you can edit your submissions until the deadline. Check the guidelines for each challenge or idea submission process.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>How are winning challenge entries selected?</h6>
                                        <p>The selection process varies within each challenge. Criteria and judging processes are usually outlined in the guidelines.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>Is there a limit to how many ideas I can submit?</h6>
                                        <p>Generally, there's no limit, but some challenges may have specific rules about the number of entries per participant.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>What types of content are not allowed on kenhavate?</h6>
                                        <p>We prohibit offensive, plagiarized, or illegal content. Please review our <a href="terms-and-conditions">terms and conditions</a> for a comprehensive list.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>Who can submit ideas to KeNHAVATE?</h6>
                                        <p>KeNHAVATE is open to submissions from all Kenyan citizens, research institutions, private sector organizations, and anyone else who has a feasible solution or idea that can improve the country's road infrastructure.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>What happens after I submit my idea?</h6>
                                        <p>Once you submit your idea, it goes through an initial review by KeNHAVATE experts. If your idea meets the criteria, it will move to the next phase, where it might undergo further analysis, testing, and potentially implementation with your permission if it proves viable.</p>
                                    </div>
                                    <div class="animate faq">
                                        <h6>How do I contact KeNHAVATE for more information?</h6>
                                        <p>You can reach out to us through our <a href="chat-us">chat us page</a>, where you'll find a form you can reach us through, our phone number, email address, and physical location. We're available from Monday to Friday, 8:00 AM to 5:00 PM.</p>
                                    </div>
                                </article>
                            </div>
                        </section>
                        <section class="mt-5">
                            <div class="question-form">
                                <h2 class="animate">Didn't find your answer?</h2>
                                <p class="animate">If you didn't find the answer to your question, feel free to ask us directly by filling out the form below:</p>
                                <form action="/submit-question" method="post">
                                    <input class="animate" type="text" name="name" placeholder="Your Name" required>
                                    <input class="animate" type="email" name="email" placeholder="Your Email" required>
                                    <textarea class="animate" name="question" rows="5" placeholder="Your Question" required></textarea>
                                    <button class="animate" type="submit">Submit Question <i class="bi bi-send"></i></button>
                                </form>
                            </div>
                        </section>
                    </main>
                    
                    <?php include '../footer/guest-footer.php'; ?>

                </div>
            </div>
        </div>
    </div>
        
    <div class="faq-loader w-100 h-100 d-flex justify-content-center align-items-center">
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
    <script src="user/guest/js/FAQ.js"></script>
</body>
</html>
