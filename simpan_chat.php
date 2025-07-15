<?php
require 'admin/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pesan'])) {
    $pesan = trim($_POST['pesan']);
    $pesan = htmlspecialchars($pesan, ENT_QUOTES);

    $query = "INSERT INTO chat_logs (pesan, created_at) VALUES (?, NOW())";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $pesan);

        if (mysqli_stmt_execute($stmt)) {
            echo "Pesan disimpan";
        } else {
            http_response_code(500);
            echo "Gagal menyimpan pesan";
        }

        mysqli_stmt_close($stmt);
    } else {
        http_response_code(500);
        echo "Gagal mempersiapkan statement";
    }
} else {
    http_response_code(400);
    echo "Permintaan tidak valid";
}
?>
