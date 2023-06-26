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
                        <h3 class="card-title">Data users</h3>

                        <div class="card-tools">
                            <!-- This will cause the card to maximize when clicked -->
                            <a href='users/create.php?page=users' class="btn btn-info"><i class="fas fa-plus"></i>Tambah users</a>
                        </div>
                        <!-- /.card-tools -->
                    </div>

                    <div class="card-body">

                        <table width='100%' id='tabel-simpel' class="table table-bordered">

                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            $result = mysqli_query($mysqli, "SELECT *
                            FROM users
                            ORDER BY id DESC");

                            while ($data = mysqli_fetch_array($result)) {
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['username'] ?></td>
                                    <td>
                                        <a class="btn btn-success" href='users/edit.php?id=<?= $data['id'] ?>&page=users'>Edit</a>
                                        <a class="btn btn-danger" onclick='return confirmDelete()' href='users/delete.php?id=<?= $data['id'] ?>&page=users'>Hapus</a>
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