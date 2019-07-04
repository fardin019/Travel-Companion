-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 07:37 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'I think Zanzibar is just amazing!', 'maryam_amin_944969', '2019-07-02 03:56:48'),
(2, 1, 'It totally is!', 'fardin_ali_387134', '2019-07-02 04:03:15'),
(3, 1, 'Forodhani is a good place to chill', 'fardin_ali_387134', '2019-07-02 04:05:44'),
(4, 0, 'trgfhgbjb', 'fardin_ali_387134', '2019-07-03 07:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment_chumbe`
--

CREATE TABLE `tbl_comment_chumbe` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) CHARACTER SET utf8 NOT NULL,
  `comment_sender_name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment_chumbe`
--

INSERT INTO `tbl_comment_chumbe` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'The coral reef here is just beautiful!', 'maryam_amin_944969', '2019-07-02 03:59:48'),
(2, 1, 'There are all kinds of marine species there', 'fardin_ali_387134', '2019-07-02 04:07:04'),
(3, 1, 'ur right', 'maryam_amin_944969', '2019-07-02 06:55:19'),
(4, 0, 'hgsgdfjhsdfjadsg dnhcgshf', 'fardin_ali_387134', '2019-07-02 09:17:24'),
(5, 4, 'hzxgdfhjsdcbjdsg', 'fardin_ali_387134', '2019-07-02 09:17:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment_magoroto`
--

CREATE TABLE `tbl_comment_magoroto` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) CHARACTER SET utf8 NOT NULL,
  `comment_sender_name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment_magoroto`
--

INSERT INTO `tbl_comment_magoroto` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'The place looks lovely..i wonder if the food they give at camping suffices tho..', 'maryam_amin_944969', '2019-07-02 03:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment_tanga`
--

CREATE TABLE `tbl_comment_tanga` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) CHARACTER SET utf8 NOT NULL,
  `comment_sender_name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment_tanga`
--

INSERT INTO `tbl_comment_tanga` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'Can anyone suggest me a place ?..I\'ve never been to tanga before', 'maryam_amin_944969', '2019-07-02 03:57:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_comment_chumbe`
--
ALTER TABLE `tbl_comment_chumbe`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_comment_magoroto`
--
ALTER TABLE `tbl_comment_magoroto`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_comment_tanga`
--
ALTER TABLE `tbl_comment_tanga`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_comment_chumbe`
--
ALTER TABLE `tbl_comment_chumbe`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_comment_magoroto`
--
ALTER TABLE `tbl_comment_magoroto`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_comment_tanga`
--
ALTER TABLE `tbl_comment_tanga`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
