-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2023 at 09:33 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mailsend1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `pnumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `name`, `date`, `time`, `pnumber`) VALUES
(1, 'sundarv@gmail.com', 'sathish kumar', '2021-02-23', '7:12 pm', '7904461600'),
(2, 'pandiyan@gmail.com', 'pandiyan', '2020-02-28', '10:10 am', '7904461600'),
(3, 'kumar@gmail.com', 'kumar', '', '', '7904461600'),
(4, 'bala@gmail.com', 'bala', '2021-08-04', '11:46 am', '7904461600'),
(5, 'mani@gmail.com', 'mani', '2020-02-28', '1:33 pm', '7904461600'),
(6, '', '', '', '', ''),
(7, 'callinfo.net@gmail.com', 'sathish kumar', '2020-03-04', '9:44 am', '7904461600'),
(8, 's@gmail.com', 'sathish kumar', '2020-03-13', '7:36 pm', '7904461600'),
(9, 'sdrft@gmail.com', 'sathis', '', '', '7904461600'),
(3, 'fantazysolution@gmail.com', 'fantasy solution', '2021-01-18', '1:41 pm', '7904461600'),
(4, 'pandiyan123@gmail.com', 'pandiayn', '2021-02-23', '7:10 pm', '7904465600'),
(5, 'k@gmail.com', 'kumar', '', '', '7904461608'),
(6, 'sun@gmail.com', 'sathish kumar', '', '', '7904461600'),
(5, 'sa@gmail.com', 'sathish kumar', '2021-05-05', '11:11 am', '7904461600'),
(6, 'pandiyan1@gmail.com', 'pandiyan', '2021-03-09', '12:38 pm', '7904461600'),
(7, 'mani123@gmail.com', 'mani', '2021-03-19', '1:40 pm', '7904461600'),
(8, 'sampletest@gmail.com', 'sampletest', '2021-03-16', '4:30 pm', '7904461600'),
(9, 'admin@gmail.com', 'admin', '2021-03-19', '1:41 pm', '7904461600'),
(10, 'sam@gmail.com', 'sample', '2021-03-30', '2:40 pm', '7904461600'),
(11, 'sundarv06@gmail.com', 'sampletest', '2021-04-16', '6:35 pm', '7904461602'),
(12, 'admin7@gmail.com', 'kumar', '2021-03-30', '6:13 pm', '7904461602'),
(13, 'bala@gmail.com', 'balakumar', '2021-08-04', '11:46 am', '7904461602'),
(14, 'sathishfantazy@gmail.com', 'Saran', '2021-08-04', '11:44 am', '7904461600');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--


-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repassword` varchar(50) NOT NULL,
  `pnumber` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `diskspace` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `etime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `repassword`, `pnumber`, `location`, `diskspace`, `image`, `email1`, `etime`) VALUES
(5, 'sathish kumar', 'sa@gmail.com', '1234', '1234', '7904461600', 'trichy', '15', '', 'sa@gmail.com', '00:10:10'),
(6, 'pandiyan', 'pandiyan1@gmail.com', '258963', '258963', '7904461600', 'trichy', '15', '1.jpg', 'pandiyan1@gmail.com', '00:07:58'),
(7, 'mani', 'mani123@gmail.com', '852369', '852369', '7904461600', 'trichy', '15', '', 'sundarv06@gmail.com', '00:10:00'),
(8, 'sampletest', 'sampletest@gmail.com', '147852369', '147852369', '7904461600', 'trichy', '15', '', 'sundarv06@gmail.com', '00:09:56'),
(9, 'admin', 'admin@gmail.com', '123456', '123456', '7904461600', 'trichy', '15', '', 'sundarv06@gmail.com', '00:09:37'),
(10, 'sample', 'sam@gmail.com', '123456789', '123456789', '7904461600', 'trichy', '15', '', 'sundarv06@gmail.com', '00:10:54'),
(11, 'sampletest', 'sundarv06@gmail.com', '123456', '123456', '7904461602', 'trichy', '15', '', 'sundarv06@gmail.com', '00:09:36'),
(12, 'kumar', 'admin7@gmail.com', '123456', '123456', '7904461602', 'trichy', '15', '', 'sundarv06@gmail.com', '00:07:23'),
(13, 'balakumar', 'bala@gmail.com', '123456', '123456', '7904461602', 'trichy', '15', '', 'bala@gmail.com', '00:09:36'),
(14, 'Saran', 'sathishfantazy@gmail.com', '123', '123', '7904461600', 'trichy', '10', '', 'sathishfantazy@gmail.com', '00:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `sentmail`
--

CREATE TABLE `sentmail` (
  `id` int(50) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `rid` varchar(50) NOT NULL,
  `sendername` varchar(50) NOT NULL,
  `recivername` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `contant` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `rstatus` varchar(50) NOT NULL,
  `sdate` varchar(20) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `key` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sentmail`
--

INSERT INTO `sentmail` (`id`, `sid`, `rid`, `sendername`, `recivername`, `subject`, `file`, `contant`, `type`, `size`, `status`, `rstatus`, `sdate`, `mail`, `key`) VALUES
(0, '$sid', '$rid', '$sname', '$rname', '$subject', '$fname', '$message', '$file_type', '$file_size', '0', '0', '$now', '$email', '$key'),
(1, '1', '2', 'sathish kumar', 'pandiyan', 'test', 'nbank.sql', 'test', '', '', '0', '1', '2020.02.28', 'sundarv@gmail.com', '8390244'),
(2, '', '1', '', 'sathish kumar', 'hai', 'image.py', 'ettrtr', '', '', '0', '0', '2020.02.28', '', '4061380'),
(3, '', '1', '', 'sathish kumar', 'trt', 'lena_invert.jpg', 'trt', '', '', '0', '0', '2020.02.28', '', '5679340'),
(4, '5', '1', 'mani', 'sathish kumar', 'trt', '221141.jpg', 'rtrt', '', '', '0', '1', '2020.02.28', 'mani@gmail.com', '5983267'),
(5, '5', '1', 'mani', 'sathish kumar', 'test', 'IMG-20200227-WA0027.jpg', 'haiu', '', '', '1', '1', '2020.03.04', 'test@gmail.com', ''),
(6, '5', '', 'mani', '', 'dfghj', 'IMG-20200227-WA0025.jpg', 'dsfghjkl;', '', '', '1', '1', '2020.03.04', 'test@gmail.com', ''),
(7, '8', '', 'sathish kumar', '', 'test', 'bigdata1 (6).sql', 'hai', '', '', '0', '0', '2020.03.13', 's@gmail.com', '6074256'),
(8, '1', '8', 'sathish kumar', 'sathish kumar', 'test', 'nbank (3).sql', 'ttt', '', '', '0', '0', '2020.03.13', 'sundarv@gmail.com', '343631'),
(9, '4', '', 'pandiayn', '', 'sample', 'house_rent.sql', 'test', '', '', '0', '0', '2021.02.23', 'pandiyan123@gmail.com', '6961051'),
(10, '4', '', 'pandiayn', '', 'sample', 'evote.sql', 'test', '', '', '0', '0', '2021.02.23', 'pandiyan123@gmail.com', '7462165'),
(11, '1', '4', 'sathish kumar', 'pandiayn', 'sample', 'ex_input.jpg', 'ttt', '', '', '0', '1', '2021.02.23', 'sundarv@gmail.com', '5067682'),
(12, '4', '', 'pandiayn', '', 'sample', 'ex_output.jpg', 'test', '', '', '0', '0', '2021.02.23', 'pandiyan123@gmail.com', '2425766'),
(13, '6', '', 'pandiyan', '', 'sample', 'company_placement.sql', 'hai', '', '', '0', '0', '2021.03.05', 'pandiyan1@gmail.com', '8362540'),
(14, '5', '6', 'sathish kumar', 'pandiyan', 'sample', '1.jpg', 'test', '', '', '0', '1', '2021.03.05', 'sa@gmail.com', '7692759'),
(15, '7', '6', 'mani', 'pandiyan', 'sss', 'symbo.sql', 'sss', '', '', '0', '1', '2021.03.09', 'mani123@gmail.com', '6901026'),
(16, '8', '7', 'sampletest', 'mani', 'sample', 'Alluvial_31.jpg', 'hai', '', '', '1', '1', '2021.03.16', 'sampletest@gmail.com', '1783688'),
(17, '8', '7', 'sampletest', 'mani', 'sample', 'payment.png', 'sample', '', '', '1', '1', '2021.03.16', 'sampletest@gmail.com', '2478457'),
(18, '9', '7', 'admin', 'mani', 'sample', 'document Sharing.sql', 'sample', '', '', '0', '1', '2021.03.19', 'admin@gmail.com', '2314950'),
(19, '10', '5', 'sample', 'sathish kumar', 'sample', 'crop.docx', 'sample', '', '', '0', '1', '2021.03.30', 'sam@gmail.com', '5365634'),
(20, '12', '5', 'kumar', 'sathish kumar', 'sample', 'ass.docx', 'hai', '', '', '0', '1', '2021.03.30', 'admin7@gmail.com', '2344555'),
(21, '13', '', 'balakumar', '', 'project', 'pms.docx', 'hello', '', '', '0', '0', '2021.04.16', 'bala@gmail.com', '3483673'),
(22, '11', '13', 'sampletest', 'balakumar', 'sample', 'book.docx', 'sample', '', '', '0', '1', '2021.04.16', 'sundarv06@gmail.com', '3757724'),
(23, '14', '13', 'Saran', 'balakumar', 'sample', 'download.png', '123 hai', '', '', '0', '1', '2021.08.04', 'sathishfantazy@gmail.com', '1324401');

-- --------------------------------------------------------

--
-- Table structure for table `spam`
--

CREATE TABLE `spam` (
  `id` int(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `contant` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spam`
--

INSERT INTO `spam` (`id`, `mail`, `contant`) VALUES
(1, 'sundarv0@gmail.com', 'test'),
(2, 'sundar09@gmail.com', 'Promotions'),
(3, 'sundar123@gmail.com', 'Promotions'),
(4, 'sundar@gmail.com', 'Social'),
(5, 'face@gmail.com', 'Social'),
(6, 'test@gmail.com', 'advertisement');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `etime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`name`, `address`, `etime`) VALUES
('sundar', 'trichy', '00:00:00');
