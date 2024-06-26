<?php include($_SERVER['DOCUMENT_ROOT'] . '/tugasuas/layout/web/head_web_hmps.php'); ?>

<header>
    <!-- Start Section Navbar -->
    <nav class="container-navbar navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="/tugasuas/assets/image/logo/img-hmps-logo.png" alt="Logo" class="nav-logo-img d-inline-block align-text-top">
                <div class="nav-logo-text">
                    <div class="nav-logo-text-hmps">HMPS</div>
                    <div class="nav-logo-text-prodi">ILMU KOMPUTER</div>
                    <div class="nav-logo-text-university">UNINGRAT</div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/tugasuas/index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu p-0">
                            <li class="dropdown-item-top"><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                            <li class="dropdown-item-center"><a class="dropdown-item" href="visi-misi.php">Visi Misi</a></li>
                            <li class="dropdown-item-bottom"><a class="dropdown-item" href="struktur.php">Struktur</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Divisi
                        </a>
                        <ul class="dropdown-menu p-0">
                            <li class="dropdown-item-top"><a class="dropdown-item" href="div-plandev.php">Perencanaan & Pengembangan</a></li>
                            <li class="dropdown-item-center"><a class="dropdown-item" href="div-copper.php">Kerja Sama</a></li>
                            <li class="dropdown-item-bottom"><a class="dropdown-item dropdown-item-tb" href="div-data-info.php">Data & Informasi</a></li>
                            <li class="dropdown-item-center"><a class="dropdown-item" href="div.creative-economy.php">Ekonomi Kreatif</a></li>
                            <li class="dropdown-item-center"><a class="dropdown-item" href="div-human-resc.php">Sumber Daya Manusia</a></li>
                            <li class="dropdown-item-center"><a class="dropdown-item" href="div-sports.php">Olahraga</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Section Navbar -->
</header>
