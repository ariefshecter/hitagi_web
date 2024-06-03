-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 12:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_hp`, `foto`) VALUES
('10001', 'Danang Kesuma', 'Lampung', '1991-10-01', 'Laki-laki', 'Islam', 'Rajabasa, Bandar Lampung', '082186869898', 'img-4.png'),
('10002', 'Kadina Putri', 'Lampung', '1991-02-02', 'Perempuan', 'Islam', 'Kedaton, Bandar Lampung', '082186869898', 'img-7.png'),
('10003', 'Fajar Nugroho', 'Lampung', '1991-03-03', 'Laki-laki', 'Islam', 'Way Halim, Bandar Lampung', '082186869898', 'img-1.png'),
('10004', 'Agung Prasetya', 'Lampung', '1991-04-04', 'Laki-laki', 'Islam', 'Sukarame, Bandar Lampung', '082186869898', 'img-2.png'),
('10005', 'Ari Prasetyo', 'Lampung', '1991-05-05', 'Laki-laki', 'Islam', 'Kemiling, Bandar Lampung', '082186869898', 'img-5.png'),
('10006', 'Indra Styawantoro', 'Lampung', '1991-01-01', 'Laki-laki', 'Islam', 'Rajabasa, Bandar Lampung', '081377783334', 'toro.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
