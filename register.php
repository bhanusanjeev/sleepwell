<?php
include 'db.php';

$successMessage = '';
$successModal = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $checkQuery = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        $successMessage = "Email already registered. Please login.";
    } else {
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $query)) {
            $successModal = true;
        } else {
            $successMessage = "Error: " . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - SleepWell</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(135deg, #3c1053, #ad5389);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .register-card {
      background: #ffffff11;
      backdrop-filter: blur(10px);
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
      color: white;
      position: relative;
      z-index: 1;
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
      background-color: #e91e63;
      color: white;
      border: none;
    }

    .btn-custom:hover {
      background-color: #c2185b;
    }

    /* Stylish Modal */
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
  <div class="register-card">
    <h2 class="text-center mb-4">Register</h2>

    <?php if (!empty($successMessage)): ?>
      <div class="alert alert-warning"><?php echo $successMessage; ?></div>
    <?php endif; ?>

    <form action="register.php" method="POST">
      <div class="mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
      </div>
      <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-custom">Register</button>
      </div>
    </form>

    <p class="text-center mt-3">Already have an account? 
      <a href="login.php" style="color:#e91e63">Login</a>
    </p>
  </div>

  <?php if ($successModal): ?>
    <div class="modal-backdrop">
      <div class="modal-box">
        <h2>🎉 Registration Successful!</h2>
        <p>You’ll be redirected to login in 3 seconds...</p>
      </div>
      <meta http-equiv="refresh" content="3;url=login.php">
    </div>
  <?php endif; ?>
</body>

</html>
