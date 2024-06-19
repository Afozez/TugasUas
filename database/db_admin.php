<?php

// Konfigurasi koneksi ke database
$host = "localhost"; // Ganti dengan host database Anda
$dbname = "login_admin"; // Ganti dengan nama database Anda
$usernameadmin = "oji";
$passwordadmin = "12345678"; 

// Membuat koneksi ke database menggunakan PDO (PHP Data Objects)
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usernameadmin, $passwordadmin);
    // Atur mode error dan pengecualian PDO untuk penanganan kesalahan
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Tangani kesalahan koneksi jika gagal
    die("Koneksi ke database gagal: " . $e->getMessage());
}

?>
