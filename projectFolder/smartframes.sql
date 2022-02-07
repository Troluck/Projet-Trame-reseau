-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2022 at 12:46 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartframes`
--

-- --------------------------------------------------------

--
-- Table structure for table `frames`
--

CREATE TABLE `frames` (
  `date` int(64) NOT NULL,
  `version` int(64) NOT NULL,
  `headerLength` int(64) NOT NULL,
  `service` varchar(64) NOT NULL,
  `identification` varchar(64) NOT NULL,
  `flagsCode` varchar(64) NOT NULL,
  `ttl` int(64) NOT NULL,
  `protocolName` varchar(64) NOT NULL,
  `protocolChecksumStatus` varchar(64) NOT NULL,
  `protocolPortsFrom` int(64) NOT NULL,
  `protocolPortsDest` int(64) NOT NULL,
  `headerChecksum` varchar(64) NOT NULL,
  `ipFrom` int(64) NOT NULL,
  `ipDest` int(64) NOT NULL,
  `protocolVersion` int(64) NOT NULL,
  `protocolContentType` varchar(64) NOT NULL,
  `protocolType` int(64) NOT NULL,
  `protocolCode` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `id` int(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` int(64) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
