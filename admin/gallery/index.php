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
                        <h3 class="card-title">Data Gallery</h3>

                        <div class="card-tools">
                            <!-- This will cause the card to maximize when clicked -->
                            <a href='gallery/create.php?page=gallery' class="btn btn-info"><i class="fas fa-plus"></i>Tambah Foto</a>
                        </div>
                        <!-- /.card-tools -->
                    </div>

                    <div class="card-body">

                        <table width='100%' id='tabel-simpel' class="table table-bordered">

                            <tr>
                                <th>No</th>
                                <th>title</th>
                                <th>description</th>
                                <th>image</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            $result = mysqli_query($mysqli, "SELECT *
                            FROM gallery
                            ORDER BY id DESC");

                            while ($data = mysqli_fetch_array($result)) {
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['title'] ?></td>
                                    <td><?= $data['description'] ?></td>
                                    <td><?= $data['image'] ?></td>
                                    <td>
                                        <a class="btn btn-success" href='gallery/edit.php?id=<?= $data['id'] ?>&page=gallery'>Edit</a>
                                        <a class="btn btn-danger" onclick='return confirmDelete()' href='gallery/delete.php?id=<?= $data['id'] ?>&page=contact'>Hapus</a>
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