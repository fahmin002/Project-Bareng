-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2024 pada 16.26
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repository`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karya`
--

CREATE TABLE `karya` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `tahun` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `karya`
--

INSERT INTO `karya` (`id`, `user_id`, `title`, `description`, `file_path`, `created_at`, `updated_at`, `category`, `author`, `tahun`) VALUES
(1, 5, 'SISTEM INFORMASI E-BOOKING PEMBUATAN SUMUR TANGKI', 'Sistem Informasi E-Booking Pembuatan Sumur, Tangki Septik, dan Sedot \r\nTinja Berbasis Web di Beton Perkasa merupakan sebuah aplikasi berbasis web yang \r\ndigunakan dalam proses pemesanan yang dilakukan secara online. Pemesanan dan \r\npromosi menjadi kendala yang dialami di usaha Beton Perkasa. Pemesanan secara\r\nmanual via telepon dirasa kurang maksimal karena tidak memberikan solusi yang \r\ncepat, dan tingkat promosi yang masih dilakukan dengan cara memasang pamflet \r\ndirasa kurang efisien. Berdasarkan permasalahan tersebut penulis bermaksud \r\nmerancang sebuah aplikasi yang akan dapat membantu dalam proses pemesanan. \r\nSistem informasi ini dirancang dengan menggunakan pemodelan UML \r\n(Unifed Modeling Language). Sementara metode pengembangan yang digunakan \r\nadalah menggunakan metode waterfall. Sistem Informasi E-Booking Pembuatan \r\nSumur, Tangki Septik, dan Sedot Tinja Berbasis Web di Beton Perkasa dibangun \r\ndengan framework CodeIgniter yang menggunakan bahasa pemrograman PHP dan\r\nsoftware XAMPP sebagai penyimpanan databasenya.\r\nHasil akhir dari penelitian ini adalah sebuah aplikasi sistem informasi \r\nberbasis web yang sesuai dengan kebutuhan di Beton Perkasa. Harapannya aplikasi \r\nini dapat membantu, mempermudah dan menghemat waktu dalam proses \r\npemesanan tersebut.', 'https://drive.google.com/file/d/1IZTDmX7PgU3e9VQQvRnw4sx3HpVHG_Ge/view?usp=drive_link', '2024-07-19 12:27:50', '2024-07-19 12:28:10', 'TUGAS AKHIR', 'SEPTIA SENA PUTRA BOYA A.Md.Kom', 2023),
(2, 5, 'kukuyuyuk', 'huahauhauhuah', 'ghsgahdhgasd', '2024-07-19 13:09:19', '2024-07-19 13:15:49', NULL, NULL, 2012);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 1, '2024-07-10 01:07:54', '2024-07-10 01:07:54'),
(2, 'Shikamaru', '345', 2, '2024-07-10 02:08:40', '2024-07-19 12:14:55'),
(5, 'ayaka', '321', 2, '2024-07-19 02:46:35', '2024-07-19 03:07:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karya`
--
ALTER TABLE `karya`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karya`
--
ALTER TABLE `karya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `karya`
--
ALTER TABLE `karya`
  ADD CONSTRAINT `karya_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
