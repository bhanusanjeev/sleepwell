<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About the Developer - SleepWell</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            background: linear-gradient(135deg, #001f3f, #0074D9);
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
    </style>
</head>

<body>

    <!-- SHARED NAVBAR -->
    <?php include 'navbar.php'; ?>

    <!-- PAGE CONTENT -->
    <div class="container mt-5 pt-4">
        <div class="content-box">
            <h2 class="text-center mb-4">About the Developer</h2>

            <p>
                Hello there! I'm the proud developer behind <strong>SleepWell</strong> — a passion project born from my
                own journey of resilience and growth. When my laptop broke down during college, I didn’t give up. I
                learned to repair it myself, discovering how to solve problems not just in devices, but in life too.
                That struggle became my fuel. 💪
            </p>

            <p>
                I dedicated myself to learning, balancing academics with late nights of self-driven development and
                problem-solving. I’m currently pursuing full-stack development training at
                <strong>Think Champ Pvt. Ltd.</strong>, sharpening my skills every day. My long-term goal is to build a
                strong career in software development and turn every hardship into a stepping stone.
            </p>

            <p>
                <strong>SleepWell</strong> stands as a reflection of that dedication. The platform is fully developed
                with responsive design, thoughtful user flows, and features built with care. This project is not just a
                technical exercise, but a message — growth comes from consistency, effort, and belief.
            </p>

            <p class="text-center mt-4">
                🚀 This is just the beginning — let’s dream big, sleep better, and build boldly.
            </p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
