<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6" style="margin: auto; margin-top: 5%;">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Registrasi Jurnal Mengajar</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="<?php echo site_url('C_user/C_aksi_register') ?>" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="f_nama" placeholder="Masukan Nama">
                                <small class="form-text text-danger"><?php echo form_error('f_nama') ?></small>

                            </div>
                            <div class="form-group">
                                <label>Nomer Telepon</label>
                                <input type="text" class="form-control" name="f_notelp" placeholder="Masukan Nomer Telepon">
                                <small class="form-text text-danger"><?php echo form_error('f_notelp') ?></small>

                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="f_email" placeholder="Masukan Email">
                                <small class="form-text text-danger"><?php echo form_error('f_email') ?></small>

                            </div>
                            <div class="form-group">
                                <label>Nama Instansi</label>
                                <input type="text" class="form-control" name="f_instansi" placeholder="Masukan Instansi">
                                <small class="form-text text-danger"><?php echo form_error('f_instansi') ?></small>

                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="f_password" placeholder="Masukan Password">
                                <small class="form-text text-danger"><?php echo form_error('f_password') ?></small>

                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="password" class="form-control" name="f_konfpassword" placeholder="Masukan Konfirmasi Password">
                                <small class="form-text text-danger"><?php echo form_error('f_konfpassword') ?></small>

                            </div>

                            <small class="text-muted">Sudah Memiliki Akun? <a href="<?php echo site_url('C_user') ?>">Login Disini!</a></small>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>