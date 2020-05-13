-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 04:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `clint`
--

CREATE TABLE `clint` (
  `username` varchar(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clint`
--

INSERT INTO `clint` (`username`, `fname`, `lname`, `pass`, `mail`, `phone`) VALUES
('aaaaa', 'aas', 'asa', 'baa7a52965b99778f38ef37f235e9053', 'dcv@1', 910082),
('aan', 'ant', 'Naik', '5d41402abc4b2a76b9719d911017c592', 'aan@123', 87),
('amo', 'amey', 'naik', '5d41402abc4b2a76b9719d911017c592', 'a@bcd', 991234),
('anand', 'anand', 'nk', '5d41402abc4b2a76b9719d911017c592', 'and@123', 90898),
('dr100', 'dhan', 'rane', '5d41402abc4b2a76b9719d911017c592', 'dr100@abc', 9511),
('prat', 'prat', 'naik', '5d41402abc4b2a76b9719d911017c592', 'ah@123', 1222),
('rudnak', 'rud', 'nak', '5d41402abc4b2a76b9719d911017c592', 'ahu@123', 198),
('sho', 'shubham', 'naik', '5d41402abc4b2a76b9719d911017c592', 'sho@123', 9923);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `username` varchar(30) NOT NULL,
  `ser` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`username`, `ser`) VALUES
('anand', '3D Printing'),
('anand', 'CAM/CAD'),
('rudnak', 'Consultancy'),
('prat', 'Automonous Robots'),
('aan', '3D Printing'),
('sho', 'CAM/CAD'),
('sho', 'CAM/CAD'),
('sho', '3D Printing'),
('dr100', '3D Printing'),
('prat', 'CAM/CAD'),
('amo', '3D Printing'),
('sho', 'Automonous Robots'),
('sho', 'CAM/CAD'),
('sho', 'CAM/CAD'),
('sho', 'CAM/CAD'),
('amo', 'CAM/CAD'),
('sho', '3D Printing'),
('sho', 'CAM/CAD'),
('amo', 'Consultancy'),
('anand', '3D Printing'),
('aaaaa', '3D Printing'),
('sho', '3D Printing'),
('sho', 'CAM/CAD'),
('sho', 'CAM/CAD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clint`
--
ALTER TABLE `clint`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`username`) REFERENCES `clint` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
