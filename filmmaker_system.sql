-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 01:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmmaker_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `language` varchar(50) NOT NULL,
  `createAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `firstname`, `lastname`, `email`, `telephone`, `language`, `createAt`) VALUES
(1, 'Mugisha', 'Enock', 'enock@gmail.com', '0781187931', 'English', '2024-04-28 09:22:50'),
(4, 'claude', 'man', 'man@gmail.com', '0783387931', 'Kinyarwanda', '2024-04-30 12:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `contract_date` varchar(50) NOT NULL,
  `contract_text` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `makeAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `position`, `firstname`, `lastname`, `email`, `telephone`, `contract_date`, `contract_text`, `nationality`, `makeAt`) VALUES
(1, 'Filmmaker', 'Mukeshimana', 'Gatabazi', 'gatabazi@gmail.com', '0783387931', '2024-04-28', 'material contract', 'soutafrica', '2024-04-28 15:46:28'),
(2, 'Actor', 'safe', 'madiba', 'madiba@gmail.com', '0783387931', '2024-04-29', 'job contract', 'russian', '2024-04-29 09:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `filmmaker`
--

CREATE TABLE `filmmaker` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `createAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filmmaker`
--

INSERT INTO `filmmaker` (`id`, `firstname`, `lastname`, `email`, `telephone`, `nationality`, `createAt`) VALUES
(6, 'Patric', 'Muneza', 'muneza@gmail.com', '073765921', 'india', '2024-04-29 09:43:16'),
(7, 'Mukeshimana', 'GATABAZI Antoinette', 'gatabazi@gmail.com', '0786758334', 'Rwanda', '2024-04-29 22:16:37'),
(9, 'mukeshimana', 'GATABAZI Antoinette', 'gatabaz@gmail.com', '0786758334', 'Rwanda', '2024-04-29 22:32:59'),
(12, 'per', 'meer', 'meer@gmail.com', '0783387931', 'austraria', '2024-04-30 12:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `projectname` varchar(50) NOT NULL,
  `investmentAmount` varchar(50) NOT NULL,
  `makeAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`id`, `firstname`, `lastname`, `email`, `telephone`, `projectname`, `investmentAmount`, `makeAt`) VALUES
(1, 'Gatabazi', 'Antog', 'gatabazimukeshimana@gmail.com', '0783387931', 'Bamenya', '10000000000', '2024-04-28 10:49:34'),
(4, 'Queen', 'INEZA', 'ineza@gmail.com', '0789654321', 'The Hero', '$3000000013', '2024-04-29 09:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `makeAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`id`, `firstname`, `lastname`, `email`, `telephone`, `nationality`, `makeAt`) VALUES
(1, 'Gatabazi', 'Antog', 'gatabazi@gmail.com', '0783387931', 'England', '2024-04-28 09:34:23'),
(2, 'Deborah', 'Irakoze', 'irakoze@gmail.com', '0783387931', 'canada', '2024-04-29 00:36:25'),
(3, 'Mwiza', 'aloga', 'oluga@gmail.com', '0789654321', 'russian', '2024-04-29 09:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `projectname` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `language` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `makeAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `projectname`, `email`, `telephone`, `language`, `nationality`, `makeAt`) VALUES
(1, 'Bamenya', 'gatabazi@gmail.com', '0787654321', 'English', 'Austraria', '2024-04-28 10:12:04'),
(3, 'The Hero', 'enock@gmail.com', '0788804444', 'Swahili', 'canada', '2024-04-29 10:21:49'),
(4, 'Bamenya', 'clementineuwiragiye8@gmail.com', '0785465400', 'English', 'Usa_Florida', '2024-04-29 10:22:22'),
(5, 'Bamenya', 'clementineuwiragiye4@gmail.com', '0786758334', 'Swahili', 'soutafrica', '2024-04-30 12:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birth` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `makeAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `firstname`, `lastname`, `email`, `birth`, `password`, `makeAt`) VALUES
(1, 'Gatabazi', 'Antog', 'umwari@gmail.com', '2022-03-09', '$2y$10$G5fgJWxR1dfyuln/owA/MegZrtydQDrXEDKplBHlovV', '2024-04-29 11:25:32'),
(2, 'Joy', 'Jay', 'umwari@gmail.com', '2024-04-06', '$2y$10$J2H03UQ.XGgqY.NyvVOjy.gikDta9MFW1BfkVeGvtTC', '2024-04-29 11:30:49'),
(3, 'rukundo', 'cyiza', 'umwari@gmail.com', '2024-04-06', '$2y$10$ZwzUSIhINy4RBruClV/Q8uSvjP5k.pdkaO6931TB/hN', '2024-04-29 11:39:35'),
(4, 'MUKESHIMANA', 'GATABAZI Antoinette', 'gatabaziantoinette983@gmail.com', '2024-04-29', '$2y$10$DvN877Fm0u0QD3.E7UdnQuTnMAhefI2gL373pDh4O0Q', '2024-04-29 22:31:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `filmmaker`
--
ALTER TABLE `filmmaker`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `investment`
--
ALTER TABLE `investment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `filmmaker`
--
ALTER TABLE `filmmaker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `investment`
--
ALTER TABLE `investment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
