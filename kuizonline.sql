-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 10:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuizonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `IDGuru` varchar(3) NOT NULL,
  `Nama_Guru` varchar(60) NOT NULL,
  `KataLaluan` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `IDKelas` varchar(3) NOT NULL,
  `Nama_Kelas` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kuiz`
--

CREATE TABLE `kuiz` (
  `IDPelajar` varchar(4) NOT NULL,
  `IDSoalan` varchar(4) NOT NULL,
  `Tarikh` varchar(10) DEFAULT NULL,
  `Pilihan` varchar(1) DEFAULT NULL,
  `Peratus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `IDPelajar` varchar(4) NOT NULL,
  `Nama_Pelajar` varchar(800) NOT NULL,
  `IDKelas` varchar(3) NOT NULL,
  `KataLaluan` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `soalan`
--

CREATE TABLE `soalan` (
  `IDSoalan` varchar(4) NOT NULL,
  `Nama_Soalan` text NOT NULL,
  `Pilihan_A` text NOT NULL,
  `Pilihan_B` text NOT NULL,
  `Pilihan_C` text NOT NULL,
  `Jawapan` varchar(1) NOT NULL,
  `IDGuru` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`IDGuru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`IDKelas`);

--
-- Indexes for table `kuiz`
--
ALTER TABLE `kuiz`
  ADD PRIMARY KEY (`IDPelajar`,`IDSoalan`),
  ADD KEY `kuiz_soalan` (`IDSoalan`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`IDPelajar`),
  ADD KEY `IDKelas` (`IDKelas`);

--
-- Indexes for table `soalan`
--
ALTER TABLE `soalan`
  ADD PRIMARY KEY (`IDSoalan`),
  ADD KEY `IDGuru` (`IDGuru`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kuiz`
--
ALTER TABLE `kuiz`
  ADD CONSTRAINT `kuiz_pelajar` FOREIGN KEY (`IDPelajar`) REFERENCES `pelajar` (`IDPelajar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kuiz_soalan` FOREIGN KEY (`IDSoalan`) REFERENCES `soalan` (`IDSoalan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD CONSTRAINT `pelajar_kelas` FOREIGN KEY (`IDKelas`) REFERENCES `kelas` (`IDKelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soalan`
--
ALTER TABLE `soalan`
  ADD CONSTRAINT `soalan_guru` FOREIGN KEY (`IDGuru`) REFERENCES `guru` (`IDGuru`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
