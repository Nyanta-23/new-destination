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
                        <h3 class="card-title">Data Kontak</h3>

                        <div class="card-tools">
                            <!-- This will cause the card to maximize when clicked -->
                            <a href='contact/create.php?page=contact' class="btn btn-info"><i class="fas fa-plus"></i>Tambah users</a>
                        </div>
                        <!-- /.card-tools -->
                    </div>

                    <div class="card-body">

                        <table width='100%' id='tabel-simpel' class="table table-bordered">

                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>phone_number</th>
                                <th>url</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            $result = mysqli_query($mysqli, "SELECT *
                            FROM contact
                            ORDER BY id DESC");

                            while ($data = mysqli_fetch_array($result)) {
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['email'] ?></td>
                                    <td><?= $data['phone_number'] ?></td>
                                    <td><?= $data['url'] ?></td>
                                    <td>
                                        <a class="btn btn-success" href='contact/edit.php?id=<?= $data['id'] ?>&page=contact'>Edit</a>
                                        <a class="btn btn-danger" onclick='return confirmDelete()' href='contact/delete.php?id=<?= $data['id'] ?>&page=contact'>Hapus</a>
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