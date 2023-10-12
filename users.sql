-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 03:47 PM
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
-- Database: `webdevproj_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(199) NOT NULL,
  `uname` varchar(199) NOT NULL,
  `email` varchar(199) NOT NULL,
  `pass` varchar(199) NOT NULL,
  `fname` varchar(199) NOT NULL,
  `lname` varchar(199) NOT NULL,
  `gender` varchar(199) NOT NULL,
  `dob` varchar(199) NOT NULL,
  `country` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `email`, `pass`, `fname`, `lname`, `gender`, `dob`, `country`) VALUES
(1, 'vincent', 'vincent@gmail.com', '123', 'vincent', 'sb', 'male', 'may 16 2002', 'PH'),
(2, 'vincent', '123@gmail.com', '1234', 'vince', 'sb', 'male', '2010-02-12', 'Canada'),
(4, 'vincent', '1234@gmail.com', '1234', 'vince', 'sb', 'male', '2010-02-12', 'Canada'),
(6, 'vincent', 'vince@gmail.com', '123', 'vince', 'sb', 'female', '2014-01-21', 'China');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(199) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
