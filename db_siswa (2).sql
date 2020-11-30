-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 09:32 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `id_siswa` int(4) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `id_siswa`, `username`, `password`) VALUES
(2, 8, 'sumiyati', '$2y$10$ffHPzN6vwR9YPxuqAHPNAOjB/oA4tMF3Pcub3EL9xXqlM5KUI3c1q'),
(3, 9, 'patriotkusuma', '$2y$10$trUB9ZOkoJbfe6a9pjpDwOcqU/6jxwmxC0XBJ1MeyYAXiVsTFbscq'),
(4, 10, 'rizky_hdyt', '$2y$10$of7SERLDGQ4ZYjIzjslYpu7u2hiH3/GGq5lHWcJR6ygDA9iFyKioW');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `No_Presensi` int(4) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Kelas` varchar(3) NOT NULL,
  `Jenis_Kelamin` int(1) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `No_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`No_Presensi`, `Nama`, `Kelas`, `Jenis_Kelamin`, `Alamat`, `No_hp`) VALUES
(1, 'Yuliana Safitri', '11A', 1, 'Gorongan, Yogyakarta', '0866-8554-2566'),
(2, 'Wijaya saputra', '11A', 0, 'Ngaglik, Yogyakarta', '0826-2258-4444'),
(3, 'Maria Safitri', '11A', 1, 'Ngemplak. Yogyakarta', '0813-2589-5656'),
(4, 'Bagas Yudha', '11A', 0, 'Krajan, Yogyakarta', '0856-7446-6546'),
(5, 'Santi Astuti', '11A', 1, 'Kaliwaru, Yogyakarta', '0568-2556-7445'),
(6, 'Andriani', '11A', 0, 'Ngaglik, Yogyakarta', '0879-7889-4998'),
(7, 'Anggi', '11A', 1, 'Gorongan, Yogyakarta', '0812-7883-3333'),
(8, 'Sumiyati', '11A', 1, 'Jalanin Aja dulu', '0815-4235-69586'),
(9, 'Patriot Kusuma Sejati', '11C', 0, 'Jln Nganu Nganu', '0845-6595-635'),
(10, 'Maulana Rizky Hidayat', '10A', 1, 'sdfsdfdsfdf', '0846-2632-5595');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `login_ibfk_1` (`id_siswa`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`No_Presensi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`No_Presensi`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
