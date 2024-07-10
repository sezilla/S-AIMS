-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 01:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_saims`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `Student_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `day1` timestamp NOT NULL DEFAULT current_timestamp(),
  `day2` timestamp NOT NULL DEFAULT current_timestamp(),
  `day3` timestamp NOT NULL DEFAULT current_timestamp(),
  `day4` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`Student_id`, `name`, `day1`, `day2`, `day3`, `day4`) VALUES
(202300001, 'mingming', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202300002, 'Hitori Gotoh', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_acc`
--

CREATE TABLE `tbl_admin_acc` (
  `user_name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin_acc`
--

INSERT INTO `tbl_admin_acc` (`user_name`, `password`) VALUES
('admin', '111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `employeeID` bigint(20) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNo` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `gender` enum('Male','Female','Prefer not to say','') NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`employeeID`, `fullName`, `email`, `phoneNo`, `department`, `gender`, `date`, `password`) VALUES
(202300101, 'dina', 'markmonstarr5@yahoo.com', '90909242', 'department', '', '2023-07-09 08:32:08', '12345'),
(202300102, 'dina ako', 'markmonstarr5@yahoo.com', '90909242', 'department', '', '2023-07-09 08:32:26', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `studentID` bigint(20) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `yearsection` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(225) NOT NULL,
  `qr_code` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`studentID`, `fullName`, `email`, `program`, `yearsection`, `gender`, `date`, `password`, `qr_code`) VALUES
(202300001, 'mingming', 'mingming@facebook.com', 'pilot', '4-1', 'on', '2023-07-09 09:15:17', 'SaimsPassword123', ''),
(202300002, 'Hitori Gotoh', 'bocchi@gmail.com', 'neat', '1-1', 'on', '2023-07-09 10:50:45', 'SaimsPassword123', ''),
(202300003, 'choo choo', 'doggy@gmail.com', 'crim', '2-2', 'on', '2023-07-09 11:02:09', 'SaimsPassword123', ''),
(202300004, 'tweetie', 'elonmusk@gmail.com', 'BM', '4-1', 'on', '2023-07-09 11:03:08', 'SaimsPassword123', ''),
(202300005, 'muning', 'cathy@gmail.com', 'BSP', '1-2', 'on', '2023-07-09 11:04:33', 'SaimsPassword123', ''),
(202300006, 'danna', 'ayawmaligo@gmail.com', 'multimedia', '2-1', 'on', '2023-07-09 11:05:39', 'SaimsPassword123', ''),
(202300007, 'Tom Cruz', 'tc@gmail', 'crim', '1-1', 'on', '2023-07-09 11:07:32', 'SaimsPassword123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD KEY `StudentID` (`Student_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `tbl_admin_acc`
--
ALTER TABLE `tbl_admin_acc`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`employeeID`),
  ADD KEY `fullName` (`fullName`),
  ADD KEY `email` (`email`),
  ADD KEY `phoneNo` (`phoneNo`),
  ADD KEY `department` (`department`),
  ADD KEY `gender` (`gender`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`studentID`),
  ADD KEY `fullName` (`fullName`),
  ADD KEY `email` (`email`),
  ADD KEY `program` (`program`),
  ADD KEY `yearsection` (`yearsection`),
  ADD KEY `gender` (`gender`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `employeeID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202300103;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `studentID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202300008;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD CONSTRAINT `student_attendance_ibfk_1` FOREIGN KEY (`Student_id`) REFERENCES `tbl_students` (`studentID`),
  ADD CONSTRAINT `student_attendance_ibfk_2` FOREIGN KEY (`name`) REFERENCES `tbl_students` (`fullName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
