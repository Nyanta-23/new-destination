<?php
include_once("../../config.php");
include('session.php');

// Display selected user data based on id
// Getting id from url
$id = @$_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM district WHERE id=$id");

while ($district = mysqli_fetch_array($result)) {
    $row_nama = $district['nama'];
    $row_province = $district['province_id'];
}
?>
<?php
// include config connection file
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = @$_POST['nama'];
    $province = @$_POST['province'];
    $result = mysqli_query($mysqli, "UPDATE district SET nama='$nama',province_id='$province' WHERE id=$id");
    // update user data

    // Redirect to homepage to display updated user in list
    header("Location:../dashboard.php?page=district");
}
?>

<!DOCTYPE html>
<!--content-header.php
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
        <?php include_once('../template/navbar.php'); ?>
        <?php include_once('../template/sidebar.php'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php include_once('content-header.php'); ?>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">district</h3>

                                    <div class="card-tools">
                                        <!-- This will cause the card to maximize when clicked -->
                                        <a href="<?= $base_url_admin ?>/dashboard.php?page=district" class="btn btn-info">Kembali</a>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>

                                <div class="card-body">

                                    <form action="../../admin/district/edit.php" method="post">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <div class="form-group">
                                            <label for="nama">nama destinasi</label>
                                            <input type="text" class="form-control" value="<?= $row_nama ?>" name="nama" required <?php if ($row_nama == 'admin') { ?> readonly <?php } ?>>
                                        </div>
                                        <?php
                                        $province = mysqli_query($mysqli, "SELECT * FROM province ORDER BY id DESC");
                                        ?>
                                        <div class="form-group">
                                            <label for="province">Provinsi</label>
                                            <select class="form-control" name="province" required>
                                                <option value="">Pilih Provinsi</option>
                                                <?php while ($district = mysqli_fetch_array($province)) { ?>
                                                    <option value="<?= $district['id'] ?>" <?php if ($district['id'] == $row_province) { ?> <?= 'selected' ?> <?php } ?>><?= $district['nama_province'] ?></option>
                                                <?php } ?>
                                                <select>
                                        </div>
                                        <button class="btn btn-primary" type="submit" name="update">Simpan</button>

                                    </form>


                                </div>
                                <!-- /.content-wrapper -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('../template/footer.php'); ?>

    </div>
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
                alert('Data berhasil dihapus');
            } else {
                //action cancelled
                alert('Data batal di hapus');
                return false;

            }
        }
    </script>
</body>

</html>