<?php
session_start();

// Include database connection
include('db.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['username'];

$suggestion = '';
$showModal = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sleepHours = floatval($_POST['sleep_hours']);

    if ($sleepHours > 24) {
        $showModal = true;
    } else {
        // Determine the sleep range
        if ($sleepHours <= 1)
            $range = '0-1';
        elseif ($sleepHours <= 5)
            $range = '1-5';
        elseif ($sleepHours < 8)
            $range = '5-7';
        elseif ($sleepHours == 8)
            $range = '8';
        elseif ($sleepHours <= 10)
            $range = '9-10';
        elseif ($sleepHours <= 15)
            $range = '11-15';
        else
            $range = '24';

        // Query to fetch a random suggestion based on the selected range
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - SleepWell</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(135deg, #001f3f, #0074D9);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

        /* Card and form styling */
        .card {
            background: #ffffff11;
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            color: white;
            margin-top: 20px;
            /* Added margin-top for space between navbar and form */
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
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
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

        /* Center the page content */
        .container {
            padding-top: 80px;
            /* Add space below navbar */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }




        .content {
            width: 100%;
            max-width: 600px;
            padding: 1rem;
        }

        h3 {
            margin-top: 30px;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">SleepWell</a>
            <div class="navbar-nav">
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="about.php">About the Developer</a>
                <a class="nav-link" href="motive.php">Motive</a>
                <a class="nav-link" href="importance.php">Importance</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="content">
            <!-- Welcome message -->
            <h3 class="text-center">Welcome, <?= htmlspecialchars($user) ?>!</h3>

            <!-- Sleep input form -->
            <form method="POST" class="card mt-4">
                <h5 class="text-center">Great to see you focusing on sleep!</h5>
                <div class="mb-3">
                    <label>1. How many hours did you sleep today?</label>
                    <input type="number" name="sleep_hours" class="form-control" min="0" max="24" required
                        placeholder="Number (0–24)">
                </div>
                <div class="mb-3">
                    <label>2. What time did you go to bed?</label>
                    <input type="time" class="form-control" name="bedtime" required>
                </div>
                <div class="mb-3">
                    <label>3. Did you use your phone before bed?</label>
                    <select class="form-control" name="phone_use" required>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>4. Did you drink caffeine late?</label>
                    <select class="form-control" name="caffeine" required>
                        <option>No</option>
                        <option>Yes</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>5. How many times did you wake up?</label>
                    <input type="number" class="form-control" name="wake_count" min="0" required>
                </div>
                <div class="mb-3">
                    <label>6. Did you dream?</label>
                    <select class="form-control" name="dream" required>
                        <option>Yes</option>
                        <option>No</option>
                        <option>Not Sure</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>7. Did you feel fresh waking up?</label>
                    <select class="form-control" name="fresh">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Bro share your feelings here</label>
                    <textarea class="form-control" name="feelings" placeholder="Express yourself..."></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-custom">Submit</button>
                </div>
            </form>

            <!-- Display suggestion if any -->
            <?php if ($suggestion): ?>
                <div class="card mt-4">
                    <h5 class="text-center">Here's what we think, <?= htmlspecialchars($user) ?>:</h5>
                    <p class="text-center"><?= $suggestion ?></p>
                </div>
            <?php endif; ?>

            <!-- Modal for invalid sleep duration -->
            <?php if ($showModal): ?>
                <div class="modal-backdrop">
                    <div class="modal-box">
                        <h2>😕 Hold on!</h2>
                        <p>Please enter a valid sleep duration between 0–24 hours.</p>
                        <a href="index.php" class="btn btn-custom mt-2">Go Back</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>