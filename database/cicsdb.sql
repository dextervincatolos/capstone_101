-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 03:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cicsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cics_program_tbl`
--

CREATE TABLE `cics_program_tbl` (
  `courseID` int(11) UNSIGNED NOT NULL,
  `courseTitle` varchar(255) NOT NULL,
  `courseDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `completed_task_tbl`
--

CREATE TABLE `completed_task_tbl` (
  `ctID` int(11) UNSIGNED NOT NULL,
  `violationID` int(11) UNSIGNED NOT NULL,
  `task_status` varchar(255) NOT NULL,
  `confirmed_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_tbl`
--

CREATE TABLE `event_tbl` (
  `eventID` int(11) UNSIGNED NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_tbl`
--

CREATE TABLE `faculty_tbl` (
  `facultyID` int(11) UNSIGNED NOT NULL,
  `faculty_number` varchar(255) NOT NULL,
  `faculty_fname` varchar(255) NOT NULL,
  `faculty_lname` varchar(255) NOT NULL,
  `faculty_mname` varchar(255) NOT NULL,
  `faculty_sname` varchar(255) NOT NULL,
  `faculty_gender` varchar(255) NOT NULL,
  `faculty_email` varchar(255) NOT NULL,
  `faculty_contact` varchar(255) NOT NULL,
  `faculty_address` varchar(255) NOT NULL,
  `faculty_password` varchar(255) NOT NULL,
  `faculty_login_status` varchar(255) NOT NULL,
  `faculty_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_tbl`
--

INSERT INTO `faculty_tbl` (`facultyID`, `faculty_number`, `faculty_fname`, `faculty_lname`, `faculty_mname`, `faculty_sname`, `faculty_gender`, `faculty_email`, `faculty_contact`, `faculty_address`, `faculty_password`, `faculty_login_status`, `faculty_role`) VALUES
(1, 'F-00001', 'Arvy', 'Baingan', 'Catolos', '', 'Male', 'arvy@gmail.com', '09765342432', 'Barsat West Baggao Cagayan', '$2y$10$OXUslO1GFuQX7TqylgTK3e5G9g5y/HelnNiGViZpfgCYIB0EooaSm', 'online', 'Dean');

-- --------------------------------------------------------

--
-- Table structure for table `policy_rules_tbl`
--

CREATE TABLE `policy_rules_tbl` (
  `ruleID` int(11) UNSIGNED NOT NULL,
  `policyID` int(11) UNSIGNED NOT NULL,
  `rule` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policy_sanction_tbl`
--

CREATE TABLE `policy_sanction_tbl` (
  `sanctionID` int(11) UNSIGNED NOT NULL,
  `policyID` int(11) UNSIGNED NOT NULL,
  `sanction` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policy_tbl`
--

CREATE TABLE `policy_tbl` (
  `policyID` int(11) UNSIGNED NOT NULL,
  `policy_title` varchar(255) NOT NULL,
  `policy_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section_tbl`
--

CREATE TABLE `section_tbl` (
  `sectionID` int(11) UNSIGNED NOT NULL,
  `courseID` int(11) UNSIGNED NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `studentID` int(11) UNSIGNED NOT NULL,
  `student_number` varchar(255) NOT NULL,
  `student_fname` varchar(255) NOT NULL,
  `student_mname` varchar(255) NOT NULL,
  `student_lname` varchar(255) NOT NULL,
  `student_sname` varchar(255) NOT NULL,
  `sectionID` int(11) UNSIGNED NOT NULL,
  `courseID` int(11) UNSIGNED NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_contact` varchar(255) NOT NULL,
  `student_address` varchar(255) NOT NULL,
  `student_login_status` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `account_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `violated_policy_log`
--

CREATE TABLE `violated_policy_log` (
  `violationID` int(11) UNSIGNED NOT NULL,
  `policyID` int(11) UNSIGNED NOT NULL,
  `ruleID` int(11) UNSIGNED NOT NULL,
  `event` varchar(255) NOT NULL,
  `studentID` int(11) UNSIGNED NOT NULL,
  `sanctionID` int(11) UNSIGNED NOT NULL,
  `date_issued` varchar(255) NOT NULL,
  `violation_status` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cics_program_tbl`
--
ALTER TABLE `cics_program_tbl`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `completed_task_tbl`
--
ALTER TABLE `completed_task_tbl`
  ADD PRIMARY KEY (`ctID`),
  ADD KEY `violationID` (`violationID`);

--
-- Indexes for table `event_tbl`
--
ALTER TABLE `event_tbl`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `faculty_tbl`
--
ALTER TABLE `faculty_tbl`
  ADD PRIMARY KEY (`facultyID`);

--
-- Indexes for table `policy_rules_tbl`
--
ALTER TABLE `policy_rules_tbl`
  ADD PRIMARY KEY (`ruleID`),
  ADD KEY `policyID` (`policyID`);

--
-- Indexes for table `policy_sanction_tbl`
--
ALTER TABLE `policy_sanction_tbl`
  ADD PRIMARY KEY (`sanctionID`),
  ADD KEY `policyID` (`policyID`);

--
-- Indexes for table `policy_tbl`
--
ALTER TABLE `policy_tbl`
  ADD PRIMARY KEY (`policyID`);

--
-- Indexes for table `section_tbl`
--
ALTER TABLE `section_tbl`
  ADD PRIMARY KEY (`sectionID`),
  ADD KEY `courseID` (`courseID`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`studentID`),
  ADD KEY `courseID` (`courseID`),
  ADD KEY `sectionID` (`sectionID`);

--
-- Indexes for table `violated_policy_log`
--
ALTER TABLE `violated_policy_log`
  ADD PRIMARY KEY (`violationID`),
  ADD KEY `policyID` (`policyID`),
  ADD KEY `ruleID` (`ruleID`),
  ADD KEY `sanctionID` (`sanctionID`),
  ADD KEY `studentID` (`studentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cics_program_tbl`
--
ALTER TABLE `cics_program_tbl`
  MODIFY `courseID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `completed_task_tbl`
--
ALTER TABLE `completed_task_tbl`
  MODIFY `ctID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_tbl`
--
ALTER TABLE `event_tbl`
  MODIFY `eventID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_tbl`
--
ALTER TABLE `faculty_tbl`
  MODIFY `facultyID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `policy_rules_tbl`
--
ALTER TABLE `policy_rules_tbl`
  MODIFY `ruleID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policy_sanction_tbl`
--
ALTER TABLE `policy_sanction_tbl`
  MODIFY `sanctionID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policy_tbl`
--
ALTER TABLE `policy_tbl`
  MODIFY `policyID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section_tbl`
--
ALTER TABLE `section_tbl`
  MODIFY `sectionID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `studentID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `violated_policy_log`
--
ALTER TABLE `violated_policy_log`
  MODIFY `violationID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `completed_task_tbl`
--
ALTER TABLE `completed_task_tbl`
  ADD CONSTRAINT `completed_task_tbl_ibfk_1` FOREIGN KEY (`violationID`) REFERENCES `violated_policy_log` (`violationID`);

--
-- Constraints for table `policy_rules_tbl`
--
ALTER TABLE `policy_rules_tbl`
  ADD CONSTRAINT `policy_rules_tbl_ibfk_1` FOREIGN KEY (`policyID`) REFERENCES `policy_tbl` (`policyID`);

--
-- Constraints for table `policy_sanction_tbl`
--
ALTER TABLE `policy_sanction_tbl`
  ADD CONSTRAINT `policy_sanction_tbl_ibfk_1` FOREIGN KEY (`policyID`) REFERENCES `policy_tbl` (`policyID`);

--
-- Constraints for table `section_tbl`
--
ALTER TABLE `section_tbl`
  ADD CONSTRAINT `section_tbl_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `cics_program_tbl` (`courseID`);

--
-- Constraints for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD CONSTRAINT `student_tbl_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `cics_program_tbl` (`courseID`),
  ADD CONSTRAINT `student_tbl_ibfk_2` FOREIGN KEY (`sectionID`) REFERENCES `section_tbl` (`sectionID`);

--
-- Constraints for table `violated_policy_log`
--
ALTER TABLE `violated_policy_log`
  ADD CONSTRAINT `violated_policy_log_ibfk_1` FOREIGN KEY (`policyID`) REFERENCES `policy_tbl` (`policyID`),
  ADD CONSTRAINT `violated_policy_log_ibfk_2` FOREIGN KEY (`ruleID`) REFERENCES `policy_rules_tbl` (`ruleID`),
  ADD CONSTRAINT `violated_policy_log_ibfk_3` FOREIGN KEY (`sanctionID`) REFERENCES `policy_sanction_tbl` (`sanctionID`),
  ADD CONSTRAINT `violated_policy_log_ibfk_4` FOREIGN KEY (`studentID`) REFERENCES `student_tbl` (`studentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
