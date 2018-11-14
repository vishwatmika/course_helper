-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 09:26 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `name` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`name`, `user`, `phone`, `mail`, `pass`, `img`, `course`) VALUES
('ankit', 'akg', '0987654328', 'akg@hh.com', '123', '394253d4ab5d83cb170a65f5c29db236.jpg', 'PHP'),
('Devang', 'devang10', '1234567890', 'dev@gmail.com', 'dev', '0a82b2ba8a61efe1b0cc268206dc2354.jpg', 'ANDROID JAVA'),
('nihal', 'nihal55', '02929', 'nn@mail.com', 'nnnn', '', ''),
('Surender', 'skd', '0987654321', 'skd@gmail.com', 'hack', '4e705d06711a44750192d3597421f90c.jpg', ''),
('Vishwatmika', 'vish123', '0987654321', 'vishwatmika@gmail.com', '1234', '0a82b2ba8a61efe1b0cc268206dc2354.jpg', 'JAVA PYTHON C/C++ HACKING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
