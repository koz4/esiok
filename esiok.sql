-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2011 at 11:23 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `esiok`
--

-- --------------------------------------------------------

--
-- Table structure for table `licencje`
--

CREATE TABLE IF NOT EXISTS `licencje` (
  `licencje_id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(128) NOT NULL,
  PRIMARY KEY (`licencje_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `licencje`
--

INSERT INTO `licencje` (`licencje_id`, `nazwa`) VALUES
(35, 'freeware'),
(36, 'freeware'),
(37, 'freeware'),
(38, 'freeware'),
(39, 'freeware'),
(40, 'freeware'),
(41, 'freeware'),
(42, 'freeware'),
(43, 'freeware'),
(44, 'freeware'),
(45, 'freeware'),
(46, 'freeware');

-- --------------------------------------------------------

--
-- Table structure for table `plik`
--

CREATE TABLE IF NOT EXISTS `plik` (
  `plik_id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwapliku` varchar(128) NOT NULL,
  PRIMARY KEY (`plik_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `plik`
--

INSERT INTO `plik` (`plik_id`, `nazwapliku`) VALUES
(1, 'Raport.xml'),
(2, 'Raport.xml'),
(3, 'Raport.xml'),
(4, 'Raport.xml');

-- --------------------------------------------------------

--
-- Table structure for table `praca`
--

CREATE TABLE IF NOT EXISTS `praca` (
  `praca_id` int(11) NOT NULL AUTO_INCREMENT,
  `System operacyjny` varchar(128) DEFAULT NULL,
  `Nazwa komputera` varchar(128) DEFAULT NULL,
  `Nazwa uzytkownika` varchar(128) DEFAULT NULL,
  `Data / Czas` varchar(128) DEFAULT NULL,
  `Typ procesora` varchar(128) DEFAULT NULL,
  `Nazwa plyty glownej` varchar(128) DEFAULT NULL,
  `Mikrouklad plyty glownej` varchar(128) DEFAULT NULL,
  `Pamiec fizyczna` varchar(128) DEFAULT NULL,
  `Karta wideo` varchar(128) DEFAULT NULL,
  `Karta dzwiekowa` varchar(128) DEFAULT NULL,
  `Dysk fizyczny` varchar(128) DEFAULT NULL,
  `Naped dyskow optycznych` varchar(128) DEFAULT NULL,
  `Rozmiar calkowity` varchar(128) DEFAULT NULL,
  `Podstawowy adres IP` varchar(128) DEFAULT NULL,
  `Podstawowy adres karty (MAC)` varchar(128) DEFAULT NULL,
  `Karta sieciowa` varchar(128) DEFAULT NULL,
  `Modem` varchar(128) DEFAULT NULL,
  `Drukarka` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`praca_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `praca`
--

INSERT INTO `praca` (`praca_id`, `System operacyjny`, `Nazwa komputera`, `Nazwa uzytkownika`, `Data / Czas`, `Typ procesora`, `Nazwa plyty glownej`, `Mikrouklad plyty glownej`, `Pamiec fizyczna`, `Karta wideo`, `Karta dzwiekowa`, `Dysk fizyczny`, `Naped dyskow optycznych`, `Rozmiar calkowity`, `Podstawowy adres IP`, `Podstawowy adres karty (MAC)`, `Karta sieciowa`, `Modem`, `Drukarka`) VALUES
(35, 'Microsoft Windows 7 Professional', 'SRV', 'koz4', '2011-12-06 / 21:30', 'DualCore AMD Athlon 64 X2, 2600 MHz (13 x 200) 5000+', 'Gigabyte GA-MA74GM-S2H', 'AMD740G', '2048 MB  (DDR2-800 DDR2 SDRAM)', 'NVIDIA GeForce 9400 GT  (1024 MB)', 'Realtek ALC888/1200 @ ATI SB700 - High Definition Audio Controller', 'Sony Storage Media USB Device  (1920 MB, USB)', 'PIONEER DVD-RW  DVR-216 ATA Device  (DVD+R9:12x, DVD-R9:12x, DVD+RW:20x/8x, DVD-RW:20x/6x, DVD-RAM:12x, DVD-ROM:16x, CD:40x/32x/', '526.9 GB (20.7 GB wolne)', '192.168.1.100', '00-1F-D0-53-75-8B', 'VirtualBox Host-Only Ethernet Adapter  (192.168.56.1)', NULL, 'Microsoft XPS Document Writer');

-- --------------------------------------------------------

--
-- Table structure for table `programy`
--

CREATE TABLE IF NOT EXISTS `programy` (
  `programy_id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(128) NOT NULL,
  `licencje_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`programy_id`),
  KEY `fk_programy_licencje` (`licencje_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `programy`
--

INSERT INTO `programy` (`programy_id`, `nazwa`, `licencje_id`) VALUES
(35, 'Acrobat Reader 9.3', 35),
(36, 'Winamp', 36),
(37, 'Asd', NULL),
(38, 'Windows XP Home Edition', 37),
(39, 'Windows XP Home Edition', 38),
(40, 'Windows XP Professional', 39),
(41, '7 zip', 40),
(42, 'Acrobat Reader 9.4', 41),
(43, 'Asd', 42),
(44, 'Dreamweaver', 43),
(45, 'Eset Nod 32', 44),
(46, 'Asd', 45),
(47, 'Asd', 46);

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE IF NOT EXISTS `system` (
  `id_system` int(11) NOT NULL AUTO_INCREMENT,
  `system` varchar(128) DEFAULT NULL,
  `numer` varchar(128) NOT NULL,
  `user` varchar(128) NOT NULL,
  `data` varchar(128) NOT NULL,
  `procesor` varchar(128) NOT NULL,
  `plyta` varchar(128) NOT NULL,
  `chipset` varchar(128) NOT NULL,
  `pamiec` varchar(128) NOT NULL,
  `grafika` varchar(128) NOT NULL,
  `dzwiek` varchar(128) NOT NULL,
  `hdd` varchar(128) NOT NULL,
  `odd` varchar(128) NOT NULL,
  `rozmiar` varchar(128) NOT NULL,
  `ip` varchar(128) NOT NULL,
  `mac` varchar(128) NOT NULL,
  `nic` varchar(128) NOT NULL,
  `modem` varchar(128) NOT NULL,
  `drukarka` varchar(128) NOT NULL,
  PRIMARY KEY (`id_system`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`id_system`, `system`, `numer`, `user`, `data`, `procesor`, `plyta`, `chipset`, `pamiec`, `grafika`, `dzwiek`, `hdd`, `odd`, `rozmiar`, `ip`, `mac`, `nic`, `modem`, `drukarka`) VALUES
(1, 'Windows Xp sp 3', 'Sn 009', 'Marek Kuziola', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `programy`
--
ALTER TABLE `programy`
  ADD CONSTRAINT `fk_programy_licencje` FOREIGN KEY (`licencje_id`) REFERENCES `licencje` (`licencje_id`) ON DELETE SET NULL ON UPDATE SET NULL;
