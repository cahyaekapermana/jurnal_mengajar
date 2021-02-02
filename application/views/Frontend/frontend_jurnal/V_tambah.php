<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Tambah Jurnal berdasarkan kelas <?php echo $kelas_byId['nama_kelas'] ?></h4>
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
                                    <!-- Hidden -->
                                    <input type="text" name="f_id_kelas" value="<?php echo $this->input->get('f_getkelas') ?>">
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
                                    <div class="form-group">
                                        <label>Kegiatan</label>
                                        <textarea class="form-control" name="f_kegiatan" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Tugas</label>
                                        <textarea class="form-control" name="f_tugas" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <b><label>Absensi Siswa : </label></b><br>
                                        <small class="text-muted">Masukan data siswa yang melakukan absensi (sakit, ijin atau alpa) dibawah!</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Sakit</label>
                                        <div class="select2-purple">
                                            <select class="select2" name="f_sakit[]" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                                <?php if ($siswa_byIdKelas->num_rows() > 0) {

                                                    foreach ($siswa_byIdKelas->result_array() as $rowSakit) {

                                                        echo '<option value="' . $rowSakit['id_siswa'] . '">' . $rowSakit['nama_siswa'] . '</option>';
                                                    }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Ijin</label>
                                        <div class="select2-purple">
                                            <select class="select2" name="f_ijin[]" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                                <?php if ($siswa_byIdKelas->num_rows() > 0) {

                                                    foreach ($siswa_byIdKelas->result_array() as $rowIjin) {

                                                        echo '<option value="' . $rowIjin['id_siswa'] . '">' . $rowIjin['nama_siswa'] . '</option>';
                                                    }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Alpha</label>
                                        <div class="select2-purple">
                                            <select class="select2" name="f_alpha[]" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                                <?php if ($siswa_byIdKelas->num_rows() > 0) {

                                                    foreach ($siswa_byIdKelas->result_array() as $rowAlpa) {

                                                        echo '<option value="' . $rowAlpa['id_siswa'] . '">' . $rowAlpa['nama_siswa'] . '</option>';
                                                    }
                                                } ?>
                                            </select>
                                        </div>
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