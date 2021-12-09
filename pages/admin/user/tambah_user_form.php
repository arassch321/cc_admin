<?php
$root = "../../..";
require_once "$root/app/config/config.php";

if (!isset($_SESSION['uname'])) {
  header('Location: ' . base_url . '/login/');
} else {
  if ($_SESSION['level'] != 2) {
    header('Location: ' . base_url);
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
  header("refresh:0.1;url=" . base_url);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FashionDesignApp | Edit User</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url; ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url; ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url; ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url; ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url; ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url; ?>/dist/css/adminlte.min.css">
  <!-- Scripts -->
  <script>
    function lettersOnly(input){
      var regex = /[^a-z0-9]/gi;
      input.value = input.value.replace(regex, '');
    }
  </script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url; ?>/admin" class="brand-link">
        <img src="<?= base_url; ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">FashionDesignApp</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar d-flex flex-column">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url; ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= $_SESSION['uname'] ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 navibar d-flex flex-grow-1 flex-column">
          <ul class="nav nav-pills nav-sidebar flex-column h-100" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?= base_url; ?>/admin" class="nav-link <?php if ($data['page'] == 'dashboard') {
                                                                  echo 'active';
                                                                } ?>">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item <?php if (in_array("item", $data['page'])) {
                                  echo 'menu-open';
                                } ?>">
              <a href="#" class="nav-link <?php if (in_array("item", $data['page'])) {
                                            echo 'active';
                                          } ?>">
                <i class="nav-icon fas ion-ios-pricetags-outline"></i>
                <p>
                  Pakaian
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url; ?>/admin/item/baju/" class="nav-link <?php if (in_array("baju", $data['page'])) {
                                                                                echo 'active';
                                                                              } ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Baju</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url; ?>/admin/item/celana/" class="nav-link  <?php if (in_array("celana", $data['page'])) {
                                                                                    echo 'active';
                                                                                  } ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Celana</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url; ?>/admin/item/sepatu/" class="nav-link  <?php if (in_array("sepatu", $data['page'])) {
                                                                                    echo 'active';
                                                                                  } ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sepatu</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="<?= base_url; ?>/admin/user/user" class="nav-link <?php if ($data['page'] == 'user') {
                                                                            echo 'active';
                                                                          } ?>">
                <i class="nav-icon fas ion-person-stalker"></i>
                <p>
                  User
                </p>
              </a>
            </li>

          </ul>
          <ul class="nav nav-pills nav-sidebar flex-column flex-end mb-2">
            <li class="nav-item">
              <form method='post' action="">
                <button type="submit" class="nav-link" name="but_logout">
                  <i class="nav-icon fas ion-log-out"></i>
                  <p>
                    Logout
                  </p>
                </button>
              </form>
              <!-- <a href="#" class="nav-link ">
                    <i class="nav-icon fas ion-log-out"></i>
                    <p>
                      Logout
                    </p>
                  </a> -->
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 style="font-size: 2.5rem!important;">Tambah User</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb mt-3 float-sm-right">
                <li class="breadcrumb-item"><a href="./admin.html">Home</a></li>
                <li class="breadcrumb-item"><a href="./item.html">User</a></li>
                <li class="breadcrumb-item active">Tambah</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="card p-4">
          <form action="./tambah_user.php" method="POST">
            <div class="form-group">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Details</h4>
              </div>
              <div class="row mt-3">
                <div class="col-md-12">
                  <label class="labels">Nama User</label>
                  <input type="text" class="form-control " placeholder="Masukkan Nama User Anda" onkeyup="lettersOnly(this)" value="" name="nama" id="nama" required>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-12">
                  <label class="labels">Username</label>
                  <input type="text" class="form-control " placeholder="Masukkan Nama Username Anda" onkeyup="lettersOnly(this)" value="" name="username" id="username" required>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-12"><label class="labels">Password</label>
                  <input type="password" class="form-control " placeholder="Masukkan Password Anda" value="" name="password" id="password" maxlength="18" required>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-12"><label class="labels">Gender</label><select class="form-control" id="gender" name="gender" required>
                    <option value="">Masukkan Gender Anda</option>
                    <option value="l">Male</option>
                    <option value="p">Female</option>
                  </select>
                </div>
              </div>
              <div class="mt-5 text-right">
                <button class="btn btn-success profile-button" type="submit" value="save_record" name="save_record"><i class="far fa-save"></i> Simpan Perubahan</button>
              </div>
            </div>
          </form>
        </div>
      </section>

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2021
        <a href="#">Fashion Design App</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- jQuery -->

  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

  <script>
    $.widget.bridge("uibutton", $.ui.button);
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url; ?>/dist/js/adminlte.js"></script>



  <script src="<?= base_url; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url; ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url; ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url; ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script>
    $(function() {
      $('#example1').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>