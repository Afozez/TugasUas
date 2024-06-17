<?php
session_start();
require_once "../database.php"; // Pastikan file koneksi database sudah terinclude dengan benar

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); // Tambahkan pesan kesalahan untuk debug
}

$error = ""; // Variabel untuk menyimpan pesan kesalahan

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        $error = "Email dan kata sandi harus diisi.";
    } else {
        // Lindungi dari SQL Injection dengan menggunakan prepared statement
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_assoc($result);

            if ($user) {
                if (password_verify($password, $user["password"])) {
                    $_SESSION["username"] = $user["username"]; // Simpan username ke dalam session
                    header("Location: ../index.php");
                    exit(); // Penting untuk keluar setelah header redirection
                } else {
                    $error = "Kata sandi salah.";
                }
            } else {
                $error = "Email tidak ditemukan.";
            }

            mysqli_stmt_close($stmt);
        } else {
            $error = "Gagal menyiapkan pernyataan.";
        }
    }

    // Simpan pesan kesalahan ke dalam session
    if (!empty($error)) {
        $_SESSION["error"] = $error;
        header("Location: login.php"); // Redirect agar form tidak resubmit saat refresh
        exit();
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/image/img-logo-hmps-1.png">
    <title>Login Form</title>
    <link rel="stylesheet" href="/tugasuas/auth/css/login.css?v=1.1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container-login">
        <!-- Tampilkan alert jika ada pesan kesalahan -->
        <?php
        if (isset($_SESSION["error"])) {
            echo '<div class="alert alert-danger">' . $_SESSION["error"] . '</div>';
            unset($_SESSION["error"]); // Hapus pesan setelah ditampilkan
        }
        ?>
        
        <!-- Form login -->
        <form action="login.php" method="post">
            <div class="header-login">Login</div>
            <div class="form-group">
                <input type="email" placeholder="Enter Email:" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password:" name="password" class="form-control" required>
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn text">
            </div>
            <div><p>Belum memiliki akun? <a href="registration.php">Daftar Disini</a></p></div>
        </form>
    </div>

    <!-- Script Bootstrap JS (Opsional, jika diperlukan) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-+TqStIXlZ7nG8j3a9ENqdJuoBDy5V1Ty7LWO8kF/ZuhF/xVX9chEYwrA7/nJT8L3" crossorigin="anonymous"></script>
</body>
</html>
