-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 01:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `year` int(100) NOT NULL,
  `section` varchar(5) NOT NULL,
  `semster` int(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `teacher` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`year`, `section`, `semster`, `subject`, `teacher`) VALUES
(2, 'a', 1, 'compiler design', 0),
(2, 'a', 1, 'web technologies', 0),
(2, 'a', 1, 'computer architecture', 0);

-- --------------------------------------------------------

--
-- Table structure for table `definedclasses`
--

CREATE TABLE `definedclasses` (
  `year` int(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `semster` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacherdet`
--

CREATE TABLE `teacherdet` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherdet`
--

INSERT INTO `teacherdet` (`id`, `name`) VALUES
(113, 'abhiram');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacherdet`
--
ALTER TABLE `teacherdet`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
