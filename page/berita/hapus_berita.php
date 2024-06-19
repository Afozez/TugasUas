<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "news_portal");

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Cek jika parameter ID berita dikirim melalui URL
if (isset($_GET['id'])) {
    // Ambil ID berita dari parameter URL
    $id_berita = $_GET['id'];

    // Query untuk menghapus berita berdasarkan ID
    $stmt = $conn->prepare("DELETE FROM berita WHERE id = ?");
    $stmt->bind_param("i", $id_berita);

    // Eksekusi query untuk menghapus berita
    if ($stmt->execute()) {
        // Redirect kembali ke halaman daftar berita setelah berhasil menghapus
        header('Location: list_berita.php');
        exit;
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
