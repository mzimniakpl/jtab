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
-- Struktura tabeli dla tabeli `jtab.images`
--

CREATE TABLE IF NOT EXISTS `jtab.images` (
  `image_id` tinyint(3) NOT NULL DEFAULT '0',
  `image_type` varchar(25) NOT NULL DEFAULT '',
  `image` blob NOT NULL,
  `image_size` varchar(25) NOT NULL DEFAULT '',
  `image_ctgy` varchar(25) NOT NULL DEFAULT '',
  `image_name` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
