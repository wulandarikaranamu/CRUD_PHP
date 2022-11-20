-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 11:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasiswa_0080`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabungan_siswa`
--

CREATE TABLE `tabungan_siswa` (
  `tabungan_id` int(11) NOT NULL,
  `tanggal_tabungan` date NOT NULL,
  `gender_siswa` enum('laki-laki','perempuan') NOT NULL,
  `jumlah_tabungan` int(100) NOT NULL,
  `gambar_tabungan` varchar(25) NOT NULL,
  `nama_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabungan_siswa`
--

INSERT INTO `tabungan_siswa` (`tabungan_id`, `tanggal_tabungan`, `gender_siswa`, `jumlah_tabungan`, `gambar_tabungan`, `nama_id`) VALUES
(1, '2022-11-19', 'perempuan', 100000, '', 'uiuiui');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(20) NOT NULL,
  `password` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `password`, `email`, `alamat`) VALUES
('MERRY', 1234, '', ''),
('uiuiui', 5678, 'iuiu@gmail.com', 'lilili');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabungan_siswa`
--
ALTER TABLE `tabungan_siswa`
  ADD PRIMARY KEY (`tabungan_id`),
  ADD KEY `nama-id` (`nama_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nama`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabungan_siswa`
--
ALTER TABLE `tabungan_siswa`
  ADD CONSTRAINT `tabungan_siswa_ibfk_1` FOREIGN KEY (`nama_id`) REFERENCES `user` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
