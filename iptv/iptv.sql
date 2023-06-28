-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2023 at 01:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iptv`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE `credit_card` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `card_number` int(11) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credit_card`
--

INSERT INTO `credit_card` (`id`, `name`, `phone`, `card_number`, `expiry_date`, `cvv`, `type`) VALUES
(3, 'drfsgrgd', 345454, 34454, '2023-09-23', 222, 'basic'),
(4, 'sfjds', 45454, 545454, '2023-04-22', 343, 'basic'),
(5, 'Emily', 234597, 890, '2024-11-30', 300, 'basic'),
(7, 'Christopher ', 67890121, 123, '2023-07-15', 800, 'basic'),
(8, 'Olivia Anderson', 345645678, 456, '2025-02-28', 400, 'basic'),
(9, 'Daniel Martinez', 78789012, 789, '2024-09-22', 900, 'basic'),
(10, 'Sophia Thompson', 234569, 234, '2023-05-12', 600, 'basic'),
(11, 'James Garcia', 890823, 567, '2024-04-30', 1100, 'basic'),
(12, 'Ava Robinson', 56690, 890, '2025-10-31', 350, 'basic'),
(13, 'Benjamin Lewis', 9012334, 123, '2023-06-15', 950, 'basic'),
(14, 'Mia Hall', 34678, 456, '2024-03-28', 700, 'basic'),
(15, 'Alexander Lee', 789012, 789, '2025-12-22', 1200, 'basic'),
(16, 'Samantha Wright', 123456, 234, '2023-09-12', 400, 'basic'),
(17, 'William Young', 901, 567, '2024-08-30', 1000, 'basic'),
(18, 'Isabella Hernandez', 20123567, 890, '2025-01-31', 250, 'basic'),
(19, 'Joseph Hill', 9901234, 123, '2023-11-15', 800, 'basic'),
(20, 'Charlotte Moore', 345678, 456, '2024-07-28', 550, 'basic');

-- --------------------------------------------------------

--
-- Table structure for table `paypal`
--

CREATE TABLE `paypal` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paypal`
--

INSERT INTO `paypal` (`id`, `name`, `phone`, `email`, `password`, `type`) VALUES
(1, 'dfbgfb', 45454, 'dffdgf@g,mail.vom', 'dfgdf', 'basic'),
(2, 'dfbgfb', 45454, 'dffdgf@g,mail.vom', 'dfgdf', 'basic'),
(3, 'gdflgdgpot', 687388, 'ddscfier@g,mail.vom', 'Frandv56', 'basic'),
(4, 'regg', 89347, 'nonre@g,mail.vom', 'Morocco348934', 'basic'),
(7, 'dki', 3454, 'dfokin@rfeoki', 'fogihf', 'basic'),
(8, 'uiuhk', 888, 'hjbhjb@b', 'hjbjb', 'basic'),
(9, 'gfgf', 5656, '', '', 'basic'),
(10, 'gfgf', 5656, '', '', 'basic'),
(11, 'gfgf', 5656, 'ghghghgh@rtgkrtg.v', 'Younes2023', 'basic'),
(12, 'ghgh', 7, 'younesswinners2003@gmail.com', 'Younes2023', 'basic'),
(13, 'ghgh', 7, 'younesswinners2003@gmail.com', 'Younes2023', 'basic'),
(14, 'gfgh', 67, '', '', 'basic');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `phone`, `email`, `password`) VALUES
(15, 'Younesp', 'Alivgfbvgvg', 5656, 'younesswinners2003@gmail.com', 'Younes2023'),
(16, 'admin', 'admin', 4444, 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paypal`
--
ALTER TABLE `paypal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credit_card`
--
ALTER TABLE `credit_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `paypal`
--
ALTER TABLE `paypal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
