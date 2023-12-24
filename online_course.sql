-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2023 pada 05.15
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_course`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id_course` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `durasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id_course`, `judul`, `deskripsi`, `durasi`) VALUES
(1, 'Pemrograman Web 1', 'TIdak Ada', '15 Hari'),
(2, 'Algoritma Pemrograman', 'Dasar -dasar Algoritma', '14 Hari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `id_course`, `judul`, `deskripsi`, `link`) VALUES
(1, 1, 'Materi Dasar HTML', 'Pengenalan Bahasa Pemrograman HTML', 'https://www.w3schools.com/html/default.asp'),
(2, 1, 'Materi Dasar CSS', 'Pengenalan Bahasa CSS', 'https://www.w3schools.com/css/default.asp');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_course`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
