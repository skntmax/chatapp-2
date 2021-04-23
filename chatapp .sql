-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 08:15 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `msg_table`
--

CREATE TABLE `msg_table` (
  `sn` int(11) NOT NULL,
  `id_username` varchar(50) CHARACTER SET armscii8 NOT NULL,
  `msg` text NOT NULL,
  `ip` varchar(10) CHARACTER SET armscii8 NOT NULL,
  `time` varchar(10) CHARACTER SET armscii8 NOT NULL,
  `pic` varchar(200) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msg_table`
--

INSERT INTO `msg_table` (`sn`, `id_username`, `msg`, `ip`, `time`, `pic`) VALUES
(305, 'aksingh5688196@outlook.com', 'heyyyy', '::1', '13:13:46', ''),
(306, 'aksingh5688196@outlook.com', 'sayy budyy ', '::1', '0:40:3', ''),
(307, 'skntjee@gmail.com', 'aree bhai sb chl rha hai bs ', '::1', '14:56:14', ''),
(308, 'skntjee@gmail.com', 'say about yourself ?', '::1', '14:56:25', ''),
(309, 'aksingh5688196@outlook.com', 'abe chal nikal ', '::1', '1:15:3', ''),
(310, 'skntjee@gmail.com', 'pehle tu nikal ', '::1', '2:57:1', ''),
(311, 'aksingh5688196@outlook.com', 'abe jaa be bhikhaari ', '::1', '2:57:15', ''),
(312, 'skntjee@gmail.com', 'pehle tu jaa ', '::1', '2:57:29', ''),
(313, 'aksingh5688196@outlook.com', 'sb shi hai bhaaya ', '::1', '12:58:24', ''),
(314, 'aksingh5688196@outlook.com', 'class gye the ', '::1', '13:3:27', ''),
(315, 'aksingh5688196@outlook.com', '?', '::1', '13:3:52', ''),
(316, 'skntjee@gmail.com', 'naa aaj to band than n ?', '::1', '13:51:49', ''),
(317, 'skntjee@gmail.com', 'areee nhi nhi kl band hai', '::1', '16:29:49', ''),
(318, 'aksingh5688196@outlook.com', 'oooo accha', '::1', '16:30:10', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `sn` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `email` text CHARACTER SET armscii8 NOT NULL,
  `pass` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `mobile` int(10) NOT NULL,
  `profile_dp` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `code` mediumint(9) NOT NULL,
  `status` varchar(20) NOT NULL,
  `last_seen` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`sn`, `username`, `email`, `pass`, `mobile`, `profile_dp`, `code`, `status`, `last_seen`) VALUES
(238, 'skntmax2', 'skntjee@gmail.com', '$2y$10$wkc00p5v3AKsRLhGPjUpnuId9y/TOALlqScGPEudgbny6CgbjJUpG', 2147483647, './../login/images/IMG_20180331_215830.jpg', 0, 'verified', 1619089172),
(251, 'ashish85', 'aksingh5688196@outlook.com', '$2y$10$xEkWSjQbdlMJKgsaHmpvgu2yLQawH/OE/IlewTqwaTyHjoNQsR6ii', 2147483647, './../login/images/pp.jpg', 477150, 'verified', 1619200862),
(254, 'bhavesh99', 'skntmax@gmail.com', '$2y$10$oDL7P.ZTjo0SFtzJ2OTqeeB.n/ntoHNyZO6oEtDb.HkQr3I8qLdye', 0, './../images/profile_img/default_user.png', 889523, 'not verified', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 526446117, 'shashi ', 'kant ', 'skntjee@gmail.com', 'd74f4bd93f0919ee38578b1be06071bd', '1618383500shashi phot.jpg', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `msg_table`
--
ALTER TABLE `msg_table`
  ADD PRIMARY KEY (`sn`);
ALTER TABLE `msg_table` ADD FULLTEXT KEY `msg` (`msg`);
ALTER TABLE `msg_table` ADD FULLTEXT KEY `ip` (`ip`);
ALTER TABLE `msg_table` ADD FULLTEXT KEY `time` (`time`);
ALTER TABLE `msg_table` ADD FULLTEXT KEY `username` (`id_username`);
ALTER TABLE `msg_table` ADD FULLTEXT KEY `pic` (`pic`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`sn`);
ALTER TABLE `userdata` ADD FULLTEXT KEY `username` (`username`);
ALTER TABLE `userdata` ADD FULLTEXT KEY `email` (`email`);
ALTER TABLE `userdata` ADD FULLTEXT KEY `pass` (`pass`);
ALTER TABLE `userdata` ADD FULLTEXT KEY `profile_dp` (`profile_dp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `msg_table`
--
ALTER TABLE `msg_table`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
