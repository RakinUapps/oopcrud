-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 07:22 AM
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
(1, 'Mark Towen', '1900-05-12', 'Writer', '2018-09-11', 'No'),
(2, 'Mark Towen', '1900-05-12', 'Writer', '2018-09-11', 'Yes'),
(3, 'Gazi Tazrul', '1900-05-12', 'Poet in action. Fake Writer.', '2018-09-21', 'No'),
(4, 'Mark Towen', '1900-05-12', 'Writer', '2018-09-11', 'No'),
(5, 'Mark Towen', '1900-05-12', 'Writer', '2018-09-11', 'No'),
(6, 'Mark Towen', '1900-05-12', 'Writer', '2018-09-11', 'Yes'),
(7, 'Mark Towen', '1900-05-12', 'Writer', '2018-09-11', 'Yes'),
(8, 'Mark Towen', '1900-05-12', 'Writer', '2018-09-11', 'No'),
(9, 'Mark Towen', '1900-05-12', 'Writer', '2018-09-11', 'No'),
(10, 'Mark Towen', '1900-05-12', 'Writer', '2018-09-11', 'No'),
(11, 'Mark Towen', '1900-05-12', 'Writer', '2018-09-11', 'No'),
(12, 'Mark Towen', '1900-05-12', 'Writer', '2018-09-11', 'No');

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
  `price` int(5) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `soft_delete` varchar(3) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `authorid`, `categoryid`, `isbn`, `dop`, `remarks`, `price`, `modified`, `soft_delete`) VALUES
(2, 'Book 34', 2, 3, 2147483647, '2003-10-01', 'book', 1000, '2018-09-07', 'No'),
(4, 'Book 34', 2, 3, 2147483647, '2003-10-01', 'book', 1000, '2018-09-07', 'No');

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
(1, 'Sciece Fiction', 'No'),
(2, 'HISTORY', 'No'),
(3, 'Novel', 'No'),
(4, 'Poem', 'No'),
(6, 'Novel', 'Yes');

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
(1, 'Rahim', '2', '1989-10-10', 'sr.Librian', '2018-09-11', 'Yes'),
(2, 'Rahim', '2', '1989-10-10', 'sr.Librian', '2018-09-11', 'No'),
(3, 'Rahim', '2', '1989-10-10', 'sr.Librian', '2018-09-11', 'Yes');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `role` varchar(5) NOT NULL,
  `permission` varchar(2000) NOT NULL,
  `phone` varchar(111) NOT NULL,
  `address` varchar(333) NOT NULL,
  `email_verified` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `permission`, `phone`, `address`, `email_verified`) VALUES
(27, 'Mr.', 'Rakin', 'rakin@rakin.com', 'feb54a0a7b6d7dd12a5fc67e3863eb8c', 'admin', '', '8801841130077', 'Chittagong', 'Yes');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
