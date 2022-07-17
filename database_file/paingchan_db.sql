-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 06:25 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paingchan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_brand`
--

CREATE TABLE `add_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `brand_image` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `add_brand`
--

INSERT INTO `add_brand` (`brand_id`, `brand_name`, `brand_image`, `status`) VALUES
(7, 'None', '66303339_2582730608444528_2015951283877314560_n.jpg', 0),
(10, 'Reaction Brand', 'kenneth-cole-reaction-logo-vector.png', 1),
(11, 'Nautica Brand', '88f3994160b554a2507f8e348240a036.jpg', 1),
(12, 'Halina Brand', 'images.png', 1),
(13, 'Bensherman Brand', 'ben-sherman-logo-black-on-white-january-2020-500px_b04a3d50-06bb-45cb-a635-d910c5dd47dc.png', 1),
(16, 'Transword Brand', 'images.png', 1),
(17, 'samsonight', 'download.png', 1),
(18, 'skyway', 'TsVsQwWV_400x400.jpg', 1),
(19, 'KN-95', 'P05KN95B_01.jpg', 0),
(20, 'Lego', 'LEGO_logo.svg.png', 0),
(21, '  Midea Brand', 'download (1).png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`cat_id`, `cat_name`, `status`) VALUES
(5, 'မီးဖိုချောင်းသုံးများ', 1),
(6, 'အရုပ်များ', 1),
(8, ' Medication', 1),
(9, 'Baby Accessory', 1),
(10, 'None', 1),
(11, 'Mask', 1),
(12, 'အိမ်အသုံးဆောင်', 1),
(14, 'Beauty', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `phone`, `image`, `admin_email`, `password`, `register_date`) VALUES
(8, 'admin', '090909090', 'My project (1).jpg', 'admin@admin.com', '$2y$10$9uN1sxKfnugAvxoxb6esjeOaEuzrAFHNUBK255rBFJLF5GNoG.nii', '2022-07-17 14:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `slug` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` varchar(1000) COLLATE utf8_bin NOT NULL,
  `status` tinyint(4) NOT NULL,
  `category` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `main_customer`
--

CREATE TABLE `main_customer` (
  `id` int(100) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL,
  `social_media` varchar(255) COLLATE utf8_bin NOT NULL,
  `social_link` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `main_customer`
--

INSERT INTO `main_customer` (`id`, `name`, `phone`, `image`, `address`, `social_media`, `social_link`) VALUES
(6, ' u mya', '+95999929001', '79386378_2404758789789077_8674955505438818304_n.jpg', 'marlamyine\r\nmarlamyine', '1', 'ww.falsiej');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `code` varchar(255) COLLATE utf8_bin NOT NULL,
  `brand_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `sub_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `warehouse_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `suppliers_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `suppliers_price` varchar(255) COLLATE utf8_bin NOT NULL,
  `parkin_price` varchar(255) COLLATE utf8_bin NOT NULL,
  `price` varchar(255) COLLATE utf8_bin NOT NULL,
  `qty` varchar(255) COLLATE utf8_bin NOT NULL,
  `parkin_qty` varchar(255) COLLATE utf8_bin NOT NULL,
  `link` varchar(255) COLLATE utf8_bin NOT NULL,
  `img1` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` tinyint(4) NOT NULL,
  `tag` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `brand_id`, `cat_id`, `sub_id`, `warehouse_id`, `suppliers_id`, `suppliers_price`, `parkin_price`, `price`, `qty`, `parkin_qty`, `link`, `img1`, `description`, `status`, `tag`) VALUES
(16, 'Natica Black', '062-black-blue', '11', '14', '7', '1', '3', '0', '165000', '165000', '199', '199', 'www.youtube.com', 'My project.jpg', 'Natica 062-black-blue', 1, 'luggage');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `social_media` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `social_media`) VALUES
(1, 'facebook');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_id` int(11) NOT NULL,
  `brand_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `sub_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `brand_id`, `cat_id`, `sub_name`, `status`) VALUES
(7, '7', '10', ' None', 1),
(8, '10', '2', 'Reaction Luggage', 1),
(9, '11', '2', 'Nautica Luggage', 1),
(10, '12', '2', 'Halina Luggage', 1),
(11, '13', '2', 'Bensherman Luggage', 1),
(12, '16', '2', 'Transword Luggage', 1),
(13, '17', '2', 'samsonight luggage', 1),
(14, '18', '2', 'Skyway luggage', 1),
(15, '7', '13', '  luggage cover with zip', 1),
(18, '7', '5', 'ဖန်ဘူး', 1),
(20, '7', '9', 'underware', 1),
(21, '20', '6', 'Lego', 1),
(22, '7', '13', 'luggage cover without zip', 1);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `sup_id` int(11) NOT NULL,
  `sup_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `sup_phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `sup_image` varchar(255) COLLATE utf8_bin NOT NULL,
  `sup_address` varchar(255) COLLATE utf8_bin NOT NULL,
  `sup_city` varchar(255) COLLATE utf8_bin NOT NULL,
  `social_media` varchar(255) COLLATE utf8_bin NOT NULL,
  `social_link` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`sup_id`, `sup_name`, `sup_phone`, `sup_image`, `sup_address`, `sup_city`, `social_media`, `social_link`) VALUES
(3, 'unknown', '+95999929001', '107342770_761724201264402_8703068421145217462_n.jpg', '', 'yangon', '1', 'ww.falsiej'),
(5, 'thae su su su', '+959384938493 --0', '107221907_313752746467621_5302698173893628715_n.png', 'marlamyinemarlamyine\r\n', 'yangon --0', '2', 'ww.falsiej --0'),
(6, 'whoami', '09999999', '118654668_632092271072115_8641483771821816033_n.jpg', 'marlamyine\r\nmarlamyine', 'yangon', '1', 'ww.falsiej.www');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `warehouse` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `warehouse`) VALUES
(1, '  yangon'),
(3, 'Pyin_Oo_Lwin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_brand`
--
ALTER TABLE `add_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_customer`
--
ALTER TABLE `main_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_brand`
--
ALTER TABLE `add_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_customer`
--
ALTER TABLE `main_customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
