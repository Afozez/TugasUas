<?php
session_start();

// Cek apakah session admin_logged_in sudah ada dan bernilai true
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Jika tidak, redirect ke halaman login
    header('Location: login-admin.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include ('assets/layout/header.php'); ?>
<!-- End Head -->

<body class="hold-transition sidebar-mini assets/layout-fixed">
  <!-- Wrapper -->
  <div class="wrapper">
    <!-- Preloader -->
    <?php include ('assets/layout/preloader.php'); ?>
    <!-- End Preloader -->

    <!-- Navbar -->
    <?php include ('assets/layout/navbar.php') ?>
    <!-- End Navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php include ('assets/layout/logo.php'); ?>
      <!-- End Brand Logo -->

      <!-- Sidebar -->
      <?php include ('assets/layout/aside.php') ?>
      <!-- End Sidebar -->
    </aside>
    <!-- End Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- Content Header-->
      <?php include ('assets/layout/content-header.php'); ?>
      <!-- End Content Header -->

      <!-- Main Content -->
      <?php include ('assets/layout/data-table.php'); ?>
      <!-- End Main Content -->
    </div>
    <!-- End Content Wrapper. Contains page content -->

    <!-- Footer -->
    <?php include ('assets/layout/footer.php'); ?>
    <!-- End Footer -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- End wrapper -->


</body>

</html>