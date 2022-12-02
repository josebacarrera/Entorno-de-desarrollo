-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2022 at 07:45 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expense`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `creationDate`) VALUES
(2, 'Electronics', '2022-06-30 16:51:56'),
(4, 'Grocery', '2022-06-30 18:54:06'),
(5, 'Medical', '2022-06-30 18:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `itemCategory` varchar(200) DEFAULT NULL,
  `itemName` varchar(200) DEFAULT NULL,
  `itemCost` varchar(200) DEFAULT NULL,
  `expenseDate` date DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `userId`, `itemCategory`, `itemName`, `itemCost`, `expenseDate`, `creationDate`) VALUES
(12, 1, 'grocary', 'jtr', '5675', '2022-07-01', '2022-06-30 19:32:01'),
(13, 1, 'medical', 'rbhffhdf', '457', '2022-07-01', '2022-06-30 19:32:12'),
(15, 1, 'grocary', 'dfgvx', '444', '2022-07-02', '2022-06-30 19:40:57'),
(16, 1, 'medical', 'hfghfg', '346', '2022-07-03', '2022-06-30 19:41:05'),
(19, 4, 'grocary', 'kkkkkkk', '666', '2022-07-01', '2022-06-30 21:07:47'),
(20, 4, 'medical', 'aaaaaa', '5345', '2022-07-01', '2022-06-30 21:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `regDate`) VALUES
(1, 'nitin', 'nitin@gmail.com', '88888888', 'nitin', '2022-06-26 16:56:21'),
(2, 'sonu', 'sonu@gmail.com', '444444444', '111', '2022-06-26 16:57:38'),
(4, 'munmun', 'munmun@gmail.com', '1111111111', '111', '2022-06-30 21:01:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
