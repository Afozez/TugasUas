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
    <style>
        .container-form-berita {
            margin: 20px;
        }

        .btn-tmb-berita {
            color: white;
            background-color: #265073;
            border-radius: 5px;
            border: none;
            margin-top: 20px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/layout/adminlte/navbar.php'); ?>
        <!-- Navbar -->

        <!-- Main Sidebar -->
        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/layout/adminlte/aside.php'); ?>
        <!-- Main Sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tambah Berita</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- Content Header -->

            <!-- Main Content -->
            <div class="container-form-berita">
                <?php
                if (isset($_SESSION['error_message'])) {
                    echo "<p style='color: red;'>" . $_SESSION['error_message'] . "</p>";
                    unset($_SESSION['error_message']);
                }
                if (isset($_SESSION['success_message'])) {
                    echo "<p style='color: green;'>" . $_SESSION['success_message'] . "</p>";
                    unset($_SESSION['success_message']);
                }
                ?>
                <form action="proses_tambah_berita.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                        <div class="invalid-feedback">
                            Harap masukkan judul.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        <div class="invalid-feedback">
                            Harap masukkan tanggal.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar" required>
                        <div class="invalid-feedback">
                            Harap pilih gambar.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ringkasan">Ringkasan</label>
                        <textarea class="form-control" id="ringkasan" name="ringkasan" rows="3" required></textarea>
                        <div class="invalid-feedback">
                            Harap masukkan ringkasan.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Berita</label>
                        <textarea class="form-control" id="isi" name="isi" rows="5" required></textarea>
                        <div class="invalid-feedback">
                            Harap masukkan isi berita.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-tmb-berita">Tambah Berita</button>
                </form>
            </div>
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

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
</html>
