<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <!-- IKI KOK STYLE E GAISO DIPISAH NA STYLE.CSS :" -->
    <!-- <link href="../assets/bootstrap4/css/style_login.css" rel="stylesheet" type="text/css"> -->
    <style>
        body {
            height: 100%;
            background-size: cover;
            background-color: #FF0000;
            background-position: center;
            background-repeat: no-repeat;
        }

        .container {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 700px;
            height: 580px;
            border-radius: 30px;
            transform: translate(-50%, -50%);
            padding: 20px 25px;
            background-color: #F5F5F5;
        }

        h2 {
            background-color: #FF0000;
            border-radius: 15px;
            padding: 15px 10px;
            margin-top: 7px;
            color: whitesmoke;
            text-align: center;
            font-family: Arial,
                Helvetica,
                sans-serif;
        }

        label {
            font-size: 18px;
            font-family: Arial,
                Helvetica,
                sans-serif;
        }

        .form-control {
            width: calc(100% - 65px);
            padding: 13px;
            margin-top: 7px;
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid #FF0000;
            color: #000000;
            font-size: 13px;
        }

        .submit {
            width: 100%;
            margin-top: 20px;
            padding: 15px 10px;
            border: none;
            border-radius: 10px;
            background-color: #2979ff;
            font-size: 18px;
            color: #fafafa;
        }

        small {
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Registrasi Jurnal Mengajar</h2>
        <br>

        <form action="<?php echo site_url('C_user/C_aksi_register') ?>" method="POST">
            <table>
                <tr>
                    <td>
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
                    </td>

                    <td>
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
                    </td>
                </tr>
            </table>

            <br>
            <button type="submit" class="submit">Submit</button>
        </form>

        <br>
        <center>
            <small class="form-text text-muted">Sudah punya akun?
                <a href="<?php echo site_url('C_user') ?>">Login disini</a>
            </small>
        </center>
    </div>

</body>

</html>