-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2024 pada 07.55
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
-- Database: `loginn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `halamanlogin`
--

CREATE TABLE `halamanlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `No_Handphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_pengguna` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `jabatan`, `no_telepon`, `email`, `password`, `nama_pengguna`) VALUES
(1, 'fgg', 'Laki-laki', '2024-05-17', 'Parepare', 'jl.pembangunan bojo baru', 'option1', '0897763142211', 'dikri9924@gmail.com', 'dikriani9924', 'Dikriani'),
(4, 'Dikriani', 'Perempuan', '2024-05-09', 'Barru', 'jl.pembangunan bojo baru', 'option2', '0895896431333', 'dikri9924@gmail.com', 'hayolo', 'Dikriani'),
(5, 'tes', 'Laki-laki', '2024-05-16', 'Parepare', 'jl.hayoyo', 'option3', '082792437474', 'dhir_ga@gmail.com', 'dikriani9924', 'tess'),
(6, 'masigi', 'Perempuan', '2024-05-09', 'Barru', 'jl.pembangunan bojo baru', 'option2', '08592938423', 'dikrianics02@gmail.com', '123456789', 'masigii1'),
(7, 'masigii', '', '2024-05-22', 'Makassar', 'jl.pembangunan bojo baru', 'option2', '0895896431333', 'dhir_ga@gmail.com', '1212121', 'Dikriani'),
(8, 'samsul', 'Laki-laki', '2024-05-16', 'Barru', 'jl.pembangunan bojo baru', 'option1', '08533123677', 'jenjen33@gmail.com', '12121212121', 'samss'),
(9, 'samsul', 'Laki-laki', '2024-05-08', 'Barru', 'jl.pembangunan bojo baru', 'option1', '085572931929', 'dikri9924@gmail.com', 'asasawqwqsqsqs', 'samss');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `halamanlogin`
--
ALTER TABLE `halamanlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `halamanlogin`
--
ALTER TABLE `halamanlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
