<?php
session_start();
include 'db.php';

$errorMessage = '';
$successModal = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $successModal = true;
        } else {
            $errorMessage = "Invalid credentials. Please try again.";
        }
    } else {
        $errorMessage = "Invalid credentials. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - SleepWell</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(135deg, #001f3f, #0074D9);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-card {
      background: #ffffff11;
      backdrop-filter: blur(10px);
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
      color: white;
    }

    .form-control {
      background-color: #ffffff33;
      color: white;
      border: none;
    }

    .form-control::placeholder {
      color: #ccc;
    }

    .btn-custom {
      background-color: #00bcd4;
      color: white;
      border: none;
    }

    .btn-custom:hover {
      background-color: #0097a7;
    }

    /* Modal styles */
    .modal-backdrop {
      position: fixed;
      top: 0; left: 0;
      width: 100vw; height: 100vh;
      background: rgba(0, 0, 0, 0.5);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .modal-box {
      background: linear-gradient(to right, #c2e9fb, #a1c4fd);
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      text-align: center;
      animation: slideUp 0.6s ease;
      max-width: 400px;
      width: 90%;
    }

    .modal-box h2 {
      color: #004d7a;
      margin-bottom: 1rem;
    }

    .modal-box p {
      font-size: 1.1rem;
      color: #004d7a;
    }

    @keyframes slideUp {
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
  <div class="login-card">
    <h2 class="text-center mb-4">Login</h2>

    <?php if (!empty($errorMessage)) echo '<div class="alert alert-danger">' . $errorMessage . '</div>'; ?>

    <form action="login.php" method="POST">
      <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-custom">Login</button>
      </div>
    </form>

    <p class="text-center mt-3">Don't have an account? 
      <a href="register.php" style="color:white">Register</a>
    </p>
  </div>

  <?php if ($successModal): ?>
    <div class="modal-backdrop">
      <div class="modal-box">
        <h2>✅ Login Successful!</h2>
        <p> welcome to SleepWell...</p>
      </div>
      <meta http-equiv="refresh" content="3;url=index.php">
    </div>
  <?php endif; ?>
</body>
</html>
