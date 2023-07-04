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
                        <h3 class="card-title">Data Social</h3>

                        <div class="card-tools">
                            <!-- This will cause the card to maximize when clicked -->
                            <a href='social/create.php?page=social' class="btn btn-info"><i class="fas fa-plus"></i>Tambah Social</a>
                        </div>
                        <!-- /.card-tools -->
                    </div>

                    <div class="card-body">

                        <table width='100%' id='tabel-simpel' class="table table-bordered">

                            <tr>
                                <th>No</th>
                                <th>URL</th>
                                <th>Username</th>
                                <th>Icon</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            $result = mysqli_query($mysqli, "SELECT *
                            FROM socials
                            ORDER BY id DESC");

                            while ($data = mysqli_fetch_array($result)) {
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['url'] ?></td>
                                    <td><?= $data['username'] ?></td>
                                    <td><?= $data['icon'] ?></td>
                                    <td>
                                        <a class="btn btn-success" href='social/edit.php?id=<?= $data['id'] ?>&page=social'>Edit</a>
                                        <a class="btn btn-danger" onclick='return confirmDelete()' href='social/delete.php?id=<?= $data['id'] ?>&page=social'>Hapus</a>
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