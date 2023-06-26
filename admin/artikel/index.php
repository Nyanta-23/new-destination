<?php
include_once("../config.php");

?>
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data artikel</h3>

                        <div class="card-tools">
                            <!-- This will cause the card to maximize when clicked -->
                            <a href='artikel/create.php?page=artikel' class="btn btn-info"><i class="fas fa-plus"></i>Tambah artikel</a>
                        </div>
                        <!-- /.card-tools -->
                    </div>

                    <div class="card-body">

                        <table width='100%' id='tabel-simpel' class="table table-bordered">

                            <tr>
                                <th>No</th>
                                <th>Judul Artikel</th>
                                <th>Image</th>
                                <th>Penulis</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            $result = mysqli_query($mysqli, "SELECT *
                            FROM article
                            ORDER BY id DESC");

                            while ($data = mysqli_fetch_array($result)) {
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['title'] ?></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>
                                        <a class="btn btn-success" href='artikel/edit.php?id=<?= $data['id'] ?>&page=artikel'>Edit</a>
                                        <a class="btn btn-danger" onclick='return confirmDelete()' href='artikel/delete.php?id=<?= $data['id'] ?>&page=artikel'>Hapus</a>
                                    </td>
                                </tr><?php } ?>
                        </table>
                    </div>
                </div><!-- /.card -->
            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>