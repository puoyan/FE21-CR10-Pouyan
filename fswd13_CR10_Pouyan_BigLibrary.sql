-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 14, 2021 at 05:54 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fswd13_CR10_Pouyan_BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `fswd13_CR10_Pouyan_BigLibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fswd13_CR10_Pouyan_BigLibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `big_library`
--

CREATE TABLE `big_library` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author_first_name` varchar(255) DEFAULT NULL,
  `author_last_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `publisher_name` varchar(255) DEFAULT NULL,
  `publisher_address` varchar(255) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `isbn_code` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `big_library`
--

INSERT INTO `big_library` (`id`, `type`, `title`, `author_first_name`, `author_last_name`, `image`, `short_description`, `publisher_name`, `publisher_address`, `publish_date`, `isbn_code`, `status`) VALUES
(2, 'DVD', 'Barbapapa', 'Talus ', 'Taylor ', 'barbapapa.png', 'Barbapapa Coloring Book: 50+ Coloring Pages. ', 'radio Munich', '11, rue de Sèvres75006 ParisTél : 01 42 22 94 10', '1970-08-01', 287881, 'Reserved'),
(3, 'DVD', 'Master Eder and his Pumuckl', ' Ellis', 'Kaut', 'pumuckl.jpeg', '`z`zzz', '', 'Münchenstrasee,12 60123 , Munich Germany', '1961-05-01', 357020880, '357020880'),
(7, 'book ', 'CRIME AND PUNISHMENT', 'Fyodor ', 'Dostoevsky ', 'crime.jpg', 'ss a novel by the 19th-century', 'london pb', 'londonstreet 12, london, England', '2021-04-16', 1400079985, 'Available'),
(8, 'BOOK', 'War and Peace', 'Leo', 'Tolstoy', '/tolstoy.jpeg', 'novel', 'london pb', 'Münchenstrasee,12 60123 , Munich Germany', '2001-02-12', 12345, 'Available'),
(9, 'book ', 'Animal Farm', 'George ', 'Orwell', 'farm.jpeg', 'nimal Farm remains our great satire on the darker face of modern history', 'farmpub', 'farmpublishstreet 12 , linz Austria', '1987-02-12', 123123567, 'Reserved'),
(10, 'BOOK', 'The Complete Stories', 'Franz ', 'Kafka', 'kafka.jpeg', 'The Complete Stories brings together all of Kafka’s stories, from the classic tales such as “The Metamorphosis,', 'kafkapublisher', 'kafkastreet 12,12, berlin germany', '1977-04-12', 12356778, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `big_library`
--
ALTER TABLE `big_library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `big_library`
--
ALTER TABLE `big_library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
