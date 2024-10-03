<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | KeNHAVATE</title>
    <meta name="description" content="Oops! The page you're looking for doesn't exist. Return to KeNHAVATE's homepage or contact us for assistance.">
    
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
        <link rel="stylesheet" href="user/css/home-guest.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2ecc71;
            --background-color: #ffffff;
            --text-color: #34495e;
            --card-bg-color: #ffffff;
        }
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        header {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 50px 0;
            position: relative;
            overflow: hidden;
        }
        header h1 {
            font-size: 3em;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }
        .header-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            transform: skewY(-6deg);
            transform-origin: top left;
        }
        h2 {
            color: var(--primary-color);
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }
        .btn {
            display: inline-block;
            background-color: var(--secondary-color);
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #27ae60;
        }
        .error-icon {
            font-size: 6em;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        .icon{
            background-color: transparent; 
        }
    </style>
</head>
<body>
    <header>
        <div class="header-bg"></div>
        <div class="container">
            <h1>KeNHAVATE</h1>
        </div>
    </header>
    
    <main class="container">
        <article>
            <div class="error-icon fw-bolder mb-0">
                404
            </div>
            
            <lord-icon
                src="https://media.lordicon.com/upload/pages/2024_03/KC_JxE_XZcyO2E_zZ82_T.json"
                trigger="loop"
                colors="primary:#121331,secondary:#fff200"
                style="width:100%;height:300px"
                loading="lazy"
                target=".lottie"
                class="icon">
            </lord-icon>
        </article>
        <article>
            <h2>Oops! Road Work Ahead</h2>
            <p>It looks like you've taken a detour to a page that doesn't exist. Don't worry, we'll help you get back on track!</p>
            <a href="user-guest" class="btn">Return to Homepage</a>
        </article>
    </main>

    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <script>
        gsap.from('.error-icon', {
            opacity: 0,
            y: -50,
            duration: 1,
            ease: 'bounce.out'
        });

        gsap.from('.icon', {
            opacity: 0,
            y: -50,
            duration: 1,
            ease: 'bounce.out'
        });

        gsap.from('h2, p, .btn', {
            opacity: 0,
            y: 50,
            duration: 1,
            stagger: 0.2,
            delay: 0.5
        });
    </script>
</body>
</html>