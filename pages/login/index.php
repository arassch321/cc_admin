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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                    <a href="<?= base_url ?>" class="nav-link text-dark">
                        <span data-hover="Home" class="navi-text">
                            Home
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../about.php" class="nav-link text-dark">
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
                <a href="#" data-toggle="modal" data-target="#exampleModal">Lupa Password?</a>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">INFORMASI</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
                <h1 class="mb-4"><H5>Anda lupa password login ? Silakan email ke alamat berikut:</h5>
                <h6 class="emailto"> <a href="mailto:fashiondesignhmti2021@gmail.com?subject=Lupa%20Password&body=Akun%20Saya%20Lupa%20Password.">fashiondesignhmti2021@gmail.com</h6>
         
        </div>
      </div>
    </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>