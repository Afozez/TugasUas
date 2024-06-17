<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php"); // Redirection ke halaman index atau halaman utama jika user sudah login
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar - HMPS Ilmu Komputer Uningrat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/tugasuas/auth/css/regist.css">
</head>
<body>
    <div class="container-regist">
        <?php
        if (isset($_POST["submit"])) {
            $fullName = $_POST["fullname"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];
            
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();
            
            if (empty($fullName) || empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email tidak valid");
            }
            if (strlen($password) < 8) {
                array_push($errors, "Kata sandi harus terdiri dari minimal 8 karakter");
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Passwords do not match");
            }

            require_once "../database.php";

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = mysqli_prepare($conn, $sql);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $rowCount = mysqli_num_rows($result);

                if ($rowCount > 0) {
                    array_push($errors, "Email already exists!");
                }

                if (count($errors) > 0) {
                    foreach ($errors as $error) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                } else {
                    $sql = "INSERT INTO users (full_name, username, email, password) VALUES (?, ?, ?, ?)";
                    $stmt = mysqli_prepare($conn, $sql);
                    if ($stmt) {
                        mysqli_stmt_bind_param($stmt, "ssss", $fullName, $username, $email, $passwordHash);
                        mysqli_stmt_execute($stmt);
                        $_SESSION["username"] = $username;
                        echo "<div class='alert alert-success'>You are registered successfully.</div>";
                    } else {
                        die("Something went wrong");
                    }
                    mysqli_stmt_close($stmt);
                }
            } else {
                echo "<div class='alert alert-danger'>Failed to prepare statement</div>";
            }
            mysqli_close($conn);
        }
        ?>
        <form action="registration.php" method="post">
            <div class="header-regist">Daftar</div>
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username:">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
            <div>
                <p>Sudah daftar? <a href="login.php">Login Disini</a></p>
            </div>
        </form>
    </div>
</body>
</html>
