<?php
    session_start();
    
    // Check if the specific session variable is set
    if (isset($_SESSION['doubleEncryptedSessionId'])) {
        // Unset the specific session variable
        unset($_SESSION['doubleEncryptedSessionId']);
    }


    // This is a placeholder for form processing logic
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // In a real-world scenario, you'd process the form data here
        // For example, sending an email or storing in a database
        $submission_success = true;
    }

    $contact_info = [
        "address" => "KeNHAVATE Headquarters, Blue Sky Tower, Nairobi, Kenya",
        "phone" => "+254 20 123 4567",
        "email" => "info@kenhavate.go.ke",
        "hours" => "Monday - Friday: 8:00 AM - 5:00 PM"
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat With Us :: | :: KeNHAVATE :: | :: Kenya National Highway Authority :: |:: KeNHA</title>
    <meta name="description" content="Reach out to KeNHAVATE for inquiries, partnerships, or to share your innovative ideas for Kenya's road infrastructure. We're here to listen and collaborate.">
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
    <link rel="stylesheet" href="user/guest/css/chat-us.css">
</head>
<body class="d-flex justify-content-center">
    <div class="chat-us-content row w-100 m-0 p-0" style="background-image: url('image-library-KeNHA/Hand-holding-lightbulb (1).png'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="col-12 m-0 p-0 d-flex justify-content-center">
            <div class="row w-100 d-flex justify-content-center glassmorphic-colorless">
                <div class="p-0 col-md-10">    
                    
                    <?php include '../navbar/guest-nav.php'; ?>

                    <header>
                        <div class="header-bg"></div>
                        <article class="container">
                            <h1 class="header-animate">Chat With Us</h1>
                            <p class="header-animate" style="position: relative;">We're here to listen, collaborate, and innovate</p>
                        </article>
                    </header>
                    
                    <main class="container overflow-hidden">
                        <?php if (isset($submission_success)): ?>
                            <div class="success-message">
                                Thank you for your message. We'll get back to you as soon as possible!
                            </div>
                        <?php endif; ?>

                        <section class="contact-grid my-5">
                            <article class="contact-info">
                                <h2 class="animate text-center mb-3">Get in Touch</h2>
                                <article class="contact-method left">
                                    <h3>Physical Address</h3>
                                    <p class="m-0">Barabara Plaza, 4th Floor, Block C, Jomo Kenyatta International Airport (JKIA), Off Airport South Road, Along Mazao Road,</p>
                                    <p class="m-0">P.O BOX 49712-00100,</p>
                                    <p class="m-0">Nairobi.</p>
                                </article>
                                <article class="contact-method left">
                                    <h3>Phone Numbers</h3>
                                    <p class="m-0">Tel: 020 495 4000</p>
                                    <p class="m-0">Telkom Tel: 020 495 9000</p>
                                    <p class="m-0">Toll Free: 080 021 1244</p>
                                </article>
                                <article class="contact-method left">
                                    <h3>Email</h3>
                                    <p class="m-0">innovation2023@kenha.co.ke</p>
                                    <p class="m-0">dpsc@kenha.co.ke</p>
                                </article>
                                <article class="contact-method left">
                                    <h3>For Complains</h3>
                                    <p class="m-0">kenhainnovation@gmail.com</p>
                                </article>
                                <article class="contact-method left">
                                    <h3>Business Hours</h3>
                                    <p class="m-0">Monday - Friday</p>
                                    <p class="m-0">8:00 AM - 5:00 PM</p>
                                </article>
                            </article>

                            <article class="contact-form d-flex flex-column right">
                                <h2 class="animate text-center mb-3">Send Us a Message</h2>
                                <form class="h-100" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div>
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name" required>
                                    </div>
                                    <div>
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                    <div>
                                        <label for="subject">Subject:</label>
                                        <input type="text" id="subject" name="subject" required>
                                    </div>
                                    <div>
                                        <label for="message">Message:</label>
                                        <textarea id="message" name="message" required></textarea>
                                    </div>
                                    <button type="submit">Send Message <i class="bi bi-send"></i></button>
                                </form>
                            </article>
                        </section>

                        <section class="map mb-5 animate">
                            <h2 class="animate text-center mb-3">Location</h2>
                                <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7240147077273!2d36.90290877496587!3d-1.3419622986453246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f0db0b9a3202f%3A0x6c1064347b30d6b!2sBarabara%20Plaza%20-%20KeNHA%20Headquarters!5e0!3m2!1sen!2ske!4v1725293745445!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </section>
                    </main>
                    
                    <?php include '../footer/guest-footer.php'; ?>

                </div>
            </div>
        </div>
    </div>
        
    <div class="chat-us-loader w-100 h-100 d-flex justify-content-center align-items-center">
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
    <script src="user/guest/js/chat-us.js"></script>
</body>
</html>