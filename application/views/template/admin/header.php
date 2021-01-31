<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title; ?></title>
</head>

<!-- CSS untuk template adminlte, load di base url di folder assets/admin/ untuk load plugin dll -->

<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/fontawesome-free/css/all.min.css') ?>">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
<!-- iCheck -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
<!-- JQVMap -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/jqvmap/jqvmap.min.css') ?>">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/adminlte.min.css') ?>">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/daterangepicker/daterangepicker.css') ?>">
<!-- summernote -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/summernote/summernote-bs4.css') ?>">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
<!-- Select2 -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/select2/css/select2.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/fontawesome-free/css/all.min.css') ?>">
<!-- daterange picker -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/daterangepicker/daterangepicker.css') ?>">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') ?>">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">

<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') ?>">
<!-- BS Stepper -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/bs-stepper/css/bs-stepper.min.css') ?>">
<!-- dropzonejs -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/dropzone/min/dropzone.min.css') ?>">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/adminlte.min.css') ?>">

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Get Username
    Welcome <b><?php echo $this->session->userdata('s_username'); ?></b> -->
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
            <li class="nav-item">
                <a class="btn btn-danger" href="<?php echo site_url('C_user') ?>">Log Out</a>
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
                        <a href="<?php echo site_url('C_frontend/jurnal'); ?>" class="nav-link ">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Jurnal
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo site_url('C_frontend/link_tugas'); ?>" class="nav-link ">
                            <i class="nav-icon fas fa-link"></i>
                            <p>
                                Link Tugas
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo site_url('C_frontend/data_kelas'); ?>" class="nav-link ">
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