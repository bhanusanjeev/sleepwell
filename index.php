<?php
session_start();
include('db.php');

// Protect route
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['username'];
$suggestion = '';
$showModal = false;

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sleepHours = floatval($_POST['sleep_hours']);

    if ($sleepHours < 0 || $sleepHours > 24) {
        $showModal = true;
    } else {
        // Determine sleep range
        if ($sleepHours <= 1) {
            $range = '0-1';
        } elseif ($sleepHours <= 5) {
            $range = '1-5';
        } elseif ($sleepHours < 8) {
            $range = '5-7';
        } elseif ($sleepHours == 8) {
            $range = '8';
        } elseif ($sleepHours <= 10) {
            $range = '9-10';
        } elseif ($sleepHours <= 15) {
            $range = '11-15';
        } else {
            $range = '24';
        }

        // Fetch suggestion
        $query = "SELECT message FROM Suggestions_full WHERE sleep_range = '$range' ORDER BY RAND() LIMIT 1";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $suggestion = mysqli_fetch_assoc($result)['message'];
        } else {
            $suggestion = "No suggestion available for this range.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SleepWell | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #001f3f, #0074D9);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }

        /* Navbar */
        .navbar {
            background-color: #004d7a;
        }

        .navbar-brand {
            font-size: 1.6rem;
            color: white !important;
        }

        .nav-link {
            color: white !important;
        }

        .nav-link:hover {
            color: #00bcd4 !important;
        }

        /* Card */
        .glass-card {
            background: #ffffff11;
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            box-shadow: 0 8px 24px rgba(0,0,0,0.25);
            color: white;
        }

        .form-control, .form-select, textarea {
            background-color: #ffffff33;
            color: white;
            border: none;
        }

        .form-control::placeholder {
            color: #ddd;
        }

        .btn-custom {
            background-color: #00bcd4;
            border: none;
            color: white;
        }

        .btn-custom:hover {
            background-color: #0097a7;
        }

        /* Modal */
        .modal-backdrop-custom {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .modal-box {
            background: linear-gradient(to right, #c2e9fb, #a1c4fd);
            padding: 2rem;
            border-radius: 1rem;
            text-align: center;
            max-width: 400px;
            width: 90%;
        }

        .modal-box h2 {
            color: #004d7a;
        }

        /* Mobile tweaks */
        @media (max-width: 576px) {
            .form-control, .btn {
                font-size: 1rem;
                padding: 0.75rem;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            💤 <span class="ms-2 fw-bold">SleepWell</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="motive.php">Motive</a></li>
                <li class="nav-item"><a class="nav-link" href="importance.php">Importance</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container pt-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">

            <h3 class="text-center text-white mb-4">Welcome, <?= htmlspecialchars($user) ?> 👋</h3>

            <form method="POST" class="glass-card p-4">
                <h5 class="text-center mb-3">Track your sleep today</h5>

                <div class="mb-3">
                    <label>How many hours did you sleep?</label>
                    <input type="number" name="sleep_hours" class="form-control" min="0" max="24" required>
                </div>

                <div class="mb-3">
                    <label>Bedtime</label>
                    <input type="time" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Used phone before bed?</label>
                    <select class="form-select">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Late caffeine?</label>
                    <select class="form-select">
                        <option>No</option>
                        <option>Yes</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>How many times did you wake up?</label>
                    <input type="number" class="form-control" min="0">
                </div>

                <div class="mb-3">
                    <label>How do you feel?</label>
                    <textarea class="form-control" placeholder="Express yourself..."></textarea>
                </div>

                <div class="d-grid">
                    <button class="btn btn-custom">Submit</button>
                </div>
            </form>

            <?php if ($suggestion): ?>
                <div class="glass-card p-4 mt-4 text-center">
                    <h5>Suggestion for you 💡</h5>
                    <p class="mt-2"><?= htmlspecialchars($suggestion) ?></p>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<!-- INVALID MODAL -->
<?php if ($showModal): ?>
<div class="modal-backdrop-custom">
    <div class="modal-box">
        <h2>😕 Invalid Input</h2>
        <p>Please enter sleep hours between 0 and 24.</p>
        <a href="dashboard.php" class="btn btn-custom mt-3">Go Back</a>
    </div>
</div>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
