<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Tambah Kelas</h4>
                    <small class="text-muted">Tambahkan Kelas Terlebih dahulu untuk menambah data jurnal</small>
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
                            <form action="<?php echo site_url('C_frontend/add_jurnal') ?>" method="GET">

                                <div class="card-body">
                                    <!-- Id siswa ditambahkan ke id kelas -->
                                    <div class="form-group">
                                        <label>Kelas</label>
                                        <select name="f_getkelas" class="form-control-lg select2" style="width: 100%;">
                                            <?php foreach ($tampil_kelas->result() as $tpl) { ?>

                                                <option value="<?php echo $tpl->id_kelas ?>"><?php echo $tpl->nama_kelas ?></option>

                                            <?php } ?>
                                        </select>
                                        <small class="text-muted">Pilih kelas</small>

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