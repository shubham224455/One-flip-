-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 07:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `all items`
--

CREATE TABLE `all items` (
  `item_id` int(100) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `tstamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all items`
--

INSERT INTO `all items` (`item_id`, `item_name`, `item_image`, `tstamp`) VALUES
(1, 'Grocery', '.\\ALL Image\\Grocery.webp', '2024-07-08 10:14:50'),
(2, 'Mobiles', '.\\ALL Image\\Mobiles.webp', '2024-07-08 10:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(100) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_price` int(100) NOT NULL,
  `brand_image` varchar(255) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_price`, `brand_image`, `tstamp`) VALUES
(201, 'Adidas shoes', 1399, '.\\ALL Image\\top brands\\adidas.webp', '2024-07-04 21:53:47'),
(202, 'Asian shoes', 1199, '.\\ALL Image\\top brands\\asian.webp', '2024-07-04 21:54:35'),
(203, 'Red tape', 1599, 'ALL Image\\top brands\\red tape.webp', '2024-07-04 21:57:40'),
(204, 'Puma shoes', 1999, '.\\ALL Image\\top brands\\puma.webp', '2024-07-04 21:59:12'),
(205, 'Red tape', 789, '.\\ALL Image\\top brands\\redtape 1.webp', '2024-07-04 22:00:21'),
(206, 'Asion brand', 1599, '.\\ALL Image\\top brands\\Asian 1.webp', '2024-07-04 22:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_no` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `product_id` int(255) NOT NULL,
  `tstamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_no`, `user_id`, `product_id`, `tstamp`) VALUES
(3, 4, 103, '2024-07-24 11:38:30'),
(5, 3, 101, '2024-07-24 12:40:15'),
(7, 1, 105, '2024-07-24 12:41:49'),
(9, 1, 201, '2024-07-24 12:42:10'),
(15, 3, 106, '2024-07-24 12:48:49'),
(17, 5, 205, '2024-07-24 15:08:43'),
(26, 3, 105, '2024-07-24 22:38:20'),
(27, 3, 206, '2024-07-25 00:30:45'),
(28, 2, 102, '2024-07-25 15:43:18'),
(29, 2, 104, '2024-07-25 15:43:36'),
(31, 1, 206, '2024-07-25 15:58:09'),
(35, 2, 206, '2024-07-25 16:33:20'),
(38, 3, 204, '2024-07-26 16:39:22'),
(39, 2, 202, '2024-07-26 21:36:01'),
(40, 6, 204, '2024-07-29 21:06:27'),
(41, 6, 202, '2024-07-29 21:06:36'),
(42, 6, 5, '2024-07-29 21:07:10'),
(43, 6, 3, '2024-07-29 22:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(100) NOT NULL,
  `comments_by` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `comments_image` varchar(255) NOT NULL,
  `comments_dis` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `comments_by`, `product_id`, `comments_image`, `comments_dis`, `user_name`, `tstamp`) VALUES
(2, 3, 2, '.\\ALL Image\\phone\\iphone 13 pink.webp', 'good quality product ', 'hello', '2024-07-16 15:25:46'),
(8, 4, 2, 'ALL Image/WIN_20231104_13_10_27_Pro.jpg', 'jsgh', 'Shubham', '2024-07-17 15:10:47'),
(10, 4, 103, 'ALL Image/new photo.png', 'thik hai', 'Shubham', '2024-07-17 15:14:05'),
(11, 2, 103, 'ALL Image/Screenshot (2).png', 'chal check kar', 'user', '2024-07-17 15:35:35'),
(12, 4, 202, 'ALL Image/IMG20200208151557.jpg', 'nice shoes', 'Shubham', '2024-07-17 21:31:11'),
(13, 2, 203, 'ALL Image/IMG20200614101807.jpg', 'bhai photo baidiya ariyaa hai', 'user', '2024-07-20 11:47:13'),
(14, 3, 5, 'ALL Image/IMG_20191216_192849.jpg', 'hmm ji phone ka photo ek no ariya hai', 'hello', '2024-07-22 10:10:52'),
(15, 3, 205, 'ALL Image/IMG20200823185250.jpg', 'nice shoes', 'hello', '2024-07-22 10:52:10'),
(16, 3, 206, 'ALL Image/IMG20201114154155.jpg', 'nice nice sa bhi badiya hai shoes', 'hello', '2024-07-22 10:54:13'),
(17, 2, 2, 'ALL Image/IMG20200919191131.jpg', 'hd quality photo', 'user', '2024-07-23 21:25:41'),
(18, 2, 2, 'ALL Image/IMG20200919191131.jpg', 'hd quality photo', 'user', '2024-07-23 21:28:03'),
(19, 3, 105, 'ALL Image/IMG_20200906_224533.jpg', 'nice kurta hai', 'hello', '2024-07-24 22:39:10'),
(20, 3, 204, 'ALL Image/IMG20201126164216.jpg', 'nice shoes hai ', 'hello', '2024-07-26 16:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `fashion_id` int(100) NOT NULL,
  `fashion_name` varchar(255) NOT NULL,
  `fashion_price` int(255) NOT NULL,
  `fashion_image` varchar(255) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`fashion_id`, `fashion_name`, `fashion_price`, `fashion_image`, `tstamp`) VALUES
(101, 'Glorious', 800, '.\\ALL Image\\top deals\\glorious.webp', '2024-07-04 21:34:11'),
(102, 'Upper Tops', 799, '.\\ALL Image\\top deals\\pf.webp', '2024-07-04 21:37:35'),
(103, 'Top Kurti ', 999, '.\\ALL Image\\top deals\\kjfab.webp', '2024-07-04 21:40:00'),
(104, 'T-shirt', 499, '.\\ALL Image\\top deals\\t-shirt.webp', '2024-07-04 21:41:06'),
(105, 'Upper Frock', 1499, '.\\ALL Image\\top deals\\sajreen.webp', '2024-07-04 21:42:36'),
(106, 'Maridi', 899, '.\\ALL Image\\top deals\\maridi.webp', '2024-07-04 21:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(100) NOT NULL,
  `user_id` int(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `product_id` int(100) NOT NULL,
  `order_address` varchar(255) NOT NULL,
  `order_status` tinyint(1) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `user_id`, `phone_no`, `product_id`, `order_address`, `order_status`, `tstamp`) VALUES
(1, 2, '8650531566', 104, 'Village -piki post salampur bhukri', 0, '2024-07-16 11:40:21'),
(2, 3, '6655443322', 2, 'sharanpur near railway station', 0, '2024-07-16 15:33:35'),
(3, 4, '9027754378', 2, 'Village -saharanpur up 247001', 0, '2024-07-17 21:47:02'),
(10, 3, '8650531566', 3, 'm', 0, '2024-07-26 17:02:35'),
(12, 6, '9670753356', 103, 'village- tapri near railway station', 0, '2024-07-26 22:14:27'),
(13, 6, '9670753356', 5, 'tapri saharanpur near railway station', 0, '2024-07-26 22:19:08'),
(14, 4, '9027754378', 103, 'village -tapri saharanpur up', 0, '2024-07-27 12:37:45'),
(15, 2, '8650531566', 202, 'Village -piki post salampur bhukri', 0, '2024-07-29 11:57:45'),
(16, 6, '9670753356', 5, 'village tapri near haridwar station', 0, '2024-07-29 22:17:59'),
(17, 6, '9670753356', 202, 'village tapri near haridwar station', 0, '2024-07-29 22:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `phone_id` int(100) NOT NULL,
  `phone_name` varchar(255) NOT NULL,
  `phone_price` int(100) NOT NULL,
  `phone_image` varchar(255) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`phone_id`, `phone_name`, `phone_price`, `phone_image`, `tstamp`) VALUES
(1, 'Infinix GT 20', 12000, '.\\ALL Image\\phone\\infinix gt 20.jpg', '2024-07-04 13:27:37'),
(2, 'Iphone 14', 60000, '.\\ALL Image\\phone\\iphone 14 plus.jpg', '2024-07-04 13:30:40'),
(3, 'Moto G34 5g', 14999, '.\\ALL Image\\phone\\moto g34.webp', '2024-07-04 13:31:41'),
(4, 'Samsung S23', 9999, '.\\ALL Image\\phone\\samsung s23.webp', '2024-07-04 13:32:54'),
(5, 'Iphone 14 Blue', 78999, '.\\ALL Image\\phone\\iphone 13 blue.webp', '2024-07-04 22:03:01'),
(6, 'Moto Edge 50', 22999, '.\\ALL Image\\phone\\edge-50-fusion.webp', '2024-07-04 22:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(100) NOT NULL,
  `user_no` varchar(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_location` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_no`, `user_name`, `user_location`, `user_pass`, `tstamp`) VALUES
(1, '8956785436', 'pal', 'village-tapri saharunpur 245001', '$2y$10$MENpsZrPHLrcNwwwFpIvtOaPe514Sg.Yey6i40Mqwp7osU2CjfIsO', '2024-07-12 11:44:16'),
(2, '8650531566', 'user', 'Village -piki post salampur bhukri', '$2y$10$7AesHznBt53JjU6WjLtU1ePEYOflYJrYjupqplEW4HtUksvuZsSBu', '2024-07-12 11:45:56'),
(3, '6655443322', 'hello', 'village- haridwar near saharanpur delhi road', '$2y$10$IaVvajXUZZLBYOglrfVvGuKD6oPPoWdSv4RSe8BhhUF8xBcQnayiC', '2024-07-12 13:07:10'),
(4, '9027754378', 'Shubham', 'village -tapri saharanpur up', '$2y$10$uayRMCCZwzbEJNAtUbNp9ecjJ8x7AdGtLCWX3R8XBfJp/LrexgirK', '2024-07-17 14:17:00'),
(5, '9690190566', 'harsh', 'meerut near subharti university 20005', '$2y$10$Ksr2RarO/cnInoeN5IpxHugrViTJGnmZESP73h28IRaCxYiIYMGO.', '2024-07-24 15:08:00'),
(6, '9670753356', 'Hari  ram', 'village tapri near haridwar station', '$2y$10$fPCVHVigRAZ.yEqHB4jAR.5.jk0aLEWYymbG3Foh/S2W3WjuW91qe', '2024-07-25 00:00:46'),
(7, '6743786543', 'pal', 'erE', '$2y$10$X3WhzBdK7A64sogfYju9MuOBdOsv1t16TokdriYQ/6dKdsdRzr4r2', '2024-07-25 15:41:14'),
(8, '8650047800', 'soney', 'village-pansar near bheat road saharanpur', '$2y$10$OsE5buNpitWy9XjEVgau7expNpVdaPLsNjsCqGnaXuZgiYM1MeGe.', '2024-07-26 16:29:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all items`
--
ALTER TABLE `all items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_no`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`);

--
-- Indexes for table `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`fashion_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`phone_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all items`
--
ALTER TABLE `all items`
  MODIFY `item_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `fashion`
--
ALTER TABLE `fashion`
  MODIFY `fashion_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `phone_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
