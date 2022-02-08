-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2022 at 02:35 PM
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
  `ipFrom` varchar(64) NOT NULL,
  `ipDest` varchar(64) NOT NULL,
  `protocolVersion` varchar(64) NOT NULL,
  `protocolContentType` varchar(64) NOT NULL,
  `protocolType` varchar(64) NOT NULL,
  `id` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `frames`
--

INSERT INTO `frames` (`date`, `version`, `headerLength`, `service`, `identification`, `flagsCode`, `ttl`, `protocolName`, `protocolChecksumStatus`, `protocolPortsFrom`, `protocolPortsDest`, `headerChecksum`, `ipFrom`, `ipDest`, `protocolVersion`, `protocolContentType`, `protocolType`, `id`) VALUES
(1608219651, 4, 20, '0x00', '0xf30f', '0x00', 128, 'UDP', 'disabled', 50046, 3481, 'unverified', 'c0a8014a', '3470ff25', '', '', '', 1),
(1608219649, 4, 20, '0x00', '0xf30e', '0x00', 128, 'UDP', 'disabled', 50046, 3481, 'unverified', 'c0a8014a', '3470ff25', '', '', '', 2),
(1608219647, 4, 20, '0x00', '0xf30d', '0x00', 128, 'UDP', 'disabled', 50046, 3481, 'unverified', 'c0a8014a', '3470ff25', '', '', '', 3),
(1608219645, 4, 20, '0x00', '0xf30c', '0x00', 128, 'UDP', 'disabled', 50046, 3481, 'unverified', 'c0a8014a', '3470ff25', '', '', '', 4),
(1608219640, 4, 20, '0x00', '0x92ce', '0x40', 128, 'TLSv1.2', 'disabled', 63440, 443, 'unverified', 'c0a8014a', '343111a8', '1.2', 'Application Data', '', 5),
(1608219635, 4, 20, '0x00', '0x92d0', '0x40', 128, 'TLSv1.2', 'disabled', 63440, 443, 'unverified', 'c0a8014a', '343111a8', '1.2', 'Application Data', '', 6),
(1608219630, 4, 20, '0x00', '0xa132', '0x00', 128, 'ICMP', 'good', 51062, 443, '0x0000', 'c0a8014a', 'acd913e3', '', '', '8', 7),
(1608219620, 4, 20, '0x00', '0xa132', '0x00', 99, 'ICMP', 'good', 51062, 443, '0xc31d', 'acd913e3', 'c0a8014a', '', '', '', 8),
(1607951036, 4, 20, '0x00', '0x9927', '0x40', 128, 'TCP', 'disabled', 51062, 443, 'unverified', 'c0a8014a', 'd83ac6ce', '', '', '', 9),
(1607951031, 4, 20, '0x00', '0x9927', '0x00', 121, 'TCP', 'disabled', 51062, 443, 'unverified', 'd83aa80c', 'c0a8014a', '', '', '', 10),
(1606910038, 4, 20, '0x00', '0xf2f9', '0x00', 117, 'ICMP', 'good', 51062, 443, '0xc312', 'acd913e3', 'c0a8014a', '', '', '', 11),
(1606910036, 4, 20, '0x00', '0xf2f9', '0x00', 128, 'ICMP', 'good', 51062, 443, '0x0000', 'c0a8014a', 'acd913e3', '', '', '8', 12),
(1606910000, 4, 20, '0x00', '0xd912', '0x00', 128, 'ICMP', 'good', 51062, 443, '0x0000', 'c0a8014a', 'acd913e3', '', '', '8', 13),
(1606909998, 4, 20, '0x00', '0xd914', '0x00', 128, 'ICMP', 'good', 51062, 443, '0x0020', 'c0a8014a', 'acd913e3', '', '', '8', 14),
(1606906654, 4, 20, '0x00', '0xa443', '0x00', 128, 'ICMP', 'good', 51062, 443, '0x0000', 'c0a8014a', 'acd913e3', '', '', '8', 15),
(1606906653, 4, 20, '0x00', '0xa443', '0x00', 117, 'ICMP', 'good', 51062, 443, '0xc312', 'acd913e3', 'c0a8014a', '', '', '', 16);

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
-- Indexes for table `frames`
--
ALTER TABLE `frames`
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
-- AUTO_INCREMENT for table `frames`
--
ALTER TABLE `frames`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
