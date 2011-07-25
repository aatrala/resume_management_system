-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2011 at 12:32 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resume_builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE IF NOT EXISTS `admin_register` (
  `ID` mediumint(9) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`ID`, `username`, `password`) VALUES
(2, 'jacob@yahoo.com', '736b19f69aaca691fecd8400294cc383'),
(1, 'dany@aonx.com', '4aba99f427fdf063b7073aea4afaf2d9');

-- --------------------------------------------------------

--
-- Table structure for table `consultants_register`
--

CREATE TABLE IF NOT EXISTS `consultants_register` (
  `ID` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `contact_person` char(30) DEFAULT NULL,
  `designation` char(30) DEFAULT NULL,
  `company_name` varchar(60) DEFAULT NULL,
  `company_address` varchar(60) DEFAULT NULL,
  `state` char(35) DEFAULT NULL,
  `pincode` int(15) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `consultants_register`
--

INSERT INTO `consultants_register` (`ID`, `username`, `password`, `contact_person`, `designation`, `company_name`, `company_address`, `state`, `pincode`, `phone_number`, `mobile_number`, `emailid`, `website`, `status`) VALUES
(1, 'sdf@sdf.com', 'pshz', 'dsf', 'sfas', 'sdfas', 'safasdfzxcdv dsfasd', 'andaman', 23423, '234234', ' 2342342', 'sdf@sdf.com', 'sdfasdf', 'InActive'),
(2, 'ragupathy@aonx.com', 'pshz', 'ragu21', 'rdeasd', 'broov', 'sadfasdf', 'andaman', 45234, '3452345', ' 2345234', 'ragupathy@aonx.com', 'http://broov.in', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `consultants_upload`
--

CREATE TABLE IF NOT EXISTS `consultants_upload` (
  `ID` mediumint(9) NOT NULL AUTO_INCREMENT,
  `jobseeker_name` char(50) DEFAULT NULL,
  `jobseeker_mailid` varchar(50) DEFAULT NULL,
  `sex` char(6) DEFAULT NULL,
  `jobseeker_mobileno` varchar(20) DEFAULT NULL,
  `location` char(25) DEFAULT NULL,
  `location_others` char(25) DEFAULT NULL,
  `technology` char(25) DEFAULT NULL,
  `experience_years` int(3) DEFAULT NULL,
  `experience_months` int(3) DEFAULT NULL,
  `keywords` varchar(50) DEFAULT NULL,
  `current_status` char(10) DEFAULT NULL,
  `accessmode` varchar(10) DEFAULT NULL,
  `Particulars` varchar(3000) DEFAULT NULL COMMENT 'to store the details of processing resumes',
  `file` varchar(70) DEFAULT NULL,
  `UploadedOn` date NOT NULL COMMENT 'to store when the resume is uploaded',
  `consultantusername` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `consultantusername` (`consultantusername`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `consultants_upload`
--

INSERT INTO `consultants_upload` (`ID`, `jobseeker_name`, `jobseeker_mailid`, `sex`, `jobseeker_mobileno`, `location`, `location_others`, `technology`, `experience_years`, `experience_months`, `keywords`, `current_status`, `accessmode`, `Particulars`, `file`, `UploadedOn`, `consultantusername`) VALUES
(3, 'ragu@rags', 'ragu@ragu.com', 'Male', '45625sdfgsdf', 'Noida', 'none', 'qrewtqrewt', 0, 0, 'sdfwq3r4e23', 'In Active', 'Private', '', '12_07_2011_14_08_54_Mohan.doc', '2011-03-13', 'ragupathy@aonx.com'),
(4, 'ragupathy', 'ragupathy@aonx.co', 'Male', '0-28934482390', 'Bangalore', 'none', 'sdfljk alsdkfjafads adsf', 0, 0, 'skdf ', 'Active', 'Private', '', '13_07_2011_06_24_55_NivithaSathyanarayanan.doc', '2011-07-13', 'ragupathy@aonx.com'),
(5, 'ragupathy', 'asdfka@asdf.com', 'Male', '07842389471', 'Ahmedabad', 'none', 'asdfklj,asdfasd', 1, 2, 'sdfk,.asdfkj', 'In Active', 'Protected', 'sadlfkjas dakdsf alsdfkj sdlfkj asdfkj', '13_07_2011_06_28_11_NivithaSathyanarayanan.doc', '2011-05-16', 'ragupathy@aonx.com'),
(6, 'ragupathy', 'asdkjhf@adsf.com', 'Male', '901273478', 'Ahmedabad', 'none', 'asdfkjh,asdfkjahs', 0, 0, 'sdlkfasd,asdfkjadh', 'Active', 'Private', '', '13_07_2011_06_42_55_Mohan.doc', '2011-07-13', 'ragupathy@aonx.com'),
(7, 'sdfgtesting', 'sdfgs@asdfas.com', 'Male', '213413', 'Coimbatore', 'none', 'sdfdasf', 4, 3, 'asdf', 'In Active', 'Private', 'adsf;lkadjsf kasdflkasdjfldkasfjdkasjf kasdjfkladjsf;lkjasdfkjaosdkjfldkasjfklajsdfklajsdflkjasf', '13_07_2011_07_20_08_Mohan.doc', '2011-07-05', 'ragupathy@aonx.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanyregistration`
--

CREATE TABLE IF NOT EXISTS `tblcompanyregistration` (
  `companyid` varchar(20) NOT NULL,
  `companyusername` varchar(30) DEFAULT NULL,
  `companypassword` varchar(100) DEFAULT NULL,
  `companyname` varchar(50) DEFAULT NULL,
  `companyaddress` varchar(200) DEFAULT NULL,
  `companyphonenumber` varchar(30) DEFAULT NULL,
  `companywebsite` varchar(30) DEFAULT NULL,
  `refferingconsultancy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`companyid`),
  UNIQUE KEY `companyusername` (`companyusername`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompanyregistration`
--

INSERT INTO `tblcompanyregistration` (`companyid`, `companyusername`, `companypassword`, `companyname`, `companyaddress`, `companyphonenumber`, `companywebsite`, `refferingconsultancy`) VALUES
('1', 'ragupathy@aonx.com', 'pshz', 'broov', 'this is the test', '23984273', 'http://asdf.com', 'ragupathy@aonx.com');
