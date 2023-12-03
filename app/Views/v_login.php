<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>


    <!-- Google Font: Source Sans Pro -->

    <base href="<?php echo base_url('assets')?>/">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img src="dist/img/notepent_logo2.png" width="300px">
            </div>
            <div class="card-body pb-5">
                <!--pesan validasi error-->
                <?php $errors = session()->getFlashdata('errors'); ?>
                <?php if (!empty($errors)) : ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                        <li><?= esc($error) ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <?php endif ?>
                <?php
             if (session()->getFlashdata('pesan')){
                echo '<div class="alert alert-success" role="alert">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
             }
           
             ?>
                <p class="login-box-msg"></p>

                <?php
       echo form_open('auth/cek_login');
        ?>
                <div class="input-group mb-3">
                    <input type="text" name="nama_user" class="form-control" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <a href="<?php echo site_url('home')?>" class="btn btn-secondary btn-block">Kembali</a>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </div>
            </div>
            <?php form_close()?>
            <a href="<?= base_url('Auth/register')?>" class="text-center"> Jika Belum Memiliki Akun, Silahkan
                Registrasi
            </a><br>
        </div>
        <!-- /.col -->

        <!-- /.col -->

    </div>


    </div>
    <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
    </form>
    </div>
    <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

    <!-- FakeLoader -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="dist/js/fakeLoader.min.js"></script>
    <script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
    </script>
    <script>
    $(document).ready(function() {
        $.fakeLoader({
            bgColor: '#3498db',
            spinner: "spinner6"
        });
    });
    </script>

    <script src="dist/js/app.js"></script>
</body>
</body>

</html>