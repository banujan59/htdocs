-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2017 at 03:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoeplusplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `ID` int(3) NOT NULL,
  `COUNTRY_CODE` varchar(2) NOT NULL,
  `COUNTRY_NAME` varchar(40) NOT NULL,
  `EXCHANGE_RATE` decimal(4,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ID` int(4) NOT NULL,
  `SELLER_ID` int(4) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `PRICE` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `FROM_ID` int(4) NOT NULL,
  `TO_ID` int(4) NOT NULL,
  `SUBJECT` varchar(25) NOT NULL,
  `CONTENT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(10) NOT NULL,
  `USER_ID` int(4) NOT NULL,
  `DATE` date NOT NULL,
  `STATUS` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `ORDER_ID` int(4) NOT NULL,
  `ITEM_ID` int(4) NOT NULL,
  `QUANTITY` int(3) NOT NULL,
  `UNIT_PRICE` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `WRITER_ID` int(4) NOT NULL,
  `ITEM_ID` int(4) NOT NULL,
  `RATING` int(1) NOT NULL,
  `CONTENT` varchar(255) NOT NULL,
  `TYPE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(4) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `PASSWORD_HASH` varchar(100) NOT NULL,
  `UNAME` varchar(30) NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `COUNTRY_ID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ITEMS_SELLER_ID_FK` (`SELLER_ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`FROM_ID`,`TO_ID`),
  ADD KEY `MESSAGES_TO_ID_FK` (`TO_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ORDERS_USER_ID_FK` (`USER_ID`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`ORDER_ID`,`ITEM_ID`),
  ADD KEY `ORDER_DETAILS_ITEM_ID_FK` (`ITEM_ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`WRITER_ID`,`ITEM_ID`),
  ADD KEY `REVIEWS_ITEM_ID_FK` (`ITEM_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USERS_COUNTRY_ID_FK` (`COUNTRY_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `ITEMS_SELLER_ID_FK` FOREIGN KEY (`SELLER_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `MESSAGES_FROM_ID_FK` FOREIGN KEY (`FROM_ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `MESSAGES_TO_ID_FK` FOREIGN KEY (`TO_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `ORDERS_USER_ID_FK` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `ORDER_DETAILS_ITEM_ID_FK` FOREIGN KEY (`ITEM_ID`) REFERENCES `items` (`ID`),
  ADD CONSTRAINT `ORDER_DETAILS_ORDER_ID_FK` FOREIGN KEY (`ORDER_ID`) REFERENCES `orders` (`ID`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `REVIEWS_ITEM_ID_FK` FOREIGN KEY (`ITEM_ID`) REFERENCES `items` (`ID`),
  ADD CONSTRAINT `REVIEWS_WRITER_ID_FK` FOREIGN KEY (`WRITER_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `USERS_COUNTRY_ID_FK` FOREIGN KEY (`COUNTRY_ID`) REFERENCES `countries` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
