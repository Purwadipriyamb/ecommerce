-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2015 at 01:12 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `Status`) VALUES
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE IF NOT EXISTS `tb_produk` (
  `id_produk` varchar(12) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `nama_kategori` varchar(15) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `harga` varchar(12) NOT NULL,
  `ukuran` text NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `nama_kategori`, `gambar`, `harga`, `ukuran`) VALUES
('ynk', 'Yongki Komaladi', 'Vantopel', 'yongki.jpg', '200.000', 'Allsize'),
('ynx', 'Yonex', 'Olahraga', 'yonex.jpg', '210.000', 'Allsize'),
('fdo', 'Fladeo', 'Wedges', 'fladeo.jpg', '110.000', 'Allsize'),
('vv', 'Vana-Vani', 'Wedges', 'vanavani.jpg', '130.000', 'Allsize'),
('mcs', 'Mocassino', 'Vantopel', 'mocassino.jpg', '130.000', 'Allsize'),
('adl', 'Ardilles', 'Sekolah', 'ardiles.jpg', '105.000', 'Allsize'),
('ado', 'Ando', 'Sekolah', 'ando.jpg', '83.000', 'Allsize'),
('hpd', 'Homy Ped', 'Sekolah Anak', 'homyped.jpg', '132.000', 'Allsize'),
('ctl', 'Cristallo', 'Highhills', 'cristallo.jpg', '124.000', 'Allsize'),
('mgl', 'Mogul', 'Sekolah', 'mogul.jpg', '87.000', 'Allsize'),
('spt', 'Spotec', 'Olahraga', 'spotec.jpg', '133.000', 'Allsize'),
('tkn', 'Tomkins', 'Sekolah', 'tomkins.jpg', '175.000', 'Allsize');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `id_transaksi` int(12) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NOT NULL,
  `jumlah` int(12) NOT NULL,
  `pembeli` varchar(45) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `email` varchar(45) NOT NULL,
  `kredit` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `ukuran` varchar(12) NOT NULL,
  `status` varchar(12) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `tgl_transaksi`, `jumlah`, `pembeli`, `jk`, `email`, `kredit`, `total`, `ukuran`, `status`) VALUES
(4, '2015-02-16', 2, 'Liya', 'P', 'liya@gmail.com', '1234567890123456789', '248.000', '', 'lama'),
(14, '2015-02-20', 2, 'z', 'P', 'z@z.a', '090', '400.000', 'Small', 'baru'),
(5, '2015-02-16', 2, 'Andre', 'L', 'Andre@yahoo.com', '98765432101234567890', '350.000', '', 'lama'),
(6, '2015-02-17', 3, 'Nuryan', 'L', 'nuryan@gmail.com', '12345678901111', '600.000', '', 'lama'),
(7, '2015-02-17', 1, 'Adi', 'L', 'adi@yahoo.com', '12345', '210.000', '', 'lama'),
(13, '2015-02-20', 2, 'kadi', 'L', 'kadi@g.co', '564', '420.000', 'Xtra Large', 'lama'),
(12, '2015-02-20', 1, 'ega', 'L', 'ega@g.com', '119', '132.000', 'Medium', 'lama'),
(11, '2015-02-20', 1, 'pur', 'L', 'pur@y.co.id', '97', '155.050', 'Large', 'lama');
