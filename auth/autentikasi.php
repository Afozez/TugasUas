<?php
session_start();
require_once("../db_admin.php");

// Pastikan form login dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['usernameadmin']; // Ambil nilai dari input name="usernameadmin"
    $password = $_POST['passwordadmin']; // Ambil nilai dari input name="passwordadmin"

    try {
        // Query untuk mengambil data admin dari database
        $stmt = $pdo->prepare("SELECT * FROM tb_users WHERE username = :username");
        $stmt->execute(['username' => $username]); // Gunakan nilai username dalam query
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        // Jika admin ditemukan
        if ($admin) {
            // Verifikasi password plaintext
            if ($password === $admin['password']) { // Perbandingan string sederhana
                // Jika password cocok, set session admin
                $_SESSION['admin_logged_in'] = true;
                // Redirect ke halaman dashboard admin atau halaman yang sesuai
                header('Location: ../admin.php'); // Arahkan ke admin.php di dalam folder parent
                exit;
            } else {
                // Jika password tidak cocok
                echo 'Username atau password salah';
            }
        } else {
            // Jika admin tidak ditemukan
            echo 'Username atau password salah';
        }
    } catch (PDOException $e) {
        // Tangani kesalahan database
        die("Query error: " . $e->getMessage());
    }
}
?>
