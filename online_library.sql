-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 مايو 2023 الساعة 21:55
-- إصدار الخادم: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_library`
--

-- --------------------------------------------------------

--
-- بنية الجدول `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `number_of_copies` varchar(50) NOT NULL,
  `cover_photo` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `note_book` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `books`
--

INSERT INTO `books` (`id`, `book_name`, `author_name`, `isbn`, `number_of_copies`, `cover_photo`, `price`, `note_book`) VALUES
(2, '1`2`', '2', '3', '4', '05232023162541.jfif', '2', '225');

-- --------------------------------------------------------

--
-- بنية الجدول `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `contact_us`
--

INSERT INTO `contact_us` (`id`, `firstname`, `lastname`, `country`, `subject`) VALUES
(1, '2', '5', 'australia', '5');

-- --------------------------------------------------------

--
-- بنية الجدول `decisions`
--

CREATE TABLE `decisions` (
  `id` int(11) NOT NULL,
  `the_decision` text NOT NULL,
  `the_date` date NOT NULL,
  `custom` varchar(50) NOT NULL,
  `no_decisions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `metaphor`
--

CREATE TABLE `metaphor` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `book_number` int(11) NOT NULL,
  `order_time` date NOT NULL,
  `notes` varchar(50) NOT NULL,
  `order_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `metaphor`
--

INSERT INTO `metaphor` (`id`, `user_name`, `book_number`, `order_time`, `notes`, `order_status`) VALUES
(1, 'سيد', 1, '2022-03-26', '', 'طلب'),
(2, 'سيد', 2, '2022-03-26', '', 'طلب'),
(3, 'سيد', 2, '2022-03-26', '', 'طلب'),
(4, 'سيد', 2, '2023-05-10', '', 'طلب'),
(5, 'سيد', 2, '2023-05-10', '', 'طلب'),
(6, 'سيد', 2, '2023-05-23', '', 'طلب');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `phon` varchar(50) NOT NULL,
  `adrees` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time_add` datetime NOT NULL,
  `time_update` datetime NOT NULL,
  `situs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `phon`, `adrees`, `email`, `time_add`, `time_update`, `situs`) VALUES
(1, 'سيد', '12', '0', '2', '000', '2022-03-12 00:00:00', '2023-05-22 23:37:06', 'الادارة'),
(2, 'Arifa', '1', '1', '1', '1', '2022-03-12 13:41:15', '2022-03-12 21:43:58', 'الادارة'),
(3, 'محمود', '123', '050000000', 'الرياض', 'اااhhjjj@.com', '2022-03-12 15:31:17', '2022-03-12 15:33:09', 'طالب');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decisions`
--
ALTER TABLE `decisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metaphor`
--
ALTER TABLE `metaphor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `decisions`
--
ALTER TABLE `decisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `metaphor`
--
ALTER TABLE `metaphor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
