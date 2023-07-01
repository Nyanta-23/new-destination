<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include("../../config.php");
include('session.php');

if (isset($_POST['submit'])) {
    $nama = @$_POST['nama'];
    $province_id = @$_POST['province_id'];
    $sql = "SELECT * FROM district WHERE nama='$nama'";


    $result = mysqli_query($mysqli, "INSERT INTO district(nama,province_id)
         VALUES('$nama','$province_id')");
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
                                    <h3 class="card-title">Data district
                                    </h3>

                                    <div class="card-tools">
                                        <!-- This will cause the card to maximize when clicked -->
                                        <a href="<?= $base_url_admin ?>/dashboard.php?page=district" class="btn btn-info">Kembali</a>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <form action="../district/create.php?page=district" method="post" enctype="multipart/form-data">

                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="nama">nama</label>
                                            <input type="text" class="form-control" name="nama" required>
                                        </div>

                                        <?php
                                        $province = mysqli_query($mysqli, "SELECT * FROM province ORDER BY id DESC");
                                        ?>
                                        <div class="form-group">
                                            <label for="content_artikel">Province</label>
                                            <select class="form-control" name="province_id" required>
                                                <option value="">Pilih Province</option>
                                                <?php while ($data = mysqli_fetch_array($province)) { ?>
                                                    <option value="<?= $data['id'] ?>"><?= $data['nama_province'] ?></option>
                                                <?php } ?>
                                                <select>
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