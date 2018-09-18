-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 07:56 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elitepath`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(8) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Transport', 'transport system'),
(2, 'Health', 'All about your health'),
(4, 'jnkkljkhgjhfjyvnb', 'gcfchgjknl;l\',kmnjbmhgvytfdcfgdzferwsftgyhujkl;mk,nbhgxdf'),
(5, 'sdfxgxzcxvcb', 'asdfghjhkngdxfchvjknl;'),
(6, 'Fashion', 'Ladies Fashion ');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(8) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int(8) NOT NULL,
  `post_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`) VALUES
(2, 'For the best transport, try the airplane.', '2018-08-25 08:53:38', 7, 1),
(3, 'To ensure you have a good health, check up with your doctor regularly.', '2018-08-25 09:10:50', 8, 3),
(4, 'We would take an indepth look at this subject', '2018-08-25 09:29:41', 9, 3),
(5, 'Ulcer is a disturbing alment.', '2018-08-29 00:43:07', 10, 1),
(6, 'dear fiona please repair your system at affordable price..#1,500', '2018-08-29 01:23:58', 11, 1),
(8, 'for the best tranhdsihajkfs', '2018-08-29 03:58:50', 7, 1),
(9, 'lokjhgf', '2018-08-29 04:20:20', 7, 1),
(10, 'nhgfdxgfhjkl;,ljhfcgrdrt', '2018-08-29 04:58:04', 13, 1),
(11, 'gfhjkhihju0p', '2018-08-29 05:02:08', 14, 1),
(12, '', '2018-08-29 05:19:22', 14, 1),
(13, 'dxfzxcgvjhbguyjvghdrdghj,k.mjbhg', '2018-08-29 05:19:48', 11, 1),
(14, 'knuyfyjghbk.l/;o;huyfgthvjbkjl.jo', '2018-08-29 05:20:37', 11, 1),
(15, 'suiog', '2018-08-29 05:29:13', 7, 1),
(16, 'kljhygyhfiuol\';lkjhytrteh', '0000-00-00 00:00:01', 10, 1),
(17, '', '0000-00-00 00:00:01', 13, 1),
(18, '', '0000-00-00 00:00:01', 13, 1),
(19, 'l;kjhgkhyuftfghcvgvjhvv', '0000-00-00 00:00:01', 13, 1),
(20, 'njbgjhgvjhghjgjhfghdfdjhgkj', '0000-00-00 00:00:01', 13, 1),
(21, 'kmnjbghjghjvfgdtruygbjkbhbkjgjh', '0000-00-00 00:00:01', 9, 1),
(22, 'hghfuokjlkhuigivjbvvvvvvvvvvvv', '0000-00-00 00:00:01', 10, 1),
(23, 'njghfgvhjbkjgiughjkb njgvyuvmnn mn', '0000-00-00 00:00:01', 8, 1),
(24, 'm,jhgfdszfxghjkl;lhgfcgsrtdghnm,nlm;ikjhugyjrtfchgbvnm, kmbvcxdxfwgdhfjg', '0000-00-00 00:00:01', 15, 1),
(25, 'ldasjkhjbkcx,./df', '0000-00-00 00:00:01', 10, 2),
(26, ';lkmjbhvcnvm,.kjhbvcfxzdsdcvbnm,.', '0000-00-00 00:00:01', 15, 2),
(27, 'cxvbnvbmfdgxzghjh', '2018-08-30 01:47:49', 16, 5),
(28, 'cxvbnvbmfdgxzghjh', '2018-08-30 01:48:32', 17, 5),
(29, 'sadzfgckl;lm/m.ljhbmvgncbxfdvzdv', '2018-08-30 01:49:55', 18, 5),
(30, 'xzahgcfhzx', '2018-08-30 03:47:41', 9, 5),
(31, 'lkjhgfchjvknlm,', '2018-08-30 03:47:59', 18, 5),
(32, ';[lkjhgfcdxcfgvhbjnm,./', '2018-08-30 03:48:49', 15, 5),
(33, '', '2018-08-30 04:12:12', 7, 5),
(34, '', '2018-08-30 04:13:32', 7, 5),
(35, 'ttyuyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', '2018-08-30 04:16:37', 11, 5),
(36, 'ggggggggggggggggggggggggggggggggggggggggg', '2018-08-30 04:16:56', 15, 5),
(37, 'jshdgzlkhdjsbhjvycbzjbsjhabhjs', '2018-08-30 04:23:55', 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(8) NOT NULL,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`) VALUES
(7, 'The best transport system', '2018-08-25 08:53:38', 1, 1),
(8, 'Health is Wealth', '2018-08-25 09:10:50', 2, 3),
(9, 'Railway Transport System', '2018-08-25 09:29:41', 1, 3),
(10, 'About Ulcer', '2018-08-29 00:43:07', 2, 1),
(11, 'Please repair your pc ', '2018-08-29 01:23:58', 1, 1),
(13, 'hjghjknk', '2018-08-29 04:58:04', 2, 1),
(14, 'kljhukj,', '2018-08-29 05:02:08', 1, 1),
(15, 'lkjhgfjkl./,mnbjhg', '0000-00-00 00:00:01', 4, 1),
(16, '', '2018-08-30 01:47:49', 5, 5),
(17, '', '2018-08-30 01:48:32', 5, 5),
(18, 'zxcvbnkbjvhcgxfzd', '2018-08-30 01:49:55', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(8) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_date` datetime NOT NULL,
  `user_level` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_level`) VALUES
(1, 'fiona', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'fiona@ymail.com', '2018-08-25 03:52:12', 0),
(2, 'Skyangel', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'sky@gmail.com', '2018-08-25 04:13:51', 0),
(3, 'adaugo', '8cb2237d0679ca88db6464eac60da96345513964', 'ada@yahoo.com', '2018-08-25 07:10:19', 0),
(4, 'Okezie', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'okefio@gmail.com', '2018-08-29 23:00:56', 0),
(5, 'Chigozie', 'fea7f657f56a2a448da7d4b535ee5e279caf3d9a', 'chig@ymail.com', '2018-08-29 23:03:36', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name_unique` (`cat_name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_topic` (`post_topic`),
  ADD KEY `post_by` (`post_by`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `topic_cat` (`topic_cat`),
  ADD KEY `topic_by` (`topic_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name_unique` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`post_topic`) REFERENCES `topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`post_by`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`topic_cat`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`topic_by`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
