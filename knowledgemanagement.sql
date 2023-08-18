-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 05:36 PM
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
-- Database: `knowledgemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Sl` int(4) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `fullname` varchar(191) NOT NULL,
  `Conf_Password` varchar(50) NOT NULL,
  `Phone_No` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Sl`, `username`, `password`, `fullname`, `Conf_Password`, `Phone_No`) VALUES
(1, 'amohanta.ttl', 'Abhi@tata123', 'Abhilash Mohanta', 'Abhi@tata123', '+919439320807');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `Slno.` int(255) NOT NULL,
  `DocumentName` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `UploadDate` date NOT NULL DEFAULT current_timestamp(),
  `File_Loc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`Slno.`, `DocumentName`, `Category`, `UserName`, `UploadDate`, `File_Loc`) VALUES
(7, 'AD ass 4.pdf', 'On Job Knowledge', 'Dipankar Ghosh', '2023-08-12', 'docs/AD ass 4.pdf'),
(8, 'AD ass 4.pdf', 'On Job Knowledge', 'Dipankar Ghosh', '2023-08-12', 'docs/AD ass 4.pdf'),
(9, 'CSW2_Ass1.pdf', 'Self Study', 'Dipankar Ghosh', '2023-08-12', 'docs/CSW2_Ass1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Sl` int(4) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `fullname` varchar(191) NOT NULL,
  `Conf_Password` varchar(50) NOT NULL,
  `Phone_No` varchar(50) NOT NULL,
  `EmailID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Sl`, `username`, `password`, `fullname`, `Conf_Password`, `Phone_No`, `EmailID`) VALUES
(1, 'amohanta.ttl', 'Abhi@tata123', 'Abhilash Mohanta', '', '', ''),
(2, 'harsh.iter', 'harsh@iter123', 'Harsh Narayan', '', '', ''),
(3, 'dg922297.ttl', 'Dg@tata123', 'Dipankar Ghosh', '', '', ''),
(4, 'prince07', 'prince0074', 'Prince Aryan', '', '', ''),
(7, 'dg922297', '123', 'Dipankar Ghosh', '123', '1234567', 'harshnarayan1307@gmail.com'),
(8, 'harsh.it', '0001', 'Harsh', '0001', '6616445646', 'harshnarayan1307@gmail.com'),
(9, 'behne.rg', '0002', 'Narayan', '0002', '3505156', 'harshnarayan1307@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD UNIQUE KEY `UNIQUEiNDEX1` (`Slno.`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `Slno.` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Sl` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
