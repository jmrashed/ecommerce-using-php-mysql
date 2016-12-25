-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2016 at 12:47 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_seip_ecommerce28`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(3) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `email_address`, `password`) VALUES
(1, 'Seip PHP 28', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(3) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(1, 'Snart Phone', 'WEll', 1),
(4, 'Man Fashion', 'well<br>', 1),
(5, 'Kids Fashion', 'Well', 1),
(6, 'Woman Fashion', 'Well', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` varchar(50) NOT NULL,
  `activation_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `first_name`, `last_name`, `email_address`, `password`, `phone_number`, `blood_group`, `address`, `city`, `district`, `activation_status`) VALUES
(1, 'Ridoy', 'Khan', 'sm@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123', '2', 'asdasdasdasd', 'dhaka', 'bangladesh', 0),
(2, 'Sahadat', 'kamal', 'bdjobs@gmail.com', '202cb962ac59075b964b07152d234b70', '12', '1', 'sadasdasd', 'dhaka', 'bangladesh', 0),
(3, 'sdasdasd', 'asdasdasd', 'info@shihoron.com', 'b070612887d2b1afd69aae905ec47e43', '234234', '3', 'sdfsdfsdfsdf', 'asdasdsd', 'asdasdasdasd', 0),
(4, 'Hasib', 'Khan', 'sm@gmail.com', '202cb962ac59075b964b07152d234b70', '123', '2', 'Dhaka', 'Dhaka', 'Dhaka', 0),
(5, 'hasant', 'ali', 'hasant@gmail.com', '202cb962ac59075b964b07152d234b70', '1234567', '1', 'Dhanmondhi', 'Dhaka', 'Dhaka', 0),
(6, 'SMO', 'Sojib', 'amo@gmail.com', '202cb962ac59075b964b07152d234b70', '01716151413', '1', 'Farmgate', 'dhaka', 'Dhaka', 0),
(7, 'Helal ', 'Uddin', 'helal@gmail.com', '25f9e794323b453885f5181f1b624d0b', '01711456123', '3', 'Mmirpur', 'dhaka', 'bangladesh', 0),
(8, 'Helal ', 'Uddin', 'helal@gmail.com', '25f9e794323b453885f5181f1b624d0b', '01711456123', '3', 'Mmirpur', 'dhaka', 'bangladesh', 0),
(9, 'Helal ', 'Uddin', 'helal@gmail.com', '25f9e794323b453885f5181f1b624d0b', '01711456123', '3', 'Mmirpur', 'dhaka', 'bangladesh', 0),
(10, 'Helal ', 'Uddin', 'helal@gmail.com', '25f9e794323b453885f5181f1b624d0b', '01711456123', '3', 'Mmirpur', 'dhaka', 'bangladesh', 0),
(11, 'Topu', 'chowdhary', 'chowdhary@gmail.com', '202cb962ac59075b964b07152d234b70', '01714151613', '1', 'Mirpur', 'Dhaka', 'bangladesh', 0),
(12, 'Hasib', 'kamal', 'mehedi@gmail.com', '4297f44b13955235245b2497399d7a93', '312312', '4', 'sadasdas', 'asdasd', 'asdasdasd', 0),
(13, 'atrmnob', 'chowdhary', 'sm@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '2', 'asdasdasdasd', 'asdasdasdasas', 'asdasdas', 1),
(14, 'test', 'test', 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee', '453455', '1', '34345', 'Dhaka', 'Dhaja', 0),
(15, 'test', 'test', 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee', '453455', '1', '34345', 'Dhaka', 'Dhaja', 0),
(16, 'trst', 'tret', 'test@user.com', '098f6bcd4621d373cade4e832627b4f6', '354345', '7', 'ret', 'ert', 'ret', 0),
(17, 'trst', 'tret', 'test@user.com', '098f6bcd4621d373cade4e832627b4f6', '354345', '7', 'ret', 'ert', 'ret', 0),
(18, 'trst', 'tret', 'test@user.com', '098f6bcd4621d373cade4e832627b4f6', '354345', '7', 'ret', 'ert', 'ret', 0),
(19, 'trst', 'tret', 'test@user.com', '098f6bcd4621d373cade4e832627b4f6', '354345', '7', 'ret', 'ert', 'ret', 0),
(20, 'trst', 'tret', 'test@user.com', '098f6bcd4621d373cade4e832627b4f6', '354345', '7', 'ret', 'ert', 'ret', 0),
(21, 'trst', 'tret', 'test@user.com', '098f6bcd4621d373cade4e832627b4f6', '354345', '7', 'ret', 'ert', 'ret', 0),
(22, 'trst', 'tret', 'test@user.com', '098f6bcd4621d373cade4e832627b4f6', '354345', '7', 'ret', 'ert', 'ret', 0),
(23, 'trst', 'tret', 'test@user.com', '098f6bcd4621d373cade4e832627b4f6', '354345', '7', 'ret', 'ert', 'ret', 0),
(24, 'testt', 'testt', 'testt@user.com', '147538da338b770b61e592afc92b1ee6', '32333333333333333', '6', 'testt', 'Dhaka', 'Dhaja', 0),
(25, 'testt', 'testt', 'testt@user.com', '147538da338b770b61e592afc92b1ee6', '32333333333333333', '6', 'testt', 'Dhaka', 'Dhaja', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `name`, `email`, `feedback`, `datetime`) VALUES
(1, 'Dr. Abdullah Al-Amin', 'admin@admin.com', 'teta', '2016-12-25 03:32:01'),
(2, 'Dr. Abdullah Al-Amin', 'admin@admin.com', 'teta', '2016-12-25 03:32:01'),
(3, 'Abdullah Shaheen', 'admin@admin.com', 'TEst . Thank you', '2016-12-25 03:33:26'),
(4, 'Abdullah Shaheen', 'admin@admin.com', 'TEst . Thank you', '2016-12-25 03:33:27'),
(5, 'Md Rofik Ahmed', 'rupa@gmail.com', 'rrrrrrrrrrrr', '2016-12-25 03:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE `tbl_manufacturer` (
  `manufacturer_id` int(3) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `manufacturer_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_description`, `publication_status`) VALUES
(2, 'BITM', 'Well', 0),
(3, 'Sony', '=============', 1),
(4, 'Samsung', 'well', 1),
(5, 'Arong', 'well', 1),
(6, 'Talha Training', 'Well', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` float(10,2) NOT NULL,
  `order_status` varchar(25) NOT NULL DEFAULT 'pending',
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `order_date`) VALUES
(1, 5, 2, 45540.00, 'pending', '2016-08-09 14:10:35'),
(2, 5, 2, 1840.00, 'pending', '2016-08-09 14:12:45'),
(3, 13, 3, 48645.00, 'pending', '2016-08-11 13:20:32'),
(4, 25, 4, 3105.00, 'pending', '2016-12-25 11:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_quantity` int(7) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES
(1, 1, 4, 'Sony X-periz Z5', 38000.00, 1, '../assets/product_images/sony.jpg'),
(2, 1, 1, 'T-shirt', 1600.00, 1, '../assets/product_images/indweex.jpg'),
(3, 2, 6, 'Fatua', 1600.00, 1, '../assets/product_images/index.jpg'),
(4, 3, 5, 'Shari', 2700.00, 1, '../assets/product_images/Satellite-U925T-04-copy.jpg'),
(5, 3, 1, 'T-shirt', 1600.00, 1, '../assets/product_images/indweex.jpg'),
(6, 3, 4, 'Sony X-periz Z5', 38000.00, 1, '../assets/product_images/sony.jpg'),
(7, 4, 5, 'Shari', 2700.00, 1, '../assets/product_images/Satellite-U925T-04-copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(40) NOT NULL,
  `payment_status` varchar(25) NOT NULL DEFAULT 'pending',
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `order_id`, `payment_type`, `payment_status`, `payment_date`) VALUES
(1, 1, 'cash_on_delivery', 'pending', '2016-08-09 14:10:35'),
(2, 2, 'cash_on_delivery', 'pending', '2016-08-09 14:12:45'),
(3, 3, 'cash_on_delivery', 'pending', '2016-08-11 13:20:32'),
(4, 4, 'cash_on_delivery', 'pending', '2016-12-25 11:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `category_id` int(3) NOT NULL,
  `manufacturer_id` int(3) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `stock_amount` int(7) NOT NULL,
  `minimum_stock_amount` varchar(5) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_long_description` text NOT NULL,
  `product_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `manufacturer_id`, `product_price`, `stock_amount`, `minimum_stock_amount`, `product_short_description`, `product_long_description`, `product_image`, `publication_status`) VALUES
(1, 'T-shirt', 4, 5, 1600.00, 50, '10', 'WEll product. WEll product.WEll product.WEll product.WEll product.WEll product.WEll product.WEll product.WEll product.WEll product.WEll product. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.', 'WEll product. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.WEll product. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.WEll product. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.WEll product. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.WEll product. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.WEll product. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.WEll product. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct. WEll product.WEll product.WEll product.WEll product.WEll \r\nproduct.WEll product.WEll product.WEll product.WEll product.', '../assets/product_images/indweex.jpg', 1),
(2, 'Samsung Galaxy DUOS', 1, 4, 25000.00, 15, '3', 'WEll description. WEll description.WEll description.WEll description.WEll description.WEll description.WEll description.WEll description. WEll description.WEll description.WEll description.WEll description.WEll description.WEll description.', 'WEll description. WEll description.WEll description.WEll \r\ndescription.WEll description.WEll description.WEll description.WEll \r\ndescription. WEll description.WEll description.WEll description.WEll \r\ndescription.WEll description.WEll description.WEll description. WEll description.WEll description.WEll \r\ndescription.WEll description.WEll description.WEll description.WEll \r\ndescription. WEll description.WEll description.WEll description.WEll \r\ndescription.WEll description.WEll description.WEll description. WEll description.WEll description.WEll \r\ndescription.WEll description.WEll description.WEll description.WEll \r\ndescription. WEll description.WEll description.WEll description.WEll \r\ndescription.WEll description.WEll description.WEll description. WEll description.WEll description.WEll \r\ndescription.WEll description.WEll description.WEll description.WEll \r\ndescription. WEll description.WEll description.WEll description.WEll \r\ndescription.WEll description.WEll description.WEll description. WEll description.WEll description.WEll \r\ndescription.WEll description.WEll description.WEll description.WEll \r\ndescription. WEll description.WEll description.WEll description.WEll \r\ndescription.WEll description.WEll description.WEll description. WEll description.WEll description.WEll \r\ndescription.WEll description.WEll description.WEll description.WEll \r\ndescription. WEll description.WEll description.WEll description.WEll \r\ndescription.WEll description.WEll description.', '../assets/product_images/PA080545.jpg', 1),
(3, 'Shari', 6, 5, 2500.00, 30, '10', 'Well product. Well product. Well product. Well product. Well product. Well product. Well product. Well product. Well product. Well product. Well product. Well product. Well product. Well product. Well product', 'Well product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well product. Well product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well product. Well product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well product Well product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well product Well product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well productWell product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well productWell product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well productWell product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well productWell product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well product. \r\nWell product. Well product. Well product. Well product. Well product', '../assets/product_images/image_2.jpg', 1),
(4, 'Sony X-periz Z5', 1, 3, 38000.00, 10, '2', 'Read this articleRead this articleRead this articleRead this articleRead this articleRead this article Read this articleRead this articleRead this articleRead this articleRead this articleRead this articleRead this articleRead this articleRead this articleRead this articleRead this articleRead this article', 'Network\r\n<table style="height: 24px;" cellspacing="0"><tbody><tr class="tr-hover"><th rowspan="15" scope="row"><br></th><td class="ttl"><a href="http://www.gsmarena.com/network-bands.php3">Technology</a></td>\r\n<td class="nfo"><a href="http://www.gsmarena.com/sony_xperia_z5-7534.php#" class="link-network-detail collapse">GSM / HSPA / LTE</a></td>\r\n</tr>\r\n\r\n\r\n\r\n	\r\n	\r\n\r\n</tbody></table>\r\n\r\n\r\n<table cellspacing="0">\r\n<tbody><tr>\r\n<th rowspan="2" scope="row">Launch</th>\r\n<td class="ttl"><a href="http://www.gsmarena.com/sony_xperia_z5-7534.php#">Announced</a></td>\r\n<td class="nfo">2015, September</td>\r\n</tr>	\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/sony_xperia_z5-7534.php#">Status</a></td>\r\n<td class="nfo">Available. Released 2015, October</td>\r\n</tr>\r\n</tbody></table>\r\n\r\n\r\n<table cellspacing="0">\r\n<tbody><tr>\r\n<th rowspan="6" scope="row">Body</th>\r\n<td class="ttl"><a href="http://www.gsmarena.com/sony_xperia_z5-7534.php#">Dimensions</a></td>\r\n<td class="nfo">146 x 72 x 7.3 mm (5.75 x 2.83 x 0.29 in)</td>\r\n</tr><tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/sony_xperia_z5-7534.php#">Weight</a></td>\r\n<td class="nfo">154 g (5.43 oz)</td>\r\n</tr>\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=sim">SIM</a></td>\r\n<td class="nfo">Nano-SIM</td>\r\n</tr>\r\n<tr><td class="ttl">&nbsp;</td><td class="nfo">- IP68 certified - dust proof and water resistant over 1.5 meter and 30 minutes</td></tr>\r\n		\r\n</tbody></table>\r\n\r\n\r\n<table cellspacing="0">\r\n<tbody><tr>\r\n<th rowspan="6" scope="row">Display</th>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=display-type">Type</a></td>\r\n<td class="nfo">IPS LCD capacitive touchscreen, 16M colors</td>\r\n</tr>\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/sony_xperia_z5-7534.php#">Size</a></td>\r\n<td class="nfo">5.2 inches (~69.6% screen-to-body ratio)</td>\r\n</tr>\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/sony_xperia_z5-7534.php#">Resolution</a></td>\r\n<td class="nfo">1080 x 1920 pixels (~428 ppi pixel density)</td>\r\n</tr>\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=multitouch">Multitouch</a></td>\r\n<td class="nfo">Yes, up to 10 fingers</td>\r\n</tr>\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=screen-protection">Protection</a></td>\r\n<td class="nfo">Scratch-resistant glass, oleophobic coating</td>\r\n</tr>\r\n<tr><td class="ttl">&nbsp;</td><td class="nfo">- Triluminos display<br>\r\n- X-Reality Engine</td></tr>\r\n		\r\n</tbody></table>\r\n\r\n\r\n<table cellspacing="0">\r\n<tbody><tr>\r\n<th rowspan="4" scope="row">Platform</th>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=os">OS</a></td>\r\n<td class="nfo">Android OS, v5.1.1 (Lollipop), upgradable to v6.0 (Marshmallow)</td>\r\n</tr>\r\n<tr><td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=chipset">Chipset</a></td>\r\n<td class="nfo">Qualcomm MSM8994 Snapdragon 810</td>\r\n</tr>\r\n<tr><td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=cpu">CPU</a></td>\r\n<td class="nfo">Quad-core 1.5 GHz Cortex-A53 &amp; Quad-core 2.0 GHz Cortex-A57</td>\r\n</tr>\r\n<tr><td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=gpu">GPU</a></td>\r\n<td class="nfo">Adreno 430</td>\r\n</tr>\r\n</tbody></table>\r\n\r\n\r\n<table cellspacing="0">\r\n<tbody><tr>\r\n<th rowspan="5" scope="row">Memory</th>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=memory-card-slot">Card slot</a></td>\r\n\r\n\r\n<td class="nfo">microSD, up to 256 GB (dedicated slot)</td></tr>\r\n\r\n	\r\n\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=dynamic-memory">Internal</a></td>\r\n<td class="nfo">32 GB, 3 GB RAM</td>\r\n</tr>\r\n	\r\n\r\n			\r\n\r\n\r\n</tbody></table>\r\n\r\n\r\n<table cellspacing="0">\r\n<tbody><tr>\r\n<th rowspan="4" scope="row">Camera</th>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=camera">Primary</a></td>\r\n<td class="nfo">23 MP, f/2.0, 24mm, phase detection autofocus, LED flash, <a href="http://www.gsmarena.com/piccmp.php3?idType=1&amp;idPhone1=7534&amp;nSuggest=1">check quality</a></td>\r\n</tr>\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=camera">Features</a></td>\r\n<td class="nfo">1/2.3" sensor size, geo-tagging, touch focus, face detection, HDR, panorama</td>\r\n</tr>\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=camera">Video</a></td>\r\n<td class="nfo">2160p@30fps, 1080p@60fps, 720p@120fps, HDR, <a href="http://www.gsmarena.com/vidcmp.php3?idType=3&amp;idPhone1=7534&amp;nSuggest=1">check quality</a></td>\r\n</tr>\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=video-call">Secondary</a></td>\r\n<td class="nfo">5.1 MP, f/2.4, 1080p, HDR</td>\r\n</tr>\r\n</tbody></table>\r\n\r\n\r\n<table cellspacing="0">\r\n<tbody><tr>\r\n<th rowspan="4" scope="row">Sound</th>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=call-alerts">Alert types</a></td>\r\n<td class="nfo">Vibration; MP3, WAV ringtones</td>\r\n	</tr>\r\n	\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=loudspeaker">Loudspeaker</a> </td>\r\n<td class="nfo">Yes, with stereo speakers</td>\r\n</tr>\r\n\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=audio-jack">3.5mm jack</a> </td>\r\n<td class="nfo">Yes</td>\r\n</tr>\r\n	\r\n\r\n<tr><td class="ttl">&nbsp;</td><td class="nfo">- 24-bit/192kHz audio<br>\r\n- Active noise cancellation with dedicated mic</td></tr>\r\n	\r\n</tbody></table>\r\n\r\n\r\n\r\n<table cellspacing="0"><tbody><tr>\r\n<th rowspan="9" scope="row">Comms</th>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=wi-fi">WLAN</a></td>\r\n<td class="nfo">Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, DLNA, hotspot</td>\r\n</tr>\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=bluetooth">Bluetooth</a></td>\r\n<td class="nfo">v4.1, A2DP, aptX</td>\r\n</tr>\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=gps">GPS</a></td>\r\n<td class="nfo">Yes, with A-GPS, GLONASS/ BDS (market dependant)</td>\r\n</tr>  \r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=nfc">NFC</a></td>\r\n<td class="nfo">Yes</td>\r\n</tr>\r\n	\r\n	\r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=fm-radio">Radio</a></td>\r\n<td class="nfo">FM radio, RDS</td>\r\n</tr>\r\n   \r\n<tr>\r\n<td class="ttl"><a href="http://www.gsmarena.com/glossary.php3?term=usb">USB</a></td>\r\n<td class="nfo">microUSB v2.0 (MHL 3 TV-out), USB Host</td></tr></tbody></table>', '../assets/product_images/sony.jpg', 1),
(5, 'Shari', 6, 5, 2700.00, 50, '10', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. ', '../assets/product_images/Satellite-U925T-04-copy.jpg', 1),
(6, 'Fatua', 6, 5, 1600.00, 100, '10', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor \r\nsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. ', '../assets/product_images/index.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `full_name`, `email_address`, `phone_number`, `address`, `city`, `district`) VALUES
(1, 'Hasib Khan', 'sm@gmail.com', '123', 'Dhaka', 'Dhaka', 'Dhaka'),
(2, 'Mehedi Hasan', 'mehedi@gmail.com', '0177161514', 'Mohammadur', 'Dhaka', 'Dhaka'),
(3, 'atrmnob chowdhary', 'sm@gmail.com', '123456', 'asdasdasdasd', 'asdasdasdasas', 'asdasdas'),
(4, 'testt testt', 'testt@user.com', '32333333333333333', 'testt', 'Dhaka', 'Dhaja');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temp_cart`
--

CREATE TABLE `tbl_temp_cart` (
  `temp_cart_id` int(11) NOT NULL,
  `session_id` varchar(256) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_quantity` int(7) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_temp_cart`
--

INSERT INTO `tbl_temp_cart` (`temp_cart_id`, `session_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES
(1, '', 4, 'Sony X-periz Z5', 38000.00, 1, '../assets/product_images/sony.jpg'),
(2, '', 1, 'T-shirt', 1600.00, 3, '../assets/product_images/indweex.jpg'),
(3, '', 1, 'T-shirt', 1600.00, 1, '../assets/product_images/indweex.jpg'),
(6, 'e0agdntg8capacclfv4uaas802', 4, 'Sony X-periz Z5', 38000.00, 1, '../assets/product_images/sony.jpg'),
(8, '487mssdlgletf7cf0m6lv5toi1', 2, 'Samsung Galaxy DUOS', 25000.00, 1, '../assets/product_images/PA080545.jpg'),
(9, '487mssdlgletf7cf0m6lv5toi1', 1, 'T-shirt', 1600.00, 1, '../assets/product_images/indweex.jpg'),
(11, '487mssdlgletf7cf0m6lv5toi1', 4, 'Sony X-periz Z5', 38000.00, 1, '../assets/product_images/sony.jpg'),
(13, 'g2qourvjeemt7ugsjbam8m6080', 1, 'T-shirt', 1600.00, 1, '../assets/product_images/indweex.jpg'),
(14, 'bv54n9cqoe7hcg2is54v982bb1', 6, 'Fatua', 1600.00, 1, '../assets/product_images/index.jpg'),
(16, 'sqgc8q8so7e6hu171kkb8v4g56', 6, 'Fatua', 1600.00, 1, '../assets/product_images/index.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_temp_cart`
--
ALTER TABLE `tbl_temp_cart`
  ADD PRIMARY KEY (`temp_cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `manufacturer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_temp_cart`
--
ALTER TABLE `tbl_temp_cart`
  MODIFY `temp_cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
