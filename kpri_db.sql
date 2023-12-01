-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 07:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpri_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `k1` varchar(10) NOT NULL,
  `k2` varchar(10) NOT NULL,
  `k3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_alternatif`, `nama`, `k1`, `k2`, `k3`) VALUES
(23, 'A1', '100', '100', '80'),
(25, 'A2', '100', '100', '80'),
(28, 'A3', '100', '100', '60'),
(29, 'A4', '100', '100', '60'),
(30, 'A5', '100', '100', '100'),
(31, 'A6', '100', '100', '100'),
(32, 'A7', '100', '100', '100'),
(33, 'A8', '100', '100', '100'),
(34, 'A9', '50', '50', '60'),
(35, 'A10', '50', '50', '60');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(40) NOT NULL,
  `nilai_kriteria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `nama_kriteria`, `nilai_kriteria`) VALUES
(1, 'Kelengkapan Berkas', '20'),
(2, 'Karakter', '30'),
(3, 'Penghasilan', '50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
('8bcdcde8-4e72-11ea-9e93-68f728e62312', 'KPRI KOGUSSEL', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
