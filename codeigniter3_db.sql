-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2021 at 09:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter3_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `id_overtime` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `day_date` varchar(10) NOT NULL,
  `start` varchar(11) DEFAULT NULL,
  `finish` varchar(11) NOT NULL,
  `ovt` varchar(100) DEFAULT NULL,
  `project_no` varchar(10) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `cek` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`id_overtime`, `id_user`, `day_date`, `start`, `finish`, `ovt`, `project_no`, `activity`, `location`, `cek`, `date`) VALUES
(1, 1, '01-01-2021', '08:00', '20:00', NULL, NULL, 'Assy ', 'Office', NULL, '2021-01-04 16:43:01'),
(2, 2, '02-01-2021', '08:00', '20:00', NULL, NULL, 'Assy asa asuuuu', 'Assy', NULL, '2021-01-04 16:00:37'),
(3, 2, '01-01-2021', '08:00', '20:00', NULL, NULL, 'Assy', 'Off', NULL, '2021-01-04 15:50:46'),
(4, 1, '02-01-2021', '08:00', '17:00', NULL, NULL, 'Assss', 'Jakarta', NULL, '2021-01-08 16:01:22'),
(5, 1, '08-01-2021', '17:00', '20:00', NULL, NULL, 'dfafag', 'fhkfkf', NULL, '2021-01-08 16:11:53'),
(6, 1, '08-01-2021', '17:00', '20:00', NULL, NULL, 'dfafag', 'fhkfkf', NULL, '2021-01-08 16:12:06'),
(7, 1, '08-01-2021', '17:00', '20:00', NULL, NULL, 'dfafag', 'fhkfkf', NULL, '2021-01-08 16:12:10'),
(8, 1, '08-01-2021', '17:00', '20:00', NULL, NULL, 'dfafag', 'fhkfkf', NULL, '2021-01-08 16:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `akses_level` varchar(100) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `email`, `username`, `image`, `password`, `akses_level`, `tanggal_update`) VALUES
(1, 'Administrator', 'admin@mail.com', 'Admin', 'default.png', '7d8f4b4b4613dc7e15333e6449692ad4af502d1d', '1', '2021-01-03 18:04:23'),
(2, 'User Edit', 'user@mail.com', 'User', 'FB_IMG_15749179720201.jpg', '7d8f4b4b4613dc7e15333e6449692ad4af502d1d', '2', '2021-01-05 12:52:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id_overtime`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id_overtime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
