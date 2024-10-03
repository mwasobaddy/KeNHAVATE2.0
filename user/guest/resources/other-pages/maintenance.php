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
    <title>Site Maintenance</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Base URL -->
    <base href="/KeNHAVATE/">

    <!-- Lottie Player Script -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    
    <style>
        body {
            background-color: #f0f2f5;
            font-family: "Poppins", sans-serif;
        }
        .maintenance-container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .maintenance-content {
            text-align: center;
            padding: 2rem;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .lottie-animation {
            max-width: 300px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container maintenance-container">
        <div class="row">
            <div class="col-md-8 offset-md-2 maintenance-content">
                <div class="lottie-animation">
                    <lottie-player 
                        src="https://lottie.host/bb76775c-7b45-4625-aa22-cdc2ee04bf50/Pa8ctOLJGy.json"
                        background="transparent"
                        speed="1"
                        style="width: 300px; height: 300px;"
                        loop
                        autoplay
                        direction="1"
                        mode="normal">
                    </lottie-player>
                </div>
                <h1 class="mt-4">We'll be back soon!</h1>
                <p class="lead">Sorry for the inconvenience. We're performing some maintenance at the moment.</p>
                <hr>
                <p>We're working hard to improve our website and we'll be back in a few hours. Thank you for your patience.</p>
                <div class="mt-4">
                    <a href="mailto:support@example.com" class="btn btn-primary">Contact Support</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, if you need Bootstrap's JavaScript features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>