-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 02:48 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uas_2019320035`
--

-- --------------------------------------------------------

--
-- Table structure for table `toko_hp`
--

CREATE TABLE IF NOT EXISTS `toko_hp` (
  `ID_HP` int(11) NOT NULL AUTO_INCREMENT,
  `Merk_HP` varchar(20) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Spesifikasi` text NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_HP`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `toko_hp`
--

INSERT INTO `toko_hp` (`ID_HP`, `Merk_HP`, `Harga`, `Spesifikasi`, `Gambar`) VALUES
(1, 'Samsung', 7000000, 'Dimensions	164 x 75.8 x 8.9 mm (6.46 x 2.98 x 0.35 in) Weight	205 g (7.23 oz) Build	Glass front, plastic back, plastic frame SIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)', 'samsung-galaxy-a12-sm-a125.jpg'),
(2, 'OPPO', 4200000, '  Tinggi: 164.0mm  Lebar: 75,4mm  Ketebalan: 7.9mm  Berat: 175g  * Ukuran dan berat produk dapat bervariasi berdasarkan konfigurasi, proses produksi dan pengukuran. Semua spesifikasi tunduk pada produk sebenarnya', 'kv.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
