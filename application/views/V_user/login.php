<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6" style="margin: auto; margin-top: 10%;">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Login Jurnal Mengajar</h3>
                    </div>
                    <!-- Tampil Session -->
                    <?php echo $this->session->flashdata('msg') ?>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="<?php echo site_url('C_user/C_aksi_login') ?>" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Nomer Telepon</label>
                                <input class="form-control" name="f_notelp" placeholder="Masukan Nomer Telepon">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="f_password" class="form-control" placeholder="Password">
                            </div>
                            <small class="text-muted">Belum Memiliki Akun? <a href="<?php echo site_url('C_user/V_register') ?>">Daftar Disini!</a></small>
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