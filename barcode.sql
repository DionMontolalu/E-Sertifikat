-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 05:35 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `codebar`
--

CREATE TABLE IF NOT EXISTS `codebar` (
  `id_code` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  PRIMARY KEY (`id_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gelombang`
--

CREATE TABLE IF NOT EXISTS `gelombang` (
  `id_gel` int(11) NOT NULL AUTO_INCREMENT,
  `gelombang` varchar(20) NOT NULL,
  PRIMARY KEY (`id_gel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gelombang`
--

INSERT INTO `gelombang` (`id_gel`, `gelombang`) VALUES
(1, 'GELOMBANG I'),
(2, 'GELOMBANG II');

-- --------------------------------------------------------

--
-- Table structure for table `ketua`
--

CREATE TABLE IF NOT EXISTS `ketua` (
  `id_ketua` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ket` varchar(50) NOT NULL,
  `nip_ket` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ketua`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ketua`
--

INSERT INTO `ketua` (`id_ketua`, `nama_ket`, `nip_ket`) VALUES
(1, 'PROF. DR. REVOLSON A. MEGE, MS', '19620402 198801 1 001'),
(2, 'COB', '121');

-- --------------------------------------------------------

--
-- Table structure for table `kordinator`
--

CREATE TABLE IF NOT EXISTS `kordinator` (
  `id_kord` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kord` varchar(50) NOT NULL,
  `nip_kord` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kord`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kordinator`
--

INSERT INTO `kordinator` (`id_kord`, `nama_kord`, `nip_kord`) VALUES
(1, 'Dr. Paul Pontoh, M.PD', '195807021987031003');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_sert` int(11) NOT NULL AUTO_INCREMENT,
  `id_ketua` int(3) unsigned NOT NULL DEFAULT '0',
  `id_kord` int(3) unsigned NOT NULL DEFAULT '0',
  `id_gel` int(3) unsigned NOT NULL DEFAULT '0',
  `nom_sert` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `lokasi_kkn` varchar(30) NOT NULL,
  `dr_bln` varchar(20) NOT NULL,
  `sm_bln` varchar(20) NOT NULL,
  `thn_kkn` varchar(10) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_sert`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) NOT NULL,
  `disiplin` double NOT NULL,
  `kreatif` double NOT NULL,
  `kerjasama` double NOT NULL,
  `komunikasi` double NOT NULL,
  `kesesuaian` double NOT NULL,
  `nilai` double NOT NULL,
  `grade` char(1) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'adminlpm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
