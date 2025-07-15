<?php
require '../koneksi.php';
header('Content-Type: application/json');

$chat_sql = "SELECT DATE(created_at) AS tanggal, COUNT(*) AS total FROM chat_logs GROUP BY tanggal ORDER BY tanggal ASC";
$chat_result = mysqli_query($conn, $chat_sql);
$chat_labels = $chat_data = [];

if ($chat_result) {
    while ($row = mysqli_fetch_assoc($chat_result)) {
        $chat_labels[] = $row['tanggal'];
        $chat_data[] = $row['total'];
    }
}

$rating_sql = "SELECT rating, COUNT(*) AS total FROM user_rating GROUP BY rating ORDER BY rating ASC";
$rating_result = mysqli_query($conn, $rating_sql);
$rating_labels = $rating_data = [];

$avg_rating = 0;
$avg_sql = "SELECT AVG(rating) AS rata2 FROM user_rating";
$avg_result = mysqli_query($conn, $avg_sql);

if ($avg_result && mysqli_num_rows($avg_result) > 0) {
    $row = mysqli_fetch_assoc($avg_result);
    $avg_rating = round($row['rata2'], 2);
}

if ($rating_result) {
    while ($row = mysqli_fetch_assoc($rating_result)) {
        $rating_labels[] = "⭐ " . $row['rating'];
        $rating_data[] = $row['total'];
    }
}

// 3. Data kontak agen
$kontak_sql = "SELECT DATE(created_at) AS tanggal, COUNT(*) AS total FROM kontak_agen GROUP BY tanggal ORDER BY tanggal ASC";
$kontak_result = mysqli_query($conn, $kontak_sql);
$kontak_labels = $kontak_data = [];

if ($kontak_result) {
    while ($row = mysqli_fetch_assoc($kontak_result)) {
        $kontak_labels[] = $row['tanggal'];
        $kontak_data[] = $row['total'];
    }
}

echo json_encode([
    "chatbot" => [
        "labels" => $chat_labels,
        "data" => $chat_data
    ],
    "rating" => [
        "labels" => $rating_labels,
        "data" => $rating_data,
        "average" => $avg_rating
    ],
    "kontak" => [
        "labels" => $kontak_labels,
        "data" => $kontak_data
    ]
]);
?>
