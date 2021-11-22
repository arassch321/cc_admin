        <?php
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        if (strpos($root, 'htdocs') !== false) {
            $root = $root . '\cc_admin';
        }
        $data['page'] = "dashboard";

        require_once "$root/app/config/config.php";
        require_once "$root/app/views/admin/templates/header.php";
        require_once "$root/app/views/admin/templates/sidebar.php";
        require_once "$root/app/models/AdminPanel.php";

        $pakaianMan = new Pakaian();
        $pakaianWoman = new Pakaian();
        $usersCount = new User();

        $pakaianMan = $pakaianMan->getAllPakaianMan();
        $pakaianWoman = $pakaianWoman->getAllPakaianWoman();
        $usersCount = $usersCount->getAllUsersCount();
        $totalPakaian = $pakaianWoman + $pakaianMan;

        $pakaianWoman = ($pakaianWoman / $totalPakaian) * 100;
        $pakaianMan = ($pakaianMan / $totalPakaian) * 100;

        ?>

        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
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
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?= number_format((float)$pakaianMan, 2, '.', '') ?><sup style="font-size: 20px">%</sup></h3>

                                    <p>Man Item</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-man"></i>
                                </div>
                                <a href="<?= base_url; ?>/admin/item/baju/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?= number_format((float)$pakaianWoman, 2, '.', '') ?><sup style="font-size: 20px">%</sup></h3>

                                    <p>Woman Item</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-woman"></i>
                                </div>
                                <a href="<?= base_url; ?>/admin/item/baju/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?= $usersCount ?></h3>

                                    <p>Users</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-stalker"></i>
                                </div>
                                <a href=" <?= base_url; ?>/admin/user/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <?php
        require_once "$root/app/views/admin/templates/footer.php";
        ?>