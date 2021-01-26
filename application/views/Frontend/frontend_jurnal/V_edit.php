<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Get Username
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="<?php echo site_url('C_admin/index') ?>" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="<?php echo site_url('C_admin/index') ?>">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="<?php echo site_url('C_admin/index') ?>" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo site_url('C_admin/index') ?>" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo site_url('C_admin/index') ?>" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo site_url('C_admin/index') ?>" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="<?php echo site_url('C_admin/index') ?>">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo site_url('C_admin/index') ?>" class="brand-link">
            <img src="<?php echo base_url('assets/admin/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Jurnal Mengajar</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo base_url('assets/admin/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <!-- Session Get Username -->
                    <a href="#" class="d-block">Welcome! <b><?php echo $this->session->userdata('sess_username'); ?></b></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">

                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="<?php echo site_url('C_frontend'); ?>" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo site_url('C_frontend/jurnal') ?>" class="nav-link ">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Jurnal
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo site_url('C_frontend'); ?>" class="nav-link ">
                            <i class="nav-icon fas fa-link"></i>
                            <p>
                                Link Tugas
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo site_url('C_frontend'); ?>" class="nav-link ">
                            <i class="nav-icon fas fa-chalkboard-teacher"></i>
                            <p>
                                Data Kelas
                            </p>
                        </a>
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
                        <h4>Edit Jurnal</h4>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-body">
                                <!-- Content -->
                                <!-- form start -->
                                <form action="" method="POST">
                                    <input type="hidden" value="" name="id">

                                    <div class="card-body">
                                        <!-- Date -->
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                <input type="text" name="f_tanggal" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.form group -->
                                        <label>Jam</label>
                                        <div class="row form-group">
                                            <div class="col-3">
                                                <input type="text" value="" name="f_jamdari" class="form-control" placeholder="Dari">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" name="f_jamke" class="form-control" placeholder="Ke">
                                            </div>
                                        </div>
                                        <!-- Ambil data dari tb kelas -->
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select name="f_getkelas" class="form-control-lg select2-selectkelas" style="width: 100%;">
                                                <?php foreach ($tampil_kelas->result() as $tpl) { ?>

                                                    <option value="<?php echo $tpl->id_kelas ?>"><?php echo $tpl->nama_kelas ?></option>

                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kegiatan</label>
                                            <textarea class="form-control" name="f_kegiatan" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Tugas</label>
                                            <textarea class="form-control" name="f_tugas" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Absensi</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Sakit</label>
                                            <select class="form-control-lg select2" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ijin</label>
                                            <select class="form-control-lg select2" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Alpha</label>
                                            <select class="form-control-lg select2" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Catatan</label>
                                            <textarea class="form-control" name="f_catatan" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Hak Cipta <b><a href="http://pusatsekolah.com/">Pusat Sekolah</a></b>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
    </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

</body>

</html>