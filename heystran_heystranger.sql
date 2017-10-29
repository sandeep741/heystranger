-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2017 at 09:45 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heystran_heystranger`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--

CREATE TABLE `accomodation` (
  `id` int(11) NOT NULL,
  `name` varchar(170) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`id`, `name`) VALUES
(1, 'Hotel'),
(2, 'Resort'),
(3, 'Villas');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `add_date_time` datetime NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `stutus` int(2) NOT NULL,
  `last_login` datetime NOT NULL,
  `last_logout` datetime NOT NULL,
  `login_status` int(2) NOT NULL,
  `website_logo` varchar(10000) NOT NULL,
  `transaction_pwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `username`, `password`, `email`, `name`, `image`, `type`, `date`, `add_date_time`, `last_modify`, `stutus`, `last_login`, `last_logout`, `login_status`, `website_logo`, `transaction_pwd`) VALUES
(1, 123456, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'test@test.com', 'Super Admin', 'face3.jpg', 'admin', '2014-07-27', '2014-06-27 18:15:00', '2014-06-27 07:15:50', 0, '2017-05-22 23:17:31', '2017-03-08 11:23:55', 1, 'icon1410940295logo.png', '123'),
(3, 123456, 'helper', '47794be224774b6d1abd80eba7c7ed211461164073312453adef8f73bce19cdf', 'test@test.com', 'Super Admin', '', 'admin', '2014-07-27', '2014-06-27 18:15:00', '2014-06-27 12:15:50', 0, '2017-05-24 14:27:18', '2017-03-08 11:23:55', 1, 'icon1410940295logo.png', '123');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `package_name` varchar(150) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `vat` varchar(50) NOT NULL,
  `percent` varchar(50) NOT NULL,
  `reduced_amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package_name`, `amount`, `vat`, `percent`, `reduced_amount`) VALUES
(1, 'Package 1', '650', '14', '', '500'),
(2, 'Package 2', '950', '14', '', '750'),
(3, 'Package 3', '200', '14', '', '200'),
(4, 'Package 4', '200', '14', '', '200'),
(5, 'Package 5', '200', '14', '', '200');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `partner_id` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(150) NOT NULL,
  `city` text NOT NULL,
  `suburb` varchar(100) NOT NULL,
  `landline` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `registration_date` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `receipt` varchar(200) NOT NULL,
  `package` varchar(10) NOT NULL,
  `partner_status` varchar(10) NOT NULL,
  `accomodation` varchar(100) NOT NULL,
  `venue_conference` varchar(10) NOT NULL,
  `transport` varchar(10) NOT NULL,
  `additional` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `partner_id`, `username`, `password`, `first_name`, `last_name`, `email`, `country`, `state`, `city`, `suburb`, `landline`, `mobile`, `registration_date`, `image`, `receipt`, `package`, `partner_status`, `accomodation`, `venue_conference`, `transport`, `additional`) VALUES
(5, '3304731', 'test', 'test', 'cd', 'dcsdcdsc', 'testing@gmail.com', 'Azerbaijan', '', 'dds', 'dsc', 'ds', 'sd', '2017-05-23', '', '1495531982H_extra.sql', '1', '0', '2', 'Yes', 'Yes', 'Yes'),
(6, '6803558', 'Chrissie Smit', 'dogflue', ' Chrissie', 'Smit', 'chrissie.smit01@gmail.com', 'South Africa', '', 'Pretoria', 'Kameelfontein Suid', '0817400107', '0627339194', '2017-05-23', '', '', '1', '1', '3', 'Yes', 'No', 'No'),
(7, '4480192', 'Test99', '12345', 'Test99', 'Singh', 'test99@hmail.com', 'India', 'Delhi', 'Delhi', 'Delhi', '1234567890', '1234567890', '2017-05-24', '', '', '1', '1', '4', 'Yes', 'No', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation`
--
ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`partner_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomodation`
--
ALTER TABLE `accomodation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
