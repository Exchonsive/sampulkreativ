<?php
require 'admin/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama']);
    $nama = $nama === "" ? "Anonim" : htmlspecialchars($nama, ENT_QUOTES);
    $rating = intval($_POST['rating']);

    if ($rating < 1 || $rating > 5) {
        http_response_code(400);
        echo "Rating tidak valid";
        exit;
    }

    $query = "INSERT INTO user_rating (nama, rating, created_at) VALUES (?, ?, NOW())";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "si", $nama, $rating);

        if (mysqli_stmt_execute($stmt)) {
            echo "Rating berhasil disimpan";
        } else {
            http_response_code(500);
            echo "Gagal menyimpan rating";
        }

        mysqli_stmt_close($stmt);
    } else {
        http_response_code(500);
        echo "Gagal mempersiapkan statement";
    }
} else {
    http_response_code(405);
    echo "Method tidak diizinkan";
}
?>
