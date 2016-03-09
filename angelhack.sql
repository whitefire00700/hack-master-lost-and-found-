-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2015 at 07:22 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `angelhack`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `name` varchar(30) NOT NULL,
  `mailid` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`name`, `mailid`, `pass`) VALUES
('vyas', 'svyasrao22@gmail.com', 'vyas'),
('vin', 'g.vineethrajj@yahoo.co.in', 'vin'),
('syl', 'whitefire00700@gmail.com', 'syl');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `object` text NOT NULL,
  `description` text NOT NULL,
  `place` text NOT NULL,
  `datee` varchar(10) NOT NULL,
  `eid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`object`, `description`, `place`, `datee`, `eid`) VALUES
('MMX Phone', 'black 5 inch phone', 'ascendas 3 block 9 floor desk 3', '0000-00-00', ''),
('a', 's', 'd', 'f', ''),
('aca', 'caca', 'cacac', 'acac', ''),
('xaxax', 'axax', 'aaxa', '', ''),
('xaxax', 'adad', 'aaxa', '', ''),
('Vineeth', 'tall lean ', 'angel hack ', '28/06/2015', ''),
('axa', 'xaxa', 'xaxax', 'aaaaa', ''),
('axa', 'xaxa', 'xaxax', 'aaaaa', ''),
('axa', 'xaxa', 'xaxax', 'aaaaa', ''),
('oorundai ', 'round ', 'angelhack ', '30/06/2015', ''),
('asasas', 'asaasa', 'asas', 'aaaaaaaa', 'asaa'),
('xaxax', 'axaxax', 'cccc', 'aaaaa', 'axax'),
('ssss', 'dddd', 'cccc', 'ccccaaa', 'aaaa'),
('sssssvsbfb', 'ddddxbcxbxcbxc', 'ccccbxbx', 'ccccaaabxb', 'aaaaxcxc'),
('cacacac', 'yyyy', 'yyg', 'ggggg', 'acaca'),
('cacacac', 'yyyy', 'yyg', 'ggggg', 'acaca'),
('xxx', 'asfasfsdg', 'fx', 'hdh', '123123'),
('Power Bank', 'White power bank 2000mAh ROmoss', 'Thoughtworks, ascendas', '28/06/2015', '007');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE IF NOT EXISTS `security` (
  `secname` varchar(20) NOT NULL,
  `secid` varchar(20) NOT NULL,
  `secpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`secname`, `secid`, `secpass`) VALUES
('sec1', 'sec1@gmail.com', 'sec1'),
('axax', 'axax', 'axaxa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
