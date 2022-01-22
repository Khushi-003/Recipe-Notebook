-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 06:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `id` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `under` varchar(50) NOT NULL,
  `time taken` int(10) NOT NULL,
  `ingredients` text NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`id`, `title`, `under`, `time taken`, `ingredients`, `file`) VALUES
(2, 'eggplant', 'Main', 15, '1. eggplant\r\n2. masala', 'uploads/25102021232914.png'),
(3, 'orange juice', 'Drink', 8, '1. orange\r\n2. juicer', 'uploads/26102021080203.png'),
(4, 'milk', 'Drink', 18, 'milk', 'uploads/22012022172937.png'),
(5, 'chocolate', 'Starter', 19, 'cocoa beans\r\nmilk\r\ncocopowder', 'uploads/22012022194204.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `saved`
--
ALTER TABLE `saved`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
