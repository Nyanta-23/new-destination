<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include_once("session.php");

// Create config connection using config file

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
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/admin/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/admin/plugins/chart.js/Chart.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include_once('template/navbar.php'); ?>
    <?php include_once('template/sidebar.php'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php include_once('template/content-header.php'); ?>
      <!-- /.content-header -->
      <!-- Main content -->
      <?php include_once('template/main-content.php'); ?>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

    <?php include_once('template/footer.php'); ?>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../assets/admin/plugins/jquery/jquery.min.js"></script>
  <script src="../assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../assets/admin/plugins/jszip/jszip.min.js"></script>
  <script src="../assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="../assets/admin/plugins/chart.js/Chart.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/admin/dist/js/adminlte.min.js"></script>
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
  <script>
    $(function() {
      $("table").DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      });
    });
  </script>
</body>

</html>