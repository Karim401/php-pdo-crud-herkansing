-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 10 jan 2023 om 06:09
-- Serverversie: 5.7.31
-- PHP-versie: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-pdo-crud-proeftoets`
--
CREATE DATABASE IF NOT EXISTS `php-pdo-crud-herkansing` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `php-pdo-crud-herkansing`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `DureAuto`
--

DROP TABLE IF EXISTS `Achtbaan`;
CREATE TABLE IF NOT EXISTS `Achtbaan` (
  `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Naamachtbaan` varchar(200) NOT NULL,
  `Naampretpark` varchar(200) NOT NULL,
  `Land` varchar(200) NOT NULL,
  `Topsnelheid` smallint(4) NOT NULL,
  `Hoogte` int(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;



INSERT INTO `Achtbaan` (`Id`, `Naamachtbaan`, `Naampretpark`, `Land`, `Topsnelheid`, `Hoogte`) VALUES
(2, 'Red Force', 'Ferrari Land', 'Spanje', 192, 112),
(3, 'Ring Racer', 'Circuit Nurnberg', 'Duitsland', 160, 110),
(4, 'Hyperion', 'EnergyLandia', 'Spanje', 141, 77),
(5, 'Furios Baco', 'PortAventura', 'Spanje', 138, 23);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
