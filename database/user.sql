-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2017 at 04:57 PM
-- Server version: 5.7.17-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` varchar(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `question_id` int(1) NOT NULL,
  `answerx` varchar(100) NOT NULL,
  `ssn` varchar(13) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `address`, `phone`, `email`, `password`, `question_id`, `answerx`, `ssn`, `status`) VALUES
('ID20170411-210622', 'วราภรณ์', 'แม้นศิริ', '64/1 อ. ธวัชบุรี จ. ร้อยเอ็ด', '0816016551', 'varaphon.m@kkumail.com', '265b71836b768c0fa436d427cb03c3f6', 1, 'พฤหัสบดี', '1119600004606', 'member'),
('ID20170415-212252', 'ชบาเงิน', 'ผาสุข', '123 ม.5 ต. หนองผักแว่น อ. ธวัชบุรี จ. ร้อยเอ็ด', '0895120235', 'lazy.yoci11@gmail.com', 'b34e20cb495192d5a0f22567b0acf840', 2, 'มด', '1459900468605', 'member');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
