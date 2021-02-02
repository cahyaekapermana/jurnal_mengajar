<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Kehadiran</h1>
                    <small>Detail kehadiran kelas <?php echo $getKetJurnal['nama_kelas'] ?></small> <br>
                    <small><span class="text-bold">Kegiatan </span> : <?php echo $getKetJurnal['kegiatan'] ?></small>
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
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($getDetailJurnal as $dataSiswa) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $nomor ?>
                                            </td>
                                            <td>
                                                <?php echo $dataSiswa['nama_siswa'] ?><br>
                                                <small class="text-muted">Nama Siswa </small>
                                            </td>
                                            <td>

                                                <?php echo $dataSiswa['keterangan'] ?><br>
                                                <small class="text-muted">Keterangan Kehadiran (Sakit/Ijin/Alpha/Hadir)</small>
                                            </td>

                                        </tr>
                                    <?php $nomor++;
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