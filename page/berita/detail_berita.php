<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berita - HMPS Ilmu Komputer Uningrat Tual</title>
  <!-- Tambahkan CSS yang diperlukan untuk halaman ini -->
  <link href="/tugasuas/assets/css/detail-berita.css" rel="stylesheet">
</head>

<body>
  <!-- Include header.php -->
  <nav>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/layout/web/navbar_web_hmps.php'); ?>
  </nav>
  <div class="main-content-detail-news">
    <main class="container-detail-news">
      <section class="content-wrapper-detail">
        <!-- Berita -->
        <div class="card-article-detail">
          <?php
          // Koneksi ke database
          require_once($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/database/db_berita.php');

          // Pastikan parameter id ada di URL
          if (isset($_GET['id'])) {
            // Ambil id dari parameter URL
            $id_berita = $_GET['id'];

            // Query untuk mengambil data berita berdasarkan id
            $query = "SELECT * FROM berita WHERE id = $id_berita";
            $result = mysqli_query($connec, $query);

            // Jika berita ditemukan
            if ($result && mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_assoc($result);
              echo "<i class='date-detail'><i class='fa fa-calendar-days'></i>" . date(' F d, Y', strtotime($row['tanggal'])) .  " / <i class='fa fa-user'></i> by admin</i>";
              echo "<p class='line'></p>";
              echo "<h1>" . htmlspecialchars($row['judul']) . "</h1>";
              echo "<img src='/tugasuas/uploads/" . htmlspecialchars($row['gambar']) . "' alt='gambar' class='article-image'>";
              echo "<p class='article-content'>" . nl2br(htmlspecialchars($row['isi'])) . "</p>";
            } else {
              echo "<p>Berita tidak ditemukan.</p>";
            }

            // Tidak perlu menutup koneksi di sini
            // mysqli_close($connec);
          } else {
            echo "<p>Parameter id tidak ditemukan.</p>";
          }
          ?>
        </div>
      </section>

      <aside class="sidebar-detail" id="sidebar-detail">
        <div class="container-latest-news">
          <h4>Berita Terbaru</h4>
          <?php
          // Koneksi ke database untuk mengambil 6 berita terbaru
          // Pastikan koneksi masih terbuka
          if (isset($connec)) {
            $query_latest_news = "SELECT * FROM berita ORDER BY created_at DESC LIMIT 6";
            $result_latest_news = mysqli_query($connec, $query_latest_news);

            if ($result_latest_news && mysqli_num_rows($result_latest_news) > 0) {
              while ($row_latest_news = mysqli_fetch_assoc($result_latest_news)) {
                echo "<section class='latest-news'>";
                echo "<a href='/tugasuas/page/berita/detail_berita.php?id=" . htmlspecialchars($row_latest_news['id']) . "'>";
                echo "<img src='/tugasuas/uploads/" . htmlspecialchars($row_latest_news['gambar']) . "' alt='" . htmlspecialchars($row_latest_news['judul']) . "' class='news-image'>";
                echo "<h6 class='news-title'>" . htmlspecialchars($row_latest_news['judul']) . "</h6>";
                echo "</a>";
                echo "</section>";
              }
            } else {
              echo "<p>Belum ada berita yang tersedia.</p>";
            }

            mysqli_close($connec);
          }
          ?>
        </div>
      </aside>
    </main>

    <!-- Include footer.php -->
    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/layout/web/footer_web_hmps.php'); ?>
      <script src="/tugasuas/assets/js/comment.js"></script>
      <script src="/tugasuas/assets/js/news_new.js"></script>
    </footer>
  </div>
</body>
</html>
