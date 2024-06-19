<?php
require_once(__DIR__ . '/../../database/database.php'); // sesuaikan path sesuai dengan lokasi file database.php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect ke halaman daftar pengguna setelah berhasil menghapus
        header("Location: users_list.php"); // Sesuaikan dengan nama file Anda
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
