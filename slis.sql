-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 03:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slis`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `studentid` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`studentid`, `username`, `password`, `email`) VALUES
(20231234, 'jane', 'faith', '1bucketoficecoffepleece@gmail.com'),
(2011222, 'lop', '123', '123qwe@gmail.com'),
(20152011, 'michael', '1234', '123qwe@gmail.com'),
(202312345, 'michael', '1234', 'pasilanmico@gmail.com'),
(1223, 'jane', 'FAYTE', '1bucketoficecoffepleece@gmail.com'),
(202312345, 'lloyd', '1234', 'lloydlfkabebe@adikbuang.com'),
(20192023, 'lloyd', '1002', 'lloydlfkabebe@adikbuang.com'),
(20230001, 'Symond', '1234', 'symond@autosleep'),
(123456, 'yuna', '12345', '1bucketoficecoffepleece@gmail.com'),
(12, 'arances', '1234', 'arances@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
