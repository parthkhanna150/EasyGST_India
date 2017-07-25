-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 25, 2017 at 01:03 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demoadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `OTP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`email`, `password`, `mobile_number`, `type`, `OTP`) VALUES
('150@doonschool.com', '2', 7878787898, 'Admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `total` int(15) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `bill_date` date NOT NULL,
  `bill_time` time NOT NULL,
  `email` varchar(40) NOT NULL,
  `bill_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `total`, `cust_id`, `bill_date`, `bill_time`, `email`, `bill_type`) VALUES
(1, 2472661, 1, '2017-07-25', '13:32:40', '150@doonschool.com', 'retailInvoice'),
(2, 475564, 1, '2017-07-25', '13:34:58', '150@doonschool.com', 'gstInvoice'),
(3, 503, 2, '2017-07-25', '13:37:11', '150@doonschool.com', 'retailInvoice'),
(4, 999303, 2, '2017-07-25', '13:38:17', '150@doonschool.com', 'gstInvoice'),
(6, 9988000, 1, '2017-07-25', '13:56:00', '150@doonschool.com', 'gstInvoice');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `id` int(10) NOT NULL,
  `bill_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `cgst` int(20) NOT NULL,
  `sgst` int(20) NOT NULL,
  `total_gst` int(10) NOT NULL,
  `mrp` int(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`id`, `bill_id`, `product_id`, `price`, `cgst`, `sgst`, `total_gst`, `mrp`, `qty`) VALUES
(1, 1, 74, 908000, 5, 5, 10, 998800, 2),
(2, 1, 76, 456789, 2, 2, 4, 475061, 1),
(3, 2, 75, 457, 5, 5, 10, 503, 1),
(4, 2, 76, 456789, 2, 2, 4, 475061, 1),
(5, 3, 75, 457, 5, 5, 10, 503, 1),
(6, 4, 75, 457, 5, 5, 10, 503, 1),
(7, 4, 74, 908000, 5, 5, 10, 998800, 1),
(8, 6, 74, 908000, 5, 5, 10, 998800, 10);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gstno` varchar(40) NOT NULL,
  `user_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cust_name`, `phone`, `email`, `gstno`, `user_email`) VALUES
(1, 'Parth Khanna', 9316990999, '150@jajajajaj.com', '120002', '150@doonschool.com'),
(2, 'vasu khanna', 917508004055, 'khanna.vasu378@gmail.com', '191922', '150@doonschool.com');

-- --------------------------------------------------------

--
-- Table structure for table `gst_r2`
--

CREATE TABLE `gst_r2` (
  `id` int(10) NOT NULL,
  `invoice_num` int(30) NOT NULL,
  `date` date NOT NULL,
  `supplier` int(30) NOT NULL,
  `invoice_val` int(30) NOT NULL,
  `total_tax` int(30) NOT NULL,
  `state_tax` int(30) NOT NULL,
  `central_tax` int(30) NOT NULL,
  `itc` int(30) NOT NULL,
  `state` int(30) NOT NULL,
  `central` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst_r2`
--

INSERT INTO `gst_r2` (`id`, `invoice_num`, `date`, `supplier`, `invoice_val`, `total_tax`, `state_tax`, `central_tax`, `itc`, `state`, `central`) VALUES
(1, 12313, '2017-07-19', 22, 13432143, 13231, 6600, 6600, 13231, 6600, 6600),
(2, 354678, '2017-07-13', 22, 54678, 7683, 13, 13, 7683, 13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `CGST` float DEFAULT NULL,
  `SGST` float DEFAULT NULL,
  `iGST` float DEFAULT NULL,
  `HSN_Code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `CGST`, `SGST`, `iGST`, `HSN_Code`) VALUES
(8, 'thread', 5, 5, 10, '20020'),
(10, 'computer', 6.5, 6.5, 13, '12091'),
(11, 'vegetables', 2, 2, 4, '123442');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(80) NOT NULL,
  `supplier_ID` int(10) NOT NULL,
  `stock` int(20) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `selling_price` float NOT NULL,
  `tax_id` int(10) NOT NULL,
  `mrp` float NOT NULL,
  `user_email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `supplier_ID`, `stock`, `photo`, `selling_price`, `tax_id`, `mrp`, `user_email`) VALUES
(71, 'Eee', 'khanna.vasu378@gmail.com', 20, 8978, 'images/red1.png', 1000, 8, 1050, 'parth.khanna@mcgill.ca'),
(73, 'cotton yarn', 'check for edit image', 22, 99869929, 'images/grey.png', 1000000, 10, 1130000, '150@doonschool.com'),
(74, 'Silk', 'fine cloth', 22, 870, 'images/silk.jpg', 908000, 8, 998800, '150@doonschool.com'),
(75, 'Commerce', 'rdfgt', 22, 4564, 'images/red1.png', 457, 8, 502.7, '150@doonschool.com'),
(76, 'ftydrefgh', 'Its a check for edit image', 21, 10000, 'images/grey.png', 456789, 10, 516172, '150@doonschool.com');

-- --------------------------------------------------------

--
-- Table structure for table `public_signup`
--

CREATE TABLE `public_signup` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile_number` bigint(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `entity_name` varchar(30) NOT NULL,
  `GST_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public_signup`
--

INSERT INTO `public_signup` (`email`, `password`, `mobile_number`, `address`, `gender`, `entity_name`, `GST_no`) VALUES
('150@doonschool.com', '12345', 9316990999, '35 Garden Colony', 'Other', 'Jai Fab', 12010),
('khanna.vasu378@gmail.com', '12', 917508004055, '378 Green Avenue', 'Female', 'parthcorp', 19201),
('parth.khanna@mcgill.ca', '123', 9316990999, '378 Green Avenue', 'Male', 'JAI AMBAY', 19201);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `GST_no` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `pan_no` varchar(50) NOT NULL,
  `mobile_no` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`ID`, `Name`, `GST_no`, `address`, `pan_no`, `mobile_no`, `email`, `user_email`) VALUES
(17, 'Vasu Khanna', '9892719', '378 Green Avenue', '90273812932', 83000000002, 'vasu@hool.com', 'khanna.vasu378@gmail.com'),
(18, '150@doonschool.com', '322', '231 Atwater City', '323232232', 9435559195, '315@jajajjajaj.com', 'parth.khanna@mcgill.ca'),
(20, 'Humer', '323232', '5 New York Street', '232131331', 9346453443, 'hahahaha@hahahahahl.com', 'parth.khanna@mcgill.ca'),
(21, 'Rajesh Mona', '1416', '3010 Lionel Groulx', '101908004055', 7508999955, 'Seth@gmail.com', '150@doonschool.com'),
(22, 'Subhash', '12213', '378 Kashmir Avenue', '23423342', 6363690999, '150@doool.com', '150@doonschool.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_id` (`bill_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `gst_r2`
--
ALTER TABLE `gst_r2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier` (`supplier`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `tax_id` (`tax_id`),
  ADD KEY `supplier_ID` (`supplier_ID`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `public_signup`
--
ALTER TABLE `public_signup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gst_r2`
--
ALTER TABLE `gst_r2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`email`) REFERENCES `public_signup` (`email`);

--
-- Constraints for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `bill_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`user_email`) REFERENCES `public_signup` (`email`);

--
-- Constraints for table `gst_r2`
--
ALTER TABLE `gst_r2`
  ADD CONSTRAINT `gst_r2_ibfk_1` FOREIGN KEY (`supplier`) REFERENCES `suppliers` (`ID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`tax_id`) REFERENCES `items` (`ID`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`supplier_ID`) REFERENCES `suppliers` (`ID`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`user_email`) REFERENCES `public_signup` (`email`);

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_ibfk_1` FOREIGN KEY (`user_email`) REFERENCES `public_signup` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
