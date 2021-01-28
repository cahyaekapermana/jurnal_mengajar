<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Link Tugas</h1>
                </div>
            </div>
            <!-- Tambah Link btn -->
            <div>
                <a class="btn btn-primary" href="<?php echo site_url('C_frontend/tambah_tugas') ?>">Tambah Link</a>
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
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Tugas</th>
                                        <th>Link Tugas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil_link->result() as $tpl) { ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $tpl->nama_tugas ?></td>
                                            <td><a href="<?php echo $tpl->link_tugas ?>">Klik untuk membuka tugas</a></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-flat">Pilihan</button>
                                                    <button type="button" class="btn btn-success btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">
                                                        <a class="dropdown-item" href="<?php echo site_url('C_frontend/edit_link_tugas/' . $tpl->id_link) ?>">Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item btn-danger" href="<?php echo site_url('C_frontend/hapus_link/' . $tpl->id_link) ?>">Hapus</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
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