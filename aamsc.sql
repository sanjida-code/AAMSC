-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 03:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aamsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `SL` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `reference` varchar(255) NOT NULL,
  `particulars` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `Amount_BDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`SL`, `payment_date`, `reference`, `particulars`, `payment_mode`, `Amount_BDT`) VALUES
(6, '2021-06-23', ' Counter-3', ' salary', ' cash', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `ac_calender`
--

CREATE TABLE `ac_calender` (
  `SL` int(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ac_calender`
--

INSERT INTO `ac_calender` (`SL`, `image`) VALUES
(2, 0x7363686f6f6c382e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `SL` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `image` blob NOT NULL,
  `username` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `payment_date` varchar(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `particulars` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `Amount_BDT` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`SL`, `id_number`, `image`, `username`, `id`, `birth_date`, `email`, `address`, `gender`, `phone`, `password`, `payment_date`, `reference`, `particulars`, `payment_mode`, `Amount_BDT`) VALUES
(1, 4001, 0x53616e6a6964615f416b7465722e6a7067, 'Sanjida Akter', 4444444, '2021-05-31', 'sanjidamun669@gmail.com', '337/A\r\ntitpapara', 'female', 1643393066, 'Sanjida@77', '2021-07-14', ' Counter-2', ' salary', ' cash', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `admission_apply`
--

CREATE TABLE `admission_apply` (
  `SL` int(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `username` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_apply`
--

INSERT INTO `admission_apply` (`SL`, `cname`, `image`, `username`, `mname`, `fname`, `birth_date`, `email`, `gender`, `address`, `phone`) VALUES
(1, ' six', 0x53616e6a6964615f416b7465722e6a7067, ' Sanjida', ' Jesmin', ' Kabir', '2021-07-22', 'sanjidamun669@gmail.com', 'female', '337/A\r\ntitpapara', 1643393066),
(2, '', '', '', '', '', '0000-00-00', '', '', '', 0),
(3, '', '', '', '', '', '0000-00-00', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admission_circular`
--

CREATE TABLE `admission_circular` (
  `SL` int(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_circular`
--

INSERT INTO `admission_circular` (`SL`, `image`) VALUES
(1, 0x7363686f6f6c332e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `admission_result`
--

CREATE TABLE `admission_result` (
  `SL` int(11) NOT NULL,
  `class_name` varchar(11) NOT NULL,
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_result`
--

INSERT INTO `admission_result` (`SL`, `class_name`, `id`, `student_name`) VALUES
(1, ' six', 20001, ' Sanjida Ak');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'sanjida mun', 'sanjidamun669@gmail.com', 'test', 'hello'),
(2, ' mun', 'sanjidamun669@gmail.com', 'test2', 'hello world'),
(3, 'sanjida mun', 'sanjidamun669@gmail.com', 'test', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `exam_routine`
--

CREATE TABLE `exam_routine` (
  `SL` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `subject` varchar(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_routine`
--

INSERT INTO `exam_routine` (`SL`, `time`, `class_name`, `subject`, `date`) VALUES
(1, '10.00-1.00', 'six', 'Bangla', '2021-07-01'),
(2, ' 10.00-1.00', ' six', ' Math', '2021-07-02'),
(3, ' 11-12', ' ten', ' bangla', '2021-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `jsc_result`
--

CREATE TABLE `jsc_result` (
  `SL` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `result` int(255) NOT NULL,
  `year` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jsc_result`
--

INSERT INTO `jsc_result` (`SL`, `name`, `id`, `result`, `year`) VALUES
(1, 'Sanjida Akter', 20001, 5, 2014);

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `SL` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `time` varchar(11) NOT NULL,
  `class1` varchar(11) NOT NULL,
  `class2` varchar(11) NOT NULL,
  `class3` varchar(11) NOT NULL,
  `class4` varchar(11) NOT NULL,
  `break` varchar(11) NOT NULL,
  `class5` varchar(11) NOT NULL,
  `class6` varchar(11) NOT NULL,
  `class7` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`SL`, `class_name`, `time`, `class1`, `class2`, `class3`, `class4`, `break`, `class5`, `class6`, `class7`) VALUES
(1, 'Class', 'Time', '9.00-10.00', '10.00-11.00', '11.00-12.00', '12.00-1.00', 'Break', '2.00-3.00', '3.00-4.00', '4.00-5.00'),
(2, 'Six', 'Sat', 'Bangla(AH)', 'English(BH)', 'Math(CH)', 'BGS(DH)', 'Break', 'Science(EA)', 'Religous(FH', 'ICT(GA)'),
(3, 'Seven', 'Sun', 'English(BH)', 'Math(CH)', 'BGS(DH)', 'Science(EA)', 'BK', 'Religous(FH', 'ICT(GA)', 'Bangla(AH)'),
(4, 'Eight', 'Mon', 'Math(CH)', 'BGS(DH)', 'Science(EA)', 'Religous(FH', 'BK', 'ICT(GA)', 'Bangla(AH)', 'English(BH)'),
(5, 'Nine', 'Tue', 'BGS(DH)', 'Science(EA)', 'Religous(FH', 'ICT(GA)', 'BK', 'Bangla(AH)', 'English(BH)', 'Math(CH)'),
(6, 'Ten', 'wed', 'bangla', 'eng', 'Math(CH)', 'ict', 'Break', 'islam', 'bs', 'sceience');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id_number` int(255) NOT NULL,
  `search` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id_number`, `search`) VALUES
(1, 'photo'),
(2, 'video'),
(3, 'contact'),
(4, 'payment'),
(5, 'admission circular'),
(6, 'admission apply'),
(7, 'admission result'),
(8, 'principal'),
(9, 'teachers'),
(10, 'history'),
(11, 'academic calender'),
(12, 'syllabus'),
(13, 'class routine'),
(14, 'exam routine'),
(15, 'dress code'),
(16, 'jsc result'),
(17, 'ssc result'),
(18, 'library'),
(19, 'video tutorial');

-- --------------------------------------------------------

--
-- Table structure for table `ssc_result`
--

CREATE TABLE `ssc_result` (
  `SL` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `result` int(255) NOT NULL,
  `year` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ssc_result`
--

INSERT INTO `ssc_result` (`SL`, `name`, `id`, `result`, `year`) VALUES
(1, 'Abida', 20001, 5, 2011),
(2, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff_register`
--

CREATE TABLE `staff_register` (
  `SL` int(255) NOT NULL,
  `id_number` int(11) NOT NULL,
  `image` blob NOT NULL,
  `username` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `payment_date` varchar(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `particulars` varchar(26) NOT NULL,
  `payment_mode` varchar(55) NOT NULL,
  `Amount_BDT` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_register`
--

INSERT INTO `staff_register` (`SL`, `id_number`, `image`, `username`, `id`, `birth_date`, `email`, `address`, `gender`, `phone`, `password`, `payment_date`, `reference`, `particulars`, `payment_mode`, `Amount_BDT`) VALUES
(1, 3001, 0x53616e6a6964615f416b7465722e6a7067, 'Sanjida Akter', 274823463, '2021-05-31', 'sanjidamun669@gmail.com', '337/A\r\ntitpapara', 'female', 1643393066, 'Sanjida@77', '2021-07-07', ' Counter-2', ' salary', ' cash', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE `student_register` (
  `SL` int(11) NOT NULL,
  `id_number` int(255) NOT NULL,
  `image` blob NOT NULL,
  `username` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `payment_date` varchar(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `particulars` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `Amount_BDT` int(255) NOT NULL,
  `class_name` varchar(11) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `bangla` int(255) NOT NULL,
  `english` int(255) NOT NULL,
  `math` int(255) NOT NULL,
  `science` int(255) NOT NULL,
  `bgs` int(255) NOT NULL,
  `religous` int(255) NOT NULL,
  `ict` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_register`
--

INSERT INTO `student_register` (`SL`, `id_number`, `image`, `username`, `id`, `birth_date`, `email`, `address`, `gender`, `phone`, `password`, `payment_date`, `reference`, `particulars`, `payment_mode`, `Amount_BDT`, `class_name`, `exam_name`, `bangla`, `english`, `math`, `science`, `bgs`, `religous`, `ict`) VALUES
(0, 20002, 0x7363686f6f6c32372e6a7067, 'Tamim', 2147483647, '2021-10-01', 'Tamim669@gmail.com', '337/A\r\ntitpapara', 'male', 1643393066, 'Tamim@77', ' 04-09-2021', ' Counter-2', 'Fee', ' cash', 8000, ' six', 'Half-Year-Final ', 78, 0, 0, 0, 0, 0, 0),
(1, 20001, 0x53616e6a6964615f416b7465722e6a7067, 'Sanjida Akter', 2222222, '2021-05-31', 'sanjidamun669@gmail.com', '337/A\r\ntitpapara', 'female', 1643393066, 'Sanjida@77', ' 04-09-2021', ' Counter-2', ' tution fee', ' cash', 5000, ' six', 'Half-Year-Final ', 88, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `SL` int(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`SL`, `image`) VALUES
(1, 0x7363686f6f6c32382e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `SL` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `image` blob NOT NULL,
  `username` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `payment_date` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `particulars` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `Amount_BDT` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`SL`, `id_number`, `image`, `username`, `id`, `birth_date`, `email`, `address`, `gender`, `phone`, `password`, `payment_date`, `reference`, `particulars`, `payment_mode`, `Amount_BDT`) VALUES
(1, 1001, 0x53616e6a6964615f416b7465722e6a7067, 'Sanjida Akter', 7689877, '2021-07-14', 'sanjidamun669@gmail.com', '337/A\r\ntitpapara', 'female', 1643393066, 'Sanjida@77', '2021-07-14', ' Counter-2', ' salary', ' cash', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_name`, `location`) VALUES
(1, '201809201537405659', 'video/201809201537405659.mp4'),
(2, '201809201537406869', 'video/201809201537406869.mp4'),
(3, '202107231626981308', 'video/202107231626981308.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `ac_calender`
--
ALTER TABLE `ac_calender`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `admission_apply`
--
ALTER TABLE `admission_apply`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `admission_circular`
--
ALTER TABLE `admission_circular`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `admission_result`
--
ALTER TABLE `admission_result`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jsc_result`
--
ALTER TABLE `jsc_result`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `ssc_result`
--
ALTER TABLE `ssc_result`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `staff_register`
--
ALTER TABLE `staff_register`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `student_register`
--
ALTER TABLE `student_register`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ac_calender`
--
ALTER TABLE `ac_calender`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `id_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4003;

--
-- AUTO_INCREMENT for table `admission_apply`
--
ALTER TABLE `admission_apply`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admission_circular`
--
ALTER TABLE `admission_circular`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_result`
--
ALTER TABLE `admission_result`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jsc_result`
--
ALTER TABLE `jsc_result`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id_number` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ssc_result`
--
ALTER TABLE `ssc_result`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_register`
--
ALTER TABLE `staff_register`
  MODIFY `id_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3003;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20002;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
