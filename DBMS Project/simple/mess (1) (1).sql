-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 07:26 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mess`
--

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `MESS_ID` varchar(10) NOT NULL,
  `DAY` varchar(15) NOT NULL,
  `BREAKFAST` varchar(30) NOT NULL,
  `BREAKFAST_TIME` varchar(15) NOT NULL,
  `LUNCH` varchar(30) NOT NULL,
  `LUNCH_TIME` varchar(30) NOT NULL,
  `SNACKS` varchar(30) NOT NULL,
  `SNACKS_TIME` varchar(30) NOT NULL,
  `DINNER` varchar(30) NOT NULL,
  `DINNER_TIME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`MESS_ID`, `DAY`, `BREAKFAST`, `BREAKFAST_TIME`, `LUNCH`, `LUNCH_TIME`, `SNACKS`, `SNACKS_TIME`, `DINNER`, `DINNER_TIME`) VALUES
('A', 'FRIDAY', 'Pongal, sambar', '7:00 - 9:30 am', 'Rice, chapati, dal, aloo, rasa', '12:00 - 2:00 pm', 'Cream bun, tea', '4:00 - 5:30 pm', 'Biryani', '7:00 - 9:00 pm'),
('A', 'MONDAY', 'UPMA', '7:00 - 9:30 am', 'Rice, dal, aloo,chicken', '12:00 - 2:00 pm', 'Samosa, tea', '4:00 - 5:30 pm', 'Rice, chapati, dal', '7:00 - 9:00 pm'),
('A', 'SATURDAY', 'Aloo chapati', '7:00 - 9:30 am', 'Rice, dal, brinjal, chicken', '12:00 - 2:00 pm', 'Bonda', '4:00 - 5:30 pm', 'Rice, chicken, chapati', '7:00 - 9:00 pm'),
('A', 'SUNDAY', 'Dosa, chutney', '7:00 - 9:30 am', 'Biryani', '12:00 - 2:00 pm', 'Bajji, tea', '4:00 - 5:30 pm', 'Rice, chapati, dal', '7:00 - 9:00 pm'),
('A', 'THURSDAY', 'Idli, chutney, sambar', '7:00 - 9:30 am', 'Rice, dal, tomato curry', '12:00 - 2:00 pm', 'Cup cake, tea', '4:00 - 5:30 pm', 'Rice, chicken, chapati', '7:00 - 9:00 pm'),
('A', 'TUESDAY', 'Puri, kurma', '7:00 - 9:30 am', 'Rice, dal, brinjal, chicken', '12:00 - 2:00 pm', 'Bread, tea', '4:00 - 5:30 pm', 'Rice, chapati, dal', '7:00 - 9:00 pm'),
('A', 'WEDNESDAY', 'Dosa, chutney', '7:00 - 9:30 am', 'Rice, chapati, dal, sambar', '12:00 - 2:00 pm', 'Bajji, tea', '4:00 - 5:30 pm', 'Noodles', '7:00 - 9:00 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`MESS_ID`,`DAY`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
