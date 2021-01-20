<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>

<body>
    <div class="container">
        <h3>Registrasi Jurnal Mengajar</h3>

        <form action="<?php echo site_url('C_user/C_aksi_register') ?>" method="POST">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="f_nama" class="form-control" placeholder="Ketik disini">
                <small class="form-text text-danger"><?php echo form_error('f_nama') ?></small>
            </div>
            <div class="form-group">
                <label>Nomer Telepon</label>
                <input type="text" name="f_notelp" class="form-control" placeholder="Ketik disini">
                <small class="form-text text-danger"><?php echo form_error('f_notelp') ?></small>

            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="f_email" class="form-control" placeholder="Ketik disini">
                <small class="form-text text-danger"><?php echo form_error('f_email') ?></small>
            </div>
            <div class="form-group">
                <label>Nama Instansi</label>
                <input type="text" name="f_instansi" class="form-control" placeholder="Ketik disini">
                <small class="form-text text-danger"><?php echo form_error('f_instansi') ?></small>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="f_password" class="form-control" placeholder="Ketik disini">
                <small class="form-text text-danger"><?php echo form_error('f_password') ?></small>
            </div>
            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" name="f_konfpassword" class="form-control" placeholder="Ketik disini">
                <small class="form-text text-danger"><?php echo form_error('f_konfpassword') ?></small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <small class="form-text text-muted">Sudah punya akun? <a href="<?php echo site_url('C_user') ?>">Login disini</a></small>
    </div>

</body>

</html>