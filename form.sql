-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2018 pada 18.18
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE `form` (
  `Nama` varchar(35) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `Kelas` varchar(100) NOT NULL,
  `JenisKelamin` varchar(100) NOT NULL,
  `Hobi` varchar(100) NOT NULL,
  `Fakultas` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`Nama`, `NIM`, `Kelas`, `JenisKelamin`, `Hobi`, `Fakultas`, `Alamat`, `Pass`) VALUES
('Motic', '6701174024', 'MI04', 'Perempuan', 'Diving', 'Fakultas Ilmu Terapan', 'Bandung', '23456'),
('tanaya', '6701174148', 'MI04', 'Perempuan', 'Travelling', 'Fakultas Ilmu Terapan', 'Bandung', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
