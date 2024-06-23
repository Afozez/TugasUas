<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Pastikan form telah dikirimkan dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Buat objek PHPMailer baru
    $mail = new PHPMailer(true); // Pass true ke constructor untuk mengaktifkan mode exception

    try {
        // Konfigurasi SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Ganti dengan host SMTP Anda
        $mail->SMTPAuth = true;
        $mail->Username = 'muhamatrahawarin@gmail.com'; // Ganti dengan email SMTP Anda
        $mail->Password = 'qipd cndr cozt tada'; // Ganti dengan password SMTP Anda
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Aktifkan enkripsi TLS
        $mail->Port = 587; // Port SMTP yang digunakan (biasanya 587)

        // Set pengirim dan penerima email
        $mail->setFrom('hmpsikom@gmail.com', 'Ikom'); // Ganti dengan email dan nama Anda
        $mail->addAddress('muhamatrahawarin@gmail.com', 'Oji'); // Ganti dengan email dan nama penerima

        // Konten email
        $mail->isHTML(true); // Set true jika email berisi HTML
        $mail->Subject = $subject;
        $mail->Body = "<h3>From: $name ($email)</h3><p>$message</p>";

        // Kirim email
        $mail->send();
        header("Location: kontak.php?status=success");
        exit;
    } catch (Exception $e) {
        echo 'Email gagal dikirim: ', $mail->ErrorInfo;
        header("Location: kontak.php?status=error");
        exit;
    }
}
?>
