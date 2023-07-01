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
                        <h3 class="card-title">Data Destinasi Wisata</h3>

                        <div class="card-tools">
                            <!-- This will cause the card to maximize when clicked -->
                            <a href='attraction/create.php?page=attraction' class="btn btn-info"><i class="fas fa-plus"></i>Tambah destinasi</a>
                        </div>
                        <!-- /.card-tools -->
                    </div>

                    <div class="card-body">

                        <table width='100%' id='tabel-simpel' class="table table-bordered">

                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>District</th>
                                <th>Nama</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>capacity</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            $result = mysqli_query($mysqli, "SELECT attractions.*, category.nama category, district.nama district
                            FROM attractions
                            INNER JOIN category ON category.id = attractions.category_id
                            INNER JOIN district ON district.id = attractions.district_id
                            ORDER BY id DESC");

                            while ($data = mysqli_fetch_array($result)) {
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['category'] ?></td>
                                    <td><?= $data['district'] ?></td>
                                    <td><?= $data['name'] ?></td>
                                    <td><?= $data['description'] ?></td>
                                    <td><img src="../admin/attraction/image/<?= $data['image']?>" alt="" width="100" height="50" style="object-fit: cover;"></td>
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