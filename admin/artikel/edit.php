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
    $attraction_id = @$_POST['attraction_id'];
    $author_id = $login_session_id;
    $title = @$_POST['title'];
    $description = @$_POST['description'];
    
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
        $sql = "SELECT image FROM article WHERE id='$id'";
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
        $result = mysqli_query($mysqli, "UPDATE article SET 
        category_id='$category_id',
        attraction_id='$attraction_id',
        author_id='$author_id',
        title='$title',
        description='$description',
        image='$file_name'
        WHERE id=$id");
    } else {
        $result = mysqli_query($mysqli, "UPDATE article SET  
        category_id='$category_id',
        attraction_id='$attraction_id',
        author_id='$author_id',
        title='$title',
        description='$description'
        WHERE id=$id");
    }

    // Redirect to homepage to display updated user in list
    header("Location:../dashboard.php?page=artikel");
} 
// Display selected user data based on id
// Getting id from url
$id = @$_GET['id'];

// Fetech user data based on id
$red_artikel = mysqli_query($mysqli, "SELECT * FROM article WHERE id=$id");

while ($data = mysqli_fetch_array($red_artikel)) {
    $row_category_id = $data['category_id'];
    $row_attraction_id = $data['attraction_id'];
    $row_author_id = $data['author_id'];
    $row_title = $data['title'];
    $row_description = $data['description'];
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
                                    <h3 class="card-title">Tambah Artikel
                                    </h3>

                                    <div class="card-tools">
                                        <!-- This will cause the card to maximize when clicked -->
                                        <a href="<?= $base_url_admin ?>/dashboard.php?page=artikel" class="btn btn-info">Kembali</a>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <form action="../artikel/edit.php?page=article" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?=$id?>">
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
                                            <label for="attraction_id">Destinasi wisata</label>
                                            <select class="form-control" name="attraction_id">
                                                <option value="null">Tidak ada</option>
                                                <?php                
                                                $no = 1;
                                                $result = mysqli_query($mysqli, "SELECT * FROM attractions ORDER BY id DESC");

                                                while ($data = mysqli_fetch_array($result)) {
                                                ?>
                                                <option value="<?=$data['id']?>" <?=($row_attraction_id == $data['id']) ? 'selected':false?>><?=$data['name']?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Judul Artikel</label>
                                            <input type="text" class="form-control" name="title" value="<?=$row_title?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea type="text" class="form-control" name="description" required><?=$row_description?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" name="image">
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