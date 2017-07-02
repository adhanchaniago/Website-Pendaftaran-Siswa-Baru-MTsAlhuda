-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2014 at 09:41 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hubungi`
--

CREATE TABLE IF NOT EXISTS `tbl_hubungi` (
  `id_hubungi` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_hubungi`
--

INSERT INTO `tbl_hubungi` (`id_hubungi`, `nama`, `email`, `pesan`) VALUES
(2, 'Gede Suma Wijaya', 'gedelumbung@gmail.com', 'Tes Soal Online merupakan bagian dari sistem pembelajaran digital atau e-learning. Dimana kita diharapkan untuk bisa belajar secara mandiri tanpa terbatas oleh waktu dan tempat. Semoga melalui E-Learning dan Sistem Tes Soal Online ini, dapat tercapainya proses pembelajaran yang efektif dan efisien. Salam Hangat.'),
(3, 'kimaooanjd', 'khitsugaya115@gmail.com', 'halohalohako'),
(4, 'yuyuy', 'haha@yahoo.com', 'haha');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE IF NOT EXISTS `tbl_siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tmp_lahir` varchar(200) NOT NULL,
  `tgl_lahir` varchar(200) NOT NULL,
  `sekolah` varchar(200) NOT NULL,
  `ind` varchar(200) NOT NULL,
  `ing` varchar(200) NOT NULL,
  `mat` varchar(200) NOT NULL,
  `ipa` varchar(200) NOT NULL,
  `nun` varchar(100) NOT NULL,
  `ortu` varchar(200) NOT NULL,
  `alamat_ortu` varchar(200) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `penghasilan` varchar(200) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nama`, `alamat`, `tmp_lahir`, `tgl_lahir`, `sekolah`, `ind`, `ing`, `mat`, `ipa`, `nun`, `ortu`, `alamat_ortu`, `pendidikan`, `pekerjaan`, `penghasilan`) VALUES
(9, 'Dewi Yanri', 'Jl. Agus Salim', 'Gorontalo', '15 November 1996', 'SDN 61 Kota Gorontalo', '65', '70', '70', '60', '66', 'Dwi Sutrisno', 'Jl. Agus Salim', 'S1', 'Wiraswasta', '10000000'),
(10, 'Budiyanto', 'Jl. Panjaitan', 'Gorontalo', '6 February 1996', 'SDN 46 Kota Gorontalo', '55', '80', '40', '20', '48', 'Arifarta', 'Jl. Panjaitan', 'SMU', 'Karyawan', '600000'),
(11, 'Dwi Irayani', 'Jl. Jeruk', 'Gorontalo', '7 May 1996', 'SDN 30 Kota Gorontalo', '70', '73', '70', '76', '72', 'Joko', 'Jl. Jeruk', 'D3', 'Karyawan', '1000000'),
(12, 'Moly Liana', 'Jl. Mangga', 'Gorontalo', '16 January 2003', 'SDN. 30 Kota Gorontalo', '82', '80', '70', '72', '76', 'Rudianto', 'Jl. Mangga', 'S1', 'PNS', 'Rp. 3000.000'),
(13, '2', '2', '2', '17 January 2014', '22', '20', '20', '20', '20', '20', 'jjj', 'jjj', 'jjj', 'jjj', 'jjj'),
(14, 'k', 'k', 'k', '22 January 2014', 'k', '7', '7', '7', '7', '7', 'u', 'u', 'u', 'u', 'u'),
(15, 'rons', 'Jl. Agus Salim', 'dfdf', '20 January 2014', 'gdgdg', '6', '6', '6', '6', '6', 'gdg', 'dgdg', 'dgdg', 'dgdg', 'dgdg'),
(16, 'ggg', 'ggg', 'ggg', '14 January 2014', 'ggg', '9', '9', '9', '9', '9', 'gfgf', 'fgfg', 'fgfg', 'fgfg', 'fgfg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` char(100) NOT NULL,
  `email` char(50) NOT NULL,
  `pass` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `email`, `pass`, `nama`) VALUES
(1, 'moly', 'moly@yahoo.com', 'qq', 'Moly Lina'),
(2, 'budi', 'budi@yahoo.com', '00df', 'Budi Yusuf'),
(11, 'dana', 'dana@yahoo.com', 'dana', 'dana dani'),
(12, 'eren', 'yuuki@gmail.com', 'tita', 'yuki kaji'),
(13, 'sashapotato', 'sasha@snksurceycorps.com', 'sha', 'Sasha Blouse');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` char(100) NOT NULL,
  `email` char(50) NOT NULL,
  `pass` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `username`, `email`, `pass`, `nama`) VALUES
(1, 'heichou', 'levi@snksurveycorps.com', 'levi', 'Rivaille Levi'),
(2, 'erwin', 'irvin@snksurveycorps.com', 'brow', 'Irvin Smith'),
(3, 'horse', 'jean@snksurveycorps.com', 'neig', 'Jean Kirschtein');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
