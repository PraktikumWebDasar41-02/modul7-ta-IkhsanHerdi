-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.05
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
-- Database: `jurnal6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nama` varchar(50) NOT NULL,
  `NIM` int(10) NOT NULL,
  `Tanggal_Lahir` varchar(30) NOT NULL,
  `Jenis_kelamin` varchar(20) NOT NULL,
  `Program_Studi` varchar(40) NOT NULL,
  `Fakultas` varchar(20) NOT NULL,
  `Asal` varchar(20) NOT NULL,
  `Moto_Hidup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nama`, `NIM`, `Tanggal_Lahir`, `Jenis_kelamin`, `Program_Studi`, `Fakultas`, `Asal`, `Moto_Hidup`) VALUES
('Ikhsan Herdi', 1234567, '17 Desember 1998', 'laki-laki', 'D3TT', 'FEB', 'Jakarta', 'hahahah'),
('della', 80808080, '2018-10-08', 'perempuan', 'D3IF', 'FIT', 'purworejo', 'sans'),
('rizsa', 1231231, '2018-09-30', 'perempuan', 'D3TT', 'FIT', 'Palu', 'skuy living');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
