<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news_portal";

// Buat koneksi baru
$connec = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($connec->connect_error) {
    die("Koneksi gagal: " . $connec->connect_error);
}
?>
