-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 17, 2020 at 08:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jdihinspek_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `produkhukum_tb`
--

CREATE TABLE `produkhukum_tb` (
  `id_produk` int(4) NOT NULL,
  `judul_produk` varchar(100) NOT NULL,
  `jenis_produk` enum('1','2','3','4','5','6') NOT NULL COMMENT '1=perda, 2=pergub, 3=kepgub, 4=insgub, 5=skgub, 6=mou',
  `nomor_peraturan` int(10) NOT NULL,
  `nomor_panggil` int(10) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `cetakan` varchar(100) DEFAULT NULL,
  `thn_pengundangan` int(4) NOT NULL,
  `tgl_pengundangan` date NOT NULL,
  `tempat_penerbit` varchar(100) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `kolasi` varchar(100) DEFAULT NULL,
  `sumber` varchar(100) DEFAULT NULL,
  `subjek` varchar(100) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `status` enum('mencabut','dicabut','diubah','mengubah','masih berlaku') NOT NULL,
  `bahasa` varchar(50) DEFAULT NULL,
  `bidang_hukum` varchar(50) DEFAULT NULL,
  `no_induk_buku` varchar(50) DEFAULT NULL,
  `file_produk` text NOT NULL,
  `lingkup` enum('prov','kab_kota') NOT NULL,
  `wilayah` varchar(50) NOT NULL,
  `id_user` int(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id_user` int(4) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `role` enum('admin','staff') NOT NULL DEFAULT 'staff',
  `publish` enum('T','F') NOT NULL DEFAULT 'T',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id_user`, `nama_lengkap`, `username`, `password`, `confirm_password`, `role`, `publish`, `created_at`) VALUES
(1, 'Administrator', 'adminjdih', '$2y$10$nd7GfXIEzmZur2SRtjV7w.qM0NUzrOg4Bvg4y.HcnKEPgpJ49LjeC', '$2y$10$U9vioK71XwPtcVRI6/u0KuRT3jmq5i.jAU8A5ohmCwFo.pwRvXlcC', 'staff', 'T', '2020-08-01 09:20:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produkhukum_tb`
--
ALTER TABLE `produkhukum_tb`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produkhukum_tb`
--
ALTER TABLE `produkhukum_tb`
  MODIFY `id_produk` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
