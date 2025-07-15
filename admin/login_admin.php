<?php
session_start();
require 'koneksi.php'; 

if (isset($_SESSION['username'])) {
    header("Location: index_admin.php");
    exit();
}

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);

            if ($password === $user['password']) {
                $_SESSION['username'] = $user['username'];
                $_SESSION['id'] = $user['id'];
                $_SESSION['nama'] = $user['nama'];

                header("Location: index_admin.php");
                exit();
            } else {
                $error = "Username atau password salah";
            }
        } else {
            $error = "Username atau password salah";
        }

        mysqli_stmt_close($stmt);
    } else {
        $error = "Terjadi kesalahan koneksi database.";
    }
}
?>



<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sampul Kreativ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #send-btn {
            background: #17a97b;
            color: white;
        }
        a {
            color: #dfa809;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">

    <div class="card p-4 shadow-lg" style="width: 350px;">
        <h4 class="text-center"><a href="../index.php" style="text-decoration:none;">Sampulkreativ</a></h4>
        <?php if ($error): ?>
            <div class="alert alert-danger p-2 text-center"><?= $error ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" autocomplete="off" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" autocomplete="off" class="form-control" required>
            </div>
            <button type="submit" id="send-btn" class="btn btn-dark w-100">Login</button>
        </form>
    </div>

</body>
</html>
