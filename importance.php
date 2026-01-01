<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Importance - SleepWell</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      background: linear-gradient(135deg, #001f3f, #0074D9);
      color: white;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
    }

    .page-wrapper {
      min-height: calc(100vh - 80px);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .center-text {
      text-align: center;
      background: rgba(255, 255, 255, 0.07);
      backdrop-filter: blur(10px);
      padding: 3rem;
      border-radius: 1rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
      animation: fadeInUp 0.8s ease-in-out;
      max-width: 800px;
    }

    h2 {
      color: #00d4ff;
      margin-bottom: 1.5rem;
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
  </style>
</head>

<body>

  <!-- SHARED NAVBAR -->
  <?php include 'navbar.php'; ?>

  <!-- PAGE CONTENT -->
  <div class="page-wrapper px-3">
    <div class="center-text">
      <h2>🤔 Bro, do you want to know the importance?</h2>
      <h2>💡 It's more important than any other thing bro, it's essential. 🔑</h2>
      <h2>😴 Sleep enough to do enough. 🚀</h2>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
