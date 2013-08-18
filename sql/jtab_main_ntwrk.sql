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
-- Struktura tabeli dla tabeli `jtab.main.ntwrk`
--

CREATE TABLE IF NOT EXISTS `jtab.main.ntwrk` (
  `name` varchar(8) NOT NULL,
  `details` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `jtab.main.ntwrk`
--

INSERT INTO `jtab.main.ntwrk` (`name`, `details`) VALUES
('2G', 'GSM 850 / 900 / 1800 / 1900 '),
('3G', 'HSDPA 850 / 900 / 1900 / 2100 '),
('4G', 'LTE 700 (region specific)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
