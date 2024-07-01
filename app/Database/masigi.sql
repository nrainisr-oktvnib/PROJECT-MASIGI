-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2024 pada 07.51
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
-- Database: `masigi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_dan_harga_qurban`
--

CREATE TABLE `jenis_dan_harga_qurban` (
  `id_qurban` int(11) NOT NULL,
  `hewan_qurban` varchar(50) NOT NULL,
  `tipe_hewan` varchar(10) NOT NULL,
  `jenis_qurban` varchar(12) NOT NULL,
  `kapasitas_qurban` varchar(25) NOT NULL,
  `harga_perorang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis_dan_harga_qurban`
--

INSERT INTO `jenis_dan_harga_qurban` (`id_qurban`, `hewan_qurban`, `tipe_hewan`, `jenis_qurban`, `kapasitas_qurban`, `harga_perorang`) VALUES
(1, 'Kambing', 'Tipe A', 'Perorangan', '1 orang', 'Rp. 4.000.000'),
(2, 'Kambing', 'Tipe B', 'Perorangan', '1 orang', 'Rp. 3.500.000'),
(3, 'Kambing', 'Tipe C', 'Perorangan', '1 orang', 'Rp. 2.700.000'),
(4, 'Sapi', 'Tipe A', 'Berkelompok', '7 orang', 'Rp. 4.000.000'),
(5, 'Sapi', 'Tipe B', 'Berkelompok', '7 orang', 'Rp. 3.600.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_keuangan`
--

CREATE TABLE `laporan_keuangan` (
  `id_Keuangan` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `pemasukan` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL,
  `saldo_kas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_keuangan`
--

INSERT INTO `laporan_keuangan` (`id_Keuangan`, `tanggal`, `uraian`, `pemasukan`, `pengeluaran`, `saldo_kas`) VALUES
(1, '15/08/2023', 'Dana sosial dari pemerintah setempat', 10000000, 0, 10000000),
(2, '17/09/2023', 'biaya listrik, air, gas, dll.', 0, 800000, 9200000),
(3, '07/10/2023', 'dana bantuan untuk fakir miskin', 0, 500000, 8700000),
(4, '21/11/2023', 'gaji imam dan petugas masjid', 0, 1000000, 7700000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaksanaan_sholat_jumat`
--

CREATE TABLE `pelaksanaan_sholat_jumat` (
  `tanggal` varchar(10) NOT NULL,
  `imam` varchar(50) NOT NULL,
  `khotib` varchar(50) NOT NULL,
  `muadzin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelaksanaan_sholat_jumat`
--

INSERT INTO `pelaksanaan_sholat_jumat` (`tanggal`, `imam`, `khotib`, `muadzin`) VALUES
('10/02/2023', 'Ahmad Abdullah', 'Muhammad Ali', 'Bilal Rahman'),
('06/10/2023', 'Sheikh Ibrahim Al-Mansur', 'Sainuddin', 'Kareem Malik'),
('13/10/2023', 'Abdullah Rahman', 'Iyas Siddiqh', 'Hamzah Farid'),
('20/10/2023', 'Al-Fahrizi', 'Khaliq', 'Yusuf Akbar'),
('27/10/2023', 'Bilal Mustafah', 'Syeihk Hana', 'Yusuf Akbar'),
('03/11/2023', 'Amir Al-Qadri', 'Safiyah Aziz', 'Idris Syaifullah'),
('10/11/2023', 'Ahmad Rahmat', 'Hasan Basir', 'Musaddin'),
('17/11/2023', 'Kamal Al-Hasimi', 'Zainab Ahmad', 'Syarifai'),
('05/12/2023', 'nur', 'agus', 'prsetyo'),
('05/12/2023', 'nur', 'agus', 'prsetyo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_qurban`
--

CREATE TABLE `pendaftaran_qurban` (
  `id_peserta` int(11) NOT NULL,
  `nama_peserta` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_qurban` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftaran_qurban`
--

INSERT INTO `pendaftaran_qurban` (`id_peserta`, `nama_peserta`, `no_hp`, `alamat`, `id_qurban`) VALUES
(2, 'Andini Ramadhana', '089476849253', 'Jl. Flamboyan Hijau, No. 27', 2),
(3, 'Lidia', '085794697852', 'Jl. Anggrek Ungu, No. 9', 3),
(4, 'Fitrianti Syam', '081369741258', 'Jl. Kenanga Putih, No. 17', 4),
(5, 'Resky Amaliah', '085798462351', 'Jl. Dahlia Biru, No. 19', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerima_donasi`
--

CREATE TABLE `penerima_donasi` (
  `nama` varchar(50) NOT NULL,
  `no_KK` varchar(50) NOT NULL,
  `no_HP` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penerima_donasi`
--

INSERT INTO `penerima_donasi` (`nama`, `no_KK`, `no_HP`, `alamat`) VALUES
('Sofia Putri', '737212345678', '082233445524', 'Jl. Sultan Hasanuddin No. 10'),
('Aditya Pratama', '737223467890', '082344556687', 'Jl. Andi Yemma No. 25'),
('Nia Ramadhani', '730921234567', '085823459367', 'Jl. Ahmad Yani No. 47'),
('Rizki Maulana', '737109876543', '081253667736', 'Jl. Kartini No. 32A'),
('Maya Sari', '731598765432', '089576334912', 'Jl. M. Yamin No. 15'),
('Fahmi Akbar', '731587654321', '082192368773', 'Jl. Veteran No. 54B'),
('Dina Indah', '731476543219', '085454221389', 'Jl. Diponegoro No. 63'),
('Cathezz', '731492773520', '082355890134', 'Jl. Mawar No. 34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_qurban`
--

CREATE TABLE `peserta_qurban` (
  `id_peserta` int(11) NOT NULL,
  `kelompok_peserta_qurban` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peserta_qurban`
--

INSERT INTO `peserta_qurban` (`id_peserta`, `kelompok_peserta_qurban`) VALUES
(2, 'kelompok 2'),
(3, 'kelompok 3'),
(4, 'kelompok 4'),
(5, 'kelompok 5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `takmir_masjid`
--

CREATE TABLE `takmir_masjid` (
  `id_takmir` int(11) NOT NULL,
  `nama_takmir` varchar(30) NOT NULL,
  `peran_takmir` varchar(50) NOT NULL,
  `noHP` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `takmir_masjid`
--

INSERT INTO `takmir_masjid` (`id_takmir`, `nama_takmir`, `peran_takmir`, `noHP`, `alamat`) VALUES
(1, 'Suharyadi', 'Seksi kebersihan dan keamanan', '085396741789', 'Jl. Srikaya Merah, No. 26'),
(2, 'Alqi Ramadhan', 'Imam', '085908341283', 'Jl. Pembangunan, No 45'),
(3, 'Mahasiswa', 'Muadzin', '085222430897', 'Jl. Pemuda'),
(4, 'Mahasiswa', 'Imam', '085222430897', 'Jl. Balai Kota'),
(21, 'aini', 'ketua', '089789567456', 'jl.anggrek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_takmir` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_takmir`, `username`, `password`) VALUES
(1, 19, 'mhsWa', '#Tkmr123'),
(2, 20, 'Takmirrr', '#Takmr12'),
(3, 21, 'Anni123', '#Tkmr123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `zakat_fitrah`
--

CREATE TABLE `zakat_fitrah` (
  `kepala_keluarga` varchar(50) NOT NULL,
  `jenis_pembayaran` varchar(10) NOT NULL,
  `jumlah_anggota` varchar(10) NOT NULL,
  `zakat_yang_dibayar` varchar(25) NOT NULL,
  `no_HP` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `zakat_fitrah`
--

INSERT INTO `zakat_fitrah` (`kepala_keluarga`, `jenis_pembayaran`, `jumlah_anggota`, `zakat_yang_dibayar`, `no_HP`, `alamat`) VALUES
('Samsuddin', 'Beras', '5', '15,5 liter', '089345671250', 'BTN Permai Blok G'),
('Nur Ali', 'Uang', '4', 'Rp180,000', '082556189438', 'BTN Permai Blok L'),
('Abdul Hakim', 'Uang', '9', 'Rp405,000', '085777450123', 'BTN Permai Blok A'),
('Gunawan', 'Beras', '10', '35 liter', '089423678444', 'BTN Permai Blok M/9');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_dan_harga_qurban`
--
ALTER TABLE `jenis_dan_harga_qurban`
  ADD PRIMARY KEY (`id_qurban`);

--
-- Indeks untuk tabel `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  ADD PRIMARY KEY (`id_Keuangan`);

--
-- Indeks untuk tabel `pendaftaran_qurban`
--
ALTER TABLE `pendaftaran_qurban`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `id_qurban` (`id_qurban`);

--
-- Indeks untuk tabel `peserta_qurban`
--
ALTER TABLE `peserta_qurban`
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indeks untuk tabel `takmir_masjid`
--
ALTER TABLE `takmir_masjid`
  ADD PRIMARY KEY (`id_takmir`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_dan_harga_qurban`
--
ALTER TABLE `jenis_dan_harga_qurban`
  MODIFY `id_qurban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  MODIFY `id_Keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_qurban`
--
ALTER TABLE `pendaftaran_qurban`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `takmir_masjid`
--
ALTER TABLE `takmir_masjid`
  MODIFY `id_takmir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pendaftaran_qurban`
--
ALTER TABLE `pendaftaran_qurban`
  ADD CONSTRAINT `pendaftaran_qurban_ibfk_1` FOREIGN KEY (`id_qurban`) REFERENCES `jenis_dan_harga_qurban` (`id_qurban`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peserta_qurban`
--
ALTER TABLE `peserta_qurban`
  ADD CONSTRAINT `peserta_qurban_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `pendaftaran_qurban` (`id_peserta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
