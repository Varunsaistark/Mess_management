-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 11:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollnumber` varchar(20) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `mess_id` text NOT NULL,
  `hostelname` text NOT NULL,
  `contactnumber` varchar(15) NOT NULL,
  `sec_contactnumber` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nitcmail` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Extras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollnumber`, `fname`, `lname`, `mess_id`, `hostelname`, `contactnumber`, `sec_contactnumber`, `email`, `nitcmail`, `password`, `Extras`) VALUES
('b180258cs', 'varun', 'sai', '', 'mega boys hostel', '8008649587', '8008649567', 'user2@gmail.com', 'varunnitc@nitc.ac.in', 'password@1', 0),
('b180264cs', 'Rahul', 'Somalaraju', '', 'mega boys hostel', '8008649583', '78678667666', 'user1@gmail.com', 'rahulnitc@nitc.ac.in', 'password@5', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rollnumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
