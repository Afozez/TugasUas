<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Berita - HMPS Ilmu Komputer Uningrat Tual</title>
  <!-- Tambahkan CSS yang diperlukan untuk pagination di sini -->
  <?php include 'layout/web/head_web_hmps.php'; ?>
</head>

<body>
  <!-- Include header.php -->
  <nav>
    <?php include 'layout/web/navbar_web_hmps.php'; ?>
  </nav>

  <main>
    <section class="main-wrapper-news">
      <div class="content-news">
        <div class="card-article-news">
          <?php
          // Koneksi ke database dan query untuk mengambil semua berita dari tabel berita
          require_once($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/database/db_berita.php');

          // Tentukan jumlah berita per halaman
          $berita_per_halaman = 3; // Ubah menjadi 3

          // Tangkap nilai halaman saat ini dari URL, jika tidak ada default ke 1
          $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

          // Hitung offset untuk query SQL
          $offset = ($page - 1) * $berita_per_halaman;

          // Query untuk menghitung total berita
          $query_total = "SELECT COUNT(*) as total FROM berita";
          $result_total = mysqli_query($connec, $query_total);
          $row_total = mysqli_fetch_assoc($result_total);
          $total_berita = $row_total['total'];

          // Hitung total halaman
          $total_pages = ceil($total_berita / $berita_per_halaman);

          // Query untuk mengambil berita sesuai halaman
          $query = "SELECT * FROM berita ORDER BY created_at DESC LIMIT $offset, $berita_per_halaman";
          $result = mysqli_query($connec, $query);

          if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              // Lakukan pengolahan data berita sesuai kebutuhan
              $judul = $row['judul'];
              $ringkasan = $row['ringkasan'];
              $tanggal = date('F d, Y', strtotime($row['tanggal'])); // Mengubah format tanggal
              $gambar = $row['gambar'];
              $isi = $row['isi'];

              echo "
              <h1 class='title-news'>$judul</h1>
              <p class='card-date-news'><i class='fa fa-calendar-days'></i> $tanggal / <i class='fa fa-user'></i> by admin</p>
              <p class='line'></p>
                <img src='uploads/$gambar' alt='$judul'class='image-news'>
                        <p>$ringkasan</p>
                        <a href='/tugasuas/page/berita/detail_berita.php?id={$row['id']}'>
                        <button class='btn-news-details'>Baca Selengkapnya</button>
                        </a>";
            }
          } else {
            echo "<p>Belum ada berita yang tersedia.</p>";
          }
          ?>
        </div>

        <!-- Tampilkan tautan pagination -->
        <section class="list-news">
          <?php
          // Fungsi untuk membuat pagination
          function createPagination($total_pages, $current_page)
          {
            $pagination = '<div class="pagination">';

            // Jika hanya 1 halaman, tidak perlu tampilkan pagination
            if ($total_pages <= 1) {
              return $pagination;
            }

            // Tombol Previous
            if ($current_page > 1) {
              $pagination .= '<p><a class="pagination-arrow" href="berita.php?page=' . ($current_page - 1) . '"><i class="fa-solid fa-angle-left"></i></a></p>';
            }

            // Tampilkan halaman pertama
            $pagination .= '<p><a class="pagination-link' . ($current_page == 1 ? ' active' : '') . '" href="berita.php?page=1">1</a></p>';

            // Jika halaman saat ini > 3, tampilkan ... di awal
            if ($current_page > 3) {
              $pagination .= '<p><span class="pagination-link">...</span></p>';
            }

            // Tampilkan halaman yang sesuai
            for ($i = max(2, $current_page - 1); $i <= min($current_page + 1, $total_pages - 1); $i++) {
              $pagination .= '<p><a class="pagination-link' . ($current_page == $i ? ' active' : '') . '" href="berita.php?page=' . $i . '">' . $i . '</a></p>';
            }

            // Jika halaman saat ini < total_pages - 2, tampilkan ... di akhir
            if ($current_page < $total_pages - 2) {
              $pagination .= '<p><span class="pagination-link">...</span></p>';
            }

            // Tampilkan halaman terakhir
            $pagination .= '<p><a class="pagination-link' . ($current_page == $total_pages ? ' active' : '') . '" href="berita.php?page=' . $total_pages . '">' . $total_pages . '</a></p>';

            // Tombol Next
            if ($current_page < $total_pages) {
              $pagination .= '<p><a class="pagination-arrow" href="berita.php?page=' . ($current_page + 1) . '"><i class="fa-solid fa-angle-right"></i></a></p>';
            }

            $pagination .= '</div>'; // Tutup div pagination

            return $pagination;
          }

          // Panggil fungsi pagination
          echo createPagination($total_pages, $page);
          ?>
        </section>


      </div>
      <aside class="sidebar-news">
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
  </main>

  <!-- Include footer.php -->
  <footer>
    <?php include "layout/web/footer_web_hmps.php"; ?>
  </footer>
  
</body>

</html>
