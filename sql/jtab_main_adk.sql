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
-- Struktura tabeli dla tabeli `jtab.main.adk`
--

CREATE TABLE IF NOT EXISTS `jtab.main.adk` (
  `id` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `jtab.main.adk`
--

INSERT INTO `jtab.main.adk` (`id`, `name`) VALUES
('pre-release', 'Android alpha'),
('pre-release', 'Android beta'),
('API level 1', 'Android 1.0'),
('API level 2', 'Android 1.1'),
('API level 3', 'Android 1.5 Cupcake'),
('API level 4', 'Android 1.6 Donut'),
('API level 5', 'Android 2.0 Eclair'),
('API level 6', 'Android 2.01 Eclair'),
('API level 7', 'Android 2.1 Eclair'),
('API level 8', 'Android 2.2-2.2.3 Froyo'),
('API level 9', 'Android 2.3-2.3.2 Gingerbread'),
('API level 10', 'Android 2.3.3 -2.3.7 Gingerbread'),
('API level 11', 'Android 3.0 Honeycomb'),
('API level 12', 'Android 3.1 Honeycomb'),
('API level 13', 'Android 3.2 Honeycomb'),
('API level 14', 'Android 4.0-4.0.2 Ice Cream Sand'),
('API level 15', 'Android 4.0.3-4.04 Ice Cream San'),
('API level 16', 'Android 4.1 Jelly Bean '),
('API level 17', 'Android 4.2 Jelly Bean ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
