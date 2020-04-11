-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 03:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `like-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `author` varchar(25) NOT NULL,
  `content` text NOT NULL,
  `created_on` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `author`, `content`, `created_on`) VALUES
(3, 'My First Post', 'Bin Emmanuel', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem iusto molestias eaque minus et sed voluptate ratione ipsam nobis unde, pariatur quam similique eos aut in possimus dicta ipsum quasi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem iusto molestias eaque minus et sed voluptate ratione ipsam nobis unde, pariatur quam similique eos aut in possimus dicta ipsum quasi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem iusto molestias eaque minus et sed voluptate ratione ipsam nobis unde, pariatur quam similique eos aut in possimus dicta ipsum quasi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem iusto molestias eaque minus et sed voluptate ratione ipsam nobis unde, pariatur quam similique eos aut in possimus dicta ipsum quasi.', '2020-04-05 12:21:11'),
(4, 'PHP Tutorial', 'Bin Emmanuel', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem iusto molestias eaque minus et sed voluptate ratione ipsam nobis unde, pariatur quam similique eos aut in possimus dicta ipsum quasi.', '2020-04-05 12:21:29'),
(5, 'RegX', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem iusto molestias eaque minus et sed voluptate ratione ipsam nobis unde, pariatur quam similique eos aut in possimus dicta ipsum quasi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem iusto molestias eaque minus et sed voluptate ratione ipsam nobis unde, pariatur quam similique eos aut in possimus dicta ipsum quasi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem iusto molestias eaque minus et sed voluptate ratione ipsam nobis unde, pariatur quam similique eos aut in possimus dicta ipsum quasi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem iusto molestias eaque minus et sed voluptate ratione ipsam nobis unde, pariatur quam similique eos aut in possimus dicta ipsum quasi.', '2020-04-05 14:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `post_likes`
--

CREATE TABLE `post_likes` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_likes`
--

INSERT INTO `post_likes` (`id`, `user`, `post`) VALUES
(85, 1, 3),
(86, 1, 4),
(108, 2, 3),
(109, 2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_likes`
--
ALTER TABLE `post_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
