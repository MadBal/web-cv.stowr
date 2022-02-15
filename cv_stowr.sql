-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 03:18 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_stowr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, '000', '$2y$10$gRiKhO.FigmMjDG/SoIDje7oU4oC272kAWQsG8iTz4s/kldb8XLOa'),
(2, '1111', '$2y$10$7RflWUfF1LLZrdHGkJcoxep5WOgWv/mSxdGsMXcbtDOU0pfs4nqea');

-- --------------------------------------------------------

--
-- Table structure for table `sistem_crud`
--

CREATE TABLE `sistem_crud` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sistem_crud`
--

INSERT INTO `sistem_crud` (`id`, `judul`, `isi`) VALUES
(42, 'coba coba', 'aapa saja'),
(43, 'Ishak', 'CEO');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visimisi`
--

CREATE TABLE `tbl_visimisi` (
  `visi` varchar(500) NOT NULL,
  `misi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visimisi`
--

INSERT INTO `tbl_visimisi` (`visi`, `misi`) VALUES
('Menjadikan Perusahaan yang Bertaraf Internasional pada Bidang Teknologi Parkir, 														Pengelolaan Air Minum, dan Sistem Informasi di Indonesia Timur', 'Portal Web, Perdagangan Besar Komputer, Perlengkapan Komputer, Piranti Lunak, Perdangan Besar Perlengkapan Elektronik, Telekomunikasi dan Bagian-Bagiannya, Jasa Multimedia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sistem_crud`
--
ALTER TABLE `sistem_crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sistem_crud`
--
ALTER TABLE `sistem_crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
