<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Jurnal</h1>
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
                            <table id="detailjurnal" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Kelas</th>
                                        <th>Kegiatan</th>
                                        <th>Tugas</th>
                                        <th>Sakit</th>
                                        <th>Ijin</th>
                                        <th>Alpa</th>
                                        <th>Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $tampil_detail['tgl_jurnal'] ?></td>
                                        <td><?php echo $tampil_detail['jam'] ?></td>
                                        <td><?php echo $tampil_detail['nama_kelas'] ?></td>
                                        <td><?php echo $tampil_detail['kegiatan'] ?></td>
                                        <td><?php echo $tampil_detail['tugas'] ?></td>
                                        <td><?php echo $tampil_detail['sakit'] ?></td>
                                        <td><?php echo $tampil_detail['ijin'] ?></td>
                                        <td><?php echo $tampil_detail['alpa'] ?></td>
                                        <td><?php echo $tampil_detail['catatan'] ?></td>
                                    </tr>
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