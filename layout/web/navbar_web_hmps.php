<?php include ('layout/web/head_web_hmps.php') ?>

<header>
    <!-- Start Section Navbar -->
    <nav class="container-navbar navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <img src="assets/image/logo/img-hmps-logo.png" alt="Logo" class="nav-logo-img d-inline-block align-text-top">
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
                        <a class="nav-link" aria-current="page" href="index.html">Home</a>
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
                    <li class="nav-item dropdown">
                        <?php if (isset($_SESSION["username"])): ?>
                            <a class="nav-link d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 10px;">
                                <span id="userName"><?php echo $_SESSION["username"]; ?></span>
                                <div id="userAvatar" class="fa fa-user"></div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end p-0" id="userDropdown">
                                <li class="dropdown-item-bottom"><a class="dropdown-item" href="auth/logout.php">Logout</a></li>
                            </ul>
                        <?php else: ?>
                            <a href="auth/registration.php" style="text-decoration: none;">
                                <button class="btn-daftar" id="registerButton">Daftar</button>
                            </a>
                            <a href="auth/login.php">
                                <button class="btn-login" id="loginButton">Login</button>
                            </a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Section Navbar -->
</header>
