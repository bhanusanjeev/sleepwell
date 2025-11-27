<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About the Developer - SleepWell</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(135deg, #001f3f, #0074D9);
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-top: 100px;
        }

        .content-box {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            max-width: 900px;
            margin: auto;
            animation: fadeInUp 0.8s ease-in-out;
        }

        /* Navbar styling */
        .navbar {
            background-color: #004d7a;
            padding: 1rem;
        }

        .navbar-brand {
            font-size: 1.8rem;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .nav-link {
            color: white;
            font-size: 1rem;
            margin-right: 1rem;
        }

        .nav-link:hover {
            color: #00bcd4;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            color: #00d4ff;
            font-weight: bold;
        }

        p {
            line-height: 1.8;
            font-size: 1.1rem;
        }

        .nav-link.active {
            font-weight: bold;
            color: #00d4ff !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">SleepWell</a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="about.php" active>About the Developer</a>
                <a class="nav-link" href="motive.php">Motive</a>
                <a class="nav-link" href="importance.php">Importance</a>
            </div>
        </div>
    </nav>


    <div class="content-box">
        <h2 class="text-center mb-4">About the Developer</h2>
        <p>
            Hello there! I'm the proud developer behind <strong>SleepWell</strong> — a passion project born from my own
            journey of resilience and growth. When my laptop broke down during college, I didn't give up. I found a way
            to repair it myself, learning to fix problems not just with devices, but in life too. That struggle became
            my fuel. 💪
        </p>
        <p>
            I dedicated myself to learning, balancing my studies with late nights of self-driven development and
            sleepless problem-solving. I’m currently pursuing a full-stack Python development course at <strong>Think
                Champ Pvt. Ltd.</strong> — sharpening my skills every day. The goal? To land a high-paying 15 LPA job
            and turn every hardship into a stepping stone toward something bigger.
        </p>
        <p>
            Now, SleepWell stands as a reflection of that dedication. The website is <strong>fully developed</strong>,
            with responsive design, user-friendly features, and thoughtful content that blends technology and empathy. I
            built this not just as a project, but as a message — that anyone can rise through consistency, effort, and
            belief.
        </p>
        <p class="text-center mt-4">
            🚀 This is just the beginning — let's dream big, sleep better, and build boldly!
        </p>
    </div>


</body>

</html>