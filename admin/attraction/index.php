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
                            <a href='attraction/create.php?page=attraction' class="btn btn-info"><i class="fas fa-plus"></i>Tambah artikel</a>
                        </div>
                        <!-- /.card-tools -->
                    </div>

                    <div class="card-body">

                        <table width='100%' id='tabel-simpel' class="table table-bordered">

                            <tr>
                                <th>No</th>
                                <th>kategori</th>
                                <th>district</th>
                                <th>nama</th>
                                <th>map</th>
                                <th>description</th>
                                <th>Image</th>
                                <th>capacity</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            $result = mysqli_query($mysqli, "SELECT *
                            FROM attraction
                            ORDER BY id DESC");

                            while ($data = mysqli_fetch_array($result)) {
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['kategori'] ?></td>
                                    <td><?= $data['attraction'] ?></td>
                                    <td><?= $data['author'] ?></td>
                                    <td><?= $data['title'] ?></td>
                                    <td><?= $data['description'] ?></td>
                                    <td><?= $data['image'] ?></td>
                                    <td><?= $data['capacity'] ?></td>
                                    <td>
                                        <a class="btn btn-success" href='attraction/edit.php?id=<?= $data['id'] ?>&page=attraction'>Edit</a>
                                        <a class="btn btn-danger" onclick='return confirmDelete()' href='attraction/delete.php?id=<?= $data['id'] ?>&page=attraction'>Hapus</a>
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