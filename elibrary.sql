-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 07:17 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `b_id` bigint(5) UNSIGNED NOT NULL,
  `b_name` varchar(250) NOT NULL,
  `auth_name` varchar(250) NOT NULL,
  `b_img` varchar(250) NOT NULL,
  `description` varchar(300) NOT NULL,
  `count` int(80) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`b_id`, `b_name`, `auth_name`, `b_img`, `description`, `count`, `time`) VALUES
(1, 'Harry Potter', 'J.K. Rowling', '60c0596b3bb8c9.87979193.jpg', 'Harry Potter and the Cursed Child is a 2016 British two-part play written by Jack Thorne based on an original story by J. K. Rowling, John Tiffany, and Thorne. Previews of the play began at the Palace Theatre, London, on 7 June 2016, and it premiered on 30 July 2016.', 33, '2021-06-08 17:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `has_book`
--

CREATE TABLE `has_book` (
  `id` bigint(5) NOT NULL,
  `b_id` bigint(5) UNSIGNED NOT NULL,
  `u_id` int(11) NOT NULL,
  `issue` varchar(250) NOT NULL,
  `retun_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `has_book`
--

INSERT INTO `has_book` (`id`, `b_id`, `u_id`, `issue`, `retun_date`) VALUES
(3, 1, 62, 'history', '2021-06-10 05:40:54'),
(10, 1, 86, 'wishlisted', '2021-06-10 05:40:54'),
(11, 1, 86, 'history', '2021-06-10 05:40:54'),
(13, 1, 86, 'history', '2021-06-10 06:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` bigint(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(250) NOT NULL,
  `password` varchar(80) NOT NULL,
  `role` varchar(11) NOT NULL COMMENT 'Default ''reader'' for reader\r\n''admin'' for admin\r\n',
  `token` varchar(90) NOT NULL,
  `status` varchar(50) NOT NULL,
  `Issued_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `password`, `role`, `token`, `status`, `Issued_date`) VALUES
(62, 'Aman Sharma', 'amand51sharma1999@gmail.com', '$2y$10$gV3WDZxj4bYyTZaMObsnReaiOQ3czf8dP/YSVTrgQUZt4ZzuIk7i2', 'admin', 'c6b6871596015f2171195d8c445c4c', 'active', '2021-05-23 14:18:23'),
(80, 'NN', 'monikaparashar604@gmail.com', '$2y$10$oQBBsldbNqPsV0aMcPuPGucBTJ6nrsye2vVHE2q7I///fPSaevdvi', 'reader', '047c2ecb95bf46553237a8b348ad4d', 'inactive', '2021-05-30 15:14:46'),
(81, 'Him', 'himanshu.852@rediffmail.com', '$2y$10$q064CP.L1SxtnqN91i1blutL7is2xvQZUIT711ftTW90yarB3xTU6', 'reader', '6526b03a545254fc1748efde7e75a3', 'inactive', '2021-05-30 15:16:03'),
(86, 'Narayan', 'ams.18cs12@thdcihet.ac.in', '$2y$10$2menXPmiG/5dwxTpLKRBJ.7IHPMYLETKBN2in2jSgXLKrZN1PQSRm', 'reader', '4ea34c354e743ed8c03211168b08a8', 'active', '2021-06-09 12:50:46'),
(87, 'Aman', 'w@gg.com', '$2y$10$VEyfnZ072Hk3/I6YCnEH8Ow0CfwnbDmrbb9BJYDyUvWT8Zlit162K', 'reader', 'dfecf4a8321821ce6daa5d828d658f', 'inactive', '2021-06-06 16:44:31'),
(88, 'Narayan', 'aman@gmail.com', '$2y$10$uDZgTHYj9VprsDIuS.e1uuPbE0X4n.AHaYzpqPrmTqJGeFXhEjKE.', 'admin', '47078fa23357e6f921082ffd972d5c', 'active', '2021-06-06 16:49:17'),
(90, 'Narayan', 'amans@gmail.com', '$2y$10$.940SfHKYaxZmGq87iNaZuwhGp14YPHZKH0KTNV2r4J3fptMxM3pi', 'admin', '8ea9b5b11f33bdf43e5e3253dad68f', 'inactive', '2021-06-09 11:52:32'),
(91, 'mjj', 'amanss@gmail.com', '$2y$10$Cl905gF7A8Dw5H8edmUDU.ssneMeMILiMbFWnSGXhxwOEj1IFMZuu', 'admin', '9cee1be2de32de0b31214956547b61', 'inactive', '2021-06-09 12:06:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `has_book`
--
ALTER TABLE `has_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `b_id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `has_book`
--
ALTER TABLE `has_book`
  MODIFY `id` bigint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `has_book`
--
ALTER TABLE `has_book`
  ADD CONSTRAINT `b_id` FOREIGN KEY (`b_id`) REFERENCES `books` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
