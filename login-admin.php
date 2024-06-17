<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
    <!-- Link ke CSS lainnya -->
    <link rel="stylesheet" href="path/to/other-styles.css">
</head>
<body>
    <header>
        <!-- Header konten -->
    </header>

    <main>
        <section id="content">
            <!-- Konten halaman utama -->
            <h1>Selamat Datang di Website Kami</h1>
            <p>Deskripsi atau konten lainnya...</p>

            <!-- Formulir login admin -->
            <h2>Login Admin</h2>
            <form action="auth/autentikasi.php" method="post">
                <label for="usernameadmin">Username:</label>
                <input type="text" id="usernameadmin" name="usernameadmin" required>
                <br>
                <label for="passwordadmin">Password:</label>
                <input type="password" id="passwordadmin" name="passwordadmin" required>
                <br>
                <input type="submit" value="Login">
            </form>
        </section>

        <aside>
            <!-- Sidebar atau konten samping lainnya -->
        </aside>
    </main>

    <footer>
        <!-- Footer konten -->
    </footer>

    <!-- Script JavaScript lainnya -->
    <script src="path/to/other-scripts.js"></script>
</body>
</html>
