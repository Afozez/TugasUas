<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home - HMPS Ilmu Komputer Uningrat Tual</title>
  <?php include 'layout/web/head_web_hmps.php'; ?>
</head>
<body>
  <header>
    <?php include 'layout/web/navbar_web_hmps.php'; ?>
  </header>
  
  <main>
    <!-- Start Section Hero -->
    <div id="carouselExampleAutoplaying" class="con-slider carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/image/sld-img-1.jpg" class="slider-img d-block w-100" alt="Slider-img1">
        </div>
        <div class="carousel-item">
          <img src="assets/image/sld-img-2.jpg" class="slider-img d-block w-100" alt="Slider-Img2">
        </div>
        <div class="carousel-item">
          <img src="assets/image/sld-img-3.jpg" class="slider-img d-block w-100" alt="Slider-Img3">
        </div>
      </div>
      <button class="btn-slider carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="backvisually-hidden"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden text"></span>
      </button>
    </div>
    <!-- End Section Hero -->

    <!-- Start Section About HMPS IKOM -->
    <div class="container-about">
      <div class="about" data-aos="fade-right">
        <div class="about-hmps">
          <h1>HIMPUNAN MAHASISWA PROGRAM STUDI <br> ILMU KOMPUTER</h1>
          <p style="padding-bottom: 10px;">
            HMPS IKOM (Himpunan Mahasiswa Program Studi Ilmu Komputer) Universitas Doktor Husni Ingratubun (Uningrat) 
            adalah organisasi mahasiswa yang mewadahi mahasiswa Program Studi Ilmu Komputer dalam berbagai kegiatan 
            akademik, sosial, dan pengembangan diri. Organisasi ini bertujuan untuk meningkatkan kualitas pendidikan, 
            memfasilitasi aspirasi mahasiswa, serta mengembangkan potensi dan minat di bidang ilmu komputer. 
            HMPS IKOM Uningrat aktif dalam mengadakan seminar, workshop, kompetisi, serta kegiatan 
            sosial dan kebersamaan untuk meningkatkan kualitas dan kesejahteraan mahasiswa.
          </p>
          <a class="view-more-hmps" href="berita.php">Lihat Selengkapnya</a>
        </div>
        <img class="about-logo" src="assets/image/logo/img-hmps-logo.png" alt="">
      </div>
    </div>
    <!-- End Section About HMPS IKOM -->

    <!-- Start Section Berita  -->
    <div class="container-news">
      <div class="title-news">
        <i class="fa fa-newspaper"></i>
        <h1>BERITA HMPS</h1>
      </div>
      <div class="news">
      <?php
        // Koneksi ke database dan query untuk mengambil 6 berita terbaru dari halaman home
        require_once($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/database/db_berita.php');

        // Query untuk mengambil 6 berita terbaru, diurutkan berdasarkan created_at desc
        $query = "SELECT * FROM berita ORDER BY created_at DESC LIMIT 6";
        $result = mysqli_query($connec, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Mengambil 150 karakter pertama dari ringkasan berita
                $judul = $row['judul'];
                $ringkasan = substr($row['ringkasan'], 0, 150) . '...';
                $gambar = $row['gambar'];

                // Mengubah format tanggal menjadi singkatan bulan (3 karakter)
                $tanggal = date('M d, Y', strtotime($row['tanggal']));

                echo "
                <a href='/tugasuas/page/berita/detail_berita.php?id={$row['id']}' class='card-news' data-aos='fade-up'>
                    <img src='uploads/$gambar' alt='$judul'>
                    <div class='card-news-text'>
                        <h5>$judul</h5>
                        <p>$ringkasan</p>
                        <i class='card-date-home'>$tanggal</i>
                    </div>
                </a>
                ";
            }
        } else {
            echo "<p>Belum ada berita yang tersedia.</p>";
        }

        mysqli_close($connec);
        ?>
      </div>
    </div>
    <!-- End Section Berita -->
  </main>

  <?php include 'layout/web/footer_web_hmps.php'; ?>
</body>
</html>
