-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 02:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `canhave`
--

CREATE TABLE `canhave` (
  `PID` int(4) DEFAULT NULL,
  `CNO` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `canhave`
--

INSERT INTO `canhave` (`PID`, `CNO`) VALUES
(2, 2),
(2, 3),
(3, 5),
(3, 4),
(4, 2),
(4, 3),
(5, 2),
(5, 1),
(5, 5),
(5, 4),
(1, 1),
(1, 3),
(1, 5),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `CNO` int(8) NOT NULL,
  `CNAME` varchar(40) NOT NULL,
  `CEMAIL` varchar(40) DEFAULT NULL,
  `CADDRESS` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`CNO`, `CNAME`, `CEMAIL`, `CADDRESS`) VALUES
(1, 'CISCO', 'cisco@gmail.com', '252 b area banglore'),
(2, 'AMAZON', 'amazon@gmail.com', '341 g markus road banglore'),
(3, 'MICROSOFT', 'microsoft@gmail.com', 'vasant vihaar cybercity 41f new delhi'),
(4, 'WIPRO', 'wipro@gmail.com', 'vijay nagar 452 cyber city'),
(5, 'INFOSYS', 'infosys@gmail.com', 'peenya industrial area 254 ');

-- --------------------------------------------------------

--
-- Table structure for table `hires`
--

CREATE TABLE `hires` (
  `HID` int(8) DEFAULT NULL,
  `REGNO` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `HID` int(8) NOT NULL,
  `HNAME` varchar(40) NOT NULL,
  `DEPT` varchar(40) NOT NULL,
  `HEMAIL` varchar(40) DEFAULT NULL,
  `CNO` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`HID`, `HNAME`, `DEPT`, `HEMAIL`, `CNO`) VALUES
(1, 'MANOJ KUMAR', 'COMPUTER SCIENCE', 'manoj@gmail.com', 2),
(2, 'Arun', 'INFORMATION TECHNOLOGY', 'arun@gmail.com', 3),
(3, 'rajat', 'INFORMATION TECHNOLOGY', 'rajat@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PID` int(4) NOT NULL,
  `PNAME` varchar(60) NOT NULL,
  `SEATS` int(4) NOT NULL,
  `AVGPAY` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PID`, `PNAME`, `SEATS`, `AVGPAY`) VALUES
(1, 'SYSTEM ENGG', 30, 500000),
(2, 'WEB DEVELOPER', 30, 55000),
(3, 'DATA ANALYST', 45, 60000),
(4, 'ANDROID DEV', 67, 400000),
(5, 'SOFTWARE DEV', 30, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `REGNO` varchar(40) NOT NULL,
  `SEMAIL` varchar(40) DEFAULT NULL,
  `SNAME` varchar(40) NOT NULL,
  `BRANCH` varchar(40) NOT NULL,
  `PHONE` varchar(40) NOT NULL,
  `SCGPA` float(3,2) NOT NULL,
  `UID` int(4) DEFAULT NULL,
  `PID` int(4) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`REGNO`, `SEMAIL`, `SNAME`, `BRANCH`, `PHONE`, `SCGPA`, `UID`, `PID`, `fname`) VALUES
('18BIT0023', 'aman@gmail.com', 'AMAN', 'INFORMATION TECHNOLOGY', '9898394829', 8.80, 1, 5, 'aman_resume.docx'),
('18BIT0054', 'anshuman@gmail.com', 'ANSHUMAN', 'INFORMATION TECHNOLOGY', '989889854', 9.20, 1, 5, 'anshuman_resume.docx'),
('18BIT0063', 'raghav@gmail.com', 'RAGHAV', 'INFORMATION TECHNOLOGY', '989889854', 9.70, 1, 1, 'raghav_resume.docx'),
('18BIT0068', 'raj@gmail.com', 'RAJ', 'INFORMATION TECHNOLOGY', '9893424452', 9.30, 1, 1, 'raj_resume.docx'),
('18BIT0121', 'raman@gmail.com', 'RAMAN', 'INFORMATION TECHNOLOGY', '705215725', 8.90, 1, 5, 'raman_resume.docx');

-- --------------------------------------------------------

--
-- Table structure for table `univ`
--

CREATE TABLE `univ` (
  `UID` int(4) NOT NULL,
  `UNAME` varchar(40) NOT NULL,
  `UADDRESS` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `univ`
--

INSERT INTO `univ` (`UID`, `UNAME`, `UADDRESS`) VALUES
(1, 'VIT VELLORE', 'VELLORE,KATPADI'),
(2, 'VIT CHENNAI', 'CHENNAI,TAMIL NADU'),
(3, 'VIT BHOPAL', 'Bhopal Indore Highway');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canhave`
--
ALTER TABLE `canhave`
  ADD KEY `CANHAVE` (`CNO`),
  ADD KEY `canhave_pid` (`PID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CNO`);

--
-- Indexes for table `hires`
--
ALTER TABLE `hires`
  ADD KEY `HIRES` (`HID`),
  ADD KEY `hires_regno` (`REGNO`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`HID`),
  ADD KEY `HR` (`CNO`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`REGNO`),
  ADD KEY `STUDENT` (`PID`),
  ADD KEY `student_uid` (`UID`);

--
-- Indexes for table `univ`
--
ALTER TABLE `univ`
  ADD PRIMARY KEY (`UID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `canhave`
--
ALTER TABLE `canhave`
  ADD CONSTRAINT `CANHAVE` FOREIGN KEY (`CNO`) REFERENCES `company` (`CNO`),
  ADD CONSTRAINT `canhave_pid` FOREIGN KEY (`PID`) REFERENCES `post` (`PID`);

--
-- Constraints for table `hires`
--
ALTER TABLE `hires`
  ADD CONSTRAINT `HIRES` FOREIGN KEY (`HID`) REFERENCES `hr` (`HID`),
  ADD CONSTRAINT `hires_regno` FOREIGN KEY (`REGNO`) REFERENCES `student` (`REGNO`);

--
-- Constraints for table `hr`
--
ALTER TABLE `hr`
  ADD CONSTRAINT `HR` FOREIGN KEY (`CNO`) REFERENCES `company` (`CNO`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `STUDENT` FOREIGN KEY (`PID`) REFERENCES `post` (`PID`),
  ADD CONSTRAINT `student_uid` FOREIGN KEY (`UID`) REFERENCES `univ` (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
