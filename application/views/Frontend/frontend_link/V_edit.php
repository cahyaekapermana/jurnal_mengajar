

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4>Edit Link Tugas</h4>
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
                                <form action="<?php echo site_url('C_frontend/aksi_edit_tugas') ?>" method="POST">
                                    <input type="hidden" value="<?php echo $tampil_link_id['id_link'] ?>" name="f_idlink">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Tugas</label>
                                            <input type="text" name="f_nama" value="<?php echo $tampil_link_id['nama_tugas'] ?>" class="form-control" placeholder="Ketik disini">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Link Tugas</label>
                                            <input type="text" value="<?php echo $tampil_link_id['link_tugas'] ?>" name="f_link" class="form-control" placeholder="Ketik disini">
                                        </div>
                                    </div>
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
