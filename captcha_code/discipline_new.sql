-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2018 at 11:09 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `outreachportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `discipline_new`
--

CREATE TABLE IF NOT EXISTS `discipline_new` (
  `sno` int(3) NOT NULL AUTO_INCREMENT,
  `discipline_value` varchar(100) NOT NULL,
  `discipline` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `discipline_new`
--

INSERT INTO `discipline_new` (`sno`, `discipline_value`, `discipline`) VALUES
(1, 'Aeronatuical_Engineering', 'Aeronatuical Engineering'),
(2, 'Aerospace_Engineering', 'Aerospace Engineering'),
(3, 'Agricultural_Engineering', 'Agricultural Engineering'),
(4, 'Architectural_Engineering', 'Architectural Engineering'),
(5, 'Automotive_Engineering', 'Automotive Engineering'),
(6, 'Bioinformatics', 'Bioinformatics'),
(7, 'Bioanalytics_Sciences', 'Bioanalytics Sciences'),
(8, 'Biomechanical_Engineering', 'Biomechanical Engineering '),
(9, 'Biomedical_Engineering', 'Biomedical Engineering'),
(10, 'Biotechnology', 'Biotechnology'),
(11, 'Botany', 'Botany'),
(12, 'Ceramics_Engineering', 'Ceramics Engineering'),
(13, 'Chemical_Engineering', 'Chemical Engineering'),
(14, 'Chemistry', 'Chemistry'),
(15, 'Civil_Engineering', 'Civil Engineering'),
(16, 'Computer_Engineering', 'Computer Engineering'),
(17, 'Electrical_Engineering', 'Electrical Engineering'),
(18, 'Electronics_and_Telecomunications_Engineering', 'Electronics and Telecomunications Engineering'),
(19, 'Electronics_Engineering', 'Electronics Engineering'),
(20, 'Environmental_Engineering', 'Environmental Engineering'),
(21, 'Geological_Engineering', 'Geological Engineering'),
(22, 'Geomatics_Engineering', 'Geomatics Engineering'),
(23, 'Industrial_Engineering', 'Industrial Engineering'),
(24, 'Information_Technology', 'Information Technology'),
(25, 'Life_Sciences', 'Life Sciences'),
(26, 'Manufacturing_Engineering', 'Manufacturing Engineering'),
(27, 'Marine_Engineering', 'Marine Engineering'),
(28, 'Materials_Science_Engineering', 'Materials Science Engineering'),
(29, 'Mathematics', 'Mathematics'),
(30, 'Mechanical_Engineering', 'Mechanical Engineering'),
(31, 'Mechatronics_Engineering', 'Mechatronics Engineering'),
(32, 'Medical_Sciences', 'Medical Sciences'),
(33, 'Metallurgical_Engineering', 'Metallurgical Engineering'),
(34, 'Microbiology', 'Microbiology'),
(35, 'Microelectronic_Engineering', 'Microelectronic Engineering'),
(36, 'Mining_Engineering', 'Mining Engineering'),
(37, 'Nanotechnology_Engineering', 'Nanotechnology Engineering'),
(38, 'Nuclear_Engineering', 'Nuclear Engineering'),
(39, 'Paper_Engineering', 'Paper Engineering'),
(40, 'Petroleum_Engineering ', 'Petroleum Engineering '),
(41, 'Pharmacy', 'Pharmacy'),
(42, 'Photonics_Engineering', 'Photonics Engineering'),
(43, 'Physics', 'Physics'),
(44, 'Power_Engineering', 'Power Engineering'),
(45, 'Print_Engineering', 'Print Engineering'),
(46, 'Robotics_Engineering', 'Robotics Engineering'),
(47, 'Statistics', 'Statistics'),
(48, 'Structural_Engineering', 'Structural Engineering'),
(49, 'Systems_Engineering', 'Systems Engineering'),
(50, 'Transport_Engineering', 'Transport Engineering'),
(51, 'Zoology', 'Zoology'),
(52, 'Zzothers', 'Others'),
(53, 'Nutraceuticals', 'Nutraceuticals'),
(54, 'Computer_Science', 'Computer Science (Non Engineering)'),
(55, 'Electronics_and_Communications', 'Electronics and Communications');
