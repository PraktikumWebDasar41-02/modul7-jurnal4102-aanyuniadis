-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.13
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal_7`
--

CREATE TABLE `jurnal_7` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `moto_hidup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurnal_7`
--

INSERT INTO `jurnal_7` (`nim`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `prodi`, `fakultas`, `asal`, `moto_hidup`) VALUES
('6701171199', 'cinta', '2018-10-19', 'laki- laki', 'MI', 'FIT', 'Jogja', 'okeee'),
('6701174040', 'Ester Lina', '2018-10-19', 'Perempuan', 'MI', 'FIT', 'Bekasi', 'Jangan Nangis'),
('6701174058', 'Aan Yuni Adi Saputri', '1999-07-10', 'Perempuan', 'MI', 'FIT', 'Jogja', 'Merdeka'),
('6701174074', 'Muhammad Yusf', '1998-05-19', 'laki- laki', 'MI', 'FIT', 'Bogor', 'Mati'),
('6701174077', 'Elisa D O', '1999-10-12', 'Laki - Laki', 'Managemen Informatika', 'FIT', 'Kudus', 'Bahagia'),
('6701174090', 'Putri', '2018-02-19', 'laki- laki', 'PH', 'FIT', 'Jakarta', 'YA YA YA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jurnal_7`
--
ALTER TABLE `jurnal_7`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
