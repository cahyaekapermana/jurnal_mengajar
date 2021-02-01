<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jurnal</h1>
                </div>
            </div>
            <!-- Tambah Jurnal btn -->
            <div>
                <a class="btn btn-primary" href="<?php echo site_url('C_frontend/add_jurnal_kelas') ?>">Tambah Jurnal</a>
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
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil_jurnal->result() as $tpl) { ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <!-- Menampilkan waktu urut dari hari, bulan, tahun dan waktu -->
                                            <td><?php echo date('d F Y H:i:A', strtotime($tpl->tgl_jurnal)) ?></td>
                                            <td><?php echo $tpl->jam ?></td>
                                            <td><?php echo $tpl->nama_kelas ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-flat">Pilihan</button>
                                                    <button type="button" class="btn btn-success btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">
                                                        <a class="dropdown-item" href="<?php echo site_url('C_frontend/detail_jurnal/' . $tpl->id_jurnal . '/' . $tpl->id_kelas) ?>">Detail</a>
                                                        <a class="dropdown-item" href="<?php echo site_url('C_frontend/edit_jurnal/' . $tpl->id_jurnal) ?>">Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item btn-danger" href="<?php echo site_url('C_frontend/hapus_jurnal/' . $tpl->id_jurnal) ?>">Hapus</a>
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