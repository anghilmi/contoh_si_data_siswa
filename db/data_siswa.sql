-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 04:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa_int`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(10) NOT NULL,
  `timestamp` timestamp NULL DEFAULT current_timestamp(),
  `ra_md` varchar(10) NOT NULL,
  `nm_siswa` varchar(200) NOT NULL,
  `tmpt_lhr` varchar(50) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `nik_siswa` varchar(20) NOT NULL,
  `sklh_umum` varchar(50) DEFAULT NULL,
  `kelas_sklh` varchar(5) DEFAULT NULL,
  `tgl_masuk` varchar(20) NOT NULL,
  `kelas_mad` varchar(5) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `kab` varchar(100) NOT NULL,
  `prov` varchar(100) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `nm_ayah` varchar(200) NOT NULL,
  `nik_ayah` varchar(100) NOT NULL,
  `pend_ayah` varchar(100) NOT NULL,
  `kerja_ayah` varchar(100) NOT NULL,
  `nm_ibu` varchar(200) NOT NULL,
  `nik_ibu` varchar(100) NOT NULL,
  `pend_ibu` varchar(100) NOT NULL,
  `kerja_ibu` varchar(100) NOT NULL,
  `gol_ekonomi` varchar(100) NOT NULL,
  `status_siswa` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `timestamp`, `ra_md`, `nm_siswa`, `tmpt_lhr`, `ttl`, `jk`, `nik_siswa`, `sklh_umum`, `kelas_sklh`, `tgl_masuk`, `kelas_mad`, `alamat`, `desa`, `kec`, `kab`, `prov`, `no_kk`, `nm_ayah`, `nik_ayah`, `pend_ayah`, `kerja_ayah`, `nm_ibu`, `nik_ibu`, `pend_ibu`, `kerja_ibu`, `gol_ekonomi`, `status_siswa`) VALUES
(1, '2021-04-01 04:33:38', 'MD', 'satu', 'satu', '1', '1', '1', NULL, NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(2, '0000-00-00 00:00:00', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'pp', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
