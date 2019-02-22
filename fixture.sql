-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 05:08 PM
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
-- Table structure for table `fixture`
--

CREATE TABLE `fixture` (
  `fid` int(11) NOT NULL,
  `home` text NOT NULL,
  `away` text NOT NULL,
  `homei` text NOT NULL,
  `awayi` text NOT NULL,
  `date` date NOT NULL,
  `homes` int(11) NOT NULL,
  `aways` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fixture`
--

INSERT INTO `fixture` (`fid`, `home`, `away`, `homei`, `awayi`, `date`, `homes`, `aways`) VALUES
(1, 'Real Madrid', 'Barcelona', 'squad/rm.png', 'squad/barca.png', '2018-09-02', 3, 0),
(2, 'Valencia CF', 'Real Madrid', 'squad/vallencia.png', 'squad/rm.png', '2018-09-10', 1, 3),
(3, 'Real Madrid', 'Levante', 'squad/rn.png', 'squad/levante.png', '2018-09-13', 1, 1),
(4, 'Celta Vigo', 'Real Madrid', 'squad/celta.png', 'squad/rm.png', '2018-09-15', 0, 2),
(5, 'Real Madrid', 'Real Vallodiod', 'squad/rn.png', 'squad/valla.png', '2018-09-30', 0, 0),
(6, 'Barcelona', 'Real Madrid', 'squad/barca.png', 'squad/rm.png', '2018-10-10', 0, 0),
(7, 'Levante', 'Real Madrid', 'squad/levante.png', 'squad/rn.png', '2018-10-13', 0, 0),
(8, 'Real Madrid', 'Celta Vigo', 'squad/rn.png', 'squad/celta.png', '2018-10-15', 0, 0),
(9, 'Real Madrid', 'Valencia CF', 'squad/rn.png', 'squad/vallencia.png', '2018-10-20', 0, 0),
(10, 'Real Vallodiod', 'Real Madrid', 'squad/valla.png', 'squad/rn.png', '2018-10-30', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fixture`
--
ALTER TABLE `fixture`
  ADD PRIMARY KEY (`fid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
