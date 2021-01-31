<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Siswa <?php echo $tampil_kelas_id['nama_kelas'] ?></h1>
                </div>

            </div>
            <!-- Tambah Link btn -->
            <div>
                <!-- url segment untuk melakukan pengoperasian data by id_kelas -->
                <?php

                $id_kelas = $this->uri->segment(3);

                ?>
                <a class="btn btn-primary" href="<?php echo site_url('C_frontend/tambah_siswa/' . $id_kelas) ?>">Tambah Siswa</a>
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
                                        <th>Nama Siswa</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    foreach ($datasiswa_by_kelas->result() as $tpl) { ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $tpl->nama_siswa ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-flat">Pilihan</button>
                                                    <button type="button" class="btn btn-success btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">
                                                        <a class="dropdown-item" href="<?php echo site_url('C_frontend/edit_siswa/' . $tpl->id_kelas . '/' . $tpl->id_siswa) ?>">Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item btn-danger" href="<?php echo site_url('C_frontend/hapus_siswa/' . $tpl->id_kelas . '/' . $tpl->id_siswa) ?>">Hapus</a>
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