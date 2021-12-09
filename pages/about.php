<?php

require_once "../app/config/config.php";

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento:400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy:400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
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
                    <a href="<?= base_url ?>" class="nav-link text-dark">
                        <span data-hover="Home" class="navi-text">
                            Home
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./about.php" class="nav-link text-dark">
                        <span data-hover="Innovations" class="navi-text">
                            About Us
                        </span>
                    </a>
                </li>
                <?php
                if (!isset($_SESSION['uname'])) {
                ?>
                    <li class="nav-item">
                        <a href="./login/" class="nav-link btn text-dark">
                            <span data-hover="Innovations" class="navi-text">
                                Login
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link nav-signup btn text-dark" style="border-radius:40px;" href="./register/">
                            <span data-hover="Innovations" class="navi-text">
                                Sign Up
                            </span>
                        </a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item" id="dropdown">
                        <a class="nav-link btn ">
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
            </p> Ini adalah <span style="color:rgb(231, 250, 121);">website</span> desain <span style="color:rgb(173, 173, 173);">fashion</span> untuk <span style="color:rgb(230, 140, 140);">inspirasi</span><br>
            <span style="color:rgb(170, 170, 175);">fashion</span> anda ketika anda <span style="color:rgb(197, 74, 90);">mencari ide</span> ataupun <br>inspirasi <span style="color:rgb(190, 188, 188);">fashion</span></p>
        </div>

    </main>

    <div class="whos-speaking-area speakers pad100 co">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <div class="title-text mb50">
                            <h2 class=" mb-5">Our Team</h2>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
            </div>
            <!-- /.row  end-->
            <div class="row mb50">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 text-center">
                    <div class="speakers xs-mb30">
                        <div class="spk-img">
                            <img class="img-fluid" src="./dist/img/encuf.png" alt="trainer-img" />
                        </div>
                        <div class="spk-info">
                            <h3>Muhammad Yusuf Hasbullah</h3>
                            <p>Project Manager</p>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 text-center">
                    <div class="speakers xs-mb30">
                        <div class="spk-img">
                            <img class="img-fluid" src="./dist/img/ariyadi.png" alt="trainer-img" />
                        </div>
                        <div class="spk-info">
                            <h3>Muhammad Ariyadi</h3>
                            <p>UI UX Designer</p>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 text-center">
                    <div class="speakers xs-mb30">
                        <div class="spk-img">
                            <img class="img-fluid" src="./dist/img/aida.png" alt="trainer-img" />
                        </div>
                        <div class="spk-info">
                            <h3>Aida Raima</h3>
                            <p>Analis Manajemen</p>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 text-center">
                    <div class="speakers">
                        <div class="spk-img">
                            <img class="img-fluid" src="./dist/img/zulfa.png" alt="trainer-img" />
                        </div>
                        <div class="spk-info">
                            <h3>Zulva Farabi</h3>
                            <p>Frontend</p>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
            </div>
            <!-- /row end-->
            <div class="row mb50">
                <div class="offset-2 no-gutter"></div>
                <!-- /col end-->
                <div class="col-xl-4 col-lg-3 col-md-4 col-sm-12 text-center">
                    <div class="speakers xs-mb30">
                        <div class="spk-img">
                            <img class="img-fluid" src="./dist/img/max.png" alt="trainer-img" />
                        </div>
                        <div class="spk-info">
                            <h4>Maxillianus Putra Huya Sugan</h4>
                            <p>Frontend</p>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
                <div class="col-xl-4 col-lg-3 col-md-4 col-sm-12">
                    <div class="speakers xs-mb30 text-center">
                        <div class="spk-img">
                            <img class="img-fluid" src="./dist/img/ardy.png" alt="trainer-img" />
                        </div>
                        <div class="spk-info">
                            <h4>Muhammad Ardhy Satrio Jati</h4>
                            <p>Backend</p>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
                <div class="col-xl-4 col-lg-3 col-md-4 col-sm-12 text-center">
                    <div class="speakers">
                        <div class="spk-img">
                            <img class="img-fluid" src="./dist/img/aras.png" alt="trainer-img" />
                        </div>
                        <div class="spk-info">
                            <h4>Muhammad Arras</h4>
                            <p>Backend</p>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
            </div>
            <!-- /row end-->
        </div>
        <!-- /container end-->
    </div>
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