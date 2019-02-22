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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `cid` (`cid`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
