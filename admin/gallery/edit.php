<?php
include_once("../../config.php");
include('session.php');

// Display selected user data based on id
// Getting id from url
$id = @$_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM gallery WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $row_title = $user_data['title'];
    $row_description = $user_data['description'];
    $row_image = $user_data['image'];
}
?>
<?php
// include config connection file
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = @$_POST['title'];
    $description = @$_POST['description'];
    $image = @$_POST['image'];
    if ($title) {
        $result = mysqli_query($mysqli, "UPDATE gallery SET title='$title',description='$description',image='$image' WHERE id=$id");
    }
    // update user data

    // Redirect to homepage to display updated user in list
    header("Location:../dashboard.php?page=gallery");
}
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
                                    <h3 class="card-title">Data Gallery</h3>

                                    <div class="card-tools">
                                        <!-- This will cause the card to maximize when clicked -->
                                        <a href="../../admin?page=gallery" class="btn btn-info">Kembali</a>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>

                                <div class="card-body">

                                    <form action="../../admin/gallery/edit.php" method="post">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" value="<?= $row_title ?>" name="title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">description</label>
                                            <input type="text" class="form-control" value="<?= $row_description ?>" name="description" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">image</label>
                                            <input type="file" class="form-control" value="<?= $row_url ?>" name="image" required>
                                        </div>
                                        <button class="btn btn-primary" type="submit" name="update">Simpan</button>
                                </div>
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