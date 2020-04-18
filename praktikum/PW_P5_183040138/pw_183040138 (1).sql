-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2020 pada 00.21
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_183040138`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `ID` int(5) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Judul_Buku` varchar(100) NOT NULL,
  `Penulis` varchar(100) NOT NULL,
  `Penerbit` varchar(100) NOT NULL,
  `Harga_Buku` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`ID`, `Foto`, `Judul_Buku`, `Penulis`, `Penerbit`, `Harga_Buku`) VALUES
(1, 'Kp.jpg', 'Konspirasi Alam Semesta', 'Fiersa Besari', 'Media Kita', 'Rp 90.000'),
(2, 'kt.jpg', 'Kata', 'Rintik Sedu', 'Gramedia Pustaka Utama', 'Rp 70.000'),
(3, 'dln.jpg', 'Dilan 1990', 'Piddi Baiq', 'Gramedia Pustaka Utama', 'Rp 89.000'),
(4, 'cj.jpg', 'Catatan Juang', 'Fiersa Besari', 'Media Kita', 'Rp 99.000'),
(5, 'tj.jpg', 'Tapak Jejak', 'Fiersa Besari', 'Media Kita', 'Rp 85.000'),
(6, '5cm.jpg', '5cm', 'Donny Dhirgantoro', 'Grasindo', 'Rp 150.000'),
(7, 'br.jpg', 'Broken Home', 'Chatreen Moko', 'Romancious', 'Rp 60.000'),
(8, 'th.jpg', 'This Is Why I Need You', 'Brian Khrisna', 'Media Kita', 'Rp 98.000'),
(9, 'kbb.jpg', 'Kamu Berhak Bahagia', 'Chatreen Moko', 'Romancious', 'Rp 55.000'),
(10, 'kds.jpg', 'Kudasai', 'Brian Khrisna', 'Media Kita', 'Rp 99.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
