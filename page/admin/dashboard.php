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

<head>
    <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/layout/adminlte/head_adminlte.php'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/layout/adminlte/navbar.php'); ?>
        <!-- Navbar -->

        <!-- Main Sidebar  -->
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/layout/adminlte/aside.php'); ?>
        <!-- Main Sidebar  -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header-->
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/layout/adminlte/header_content.php'); ?>
            <!-- Content Header-->

            <!-- Main Content -->
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/layout/adminlte/dashboard.php'); ?>
            <!-- Main Content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Footer -->
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/layout/adminlte/footer_adminlte.php'); ?>
        <!-- Footer -->

    </div>
    <!-- ./wrapper -->

</body>
</html>