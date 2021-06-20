-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 09:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `33d_zad1_3330`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodaja`
--

CREATE TABLE `prodaja` (
  `id` int(11) NOT NULL,
  `barkod` varchar(3) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `kolicina` int(11) NOT NULL,
  `cena` decimal(9,2) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `prodaja`
--

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES
(2, '321', 3, '297.00', '2021-06-17'),
(3, '456', 3, '396.00', '2021-06-17'),
(4, '654', 2, '198.00', '2021-06-17'),
(5, '654', 1, '90.00', '2021-05-01'),
(6, '123', 5, '500.00', '2021-05-01'),
(8, '321', 5, '450.00', '2021-05-01'),
(10, '123', 4, '400.00', '2021-05-01'),
(57, '789', 20, '4400.00', '2021-06-17'),
(58, '789', 40, '11000.00', '2021-06-17'),
(59, '789', 10, '2420.00', '2021-06-17'),
(60, '776', 30, '1500.00', '2021-05-01'),
(61, '761', 10, '800.00', '2021-05-01'),
(62, '761', 30, '2400.00', '2021-05-01'),
(63, '761', 20, '1760.00', '2021-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `proizodi`
--

CREATE TABLE `proizodi` (
  `barkod` varchar(3) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `naziv` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `cena` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `proizodi`
--

INSERT INTO `proizodi` (`barkod`, `naziv`, `cena`) VALUES
('123', 'fanta', '100.00'),
('321', 'sprite', '90.00'),
('456', 'coca-cola', '120.00'),
('654', 'pepsi', '90.00'),
('761', 'beli luk', '80.00'),
('776', 'crni luk', '50.00'),
('789', 'paradajz', '200.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barkod` (`barkod`);

--
-- Indexes for table `proizodi`
--
ALTER TABLE `proizodi`
  ADD PRIMARY KEY (`barkod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodaja`
--
ALTER TABLE `prodaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD CONSTRAINT `prodaja_ibfk_1` FOREIGN KEY (`barkod`) REFERENCES `proizodi` (`barkod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
