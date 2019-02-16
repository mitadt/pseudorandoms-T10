-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2019 at 09:57 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maatru`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `hid` int(11) NOT NULL,
  `doctid` int(11) NOT NULL,
  `doctname` varchar(30) NOT NULL,
  `doctemail` varchar(30) NOT NULL,
  `doctcont` int(11) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`hid`, `doctid`, `doctname`, `doctemail`, `doctcont`, `pass`) VALUES
(100, 11, 'ABC', 'abc@abc.com', 111111, 'abc'),
(101, 12, 'DEF', 'def@def.com', 222222, 'def'),
(102, 13, 'GHI', 'ghi@ghi.com', 44444, 'ghi');

-- --------------------------------------------------------

--
-- Table structure for table `doctordetails`
--

CREATE TABLE `doctordetails` (
  `hid` int(10) NOT NULL,
  `doctid` int(11) NOT NULL,
  `doctname` varchar(30) NOT NULL,
  `doctemail` varchar(30) NOT NULL,
  `doctcont` int(11) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctordetails`
--

INSERT INTO `doctordetails` (`hid`, `doctid`, `doctname`, `doctemail`, `doctcont`, `pass`) VALUES
(1, 1, 'ABC', 'abc@abc.com', 111111, 'abc'),
(2, 2, 'PQR', 'pqr@pqr.com', 222222, 'pqr'),
(3, 3, 'STU', 'stu@stu.com', 44444, 'stu'),
(4, 4, '', '', 0, ''),
(5, 5, 'ABC', 'abc@gmail.com', 55555555, 'ABC'),
(6, 6, 'ABC', 'abc@abc.com', 111111, 'abc'),
(7, 7, 'qwe', 'qwe@qwe.com', 77777, 'qwe'),
(0, 8, 'qwe', 'qwe@qwe.com', 77777, 'QWE');

-- --------------------------------------------------------

--
-- Table structure for table `doctorr`
--

CREATE TABLE `doctorr` (
  `hid` int(15) NOT NULL,
  `doctname` varchar(20) NOT NULL,
  `doctemail` varchar(25) NOT NULL,
  `doctcont` varchar(15) NOT NULL,
  `password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorr`
--

INSERT INTO `doctorr` (`hid`, `doctname`, `doctemail`, `doctcont`, `password`) VALUES
(1, 'abc', 'abc@gmail.com', '12444', 12222),
(2, 'setg', 'vaidehu2@gmail.com', '456789', 567890),
(3, 'STU', 'stu@stu.com', '55555555', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pocc` varchar(30) NOT NULL,
  `padd` varchar(30) NOT NULL,
  `pcont` int(30) NOT NULL,
  `ppass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pname`, `pocc`, `padd`, `pcont`, `ppass`) VALUES
(1, 'ABC', 'Farming', '102, Gokul Dham', 5555, '');

-- --------------------------------------------------------

--
-- Table structure for table `patientl`
--

CREATE TABLE `patientl` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `ppass` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientl`
--

INSERT INTO `patientl` (`pid`, `pname`, `ppass`) VALUES
(1, 'abc', 123),
(2, 'pqrpqr', 456);

-- --------------------------------------------------------

--
-- Table structure for table `patientr`
--

CREATE TABLE `patientr` (
  `pid` int(100) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `pocc` varchar(25) NOT NULL,
  `padd` varchar(60) NOT NULL,
  `pcont` int(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patientrr`
--

CREATE TABLE `patientrr` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pocc` varchar(50) NOT NULL,
  `padd` varchar(50) NOT NULL,
  `pcont` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plogin`
--

CREATE TABLE `plogin` (
  `pid` int(11) NOT NULL,
  `patentid` varchar(30) NOT NULL,
  `ppass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `update`
--

CREATE TABLE `update` (
  `pid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pocc` varchar(30) NOT NULL,
  `padd` varchar(30) NOT NULL,
  `pcont` int(10) NOT NULL,
  `phistory` varchar(1000) NOT NULL,
  `pmed` varchar(1000) NOT NULL,
  `preports` varchar(100) NOT NULL,
  `pcomments` varchar(100) NOT NULL,
  `ppres` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update`
--

INSERT INTO `update` (`pid`, `pname`, `pocc`, `padd`, `pcont`, `phistory`, `pmed`, `preports`, `pcomments`, `ppres`) VALUES
(1, 'ABC', 'Farming', '102, Gokul dham', 5555, 'Anxiety problems, deals with depression. Anti-deppresants given of power 20', 'Anti-deppresants, pain medication', 'Sonography ', 'NIL', 'Anti-deppresants should be discontinued and pain medication to be given for extreme conditions\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `updation`
--

CREATE TABLE `updation` (
  `pid` int(11) NOT NULL,
  `pname` varchar(25) NOT NULL,
  `pocc` varchar(25) NOT NULL,
  `padd` varchar(22) NOT NULL,
  `pcont` int(30) NOT NULL,
  `phistory` varchar(30) NOT NULL,
  `pmed` varchar(1000) NOT NULL,
  `preports` varchar(100) NOT NULL,
  `pcomments` varchar(100) NOT NULL,
  `ppres` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updation`
--

INSERT INTO `updation` (`pid`, `pname`, `pocc`, `padd`, `pcont`, `phistory`, `pmed`, `preports`, `pcomments`, `ppres`) VALUES
(1, 'ABC', 'Farming', 'GIRI', 999999, 'A case of anxiety attack. Was ', 'pain medications given for extreme unmanageable pain.', 'Sonography after every 3 weeks.', 'NIL', 'Pain medications of a low power');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctid`);

--
-- Indexes for table `doctordetails`
--
ALTER TABLE `doctordetails`
  ADD PRIMARY KEY (`doctid`);

--
-- Indexes for table `doctorr`
--
ALTER TABLE `doctorr`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `patientl`
--
ALTER TABLE `patientl`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `patientr`
--
ALTER TABLE `patientr`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `patientrr`
--
ALTER TABLE `patientrr`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `plogin`
--
ALTER TABLE `plogin`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `update`
--
ALTER TABLE `update`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `updation`
--
ALTER TABLE `updation`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctordetails`
--
ALTER TABLE `doctordetails`
  MODIFY `doctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctorr`
--
ALTER TABLE `doctorr`
  MODIFY `hid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patientl`
--
ALTER TABLE `patientl`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patientr`
--
ALTER TABLE `patientr`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patientrr`
--
ALTER TABLE `patientrr`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plogin`
--
ALTER TABLE `plogin`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `update`
--
ALTER TABLE `update`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `updation`
--
ALTER TABLE `updation`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
