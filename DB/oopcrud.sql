-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2018 at 06:05 PM
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
(4, 'Nazrul ', '1950-05-12', 'Writer', '2018-10-22', 'No'),
(5, 'Henry', '1900-05-12', 'Writer', '2018-10-22', 'No'),
(8, 'Brian', '1986-12-05', 'Writer', '2018-10-22', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `authorid` int(5) DEFAULT NULL,
  `categoryid` int(5) DEFAULT NULL,
  `isbn` int(16) DEFAULT NULL,
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
(4, 'Book 34', 1, 3, 123456789, '2003-10-01', 'book', 1000, '2018-10-22', 'No'),
(5, 'Boku Note', 1, 2, 123652468, '2006-01-01', 'Good', 1000, '2018-10-22', 'No'),
(8, '20484', 3, 1, 43532722, '2006-02-10', 'Fake book', 2500, '2018-10-22', 'No'),
(9, 'Boku Note 2', 1, 2, 534684654, '2005-02-12', '2355', 5566, '2018-10-22', 'No'),
(10, 'The End', 5, 4, 747476748, '2010-10-10', 'Awesome', 2222, '2018-10-22', 'No'),
(11, 'The Beginning', 4, 4, 13235465, '2011-11-11', 'Cool', 1000, '2018-10-22', 'No'),
(12, 'The Journey of Pinpin', 5, 2, 92939393, '2009-01-10', 'BOOK', 1000, '2018-10-22', 'No'),
(13, 'The War of 2018', 3, 2, 13254354, '2018-10-10', 'Hard to read.', 1200, '2018-10-22', 'No'),
(14, 'Invisible Book', 5, 1, 11216464, '2017-05-05', 'Don''t read it', 1000, '2018-10-22', 'No'),
(15, 'Exotic2', 2, 1, 1234567890, '2000-10-10', 'book 90', 1000, '2018-10-22', 'No');

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
(1, 'Science Fiction', 'No'),
(2, 'HISTORY', 'No'),
(3, 'Novel', 'No'),
(4, 'Poem', 'No'),
(6, 'Novel', 'Yes'),
(7, 'Exotic', 'No');

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
(2, 'Rahim', '2', '1989-10-10', 'sr.Librian', '2018-09-11', 'No');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
