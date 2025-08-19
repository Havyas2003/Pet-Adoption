-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 29, 2024 at 07:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hpusers`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoptionform`
--

CREATE TABLE `adoptionform` (
  `formID` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `animalName` varchar(100) NOT NULL,
  `formStatus` varchar(100) NOT NULL,
  `animalID` int(10) NOT NULL,
  `userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `adoptionform`
--

INSERT INTO `adoptionform` (`formID`, `username`, `animalName`, `formStatus`, `animalID`, `userID`) VALUES
(2, 'test', 'Harvey', 'Accepted', 4, 2),
(3, 'test', 'Fluffy', 'Pending', 6, 2),
(4, 'test', 'Onion', 'Accepted', 10, 2),
(5, 'test', 'Food Tart', 'Rejected', 12, 2);
-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `animalName` varchar(100) NOT NULL,
  `animalType` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(100) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `vaccinated` varchar(10) NOT NULL,
  `dewormed` varchar(10) NOT NULL,
  `neutered` varchar(10) NOT NULL,
  `animalCondition` varchar(100) NOT NULL,
  `imgType` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id`, `animalName`, `animalType`, `gender`, `age`, `colour`, `vaccinated`, `dewormed`, `neutered`, `animalCondition`, `imgType`) VALUES
(5, 'Skittles', 'Dog', 'Male', '1 Year Old', 'Brown and White', 'Yes', 'Yes', 'No', 'Asthma', 'jpg'),
(6, 'Fluffy', 'Dog', 'Female', '10 Months Old', 'White', 'Yes', 'Yes', 'Yes', 'Healthy', 'jpg'),
(9, 'Bonito', 'Dog', 'Female', '19', 'Brown', 'Yes', 'Yes', 'Yes', 'Healthy', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(9, 'cheese', 'cheese@gmail.com', 'user', 'fea0f1f6fede90bd0a925b4194deac11'),
(12, 'chicken', 'chicken@gmail.com', 'user', '742929dcb631403d7c1c1efad2ca2700'),
(14, 'Steven', 'Steven@handsome.com', 'user', '202cb962ac59075b964b07152d234b70'),
(15, 'Help', 'help@gmail.com', 'admin', 'b37bf08f6406331250efc380acf3996d'),
(16, 'testing', 'test@gmail.com', 'user', '098f6bcd4621d373cade4e832627b4f6'),
(18, 'potato', 'a@gmail.com', 'user', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoptionform`
--
ALTER TABLE `adoptionform`
  ADD PRIMARY KEY (`formID`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);
--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoptionform`
--
ALTER TABLE `adoptionform`
  MODIFY `formID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;


--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
