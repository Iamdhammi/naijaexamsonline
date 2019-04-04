-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2018 at 08:56 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `naijaexams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `subj_id` int(11) NOT NULL,
  `questions` text NOT NULL,
  `options` text NOT NULL,
  `answer` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `passmark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pastquestion`
--

CREATE TABLE `pastquestion` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pastquestion`
--

INSERT INTO `pastquestion` (`id`, `subject`, `file`, `amount`) VALUES
(1, 'yoruba', 'kikk.docx', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `payexams`
--

CREATE TABLE `payexams` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `code` text NOT NULL,
  `nof` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payexams`
--

INSERT INTO `payexams` (`id`, `user_id`, `subject`, `code`, `nof`, `level`) VALUES
(24, 28, 'english', 'kyb', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `file` text NOT NULL,
  `reference` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `email`, `file`, `reference`, `amount`) VALUES
(23, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(24, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(25, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(26, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(27, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(28, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(29, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(30, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(31, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(32, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(33, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(34, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(35, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(36, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(37, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000),
(38, 'joshuaoluikpe@gmail.com', 'kikk.docx', 0, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `user_id`, `level`, `subject`, `score`, `status`) VALUES
(20, 28, 0, '', 0, 1),
(21, 28, 1, 'english', 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`) VALUES
(38, 'mathematics'),
(39, 'englishs'),
(40, 'yoruba'),
(41, 'agric');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `subjects` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(9) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `logged` int(11) NOT NULL,
  `role` text NOT NULL,
  `level` int(11) NOT NULL,
  `image` blob NOT NULL,
  `hash` text NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `subjects`, `email`, `phone`, `password`, `gender`, `logged`, `role`, `level`, `image`, `hash`, `active`) VALUES
(27, 'Abiola', 'Damilola', '', 'ab@gmail.com', 909, '04c6a528bc75310e1b8f9ef5a33188fa', '', 0, 'admin', 0, '', '', 0),
(28, 'Joshuas', 'Oluikpes', 'mathematics,english', 'joshuaoluikpe@gmail.com', 2147483647, '04c6a528bc75310e1b8f9ef5a33188fa', 'male', 0, 'student', 1, '', 'd240e3d38a8882ecad8633c8f9c78c9b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `pastquestion`
--
ALTER TABLE `pastquestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payexams`
--
ALTER TABLE `payexams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pastquestion`
--
ALTER TABLE `pastquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payexams`
--
ALTER TABLE `payexams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
