-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 02:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `fname`, `name`) VALUES
(2, '20210422074627_Flow-Chart-of-E-learning-Application-Design.png', 'Flow-Chart-of-E-learning-Application-Design.png'),
(3, '20210422074709_Flow-Chart-of-E-learning-Application-Design.png', 'Flow-Chart-of-E-learning-Application-Design_2.png'),
(4, '20210422074947_office dashboard.docx', 'office dashboard.docx'),
(5, '20210422075522_php_-_file_upload_usng_pdo.zip', 'php_-_file_upload_usng_pdo.zip'),
(6, '20210422075700_log sample.zip', 'log sample.zip'),
(7, '20210422081435_fullcopy.rar', 'fullcopy.rar'),
(8, '20210422081506_fullcopy.rar', 'fullcopy_2.rar'),
(9, '20210422082520_fullcopy.rar', 'fullcopy_3.rar'),
(10, '20210422082539_FX_FINISH.zip', 'FX_FINISH.zip'),
(11, '20210422085436_FX Bus Management System-1.pptx', 'FX Bus Management System-1.pptx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
