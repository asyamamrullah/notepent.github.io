<div class="content-header">
    <div class="container-fluid">
        <h1>Data User Aplikasi Notepent</h1>
    </div>
</div>

<div class="container-fluid px-4">
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="staticBackdropLabel">Form Tambah Data User</h5>
                    <button type="button" class="close tombol-tutup" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Kalau Error -->
                    <div class="alert alert-danger error" role="alert" style="display: none;">
                    </div>

                    <!-- Kalau Sukkes -->
                    <div class="alert alert-primary sukses" role="alert" style="display: none;">
                    </div>
                    <!-- Form Input Data -->
                    <form>
                        <input type="hidden" id="inputId">
                        <div class="form-group">
                            <label for="inputNamaUser">Nama User</label>
                            <input type="text" class="form-control" id="inputNamaUser" placeholder="Masukan Nama User">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Masukan Email">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword"
                                placeholder="Masukan Password">
                        </div>
                        <div class="form-group">
                            <label for="inputLevel">Level</label>
                            <select class="form-control" id="inputLevel">
                                <option selected="Pilih Level">Pilih Level</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary tombol-tutup" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" id="tombolSimpan">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header bg-warning">Data User</h5>
        <div class="card-body">
            <!-- Tombol Katakunci -->
            <form action="" method="get">
                <div class="input-group py-3">
                    <input type="text" class="form-control" placeholder="Masukan Katakunci"
                        value="<?php echo $katakunci?>" name="katakunci" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="cari">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#staticBackdrop">
                <i class="fa fa-plus"></i> Tambah Data User
            </button>


            <!-- Tabel Data -->
            <table class="table table-striped table-bordered">
                <thead class="text-center bg-secondary">
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($dataUser as $k => $v) { 
                        $nomor = $nomor + 1;
                    ?>
                    <tr>
                        <td class="text-center"><?= $nomor?></td>
                        <td><?php echo $v['nama_user']?></td>
                        <td><?php echo $v['email']?></td>
                        <td class="text-center"><?php echo $v['level']?></td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                data-target="#staticBackdrop" onclick="edit(<?php echo $v['id'] ?>)"><i
                                    class="fa fa-pen"></i>
                                Edit
                            </button>
                            <button type="button" class="btn btn-danger btn-sm"
                                onclick="hapus(<?php echo $v['id'] ?>)"><i class="fa fa-trash"></i> Hapus
                            </button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <br>
            <?php
                $linkPagination = $pager->links();
                $linkPagination = str_replace('<li class="active">','<li class="page-item active">',$linkPagination);
                $linkPagination = str_replace('<li>','<li class="page-item">', $linkPagination);
                $linkPagination = str_replace("<a","<a class='page-link'",$linkPagination);
                echo $linkPagination;
            ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
</script>

<script>
function hapus($id) {
    var result = confirm('Yakin ingin menghapus data');
    if (result) {
        window.location = "<?php echo site_url("tabeluser/hapus")?>/" + $id;

    }
}

function edit($id) {
    $.ajax({
        url: "<?php echo site_url("tabeluser/edit")?>/" + $id,
        type: "get",
        success: function(hasil) {
            var $obj = $.parseJSON(hasil);
            if ($obj.id != '') {
                $('#inputId').val($obj.id);
                $('#inputNamaUser').val($obj.nama_user);
                $('#inputEmail').val($obj.email);
                $('#inputPassword').val($obj.password);
                $('#inputLevel').val($obj.level);
            }
        }
    });

}

function bersihkan() {
    $('#inputId').val('');
    $('#inputNamaUser').val('');
    $('#inputEmail').val('');
    $('#inputPassword').val('');
}
$('.tombol-tutup').on('click', function() {
    if ($('.sukses').is(":visible")) {
        window.location.href = "<?php echo current_url()."?".$_SERVER['QUERY_STRING']?>";
    }
    bersihkan();
});

$('#tombolSimpan').on('click', function() {
    var $id = $('#inputId').val();
    var $namauser = $('#inputNamaUser').val();
    var $email = $('#inputEmail').val();
    var $password = $('#inputPassword').val();
    var $level = $('#inputLevel').val();

    $.ajax({
        url: "<?php echo site_url('tabeluser/simpan')?>",
        type: "POST",
        data: {
            id: $id,
            namauser: $namauser,
            email: $email,
            password: $password,
            level: $level
        },
        success: function(hasil) {
            var $obj = $.parseJSON(hasil);
            if ($obj.sukses == false) {
                $('.sukses').hide();
                $('.error').show();
                $('.error').html($obj.error);

            } else {
                $('.error').hide();
                $('.sukses').show();
                $('.sukses').html($obj.sukses);
            }
        }
    });
    bersihkan();
});
</script>