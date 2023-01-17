-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 05:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_item_table`
--

CREATE TABLE `order_item_table` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_quantity` int(4) NOT NULL,
  `product_rate` decimal(12,2) NOT NULL,
  `product_amount` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_item_table`
--

INSERT INTO `order_item_table` (`order_item_id`, `order_id`, `product_name`, `product_quantity`, `product_rate`, `product_amount`) VALUES
(2, 2, 'Thali', 20, '120.00', '2400.00'),
(3, 3, 'Thali', 16, '120.00', '1920.00'),
(4, 4, 'Thali', 14, '120.00', '1680.00'),
(5, 5, 'Thali', 6, '120.00', '720.00'),
(6, 6, 'Thali', 4, '120.00', '480.00'),
(7, 7, 'Thali', 4, '120.00', '480.00'),
(8, 8, 'Thali', 6, '120.00', '720.00'),
(9, 9, 'Thali', 4, '120.00', '480.00'),
(10, 10, 'Thali', 3, '120.00', '360.00'),
(11, 11, 'Thali', 7, '120.00', '840.00'),
(13, 13, 'Thali', 3, '120.00', '360.00'),
(14, 14, 'Curry', 4, '60.00', '240.00'),
(16, 16, 'Curry', 6, '60.00', '360.00'),
(18, 16, 'Noodles', 13, '100.00', '1300.00'),
(20, 16, 'Thali', 7, '120.00', '840.00'),
(21, 17, 'Noodles', 3, '100.00', '300.00'),
(22, 17, 'Curry', 4, '60.00', '240.00'),
(23, 18, 'Noodles', 5, '100.00', '500.00'),
(24, 18, 'Thali', 5, '120.00', '600.00'),
(25, 19, 'Noodles', 4, '100.00', '400.00'),
(27, 19, 'Thali', 2, '120.00', '240.00'),
(28, 21, 'Noodles', 6, '100.00', '600.00'),
(29, 22, 'Noodles', 3, '100.00', '300.00'),
(30, 23, 'Noodles', 5, '100.00', '500.00'),
(31, 23, 'Thali', 4, '120.00', '480.00');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `order_number` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `order_table` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `order_gross_amount` decimal(12,2) NOT NULL,
  `order_tax_amount` decimal(12,2) NOT NULL,
  `order_net_amount` decimal(12,2) NOT NULL,
  `order_date` date NOT NULL,
  `order_time` time NOT NULL,
  `order_waiter` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `order_cashier` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `order_status` enum('In Process','Completed') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `order_number`, `order_table`, `order_gross_amount`, `order_tax_amount`, `order_net_amount`, `order_date`, `order_time`, `order_waiter`, `order_cashier`, `order_status`) VALUES
(2, '100000', 'Table 1', '2400.00', '240.00', '2640.00', '2022-08-27', '15:52:19', 'Master', 'Master', 'Completed'),
(3, '100001', 'Table 1', '1920.00', '192.00', '2112.00', '2022-08-27', '17:39:49', 'Master', 'Master', 'Completed'),
(4, '100002', 'Table 2', '1680.00', '168.00', '1848.00', '2022-08-27', '18:28:19', 'Master', 'Master', 'Completed'),
(5, '100003', 'Table 2', '720.00', '72.00', '792.00', '2022-08-27', '18:51:14', 'Master', 'Master', 'Completed'),
(6, '100004', 'Table 1', '480.00', '48.00', '528.00', '2022-08-27', '18:53:24', 'Master', 'Master', 'Completed'),
(7, '100005', 'Table 1', '480.00', '48.00', '528.00', '2022-08-27', '18:54:25', 'Master', 'Master', 'Completed'),
(8, '100006', 'Table 2', '720.00', '72.00', '792.00', '2022-08-27', '18:56:33', 'Master', 'Master', 'Completed'),
(9, '100007', 'Table 1', '480.00', '48.00', '528.00', '2022-08-27', '18:57:26', 'Master', 'Master', 'Completed'),
(10, '100008', 'Table 1', '360.00', '36.00', '396.00', '2022-08-27', '19:00:47', 'Master', 'Master', 'Completed'),
(11, '100009', 'Table 2', '840.00', '84.00', '924.00', '2022-08-27', '19:02:04', 'Master', 'Master', 'Completed'),
(13, '100010', 'Table 1', '360.00', '36.00', '396.00', '2022-08-28', '18:55:42', 'Master', 'Master', 'Completed'),
(14, '100011', 'Table 1', '240.00', '24.00', '264.00', '2022-08-28', '19:53:48', 'Master', 'Master', 'Completed'),
(16, '100013', 'Table 1', '2500.00', '250.00', '2750.00', '2022-08-31', '15:22:47', 'Master', 'Master', 'Completed'),
(17, '100014', 'Table 2', '540.00', '54.00', '594.00', '2022-08-31', '15:22:44', 'Master', 'Master', 'Completed'),
(18, '100015', 'Table 3', '1100.00', '110.00', '1210.00', '2022-09-03', '10:33:15', 'Master', 'Master', 'Completed'),
(19, '100016', 'Table 1', '640.00', '64.00', '704.00', '2022-09-03', '12:42:37', 'hello', 'Master', 'Completed'),
(21, '100017', 'Table 3', '600.00', '60.00', '660.00', '2022-09-03', '12:11:55', 'asd', 'Master', 'Completed'),
(22, '100018', 'Table 1', '300.00', '165.00', '465.00', '2022-09-11', '20:21:17', 'Master', 'Master', 'Completed'),
(23, '100019', 'Table 2', '980.00', '539.00', '1519.00', '2022-09-12', '16:23:08', 'Master', 'Master', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `order_tax_table`
--

CREATE TABLE `order_tax_table` (
  `order_tax_table_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_tax_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `order_tax_percentage` decimal(4,2) NOT NULL,
  `order_tax_amount` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_tax_table`
--

INSERT INTO `order_tax_table` (`order_tax_table_id`, `order_id`, `order_tax_name`, `order_tax_percentage`, `order_tax_amount`) VALUES
(5, 3, 'SGST', '5.00', '96.00'),
(6, 3, 'CGST', '5.00', '96.00'),
(7, 4, 'SGST', '5.00', '84.00'),
(8, 4, 'CGST', '5.00', '84.00'),
(15, 2, 'SGST', '5.00', '120.00'),
(16, 2, 'CGST', '5.00', '120.00'),
(21, 5, 'SGST', '5.00', '36.00'),
(22, 5, 'CGST', '5.00', '36.00'),
(23, 6, 'SGST', '5.00', '24.00'),
(24, 6, 'CGST', '5.00', '24.00'),
(25, 7, 'SGST', '5.00', '24.00'),
(26, 7, 'CGST', '5.00', '24.00'),
(27, 8, 'SGST', '5.00', '36.00'),
(28, 8, 'CGST', '5.00', '36.00'),
(29, 9, 'SGST', '5.00', '24.00'),
(30, 9, 'CGST', '5.00', '24.00'),
(37, 10, 'SGST', '5.00', '18.00'),
(38, 10, 'CGST', '5.00', '18.00'),
(49, 11, 'SGST', '5.00', '42.00'),
(50, 11, 'CGST', '5.00', '42.00'),
(59, 13, 'SGST', '5.00', '18.00'),
(60, 13, 'CGST', '5.00', '18.00'),
(65, 14, 'SGST', '5.00', '12.00'),
(66, 14, 'CGST', '5.00', '12.00'),
(73, 17, 'SGST', '5.00', '27.00'),
(74, 17, 'CGST', '5.00', '27.00'),
(75, 16, 'SGST', '5.00', '125.00'),
(76, 16, 'CGST', '5.00', '125.00'),
(92, 18, 'SGST', '5.00', '55.00'),
(93, 18, 'CGST', '5.00', '55.00'),
(94, 21, 'SGST', '5.00', '30.00'),
(95, 21, 'CGST', '5.00', '30.00'),
(98, 19, 'SGST', '5.00', '32.00'),
(99, 19, 'CGST', '5.00', '32.00'),
(114, 22, 'SGST', '5.00', '15.00'),
(115, 22, 'CGST', '50.00', '150.00'),
(118, 23, 'SGST', '5.00', '49.00'),
(119, 23, 'CGST', '50.00', '490.00');

-- --------------------------------------------------------

--
-- Table structure for table `product_category_table`
--

CREATE TABLE `product_category_table` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `category_status` enum('Enable','Disable') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_category_table`
--

INSERT INTO `product_category_table` (`category_id`, `category_name`, `category_status`) VALUES
(1, 'Indian', 'Enable'),
(2, 'Chinese', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `product_id` int(11) NOT NULL,
  `category_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_status` enum('Enable','Disable') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `category_name`, `product_name`, `product_price`, `product_status`) VALUES
(1, 'Indian', 'Thali', '120.00', 'Enable'),
(2, 'Indian', 'Curry', '60.00', 'Enable'),
(3, 'Chinese', 'Noodles', '100.00', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_table`
--

CREATE TABLE `restaurant_table` (
  `restaurant_id` int(11) NOT NULL,
  `restaurant_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_tag_line` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_address` text COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_contact_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_timezone` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_logo` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `restaurant_table`
--

INSERT INTO `restaurant_table` (`restaurant_id`, `restaurant_name`, `restaurant_tag_line`, `restaurant_address`, `restaurant_contact_no`, `restaurant_email`, `restaurant_currency`, `restaurant_timezone`, `restaurant_logo`) VALUES
(1, 'Shiva Fancy Food', 'Tasty Food which we make', 'rerwe', '8523697410', 'asd@b.com', 'INR', 'Asia/Kolkata', 'images/619392254.png');

-- --------------------------------------------------------

--
-- Table structure for table `table_data`
--

CREATE TABLE `table_data` (
  `table_id` int(11) NOT NULL,
  `table_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `table_capacity` int(3) NOT NULL,
  `table_status` enum('Enable','Disable') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_data`
--

INSERT INTO `table_data` (`table_id`, `table_name`, `table_capacity`, `table_status`) VALUES
(2, 'Table 1', 4, 'Enable'),
(3, 'Table 2', 4, 'Enable'),
(4, 'Table 3', 2, 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `tax_table`
--

CREATE TABLE `tax_table` (
  `tax_id` int(11) NOT NULL,
  `tax_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tax_percentage` decimal(4,2) NOT NULL,
  `tax_status` enum('Enable','Disable') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tax_table`
--

INSERT INTO `tax_table` (`tax_id`, `tax_name`, `tax_percentage`, `tax_status`) VALUES
(1, 'SGST', '5.00', 'Enable'),
(2, 'CGST', '50.00', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_contact_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_profile` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` enum('Master','Waiter','Cashier') COLLATE utf8_unicode_ci NOT NULL,
  `user_status` enum('Enable','Disable') COLLATE utf8_unicode_ci NOT NULL,
  `user_created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `user_contact_no`, `user_email`, `user_password`, `user_profile`, `user_type`, `user_status`, `user_created_on`) VALUES
(1, 'Ronak', '09136217150', 'RONVPATRA999@GMAIL.COM', '123456', 'images/604415212.jpg', 'Master', 'Enable', '2022-08-27 09:09:54'),
(2, 'sdjaisda', '2382767679', 'b@b.com', '123456', 'images/1195406201.jpg', 'Waiter', 'Enable', '2022-08-27 14:44:25'),
(3, 'Johny Smith', '4353545345', 'a@a.com', '123456', 'images/1956286628.jpg', 'Cashier', 'Enable', '2022-08-27 15:46:48'),
(5, 'hello', '2382767679', 'c@c.com', '123456', 'images/730299938.jpg', 'Waiter', 'Enable', '0000-00-00 00:00:00'),
(6, 'qwe', '7412589631', 'd@d.com', '123456', '', 'Waiter', 'Enable', '0000-00-00 00:00:00'),
(7, 'asd', '123456789', 'e@e.com', '123456', 'images/1592869165.png', 'Waiter', 'Enable', '0000-00-00 00:00:00'),
(8, 'zxc', '2382767679', 'f@f.com', '123456', '', 'Waiter', 'Enable', '0000-00-00 00:00:00'),
(9, 'zxc', '2382767679', 'f@f.com', '123456', '', 'Waiter', 'Enable', '0000-00-00 00:00:00'),
(13, 'asdasd', 'asdasd', 'asdsad', 'asdasd', '', 'Waiter', 'Enable', '0000-00-00 00:00:00'),
(14, '', '', 'asd@b.com', '123456', 'images/1662983071.png', 'Master', 'Enable', '2022-09-12 13:44:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_item_table`
--
ALTER TABLE `order_item_table`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_tax_table`
--
ALTER TABLE `order_tax_table`
  ADD PRIMARY KEY (`order_tax_table_id`);

--
-- Indexes for table `product_category_table`
--
ALTER TABLE `product_category_table`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `restaurant_table`
--
ALTER TABLE `restaurant_table`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `table_data`
--
ALTER TABLE `table_data`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `tax_table`
--
ALTER TABLE `tax_table`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_item_table`
--
ALTER TABLE `order_item_table`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_tax_table`
--
ALTER TABLE `order_tax_table`
  MODIFY `order_tax_table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `product_category_table`
--
ALTER TABLE `product_category_table`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `restaurant_table`
--
ALTER TABLE `restaurant_table`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_data`
--
ALTER TABLE `table_data`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tax_table`
--
ALTER TABLE `tax_table`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
