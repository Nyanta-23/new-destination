<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include_once("../../config.php");
include('session.php');
define('SITE_ROOT', realpath(dirname(__FILE__)));

if (isset($_POST['update'])) {
    $id = @$_POST['id'];
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
    
    if (!empty($nama)) {
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
        $sql = "SELECT image FROM attractions WHERE id='$id'";
        $result = mysqli_query($mysqli, $sql);
        if ($result->num_rows ==  0) {
            $row = mysqli_fetch_assoc($result);
            if (file_exists('image/' . $filename)) {
                unlink('image/' . $filename);
                echo 'File ' . $row['image'] . ' has been deleted';
            } else {
                echo 'Could not delete ' . $row['image'] . ', file does not exist';
            }
        }
        $file_name = $nama;
        $result = mysqli_query($mysqli, "UPDATE attractions SET 
        category_id='$category_id',
        district_id='$district_id',
        name='$name',
        description='$description',
        map_url='$map_url',
        capacity='$capacity',
        available_toilet='$available_toilet',
        available_mosque='$available_mosque',
        available_restaurant='$available_restaurant',
        image='$file_name'
        WHERE id=$id");
    } else {
        $result = mysqli_query($mysqli, "UPDATE attractions SET  
        category_id='$category_id',
        district_id='$district_id',
        name='$name',
        description='$description',
        map_url='$map_url',
        capacity='$capacity',
        available_toilet='$available_toilet',
        available_mosque='$available_mosque',
        available_restaurant='$available_restaurant'
        WHERE id=$id");
    }

    // update user data

    // Redirect to homepage to display updated user in list
    header("Location:../dashboard.php?page=attraction");
}
// Display selected user data based on id
// Getting id from url
$id = @$_GET['id'];

// Fetech user data based on id
$red_attraction = mysqli_query($mysqli, "SELECT * FROM attractions WHERE id=$id");

while ($data = mysqli_fetch_array($red_attraction)) {
    $row_category_id = $data['category_id'];
    $row_district_id = $data['district_id'];
    $row_name = $data['name'];
    $row_description = $data['description'];
    $row_map_url = $data['map_url'];
    $row_capacity = $data['capacity'];
    $row_available_toilet = $data['available_toilet'];
    $row_available_mosque = $data['available_mosque'];
    $row_available_restaurant = $data['available_restaurant'];
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
                                    <h3 class="card-title">Edit Destinasi Wisata
                                    </h3>

                                    <div class="card-tools">
                                        <!-- This will cause the card to maximize when clicked -->
                                        <a href="<?= $base_url_admin ?>/dashboard.php?page=attraction" class="btn btn-info">Kembali</a>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <form action="../attraction/edit.php?page=attraction" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="category_id">Kategori Artikel</label>
                                            <select class="form-control" name="category_id">
                                                <?php                
                                                $no = 1;
                                                $result = mysqli_query($mysqli, "SELECT * FROM category ORDER BY id DESC");

                                                while ($data = mysqli_fetch_array($result)) {
                                                ?>
                                                <option value="<?=$data['id']?>" <?=($row_category_id == $data['id']) ? 'selected':false?>><?=$data['nama']?></option>
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
                                                <option value="<?=$data['id']?>" <?=($row_district_id == $data['id']) ? 'selected':false?>><?=$data['nama']?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Nama Wisata</label>
                                            <input type="text" class="form-control" name="name" required value="<?=$row_name?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Deskripsi</label>
                                            <textarea type="text" class="form-control" name="description" required><?=$row_description?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                        <div class="form-group">
                                            <label for="map_url">Url Map</label>
                                            <input type="text" class="form-control" name="map_url" required value="<?=$row_map_url?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="capacity">Kapasitas</label>
                                            <input type="number" class="form-control" name="capacity" required value="<?=$row_capacity?>">
                                        </div>
                                        <label for="">Ketersediaan</label>
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="checkAvailableToilet" name="available_toilet" value="true" <?=$row_available_toilet == 1 ? 'checked':false?>>
                                                <label class="form-check-label" for="checkAvailableToilet">Toilet</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="checkAvailableMosque" name="available_mosque" value="true" <?=$row_available_mosque == 1 ? 'checked':false?>>
                                                <label class="form-check-label" for="checkAvailableMosque">Event</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="checkAvailableRestaurant" name="available_restaurant" value="true" <?=$row_available_restaurant == 1 ? 'checked':false?>>
                                                <label class="form-check-label" for="checkAvailableRestaurant">Restoran</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary" type="submit" name="update">Simpan</button>
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