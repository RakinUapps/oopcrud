-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2018 at 05:20 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oopcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `soft_delete` varchar(3) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `dob`, `remarks`, `modified`, `soft_delete`) VALUES
(1, 'Lew tolstoy', NULL, NULL, NULL, 'No'),
(2, 'Mark Towen', NULL, NULL, NULL, 'No'),
(3, 'Stephen Hawking', NULL, NULL, NULL, 'No'),
(4, 'Rakib Hasan', NULL, NULL, NULL, 'No'),
(5, 'Dr. Jafar Iqbal', NULL, NULL, NULL, 'No'),
(6, NULL, NULL, 'book', '2018-08-17', 'Yes'),
(7, NULL, NULL, 'poet', '2018-08-17', 'Yes'),
(8, 'Tagore', NULL, 'poet', '2018-08-17', 'No'),
(9, 'Jashim', NULL, 'poet', '2018-08-18', 'No'),
(10, 'Tagore Rabi', NULL, 'poet in action', '2018-08-18', 'No'),
(11, 'Humayan', NULL, 'Novel writer', '2018-08-18', 'No'),
(12, 'Gazi Tazrul', '1940-02-29', 'Poet in action. Fake Writer.', '2018-08-27', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `authorid` int(5) DEFAULT NULL,
  `categoryid` int(5) DEFAULT NULL,
  `isbn` int(11) DEFAULT NULL,
  `dop` date DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `price` float(5,2) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `soft_delete` varchar(3) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `authorid`, `categoryid`, `isbn`, `dop`, `remarks`, `price`, `modified`, `soft_delete`) VALUES
(2, 'Time Travel', 2, 2, 1234567810, '2008-01-01', 'time related', 999.99, '2009-02-01', 'No'),
(3, 'Time Travel 2', 3, 3, 1234567811, '2015-01-01', 'time string', 999.99, '2016-02-11', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `soft_delete` varchar(3) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `soft_delete`) VALUES
(1, 'history', 'No'),
(2, 'Sci-Fi', 'No'),
(3, 'Novel', 'No'),
(4, 'story', 'No'),
(5, 'poetry', 'Yes'),
(6, 'Computing', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `staffid` varchar(5) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `soft_delete` varchar(3) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `staffid`, `doj`, `remarks`, `modified`, `soft_delete`) VALUES
(1, 'Karim', '1', '1998-10-10', 'Assistant', '2018-08-18', 'Yes'),
(2, 'Rahim', '2', '1989-10-10', 'Librian', '2018-08-18', 'No'),
(3, 'Sakib', '3', '1985-11-11', 'Sr. Librian', '2018-08-18', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `studentid` varchar(5) DEFAULT NULL,
  `joined` date DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `soft_delete` varchar(3) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `studentid`, `joined`, `remarks`, `modified`, `soft_delete`) VALUES
(1, 'Karim', '1', '2000-01-01', 'class nine', '2018-08-18', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
