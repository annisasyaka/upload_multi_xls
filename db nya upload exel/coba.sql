-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2017 at 01:08 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `jabodetabek`
--

CREATE TABLE `jabodetabek` (
  `nomer` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabodetabek`
--

INSERT INTO `jabodetabek` (`nomer`, `nama`, `alamat`) VALUES
(1, 'yani', 'bekasi'),
(2, 'rara', 'bogor');

-- --------------------------------------------------------

--
-- Table structure for table `jawa_tengah`
--

CREATE TABLE `jawa_tengah` (
  `nomer` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawa_tengah`
--

INSERT INTO `jawa_tengah` (`nomer`, `nama`, `alamat`) VALUES
(1, 'anis', 'solo'),
(2, 'jatang', 'yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `jawa_timur`
--

CREATE TABLE `jawa_timur` (
  `nomer` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawa_timur`
--

INSERT INTO `jawa_timur` (`nomer`, `nama`, `alamat`) VALUES
(1, 'hasan', 'blitar'),
(2, 'mangrove', 'talun');

-- --------------------------------------------------------

--
-- Table structure for table `lampung_tengah`
--

CREATE TABLE `lampung_tengah` (
  `nomer` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampung_tengah`
--

INSERT INTO `lampung_tengah` (`nomer`, `nama`, `alamat`) VALUES
(1, 'ani', 'metro'),
(2, 'budi', 'metro utara');

-- --------------------------------------------------------

--
-- Table structure for table `palembang`
--

CREATE TABLE `palembang` (
  `nomer` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `palembang`
--

INSERT INTO `palembang` (`nomer`, `nama`, `alamat`) VALUES
(1, 'riska', 'ogan'),
(2, 'tata', 'linggau');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jabodetabek`
--
ALTER TABLE `jabodetabek`
  ADD PRIMARY KEY (`nomer`);

--
-- Indexes for table `jawa_tengah`
--
ALTER TABLE `jawa_tengah`
  ADD PRIMARY KEY (`nomer`);

--
-- Indexes for table `jawa_timur`
--
ALTER TABLE `jawa_timur`
  ADD PRIMARY KEY (`nomer`);

--
-- Indexes for table `lampung_tengah`
--
ALTER TABLE `lampung_tengah`
  ADD PRIMARY KEY (`nomer`);

--
-- Indexes for table `palembang`
--
ALTER TABLE `palembang`
  ADD PRIMARY KEY (`nomer`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
