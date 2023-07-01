<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include("../../config.php");
include('session.php');

if (isset($_POST['submit'])) {
    $category_id = @$_POST['category_id'];
    $attraction_id = @$_POST['attraction_id'];
    $author_id  = @$_POST['author_id'];
    $title = @$_POST['title'];
    $description = @$_POST['description'];
    $sql = "SELECT * FROM article WHERE title='$title'";
    $ekstensi_diperbolehkan    = array('png', 'jpg');
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

    $result = mysqli_query($mysqli, "INSERT INTO article(category_id,attraction_id,author_id,title,description,image)
         VALUES('$category_id','$attraction_id','$author_id','$title','$description','$file_name')");
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
    <title>Login Admin Panel</title>

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
            <?php include('content-header.php'); ?>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">

                                <div class="card-header">
                                    <h3 class="card-title">Data artikel
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
                                            <label for="category_id">Category</label>
                                            <input type="text" class="form-control" name="category_id" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="attraction_id">attraction</label>
                                            <input type="text" class="form-control" name="attraction_id" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="author_id">author</label>
                                            <input type="text" class="form-control" name="author_id" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">title</label>
                                            <input type="text" class="form-control" name="title" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea type="text" class="form-control" name="description" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" name="image" required></textarea>
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