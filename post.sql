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
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `Nama` varchar(35) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Postingan` text NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `NIM`, `Nama`, `Judul`, `Postingan`, `Gambar`) VALUES
(4, '6701174148', 'tanaya', 'Asusâ¤âœ¨', 'Asustek Computer Inc. ditulis dengan gaya huruf kapital ASUS, adalah sebuah perusahaan berbasis di Taiwan yang memproduksi komponen komputer seperti papan induk, kartu grafis, dan notebook. Asus belakangan ini mulai memproduksi PDA, Telepon genggam, monitor LCD, tablet dan produk komputer lainnya. Pesaing utamanya termasuk MSI, dan Gigabyte.\r\n\r\nAsus pada 2005 menjual papan induk lebih banyak dari perusahaan lainnya, termasuk 30 juta pada 2004. Angka ini termasuk kontrak merek lain. Asus juga memproduksi komponen untuk perusahaan lain, termasuk PS2 Sony dan Apple Ipod, iBook, dll\r\n\r\nASUS banyak dipilih pengguna karena berani memberikan garansi 2 tahun untuk produk notuytv yang dibuatnya.\r\n\r\nPada tahun 2014 Asus menggandeng PT Dragon Computer & communication untuk menjadi distributor utama notebook dan tablet di Indonesia dan berhasil menjadi merek nomor satu hingga saat ini (menurut data IDC dan GFK).', 'D.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
