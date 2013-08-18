-- phpMyAdmin SQL Dump
-- version 4.0.4.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 18 Sie 2013, 21:25
-- Wersja serwera: 5.5.31-0ubuntu1
-- Wersja PHP: 5.5.1-1ubuntu1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `jtab`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jtab.main.conf`
--

CREATE TABLE IF NOT EXISTS `jtab.main.conf` (
  `Group` varchar(64) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `ID` int(64) NOT NULL,
  KEY `jtab.main.conf.id` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `jtab.main.conf`
--

INSERT INTO `jtab.main.conf` (`Group`, `Name`, `ID`) VALUES
('Main', 'Brand', 1),
('Main', 'Model', 2),
('Main', 'Part Number', 3),
('Specification', 'Dimensions (H*L*B)', 4),
('Specification', 'Weight (grammes)', 5),
('Specification', 'Software OS', 6),
('Specification', 'Battery', 7),
('Specification', 'Battery life - on video', 8),
('Specification', 'Card reader', 9),
('Specification', 'Hard drive memory', 10),
('Specification', 'CPU', 11),
('Specification', 'RAM', 12),
('Specification', 'GPS', 13),
('Display', 'Resolution', 14),
('Display', 'Screen size', 15),
('Display', 'Screen type', 16),
('Sensors', 'Adaptive ambient lighting', 17),
('Sensors', 'Accelerometer', 18),
('Sensors', 'Barometer', 19),
('Sensors', 'Digital Compass', 20),
('Sensors', 'Gyroscope', 21),
('Multimedia', 'Speaker', 22),
('Multimedia', 'Rear camera', 23),
('Multimedia', 'Front camera', 24),
('Multimedia', 'Video', 25),
('Connections', '2G Network', 26),
('Connections', '3G Network', 27),
('Connections', 'Bluetooth', 28),
('Connections', 'WI-FI 802.11  ', 29),
('Connections', 'USB', 30),
('Connections', 'HDMI', 31),
('Documentation', 'User Guide', 32),
('Other', 'Colours', 33),
('Launch info', 'Date', 34),
('Launch info', 'Region', 35),
('Launch info', 'Pricepoint', 36);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
