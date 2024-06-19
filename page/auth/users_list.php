<?php
session_start();

// Cek apakah session admin_logged_in sudah ada dan bernilai true
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Jika tidak, redirect ke halaman login
    header('Location: login-admin.php');
    exit;
}

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "login_register");

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mendapatkan semua pengguna
$sql = "SELECT id, full_name, username, email, password, created_at FROM users";
$result_users = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna - Admin</title>
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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Daftar Pengguna</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar Pengguna yang Terdaftar</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="userTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Lengkap</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Tanggal Pendaftaran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Loop untuk menampilkan setiap pengguna
                                            while ($row = $result_users->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['full_name'] . "</td>";
                                                echo "<td>" . $row['username'] . "</td>";
                                                echo "<td>" . $row['email'] . "</td>";
                                                echo "<td>" . date('d M Y', strtotime($row['created_at'])) . "</td>";
                                                echo "<td><a href='deleted_user.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a></td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
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

    <script>
    $(document).ready(function() {
        $('#userTable').DataTable();
    });
    </script>
</body>
</html>
