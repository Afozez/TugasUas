<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
    <!-- Link ke CSS lainnya -->
    <link rel="stylesheet" href="path/to/other-styles.css">
    <style>
        #content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: arial, serif;
        }

        form {
            background-color: white;
            width: 20%;
            height: auto;
            padding: 30px 20px;
            box-shadow: 0px 0px 7px 1px;
            border-radius: 10px;
        }

        label {
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            height: 30px;
            margin-bottom: 10px;
        }

        .btn-login-admin {
            width: 30%;
        }
    </style>
</head>
<body>
    <main>
        <section id="content">
            <!-- Formulir login admin -->
            <form action="/tugasuas/page/admin/autentikasi.php" method="post">

            <h2>Login Admin</h2>
                <label for="usernameadmin">Username:</label>
                <input type="text" id="usernameadmin" name="usernameadmin" required>
                <br>
                <label for="passwordadmin">Password:</label>
                <input type="password" id="passwordadmin" name="passwordadmin" required>
                <br>
                <input class="btn-login-admin" type="submit" value="Login">
            </form>
        </section>
    </main>
    <!-- Script JavaScript lainnya -->
    <script src="path/to/other-scripts.js"></script>
</body>
</html>
