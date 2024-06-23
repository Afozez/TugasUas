<?php
session_start();

// Pastikan session admin_logged_in sudah ada dan bernilai true
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Jika tidak, redirect ke halaman login
    header('Location: login-admin.php');
    exit;
}

// Include file koneksi ke database
require_once($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/database/db_berita.php');

// Tangkap data dari form
$judul = $_POST['judul'];
$tanggal = date('Y-m-d', strtotime($_POST['tanggal'])); // Mengubah format tanggal ke Y-m-d sebelum disimpan
$ringkasan = $_POST['ringkasan'];
$isi = $_POST['isi'];

// Proses upload gambar
$target_dir = $_SERVER['DOCUMENT_ROOT'] . '/tugasuas/uploads/';
$imageFileType = strtolower(pathinfo($_FILES["gambar"]["name"], PATHINFO_EXTENSION));
$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
$uploadOk = 1;

// Cek apakah file gambar yang diupload adalah file gambar valid
$check = getimagesize($_FILES["gambar"]["tmp_name"]);
if($check !== false) {
    $uploadOk = 1;
} else {
    $_SESSION['error_message'] = "File bukan gambar.";
    $uploadOk = 0;
}

// Cek apakah file sudah ada di server
if (file_exists($target_file)) {
    // Ganti nama file dengan menambahkan timestamp atau ID unik
    $unique_name = pathinfo($_FILES["gambar"]["name"], PATHINFO_FILENAME) . '_' . time() . '.' . $imageFileType;
    $target_file = $target_dir . $unique_name;
} else {
    $unique_name = basename($_FILES["gambar"]["name"]);
}

// Cek ukuran file
if ($_FILES["gambar"]["size"] > 5000000) {
    $_SESSION['error_message'] = "Maaf, file terlalu besar.";
    $uploadOk = 0;
}

// Izinkan format file tertentu
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    $_SESSION['error_message'] = "Maaf, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.";
    $uploadOk = 0;
}

// Cek jika $uploadOk bernilai 0 oleh error
if ($uploadOk == 0) {
    $_SESSION['error_message'] = $_SESSION['error_message'] ?? "Maaf, file tidak terunggah.";
} else {
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        $gambar = $unique_name;
        
        // Potong ringkasan untuk halaman home (maksimum 150 karakter)
        $ringkasan_home = substr($ringkasan, 0, 150);

        // Query SQL untuk menyimpan data ke tabel berita
        $sql_berita = "INSERT INTO berita (judul, tanggal, ringkasan, isi, gambar) VALUES (?, ?, ?, ?, ?)";
        $stmt_berita = $connec->prepare($sql_berita);
        
        if ($stmt_berita === false) {
            $_SESSION['error_message'] = "Error prepare statement: " . $connec->error;
            header('Location: tambah_berita.php');
            exit;
        }

        // Bind parameter ke statement SQL
        $stmt_berita->bind_param("sssss", $judul, $tanggal, $ringkasan, $isi, $gambar);

        // Eksekusi statement
        if ($stmt_berita->execute()) {
            // Query SQL untuk menyimpan data ke tabel home
            $sql_home = "INSERT INTO home (judul, tanggal, ringkasan, gambar) VALUES (?, ?, ?, ?)";
            $stmt_home = $connec->prepare($sql_home);
            
            if ($stmt_home === false) {
                $_SESSION['error_message'] = "Error prepare statement: " . $connec->error;
                header('Location: tambah_berita.php');
                exit;
            }

            // Bind parameter ke statement SQL
            $stmt_home->bind_param("ssss", $judul, $tanggal, $ringkasan_home, $gambar);

            // Eksekusi statement
            if ($stmt_home->execute()) {
                $_SESSION['success_message'] = "Berita berhasil disimpan di halaman berita dan home.";
            } else {
                $_SESSION['error_message'] = "Error execute statement: " . $stmt_home->error;
            }

            // Tutup statement
            $stmt_home->close();
        } else {
            $_SESSION['error_message'] = "Error execute statement: " . $stmt_berita->error;
        }

        // Tutup statement
        $stmt_berita->close();
    } else {
        $_SESSION['error_message'] = "Maaf, ada kesalahan saat mengunggah file.";
    }
}

// Redirect kembali ke halaman tambah_berita.php
header('Location: tambah_berita.php');
exit;
?>
