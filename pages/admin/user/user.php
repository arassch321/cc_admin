<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
	$root = $root . '\cc_admin';
}
require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

$DB = new Database();

if (!isset($_SESSION['uname'])) {
    header('Location: ' . base_url . '/login/');
  }
  if (isset($_SESSION['level'])) {
    if ($_SESSION['level'] == 2) {
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url; ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url; ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url; ?>/dist/css/adminlte.min.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav ml-2">
                <h2>Welcome To Menu Admin</h2>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url; ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar d-flex flex-column">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url; ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">User</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Table User</h3>
                    </div>
                    <!-- /.card-header -->
                <?php
                $sql = "SELECT * FROM user ORDER BY id_user ASC";
                $DB->query($sql);
                $DB->execute();
                $result = $DB->resultSet();
                ?>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID User</th>
                                    <th>Nama User</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Man/Woman</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                             if (!empty($result)) {
                                foreach ($result as $row) {
                            ?>    
                                <tr>
                                    <td>
                                    <?php echo $row["id_user"]; ?>
                                    </td>
                                    <td>
                                    <?php echo $row["nama"]; ?>
                                    </td>
                                    <td>
                                    <?php echo $row["username"]; ?>
                                    </td>
                                    <td>
                                    <?php echo $row["password"]; ?>
                                    </td>
                                    <td>
                                    <?php   if($row['gender'] == 'l'){
                                                echo 'Laki-laki';
                                            }
                                            elseif($row['gender'] == 'p'){
                                                echo 'Perempuan';
                                            }
                                            else{
                                                echo 'Tidak ada Data';
                                            } ?>
                                    </td>
                                    <td>
                                        
                                        <a type="button" class="btn btn-primary ion-edit"  href="edit_user_form.php?id_user=<?php echo $row['id_user'] ?>">
                                            Edit</a>
                                        <a type="button" class="btn btn-warning ion-android-delete" href='delete.php?id_user=<?php echo $row['id_user'] ?>'>Hapus</a>
                                        
                                    </td>
                                </tr>
                                    <?php
                                    }
                                 }
                                ?>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                        <a class="btn btn-primary" href="./tambah_user_form.php"><i class="fas fa-user-plus"></i> Tambah
                            Data</a>
                    </div>
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2021
                <a href="#">Fashion Design App</a>.</strong> All rights reserved.
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
    <script src="<?= base_url; ?>/dist/js/adminlte.js"></script>

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

    <script src="<?= base_url; ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="<?= base_url; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url; ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url; ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url; ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $('#example2').DataTable({
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