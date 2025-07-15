<?php
require 'admin/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama']);
    $kontak = trim($_POST['kontak']);
    $pertanyaan = trim($_POST['pertanyaan']);
    $status = 'Pending';

    if ($nama && $kontak && $pertanyaan) {
        $query = "INSERT INTO kontak_agen (nama, kontak, pertanyaan, status, created_at) VALUES (?, ?, ?, ?, NOW())";
        $stmt = mysqli_prepare($conn, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $nama, $kontak, $pertanyaan, $status);

            if (mysqli_stmt_execute($stmt)) {
                echo "OK";
            } else {
                http_response_code(500);
                echo "Gagal menyimpan data";
            }

            mysqli_stmt_close($stmt);
        } else {
            http_response_code(500);
            echo "Gagal mempersiapkan statement";
        }
    } else {
        http_response_code(400);
        echo "Data tidak lengkap";
    }
} else {
    http_response_code(405);
    echo "Method tidak diizinkan";
}
?>
