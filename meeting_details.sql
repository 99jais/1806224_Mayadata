-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 18, 2021 at 11:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meet`
--

-- --------------------------------------------------------

--
-- Table structure for table `meeting_details`
--

CREATE TABLE `meeting_details` (
  `si_no` int(200) NOT NULL,
  `meeting_name` varchar(200) NOT NULL,
  `no_of_people_attending` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting_details`
--

INSERT INTO `meeting_details` (`si_no`, `meeting_name`, `no_of_people_attending`, `date`, `start_time`, `end_time`) VALUES
(2, 'john', '20', '2021-04-08', '16:13:13', '21:10:00'),
(9, 'Shylock', '90', '2021-04-07', '19:09:09', '23:08:00'),
(10, 'Antonio', '80', '2021-04-02', '10:07:08', '19:11:07'),
(11, 'Bassanio', '30', '2021-04-03', '09:06:06', '19:08:06'),
(12, 'Portia', '50', '2021-03-03', '12:06:06', '22:07:07'),
(13, 'Jessica', '60', '2021-04-05', '07:08:00', '08:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meeting_details`
--
ALTER TABLE `meeting_details`
  ADD PRIMARY KEY (`si_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meeting_details`
--
ALTER TABLE `meeting_details`
  MODIFY `si_no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
