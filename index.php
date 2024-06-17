<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <?php include 'assets/includes/header.php'; ?>
    <main>
        <!-- Start Section Hero -->
        <div id="carouselExampleAutoplaying" class="con-slider carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/image/sld-img-1.jpg" class="slider-img d-block w-100"  alt="Slider-img1">
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
                    <p style="padding-bottom: 10px;">HMPS IKOM (Himpunan Mahasiswa Program Studi Ilmu Komputer) Universitas Doktor Husni Ingratubun (Uningrat) 
                        adalah organisasi mahasiswa yang mewadahi mahasiswa Program Studi Ilmu Komputer dalam berbagai kegiatan 
                        akademik, sosial, dan pengembangan diri. Organisasi ini bertujuan untuk meningkatkan kualitas pendidikan, 
                        memfasilitasi aspirasi mahasiswa, serta mengembangkan potensi dan minat di bidang ilmu komputer. 
                        HMPS IKOM Uningrat aktif dalam mengadakan seminar, workshop, kompetisi, serta kegiatan 
                        sosial dan kebersamaan untuk meningkatkan kualitas dan kesejahteraan mahasiswa.
                    </p>
                    <a class="view-more-hmps"  href="">Lihat Selengkapnya</a>
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
                <div class="card-news" data-aos="fade-up">
                    <a href="">
                        <img src="assets/image/news-img-1.jpg" alt="">
                        <div class="card-news-text">
                            <h4>Pelantikan Ketua dan Wakil Ketua HMPS IKOM...</h4>
                            <p>Pada tanggal 23 Oktober 2023, HMPS Ilmu Komputer menggelar acara pelantikan yang bersejarah untuk menandai awal dari periode baru kepemimpinan organisasi...</p>
                            <p class="date">19 Mei 2023</p>
                        </div>
                    </a>
                </div>
                <div class="card-news" data-aos="fade-up">
                    <a href="">
                        <img src="assets/image/sld-img-2.jpg" alt="">
                        <div class="card-news-text">
                            <h4>Kegiatan Belajar Rutin Microsoft Word</h4>
                            <p>Pada tanggal 23 Oktober 2023, HMPS Ilmu Komputer mengadakan acara penting untuk pelantikan Ketua dan Wakil Ketua baru. Acara ini menjadi momen bersej...</p>
                            <p class="date">23 April 2024</p>
                        </div>
                    </a>
                </div>
                <div class="card-news" data-aos="fade-up">
                    <a href="">
                        <img src="assets/image/news-img-2.jpg" alt="">
                        <div class="card-news-text">
                            <h4>HMPS IKOM Gelar Sesi Latihan Untu Meningkatk...</h4>
                            <p>HMPS Ilmu Komputer kembali menunjukkan komitmennya dalam mendukung pengembangan minat dan bakat anggotanya dengan menggelar sesi lati...</p>
                            <p class="date">12 November 2023</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Section Berita  -->
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
    </main>

    <!-- Include footer.php -->
    <?php include "assets/includes/footer.php"; ?>

</body>
</html>
