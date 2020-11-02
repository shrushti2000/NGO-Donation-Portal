-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 05, 2020 at 09:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `Name` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`Name`, `Password`) VALUES
('admin', 'admin2020');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `Name` text NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` text NOT NULL,
  `Address` text NOT NULL,
  `Goods` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`Name`, `Phone`, `Email`, `Address`, `Goods`) VALUES
('Wakde', 829159839, 'shivaniwakde1211@gmail.com', 'B-504,Chinmay Gaurang', 'medicines'),
('Gauri Wakde', 829159839, 'shivaniwakde1211@gmail.com', 'Panvel', 'mobile'),
('Shivani', 829159839, 'shivaniwakde1211@gmail.com', 'Panvel', 'Books');

-- --------------------------------------------------------

--
-- Table structure for table `ngologin`
--

CREATE TABLE `ngologin` (
  `Name` text NOT NULL,
  `ReceiveGoods` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngologin`
--

INSERT INTO `ngologin` (`Name`, `ReceiveGoods`, `Password`) VALUES
('uday', 'books', 'Uday@1211'),
('gauri', 'mobile', 'Gauri@1211'),
('shivanii', 'Books', 'Shivani@1211');

-- --------------------------------------------------------

--
-- Table structure for table `ngosignin`
--

CREATE TABLE `ngosignin` (
  `NGOName` text NOT NULL,
  `Contact` int(10) NOT NULL,
  `Email` text NOT NULL,
  `Location` text NOT NULL,
  `Password` text NOT NULL,
  `ConfirmPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngosignin`
--

INSERT INTO `ngosignin` (`NGOName`, `Contact`, `Email`, `Location`, `Password`, `ConfirmPassword`) VALUES
('uday', 1234567899, 'uday@gmail.com', 'london', 'Uday@1211', 'Uday@1211'),
('gauri', 1234567899, 'gauri@gmail.com', 'panvel', 'Gauri@1211', 'Gauri@1211'),
('shivanii', 1234567899, 'shivaniwakde1211@gmail.com', 'panvel', 'Shivani@1211', 'Shivani@1211');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
