<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Data Pentest</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container-fluid px-4">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Data User</h3>
                </div>
                <form action="<?php echo base_url('/formtambahuser/simpan') ?>" method="POST">
                <?= csrf_field();?>
                    <div class="card-body">
                        
                            <div class="form-group">
                                <label for="namaUser">Nama User</label>
                                <input type="text" class="form-control" id="namaUser" name="namaUser"
                                    placeholder="Masukan Tanggal">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Masukan Email User">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Masukan Password User">
                            </div>
                            <div class="form-group">
                                <label for="level">Level</label>
                                <select class="form-control" id="level">
                                    <option>- Pilih Level -</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button id ="simpan"type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
