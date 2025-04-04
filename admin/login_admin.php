<?php
session_start();
require 'koneksi.php'; // File koneksi ke database

if (isset($_SESSION['username'])) {
    header("Location: index_admin.php"); // Redirect jika sudah login
    exit();
}

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek ke database
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Simpan session login
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['role'] = $user['role'];

            // Redirect berdasarkan role
            if ($user['role'] == 'admin') {
                header("Location: index_admin.php");
            } else {
                header("Location: index_user.php");
            }
            exit();
        } else {
            $error = "Username atau password salah";
        }
    } else {
        $error = "Username atau password salah";
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
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">

    <div class="card p-4 shadow-lg" style="width: 350px;">
        <h4 class="text-center">Login</h4>
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
            <button type="submit" class="btn btn-dark w-100">Login</button>
        </form>
    </div>

</body>
</html>
