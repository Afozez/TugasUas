<?php
session_start();
require_once(__DIR__ . '/../../database/db_admin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['usernameadmin']; 
    $password = $_POST['passwordadmin']; 

    try {
        // Query untuk mengambil data admin dari database
        $stmt = $pdo->prepare("SELECT * FROM tb_users WHERE username = :username");
        $stmt->execute(['username' => $username]); 
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        // Jika admin ditemukan
        if ($admin) {
            // Verifikasi password plaintext
            if ($password === $admin['password']) { 

                $_SESSION['admin_logged_in'] = true;
                header('Location: dashboard.php');
                exit;
                
            } else {
                echo 'Username atau password salah';
            }
        } else {
            echo 'Username atau password salah';
        }
    } catch (PDOException $e) {
        // Tangani kesalahan database
        die("Query error: " . $e->getMessage());
    }
}
?>
