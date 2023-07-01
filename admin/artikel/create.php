<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include("../../config.php");
include('session.php');

if (isset($_POST['submit'])) {
    $category_id = @$_POST['category_id'];
    $attraction_id = @$_POST['attraction_id'];
    if($attraction_id == 'null') {
        $attraction_id = null;
    }
    $author_id  = $login_session_id;
    $title = @$_POST['title'];
    $description = @$_POST['description'];
    $sql = "SELECT * FROM article WHERE title='$title'";
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

    $result = mysqli_query($mysqli, "INSERT INTO article(
        category_id,
        attraction_id,
        author_id,
        title,
        description,
        image
    ) VALUES (
        '$category_id',
        '$attraction_id',
        '$author_id',
        '$title',
        '$description',
        '$file_name'
    )");

    header("Location:../dashboard.php?page=artikel");
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
                                    <h3 class="card-title">Tambah artikel
                                    </h3>

                                    <div class="card-tools">
                                        <!-- This will cause the card to maximize when clicked -->
                                        <a href="<?= $base_url_admin ?>/dashboard.php?page=article" class="btn btn-info">Kembali</a>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <form action="../artikel/create.php?page=article" method="post" enctype="multipart/form-data">

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
                                            <label for="attraction_id">Destinasi wisata</label>
                                            <select class="form-control" name="attraction_id">
                                                <option value="null">Tidak ada</option>
                                                <?php                
                                                $no = 1;
                                                $result = mysqli_query($mysqli, "SELECT * FROM attractions ORDER BY id DESC");

                                                while ($data = mysqli_fetch_array($result)) {
                                                ?>
                                                <option value="<?=$data['id']?>"><?=$data['name']?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Judul Artikel</label>
                                            <input type="text" class="form-control" name="title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea type="text" class="form-control" name="description" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" name="image" required>
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
<script src="../../assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/admin/dist/js/adminlte.min.js"></script>
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