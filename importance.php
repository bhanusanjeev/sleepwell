

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Importance - SleepWell</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(135deg, #001f3f, #0074D9);
      color: white;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding-top: 100px;
      height: 100vh;
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
    }

    h2 {
      color: #00d4ff;
      margin-bottom: 1.5rem;
    }

    .nav-link.active {
      font-weight: bold;
      color: #00d4ff !important;
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
            <a class="navbar-brand" href="index.php">SleepWell</a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="about.php">About the Developer</a>
                <a class="nav-link" href="motive.php">Motive</a>
                <a class="nav-link" href="importance.php">Importance</a>
            </div>
        </div>
    </nav>
  <div class="center-text">
    <h2>🤔 Bro, do you want to know the importance?</h2>
    <h2>💡 It's more important than any other thing bro, it's essential. 🔑</h2>
    <h2>😴 Sleep enough to do enough. 🚀</h2>
  </div>


</body>
</html>
