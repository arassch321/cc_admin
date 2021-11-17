<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
    $root = $root . '\cc_admin';
}
require_once "$root/app/config/config.php";

if (isset($_POST['but_logout'])) {
    ob_start();
    session_destroy();
    echo "
  <script>
    localStorage.clear();
  </script>";
    ob_end_flush();
    header("refresh:0.1;url=index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento:400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy:400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500">


    <link rel="stylesheet" href="./dist/css/index_aboutus.css">
    <link rel="stylesheet" href="./dist/css/sidebar.css">
    <title>Base | Fashion Design</title>
</head>

<body>
    <header>
    <nav class="nav container">
            <div class="logo">
                <img src="./dist/img/logo.png" width="90">
                <p>Fashion Design</p>
            </div>
            <ul class="menu-container">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span data-hover="Home" class="navi-text">
                            Home
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./about.php" class="nav-link">
                        <span data-hover="Innovations" class="navi-text">
                            About Us
                        </span>
                    </a>
                </li>
                <?php
                if (!isset($_SESSION['uname'])) {
                ?>
                    <li class="nav-item">
                        <a href="./login/" class="nav-link btn">
                            <span data-hover="Innovations" class="navi-text">
                                Login
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link nav-signup btn" style="border-radius:40px;" href="./register/">
                            <span data-hover="Innovations" class="navi-text">
                                Sign Up
                            </span>
                        </a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item" id="dropdown">
                        <a class="nav-link btn">
                            <span data-hover="Innovations" class="navi-text">
                                My Account
                            </span>
                        </a>
                        <div class="dropdown-child">
                            <a href="./profile" class="btn">Profiles</a>
                            <form method='post' action="">
                                <input class="btn logout" type="submit" value="Logout" name="but_logout">
                            </form>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
            <div class="menu_burger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <main>



        <div class="mid">

            <h1>
                ABOUT US
            </h1>
            </p> Ini adalah <span style="color:rgb(231, 250, 121);">website</span> desain <span
                style="color:rgb(173, 173, 173);">fashion</span> untuk <span
                style="color:rgb(230, 140, 140);">inspirasi</span><br>
            <span style="color:rgb(170, 170, 175);">fashion</span> anda ketika anda <span
                style="color:rgb(197, 74, 90);">mencari ide</span> ataupun <br>inspirasi <span
                style="color:rgb(190, 188, 188);">fashion</span></p>
        </div>

    </main>
    <footer>
        <h2>Fashion Design</h3>
            <h4>Berlangganan untuk mendapatkan info dari kami</h4>
            <div class="subscription">
                <form action="#">
                    <input type="text" name="email" id="email" placeholder="Your Email" autocomplete="off" />
                    <input type="submit" value="Subscribe" />
                </form>
            </div>
            <p>&#169; 2021 Fashion Design Inc.</p>
    </footer>
    <script src="./assets/js/script.js"></script>
</body>

</html>