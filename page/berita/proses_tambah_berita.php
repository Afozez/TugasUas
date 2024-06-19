<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login-admin.php');
    exit;
}

// Include koneksi ke database
require_once($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/database/db_berita.php');

// Tangkap data form
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$ringkasan = $_POST['ringkasan'];
$isi = $_POST['isi'];

// Tetapkan nama file gambar default
$default_image = 'default_image.jpg';

// Proses penyimpanan berita dan gambar
$query = "INSERT INTO berita (judul, tanggal, ringkasan, isi, gambar) VALUES (?, ?, ?, ?, ?)";
$stmt = $koneksi->prepare($query);
$stmt->bind_param("sssss", $judul, $tanggal, $ringkasan, $isi, $default_image);

// Periksa apakah gambar default sudah ada di direktori uploads
$target_dir = $_SERVER['DOCUMENT_ROOT'] . "/tugasuas/uploads/";
$target_file = $target_dir . $default_image;

if (!file_exists($target_file)) {
    // Jika tidak ada, unggah gambar default
    if (!move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }
}

if ($stmt->execute()) {
    echo "Berita berhasil ditambahkan.";
} else {
    echo "Gagal menambahkan berita: " . $stmt->error;
}

$koneksi->close();

// Redirect kembali ke halaman tambah_berita.php
header('Location: tambah_berita.php');
exit;

?>
