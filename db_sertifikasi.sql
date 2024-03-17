-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 09:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `Id_peserta` int(11) NOT NULL,
  `Kd_skema` varchar(10) DEFAULT NULL,
  `Nm_peserta` varchar(50) DEFAULT NULL,
  `Jekel` varchar(1) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `No_hp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`Id_peserta`, `Kd_skema`, `Nm_peserta`, `Jekel`, `Alamat`, `No_hp`) VALUES
(1, 'SKM-001', 'Muhammad Iqbal', 'L', 'Kp.Kriyan Barat No.26', '081224534623'),
(2, 'SKM-003', 'Vany Yuliany', 'P', 'Jl.Bahagia No.1', '081435364532'),
(10, 'SKM-004', 'Muhammad Lutfhi', 'L', 'Kp.Kriyan Barat No.27', '089634979274'),
(11, 'SKM-002', 'Dinda Almaira', 'P', 'Kp.Kriyan Timur', '0896349792354');

-- --------------------------------------------------------

--
-- Table structure for table `skema`
--

CREATE TABLE `skema` (
  `Kd_skema` varchar(10) NOT NULL,
  `Nm_skema` varchar(50) DEFAULT NULL,
  `Jenis` varchar(10) DEFAULT NULL,
  `Jml_unit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skema`
--

INSERT INTO `skema` (`Kd_skema`, `Nm_skema`, `Jenis`, `Jml_unit`) VALUES
('SKM-001', 'Junior Web Developer', 'KKNI', 6),
('SKM-002', 'Digital Marketing', 'Klaster', 20),
('SKM-003', 'Designer Multimedia Muda', 'KKNI', 10),
('SKM-004', 'Network Administrator Muda', 'KKNI', 5),
('SKM-005', 'Jago Photoshop', 'KKNI', 7),
('SKM-006', 'Jago Iklan Ads Facebook & Instagram', 'KKNI', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`Id_peserta`),
  ADD KEY `Kd_skema` (`Kd_skema`);

--
-- Indexes for table `skema`
--
ALTER TABLE `skema`
  ADD PRIMARY KEY (`Kd_skema`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `Id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `peserta_ibfk_1` FOREIGN KEY (`Kd_skema`) REFERENCES `skema` (`Kd_skema`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
