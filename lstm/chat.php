<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message']; // Ambil pesan dari AJAX

    $url = "http://127.0.0.1:5000/chatbot"; // Endpoint Flask API
    $data = json_encode(["message" => $message]);

    // Inisialisasi cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    // Eksekusi request ke Flask API
    $response = curl_exec($ch);
    curl_close($ch);

    // Decode respons JSON dari Flask API
    $result = json_decode($response, true);
    
    // Kirim kembali respons ke JavaScript
    echo $result['response'];
}
?>