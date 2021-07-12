-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 09:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kontak` varchar(100) NOT NULL,
  `bertemu` enum('Ketua Umum','Sekretaris Jenderal','Lainnya') NOT NULL,
  `lainnya` varchar(100) DEFAULT NULL,
  `keperluan` varchar(100) NOT NULL,
  `waktu` time NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `nama`, `instansi`, `email`, `kontak`, `bertemu`, `lainnya`, `keperluan`, `waktu`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'Conan', 'COC', 'conan@gmail.com', '085335627234', 'Ketua Umum', '', 'Tender', '10:00:00', '2021-07-12', '2021-07-11 12:33:04', '2021-07-11 12:33:04'),
(2, 'Brian', 'Freelance', 'brian@mail.com', '081324536252', 'Lainnya', 'Publikasi', 'Webinar', '12:00:00', '2021-07-14', '2021-07-11 12:34:04', '2021-07-11 12:49:51'),
(3, 'Mulya', 'CSS', 'mulya@gmail.com', '087654321432', 'Ketua Umum', NULL, 'Webinar', '11:00:00', '2021-07-14', '2021-07-11 12:36:20', '2021-07-11 12:36:20'),
(4, 'Jafar', 'INASGOC', 'jafar@gmail.com', '081123324435', 'Sekretaris Jenderal', '', 'Meeting', '10:00:00', '2021-07-14', '2021-07-11 12:54:29', '2021-07-11 12:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Site Administrator','Admin Ketum','Admin Sekjen','') NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'Ketua Umum', 'admin-ketum', 'noc2021', 'Admin Ketum', '2021-06-19 18:32:38', '2021-06-20 10:20:16', '2021-06-20 10:20:16'),
(2, 'Sekretaris Jenderal', 'admin-sekjen', 'noc2021', 'Admin Sekjen', '2021-06-20 10:22:15', '2021-06-20 10:22:15', '2021-06-20 10:22:15'),
(3, 'NOC Indonesia', 'admin-umum', 'noc2021', 'Site Administrator', '2021-06-20 10:22:15', '2021-06-20 10:22:15', '2021-06-20 10:22:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `level` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
