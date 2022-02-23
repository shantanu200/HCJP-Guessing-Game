-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 12:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guess_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `score_data`
--

CREATE TABLE `score_data` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `score` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `score_data`
--

INSERT INTO `score_data` (`id`, `name`, `score`, `date`, `time`) VALUES
(1, 'Shantanu', 40, '2022-02-21', '22:47:15'),
(2, 'Player1', 50, '2022-02-22', '19:45:27'),
(3, 'Player2', 80, '2022-02-22', '19:46:02'),
(4, 'Player3', 30, '2022-02-22', '19:47:26'),
(5, 'Player4', 50, '2022-02-22', '19:49:28'),
(6, 'Player5', 40, '2022-02-22', '20:09:29'),
(7, 'Player6', 50, '2022-02-22', '23:44:08'),
(8, 'Player7', 40, '2022-02-22', '23:44:44'),
(9, 'Player8', 40, '2022-02-22', '23:46:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `score_data`
--
ALTER TABLE `score_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `score_data`
--
ALTER TABLE `score_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
