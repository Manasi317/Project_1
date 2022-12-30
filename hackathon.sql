-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 08:12 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` varchar(50) NOT NULL,
  `answers` varchar(50) NOT NULL,
  `ans_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answers`, `ans_id`) VALUES
('1', 'Press brake and then clutch', '1'),
('2', 'Press brake and clutch at a time', '1'),
('3', 'Press clutch and then brake', '1'),
('7', '33.2', '3'),
('8', '20', '3'),
('9', '10', '3'),
('4', 'Easy recognition', '2'),
('5', 'Sufficient time for driver', '2'),
('6', 'Traffic population', '2');

-- --------------------------------------------------------

--
-- Table structure for table `answer_survey`
--

CREATE TABLE `answer_survey` (
  `aid` varchar(50) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `qid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` varchar(50) NOT NULL,
  `question` varchar(200) NOT NULL,
  `ans_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
('1', 'The safe way to stop the vehicle is:', '1'),
('2', 'The various regulations imposed through the traffic control devices', '6'),
('3', 'What is the average distance travelled by a vehicle moving at a speed of 72 KM per hr in 1 second?(in meters)', '8');

-- --------------------------------------------------------

--
-- Table structure for table `survey_ques`
--

CREATE TABLE `survey_ques` (
  `qid` varchar(200) NOT NULL,
  `question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_ques`
--

INSERT INTO `survey_ques` (`qid`, `question`) VALUES
('1', 'Your-Age'),
('2', 'Do you have licence?'),
('3', 'Gender'),
('4', 'Do you take your earphones out when crossing the road?'),
('5', 'Do you use your mobile phone while walking in the street?'),
('6', 'Have you ever been hit by a moving vehicle due to lack of concentration?'),
('7', 'Do you wear seatbelt while driving?'),
('8', 'As a pedestrian, cyclist, learner driver or driver what would be your preferred place to get online journal road safety information? '),
('9', 'Do you think pedestrian safety is responsibility of:');

-- --------------------------------------------------------

--
-- Table structure for table `tblsurvey`
--

CREATE TABLE `tblsurvey` (
  `ID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `OptionA` varchar(255) NOT NULL,
  `OptionB` varchar(255) NOT NULL,
  `OptionC` varchar(255) NOT NULL,
  `VotedA` int(11) NOT NULL,
  `VotedB` int(11) NOT NULL,
  `VotedC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsurvey`
--

INSERT INTO `tblsurvey` (`ID`, `Question`, `OptionA`, `OptionB`, `OptionC`, `VotedA`, `VotedB`, `VotedC`) VALUES
(1, 'What is your age?', 'below 15', '16-21', '22-35', 3, 2, 4),
(2, 'Do you have license?', 'Learning', 'Provisional', 'None', 7, 4, 2),
(3, 'Do you take earphones out while crossing road?', 'No ', 'Yes', 'Maybe', 4, 2, 3),
(4, 'Have you ever nearly been hit by a moving  vehicle due to lack of concentration?', 'Once', 'More than once', 'Never', 2, 4, 3),
(6, 'As a pedestrian, cyclist, learner driver our driver, what would be your preferred place to get online journal road safety information?', 'website', 'social media', 'mobile app', 6, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(50) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_type` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `u_name`, `u_type`, `u_password`) VALUES
('', '', '', ''),
('1', 'admin', 'A', 'admin'),
('12', 'ram', 'NU', 'ram'),
('15', 'raj', 'A', 'raj'),
('2', 'rajshree', 'NU', 'rajshree'),
('4', 'manasi', 'NU', 'manasi');

-- --------------------------------------------------------

--
-- Table structure for table `user_quiz`
--

CREATE TABLE `user_quiz` (
  `id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `totalques` int(50) NOT NULL,
  `answercorrect` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD KEY `ans_id` (`ans_id`);

--
-- Indexes for table `answer_survey`
--
ALTER TABLE `answer_survey`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `qid` (`qid`),
  ADD KEY `qid_2` (`qid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `survey_ques`
--
ALTER TABLE `survey_ques`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `tblsurvey`
--
ALTER TABLE `tblsurvey`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblsurvey`
--
ALTER TABLE `tblsurvey`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`ans_id`) REFERENCES `questions` (`qid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `answer_survey`
--
ALTER TABLE `answer_survey`
  ADD CONSTRAINT `answer_survey_ibfk_1` FOREIGN KEY (`qid`) REFERENCES `survey_ques` (`qid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
