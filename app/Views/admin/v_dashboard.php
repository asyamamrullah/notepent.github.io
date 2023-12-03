<body>
    <!-- Judul Halaman -->
    <div class="fakeLoader"></div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Info -->
    <div class="container-fluid px-4">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                    <h3> <?=count_data('tb_pemohon')?></h3>
                        <p>Pemohon</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-user"></i>
                    </div>
                    <a href="<?php echo base_url('TabelDataPemohon')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                    <h3> <?=count_data('tb_user')?></h3>
                        <p>User</p>
                    </div>
                  
                    <div class="icon">
                    <i class="fas fa-users"></i>
                       
                    </div>
                    <a href="<?php echo base_url('TabelUser')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                       <h3> <?=count_data('pentest')?></h3>

                        <p>Data Pentest</p>
                    </div>
                    <div class="icon"> 
                    <i class="fas fa-key"></i>
                    </div>
                    <a href="<?php echo base_url('TabelPentest')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                    <h3> <?=count_data('tb_dinas')?></h3>

                        <p>Instansi</p>
                    </div>
                    <div class="icon">
                     <i class="fas fa-building"></i>
                    </div>
                    <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

    <!-- Tabel Pentest -->
    <div class="container-fluid px-4">
        <div class="card">
            <h5 class="card-header bg-danger">Data Pentest</h5>
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

                <!-- Tabel Data -->
                <table class="table table-striped table-bordered table-responsive">
                    <thead class="text-center bg-secondary">
                        <tr class="">
                            <th rowspan="2">Id User</th>
                            <th rowspan="2">Pemohon</th>
                            <th rowspan="2">Tanggal</th>
                            <th rowspan="2">URL Target</th>
                            <th rowspan="2">Nama Instansi</th>
                            <th colspan="3">Penanggung Jawab</th>
                            <th rowspan="2">IP Address</th>
                            <th rowspan="2">Status Hosting</th>
                            <th colspan="3">Hasil Pentest</th>
                            <th rowspan="2">Keterangan</th>

                        </tr>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Kontak</th>
                            <th>High</th>
                            <th>Medium</th>
                            <th>Low</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    foreach($dataPentest as $k => $v) { 
                        $nomor = $nomor + 1;
                    ?>
                        <tr>
                            <td><?php echo $v ['kd_pentest'] ?></td>
                            <td><?php echo $v ['pemohon'] ?></td>
                            <td><?php echo $v ['tanggal'] ?></td>
                            <td><?php echo $v ['url_target'] ?></td>
                            <td><?php echo $v ['nama_in'] ?></td>
                            <td><?php echo $v ['p_jawab'] ?></td>
                            <td><?php echo $v ['p_email'] ?></td>
                            <td><?php echo $v ['p_no'] ?></td>
                            <td><?php echo $v ['ip_addres'] ?></td>
                            <td><?php echo $v ['status_hg'] ?></td>
                            <td><?php echo $v ['h_high'] ?></td>
                            <td><?php echo $v ['h_med'] ?></td>
                            <td><?php echo $v ['h_low'] ?></td>
                            <td><?php echo $v ['ket'] ?></td>

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

</body>
<!-- FakeLoader -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="dist/js/fakeLoader.min.js"></script>