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
                                        <th>Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php

                                            $getSegJurnal = $this->uri->segment(3);

                                            ?>
                                            <a href="<?php echo site_url('C_frontend/detail_kehadiran?getIdJurnal=' . $getSegJurnal) ?>">
                                                <?php echo date('d F Y H.i A', strtotime($tampil_detail['tgl_jurnal'])) ?>
                                            </a><br>
                                            <small class="text-muted">Klik untuk mendetail</small>

                                        </td>
                                        <td>
                                            <?php echo $tampil_detail['jam'] ?><br>
                                            <small class="text-muted">Jam Mengajar</small>
                                        </td>
                                        <td>
                                            <?php echo $tampil_detail['nama_kelas'] ?><br>
                                            <small class="text-muted">Kelas Tempat Mengajar</small>
                                        </td>
                                        <td>
                                            <?php echo $tampil_detail['kegiatan'] ?><br>
                                            <small class="text-muted">Kegiatan Pembelajaran</small>
                                        </td>
                                        <td>
                                            <?php echo $tampil_detail['tugas'] ?><br>
                                            <small class="text-muted">Tugas Yang Diberikan</small>
                                        </td>
                                        <td>
                                            <?php echo $tampil_detail['catatan'] ?><br>
                                            <small class="text-muted">Catatan Pengajar</small>
                                        </td>
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