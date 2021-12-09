<?php

require_once "../../app/config/config.php";


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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400">

    <link rel="stylesheet" href="./assets/css/mainregis.css">
    <link rel="stylesheet" href="./assets/css/Regis.css">
    <link rel="stylesheet" href="./cssregister.css">

    <script>
    function lettersOnly(input){
      var regex = /[^a-z0-9]/gi;
      input.value = input.value.replace(regex, '');
    }
  </script>

    <title>Register</title>
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
                    <a href="../" class="nav-link">
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
                <a class="nav-login btn" href="../login/">
                    <span data-hover="Innovations" class="navi-text">
                        Login
                    </span>
                </a>
                </li>
                </li>
                <a class="nav-signup btn" href="#">
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
            <form action="tambah.php" method="POST">
                <div class="hello-there">
                    Register
                </div>

                <div class="welcome">
                    Nama Lengkap
                </div>
                <input type="text_name" onkeyup="lettersOnly(this)" name="name" class="form-register" required>
                <div class="welcome">
                    Username
                </div>
                <input type="text_username" onkeyup="lettersOnly(this)" name="username" class="form-register" required>
                <div class="welcome">
                    Password
                </div>
                <input type="password" name="password" class="form-register" required>
                <div class="welcome">
                    Re-Password
                </div>
                <input type="password" name="tambah_akun" class="form-register" required>
                <div class="welcome">
                    Gender
                </div>
                <p class="tulisan">
                    <label><input type="radio" name="gender" value="l" required/> Laki-laki</label class="form-register">
                    <label><input type="radio" name="gender" value="p" required/> Perempuan</label class="form-register">
                </p>
                <p><span class="sepasi">...</span></p>
                <input type="submit" name="add_record" class="nav-signup-new btn" value="Buat Akun">
                <p><span class="sepasi">...</span></p>
                <p> </p>
                <p><a href="../login" class="welcome">Sudah Punya Akun ?</a></p>
            </form>
        </div>

</body>

</html>