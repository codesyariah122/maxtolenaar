-- phpMyAdmin SQL Dump
-- version 4.1.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2017 at 09:08 AM
-- Server version: 5.1.67-andiunpam
-- PHP Version: 5.6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `DataUser`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `ip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `alamat` longtext NOT NULL,
  `tentang` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `date`, `ip`, `nama`, `email`, `phone`, `alamat`, `tentang`) VALUES
(1, '2017-11-05 23:12:38', 'f528764d624db129b32c21fbca0cb8d6', 'Zoey Killer', 'zoey@dataakses.com', '087855456661', 'Jl. Ambigu tabu gang anomali Blok kemenyan No.333', 'Dendam nyi pelet!!! \r\nAwasi imaji'),
(2, '2017-11-05 23:16:48', 'f528764d624db129b32c21fbca0cb8d6', 'Max Tolenaar', 'max_tolenaar@dataakses.com', '08886000299', 'Jl. Javascript No.755  komplek. Citraresmi', 'Kemuning cinta paripurna citraresmi'),
(3, '2017-11-07 09:05:05', 'f528764d624db129b32c21fbca0cb8d6', 'Deden Sombreros', 'sombreros@dataakses.com', '087854546551', 'Jl. Boeing komplek Melong Green Garden', 'Kenapa istri harus bisa masak?\r\nIni kan rumah tangga bukan rumah makan?'),
(4, '2017-11-07 09:06:48', 'f528764d624db129b32c21fbca0cb8d6', 'Sukaesih Codingground', 'coding_ground@dataakses.com', '089764512558', 'Jl. Ports of lima komplek. Tajur bumi', 'Selamatkan bumi dari pemanasan global'),
(5, '2017-11-07 09:08:03', 'f528764d624db129b32c21fbca0cb8d6', 'Dadang Muslihat', 'muslihat@dataakses.com', '088854556555', 'Jl. Bale endah No.65', 'Sekedar suka sama suka ini atuh beb.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
