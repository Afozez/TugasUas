<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "news_portal");

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mendapatkan semua berita
$result = $conn->query("SELECT * FROM berita ORDER BY tanggal DESC");

// Ambil jumlah total berita
$total_berita = $result->num_rows;
?>

<?php
// Close connection
$conn->close();
?>

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
        display: flex;
        justify-content: center;
        margin: 0px 20px;
    }

    form {
        width: 100%;
    }

    label {
      color: black;
        font-size: 1.1em;
        margin-top: 20px;
    }

    input,textarea {
        width: 100%;
        height: 45px;
        border-radius: 5px;
        border: 0.1px solid black;
    }

    .btn-tmb-berita {
        color: white;
        background-color: #265073;
        border-radius: 5px;
        border: none;
        margin-top: 20px;
    }
    
    h1 {
      color: black;
      font-weight: bolder;
    }
    </style>
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
            <div class="content-header">
              <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                  <h1 class="m-0">Hapus Berita</h1>
                  </div><!-- /.col -->
              </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- Content Header-->

            <!-- Main Content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Loop untuk menampilkan setiap berita
                                            $no = 1;
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $no++ . "</td>";
                                                echo "<td>" . $row['judul'] . "</td>";
                                                echo "<td>" . date('d M Y', strtotime($row['tanggal'])) . "</td>";
                                                echo "<td>";
                                                echo "<a href='hapus_berita.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>";
                                                echo "</td>";
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
                </div><!-- /.container-fluid -->
            </section>
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