<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Berita HMPS</title>
    <!-- Tambahkan CSS yang diperlukan untuk pagination di sini -->
</head>
<body>
    <!-- Include header.php  -->
    <?php include 'layout/web/navbar_web_hmps.php'; ?>

    <main>
        <section class="main">
            <div class="content">
                <h1 class="heading-news">Berita HMPS</h1>
                <div class="card-articel">
                    <?php
                    // Koneksi ke database
                    require_once($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/database/db_berita.php');

                    // Tentukan jumlah berita per halaman
                    $limit = 3;

                    // Tentukan nomor halaman saat ini
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $offset = ($page - 1) * $limit;

                    // Query untuk mendapatkan jumlah total berita
                    $result_count = $koneksi->query("SELECT COUNT(*) AS total FROM berita");
                    $row_count = $result_count->fetch_assoc();
                    $total_pages = ceil($row_count['total'] / $limit);

                    // Query untuk mendapatkan berita dengan limit dan offset
                    $result = $koneksi->query("SELECT * FROM berita ORDER BY tanggal DESC LIMIT $limit OFFSET $offset");

                    // Loop untuk menampilkan setiap berita
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='card-articel-update'>";
                        echo "<h1 style='font-weight: 600;'>" . $row['judul'] . "</h1>";
                        echo "<i class='card-date'>" . date('d M Y', strtotime($row['tanggal'])) . "</i>";
                        echo "<img src='/tugasuas/uploads/" . $row['gambar'] . "' alt='gambar' style='width: 100%; height: auto;'>";
                        echo "<p>" . $row['ringkasan'] . "</p>";
                        echo "<a class='btn-news-details' href='detail_berita.php?id=" . $row['id'] . "'>Lihat Selengkapnya</a>";
                        echo "</div>";
                    }

                    $koneksi->close();
                    ?>
                </div>

                <!-- Tampilkan tautan pagination -->
                <section class="list-berita">
                    <?php
                    // Fungsi untuk membuat pagination
                    function createPagination($total_pages, $current_page) {
                        $pagination = '';

                        // Jika hanya 1 halaman, tidak perlu tampilkan pagination
                        if ($total_pages <= 1) {
                            return $pagination;
                        }

                        // Tampilkan halaman pertama (fixed)
                        $pagination .= '<p><a href="berita.php?page=1">1</a></p>';

                        // Jika halaman saat ini > 3, tampilkan ... di awal
                        if ($current_page > 3) {
                            $pagination .= '<p><a href="berita.php?page=' . ($current_page - 3) . '">...</a></p>';
                        }

                        // Tampilkan halaman yang sesuai
                        for ($i = max(2, $current_page - 1); $i <= min($current_page + 1, $total_pages - 1); $i++) {
                            $pagination .= '<p' . ($i == $current_page ? ' class="list-berita-aktif"' : '') . '>';
                            $pagination .= '<a href="berita.php?page=' . $i . '">' . $i . '</a>';
                            $pagination .= '</p>';
                        }

                        // Jika halaman saat ini < total_pages - 2, tampilkan ... di akhir
                        if ($current_page < $total_pages - 2) {
                            $pagination .= '<p><a href="berita.php?page=' . ($current_page + 3) . '">...</a></p>';
                        }

                        // Tampilkan halaman terakhir (fixed) jika bukan di halaman terakhir
                        if ($current_page != $total_pages) {
                            $pagination .= '<p><a href="berita.php?page=' . $total_pages . '">' . $total_pages . '</a></p>';
                        }

                        return $pagination;
                    }

                    // Panggil fungsi createPagination untuk menampilkan pagination
                    echo createPagination($total_pages, $page);
                    ?>
                </section>
            </div>

            <aside class="sidebar">
                <!-- Konten sidebar di sini -->
                <section class="profil-hmps">
                    <div class="title-user">
                        <i class="fa fa-users-rays"></i>
                        <h1>Profil</h1>
                    </div>
                    <a class="profil-video" href="https://youtu.be/5h71kzO7Sus?si=0Gt6HWhq2zO_iR-9">
                    <video controls
                        src="assets/image/y2mate.com - Video Profile HMPS Manajemen UIN Syarif Hidayatullah Jakarta Periode 20222023  KABINET ARUSENA_480p (1).mp4"
                        width="100%" height="180px"></video>
                </a>
            </section>

            <section class="information">
                <div class="title-info">
                    <i class="fa fa-circle-info"></i>
                    <h1>Informasi</h1>
                </div>
                <div class="list-information">
                    <a href="">Belajar Microsoft Word Rutin ></a>
                </div>
            </section>
        </aside>
    </section>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
</main>

<!-- Include footer.php -->
<?php include "layout/web/footer_web_hmps.php"; ?>