-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2017 at 04:34 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FlightDetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `Details`
--

CREATE TABLE `Details` (
  `From` text NOT NULL,
  `To` text NOT NULL,
  `Date` date NOT NULL,
  `Duration` time NOT NULL,
  `Departure` datetime NOT NULL,
  `Arrival` datetime NOT NULL,
  `Economy_Price` int(11) NOT NULL,
  `Premium_Price` int(11) NOT NULL,
  `Business_Price` int(11) NOT NULL,
  `Economy_Seats` int(11) NOT NULL,
  `Premium_Seats` int(11) NOT NULL,
  `Business_Seats` int(11) NOT NULL,
  `Company` text NOT NULL,
  `FlightNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Details`
--

INSERT INTO `Details` (`From`, `To`, `Date`, `Duration`, `Departure`, `Arrival`, `Economy_Price`, `Premium_Price`, `Business_Price`, `Economy_Seats`, `Premium_Seats`, `Business_Seats`, `Company`, `FlightNo`) VALUES
('Ahmedabad', 'Panaji', '2017-03-24', '01:10:00', '2017-03-24 10:00:00', '2017-03-24 11:10:00', 4000, 7000, 10000, 150, 30, 30, 'JetAirways', 18003),
('Pune', 'Panaji', '2017-03-25', '01:00:00', '2017-03-25 16:10:00', '2017-03-25 17:10:00', 2000, 5000, 10000, 150, 30, 30, 'JetAirways', 18004),
('Pune', 'New Delhi', '2017-03-26', '01:00:00', '2017-03-25 20:10:00', '2017-03-26 21:10:00', 2000, 5000, 10000, 150, 30, 30, 'JetAirways', 18005),
('Kolkata', 'Chennai', '2017-03-24', '02:10:00', '2017-03-24 09:00:00', '2017-03-24 11:10:00', 5000, 9000, 10000, 150, 30, 30, 'AirIndia', 19001),
('Ahmedabad', 'Panaji', '2017-03-24', '01:10:00', '2017-03-24 17:00:00', '2017-03-24 18:10:00', 4000, 7000, 10000, 150, 30, 30, 'AirIndia', 19002),
('Bangalore', 'Pune', '2017-03-24', '01:30:00', '2017-03-24 09:00:00', '2017-03-24 10:30:00', 4000, 7000, 12000, 150, 30, 30, 'AirIndia', 19003),
('Panaji', 'Mumbai', '2017-03-25', '00:50:00', '2017-03-25 16:10:00', '2017-03-25 17:00:00', 2000, 5000, 10000, 150, 30, 30, 'AirIndia', 19004),
('Ahmedabad', 'Mumbai', '2017-03-26', '00:50:00', '2017-03-26 16:10:00', '2017-03-25 17:00:00', 2000, 5000, 10000, 150, 30, 30, 'AirIndia', 19005),
('Chennai', 'Ahmedabad', '2017-03-23', '02:20:00', '2017-03-23 15:10:00', '2017-03-23 17:30:00', 5500, 9500, 15000, 150, 30, 30, 'Indigo', 20001),
('Panaji', 'Bangalore', '2017-03-23', '00:50:00', '2017-03-23 23:10:00', '2017-03-24 00:00:00', 3000, 6000, 10000, 150, 30, 30, 'Indigo', 20002),
('New Delhi', 'Mumbai', '2017-03-25', '02:10:00', '2017-03-25 12:10:00', '2017-03-25 14:20:00', 4000, 10000, 20000, 150, 30, 30, 'Indigo', 20004),
('Bangalore', 'Mumbai', '2017-03-26', '01:30:00', '2017-03-25 12:00:00', '2017-03-25 13:30:00', 4000, 10000, 20000, 150, 30, 30, 'Indigo', 20005),
('Pune', 'Chennai', '2017-03-26', '01:10:00', '2017-03-26 16:10:00', '2017-03-26 17:20:00', 8000, 12000, 20000, 150, 30, 30, 'Indigo', 20003),
('Mumbai', 'Delhi', '2017-03-23', '02:10:00', '2017-03-23 08:00:00', '2017-03-23 10:10:00', 5000, 10000, 20000, 150, 30, 30, 'JetAirways', 18001),
('New Delhi', 'Kolkata', '2017-03-23', '02:05:00', '2017-03-23 18:10:00', '2017-03-23 20:15:00', 5000, 10000, 15000, 150, 30, 30, 'Indigo', 18002);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
