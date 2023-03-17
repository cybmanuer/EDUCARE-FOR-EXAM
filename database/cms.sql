-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 12:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_name` varchar(250) NOT NULL,
  `a_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_name`, `a_pass`) VALUES
('anisha', 'anisha123'),
('kushi', 'kushi123'),
('likitha', 'liki123'),
('megha', 'megha123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_name` varchar(25) NOT NULL,
  `c_mail` varchar(25) NOT NULL,
  `c_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_name`, `c_mail`, `c_msg`) VALUES
('xyzz', 'xyz@gmail.com', 'easy to access'),
('abcc', 'abcc@gmail.com', 'happyyyyyyy\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `msg` varchar(300) NOT NULL,
  `t_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`msg`, `t_name`) VALUES
('come with notes', ''),
('Prepare for Internals', ''),
('tomorow is holiday', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_name` varchar(25) NOT NULL,
  `s_reg` varchar(10) NOT NULL,
  `s_phno` int(10) NOT NULL,
  `s_sem` varchar(5) NOT NULL,
  `s_comb` varchar(10) NOT NULL,
  `s_pass` varchar(10) NOT NULL,
  `s_fees` varchar(5) NOT NULL,
  `s_balance` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_name`, `s_reg`, `s_phno`, `s_sem`, `s_comb`, `s_pass`, `s_fees`, `s_balance`) VALUES
('manga', '20b19047', 2147483647, '6 SEM', 'BBM', 'kothi1234', '3000', 0),
('megha', '20b19052', 2147483647, '5', 'bca', 'megha1', '2000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblfiles`
--

CREATE TABLE `tblfiles` (
  `FileName` varchar(2000) NOT NULL,
  `Location` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblfiles`
--

INSERT INTO `tblfiles` (`FileName`, `Location`) VALUES
('megah', 'Uploaded_Files/03032023095210Chapter-1- Intro-2022.pdf'),
('se', 'Uploaded_Files/06032023060532Screenshot (14).png');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_name` varchar(30) NOT NULL,
  `t_phno` varchar(50) NOT NULL,
  `t_address` varchar(250) NOT NULL,
  `t_dept` varchar(250) NOT NULL,
  `t_pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_name`, `t_phno`, `t_address`, `t_dept`, `t_pass`) VALUES
('likhitha', '7795278491', 'tmk', 'bca', '123456'),
('manjunath', '987654322', 'tumakuru', 'bca', 'manju1123'),
('megha', '345678908', 'tmk', 'bcom', 'megha123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_name`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD UNIQUE KEY `msg` (`msg`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_reg`);

--
-- Indexes for table `tblfiles`
--
ALTER TABLE `tblfiles`
  ADD UNIQUE KEY `FileName` (`FileName`) USING HASH;

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
