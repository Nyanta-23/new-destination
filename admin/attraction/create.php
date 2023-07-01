<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include("../../config.php");
include('session.php');

if (isset($_POST['submit'])) {
    $category_id = @$_POST['category_id'];
    $district_id = @$_POST['district_id'];
    $name = @$_POST['name'];
    $description = @$_POST['description'];
    $map_url = @$_POST['map_url'];
    $capacity = @$_POST['capacity'];
    $available_toilet = (@$_POST['available_toilet'] == 'true') ? 1:0;
    $available_mosque = (@$_POST['available_mosque'] == 'true') ? 1:0;
    $available_restaurant = (@$_POST['available_restaurant'] == 'true') ? 1:0;
    
    $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
    $nama = $_FILES['image']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            $query = move_uploaded_file($file_tmp, 'image/' . $nama);
            $file_name = $nama;
            if ($query) {
                echo '<script> alert("FILE BERHASIL DI UPLOAD") </script>';
            } else {
                echo '<script> alert("GAGAL MENGUPLOAD GAMBAR") </script>';
            }
        } else {
            echo '<script> alert("UKURAN FILE TERLALU BESAR") </script>';
        }
    } else {
        echo '<script> alert("EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN") </script>';
    }

    $result = mysqli_query($mysqli, "INSERT INTO attractions(
        category_id,
        district_id,
        name,
        description,
        map_url,
        capacity,
        available_toilet,
        available_mosque,
        available_restaurant,
        image
    ) VALUES (
        '$category_id',
        '$district_id',
        '$name',
        '$description',
        '$map_url',
        '$capacity',
        '$available_toilet',
        '$available_mosque',
        '$available_restaurant',
        '$file_name'
    )");
}
// 
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include('../template/navbar.php'); ?>
        <?php include('../template/sidebar.php'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                        <?php include('content-header.php'); ?>
                </div>
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">

                                <div class="card-header">
                                    <h3 class="card-title">Tambah Destinasi Wisata
                                    </h3>

                                    <div class="card-tools">
                                        <!-- This will cause the card to maximize when clicked -->
                                        <a href="<?= $base_url_admin ?>/dashboard.php?page=attraction" class="btn btn-info">Kembali</a>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <form action="../attraction/create.php?page=attraction" method="post" enctype="multipart/form-data">

                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="category_id">Kategori Artikel</label>
                                            <select class="form-control" name="category_id">
                                                <?php                
                                                $no = 1;
                                                $result = mysqli_query($mysqli, "SELECT * FROM category ORDER BY id DESC");

                                                while ($data = mysqli_fetch_array($result)) {
                                                ?>
                                                <option value="<?=$data['id']?>"><?=$data['nama']?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="district_id">Kabupaten</label>
                                            <select class="form-control" name="district_id">
                                                <?php                
                                                $no = 1;
                                                $result = mysqli_query($mysqli, "SELECT * FROM district ORDER BY id DESC");

                                                while ($data = mysqli_fetch_array($result)) {
                                                ?>
                                                <option value="<?=$data['id']?>"><?=$data['nama']?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Nama Wisata</label>
                                            <input type="text" class="form-control" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Deskripsi</label>
                                            <textarea type="text" class="form-control" name="description" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" name="image" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="map_url">Url Map</label>
                                            <input type="text" class="form-control" name="map_url" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="capacity">Kapasitas</label>
                                            <input type="number" class="form-control" name="capacity" required>
                                        </div>
                                        <label for="">Ketersediaan</label>
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="checkAvailableToilet" name="available_toilet" value="true">
                                                <label class="form-check-label" for="checkAvailableToilet">Toilet</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="checkAvailableMosque" name="available_mosque" value="true">
                                                <label class="form-check-label" for="checkAvailableMosque">Event</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="checkAvailableRestaurant" name="available_restaurant" value="true">
                                                <label class="form-check-label" for="checkAvailableRestaurant">Restoran</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->


        <?php include('../template/footer.php'); ?>

    </div>
</body>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script>
    function confirmDelete() {
        if (confirm('Anda yakin menghapus data?')) {
            //action confirmed
        } else {
            //action cancelled
            alert('Data batal di hapus');
            return false;

        }
    }
</script>
</body>

</html>