-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 05:01 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puppies`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `ID` int(11) NOT NULL,
  `PuppyName` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `BreedID` int(11) DEFAULT NULL,
  `Description` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Picture` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`ID`, `PuppyName`, `BreedID`, `Description`, `Price`, `Picture`) VALUES
(1, 'Johnny', 4, 'Good for a farm', '100.00', 'Johnny.jpg'),
(2, 'Bully', 3, 'A figther, excellent watchdog', '599.00', 'Bully.jpg'),
(3, 'Bo-Bo', 2, 'Suit sweet old lady', '150.00', 'Bo-Bo.jpg'),
(4, 'Albert', 6, 'Family Dog', '20.00', 'Albert.jpg'),
(5, 'Fritz', 1, 'Watchdog', '129.00', 'Fritz.jpg'),
(6, 'Sam', 6, 'Cuddly', '10.00', 'Sam.jpg'),
(7, 'Teddy', 8, 'Spoiled', '150.00', 'Teddy.jpg'),
(8, 'Bandit', 9, 'Rat Dog', '99.00', 'Bandit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `breeds`
--

CREATE TABLE `breeds` (
  `Breed` int(11) NOT NULL,
  `BreedName` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Temperament` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `breeds`
--

INSERT INTO `breeds` (`Breed`, `BreedName`, `Temperament`) VALUES
(1, 'Doberman', 'Aggressive'),
(2, 'Poodle', 'Nervous'),
(3, 'Pitt Bull', 'Nasty'),
(4, 'Cattle Dog', 'Friendly'),
(5, 'Alsatian', 'Faithful'),
(6, 'Beagle', 'Smooches'),
(7, 'Schnauzer', 'Fluffy'),
(8, 'Jack Russell', 'Psychopathic'),
(9, 'Rat Terrier', 'Less aggressive than Jack Russell');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Breed` (`BreedID`);

--
-- Indexes for table `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`Breed`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `breeds`
--
ALTER TABLE `breeds`
  MODIFY `Breed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`BreedID`) REFERENCES `breeds` (`Breed`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
