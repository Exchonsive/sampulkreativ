-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2025 pada 17.39
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampulkreativ`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chatbot_server_issue`
--

CREATE TABLE `chatbot_server_issue` (
  `id` int(11) NOT NULL,
  `issue` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `chatbot_server_issue`
--

INSERT INTO `chatbot_server_issue` (`id`, `issue`, `created_at`) VALUES
(1, 'Chatbot server tidak merespons (HTTP code: 0)', '2025-07-13 12:27:22'),
(2, 'Chatbot server tidak merespons (HTTP code: 0)', '2025-07-13 12:29:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat_logs`
--

CREATE TABLE `chat_logs` (
  `id` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `chat_logs`
--

INSERT INTO `chat_logs` (`id`, `pesan`, `created_at`) VALUES
(1, 'Halo pagi kak', '2025-07-13 12:21:34'),
(2, 'ada layanan apa nich?', '2025-07-13 12:21:54'),
(3, 'klo hrg pmbuatan aplikasi android brp y?', '2025-07-14 12:22:24'),
(4, 'kira kira berapa lama ya?', '2025-07-15 12:23:14'),
(5, 'hlo', '2025-07-16 12:27:22'),
(6, 'halo kak', '2025-07-16 12:29:12'),
(8, 'Kak, aku mau nanya tentang pembuatan website', '2025-07-15 21:13:26'),
(9, 'kalau misalkan pembuatan laudry gitu bisa ga ya kak?', '2025-07-15 21:13:47'),
(10, 'kakak bisa buat aplikasi website untuk laundry ga?', '2025-07-15 21:14:24'),
(11, 'kakak bisa buat aplikasi website untuk laundry ga?', '2025-07-15 21:14:36'),
(12, 'kakak bisa buat aplikasi website untuk laundry ga?', '2025-07-15 21:14:37'),
(13, 'kakak bisa buat aplikasi website untuk laundry ga?', '2025-07-15 21:14:40'),
(14, 'kak klo bikin aplikasi kayak shopee gitu bisa ga?', '2025-07-15 21:14:53'),
(15, 'kak semisal, aku mau buat website CMS kayak wordpress gitu disini bisa ga ya?', '2025-07-15 21:15:18'),
(16, 'pembuatannya berapa lama ya kira kira?', '2025-07-15 21:15:33'),
(17, 'pembuatan aplikasi websitenya berapa lama ya kak kira kira?', '2025-07-15 21:15:48'),
(18, 'berapa lama waktu yg dibutuhkan untuk membuat aplikasi web?', '2025-07-15 21:16:05'),
(19, 'Kak, aplikasi kalian bisa dipakai di HP Android nggak?', '2025-07-15 21:17:41'),
(20, 'Saya mau tanya soal hosting dan domain, bisa bantu?', '2025-07-15 21:17:52'),
(21, 'Kalau saya pesan hari ini, jadi kapan ya aplikasinya?', '2025-07-15 21:18:05'),
(22, 'Ada garansi atau support nggak kak setelah aplikasi selesai?', '2025-07-15 21:18:14'),
(23, 'Apa saya bisa konsultasi dulu sebelum mulai projek?', '2025-07-15 21:18:26'),
(24, 'Tolong dong, server chatbot-nya kok error ya 😓', '2025-07-15 21:18:36'),
(25, 'Kak, saya pengen redesign web lama saya, bisa?', '2025-07-15 21:18:47'),
(26, 'Berapa lama waktu pengerjaan rata-rata aplikasi mobile?', '2025-07-15 21:18:57'),
(27, 'Kalau budget saya cuma 5 juta, bisa dapet apa aja ya?', '2025-07-15 21:19:17'),
(28, 'Kalau budget saya cuma 5 juta, bisa dapet apa aja ya?', '2025-07-15 21:19:24'),
(29, 'Saya butuh konsultasi IT buat bisnis saya, ada layanan itu?', '2025-07-15 21:21:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq_questions`
--

CREATE TABLE `faq_questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `faq_questions`
--

INSERT INTO `faq_questions` (`id`, `question`, `answer`, `created_at`) VALUES
(1, 'Berapa biaya bikin aplikasi mobile?', 'Harga pembuatan aplikasi mobile mulai dari Rp.500.000, tergantung fitur dan platform yang dibutuhkan', '2025-07-13 14:00:08'),
(2, 'Apakah kalian bisa bikin website?', 'Tentu kak! Kami menyediakan layanan pembuatan website profesional sesuai kebutuhan bisnis kakak', '2025-07-13 14:00:08'),
(3, 'Gimana cara kerjanya tim kalian?', 'Kami akan berdiskusi dulu dengan kakak untuk memahami kebutuhan, lalu mulai proses desain dan pengembangan bersama tim', '2025-07-13 14:00:08'),
(4, 'Layanan apa saja yang kalian sediakan?', 'Kami menawarkan layanan IT seperti pengembangan aplikasi web dan mobile, konsultasi IT, desain grafis, dan multimedia.', '2025-07-13 14:00:08'),
(5, 'Berapa lama waktu pembuatan aplikasi?', 'Waktu pengerjaan tergantung kompleksitas, rata-rata 3–6 minggu untuk aplikasi standar ya kak', '2025-07-13 14:00:08'),
(6, 'Bagaimana sistem keamanan aplikasi kalian?', 'Kami menerapkan enkripsi, validasi input, dan best practice keamanan untuk menjaga data aplikasi kakak tetap aman', '2025-07-13 14:00:08'),
(7, 'Kalian bantu maintenance aplikasi juga?', 'Iya kak! Kami menyediakan layanan pemeliharaan & update berkala agar aplikasi kakak tetap optimal', '2025-07-13 14:00:08'),
(8, 'Apakah kalian bantu desain ulang aplikasi?', 'Tentu! Kami bisa bantu redesign tampilan dan pengalaman pengguna agar lebih modern dan efisien', '2025-07-13 14:00:08'),
(9, 'Berapa biaya pembuatan website?', 'Harga website mulai dari Rp. 100.000 kak, tergantung fitur dan jenis websitenya ya', '2025-07-13 14:00:08'),
(10, 'Bagaimana cara menghubungi kalian?', 'Kakak bisa hubungi kami lewat WhatsApp, email, atau klik tombol Contact Agent di halaman ini yaa', '2025-07-13 14:00:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fu_kontak_agen`
--

CREATE TABLE `fu_kontak_agen` (
  `id` int(11) NOT NULL,
  `id_kontak_agen` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fu_kontak_agen`
--

INSERT INTO `fu_kontak_agen` (`id`, `id_kontak_agen`, `id_users`, `created_at`) VALUES
(1, 5, 1, '2025-07-13 18:56:49'),
(2, 6, 1, '2025-07-13 18:58:58'),
(3, 4, 1, '2025-07-13 19:26:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_agen`
--

CREATE TABLE `kontak_agen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `pertanyaan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('Pending','Progress','Closed') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak_agen`
--

INSERT INTO `kontak_agen` (`id`, `nama`, `kontak`, `pertanyaan`, `created_at`, `status`) VALUES
(3, 'Maeru', '08982818631', 'Halo kak mau tanya kalau buat aplikasi website dinamis untuk mengelola wifi apakah bisa? berapa lama ya kira kira?\n\nTerima kasih', '2025-07-13 07:39:16', 'Pending'),
(4, 'Bagas', 'maerubagas14@gmail.com', 'Pagi kak, aku mau buat aplikasi untuk manajemen stok barang, skala bisnis menengah bisa ga kak?, dan harganya berapa ya?. Tengkyu', '2025-07-13 12:26:43', 'Progress'),
(5, 'Trisoko', 'codeexc@gmail.com', 'kak klo bikin desain poster untuk acara 17 Agustus bisa ga kak? berapaan ya?', '2025-07-13 12:02:02', 'Closed'),
(6, 'codexc', '08111122333344', 'Halo kakk', '2025-07-13 11:59:46', 'Closed'),
(7, 'Rahmat Hidayat', '08123456789', 'Halo kak Berapa harga buat bikin website toko online?', '2025-07-15 14:17:31', 'Pending'),
(8, 'Trisno', '089821123354', 'Kak, saya gaptek... tapi pengen punya aplikasi sendiri kayak tokopedia, itu harganya berapa ya kak?', '2025-07-15 14:22:50', 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Maeru Bagas Trisoko', 'maeru', 'maeru%%%12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_rating`
--

CREATE TABLE `user_rating` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` between 1 and 5),
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_rating`
--

INSERT INTO `user_rating` (`id`, `nama`, `rating`, `created_at`) VALUES
(5, 'Trisoko', 5, '2025-07-13 15:01:46'),
(6, 'Anonim', 2, '2025-07-13 15:01:52'),
(7, 'Maeru', 4, '2025-07-13 15:02:00'),
(8, 'Anonim', 5, '2025-07-15 21:23:12'),
(9, 'Mae', 3, '2025-07-15 21:23:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chatbot_server_issue`
--
ALTER TABLE `chatbot_server_issue`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `chat_logs`
--
ALTER TABLE `chat_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `faq_questions`
--
ALTER TABLE `faq_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fu_kontak_agen`
--
ALTER TABLE `fu_kontak_agen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kontak_agen` (`id_kontak_agen`),
  ADD KEY `id_users` (`id_users`);

--
-- Indeks untuk tabel `kontak_agen`
--
ALTER TABLE `kontak_agen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_rating`
--
ALTER TABLE `user_rating`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chatbot_server_issue`
--
ALTER TABLE `chatbot_server_issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `chat_logs`
--
ALTER TABLE `chat_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `faq_questions`
--
ALTER TABLE `faq_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `fu_kontak_agen`
--
ALTER TABLE `fu_kontak_agen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kontak_agen`
--
ALTER TABLE `kontak_agen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_rating`
--
ALTER TABLE `user_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fu_kontak_agen`
--
ALTER TABLE `fu_kontak_agen`
  ADD CONSTRAINT `fu_kontak_agen_ibfk_1` FOREIGN KEY (`id_kontak_agen`) REFERENCES `kontak_agen` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fu_kontak_agen_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
