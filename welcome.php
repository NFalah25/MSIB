<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selamat datang</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
        <nav class="navbar">
                <div class="title">
                        <h1>Dashboard</h1>
                </div>
                <div class="nav-left">
                        <div class="nav-icon">
                                <img src="img/user.png" alt="people">
                        </div>
                        <a href="#menu-burger" id="hamburger-menu"><?php echo $_SESSION['username'] ?> <i data-feather="chevron-down"></i> </a>
                        <div class="menu-hide" id="menu">
                                <a href="#">Akun</a>
                                <a href="logout.php">Logout</a>
                        </div>
                </div>
        </nav>
        <h1>Selamat datang <?php echo $_SESSION['username'] ?></h1>
        <script>
                feather.replace();
        </script>
        <script src="js/script.js"></script>
</body>

</html>