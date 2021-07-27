-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 02:57 PM
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
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_type` varchar(10) NOT NULL,
  `date_uploaded` varchar(20) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `file_name`, `file_type`, `date_uploaded`, `location`) VALUES
(1, '2019-03-29 03-29-29.jpeg', 'image/jpeg', '2019-09-18', 'upload/2019-03-29 03-29-29.jpeg'),
(2, 'admin flow.docx', 'applicatio', '2021-04-21', '../examples/upload.phpadmin flow.docx'),
(3, 'Coding notes.docx', 'applicatio', '2021-04-21', '../examples/upload.phpCoding notes.docx'),
(4, 'Coding notes.docx', 'applicatio', '2021-04-21', '../examples/upload.phpCoding notes.docx'),
(5, 'event.docx', 'applicatio', '2021-04-21', '../examples/upload.phpevent.docx'),
(6, 'intern.docx', 'applicatio', '2021-04-21', '../Task filesintern.docx'),
(7, 'admin flow.docx', 'applicatio', '2021-04-21', '../Task files/admin flow.docx'),
(8, 'admin flow.docx', 'applicatio', '2021-04-21', '../Task files/admin flow.docx'),
(9, 'Task4 doc.docx', 'applicatio', '2021-04-21', '../Task files/Task4 doc.docx'),
(10, 'floating-login-signup.zip', 'applicatio', '2021-04-22', '../Task files/floating-login-signup.zip'),
(11, 'download (2).txt', 'text/plain', '2021-04-22', '../Task files/download (2).txt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
