-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 18 Jan 2024 pada 03.04
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
-- Database: `db_toko_ellie`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `ID_Penerbit` varchar(20) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `Kota` varchar(20) NOT NULL,
  `Telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`ID_Penerbit`, `Nama`, `Alamat`, `Kota`, `Telepon`) VALUES
('SP01', 'Penerbit Informatika', 'Jl. Buah Batu No. 12', 'Bandung', '0813-2220-1946'),
('SP02', 'Andi Offset', 'Jl. Suryalaya IX No.', 'Bandung', '0878-3903-0688'),
('SP03', 'Danendra', 'Jl Moch. Toha 44', 'Bandung', '0822-5201215'),
('SP04', 'Haidar Musyafa', 'Jl. Parasamya, Beran', 'Yogyakarta', '0274-866039'),
('SP05', 'Tere Liye', 'Jl. Kavling Polri Bl', 'Jakarta Selatan', '021- 7819127-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `ID_Buku` varchar(20) NOT NULL,
  `Kategori` varchar(20) NOT NULL,
  `Nama_Buku` varchar(50) NOT NULL,
  `Harga` int(10) NOT NULL,
  `Stok` varchar(10) NOT NULL,
  `Penerbit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`ID_Buku`, `Kategori`, `Nama_Buku`, `Harga`, `Stok`, `Penerbit`) VALUES
('K1001', 'Keilmuan', 'Analisis dan Perancangan Sistem Informasi', 50000, '60', 'Penerbit Informatika'),
('K1002', 'Keilmuan', 'Artificial Intelegence', 45000, '60', 'Penerbit Informatika'),
('K1003', 'Keilmuan', 'Autocad 3 Dimensi', 40000, '25', 'Penerbit Informatika'),
('B1001', 'Bisnis', 'Bisnis Online', 75000, '10', 'Penerbit Informatika'),
('K3004 ', 'Keilmuan', 'Cloud Computing Technology', 85000, '15', 'Penerbit Informatika'),
('B1002', 'Bisnis', 'Etika Bisnis dan Tanggung  Jawab Sosial', 68500, '25', 'Penerbit Informatika'),
('N1001 ', 'Novel ', 'Cahaya Di Penjuru Hati', 68000, '10', 'Andi Offset'),
('N1002', 'Novel', 'Aku Ingin Cerita', 48000, '12', 'Danendra'),
('N1003', 'Novel', 'Negeri Para Bedebah', 108000, '5', 'Gramedia Pustaka Uta'),
('N1004', 'Novel', 'Daun Yang Jatuh Tak Pernah Membenci Angin', 99000, '8', 'Gramedia Pustaka Uta');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
