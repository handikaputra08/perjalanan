-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2024 pada 01.15
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
-- Database: `perjalanan_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gol` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `rekening` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`id`, `nama`, `gol`, `nip`, `jabatan`, `rekening`, `created_at`, `updated_at`) VALUES
(11, 'I Gede Agus Arjawa Tangkas, S.H., M.Si', 'Pembina Tingkat I (IV/B)', '197208221992031006', 'Kepala Bidang Teknologi Informatika', '010 02 05 09282 6', '2024-01-16 22:29:17', '2024-01-16 22:29:17'),
(19, 'I PUTU NGURAH HANDIKA PUTRA', 'Pembina Tingkat I (IV/B)', '2313213213', 'staf', '4324324234', '2024-01-18 18:00:09', '2024-01-18 18:00:09'),
(20, 'Handika Dika1', 'Penata Muda (III/A)', '32432432', 'staf', '432423423', '2024-01-18 18:08:53', '2024-01-18 18:08:53'),
(21, 'b testa', 'Penata Muda Tingkat I (III/B)', '3123213', 'Kepala Bidang Teknologi Informatika', '2132132132', '2024-01-18 18:09:25', '2024-01-18 20:44:54'),
(22, 'c', 'Penata Muda (III/A)', '32132132', 'staf', '432423', '2024-01-18 18:10:01', '2024-01-18 18:10:01'),
(23, 'c', 'Penata Muda (III/A)', '32132132', 'staf', '432423', '2024-01-18 18:10:01', '2024-01-18 18:10:01'),
(24, 'satu dua', 'Pengatur Tingkat I (II/D)', '12313213', 'staf', '432423', '2024-01-18 18:10:15', '2024-01-18 18:10:15'),
(25, 'Handika Dika1', 'Penata Muda (III/A)', '21321313', 'staf', '213321321', '2024-01-18 18:10:31', '2024-01-18 18:10:31'),
(26, 'd', 'Pengatur Tingkat I (II/D)', '3213213123', 'staf', '213213213332323232', '2024-01-18 18:10:48', '2024-01-18 18:10:48'),
(27, 'codot', 'Penata Muda (III/A)', '312321312', 'staf', '432423', '2024-01-18 18:18:23', '2024-01-18 21:27:19'),
(28, 'dewi how how', 'Pengatur Tingkat I (II/D)', '213213123', 'staf', '4324324234', '2024-01-18 21:28:22', '2024-01-18 21:28:22'),
(29, 'I PUTU NGURAH HANDIKA PUTRA', 'Penata Muda (III/A)', '213213', 'Pranata Komputer Ahli Muda', '4324324234', '2024-01-21 22:45:31', '2024-01-21 22:45:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_spt`
--

CREATE TABLE `data_spt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no` varchar(100) NOT NULL,
  `tglspt` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tglperjalanan` varchar(100) NOT NULL,
  `nama1` varchar(100) DEFAULT NULL,
  `nama2` varchar(100) DEFAULT NULL,
  `nama3` varchar(100) DEFAULT NULL,
  `nama4` varchar(100) DEFAULT NULL,
  `nama5` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_spt`
--

INSERT INTO `data_spt` (`id`, `no`, `tglspt`, `judul`, `tglperjalanan`, `nama1`, `nama2`, `nama3`, `nama4`, `nama5`, `created_at`, `updated_at`) VALUES
(1, '1234', '2024-01-22', 'tes', '2024-01-22', '11', '20', '20', '21', '23', '2024-01-21 23:18:29', '2024-01-21 23:18:29'),
(2, '1234', '2024-01-22', 'tes', '2024-01-22', '11', '20', '20', '21', '23', '2024-01-21 23:18:50', '2024-01-21 23:18:50'),
(3, '200 Tahun 2023', '2024-01-22', 'pengecekan Tower Turyapada', '2024-01-24', '11', '19', NULL, NULL, NULL, '2024-01-22 00:14:37', '2024-01-22 00:14:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_01_04_020010_create_data_pegawai_table', 1),
(3, '2024_01_16_083207_create_tes_table', 2),
(4, '2024_01_19_061118_create_data_spt_table', 2),
(5, '2024_01_22_052549_create_data_spt_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tes`
--

CREATE TABLE `tes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_spt`
--
ALTER TABLE `data_spt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tes`
--
ALTER TABLE `tes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `data_spt`
--
ALTER TABLE `data_spt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tes`
--
ALTER TABLE `tes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
