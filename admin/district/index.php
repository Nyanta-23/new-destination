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
                        <h3 class="card-title">Data District</h3>

                        <div class="card-tools">
                            <!-- This will cause the card to maximize when clicked -->
                            <a href='district/create.php?page=district' class="btn btn-info"><i class="fas fa-plus"></i>Tambah artikel</a>
                        </div>
                        <!-- /.card-tools -->
                    </div>

                    <div class="card-body">

                        <table width='100%' id='tabel-simpel' class="table table-bordered">

                            <tr>
                                <th>No</th>
                                <th>Nama Destinasi</th>
                                <th>Provinsi</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            $result = mysqli_query($mysqli, "SELECT district.*,
                            province.nama_province
                            FROM district
                            INNER JOIN province ON district.province_id = province.id
                            
                            ORDER BY id DESC");

                            while ($data = mysqli_fetch_array($result)) {
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['nama_province'] ?></td>
                                    <td>
                                        <a class="btn btn-success" href='district/edit.php?id=<?= $data['id'] ?>&page=district'>Edit</a>
                                        <a class="btn btn-danger" onclick='return confirmDelete()' href='district/delete.php?id=<?= $data['id'] ?>&page=district'>Hapus</a>
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