-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2017 at 09:04 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `familycaretakersystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_bacsi`
--

CREATE TABLE IF NOT EXISTS `t_bacsi` (
  `bacsi_id` int(11) NOT NULL AUTO_INCREMENT,
  `hodem` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `danhgia` tinyint(4) NOT NULL,
  `khoa_id` int(11) NOT NULL,
  PRIMARY KEY (`bacsi_id`),
  KEY `khoa_id` (`khoa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_benhvien`
--

CREATE TABLE IF NOT EXISTS `t_benhvien` (
  `benhvien_id` int(11) NOT NULL AUTO_INCREMENT,
  `tenbenhvien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `danhgia` tinyint(4) NOT NULL,
  PRIMARY KEY (`benhvien_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_khoa`
--

CREATE TABLE IF NOT EXISTS `t_khoa` (
  `khoa_id` int(11) NOT NULL AUTO_INCREMENT,
  `tenkhoa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `benhvien_id` int(11) NOT NULL,
  PRIMARY KEY (`khoa_id`),
  KEY `benhvien_id` (`benhvien_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_lichsukhambenh`
--

CREATE TABLE IF NOT EXISTS `t_lichsukhambenh` (
  `lichsu_id` int(11) NOT NULL AUTO_INCREMENT,
  `ngaykham` date NOT NULL,
  `chandoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ketqua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `donthuoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thanhvien_id` int(11) NOT NULL,
  PRIMARY KEY (`lichsu_id`),
  KEY `t_lichsukhambenh_ibfk_1` (`thanhvien_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_taikhoan`
--

CREATE TABLE IF NOT EXISTS `t_taikhoan` (
  `taikhoan_id` int(11) NOT NULL AUTO_INCREMENT,
  `taikhoan` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `hodem` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phanquyen` tinyint(4) NOT NULL,
  PRIMARY KEY (`taikhoan_id`),
  UNIQUE KEY `taikhoan` (`taikhoan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_thanhvien`
--

CREATE TABLE IF NOT EXISTS `t_thanhvien` (
  `thanhvien_id` int(11) NOT NULL AUTO_INCREMENT,
  `hodem` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `cmt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan_id` int(11) NOT NULL,
  PRIMARY KEY (`thanhvien_id`),
  UNIQUE KEY `cmt` (`cmt`),
  KEY `taikhoan_id` (`taikhoan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_trieuchung`
--

CREATE TABLE IF NOT EXISTS `t_trieuchung` (
  `trieuchung_id` int(11) NOT NULL AUTO_INCREMENT,
  `trieuchung` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`trieuchung_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_trieuchung_benh`
--

CREATE TABLE IF NOT EXISTS `t_trieuchung_benh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trieuchung_id` int(11) DEFAULT NULL,
  `lichsu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`trieuchung_id`,`lichsu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_benhvien`
--
ALTER TABLE `t_benhvien`
  ADD CONSTRAINT `t_benhvien_ibfk_1` FOREIGN KEY (`benhvien_id`) REFERENCES `t_khoa` (`benhvien_id`);

--
-- Constraints for table `t_khoa`
--
ALTER TABLE `t_khoa`
  ADD CONSTRAINT `t_khoa_ibfk_1` FOREIGN KEY (`khoa_id`) REFERENCES `t_bacsi` (`khoa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_lichsukhambenh`
--
ALTER TABLE `t_lichsukhambenh`
  ADD CONSTRAINT `t_lichsukhambenh_ibfk_1` FOREIGN KEY (`thanhvien_id`) REFERENCES `t_thanhvien` (`thanhvien_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_thanhvien`
--
ALTER TABLE `t_thanhvien`
  ADD CONSTRAINT `t_thanhvien_ibfk_1` FOREIGN KEY (`taikhoan_id`) REFERENCES `t_taikhoan` (`taikhoan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_trieuchung`
--
ALTER TABLE `t_trieuchung`
  ADD CONSTRAINT `t_trieuchung_ibfk_1` FOREIGN KEY (`trieuchung_id`) REFERENCES `t_trieuchung_benh` (`trieuchung_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
