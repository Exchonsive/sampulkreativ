<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'halaman_utama';

$allowed_pages = ['halaman_utama', 'report', 'chat_agent','login','logout'];

if (in_array($page, $allowed_pages)) {
    include "pages_admin/$page.php";
} else {
    echo "<h3>Halaman tidak ditemukan</h3>";
}
?>