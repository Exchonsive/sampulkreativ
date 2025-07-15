<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../admin/koneksi.php';
    $message = $_POST['message'] ?? '';

    $postData = json_encode(['message' => $message]);

    $ch = curl_init('http://127.0.0.1:5000/chat');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($postData)
    ]);

    $result = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpcode == 200 && $result) {
        echo $result;
    } else {
        echo json_encode([
            "response" => "Maaf kak, server chatbot-nya lagi offline 😔, kakak bisa klik Contact Agent dulu yaa! 😊"
        ]);

        $issue = "Chatbot server tidak merespons (HTTP code: $httpcode)";
        $query = "INSERT INTO chatbot_server_issue (issue, created_at) VALUES (?, NOW())";
        $stmt = mysqli_prepare($conn, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $issue);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
    }
} else {
    echo json_encode(["response" => "Invalid request method."]);
}
?>
