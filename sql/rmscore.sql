-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 05:09 PM
-- Server version: 5.7.21-log
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `rmscore`
--

CREATE TABLE `rmscore` (
  `sid` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `fid` int(11) DEFAULT NULL,
  `min` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rmscore`
--

INSERT INTO `rmscore` (`sid`, `pid`, `fid`, `min`) VALUES
(1, 23, 1, 20),
(2, 21, 1, 30),
(3, 19, 1, 75),
(4, 15, 2, 24),
(5, 20, 2, 41),
(6, 19, 2, 45),
(7, 19, 3, 45),
(8, 5, 4, 80),
(9, 12, 4, 85);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rmscore`
--
ALTER TABLE `rmscore`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `fid` (`fid`),
  ADD KEY `pid` (`pid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rmscore`
--
ALTER TABLE `rmscore`
  ADD CONSTRAINT `rmscore_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `fixture` (`fid`),
  ADD CONSTRAINT `rmscore_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `player` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
