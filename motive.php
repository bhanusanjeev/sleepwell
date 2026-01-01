<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Motive - SleepWell</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      background: linear-gradient(135deg, #001f3f, #0074D9);
      color: white;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
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
      <h2 class="text-center mb-4">The Motive Behind SleepWell</h2>

      <p>
        Sleep — it’s something we all need, yet something many neglect. I started
        <strong>SleepWell</strong> not just to build a web app, but to address a silent
        struggle millions face daily. Lack of proper sleep affects mental clarity,
        emotional stability, and overall health. Even a simple tool offering empathy
        and guidance can make a difference.
      </p>

      <p>
        <strong>SleepWell</strong> is not just a sleep suggestion app. It’s a reminder
        that you are not alone. Whether you're a student overworking without rest, a
        professional running on caffeine, or a dreamer sacrificing sleep for ambition —
        this app is for you.
      </p>

      <p>
        Every feature of this site — from the user-friendly UI to the categorized
        suggestions — was built with intention. No distractions. Just clarity.
        Soft animations, calm visuals, and a relaxing experience — because even a
        website should feel like rest.
      </p>

      <p>
        I believe everyone deserves better sleep, better health, and better support.
        Ambitions are important, but without rest, even the biggest dreams fade.
        That’s why I built <strong>SleepWell</strong> — to be a small light in
        someone’s dark night.
      </p>

      <p>
        This project is deeply personal. It’s a digital footprint of resilience,
        learning, and consistency — proof of what’s possible when you don’t give up.
      </p>

      <p>
        If this app helps even one person feel cared for, rested, and encouraged —
        then every late night spent building it was worth it. 💙
      </p>

      <p class="text-center mt-3">
        Keep dreaming. Keep coding. And never forget to SleepWell. 🛌✨
      </p>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
