-- phpMyAdmin SQL Dump
-- version 4.0.4.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 16 Sie 2013, 17:49
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
CREATE DATABASE IF NOT EXISTS `jtab` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jtab`;

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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jtab.main`
--

CREATE TABLE IF NOT EXISTS `jtab.main` (
  `Main.Brand` varchar(64) NOT NULL,
  `Main.Model` varchar(64) NOT NULL,
  `Main.Part Number` varchar(64) NOT NULL,
  `Main.Photos` varchar(128) NOT NULL,
  `Specification.Dimensions (H*L*B)` varchar(64) NOT NULL,
  `Specification.Weight (grammes)` varchar(64) NOT NULL,
  `Specification.Software OS` varchar(64) NOT NULL,
  `Specification.Battery` varchar(64) NOT NULL,
  `Specification.Battery life - on video` varchar(64) NOT NULL,
  `Specification.Card reader` varchar(64) NOT NULL,
  `Specification.Hard drive memory` varchar(64) NOT NULL,
  `Specification.CPU` varchar(64) NOT NULL,
  `Specification.RAM` varchar(64) NOT NULL,
  `Specification.GPS` varchar(64) NOT NULL,
  `Display.Resolution` varchar(64) NOT NULL,
  `Display.Screen size` varchar(64) NOT NULL,
  `Display.Screen type` varchar(64) NOT NULL,
  `Sensors.Adaptive ambient lighting` varchar(64) NOT NULL,
  `Sensors.Accelerometer` varchar(64) NOT NULL,
  `Sensors.Barometer` varchar(64) NOT NULL,
  `Sensors.Digital Compass` varchar(64) NOT NULL,
  `Sensors.Gyroscope` varchar(64) NOT NULL,
  `Multimedia.Speaker` varchar(64) NOT NULL,
  `Multimedia.Rear camera` varchar(64) NOT NULL,
  `Multimedia.Front camera` varchar(64) NOT NULL,
  `Multimedia.Video` varchar(64) NOT NULL,
  `Connections.2G Network` varchar(64) NOT NULL,
  `Connections.3G Network` varchar(64) NOT NULL,
  `Connections.Bluetooth` varchar(64) NOT NULL,
  `Connections.WI-FI 802.11` varchar(64) NOT NULL,
  `Connections.USB` varchar(64) NOT NULL,
  `Connections.HDMI` varchar(64) NOT NULL,
  `Documentation.User Guide` varchar(64) NOT NULL,
  `Other.Colours` varchar(64) NOT NULL,
  `Launch info.Date` varchar(64) NOT NULL,
  `Launch info.Region` varchar(64) NOT NULL,
  `Launch info.Pricepoint` varchar(64) NOT NULL,
  KEY `main.brand` (`Main.Brand`),
  KEY `main.model` (`Main.Model`),
  KEY `main.partnumber` (`Main.Part Number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `jtab.main`
--

INSERT INTO `jtab.main` (`Main.Brand`, `Main.Model`, `Main.Part Number`, `Main.Photos`, `Specification.Dimensions (H*L*B)`, `Specification.Weight (grammes)`, `Specification.Software OS`, `Specification.Battery`, `Specification.Battery life - on video`, `Specification.Card reader`, `Specification.Hard drive memory`, `Specification.CPU`, `Specification.RAM`, `Specification.GPS`, `Display.Resolution`, `Display.Screen size`, `Display.Screen type`, `Sensors.Adaptive ambient lighting`, `Sensors.Accelerometer`, `Sensors.Barometer`, `Sensors.Digital Compass`, `Sensors.Gyroscope`, `Multimedia.Speaker`, `Multimedia.Rear camera`, `Multimedia.Front camera`, `Multimedia.Video`, `Connections.2G Network`, `Connections.3G Network`, `Connections.Bluetooth`, `Connections.WI-FI 802.11`, `Connections.USB`, `Connections.HDMI`, `Documentation.User Guide`, `Other.Colours`, `Launch info.Date`, `Launch info.Region`, `Launch info.Pricepoint`) VALUES
('ACER', 'Iconica Tab A200', 'A200-10G16U', '', '200 X 175 X 12.5mm', '700', 'Android 3.2 Honeycomb, upgradable to V4.0 Ice Cream Sandwich', '3260mAh Li-ion battery', '7h', 'Micro SD (upto 32 GB)', '16GB', 'Nvidia Tegra 2 1 GHz', '1GB - DDR2 SDRAM', 'Yes', '1280 X 800 (160 dpi)', '10.1 inch', 'LCD', 'None', 'Yes', '', '', 'Yes', 'Yes', 'None', '2 MP', '1080 p', 'None', 'None', '2,1', 'b/g/n', 'microUSB', 'None', 'Available', 'Metallic red;Titanium gray', '2012-02-01', 'Europe', '329'),
('ACER', 'Iconica Tab A210', 'A210-10G16U', '', '200 X 175 X 12.5mm', '777', 'Android 4 Ice Cream Sandwich, upgradable to V4.1 Jelly Bean', '3260mAh Li-ion battery', '7h', 'Micro SD (upto 32 GB)', '8 GB', 'Nvidia Tegra 3 Quad core, ARM Cortex-A9 1.2 GHz', '1GB - DDR2 SDRAM', 'Yes', '1280 X 800 (160 dpi)', '10.1 inch', 'TFT', 'Yes', 'Yes', '', '', 'Yes', 'Yes', 'None', '2 MP', '1080 p', 'None', 'None', '2,1', 'b/g/n', 'microUSB', 'None', 'Available', 'Titanium gray', '2012-02-01', 'Europe', '329'),
('ACER', 'Iconica Tab A211', 'Need info', '', '260 X 175 X 12.4mm', '777', 'Android 4.1 Jelly Bean', '3260mAh Li-ion battery', '7h', 'Micro SD (upto 32 GB)', '8 GB', 'Nvidia Tegra 3 Quad core, ARM Cortex-A9 1.2 GHz', '1GB - DDR2 SDRAM', 'Yes', '1280 X 800 (160 dpi)', '10.1 inch', 'LCD', 'Yes', 'Yes', '', '', 'Yes', 'Yes', 'None', '2 MP', '1080 p', 'GSM850, GSM900, GSM1800, GSM1900, UMTS900 (B8), UMTS2100 (B1)', 'GPRS, EDGE, UMTS, HSDPA, HSUPA, HSPA+', '2,1', 'b/g/n', 'USB 2.0', 'None', 'Available', 'Titanium gray', '2012-02-01', 'Europe', '329'),
('ACER', 'Iconica Tab A500', 'Need info', '', '260 X 177 X 13.3mm', '712', 'Android 4 Ice Cream Sandwich', '3260mAh Li-ion battery', '7h', 'Micro SD (upto 32 GB)', '16GB', 'Dual-core Arm CORTEX A9 1 GHz', '1GB - DDR2 SDRAM', 'Yes', '1280 X 800 (160 dpi)', '10.1 inch', 'LCD', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes', '5 MP', '2 MP', '720 p', 'None', 'None', '2,1', 'b/g/n', 'microUSB', 'Micro HDMI (Type D)', 'Available', 'Black', '2012-03-01', 'Europe', '399'),
('ACER', 'Iconica Tab A501', 'Need info', '', '260 X 177 X 13.3mm', '730', 'Android 3.0 Honeycomb', '3260mAh Li-ion battery', '7h', 'Micro SD (upto 32 GB)', '32 GB', 'Dual-core Arm CORTEX A9 1 GHz', '1GB - DDR2 SDRAM', 'Yes', '1280 X 800 (160 dpi)', '10.1 inch', 'LCD', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes', '5 MP', '2 MP', '720 p', '850, 900, 1800, 1900 MHz', 'HSDPA 900 / 2100', '2,1', 'b/g/n', 'microUSB', 'Micro HDMI (Type D)', 'Available', 'Black', '2011-07-01', 'Europe', '399'),
('ACER', 'Iconica Tab A510', 'Need info', '', '259 X 175 X 11mm', '698', 'Android 4 Ice Cream Sandwich', '9800mAh', '12h', 'Micro SD (upto 32 GB)', '32 GB', 'Nvidia Tegra 3 Quad core, ARM Cortex-A9 1.3 GHz', '1GB - DDR2 SDRAM', 'Yes', '1280 X 800 (160 dpi)', '10.1 inch', 'LCD', 'Yes', 'Yes', '', '', '', 'Yes', '5 MP', '2 MP', '720 p', 'None', 'None', '2,1', 'b/g/n', 'microUSB', 'Micro HDMI (Type D)', 'Available', 'Black;Silver', '2012-03-01', 'Europe', '399'),
('ACER', 'Iconica Tab A700', 'Need info', '', '259 X 175 X 11mm', '665', 'Android 4 Ice Cream Sandwich', '9800mAh', '18h', 'Micro SD (upto 32 GB)', '16 GB / 32 GB / 64 GB', 'Nvidia Tegra 3 Quad core, ARM Cortex-A9 1.3 GHz', '1GB - DDR2 SDRAM', 'Yes', '1920 X 1200 (224 dpi)', '10.1 inch', 'LCD', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes', '5 MP', '2 MP', '720 p', 'None', 'None', '3', 'a/b/g/n', '', '', 'Available', 'Metallic red;Titanium gray', '2012-03-01', 'Europe', '399'),
('ACER', 'Iconica Tab A701', 'Need info', '', '259.8 X 175 X 10.9mm', '667', 'Android 4 Ice Cream Sandwich', '9800mAh', '18h', 'Micro SD (upto 32 GB)', '16 GB / 32 GB / 64 GB', 'Nvidia Tegra 3 Quad core, ARM Cortex-A9 1.3 GHz', '1GB - DDR2 SDRAM', 'Yes', '1920 X 1200 (224 dpi)', '10.1 inch', 'LCD', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes', '5 MP', '2 MP', '720 p', 'GSM 850 / 900 / 1800 / 1900', 'HSDPA 900 / 2100', '2,1', 'a/b/g/n', '', '', 'Available', 'Titanium gray', '2012-03-01', 'Europe', '399'),
('APPLE', 'Ipad 2 Wi-Fi', 'Need info', '', '241.2 X 185.7 X 8.8mm', '601', 'IOS 5', '6930mAh', '7h', 'None', '16 GB', 'Apple Dual core A5 1 GHz', '512 Mb', 'Yes', '1024 X 768', '9.7 inch', 'LED-backlit Multi?Touch display with IPS technology', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes', '720 p', 'VGA', '720 p', 'None', 'None', '2,1', 'a/b/g/n', 'None', 'None', 'Available', 'Black;White', '2013-03-01', 'Europe', '409'),
('APPLE', 'Ipad 2 Wi-Fi + 3G', 'Need info', '', '241.2 X 185.7 X 8.8mm', '613', 'IOS 5', '6930mAh', '7h', 'None', '16 GB', 'Apple Dual core A5 1 GHz', '512 Mb', 'Yes', '1024 X 768', '9.7 inch', 'LED-backlit Multi?Touch display with IPS technology', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes', '720 p', 'VGA', '720 p', 'GSM 850, 900, 1800, 1900\nWCDMA 850, 1900', 'HSPA+ (4G), HSUPA (3.5G), HSDPA (3.5G), WCDMA (3G)', '2,1', 'a/b/g/n', 'None', 'None', 'Available', 'Black;White', '2013-03-01', 'Europe', '409'),
('APPLE', 'Ipad 3', 'Need info', '', '241.2 X 185.7 X 12.6mm', '652', 'IOS 5.1', 'Need info', '10h', 'X', '16 GB / 32 GB / 64 GB', 'Apple Dual core A5X with quad-core graphics', 'Need info', 'Yes', '2048 X 1536 (264 dpi)', '9.7 inch', 'Retina LED IPS', '', '', '', '', '', 'Yes', '5 MP', 'Yes', '1080 p', '3G & 4G Model', '', '4', 'b/g/n', 'None', 'None', '', '', '2012-03-01', 'Europe', '489'),
('APPLE', 'Ipad 4', 'Need info', '', '241.2 X 185.7 X 12.6mm', '652', 'IOS 5.1', 'Need info', '10h', 'X', '16 GB / 32 GB / 64 GB', 'Apple Dual core A5X with quad-core graphics', 'Need info', 'Yes', '2048 X 1536 (264 dpi)', '9.7 inch', 'Retina LED IPS', '', '', '', '', '', 'Yes', '5 MP', 'Yes', '1080 p', '3G & 4G Model', '', '4', 'b/g/n', 'None', 'None', '', '', '2012-03-01', 'Europe', '489'),
('ARCHOS', '101 G 9', 'Need info', '', '276 X 167.3 X 12.6mm', '649', 'Android 3.1', 'Need info', '7h', 'Micro SD', '8 GB / 16 GB', 'Dual-core Arm CORTEX A9 1 GHz', 'Need info', 'Yes', '1280 X 800 (160 dpi)', '10.1 inch', ' TFT', '', '', '', '', '', 'Yes', 'None', 'Yes', 'Yes', '3G Model only', '', '2,1', 'Yes', 'Yes', 'Yes', '', '', '2011-09-01', 'Europe', '269'),
('ARNOVA', '10 G 2', 'Need info', '', '270 X 150 X 12mm', '540', 'Android 2.3', 'Need info', 'Lithium', 'Micro SDHC', '4 GB / 8 GB', 'Arm CORTEX A8 1 GHz', 'Need info', 'No', '1024 X 600', '10.1 inch', 'LCD TFT', '', '', '', '', '', 'Yes', 'None', 'Yes', '720 p', 'None', '', 'None', 'Yes', 'Yes', 'None', '', '', '2011-10-01', 'Europe', '177'),
('ASUS', 'Eee Pad Transformer 9-10''''', 'Need info', '', '271 X 171 X 12.98mm', '680', 'Android 3.0', 'Need info', '9h 30', 'Micro SDHC', '16 GB / 32 GB', 'Nvidia Tegra 2 1 GHz', '1 GB', 'Yes', '1280 X 800 (160 dpi)', '10.1 inch', 'TFT LED WXGA 16/10', '', '', '', '', '', 'Yes', '5 MP', '1.2 MP', 'Yes', '3G Model only', '', '2,1', 'Yes', 'Yes', 'Yes', '', '', '2011-04-01', 'Europe', '360'),
('ASUS', 'Asus Eee Pad Slider', 'Need info', '', '263 X 180.3 X 17.3mm', '960', 'Android 3.1', 'Need info', '8h', 'Micro SD', '16 GB / 32 GB', 'Nvidia Tegra 2 1 GHz', '1 GB', 'Yes', '1280 X 800 (160 dpi)', '10.1 inch', 'TFT LED WXGA 16/10', '', '', '', '', '', 'Yes', '5 MP', '1.2 MP', 'Yes', 'Need info', '', '2,1', 'Yes', 'Yes', 'Yes', '', '', '2011-09-01', 'Europe', '489'),
('ASUS', 'Asus Eee Pad Prime', 'Need info', '', '263 X 180 X 8.3mm', '586', 'Android 4 Ice Cream Sandwich', 'Need info', '12h', 'Micro SD', '32 GB / 64 GB', 'Nvidia Tegra 3 Quad Core 1.3 GHz', '1 GB', 'Yes', '1280 X 800 (160 dpi)', '10.1 inch', 'TFT LED IPS+ 16/10', '', '', '', '', '', 'Yes', '8 MP', '1.2 MP', 'Yes', 'Need info', '', '2,1', 'Yes', 'None', 'Yes', '', '', '2011-12-01', 'Europe', '599'),
('HP', 'Touch Pad', 'FB401UA#ABA', '', '190 X 240 X 13.7mm', '740', 'WebOS 3.0', '6300mAh', '8h', 'Micro SD (upto 32 GB)', '16 GB / 32 GB', 'Dual Core 1700 Mhz QUALCOMM Snapdragon APQ8060', '1 GB', 'No', '1024 X 768', '9.7 inch', 'TFT', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes', 'None', '1.3 MP', '720 p', 'GSM 850, 900, 1800, 1900\nWCDMA 850, 1900', 'HSPA+ (4G), HSUPA (3.5G), HSDPA (3.5G), WCDMA (3G)', '2,1', 'a/b/g/n', 'USB 2.0', 'None', 'Available', 'Black;White', '2011-07-01', 'Europe', '300'),
('HP', 'Touch Pad', 'FB356UA#ABA', '', '190 X 240 X 13.7mm', '740', 'WebOS 3.0', '6300mAh', '8h', 'Micro SD (upto 32 GB)', '16 GB / 32 GB', 'Dual Core 1700 Mhz QUALCOMM Snapdragon APQ8060', '1 GB', 'No', '1024 X 768', '9.7 inch', 'TFT', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes', 'None', '1.3 MP', '720 p', 'GSM 850, 900, 1800, 1900\nWCDMA 850, 1900', 'HSPA+ (4G), HSUPA (3.5G), HSDPA (3.5G), WCDMA (3G)', '2,1', 'a/b/g/n', 'USB 2.0', 'None', 'Available', 'Black;White', '2011-07-01', 'Europe', '300'),
('HTC', 'Flyer', 'Need info', '', 'Need info', 'Need info', 'Android 2.3 with HTC Sense', '4000mAh', 'Need info', 'SD Card', '32 GB', '1.5 GHz single core', '1 GB', 'Need info', '1024 X 600', '7', 'Need info', '', '', '', 'Yes', 'Yes', 'Yes', '5 MP', '1.3 MP', '720 p', '3G Model only', '', 'Need info', 'Need info', 'Need info', 'None', '', '', 'Need info', 'Europe', 'Need info'),
('LG', 'G-Slate', 'Need info', '', 'Need info', 'Need info', 'Android 3.2 Honeycomb', '6400mAh', 'Need info', 'X', '32 GB', 'Nvidia dual core Tegra 2 1 GHz', 'Need info', 'Need info', '1280 X 768', '8,9', 'Need info', 'Yes', 'Yes', '', '', 'Yes', 'Yes', '5 MP', '2 MP', '1080 p', '3G & 4G Model', '', 'Need info', 'Need info', 'Need info', 'Yes', '', '', 'Need info', 'Europe', 'Need info'),
('MOTOROLA', 'Xoom 2', 'Need info', '', '253.9 X 173.6 X 8.8mm', '599', 'Android 3.2 Honeycomb', 'Need info', 'Need info', 'Micro SD (upto 32 GB)', '16 GB / 32 GB', 'OMAP dual core, ARM Cortex A9 1.2 GHz', '1 GB', 'Need info', '1280 X 800 (160 dpi)', '10.1 inch', 'TFT', '', 'Yes', '', '', 'Yes', 'Yes', '5 MP', '2 MP', '720 p', 'None', '', 'Yes', 'Yes', 'Yes', 'Yes', '', '', '2011-11-01', 'Europe', '391'),
('MOTOROLA', 'Droid Xyboard', 'Need info', '', '263 X 180.3 X 17.3mm', '960', 'Android 3.1', 'Need info', '8h', 'Micro SD', '16 GB / 32 GB', 'Nvidia Tegra 2 1 GHz', '1 GB', 'Yes', '1280 X 800 (160 dpi)', '10.1 inch', 'TFT LED WXGA 16/10', '', '', '', '', '', 'Yes', '5 MP', '1.2 MP', 'Yes', 'Need info', '', '2,1', 'Yes', 'Yes', 'Yes', '', '', '2011-09-01', 'Europe', '489'),
('SAMSUNG', 'Galaxy Tab 10.1', 'Need info', '', '253.9 X 173.6 X 8.8mm', '599', 'Android 3.2 Honeycomb', '6800mAh', '9h', 'X', '16 GB / 32 GB / 64 GB', 'Nvidia dual core Tegra 2 1 GHz', '1 GB', 'Yes', '1280 X 800 (160 dpi)', '10.1 inch', 'WXGA', '', 'Yes', '', 'Yes', 'Yes', 'Yes', '3 MP + flash', '2 MP', '1080 P', '3G & 4G Model', '', '2,1', 'a/b/g/n', 'None', 'None', '', '', '2011-08-01', 'Europe', '430'),
('SAMSUNG', 'Galaxy Note N7000 10.1', 'Need info', '', '253.9 X 173.6 X 9.7mm', '588', 'Android 4 Ice Cream Sandwich', '7000mAh', '9h', 'Micro SD', '16 GB / 32 GB', 'Dual-core Arm CORTEX A9 1.4 GHz', '1 GB', '?', '1280 X 800 (160 dpi)', '10,1', 'WXGA', '', '', '', '', '', 'Yes', '3 MP + flash', '2 MP', '1080 P', '3G Model only', '', '3', 'a/b/g/n', 'None', 'None', '', '', 'Need info', 'Europe', 'Need info'),
('SONY', 'Tablet S', 'Need info', '', '174 X 241 X 10mm', '598', 'Android 3.2 Honeycomb', 'Need info', '7h', 'SD Card', '16 GB / 32 GB', 'Nvidia Tegra 2 1 GHz', '1 GB', '?', '1280 X 800 (160 dpi)', '9,4', 'LCD TFT WXGA', '', '', '', '', '', 'Yes', '5 MP', '.3 MP', 'Yes', '3G Model only', '', 'Yes', 'Yes', 'Yes', 'None', '', '', '2011-11-01', 'Europe', '429'),
('TOSHIBA', 'Excite 10 LE', 'Need info', '', '', 'Need info', 'Android 3.2 Honeycomb', '6800mAh', '9h', 'Micro SD (upto 32 GB)', '16 GB / 32 GB', '', '1 GB', 'Yes', '1280 X 800 (160 dpi)', '10.1 inch', '', '', '', '', '', '', 'Yes', '5 MP + flash', '2 MP', 'Yes', 'Need info', '', '2,1', 'b/g/n', '', '', '', '', 'Need info', 'Need info', 'Need info');

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
