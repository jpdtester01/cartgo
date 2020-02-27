-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 06:42 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onclickexamania`
--

-- --------------------------------------------------------

--
-- Table structure for table `courselist`
--

CREATE TABLE `courselist` (
  `coursename` varchar(50) NOT NULL,
  `rating` int(2) NOT NULL,
  `duration` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courselist`
--

INSERT INTO `courselist` (`coursename`, `rating`, `duration`) VALUES
('Introduction to C', 4, '3 months'),
('Introduction to C++', 4, '3 months'),
('Object Oriented Programming C#', 3, '6 months'),
('Object Oriented Programming JAVA', 3, '6 months'),
('PHP : Hypertext Processor', 5, '6 months');

-- --------------------------------------------------------

--
-- Table structure for table `imglist`
--

CREATE TABLE `imglist` (
  `uname` varchar(30) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imglist`
--

INSERT INTO `imglist` (`uname`, `link`) VALUES
('admin', 'imgFiles/administrator-icon-2.jpg\r\n'),
('asdfg', 'imgFiles/aanonymous.png\r\n'),
('coblermama', 'imgFiles/aanonymous.png'),
('habla', 'imgFiles/aanonymous.png\r\n'),
('jamijoy', 'imgFiles/win pro.jpg\r\n'),
('jamijoyhh', 'imgFiles/aanonymous.png\r\n'),
('jamijoyjami', 'imgFiles/aanonymous.png\r\n'),
('kalamalacala', 'imgFiles/aanonymous.png'),
('knmaksjcnsajs9090', 'imgFiles/aanonymous.png'),
('magar', 'imgFiles/1911676_715142198553490_2705289076766272075_n.jpg'),
('masterthebaap', 'imgFiles/aanonymous.png\r\n'),
('mimnitun', 'imgFiles/aanonymous.png\r\n'),
('minarborobon', 'imgFiles/aanonymous.png\r\n'),
('Mira007', 'imgFiles/aanonymous.png\r\n'),
('nahin2019', 'imgFiles/15123126_1827952230761427_3923097350016892003_o.jpg'),
('nahinuday', 'imgFiles/aanonymous.png\r\n'),
('otalia', 'imgFiles/aanonymous.png\r\n'),
('sagar', 'imgFiles/1911676_715142198553490_2705289076766272075_n.jpg'),
('silly19', 'imgFiles/aanonymous.png\r\n'),
('silly20', 'imgFiles/aanonymous.png\r\n'),
('sonata', 'imgFiles/aanonymous.png'),
('sullycapt', 'imgFiles/aanonymous.png\r\n'),
('talk', 'imgFiles/aanonymous.png\r\n'),
('teacher', 'imgFiles/GetUserImage.jpg'),
('teacher2', 'imgFiles/GetUserImage-hasibsir.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(30) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pass`, `type`, `status`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Active'),
('asdfg', '040b7cf4a55014e185813e0644502ea9', 'Student', 'Active'),
('coblermama', 'a152e841783914146e4bcd4f39100686', 'Student', 'Active'),
('habla', '504e5534cdb823d400d539064197bf8e', 'Student', 'Active'),
('jamijoy', '7815696ecbf1c96e6894b779456d330e', 'Student', 'Active'),
('jamijoyhh', '5e36941b3d856737e81516acd45edc50', 'Student', 'Active'),
('jamijoyjami', '7815696ecbf1c96e6894b779456d330e', 'Student', 'Active'),
('kalamalacala', '25f9e794323b453885f5181f1b624d0b', 'Student', 'Active'),
('knmaksjcnsajs9090', 'c44a471bd78cc6c2fea32b9fe028d30a', 'Teacher', 'Active'),
('magar', '11a7624136ee97ae0f3273fc510c82a4', 'Student', 'Active'),
('masterthebaap', 'eb0a191797624dd3a48fa681d3061212', 'Teacher', 'Active'),
('mimnitun', '8e7f86260c88346052cadd7d68514184', 'Student', 'Active'),
('minarborobon', '3c24b6049df7c1aafa8b571799fc707c', 'Student', 'Active'),
('Mira007', 'cf5bdfb40421ac1f30cc4d45b66b5a81', 'Student', 'Active'),
('nahin2019', 'ad3d990bc1036c62ac1df5623bc011ca', 'Student', 'Active'),
('otalia', '773d4144d4ecaacf24203c8806b465df', 'Student', 'Active'),
('sagar', '11e4c6d861ab7b85b26a5137fbfc860f', 'Student', 'Active'),
('silly19', '8c8a58fa97c205ff222de3685497742c', 'Student', 'Active'),
('silly20', '7b7a53e239400a13bd6be6c91c4f6c4e', 'Teacher', 'Active'),
('sonata', 'af8beff03fe8e62cf614a1f424209bad', 'Student', 'Active'),
('sullycapt', '0f53b43df72f0e3b924ef503d8db2c3e', 'Student', 'Active'),
('talk', '202cb962ac59075b964b07152d234b70', 'Student', 'Active'),
('teacher', '8d788385431273d11e8b43bb78f3aa41', 'Teacher', 'Active'),
('teacher2', 'ccffb0bb993eeb79059b31e1611ec353', 'Teacher', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courselist`
--
ALTER TABLE `courselist`
  ADD PRIMARY KEY (`coursename`);

--
-- Indexes for table `imglist`
--
ALTER TABLE `imglist`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
