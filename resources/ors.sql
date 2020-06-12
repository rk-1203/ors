-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2017 at 12:13 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ors`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`username`, `password`) VALUES
('admin', 'ec3f6f85da61f967351dea7821020a30');

-- --------------------------------------------------------

--
-- Table structure for table `Applied`
--

CREATE TABLE IF NOT EXISTS `Applied` (
  `student_id` varchar(11) NOT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Applied`
--

INSERT INTO `Applied` (`student_id`, `job_id`) VALUES
('2015UCP1622', 1),
('2015ucp1509', 2),
('2015ucp1715', 1),
('2015ucp1715', 23),
('2015ucp1509', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Company_details`
--

CREATE TABLE IF NOT EXISTS `Company_details` (
  `website` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(30) NOT NULL,
  `profile` varchar(30) NOT NULL,
  `offerings` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `HRname` varchar(30) NOT NULL,
  PRIMARY KEY (`website`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Company_details`
--

INSERT INTO `Company_details` (`website`, `password`, `name`, `profile`, `offerings`, `city`, `address`, `HRname`) VALUES
('www.abc.com', '12345678', 'Twitter', 'Software', 'International', 'Jaipur', 'Jaipur', 'Ritesh'),
('www.fb.com', '12345678', 'Facebook', 'Software', 'International', 'California', 'California', 'Joseph'),
('www.fbo.com', 'Face@123', 'fb', 'software', 'Domestic', 'US', 'US', 'abc'),
('www.google.com', '123456789', 'Google', 'Software', 'International', 'NewYork', 'USA', 'Pawan Kumar'),
('www.linkedin.com', '147258369', 'LinkedIn', 'software', 'Domestic', 'jaipur', 'mnit', 'Alan Musk'),
('www.nik.com', '12345678', 'Mystory', 'software', 'Domestic', 'Mumbai', 'Ram Nagar , Mumbai', 'Naresh'),
('www.quora.com', '123456789', 'Quora', 'Web Development', 'Domestic', 'Jaipur', 'India', 'Ritesh'),
('www.youtube.com', '123456789', 'Youtube', 'Software', 'International', 'California', 'California', 'Rishabh');

-- --------------------------------------------------------

--
-- Table structure for table `HR_details`
--

CREATE TABLE IF NOT EXISTS `HR_details` (
  `HRname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `linkedin` varchar(30) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HR_details`
--

INSERT INTO `HR_details` (`HRname`, `email`, `contact`, `linkedin`) VALUES
('Ritesh', 'abc@gmail.com', '7894561230', 'abc@linkedin.com'),
('abc', 'abc@xyz.com', '8787878787', 'adsd@gddf.com'),
('Alan Musk', 'abcd@gmail.com', '7894561230', 'abc@linkedin.com'),
('Joseph', 'jkm@fb.com', '7878787878', 'jkm@linkedin.com'),
('Rishabh', 'mrish@yt.com', '9999999999', 'mrish@linkedin.in'),
('Naresh', 'nikku@gmail.com', '9856714778', 'nikku@linkedin.com'),
('Pawan Kumar', 'pawan@gmail.com', '9856321475', 'pawan@linkedin.com'),
('Ritesh', 'riteshkumar1203@gmail.com', '1245789630', 'rk1203@linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `Jobs`
--

CREATE TABLE IF NOT EXISTS `Jobs` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(30) NOT NULL,
  `profile` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `limits` int(11) NOT NULL,
  `cgpa` double NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `Jobs`
--

INSERT INTO `Jobs` (`job_id`, `company`, `profile`, `type`, `limits`, `cgpa`) VALUES
(1, 'www.quora.com', 'queries', 'intern', 5, 7),
(2, 'www.youtube.com', 'software', 'ftt', 4, 7.5),
(4, 'www.youtube.com', 'software', 'intern', 3, 8),
(19, 'www.fb.com', 'software', 'intern', 0, 7.5),
(20, 'www.abc.com', 'software', 'intern', 0, 7),
(21, 'www.abc.com', 'software', 'ftt', 0, 8),
(22, 'www.fbo.com', 'sft', 'intern', 0, 8),
(23, 'www.nik.com', 'software', 'ftt', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notify` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `notify`, `date`) VALUES
(52, 'Google campus recruitment on 20th Sept 2017', '2017-11-15 08:57:33'),
(53, 'D.E. Shaw result will be released on 25th Sept 2017', '2017-11-15 08:57:33'),
(54, 'SalesForce test on 12th Nov 2017', '2017-11-15 08:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `Placed`
--

CREATE TABLE IF NOT EXISTS `Placed` (
  `student_id` varchar(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Placed`
--

INSERT INTO `Placed` (`student_id`, `job_id`) VALUES
('2015ucp1429', 23),
('2015ucp1551', 19),
('2015ucp1720', 10),
('2016uch1455', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Rejected`
--

CREATE TABLE IF NOT EXISTS `Rejected` (
  `student_id` varchar(32) NOT NULL,
  `job_id` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Results`
--

CREATE TABLE IF NOT EXISTS `Results` (
  `job_id` int(11) NOT NULL,
  `student_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Results`
--

INSERT INTO `Results` (`job_id`, `student_id`) VALUES
(2, '2015ucp1720'),
(4, '2015ucp1720'),
(4, '2015ucp1509'),
(3, '2015ucp1422'),
(11, '2015UCP1622'),
(4, '2015ucp1715');

-- --------------------------------------------------------

--
-- Table structure for table `Student_details`
--

CREATE TABLE IF NOT EXISTS `Student_details` (
  `college_id` char(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `sex` varchar(6) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `X_aggr` double NOT NULL,
  `XII_aggr` double NOT NULL,
  `yop` int(11) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `cg1` double NOT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student_details`
--

INSERT INTO `Student_details` (`college_id`, `password`, `fname`, `mname`, `lname`, `sex`, `email`, `contact_no`, `city`, `address`, `dob`, `X_aggr`, `XII_aggr`, `yop`, `dept`, `cg1`) VALUES
('2015ucp1429', 'ors@dbms123', 'Prince', '', 'Kumar', 'Male', '2015ucp1717@mnit.ac.in', '5165496516', 'Jaipur', 'Malviya Nagar, JLN Marg , MNIT Jaipur', '2017-11-17', 90, 90, 2019, 'Computer Science And Engineering', 8.4),
('2015UCP1447', 'ors@dbms789', 'Prince', '', 'Raj', 'Male', 'princebittu43@gmail.com', '7985665660', 'Jaipur', 'Hostel No-7 (Drona),Malviya National Institute Of Technology', '2017-10-20', 100, 96, 2019, 'Computer Science And Engineering', 8.7),
('2015ucp1509', '7894561230', 'Naresh', 'Kumar', 'Jain', 'Male', 'nikkujain23@gmail.com', '8058593162', 'Jaipur', 'Mnit, jaipur', '1998-07-20', 89, 95, 2019, 'Computer Science And Engineering', 8),
('2015ucp1551', 'Ors@dbms123', 'Sameer', '', 'Kumar', 'Male', 'sameer@gmail.com', '7894561230', 'Jaipur', 'MNIT, Jaipur', '2017-11-07', 88, 88, 2019, 'Computer Science And Engineering', 7.5),
('2015UCP1622', 'Pawan@1997', 'Pawan', '', 'Kumar', 'Male', 'pawan@gmail.com', '8824914416', 'Jaipur', 'hahahah', '1997-07-01', 75, 75, 2019, 'Computer Science And Engineering', 8),
('2015ucp1715', 'ors@dbms456', 'Rishabh', '', 'Mittal', 'Female', 'rmittal03@gmail.com', '9478558455', 'Jaipur', 'Hostel No-7 (Drona),Malviya National Institute Of Technology', '1996-12-11', 100, 100, 2019, 'Computer Science And Engineering', 10),
('2015UCP1727', 'ors@dbms123', 'Ritesh', '', 'Kumar', 'Male', 'riteshkumar300@yahoo.com', '9470466006', 'Patna', 'House No.-173B,Gupta Bhawan,behind RBI,Exhibition road', '1997-03-12', 89.6, 95.4, 2019, 'Computer Science And Engineering', 8.4),
('2015ucp1728', 'Rishabh@123', 'abc', 'abc', 'abc', 'Male', 'abc@xyz.com', '7878787878', 'jpr', 'jpr', '2017-11-02', 80, 80, 2019, 'Computer Science And Engineering', 9),
('2015ucp9999', 'Faltu@123', 'Raj', 'Kumar', 'Sharma', 'Male', 'kraj03@gmail.com', '9898989898', 'Mumbai', '3, Marine Drive, Mumbai', '2017-10-09', 90, 90, 2019, 'Computer Science And Engineering', 9.21),
('2016uch1455', '147852369', 'Rohan', 'K', 'Sharma', 'Male', 'rohan@gmail.com', '7894561230', 'jaipur', 'mnit', '1997-12-16', 85, 90, 2020, 'Chemical Engineering', 8);

-- --------------------------------------------------------

--
-- Table structure for table `temp_Company_details`
--

CREATE TABLE IF NOT EXISTS `temp_Company_details` (
  `website` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(30) NOT NULL,
  `profile` varchar(30) NOT NULL,
  `offerings` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `HRname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `linkedin` varchar(30) NOT NULL,
  PRIMARY KEY (`website`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewApp`
--
CREATE TABLE IF NOT EXISTS `viewApp` (
`Job_id` int(11)
,`Company` varchar(30)
,`Profile` varchar(30)
,`Type` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `viewAppc`
--
CREATE TABLE IF NOT EXISTS `viewAppc` (
`Job_id` int(11)
,`Company` varchar(30)
,`Profile` varchar(30)
,`Type` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `viewappc`
--
CREATE TABLE IF NOT EXISTS `viewappc` (
`job_id` int(11)
,`Company` varchar(30)
,`Profile` varchar(30)
,`Type` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `viewApps`
--
CREATE TABLE IF NOT EXISTS `viewApps` (
`Job_id` int(11)
,`Company` varchar(30)
,`Profile` varchar(30)
,`Type` varchar(30)
);
-- --------------------------------------------------------

--
-- Structure for view `viewApp`
--
DROP TABLE IF EXISTS `viewApp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`ritesh1203`@`%` SQL SECURITY DEFINER VIEW `viewApp` AS select `Applied`.`job_id` AS `Job_id`,`Jobs`.`company` AS `Company`,`Jobs`.`profile` AS `Profile`,`Jobs`.`type` AS `Type` from (`Jobs` join `Applied`) where ((`Applied`.`student_id` = '2015ucp1720') and (`Applied`.`job_id` = `Jobs`.`job_id`));

-- --------------------------------------------------------

--
-- Structure for view `viewAppc`
--
DROP TABLE IF EXISTS `viewAppc`;

CREATE ALGORITHM=UNDEFINED DEFINER=`ritesh1203`@`%` SQL SECURITY DEFINER VIEW `viewAppc` AS select `Jobs`.`job_id` AS `Job_id`,`Jobs`.`company` AS `Company`,`Jobs`.`profile` AS `Profile`,`Jobs`.`type` AS `Type` from `Jobs` where (`Jobs`.`company` = 'www.youtube.com');

-- --------------------------------------------------------

--
-- Structure for view `viewappc`
--
DROP TABLE IF EXISTS `viewappc`;

CREATE ALGORITHM=UNDEFINED DEFINER=`ritesh1203`@`%` SQL SECURITY DEFINER VIEW `viewappc` AS select `Jobs`.`job_id` AS `job_id`,`Jobs`.`company` AS `Company`,`Jobs`.`profile` AS `Profile`,`Jobs`.`type` AS `Type` from `Jobs` where (`Jobs`.`company` = 'www.nik.com');

-- --------------------------------------------------------

--
-- Structure for view `viewApps`
--
DROP TABLE IF EXISTS `viewApps`;

CREATE ALGORITHM=UNDEFINED DEFINER=`ritesh1203`@`%` SQL SECURITY DEFINER VIEW `viewApps` AS select `Applied`.`job_id` AS `Job_id`,`Jobs`.`company` AS `Company`,`Jobs`.`profile` AS `Profile`,`Jobs`.`type` AS `Type` from (`Jobs` join `Applied`) where ((`Applied`.`student_id` = '2015ucp1715') and (`Applied`.`job_id` = `Jobs`.`job_id`));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
