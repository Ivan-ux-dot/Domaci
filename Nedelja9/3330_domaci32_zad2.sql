-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 01:55 PM
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
-- Database: `3330_domaci32_zad2`
--
CREATE DATABASE IF NOT EXISTS `3330_domaci32_zad2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci;
USE `3330_domaci32_zad2`;

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `id` int(11) NOT NULL,
  `vreme` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `adresa` varchar(40) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `Ukupno_cena` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `korpa`
--

INSERT INTO `korpa` (`id`, `vreme`, `adresa`, `id_user`, `Ukupno_cena`) VALUES
(1, '2021-06-18 11:42:08', 'Srpskih boraca 13', 0, '1000.00'),
(2, '2021-06-18 11:46:47', 'Majke Tereze 43', 1, '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `ime` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `cena` decimal(8,0) NOT NULL,
  `tip` enum('glavno jelo','slatkisi','sokovi','') COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `ime`, `cena`, `tip`) VALUES
('123', 'Piletina', '500', 'glavno jelo'),
('234', 'sampita', '100', 'slatkisi'),
('321', 'Fanta', '100', 'sokovi');

-- --------------------------------------------------------

--
-- Table structure for table `stavke_korpe`
--

CREATE TABLE `stavke_korpe` (
  `id` int(11) NOT NULL,
  `barkod` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `kolicina` int(11) NOT NULL,
  `id_korpe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `stavke_korpe`
--

INSERT INTO `stavke_korpe` (`id`, `barkod`, `kolicina`, `id_korpe`) VALUES
(1, '123', 2, 1),
(2, '321', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- Indexes for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_korpe` (`id_korpe`),
  ADD KEY `barkod` (`barkod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD CONSTRAINT `stavke_korpe_ibfk_1` FOREIGN KEY (`id_korpe`) REFERENCES `korpa` (`id`),
  ADD CONSTRAINT `stavke_korpe_ibfk_2` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
