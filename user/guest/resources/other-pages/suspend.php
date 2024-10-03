<?php
    session_start();
    
    // Check if the specific session variable is set
    if (isset($_SESSION['doubleEncryptedSessionId'])) {
        // Unset the specific session variable
        unset($_SESSION['doubleEncryptedSessionId']);
    }
    
    // You might want to add some logic here to verify if the user is actually banned
    $username = "John Doe"; // Replace with actual username retrieval logic
    $banReason = "Our system has detected some suspicious activities. This may include: violations of our terms and policies, fraudulent behavior, abusive actions, security breaches, or spamming.";
    $banExpiration = "2023-12-31"; // Replace with actual ban expiration date retrieval logic
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Suspended</title>
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
            min-height: 100vh;
            display: flex;
            align-items: center;
            font-family: "Poppins", sans-serif;
        }
        .lottie-animation {
            max-width: 300px;
            margin: 0 auto;
        }
        .ban-details {
            background-color: #dc3545;
            border: 1px solid #000000;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <div class="lottie-animation mb-4">
                            <lottie-player 
                                src="https://lottie.host/fa95affb-6977-4d4b-8589-7328adb2face/HapmfBhIr9.json"
                                background="transparent"
                                speed="1"
                                style="width: 300px; height: 300px"
                                loop
                                autoplay
                                direction="1"
                                mode="normal">
                            </lottie-player>
                        </div>
                        <h1 class="text-danger mb-4">Account Suspended!</h1>
                        <p class="lead">We're sorry, <?php echo htmlspecialchars($username); ?>, but your account has been suspended and is currently under review.</p>
                        <div class="ban-details p-3 mb-4 rounded">
                            <p class="mb-2"><strong>Reason:</strong> <?php echo htmlspecialchars($banReason); ?></p>
                            <p class="mb-0"><strong>Expiration Date:</strong> Not Determined</p>
                        </div>
                        <p>If you believe this is a mistake or would like to appeal this decision, please contact our support team.</p>
                        <div class="mt-4">
                            <a href="mailto:kenhainnovation@gmail.com" class="btn btn-primary">Contact Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, for certain Bootstrap features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>