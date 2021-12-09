<?php

require_once "../../app/config/config.php";
require_once "../../app/config/Database.php";

$DB = new Database();
function function_alert($message)
{
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}

if (isset($_POST['but_submit'])) {

    $uname = $_POST['txt_uname'];
    $password = $_POST['txt_pwd'];

    if ($uname != "" && $password != "") {
        $query = "SELECT * FROM  user WHERE username= :usname AND password= :pass";
        $DB->query($query);
        $DB->bind('usname', $uname);
        $DB->bind('pass', $password);
        $userdata = $DB->single();
        $row = $DB->rowCount();

        $count = $row;

        if ($count > 0) {
            $_SESSION['uname'] = $uname;
            $_SESSION['id_user'] = $userdata['id_user'];
            $_SESSION['gender_user'] = $userdata['gender'];
            $_SESSION['level'] = $userdata['level'];
            if ($userdata['level'] == 2) {
                header('Location: ' . base_url . '/admin/');
            } else {
                header('Location: ' . base_url . '/mixing');
            }
        } else {
            function_alert("Invalid username and password");
        }
    }
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento:400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy:400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400">

    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/login.css">

    <title>Login</title>
</head>

<body>
    <header>
        <nav class="nav container">
            <div class="logo">
                <img src="./assets/img/logo.png" width="90">
                <p>Fashion Design</p>
            </div>
            <ul class="menu-container">
                <li class="nav-item">
                    <a href="<?= base_url ?>" class="nav-link">
                        <span data-hover="Home" class="navi-text">
                            Home
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../about.php" class="nav-link">
                        <span data-hover="Innovations" class="navi-text">
                            About Us
                        </span>
                    </a>
                </li>
                <a class="nav-login btn" href="#">
                    <span data-hover="Innovations" class="navi-text">
                        Login
                    </span>
                </a>
                </li>
                <li>
                    <a class="nav-signup btn" href="../register">
                        <span data-hover="Innovations" class="navi-text">
                            Sign Up
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="main-container">
        <div class="login-container">
            <div class="hello-there">
                Hello there
            </div>
            <div class="welcome">
                Welcome to your dashboard
                <form action="" method="post">
                    <input type="text" id="txt_uname" name="txt_uname" class="input-form" placeholder="Username" required>
                    <input type="password" id="txt_pwd" name="txt_pwd" class="input-form" placeholder="Password" required>
            </div>

            <table class="form-table">
                <tr>
                    <td class="form-login"><input type="submit" class="login-but" name="but_submit" id="but_submit" value="Log In" /></td>
                </tr>
            </table>

            </form>
            <div class="signup">
                <a href="../register">Belum punya akun?</a>
            </div>
        </div>

    </div>

</body>

</html>