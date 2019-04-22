-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 08:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs`
--

-- --------------------------------------------------------

--
-- Table structure for table `co`
--

CREATE TABLE `co` (
  `co_id` int(11) NOT NULL,
  `assess_items` varchar(60) NOT NULL,
  `co1` double NOT NULL,
  `co2` double NOT NULL,
  `co3` double NOT NULL,
  `co4` double NOT NULL,
  `weight` double NOT NULL,
  `exam_taken` double NOT NULL,
  `ratio` double NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co`
--

INSERT INTO `co` (`co_id`, `assess_items`, `co1`, `co2`, `co3`, `co4`, `weight`, `exam_taken`, `ratio`) VALUES
(1, 'Class Participation', 1, 1, 3, 0, 5, 5, 1),
(2, 'Class Test/ Quiz', 3.33, 3.34, 3.33, 0, 10, 10, 1),
(3, 'Midterm Exam -I', 5, 7.5, 7.5, 0, 20, 40, 0.5),
(4, 'Midterm Exam -II', 0, 15, 5, 0, 20, 40, 0.5),
(5, 'Final Exam', 0, 15, 5, 0, 20, 40, 0.5),
(6, 'Project/Assignment', 0, 0, 0, 10, 10, 10, 1),
(7, 'Lab', 0, 0, 0, 15, 15, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(11) NOT NULL,
  `course_id` varchar(6) NOT NULL,
  `Course_title` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `id` int(11) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `co1` double NOT NULL DEFAULT '-1',
  `co2` double NOT NULL DEFAULT '-1',
  `co3` double NOT NULL DEFAULT '-1',
  `co4` double NOT NULL DEFAULT '-1',
  `total` double NOT NULL DEFAULT '-1',
  `sec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `m_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `mid1` double NOT NULL DEFAULT '0',
  `mid2` double NOT NULL DEFAULT '0',
  `final` double NOT NULL DEFAULT '0',
  `quize` double NOT NULL DEFAULT '0',
  `class_perticipation` double NOT NULL DEFAULT '0',
  `project_assign` double NOT NULL DEFAULT '0',
  `lab` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mid1`
--

CREATE TABLE `mid1` (
  `id` int(11) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `co1` double NOT NULL DEFAULT '-1',
  `co2` double NOT NULL DEFAULT '-1',
  `co3` double NOT NULL DEFAULT '-1',
  `co4` double NOT NULL DEFAULT '-1',
  `total` double NOT NULL DEFAULT '-1',
  `sec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mid2`
--

CREATE TABLE `mid2` (
  `id` int(11) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `co1` double NOT NULL DEFAULT '-1',
  `co2` double NOT NULL DEFAULT '-1',
  `co3` double NOT NULL DEFAULT '-1',
  `co4` double NOT NULL DEFAULT '-1',
  `total` double NOT NULL DEFAULT '-1',
  `sec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `id` int(11) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `quize1` double NOT NULL DEFAULT '-1',
  `quize2` double NOT NULL DEFAULT '-1',
  `quize3` double NOT NULL DEFAULT '-1',
  `average` double NOT NULL DEFAULT '-1',
  `class_perticipation` double NOT NULL DEFAULT '-1',
  `project_assignment` double NOT NULL DEFAULT '-1',
  `lab` double NOT NULL DEFAULT '-1',
  `sec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sec`
--

CREATE TABLE `sec` (
  `sec_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `sec_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `s_id` int(11) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `student_name` varchar(60) NOT NULL,
  `student_email` varchar(60) NOT NULL,
  `student_phone` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_sec`
--

CREATE TABLE `student_sec` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `co`
--
ALTER TABLE `co`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `final`
--
ALTER TABLE `final`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `mid1`
--
ALTER TABLE `mid1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mid2`
--
ALTER TABLE `mid2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec`
--
ALTER TABLE `sec`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `student_sec`
--
ALTER TABLE `student_sec`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `co`
--
ALTER TABLE `co`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `final`
--
ALTER TABLE `final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mid1`
--
ALTER TABLE `mid1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mid2`
--
ALTER TABLE `mid2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sec`
--
ALTER TABLE `sec`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_sec`
--
ALTER TABLE `student_sec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
