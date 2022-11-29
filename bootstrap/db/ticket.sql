-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 02:54 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(50) NOT NULL,
  `ticket_date` date NOT NULL,
  `ticket_time` time NOT NULL,
  `Froms` varchar(50) NOT NULL,
  `To_` varchar(50) NOT NULL,
  `ticket_type` varchar(50) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `payment` int(11) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `ticket_date`, `ticket_time`, `Froms`, `To_`, `ticket_type`, `barcode`, `payment`, `user_id`) VALUES
(1, '2020-09-22', '06:00:00', 'Dar-es-salam', 'Kenya', 'AeroPlane', '7151996_Hassan', 100000, 4),
(2, '2020-09-28', '12:00:00', 'Dar-es-salam', 'Zanzibar', 'AeroPlane', '12012000_Hamadi', 50000, 3),
(3, '2020-09-23', '12:00:00', 'Zanzibar', 'Dar-es-salam', 'AeroPlane', '9011995_Mohd', 50000, 5),
(4, '2020-09-26', '18:00:00', 'Dar-es-salam', 'Kenya', 'AeroPlane', '6172020_Abdulla', 60000, 6),
(6, '2020-09-28', '12:00:00', 'Kenya', 'Dar-es-salam', 'AeroPlane', '4032005_Seif', 100000, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(50) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `nida` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fName`, `mName`, `lName`, `gender`, `dob`, `phone`, `email`, `address`, `role`, `nida`, `username`, `password`) VALUES
(1, 'Asfar', 'Moh\'d', 'Ally', 'Female', '1999-10-25', 776666813, 'asfar@gmail.com', 'M/kwerekwe', 'Admin', 10251995, 'Admin01', '8cb2237d0679ca88db6464eac60da96345513964'),
(2, 'Moh\'d', 'Mshimba', 'Seif', 'Male', '1995-03-15', 776666813, 'mohdmshimba95@gmail.com', 'M/kwerekwe', 'Admin', 15031995, 'Admin02', '8cb2237d0679ca88db6464eac60da96345513964'),
(3, 'Aisha', 'Ally', 'Hamadi', 'Female', '2000-12-01', 777877777, 'asha@gmail.com', 'Fuoni', 'customer', 12012000, 'Hamad', '8cb2237d0679ca88db6464eac60da96345513964'),
(4, 'Twahna', 'Ally', 'Hassan', 'Female', '1996-07-15', 777787987, 'twahna@gmail.com', 'M/kwerekwe', 'customer', 7151996, 'Hassan', '8cb2237d0679ca88db6464eac60da96345513964'),
(5, 'Hashim', 'Uzia', 'Mohd', 'Male', '1995-09-01', 777789876, 'hashim@gmail.com', 'Chukwani', 'customer', 9011995, 'Mohd', '8cb2237d0679ca88db6464eac60da96345513964'),
(6, 'Arif', 'Abuubaka', 'Abdulla', 'Male', '2020-06-17', 777766676, 'arif@gmail.com', 'Meli Nne', 'customer', 6172020, 'Abdulla', '8cb2237d0679ca88db6464eac60da96345513964'),
(8, 'Hilda', 'Mshimba', 'Seif', 'Female', '2005-04-03', 624567876, 'hilda@gmail.com', 'M/kwerekwe', 'customer', 4032005, 'Seif', '8cb2237d0679ca88db6464eac60da96345513964');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD UNIQUE KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
