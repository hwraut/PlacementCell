-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2016 at 03:43 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clg_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `username` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin2015');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `uploader_id` varchar(111) NOT NULL,
  `branch_id` varchar(999) NOT NULL,
  `subject_id` varchar(999) NOT NULL,
  `semister` varchar(999) NOT NULL,
  `assignment_title` varchar(999) NOT NULL,
  `assignment` varchar(999) NOT NULL,
  `descrption` text NOT NULL,
  `tim` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`ID`, `uploader_id`, `branch_id`, `subject_id`, `semister`, `assignment_title`, `assignment`, `descrption`, `tim`) VALUES
(1, '', '3', '4', '3', 'facebook', '02192016150739-4862451980_82218fa22b_b.jpg', 'asdf', '2016-02-19 06:07:39'),
(2, '', '3', '4', '1', 'facebook', '03132016044404-06750739.pdf', 'zzz', '2016-03-12 19:44:04'),
(3, '', '3', '4', '3', 'facebook', '03132016052801-06750739 (1).pdf', 'test', '2016-03-12 20:28:01'),
(4, '3', '4', '1', 'facebook', 'ad', '03132016085016-', '3.2Graph Theory.pdf', '2016-03-12 23:50:16'),
(5, '13', '3', '4', '1', 'ad', '03132016085105-3.2Graph Theory.pdf', 'sdf', '2016-03-12 23:51:05'),
(6, '', '7', '2', '5', '1', '03152016102554-sdf', 'Amazing Konkan', '2016-03-15 02:25:54'),
(7, '', '2', '', '', '', '', '', '2016-03-15 02:39:35'),
(8, '', '2', '', '', '', '', '', '2016-03-15 02:39:47'),
(9, '7', '2', '', '', '', '', '', '2016-03-15 02:46:39'),
(10, '7', '2', '5', '1', 'sdf', '03152016104957-epropertyprojectdocumentation-120915063218-phpapp01.pdf', 'sdf', '2016-03-15 02:49:57'),
(11, '7', '2', '5', '1', 'facebook', '03152016111824-internetmarketingfullprojectreport-140119011815-phpapp01.pdf', 'sfd', '2016-03-15 03:18:24'),
(12, '7', '2', '5', '1', 'Amazing Konkan', '03152016124353-AcademicStuff-topics.pdf', 'khk', '2016-03-15 04:43:53'),
(13, '7', '2', '5', '1', 'Amazing Konkan', '03152016124407-AcademicStuff-topics.pdf', 'khk', '2016-03-15 04:44:07'),
(14, '7', '2', '5', '4', 'FSDP 3rd Assignment', '03152016153752-AcademicStuff-topics.pdf', 'Co,plete before 23 march', '2016-03-15 07:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `branchs` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`ID`, `branchs`) VALUES
(2, 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(999) NOT NULL,
  `l_name` varchar(999) NOT NULL,
  `emp_id` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  `contact` varchar(999) NOT NULL,
  `gender` varchar(999) NOT NULL,
  `dob` varchar(999) NOT NULL,
  `status` int(111) NOT NULL,
  `branch` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`ID`, `f_name`, `l_name`, `emp_id`, `password`, `contact`, `gender`, `dob`, `status`, `branch`) VALUES
(1, 'Kushal', 'Kushal', 'ku@g1mail.com', '6ec44a1207a3d9506418c034679087b6', '132', 'Male', '2016-02-24', 0, 'EXTC'),
(4, 'Kushal', 'Kushal', 'ku@g1mail.com', '6ec44a1207a3d9506418c034679087b6', '09890823422', 'Male', '2016-02-03', 0, 'CS'),
(5, 'Kushal', 'Kushal', 'ku@g1mail.com', '6ec44a1207a3d9506418c034679087b6', '09890823422', 'Male', '2016-02-08', 0, 'EXTC'),
(6, 'Kushal', 'kanse', 'q123123', '6ec44a1207a3d9506418c034679087b6', '9890546711', 'Male', '1987-12-31', 0, 'CS'),
(7, 'Kushal', 'Kushal', 'q123123', '6ec44a1207a3d9506418c034679087b6', '8237783265', 'Male', '2016-02-04', 1, 'CS'),
(8, 'Kushal', 'dhole', 'kushal', '6ec44a1207a3d9506418c034679087b6', '9890546711', 'Female', '2016-12-31', 0, 'Mechanical');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `title` varchar(999) NOT NULL,
  `notice` varchar(999) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`ID`, `title`, `notice`, `date`) VALUES
(2, 'March Project Dealine', 'Project Submission on March', '2016-03-12 20:09:48'),
(5, 'submission on march', 'complete project ASAP', '2016-03-15 07:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(999) NOT NULL,
  `first_name` varchar(999) NOT NULL,
  `middile_name` varchar(999) NOT NULL,
  `last_name` varchar(999) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(999) NOT NULL,
  `contact` varchar(999) NOT NULL,
  `year` varchar(999) NOT NULL,
  `branch` varchar(999) NOT NULL,
  `college` varchar(999) NOT NULL,
  `address` varchar(999) NOT NULL,
  `city` varchar(999) NOT NULL,
  `gender` varchar(999) NOT NULL,
  `dob` varchar(999) NOT NULL,
  `status` varchar(999) NOT NULL,
  `clg_status` varchar(111) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `stud_id`, `first_name`, `middile_name`, `last_name`, `email`, `password`, `contact`, `year`, `branch`, `college`, `address`, `city`, `gender`, `dob`, `status`, `clg_status`) VALUES
(14, '990587', 'snehal', 'bhalchandra', 'Kushal', 'ku@g1mail.com', 'kushal', '8237783265', '', '123', 'other', 'asd', 'Amravati', 'Male', '2016-02-02', '1', '0'),
(15, '502332', 'ram', 's', 'sharma', 'ram@gmail.com', 'ram123', '8237783265', '2', 'CS', 'PRMIT', 'Old Byepass dastur nagar Amravati', 'Amravati', 'Male', '2016-03-11', '1', '0'),
(16, '913764', 'snehal', 'p.', 'kanse', 'avi@g1mail.com', 'avanti', '8237783265', '1', '2', 'other', 'Old Byepass dastur nagar Amravati', 'Amravati', 'Female', '2016-03-18', '1', '0'),
(17, '745713', 'vaibhav', 'v.', 'Tayde', 'vaibhav@gmail.com', 'vaibhav', '8856945196', '4', '2', 'PRMIT', 'Rukmini Nagar near Suyog mangal Karyalay.', 'Amravati', 'Male', '2016-01-06', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `bran_id` varchar(999) NOT NULL,
  `subject` varchar(999) NOT NULL,
  `semister` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`ID`, `bran_id`, `subject`, `semister`) VALUES
(5, '2', 'FSDP', '2'),
(6, '2', 'FSDP', '5');
