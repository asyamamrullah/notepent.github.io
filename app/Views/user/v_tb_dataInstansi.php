<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Instansi/Dinas</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid px-4">
    <form action="" method="get">
        <div class="input-group py-3">
            <input type="text" class="form-control" placeholder="Masukan Katakunci" value="<?php echo $katakunci?>"
                name="katakunci" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="cari">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-success">
                    <h3 class="card-title">Data Dinas</h3>
                </div>

                <table id="example1" class="table table-bordered table-striped ">
                    <thead class="text-center">
                        <tr>
                            <th>Id</th>
                            <th>Nama Instansi/Dinas</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach($dataInstansi as $k => $v) {?>
                        <tr>
                            <td class="text-center"><?= $v['id'] ?></td>
                            <td><?php echo $v ['nm_dinas'] ?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
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