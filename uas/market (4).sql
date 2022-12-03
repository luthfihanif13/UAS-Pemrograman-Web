-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 10:58 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_ikan` varchar(64) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tanggal_pengiriman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_ikan`, `jumlah`, `tanggal_pengiriman`) VALUES
(2, 'Ikan Lele', 2, '2022-12-23'),
(3, 'Ikan kerapu', 3, '2022-12-13'),
(4, 'Ikan Layang', 10, '2022-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ikan`
--

CREATE TABLE `daftar_ikan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `nama_ikan` varchar(64) NOT NULL,
  `harga` varchar(64) NOT NULL,
  `waktu_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_ikan`
--

INSERT INTO `daftar_ikan` (`id`, `gambar`, `nama_ikan`, `harga`, `waktu_upload`) VALUES
(1, 'ikan1.jpg', 'Ikan Bawal', 'Rp. 10000/Kg', '2022-12-02 16:34:13'),
(2, 'ikan2.jpg', 'Ikan Layang', 'Rp. 20000/Kg', '2022-12-02 16:33:30'),
(3, 'Lele.jpg', 'Ikan Lele', 'Rp. 15000/Kg', '2022-12-02 16:44:47'),
(4, 'ikan kerapu.jpg', 'Ikan Kerapu', 'Rp. 25000/Kg', '2022-12-02 17:09:56'),
(5, 'ikan Tuna.jpg', 'Ikan Tuna', 'Rp. 30000/Kg', '2022-12-02 17:11:04'),
(10, 'Ikan Salju.jpg', 'Ikan Salju', 'Rp. 2000/Kg', '2003-12-22 01:43:17'),
(11, 'Ikan Merah.jpg', 'Ikan Merah', 'Rp. 15000/Kg', '2003-12-22 01:49:11'),
(12, 'ikan6.jpg', 'Ikan Nila', 'Rp. 23000/Kg', '2022-12-03 01:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `db_login`
--

CREATE TABLE `db_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_login`
--

INSERT INTO `db_login` (`id`, `nama`, `password`) VALUES
(1, 'ahmad', '$2y$10$6dMaANW2vaSDCrH/Pwc/3OIj9qelnMVhLF9o4UlD9koOlFKEY4ZdC'),
(2, 'hanif', '$2y$10$EWsfmrTm4pMnoaAd8WveEOv4YGgEb5CZh2S2IzefNcC/BYpNz3z/K'),
(3, 'luthfi', '$2y$10$Yc3HqEmBAzcNImb.ZOgiSuqliOwuwwMOEX1aZatkWJ86wilcqvbHe'),
(4, 'hanip', '$2y$10$zfuCyHMEgYU6ExwNr/wytO5q40QCpJXmQVQMrEq47zmXsuVvhEnD6'),
(5, 'haniip', '$2y$10$dxx7glC5P0ukkk25aTOCY.xv1RqRVi/FUWRDhiRBXGFA6lEl7RWgS'),
(6, 'pii', '$2y$10$5aNqOo.Rcqx1xJ2L8XEMbuqkKPM2ABze.nCN8n3tht/9iWGkSDfK.');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama_pembeli`, `email`, `no_hp`, `alamat`, `gambar`, `waktu`) VALUES
(1, 'ahmad', 'ahmad@gmail.com', 89663472, 'jl.samarinda', '', '2022-10-27 22:08:55'),
(3, 'hanif', 'hanif@gmail.com', 81324422, 'jl.merdeka', '', '2022-10-27 22:08:55'),
(5, 'piii', 'piii@gmail.com', 812998122, 'jl.kusuma b1', '1.jpg', '2022-10-28 09:23:35'),
(6, 'peanut', 'kacangtanah@gmail.com', 332817332, 'jl. selai peanut', 'ISO.jpg', '2022-10-28 09:22:20'),
(30, 'aaa', 'nandesame@gmail.com', 2147483647, 'jl. pejuangan', 'ikan5.jpg', '2022-12-03 06:27:01'),
(31, 'aaaa', 'nandesame@gmail.com', 2147483647, 'jl. antasari', 'pweb.jpg', '2022-12-03 09:02:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_ikan`
--
ALTER TABLE `daftar_ikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_login`
--
ALTER TABLE `db_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daftar_ikan`
--
ALTER TABLE `daftar_ikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `db_login`
--
ALTER TABLE `db_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
