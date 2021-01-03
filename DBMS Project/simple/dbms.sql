-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 10:58 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_Name` varchar(20) NOT NULL,
  `PhNo` varchar(15) NOT NULL,
  `EMAIL_ID` varchar(30) NOT NULL,
  `Mess_ID` int(11) DEFAULT NULL,
  `Login_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_Name`, `PhNo`, `EMAIL_ID`, `Mess_ID`, `Login_Password`) VALUES
(1, 'admin1', '2112223331', 'admin1@gmail.com', 1, 'admin1password'),
(2, 'admin2', '2112223332', 'admin2@gmail.com', 2, 'admin2password'),
(3, 'admin3', '2112223333', 'admin3@gmail.com', 3, 'admin3password'),
(4, 'admin4', '2112223334', 'admin4@gmail.com', 4, 'admin4password'),
(5, 'admin5', '2112223335', 'admin5@gmail.com', 4, 'admin5password'),
(6, 'admin6', '2112223336', 'admin6@gmail.com', 5, 'admin6password'),
(7, 'admin7', '2112223337', 'admin7@gmail.com', 6, 'admin7password'),
(8, 'admin8', '2112223338', 'admin8@gmail.com', 7, 'admin8password');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `RNo` char(9) NOT NULL,
  `DayType` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Mess_ID` int(11) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL,
  `Comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`RNo`, `DayType`, `Date`, `Mess_ID`, `Rating`, `Comments`) VALUES
('B123451CS', 'Breakfast', '2020/12/26', 1, 4, 'nice'),
('B123452CS', 'Breakfast', '2020/12/26', 2, 2, 'not nice'),
('B123453CS', 'Breakfast', '2020/12/26', 3, 2, 'nice'),
('B123454CS', 'Breakfast', '2020/12/26', 4, 3, 'nice'),
('B123455CS', 'Breakfast', '2020/12/26', 5, 5, 'nice'),
('B123456CS', 'Breakfast', '2020/12/26', 6, 2, 'nice'),
('B123457CS', 'Breakfast', '2020/12/26', 7, 2, 'nice'),
('B123458CS', 'Breakfast', '2020/12/26', 8, 3, 'nice'),
('b180264cs', 'breakfast', '2020/12/27', 8, 4, 'great bufffet!!!!!!!!'),
('b180264cs', 'lunch', '2020/12/27', 8, 3, 'great food!!!!!!!!!!.......');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `Mess_ID` int(11) NOT NULL,
  `Mess_Name` varchar(5) NOT NULL,
  `Mess_Location` text DEFAULT NULL,
  `Mess_Month_Charge` int(11) NOT NULL,
  `Mess_Type` text DEFAULT NULL,
  `Max_Strength` int(11) NOT NULL,
  `Current_Strength` int(11) DEFAULT NULL,
  `Previous_Month_Rating` float DEFAULT NULL,
  `Admin_ID` int(11) DEFAULT NULL,
  `Incharge_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`Mess_ID`, `Mess_Name`, `Mess_Location`, `Mess_Month_Charge`, `Mess_Type`, `Max_Strength`, `Current_Strength`, `Previous_Month_Rating`, `Admin_ID`, `Incharge_Name`) VALUES
(1, 'A', 'Near Rajput', 1000, 'Andhra mess', 12, 1, 4.5, 1, 'incharge1'),
(2, 'B', '500m from rajput', 2000, 'Maharastra non veg', 20, 1, 5, 2, 'incharge2'),
(3, 'C', ' infront minicateen', 3000, 'North india style', 30, 1, 5, 3, 'incharge3'),
(4, 'D', '  20m from minicateen', 3000, 'south india style', 17, 2, 4.9, 4, 'incharge4'),
(5, 'E', ' beside d hostel', 3000, 'Veg mess', 18, 3, 4.8, 5, 'incharge5'),
(6, 'F', ' infront of d hostel', 4500, '', 19, 1, 3.5, 6, 'incharge6'),
(7, 'G', ' Back of mini cateen', 2500, 'Kerala and andhra style', 17, 1, 4.1, 7, 'incharge7'),
(8, 'IH', ' beside mega hostel', 2000, 'Andhra style', 30, 4, 4.7, 8, 'incharge8');

-- --------------------------------------------------------

--
-- Table structure for table `mess_day_rating`
--

CREATE TABLE `mess_day_rating` (
  `Mess_ID` int(11) NOT NULL,
  `DayType` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Avg_Rating` float DEFAULT NULL,
  `Special_Item` text DEFAULT NULL,
  `Change_in_Timmings` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mess_day_rating`
--

INSERT INTO `mess_day_rating` (`Mess_ID`, `DayType`, `Date`, `Avg_Rating`, `Special_Item`, `Change_in_Timmings`) VALUES
(8, 'Breakfast', '2020/12/27', 0, NULL, NULL),
(8, 'Dinner', '2020/12/27', 0, NULL, NULL),
(8, 'Lunch', '2020/12/27', 3, NULL, NULL),
(8, 'Snacks', '2020/12/27', 0, NULL, NULL);

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
('B123451CS', 'fname1', 'lname1', '1', 'A', '1112223331', '1234567891', 'fname1@gmail.com ', 'fname1_b123451cs@nitc.ac.in', 'fname1password', 1001),
('B123452CS', 'fname2', 'lname2', '2', 'B', '1112223332', '1234567892', 'fname2@gmail.com', 'fname2_b123452cs@nitc.ac.in', 'fname2password', 1002),
('B123453CS', 'fname3', 'lname3', '3', 'C', '1112223333', '1234567893', 'fname3@gmail.com ', 'fname3_b123453cs@nitc.ac.in', 'fname3password', 1003),
('B123454CS', 'fname4', 'lname4', '4', 'D', '1112223334', '1234567894', 'fname4@gmail.com ', 'fname4_b123454cs@nitc.ac.in', 'fname4password', 1004),
('B123455CS', 'fname5', 'lname5', '5', 'E', '1112223335', '1234567895', 'fname5@gmail.com ', 'fname5_b123455cs@nitc.ac.in', 'fname5password', 1005),
('B123456CS', 'fname6', 'lname6', '6', 'F', '1112223336', '1234567896', 'fname6@gmail.com ', 'fname6_b123456cs@nitc.ac.in', 'fname6password', 1006),
('B123457CS', 'fname7', 'lname7', '7', 'G', '1112223337', '1234567897', 'fname7@gmail.com ', 'fname7_b123457cs@nitc.ac.in', 'fname7password', 1007),
('B123458CS', 'fname8', 'lname8', '8', 'IH', '1112223338', '1234567898', 'fname8@gmail.com ', 'fname8_b123458cs@nitc.ac.in', 'fname8password', 1008),
('b180258cs', 'varun', 'sai', '', 'mega boys hostel', '8008649587', '8008649567', 'user2@gmail.com', 'varunnitc@nitc.ac.in', 'password@1', 0),
('b180264cs', 'Rahul', 'Somalaraju', '8', 'E', '8008649583', '78678667666', 'user1@gmail.com', 'rahulnitc@nitc.ac.in', 'password@5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_due_details`
--

CREATE TABLE `student_due_details` (
  `RNo` char(9) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Month` varchar(10) NOT NULL,
  `PrePaidAmount` int(11) DEFAULT NULL,
  `Extra_Charge` int(11) NOT NULL,
  `Mess_Charge` int(11) DEFAULT NULL,
  `Fine` int(11) DEFAULT NULL,
  `TotalCharge` int(11) DEFAULT NULL,
  `AmountPaid` int(11) DEFAULT NULL,
  `NetDue` int(11) DEFAULT NULL,
  `Amount_Paid_Date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_due_details`
--

INSERT INTO `student_due_details` (`RNo`, `Year`, `Month`, `PrePaidAmount`, `Extra_Charge`, `Mess_Charge`, `Fine`, `TotalCharge`, `AmountPaid`, `NetDue`, `Amount_Paid_Date`) VALUES
('B123451CS', '2020', 'DEC', NULL, 1000, NULL, NULL, NULL, NULL, NULL, NULL),
('B123452CS', '2020', 'DEC', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
('B123453CS', '2020', 'DEC', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
('B123454CS', '2020', 'DEC', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
('B123455CS', '2020', 'DEC', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
('B123456CS', '2020', 'DEC', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
('B123457CS', '2020', 'DEC', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
('B123458CS', '2020', 'DEC', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
('B180264CS', '2020', 'dec', NULL, 203992, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD UNIQUE KEY `PhNo` (`PhNo`,`EMAIL_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`RNo`,`DayType`,`Date`);

--
-- Indexes for table `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`Mess_ID`),
  ADD UNIQUE KEY `Mess_Name` (`Mess_Name`,`Mess_Location`) USING HASH;

--
-- Indexes for table `mess_day_rating`
--
ALTER TABLE `mess_day_rating`
  ADD PRIMARY KEY (`Mess_ID`,`DayType`,`Date`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rollnumber`);

--
-- Indexes for table `student_due_details`
--
ALTER TABLE `student_due_details`
  ADD PRIMARY KEY (`RNo`,`Year`,`Month`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
