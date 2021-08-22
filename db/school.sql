-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2020 at 07:34 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_comp`
--

CREATE TABLE IF NOT EXISTS `add_comp` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `cdate` varchar(100) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `rno` int(20) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `std` varchar(20) NOT NULL,
  `divsn` varchar(20) NOT NULL,
  `cont` varchar(20) NOT NULL,
  `cdescr` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `add_comp`
--

INSERT INTO `add_comp` (`ID`, `cdate`, `tname`, `rno`, `sname`, `std`, `divsn`, `cont`, `cdescr`) VALUES
(1, '2020-02-15', 'sidd', 101, 'sidd', '6 std', 'B', '9988776655', 'Not Attend Lecture '),
(2, '2020-02-18', 'sid', 102, 'sid', '5 std', 'A', '2342342342342', 'bad student');

-- --------------------------------------------------------

--
-- Table structure for table `add_event`
--

CREATE TABLE IF NOT EXISTS `add_event` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `edate` varchar(100) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `edesc` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `add_event`
--

INSERT INTO `add_event` (`ID`, `edate`, `ename`, `edesc`) VALUES
(1, '2020-02-15', 'Sandop', 'event for all MMS II and BCA III students');

-- --------------------------------------------------------

--
-- Table structure for table `add_marks`
--

CREATE TABLE IF NOT EXISTS `add_marks` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `mdate` varchar(100) NOT NULL,
  `testtype` varchar(30) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `rno` int(30) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `subname` varchar(100) NOT NULL,
  `marks` int(100) NOT NULL,
  `totmark` int(12) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `add_marks`
--

INSERT INTO `add_marks` (`ID`, `mdate`, `testtype`, `tname`, `rno`, `sname`, `subname`, `marks`, `totmark`) VALUES
(3, '2020-02-15', 'Mid Term', 'sid', 102, 'sidd', 'Hindi', 56, 100),
(4, '2020-02-15', 'Mid Term', 'sid', 102, 'sidd', 'Marathi', 65, 100),
(5, '2020-02-15', 'Mid Term', 'sid', 102, 'sid', 'English', 66, 100),
(6, '2020-02-18', 'Unit I', 'sid', 102, 'sid', 'Geography', 88, 100);

-- --------------------------------------------------------

--
-- Table structure for table `add_student`
--

CREATE TABLE IF NOT EXISTS `add_student` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `rno` int(12) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `cont` varchar(100) NOT NULL,
  `std` varchar(100) NOT NULL,
  `div` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `add_student`
--

INSERT INTO `add_student` (`ID`, `rno`, `sname`, `addr`, `city`, `cont`, `std`, `div`, `uname`, `pass`) VALUES
(2, 101, 'sid', 'deopur', 'dhule', '9923094136', '6 std', 'B', 'sid@gmail.com', 'sid@123'),
(3, 102, 'sap', 'deo', 'dhu', '123456789', '5 std', 'A', 'sap@gmail.com', '123'),
(4, 103, 'sid', 'deopur', 'dhule', '9887665544', '5 std', 'A', 'admin@gmailcom', '123'),
(5, 103, 'sid', 'deopur', 'dhule', '9887665544', '5 std', 'A', 'admin@gmailcom', '123'),
(6, 103, 'sid', 'deopur', 'dhule', '9887665544', '5 std', 'A', 'admin@gmailcom', '123'),
(7, 103, 'sid', 'deopur', 'dhule', '9887665544', '5 std', 'A', 'admin@gmailcom', '123'),
(8, 103, 'sid', 'deopur', 'dhule', '9887665544', '5 std', 'A', 'admin@gmailcom', '123'),
(9, 103, 'sid', 'deopur', 'dhule', '9887665544', '5 std', 'A', 'admin@gmailcom', '123'),
(10, 103, 'sid', 'deopur', 'dhule', '9887665544', '5 std', 'A', 'admin@gmailcom', '123'),
(11, 104, 'sid', 'deopur', 'dhule', '9226926292', '5 std', 'A', 'admin@gmailcom', '123'),
(12, 104, 'sid', 'deopur', 'dhule', '9226926292', '5 std', 'A', 'admin@gmailcom', '123'),
(13, 105, 'shahid', 'deopur', 'dhule', '9226926292', '5 std', 'A', 'shahid@gmail.com', 'shahid@123');

-- --------------------------------------------------------

--
-- Table structure for table `add_subject`
--

CREATE TABLE IF NOT EXISTS `add_subject` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `subname` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `add_subject`
--

INSERT INTO `add_subject` (`ID`, `subname`) VALUES
(2, 'Marathi'),
(3, 'Hindi'),
(4, 'English'),
(5, 'Science'),
(6, 'Mathematics'),
(7, 'Geography'),
(8, 'History'),
(9, 'Economics');

-- --------------------------------------------------------

--
-- Table structure for table `add_teacher`
--

CREATE TABLE IF NOT EXISTS `add_teacher` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(100) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `cont` varchar(100) NOT NULL,
  `quali` varchar(100) NOT NULL,
  `spec` varchar(100) NOT NULL,
  `subname` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `add_teacher`
--

INSERT INTO `add_teacher` (`ID`, `tname`, `addr`, `city`, `cont`, `quali`, `spec`, `subname`) VALUES
(3, 'sid', 'deopur', 'dhule', '9988776655', 'MCM', 'Programming', 'Hindi');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `adate` varchar(100) NOT NULL,
  `mnth` varchar(100) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `rno` int(12) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `nofp` int(12) NOT NULL,
  `nofa` int(12) NOT NULL,
  `holi` int(12) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ID`, `adate`, `mnth`, `tname`, `rno`, `sname`, `nofp`, `nofa`, `holi`) VALUES
(8, '', '', 'sid', 102, 'sidd', 0, 0, 0),
(9, '2020-02-17', 'Mar', 'sid', 101, 'sid', 24, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL DEFAULT 'NONE',
  `email` varchar(50) NOT NULL DEFAULT 'None',
  `password` varchar(100) NOT NULL,
  `utype` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `user_name`, `email`, `password`, `utype`) VALUES
(10, 'Admin', 'admin@gmail.com', '123', 'admin'),
(13, 'sid', 'teacher@gmail.com', '123', 'Teacher');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
