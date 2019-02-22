-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 06:51 PM
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
-- Table structure for table `ascore`
--

CREATE TABLE `ascore` (
  `sid` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `fid` int(11) DEFAULT NULL,
  `min` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ascore`
--

INSERT INTO `ascore` (`sid`, `pid`, `fid`, `min`) VALUES
(1, 1, 2, 72),
(2, 1, 3, 27);

-- --------------------------------------------------------

--
-- Table structure for table `awayplayer`
--

CREATE TABLE `awayplayer` (
  `name` text,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awayplayer`
--

INSERT INTO `awayplayer` (`name`, `pid`) VALUES
('Alves', 1),
('Roberto', 2);

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `first` text NOT NULL,
  `last` text NOT NULL,
  `special` text NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`first`, `last`, `special`, `cid`) VALUES
('Julian', 'Lopez', 'Goalkeeper', 1),
('Pablo', 'Esco', 'Defense', 2),
('Gerad', 'Griez', 'Midfield', 3),
('Henry', 'Piques', 'Forward', 4);

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

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `pid` int(11) NOT NULL,
  `pfirst` text NOT NULL,
  `plast` text NOT NULL,
  `pnation` text NOT NULL,
  `dob` date NOT NULL,
  `height` float(6,2) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `image` text NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`pid`, `pfirst`, `plast`, `pnation`, `dob`, `height`, `weight`, `image`, `cid`) VALUES
(1, 'Keylor', 'Navas', 'Costa Rica', '1986-12-15', 1.86, 80, 'squad/kelyor.jpg', 1),
(2, 'Fraisco', 'Casilla', 'Tarragona', '1986-10-02', 1.90, 86, 'squad/kiko.jpg', 1),
(3, 'Thibaut', 'Courtois', 'Belgium', '1992-05-11', 1.90, 96, 'squad/chelsea.jpg', 1),
(4, 'Luca', 'Fernandez', 'France', '1998-05-13', 1.83, 77, 'squad/luca.jpg', 1),
(5, 'Daniel', 'Carvajal', 'Spain', '1992-01-11', 1.73, 73, 'squad/carvahal.jpg', 2),
(6, 'Jesus', 'Vallenjo', 'Spain', '1997-01-05', 1.84, 79, 'squad/vallenjo.jpg', 2),
(7, 'Sergio', 'Ramos', 'Spain', '1986-03-30', 1.84, 82, 'squad/ramos.jpg', 2),
(8, 'Raphel', 'Varane', 'France', '1993-04-25', 1.91, 81, 'squad/varane.jpg', 2),
(9, 'Fernand', 'Lglesi', 'Spain', '1990-01-16', 1.81, 86, 'squad/nacho.jpg', 2),
(10, 'Marcelo', 'Silva', 'Brazil', '1986-05-12', 1.74, 80, 'squad/marcelo.jpg', 2),
(11, 'Alvaro', 'Odriola', 'Spain', '1995-12-14', 1.74, 66, 'squad/odrio.jpg', 2),
(12, 'Sergio', 'Rodrigez', 'Spain', '1996-12-16', 1.80, 67, 'squad/reg.jpg', 2),
(13, 'Tony', 'Kroos', 'Germany', '1990-01-04', 1.83, 76, 'squad/kroos.jpg', 3),
(14, 'Luca', 'Modric', 'Croatia', '1986-09-09', 1.82, 66, 'squad/modric.jpg', 3),
(15, 'Carlos', 'Casimiro', 'Brazil', '1992-02-23', 1.85, 84, 'squad/casemiro.jpg', 3),
(16, 'Federic', 'Dipeta', 'Uruguay', '1998-07-22', 1.81, 73, 'squad/valve.jpg', 3),
(17, 'Marcos', 'Llorente', 'Spain', '1995-01-30', 1.81, 73, 'squad/lloore.jpg', 3),
(18, 'Marco', 'Asensio', 'Spain', '1996-01-21', 1.81, 76, 'squad/asensio.jpg', 4),
(19, 'Isco', 'Alarcon', 'Spain', '1992-04-21', 1.76, 79, 'squad/isco.jpg', 4),
(20, 'Daniel', 'Ceballos', 'Spain', '1996-08-07', 1.79, 70, 'squad/ceballs.jpg', 3),
(21, 'Mariano', 'Mejia', 'Spain', '1993-08-01', 1.79, 76, 'squad/mariano.jpg', 4),
(22, 'Karim', 'Benzema', 'France', '1987-12-19', 1.86, 80, 'squad/benxema.jpg', 4),
(23, 'Gareth', 'Bale', 'Wales', '1989-07-16', 1.86, 81, 'squad/bale.jpg', 4),
(24, 'Lucas', 'Vazquez', 'Spain', '1991-07-01', 1.76, 70, 'squad/lucas.jpg', 4);

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
-- Indexes for table `awayplayer`
--
ALTER TABLE `awayplayer`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `fixture`
--
ALTER TABLE `fixture`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `rmscore`
--
ALTER TABLE `rmscore`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `fid` (`fid`),
  ADD KEY `pid` (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `coach` (`cid`);

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
