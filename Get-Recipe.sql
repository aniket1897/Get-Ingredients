-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2018 at 06:32 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Get-Recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(400) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `link`) VALUES
(1, 'ABC', 'XYZ', 'https://google.com'),
(2, 'Salad', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a scelerisque orci. In a leo felis. Phasellus lobortis porttitor urna, et blandit dui mattis vel. Pellentesque congue nulla quis efficitur vestibulum. Maecenas et mollis dolor. In sodales massa cursus erat faucibus sodales. Cras gravida ut nisl a venenatis. Integer vulputate volutpat nisi. Maecenas in vestibulum nunc, quis ultri', 'https://youtube.com'),
(3, 'Chicken', 'Maecenas turpis sapien, mollis id orci non, congue fringilla massa. Pellentesque vitae eros non eros accumsan hendrerit. Suspendisse tincidunt pellentesque dolor eget eleifend. Nam eu pellentesque ante. Donec a feugiat neque, non aliquam nunc. Sed condimentum, augue id varius rutrum, enim ex fringilla metus, at fermentum erat mauris eu tortor. Ut est enim, placerat sit amet facilisis a, egestas at', 'https:youtube.com'),
(4, 'Paneer Roll', 'Fusce vitae quam tempor, porta leo nec, elementum nunc. Proin lorem turpis, porta et diam sit amet, condimentum imperdiet dui. Sed sed magna maximus ante pellentesque efficitur. Phasellus viverra lorem vitae justo congue suscipit. Vestibulum sagittis mauris eu arcu consequat dictum. Mauris dignissim eget lorem et pulvinar. Maecenas et dolor finibus, convallis lorem eget, imperdiet risus. Maecenas ', 'https://yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
