-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 05:36 PM
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
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_doc`
--

CREATE TABLE `employee_doc` (
  `adhar_id` int(11) NOT NULL,
  `adharCard` varchar(50) NOT NULL,
  `adharCardfile` varchar(500) NOT NULL,
  `crtTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_doc`
--

INSERT INTO `employee_doc` (`adhar_id`, `adharCard`, `adharCardfile`, `crtTime`) VALUES
(1, '098765432112', 'image/gd1.jpg', '2023-01-28 21:47:15'),
(2, '3333333333333333333', 'image/system-architecture.jpg', '2023-01-28 21:51:57'),
(3, '345678945678', 'image/sem6.jpg', '2023-01-28 22:01:05'),
(4, '345678945678', 'image/sem6.jpg', '2023-01-28 22:02:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_doc`
--
ALTER TABLE `employee_doc`
  ADD PRIMARY KEY (`adhar_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_doc`
--
ALTER TABLE `employee_doc`
  MODIFY `adhar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
