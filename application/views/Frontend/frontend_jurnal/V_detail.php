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
                                        <td><?php echo $tampil_jurnal_id['tgl_jurnal'] ?></td>
                                        <td><?php echo $tampil_jurnal_id['jam'] ?></td>
                                        <td><?php echo $tampil_kelas_id['nama_kelas'] ?></td>
                                        <td><?php echo $tampil_jurnal_id['kegiatan'] ?></td>
                                        <td><?php echo $tampil_jurnal_id['tugas'] ?></td>
                                        <td><?php echo $tampil_jurnal_id['sakit'] ?></td>
                                        <td><?php echo $tampil_jurnal_id['ijin'] ?></td>
                                        <td><?php echo $tampil_jurnal_id['alpa'] ?></td>
                                        <td><?php echo $tampil_jurnal_id['catatan'] ?></td>
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