<style>
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

/* Space for fixed navbar */
body {
    padding-top: 80px;
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="dashboard.php">
             <span class="ms-2 fw-bold">SleepWell</span> 💤
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="motive.php">Motive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="importance.php">Importance</a>
                </li>
               
            </ul>
        </div>
    </div>
</nav>
