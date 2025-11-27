

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Motive - SleepWell</title>
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
  </style>
</head>
<body>
 <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">SleepWell</a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="about.php">About the Developer</a>
                <a class="nav-link" href="motive.php" active>Motive</a>
                <a class="nav-link" href="importance.php">Importance</a>
            </div>
        </div>
    </nav>
  <div class="content-box">
    <h2 class="text-center mb-4">The Motive Behind SleepWell</h2>

    <p>
      Sleep — it’s something we all need, yet something many neglect. I started *SleepWell* not just to build a web app, but to address a silent struggle millions face daily. Lack of proper sleep affects mental clarity, emotional stability, and overall health. I knew that even a simple tool offering empathy and guidance could make a difference.
    </p>

    
    <p>
      *SleepWell* is not just a sleep suggestion app. It’s a message that you are not alone. Whether you're a student overworking without rest, a professional running on caffeine, or a dreamer sacrificing sleep for your vision — this app is for you.
    </p>

    <p>
      Every feature of this site — from the user-friendly UI to the categorized suggestions — was built to serve. I didn’t want fancy distractions. I wanted clarity. Clean design, soft animations, a relaxing feel — because even the website itself should feel like a breath of calm.
    </p>

    
    <p>
      I believe everyone deserves better sleep, better health, and better support. We all have ambitions, but without rest, even the biggest dreams fade. That’s why I made *SleepWell* — to be a little light in someone's dark night.
    </p>

    <p>
      The motive behind this project is deeply personal. It’s a digital footprint of my resilience, a gift to the world, and a mark of what’s possible when you don’t give up.
    </p>

    <p>
      If this app helps even one person feel cared for, rested, and encouraged — then every sleepless night I spent coding it was worth it. 💙
    </p>


    <p class="text-center mt-2">
      Keep dreaming. Keep coding. And never forget to SleepWell. 🛌✨
    </p>
  </div>

</body>
</html>
