-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 05 Jul 2024 pada 10.55
-- Versi server: 5.7.39
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pantai', '2024-07-05 10:55:01', '2024-07-05 10:55:01'),
(2, 'Gunung', '2024-07-05 10:55:01', '2024-07-05 10:55:01'),
(3, 'Kota', '2024-07-05 10:55:01', '2024-07-05 10:55:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `expired_at` date DEFAULT NULL,
  `percentage` decimal(5,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `discounts`
--

INSERT INTO `discounts` (`id`, `name`, `description`, `expired_at`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 'Diskon Awal Tahun', 'Diskon untuk awal tahun', '2025-01-31', '10.00', '2024-07-05 10:55:01', '2024-07-05 10:55:01'),
(2, 'Promo Musim Panas', 'Diskon besar untuk liburan musim panas', '2024-08-31', '20.00', '2024-07-05 10:55:01', '2024-07-05 10:55:01'),
(3, 'Promo Akhir Tahun', 'Diskon spesial menyambut tahun baru', '2024-12-31', '15.00', '2024-07-05 10:55:01', '2024-07-05 10:55:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `travels`
--

CREATE TABLE `travels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `day_count` int(11) NOT NULL,
  `night_count` int(11) NOT NULL,
  `discount_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `travels`
--

INSERT INTO `travels` (`id`, `name`, `description`, `price`, `day_count`, `night_count`, `discount_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Liburan Pantai Bali', 'Nikmati liburan di pantai Bali yang indah', '200.00', 5, 4, 1, 1, '2024-07-05 10:55:01', '2024-07-05 10:55:01'),
(2, 'Pendakian Gunung Rinjani', 'Petualangan mendaki gunung Rinjani yang menantang', '300.00', 3, 2, 2, 2, '2024-07-05 10:55:01', '2024-07-05 10:55:01'),
(3, 'Jelajah Kota Malang', 'Jelajahi keindahan dan sejarah kota Malang', '150.00', 4, 3, 3, 3, '2024-07-05 10:55:01', '2024-07-05 10:55:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discount_id` (`discount_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `travels`
--
ALTER TABLE `travels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `travels`
--
ALTER TABLE `travels`
  ADD CONSTRAINT `travels_ibfk_1` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`),
  ADD CONSTRAINT `travels_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
