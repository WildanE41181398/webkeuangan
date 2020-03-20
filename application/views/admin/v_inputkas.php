<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Kas Masuk</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
                <form action="<?php echo base_url() . 'admin/C_kas/tambah_kas'; ?>" method="post">
                    <div class="form-group">
                        <label for="nomor_rekening"> Nomor Rekening : </label>
                        <input type="text" class="form-control form-control-user" id="nomor_rekening" name="nomor_rekening" placeholder="Masukan Nomor Rekening" title="Isikan data dengan benar" required pattern="[a-zA-Z\s]+">
                    </div>
                    <div class="form-group">
                        <label for="kas_masuk"> Kas Masuk : </label>
                        <input type="text" name="kas_masuk" class="form-control form-control-user" placeholder="Masukkan Kas Masuk" title="Isikan Angka" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon"> Keterangan : </label>
                        <input type="text" name="keterangan" class="form-control form-control-user" placeholder="Masukkan Keterangan" title="Isikan Angka" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal"> Tanggal Masuk : </label>
                        <?php date_default_timezone_set('Asia/Jakarta');?>
                        <input type="date" class="form-control" name="tanggal" id="tanggal">
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Tambah</button>
                </form>
                <br>
                <div class="text-center">
                    <div class="row">

                    </div>
                    <!-- Batas edit profil -->
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>