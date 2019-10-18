-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2019 at 07:16 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbname`
--

-- --------------------------------------------------------

--
-- Table structure for table `emply`
--

CREATE TABLE `emply` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(30) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `skill` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emply`
--

INSERT INTO `emply` (`id`, `name`, `age`, `status`, `skill`, `country`, `image`) VALUES
(1, 'jahid', '10', 1, 'php,css', 'Bangladesh', 'gsfgdsf'),
(2, 'jahid hassan', '20', 1, 'php,html,', 'bangladesh', 'gsfgdsf'),
(3, 'jahid hassan', '20', 1, 'php,html,', 'bangladesh', 'gsfgdsf'),
(5, 'jahid', '21', 1, 'php,css,', 'bangladesh', 'gsfgdsf'),
(6, 'jahid', '21', 0, 'php,css,', 'bangladesh', 'gsfgdsf'),
(7, 'jahid', '21', 1, 'php,css,', 'bangladesh', 'upload/BotterId.JPG'),
(8, 'jahid', '21', 1, 'php,css,', 'bangladesh', 'upload/BotterId.JPG'),
(9, 'Anik', '30', 1, 'css,html,', 'india', 'upload/Capturadswdfse.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emply`
--
ALTER TABLE `emply`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emply`
--
ALTER TABLE `emply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
