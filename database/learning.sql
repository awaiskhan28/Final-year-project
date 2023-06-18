-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 01:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_record`
--

CREATE TABLE `academic_record` (
  `record_id` int(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `filename` varchar(300) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `course` varchar(50) NOT NULL,
  `s_id` int(50) NOT NULL,
  `t_id` int(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `conversation_id` int(11) NOT NULL,
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `objective`
--

CREATE TABLE `objective` (
  `obj_id` int(50) NOT NULL,
  `caption` varchar(28) NOT NULL,
  `type` varchar(50) NOT NULL,
  `duedate` date NOT NULL,
  `file` varchar(50) NOT NULL,
  `t_id` int(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `s_id` int(50) NOT NULL,
  `completed` int(20) NOT NULL,
  `Completed_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `major` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `fname`, `email`, `studentid`, `major`, `password`) VALUES
(7, 'test', 'test@gmail.com', '123', 'computer science', '$2y$10$16KAmZxb4xBQ.9lESBc.E.969hpG7VcwZ3UPBjuBTWq4px0dAxyLK');

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `after_insert_students` AFTER INSERT ON `students` FOR EACH ROW INSERT INTO users (user_id, name, username, password, last_seen)
VALUES (NEW.s_id, NEW.fname, NEW.email, NEW.password, NOW())
ON DUPLICATE KEY UPDATE name=NEW.fname, username=NEW.email, password=NEW.password, last_seen=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `major` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `fname`, `email`, `major`, `course`, `password`) VALUES
(20004, 'instructor', 'teacher@gmail.com', 'computer science  ', 'server', '$2y$10$16KAmZxb4xBQ.9lESBc.E.969hpG7VcwZ3UPBjuBTWq4px0dAxyLK');

--
-- Triggers `teacher`
--
DELIMITER $$
CREATE TRIGGER `after_insert_teacher` AFTER INSERT ON `teacher` FOR EACH ROW INSERT INTO users (user_id, name, username, password, last_seen)
VALUES (NEW.t_id, NEW.fname, NEW.email, NEW.password, NOW())
ON DUPLICATE KEY UPDATE name=NEW.fname, username=NEW.email, password=NEW.password, last_seen=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `last_seen` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `major`, `last_seen`) VALUES
(7, 'test', 'test@gmail.com', '$2y$10$16KAmZxb4xBQ.9lESBc.E.969hpG7VcwZ3UPBjuBTWq4px0dAxyLK', 'computer science', '2023-05-05 00:05:39'),
(20004, 'instructor', 'teacher@gmail.com', '$2y$10$16KAmZxb4xBQ.9lESBc.E.969hpG7VcwZ3UPBjuBTWq4px0dAxyLK', 'server', '2023-05-09 02:22:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_record`
--
ALTER TABLE `academic_record`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `objective`
--
ALTER TABLE `objective`
  ADD PRIMARY KEY (`obj_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_record`
--
ALTER TABLE `academic_record`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `objective`
--
ALTER TABLE `objective`
  MODIFY `obj_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
