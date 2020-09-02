-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2020 at 02:54 AM
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
  `judul_produk` varchar(200) NOT NULL,
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
  `isbn` varchar(100) DEFAULT NULL,
  `status` enum('mencabut','dicabut','diubah','mengubah','masih berlaku','tidak berlaku') NOT NULL,
  `bahasa` varchar(50) DEFAULT NULL,
  `bidang_hukum` varchar(50) DEFAULT NULL,
  `no_induk_buku` varchar(50) DEFAULT NULL,
  `file_produk` text NOT NULL,
  `lingkup` enum('prov','kab_kota') NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `id_user` int(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produkhukum_tb`
--

INSERT INTO `produkhukum_tb` (`id_produk`, `judul_produk`, `jenis_produk`, `nomor_peraturan`, `nomor_panggil`, `pengarang`, `cetakan`, `thn_pengundangan`, `tgl_pengundangan`, `tempat_penerbit`, `penerbit`, `kolasi`, `sumber`, `subjek`, `isbn`, `status`, `bahasa`, `bidang_hukum`, `no_induk_buku`, `file_produk`, `lingkup`, `wilayah`, `id_user`, `created_at`, `updated_at`) VALUES
(10, 'Pemberian Penghargaan Kepada Seorang Dan Atau Badan Yang Berjasa Kepada Daerah', '1', 11, 12, 'Lala', 'Edisi', 2020, '2020-02-28', 'Bandar Lampung', 'Erlangga', 'Ini adalah produk hukum 1', 'Referensi', 'Lampiran', '978-623-218-418-3', 'masih berlaku', 'Indonesia', 'Biro Hukum Inspektorat', '0002/09,0003/09', '0335edf7c6104663de15a9ab6371918a.pdf', 'prov', 'Kota Bandar Lampung', 1, '2020-08-21 07:18:35', '2020-08-21 07:38:30'),
(12, 'Peruasahaan Daerah Parwita Yasa Pabrik Es Sari Petojo', '1', 12, 0, '', '', 2020, '2020-08-25', '', '', '', '', '', '', 'tidak berlaku', '', '', '', '1563dc7848761be05024a817b46ef6ea.pdf', 'prov', 'Kota Bandar Lampung', 1, '2020-08-21 15:45:39', '2020-08-21 15:45:39'),
(13, 'Perusahaan Daerah Percetakan Grafika Karya', '2', 13, 0, '', '', 2020, '2020-08-13', '', '', '', '', '', '', 'masih berlaku', '', '', '', 'f5f91e66fa640a36b72ab275e934f403.pdf', 'kab_kota', 'Kabupaten Pesawaran', 1, '2020-08-21 15:47:02', '2020-08-21 15:47:02'),
(14, 'Pemberian Penghargaan Kepada Seorang Dan Atau Badan Yang Berjasa Kepada Daerah', '2', 14, 0, '', '', 2020, '2020-08-14', '', '', '', '', '', '', 'tidak berlaku', '', '', '', 'd7edab4fc79ea75171b1687357888b5d.pdf', 'kab_kota', 'Kota Bandar Lampung', 1, '2020-08-21 15:47:50', '2020-08-21 15:47:50'),
(15, 'Retribusi Pemeriksaan Pengobatan, Perawatan Dan Penggunaan Fasilitas Rumah Sakit Umum Provinsi Daerah Tingkat I', '3', 15, 0, '', '', 2020, '2020-08-17', '', '', '', '', '', '', 'masih berlaku', '', '', '', '42784c6e919ef267ef55365447cc1ce3.pdf', 'kab_kota', 'Kabupaten Lampung Tengah', 1, '2020-08-21 15:48:28', '2020-08-21 15:48:28'),
(17, 'Retribusi Surat Izin Pelulusan Prakwalifikasi Perusahaan Pemborong Bangunan Dalam Provinsi Daerah Tingkat I', '4', 17, 0, '', '', 2020, '2020-08-19', '', '', '', '', '', '', 'masih berlaku', '', '', '', '71556cae92fe076e1e4968d78dbf18dc.pdf', 'kab_kota', 'Kabupaten Lampung Selatan', 1, '2020-08-21 15:49:47', '2020-08-21 15:49:47'),
(18, 'Pungutan Uang Leges', '4', 18, 0, '', '', 2020, '2020-08-19', '', '', '', '', '', '', 'masih berlaku', '', '', '', 'c536f0464351bc6c2819d6b68bbe345b.pdf', 'kab_kota', 'Kabupaten Lampung Tengah', 1, '2020-08-21 15:50:26', '2020-08-21 15:50:26'),
(19, 'Retribusi Pemeriksaan, Perawatan, Pengobatan Dan Penggunaan Fasilitas Rumah Bersalin Cut Meutia Tanjungkarang', '5', 19, 0, '', '', 2020, '2020-08-12', '', '', '', '', '', '', 'masih berlaku', '', '', '', '358cb058bea549a3d90f121b7dfe7fd7.pdf', 'kab_kota', 'Kabupaten Lampung Utara', 1, '2020-08-21 15:51:22', '2020-08-21 15:51:22'),
(20, 'Susunan Organisasi Tata Kerja Dinas Pendapatan Daerah Propinsi Daerah Tingkat I', '5', 20, 0, '', '', 2020, '2020-08-19', '', '', '', '', '', '', 'masih berlaku', '', '', '', '189e08551c3f932226c893494291359a.pdf', 'kab_kota', 'Kabupaten Mesuji', 1, '2020-08-21 15:51:54', '2020-08-21 15:51:54'),
(21, 'Pembentukan Organisasi Dan Tata Kerja Dinas PerburuhanPropinsi Daerah Tingkat I', '6', 21, 0, '', '', 2020, '2020-08-12', '', '', '', '', '', '', 'masih berlaku', '', '', '', '0f112c96f7fec925cb9f7ba641de10a4.pdf', 'kab_kota', 'Kabupaten Lampung Utara', 1, '2020-08-21 15:52:26', '2020-08-21 15:52:26'),
(22, 'Keputusan Desa', '6', 22, 0, '', '', 2020, '2020-08-26', '', '', '', '', '', '', 'masih berlaku', '', '', '', '6380b775630f2fcb53810a8c61c3d947.pdf', 'kab_kota', 'Kabupaten Pesisir Barat', 1, '2020-08-21 15:53:36', '2020-08-21 15:53:36'),
(23, 'Perubahan Untuk Pertama Kalinya Atas Peraturah Daerah 02/PERDA/I/DPRD/1973-1974 Tentang Perusahaan Daerah Percetakan Grafika Karya', '1', 18, 0, '', '', 2019, '2020-08-18', '', '', '', '', '', '', 'masih berlaku', '', '', '', 'b4e559fa5c770a0f45d927b1a0d86ada.pdf', 'kab_kota', 'Kabupaten Lampung Utara', 5, '2020-08-22 08:05:50', '2020-08-22 08:05:50'),
(24, 'Perubahan Untuk Pertama Kalinya Atas Peraturah Daerah Provinsi Daerah Tingkat I 08', '2', 18, 0, '', '', 2018, '2020-08-20', '', '', '', '', '', '', 'mengubah', '', '', '', '3746e4cae4700071f27e1a495884c229.pdf', 'kab_kota', 'Kabupaten Pesawaran', 5, '2020-08-22 08:07:55', '2020-08-22 08:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id_user` int(4) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','staff') NOT NULL DEFAULT 'staff',
  `publish` enum('T','F') NOT NULL DEFAULT 'T',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id_user`, `nama_lengkap`, `username`, `password`, `role`, `publish`, `created_at`) VALUES
(1, 'Administrator', 'adminjdih', '$2y$10$I7pFcfnNmGteQR/IvMox4eOwd1uCN9UIKT8Su/UcNxUK8V2K2PYtm', 'admin', 'T', '2020-08-01 09:20:57'),
(5, 'Staff Keuangan1', 'staff01', '$2y$10$5ATTYQeURH7AQN0YEC5zCuJdpN7YhPk7ss4ITublxXypj/RBtJd6a', 'staff', 'T', '2020-08-21 11:22:47'),
(6, 'Staff Kepegeawaian', 'staff02', '$2y$10$uHAfEju9ZXf/MMTBhLsqdO/vTMryqqQHDHvNQ6Hn8LX5bKf8x5fKO', 'staff', 'T', '2020-08-23 13:23:18');

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
  MODIFY `id_produk` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
