-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 12:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_form`
--

CREATE TABLE `booking_form` (
  `CARD_NUMBER` varchar(50) NOT NULL,
  `CARD_HOLDER` varchar(25) NOT NULL,
  `EXPIRATION_MM` varchar(50) NOT NULL,
  `EXPIRATION_YY` varchar(50) NOT NULL,
  `CVV` varchar(50) NOT NULL,
  `SELECT_YOUR_SNACKS` varchar(50) NOT NULL,
  `movie_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_form`
--

INSERT INTO `booking_form` (`CARD_NUMBER`, `CARD_HOLDER`, `EXPIRATION_MM`, `EXPIRATION_YY`, `CVV`, `SELECT_YOUR_SNACKS`, `movie_name`) VALUES
('', '', '', '', 'sdfa', '', ''),
('', '', '', '', 'sdfa', '', ''),
('', '', '', '', 'GFDS', '', ''),
('', '', '', '', 'GFDS', '', ''),
('', '', '', '', 'GFDS', '', ''),
('', '', '', '', 'GFDS', '', ''),
('', '', '', '', 'vvv', '', ''),
('', '', '', '', 'vvv', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
