<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <!-- CSS Login -->
    <link href="../assets/bootstrap4/css/style_login.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>
        <b>Jurnal Mengajar</b>
    </h1>

    <img src="../assets/images/vektor.png">

    <div class="container">
        <h2>Login Jurnal Mengajar</h2>
        <br><br>
        <form action="<?php echo site_url('C_user/c_aksi_login') ?>" method="POST">
            <!-- Flashdata Login Gagal-->
            <?php echo $this->session->flashdata('msg'); ?>
            <div class="form-group">
                <label>
                    <b>Nomer Telepon</b>
                </label>

                <br>

                <input type="number" name="f_notelp" class="form-control" placeholder="Enter Phone">

                <br>

                <small class="form-text text-muted">Masukan nomer telepon yang sudah terdaftar</small>
            </div>

            <br><br>

            <div class="form-group">
                <label>
                    <b>Password</b>
                </label>

                <input type="password" name="f_password" class="form-control" placeholder="Enter Password">
            </div>

            <br><br>
            <button type="submit" class="submit">Submit</button>
        </form>

        <br>
        <center>
            <small class="form-text text-muted">Belum punya akun?
                <a href="<?php echo site_url('C_user/V_register') ?>">Daftar disini</a>
            </small>
        </center>
    </div>
</body>

</html>