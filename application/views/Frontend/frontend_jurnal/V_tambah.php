<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Tambah Jurnal</h4>
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
                            <form action="<?php echo site_url('C_frontend/aksi_add_jurnal') ?>" method="POST">
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
                                            <input type="text" name="f_jamdari" class="form-control" placeholder="Dari">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" name="f_jamke" class="form-control" placeholder="Ke">
                                        </div>
                                    </div>
                                    <!-- Ambil data dari tb kelas -->
                                    <div class="form-group">
                                        <label>Kelas</label>
                                        <select name="f_getkelas" class="form-control-lg select2" style="width: 100%;">
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
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Ijin</label>
                                        <select class="form-control-lg select2" style="width: 100%;">
                                            <option value=""></option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alpha</label>
                                        <select class="form-control-lg select2" style="width: 100%;">
                                            <option value=""></option>

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