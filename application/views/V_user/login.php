<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>

<body>
    <div class="container">
        <h3>Login Jurnal Mengajar</h3>
        <form action="<?php echo site_url('C_user/c_aksi_login') ?>" method="POST">
            <!-- Flashdata Login Gagal-->
            <?php echo $this->session->flashdata('msg'); ?>
            <div class="form-group">
                <label>Nomer Telepon</label>
                <input type="number" name="f_notelp" class="form-control" placeholder="Enter Telpon">
                <small class="form-text text-muted">Masukan nomer telepon yang sudah terdaftar</small>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="f_password" class="form-control" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <small class="form-text text-muted">Belum punya akun? <a href="<?php echo site_url('C_user/V_register') ?>">Daftar disini</a></small>
    </div>

</body>

</html>