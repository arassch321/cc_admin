<?php

require_once "../../app/config/config.php";
require_once "../../app/config/Database.php";

$DB = new Database();
function function_alert($message)
{
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
if (isset($_POST["update_record"])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];

    $query = "UPDATE user set nama=:nama, username=:username, gender=:gender WHERE id_user=:usname";
    $DB->query($query);
    $DB->bind('usname', $_SESSION['id_user']);
    $DB->bind('nama', $nama);
    $DB->bind('username', $username);
    $DB->bind('gender', $gender);
    $DB->execute();
    $row = $DB->rowCount();

    $count = $row;

    if ($count > 0) {
        $_SESSION['uname'] = $username;
        $_SESSION['gender_user'] = $gender;
        ob_start();
        echo "
        <script>
            localStorage.clear();
        </script>";
        ob_end_flush();
        header("refresh:0.1;url=" . base_url . "");
    } else {
        function_alert("Update fail");
    }
}
if (isset($_POST['but_logout'])) {
    ob_start();
    session_destroy();
    echo "
  <script>
    localStorage.clear();
  </script>";
    ob_end_flush();
    header("refresh:0.1;url=../index.php");
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
    <link rel="stylesheet" href="./assets/css/profile.css">
    <link rel="stylesheet" href="./assets/css/side-bar.css">
    <title>Profile</title>
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
                <li class="nav-item" id="dropdown">
                    <a class="nav-link btn">
                        <span data-hover="Innovations" class="navi-text">
                            My Account
                        </span>
                    </a>
                    <div class="dropdown-child">
                        <a href="./index.php" class="btn">Profiles</a>
                        <form method='post' action="">
                            <input class="btn logout" type="submit" value="Logout" name="but_logout">
                        </form>
                    </div>
                    </div>
                </li>
            </ul>
            <div class="menu_burger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <main>
    <?php
    $sql = "SELECT * FROM user WHERE id_user='" . $_SESSION['id_user'] . "'";
    $DB->query($sql);
    $DB->execute();
    $result = $DB->resultSet();
    ?>
        <div class="profile-container">
            <form method="POST">
                <h3>Username</h3>
                <input class="input-textbox" style="font-size:x-large" type="text" name="username" value="<?php echo $result[0]['username']; ?>" disabled><br>
                <h3>Nama</h3>
                <input class="input-textbox" style="font-size:large" type="text" name="nama" value="<?php echo $result[0]['nama']; ?>" required><br>
                <h3>Gender</h3>
                <input type="radio" name="gender" placeholder="Gender" <?php if ($result[0]['gender'] == 'l') {
                              echo 'checked';
                            } ?> value="l" required>Laki-laki
                <input type="radio" name="gender" placeholder="Gender" <?php if ($result[0]['gender'] == 'p') {
                              echo 'checked';
                            } ?> value="p" required>Perempuan
                <br>
                <div class="btn-container">
                    <input class="btn-update" type="submit" name="update_record" value="Update">
                </div>
                <p><span class="sepasi">...</span></p>
                <center><a href="../change-password/" class="signup">Change Password</a></center>
            </form>
            <br>
            <br>
        </div>

    </main>
    <footer>
        <h2>Fashion Design</h3>
            <h4>Berlangganan untuk mendapatkan info dari kami</h4>
            <div class="subscription">
                <form name="submit-to-google-sheet">
                    <input type="text" name="email" id="email" placeholder="Your Email" autocomplete="off" />
                    <input type="submit" value="Subscribe" />
                </form>
            </div>
            <p>&#169; 2021 Fashion Design Inc.</p>
    </footer>
    <script src="./assets/js/script.js"></script>
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbxS0HDer9ar1mba2EZhtEXX4GYfpynSxlwf8HLhs9mIReHDBaML1tmcDde36CtlX2VG/exec'
        const form = document.forms['submit-to-google-sheet']

        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => console.log('Success!', response))
                .catch(error => console.error('Error!', error.message));
            alert('Thanks For Subscribing!');
            form.reset();
        })
    </script>

</body>

</html>