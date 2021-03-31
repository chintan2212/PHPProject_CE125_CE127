-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 10:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `useraudio`
--

CREATE TABLE `useraudio` (
  `file` varchar(100) NOT NULL,
  `ID` int(20) NOT NULL,
  `UID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraudio`
--

INSERT INTO `useraudio` (`file`, `ID`, `UID`) VALUES
('sampleaudio.mp3', 5, 2),
('sampleaudio2.aac', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `UID` int(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`UID`, `username`, `password`, `email`) VALUES
(1, 'chintan', 'chintan', 'chintan@gmail.com'),
(2, 'kirtan', 'kirtan', 'kirtan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `uservideo`
--

CREATE TABLE `uservideo` (
  `file` varchar(100) NOT NULL,
  `ID` int(8) NOT NULL,
  `UID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uservideo`
--

INSERT INTO `uservideo` (`file`, `ID`, `UID`) VALUES
('samplevideo.mp4', 50, 1),
('samplevideo2.mp4', 51, 1),
('samplevideo2.mp4', 52, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useraudio`
--
ALTER TABLE `useraudio`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `uservideo`
--
ALTER TABLE `uservideo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `useraudio`
--
ALTER TABLE `useraudio`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `UID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uservideo`
--
ALTER TABLE `uservideo`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
