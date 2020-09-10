-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2020 at 05:36 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopify`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `user_id` int(15) NOT NULL,
  `prod_id` int(15) NOT NULL,
  `prod_quantity` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`user_id`, `prod_id`, `prod_quantity`) VALUES
(20201002, 21, 1),
(20201002, 43, 1),
(20201002, 1, 1),
(20201001, 48, 2),
(20201207, 45, 2),
(20201207, 43, 2),
(20201207, 12, 1),
(20201005, 800173, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `userid` int(15) DEFAULT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(50) NOT NULL,
  `code` varchar(30) NOT NULL,
  `percentage` int(5) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `prod_id` varchar(512) DEFAULT NULL,
  `shop_name` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`coupon_id`, `coupon_name`, `code`, `percentage`, `amount`, `prod_id`, `shop_name`, `category`) VALUES
(111001, 'Merco Bonus Black Friday', 'mbbf50', 50, NULL, NULL, NULL, NULL),
(111002, 'Vanish Dish Washer Cashback Offer', 'vanish50', NULL, 50, NULL, 'Vanish', NULL),
(111003, 'Santa Fun Holiday Cash Wining Week Offer', 'saaf2020', 20, NULL, NULL, NULL, NULL),
(111004, 'Appo Mobile Excessories Cashback Offer', 'appo150', NULL, 150, NULL, 'Appo', NULL),
(111005, 'Black Friday Sale Up To 40%', 'black40week', 40, NULL, NULL, NULL, NULL),
(111006, 'Kazi & kazi Fun Wheel Bonus Cash Offer', 'k&k15', 15, NULL, NULL, NULL, NULL),
(111007, 'Saaibo Run Week July Sales', 'srweek2020', 10, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dispute`
--

CREATE TABLE `tbl_dispute` (
  `fullname` varchar(50) NOT NULL,
  `order_id` varchar(30) NOT NULL,
  `reason` varchar(256) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `userid` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `inv_id` int(11) NOT NULL,
  `inv_date` date DEFAULT NULL,
  `invNum` varchar(150) DEFAULT NULL,
  `invSeq` varchar(20) DEFAULT NULL,
  `vat` int(11) DEFAULT NULL,
  `custID` int(11) DEFAULT NULL,
  `inv_created_by` varchar(100) DEFAULT NULL,
  `inv_createdDate` datetime DEFAULT NULL,
  `updateBy` varchar(100) DEFAULT NULL,
  `updateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `no` int(20) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `prod_name` varchar(150) DEFAULT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `prod_MRP_price` int(20) DEFAULT NULL,
  `total_price` int(20) DEFAULT NULL,
  `grand_price` int(20) NOT NULL,
  `creation_date` varchar(20) NOT NULL,
  `order_by` int(10) NOT NULL,
  `order_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`no`, `order_id`, `prod_name`, `prod_id`, `prod_qty`, `prod_MRP_price`, `total_price`, `grand_price`, `creation_date`, `order_by`, `order_status`) VALUES
(1, '2020-07-10-500800', 'Heiko Tama Lightening Haircare (Japnese)', 45, 2, 440, 880, 2370, '2020-07-10 11:30', 20201001, 'Paid'),
(2, '2020-07-10-500800', 'Hansa Hair Herbal Shampoo', 44, 2, 525, 1050, 2370, '2020-07-10 11:30', 20201001, 'Paid'),
(3, '2020-07-10-500800', 'Biocos beauty cream', 30, 2, 220, 440, 2370, '2020-07-10 11:30', 20201001, 'Paid'),
(4, '2020-07-10-500850', 'Cherry whitening Beauty Melatonin cream', 28, 2, 170, 340, 580, '2020-07-10 02:35', 20201002, 'Paid'),
(5, '2020-07-10-500850', 'Body Cream NO-1 ..Vietnam Whitening cream', 27, 2, 120, 240, 580, '2020-07-10 02:35', 20201002, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_details`
--

CREATE TABLE `tbl_prod_details` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(120) NOT NULL,
  `prod_brief` varchar(256) DEFAULT NULL,
  `prod_details` varchar(768) NOT NULL,
  `prod_MRP_price` varchar(50) NOT NULL,
  `prod_SELLER_price` varchar(20) DEFAULT NULL,
  `prod_qty` int(11) NOT NULL,
  `prod_rating` double(2,1) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `prod_shop` varchar(100) DEFAULT NULL,
  `prod_cat` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_details`
--

INSERT INTO `tbl_prod_details` (`prod_id`, `prod_name`, `prod_brief`, `prod_details`, `prod_MRP_price`, `prod_SELLER_price`, `prod_qty`, `prod_rating`, `created_date`, `prod_shop`, `prod_cat`) VALUES
(1, 'Lixiandi pearl whitening cream', NULL, 'Product Name : LIXIANDI PEARL WHITENING CREAM\r\nManufacturer : KGB global international\r\n\r\nImported By : KB enterprise\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '150', '165', 10, 0.0, '2020-03-27 17:18:00', 'Zodiac Pearl', 'Category 1'),
(2, 'Lanxi cherry kiwi tomato whitening cream', NULL, 'Very Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '180', '200', 10, 0.0, '2020-03-27 17:18:00', 'Chearing House', 'Category 1'),
(3, 'Lanxi apple and gingo whitening cream', NULL, 'Product Name : LANXI APPLE AND GINGO WHITENING CREAM\r\nManufacturer : Lara Cosmetics\r\n\r\nImported By : Lara enterprise\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '170', '175', 10, 0.0, '2020-03-27 17:18:00', 'Lara Cosmetics', 'Category 1'),
(4, 'kim whitening pearl cream', NULL, 'Product Name : KIM WHITENING PEARL CREAM\r\nManufacturer : Kim Cosmetics\r\n\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '122', '130', 18, 0.0, '2020-03-27 17:18:00', 'jamijoy', 'Category 1'),
(5, 'Aichun beauty whitening face cream', NULL, 'Product Name :AICHUN BEAUTY WHITENING FACE CREAM\r\nManufacturer : Kim Cosmetics\r\n\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '182', '190', 20, 0.0, '2020-03-27 17:18:00', 'Alita Light', 'Category 1'),
(6, 'Lanxi ginseng whitening beauty melatonin cream', NULL, 'LANXI GINSENG WHITENING BEAUTY MELATONIN CREAM\r\nManufacturer : Kim Cosmetics\r\n\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '150', '190', 20, 0.0, '2020-03-27 17:18:00', 'Alita Light', 'Category 1'),
(7, 'Dermeinaier egg shell yeast mask cream', NULL, 'Product Name :DERMEINAIER EGG SHELL YEAST MASK CREAM\r\nManufacturer : Kim Cosmetics\r\n\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '110', '150', 10, 0.0, '2020-03-27 17:18:00', 'Tribal Herbs', 'Category 1'),
(8, 'Bio active facial ehitening cream for men', NULL, 'Product Name :Bio active facial ehitening cream for men\r\nManufacturer : Kim Cosmetics\r\n\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '170', '200', 6, 0.0, '2020-03-27 17:18:00', 'Zodiac Pearl', 'Category 2'),
(9, 'Bio active face whitening cream', NULL, 'Product Name Bio active face whitening cream\r\nManufacturer : Kim Cosmetics\r\n\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '180', '200', 6, 0.0, '2020-03-27 17:18:00', 'Zodiac Pearl', 'Category 2'),
(10, 'ALIKE boost luster Superior whitening cream', NULL, 'Product Name :ALIKE boost luster Superior whitening cream\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '110', '120', 6, 0.0, '2020-03-27 17:18:00', 'Zodiac Pearl', 'Category 2'),
(11, '7 days plastic whitening regeneration cream', NULL, 'Product Name :7 DAYS PLASTIC WHITENING REGENERATION CREAM\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '150', '170', 6, 0.0, '2020-03-27 17:18:00', 'Chearing House', 'Category 2'),
(12, 'Garnier light complete farness cream', NULL, 'Product Name :GARNIER LIGHT COMPLETE FARNESS CREAM\r\nManufacturer : Kim Cosmetics\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '180', '200', 4, 0.0, '2020-03-27 17:18:00', 'Chearing House', 'Category 2'),
(13, 'zafran whitening cream', NULL, 'Product Name :ZAFRAN WHITENING CREAM\r\nManufacturer : Kim Cosmetics\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '120', '150', 4, 0.0, '2020-03-27 17:18:00', 'Chearing House', 'Category 2'),
(14, 'Gul white 7 in 1 cream', NULL, 'Product Name :GUL WHITE 7 IN 1 CREAM\r\nManufacturer : Kim Cosmetics\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '110', '130', 11, 0.0, '2020-03-27 17:18:00', 'Lara Cosmetics', 'Category 2'),
(15, '4k plus whitening cream', NULL, 'Product Name :4K PLUS WHITENING CREAM\r\nManufacturer : Kim Cosmetics\r\n\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '150', '250', 10, 0.0, '2020-03-27 17:18:00', 'Lara Cosmetics', 'Category 2'),
(16, 'Cathy doll L-Glutathione Magic cream', NULL, 'Product Name :Cathy doll L-Glutathione Magic cream\r\nManufacturer : Kim Cosmetics\r\n...................................................................................................................................\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '120', '150', 10, 0.0, '2020-03-27 17:18:00', 'Lara Cosmetics', 'Category 2'),
(17, 'Egg white & Cherry whitening cream', NULL, 'Egg white & Cherry whitening cream\r\nProduct Name : Egg white & Cherry whitening cream\r\nManufacturer : Kim Cosmetics\r\n...................................................................................................................................\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '140', '160', 5, 0.0, '2020-03-27 17:18:00', 'Alita Light', 'Category 3'),
(18, 'lanting Birds nest whitening cream', NULL, 'lanting Birds nest whitening cream\r\nManufacturer : Lara Cosmetics\r\n...................................................................................................................................\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '350', '380', 11, 0.0, '2020-03-27 17:18:00', 'Lara Cosmetics', 'Category 3'),
(19, 'Yc whitenimg Total Fairness cream & Herbal formula', NULL, 'Yc whitenimg Total Fairness cream & Herbal formula\r\nManufacturer : KGB global international\r\n\r\nImported By : KB enterprise\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '400', '450', 18, 0.0, '2020-03-27 17:18:00', 'Chearing House', 'Category 3'),
(20, 'U white peral cream Ginseng whitening cream', NULL, 'U white peral cream Ginseng whitening cream\r\nManufacturer : Cute Cosmetics\r\n\r\nImported By : Tribal Herbs\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '630', '650', 12, 0.0, '2020-03-27 17:18:00', 'Tribal Herbs', 'Category 3'),
(21, 'Whitening Rose Beauty cream', NULL, 'Whitening Rose Beauty cream\r\nManufacturer : Rose Parlor Limited\r\n\r\nImported By : KB enterprise\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '545', '545', 12, 0.0, '2020-03-28 17:50:00', 'Lara Cosmetics', 'Category 3'),
(22, 'Berry plus Extra  whitening cream', NULL, 'Berry plus Extra  whitening cream\r\nManufacturer : Rose Parlor Limited\r\n\r\nImported By : Cute Bangladesh\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '600', '600', 11, 0.0, '2020-03-28 17:46:00', 'Chearing House', 'Category 3'),
(23, 'Collagen Deep cleansing snail whitening cream', NULL, 'Collagen Deep cleansing snail whitening cream\r\nImported By : Cute Bangladesh\r\n\r\nAuthentic Product ***\r\n- Keep product in cold place\r\n- Keep out of Children reach\r\n- Rub the mosturizer cacrefully arround face\r\n- Remove black layer mask carefully', '1200', '1280', 11, 0.0, '2020-03-28 17:45:00', 'Cute Bangladesh', 'Category 3'),
(24, '2 pcs FEIQUE herbal extract skin whitening Anti-Freckle cream', NULL, '2 pcs FEIQUE herbal extract skin whitening Anti-Freckle cream\r\nManufacturer : Cute Bangladesh\r\n----------------------------------------------------------------\r\nDescription:\r\n- Very Enlightenning Product\r\n- Great to use\r\n- For smoothy scene\r\n- Dark Eye Circle Remover\r\n- Very Good Product\r\n- Keep in cold and light place', '865', '870', 11, 0.0, '2020-03-28 17:42:00', 'Cute Bangladesh', 'Category 3'),
(25, 'Lanxi pearl whitening Beauty Melatonin cream', NULL, 'Lanxi pearl whitening Beauty Melatonin cream\r\nManufacturer : Lanxi Indonesia Crp.\r\nMade in INDONESIA\r\n----------------------------------------------------------------\r\nDescription:\r\n- Very Enlightenning Product\r\n- Great to use\r\n- For smoothy scene\r\n- Dark Eye Circle Remover\r\n- Very Good Product\r\n- Keep in cold and light place', '900', '910', 14, 0.0, '2020-03-28 17:40:00', 'Lanxi Indonesia', 'Category 4'),
(26, 'Lanxi Birds Nest whitenimg cream', NULL, 'Lanxi pearl whitening Beauty Melatonin cream\r\nManufacturer : Lanxi Indonesia Crp.\r\nMade in INDONESIA\r\n----------------------------------------------------------------\r\nDescription:\r\n- Very Enlightenning Product\r\n- Great to use\r\n- For smoothy scene\r\n- Dark Eye Circle Remover\r\n- Very Good Product\r\n- Keep in cold and light place', '650', '650', 14, 0.0, '2020-03-28 17:38:00', 'Lanxi Indonesia', 'Category 4'),
(27, 'Body Cream NO-1 ..Vietnam Whitening cream', NULL, 'Body Cream NO-1 ..Vietnam Whitening cream\r\nManufacturer : Aroveta\r\nMade in VIETNAM\r\n----------------------------------------------------------------\r\nDescription:\r\n- Very Enlightenning Product\r\n- Great to use\r\n- For smoothy scene\r\n- Dark Eye Circle Remover\r\n- Very Good Product\r\n- Keep in cold and light place', '620', '650', 14, 0.0, '2020-03-28 17:28:00', 'Zodiac Pearl', 'Category 4'),
(28, 'Cherry whitening Beauty Melatonin cream', NULL, 'Cherry whitening Beauty Melatonin cream\r\nManufacturer : Cute Bangladesh\r\nMade in Bangladesh\r\n----------------------------------------------------------------\r\nDescription:\r\n- Very Enlightenning Product\r\n- Great to use\r\n- For smoothy scene\r\n- Dark Eye Circle Remover\r\n- Very Good Product\r\n- Keep in cold and light place', '400', '450', 14, 0.0, '2020-03-28 17:10:00', 'Cute Bangladesh', 'Category 4'),
(29, 'LAB-Y whitening Booster body cream', NULL, 'LAB-Y whitening Booster body cream\r\nManufacturer : Cute Bangladesh\r\nMade in Bangladesh\r\n----------------------------------------------------------------\r\nDescription:\r\n- Very Enlightenning Product\r\n- Great to use\r\n- For smoothy scene\r\n- Dark Eye Circle Remover\r\n- Very Good Product\r\n- Keep in cold and light place', '515', '520', 14, 0.0, '2020-03-28 17:18:00', 'Cute Bangladesh', 'Category 4'),
(30, 'Biocos beauty cream', NULL, 'Body Cream NO-1 ..Vietnam Whitening cream\r\nManufacturer : Cute Bangladesh\r\nMade in Bangladesh\r\n----------------------------------------------------------------\r\nDescription:\r\n- Very Enlightenning Product\r\n- Great to use\r\n- For smoothy scene\r\n- Dark Eye Circle Remover\r\n- Very Good Product\r\n- Keep in cold and light place', '350', '380', 14, 0.0, '2020-03-29 17:18:00', 'Cute Bangladesh', 'Category 4'),
(42, 'Hola Biscuit', NULL, 'Manufactured By : Habla Interprise, Vola\r\nMade In Bangladesh\r\n8 piece/pack\r\n\r\n** WHole Sale', '60', '62', 25, 0.0, '2020-03-31 02:22:00', 'Habla Store', 'Category 4'),
(43, 'Ceilora Anti Hair Fall Shampoo', NULL, 'Ceilora Anti Hair Fall Shampoo\r\nCute Bangladesh Product\r\n\r\nYou Will love the Shampoo Very much, Naurishing and Very Shiney with milky absorber portion for hair for well care.', '300', '340', 35, 0.0, '2020-07-09 11:07:46', 'Tribal Herbs', 'Category 3'),
(44, 'Hansa Hair Herbal Shampoo', NULL, '* Repairs Hair Root\r\n* Prevents Hair Falling\r\n* Gives Shiny look\r\n* Perfect hair naurishment', '525', '560', 35, 0.0, '2020-07-09 11:12:51', 'Tribal Herbs', 'Category 3'),
(45, 'Heiko Tama Lightening Haircare (Japnese)', NULL, '* Repairs Hair Root\r\n* Prevents Hair Falling\r\nHeiko Tama Lightening Haircare (Japnese)\r\n4K PLUS WHITENING CREAM\r\nProduct Name :AICHUN BEAUTY WHITENING FACE CREAM\r\nManufacturer : Kim Cosmetics\r\n\r\nImported By : Herber Peral\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene\r\nDark Eye Circle Remover\r\nVery Good Product', '440', '450', 28, 0.0, '2020-07-09 11:17:39', 'Tribal Herbs', 'Category 3'),
(46, 'Laravel Anti Dandroff Shampoo', NULL, 'Very Well Eloquent Anti Hair fall, Anti drandroff shampoo to use and Authentic product \r\nImported from North Ramien, California , US. Use it for a shiney look and amazing treatment to the hair.', '220', '230', 20, NULL, '2020-07-11 05:48:12', 'Tribal Herbs', 'Category 2'),
(47, 'Kjeiro 0 Cal Anti Aging Cream For Beautiful Scene', NULL, 'A Very Light Product to use,\r\nAlways keep in cold places,\r\nKeep Rubbing...', '230', '250', 15, NULL, '2020-07-11 07:19:02', 'Alita Light', 'Category 1'),
(48, 'Alita Charm gel for smooth scene', NULL, 'Alovera Ingredient Light Mosturizing cream\r\nfor a healthy use\r\nA Very Light Product to use,\r\nAlways keep in cold places,\r\n\r\nKeep Rubbing...', '330', '350', 25, NULL, '2020-07-11 07:48:06', 'Alita Light', 'Category 1'),
(49, 'KGB lightening cream 250g', NULL, 'Product Name : KGB lightening cream 250g\r\nManufacturer : KGB global international\r\nProvider : Arhamania Group\r\nImported By : KB enterprise', '700', '780', 12, NULL, '2020-07-11 07:55:00', 'Alita Light', 'Category 1'),
(50, 'ISLAND Water Treatment Facial Smoolthering Cream', NULL, 'Dark Eye Circle Remover\r\nVery Good Product\r\n\r\nVery Enlightenning Product\r\nGreat to use\r\nFor smoothy scene', '250', '280', 20, NULL, '2020-07-11 06:57:10', 'Alita Light', 'Category 1'),
(800151, 'Lemon Liu Beans Curry Item 3 platters', 'Lemon liu curry 4 items 3 platter package.\r\n*Hot *Spicy *Indian Curry Dish', 'Lemon liu curry 4 items 3 platter package.\r\nIngredient:\r\n- Green Beans\r\n- Lemon Liu\r\n- Soup Harsh\r\n- Cucumber Salad \r\n- Soasauce', '280', '300', 10, NULL, '2020-08-27 08:03:28', 'Ranna Kitchen', 'Food'),
(800152, 'Red-Dark Pine Wine from Australia by Lemon Liu Recipe', 'This powerful wine is dark, deep and layered with cherry', 'This powerful wine is dark, deep and layered with cherry, blackberry, cacao, loam, cassis, blueberry jam, toasty oak and graphite-laced mineral aromas.  The mouth-feel is muscular, complex and seamless, with dark chocolate and blue-fruit flavors, ripe tannins and good acid structure. \r\n\r\nThis wine is rich and balanced, with aromas of dried plum, tobacco, cedar', '6450', '6500', 25, NULL, '2020-08-28 04:23:47', 'Lemon Liu Recipe', 'Food'),
(800153, 'Shirataki Noodles - Lemon Liu Recipe', 'Shirataki Noodles :  These Japanese, noodles, which translate to \'white waterfall\', are pretty much calorie-less, so it\'s no wonder they\'re such a popular pasta swap.', 'Use ramen noodles as the base for a yakisoba stir-fry. ...\r\nSimply add Sriracha. ...\r\nCrack an egg into the water for a creamier broth. ...\r\nAdd peanut butter for a Thai-inspired taste. ...\r\nAdd Japanese seasoning like furikake and togarashi. ...\r\nThrow some chashu pork on top. ...\r\nAdd bacon and a soft-boiled egg.', '200', '205', 10, NULL, '2020-08-28 04:25:54', 'Lemon Liu Recipe', 'Food'),
(800154, 'Italian origin Flattered Pizza 12\"', 'This Dish made typically of flattened bread dough spread with a savory mixture usually including tomatoes and cheese and often other toppings and baked. — called also pizza pie.', 'Types of Pizza\r\n1. Neapolitan Pizza	2. Chicago Pizza	3. New York-Style Pizza\r\n4. Sicilian Pizza	5. Greek Pizza	6. California Pizza\r\n7. Detroit Pizza	8. St. Louis Pizza	9. Types of Pizza Crust', '750', '750', 30, NULL, '2020-08-28 04:28:51', 'Lemon Liu Recipe', 'Food'),
(800155, 'Sony Xperia 5 II', 'Glass front (Gorilla Glass 6), glass back (Gorilla Glass 6), aluminum frame SIM	Single SIM (Nano-SIM) or Hybrid Dual SIM (Nano-SIM, dual stand-by)', 'NETWORK	Technology	\r\nGSM / HSPA / LTE / 5G\r\nLAUNCH	Announced	Exp. announcement 2020, September 17\r\nStatus	Rumored. Exp. release 2020, September\r\nBODY	Dimensions	158 x 68 x 8 mm (6.22 x 2.68 x 0.31 in)\r\nWeight	-\r\nBuild	Glass front (Gorilla Glass 6), glass back (Gorilla Glass 6), aluminum frame\r\nSIM	Single SIM (Nano-SIM) or Hybrid Dual SIM (Nano-SIM, dual stand-by)\r\n 	IP65/IP68 dust/water resistant (up to 1.5m for 30 mins)\r\nDISPLAY	Type	OLED capacitive touchscreen, 16M colors\r\nSize	6.1 inches, 86.9 cm2 (~80.9% screen-to-body ratio)\r\nResolution	1080 x 2520 pixels, 21:9 ratio (~449 ppi density)\r\nProtection	Corning Gorilla Glass 6\r\n 	HDR BT.2020\r\nTriluminos display\r\nX-Reality Engine\r\n120Hz refresh rate\r\nPLATFORM	OS	Android 10\r\nChipset	Qualcomm SM8250 Snapdragon 8', '33999', '34999', 5, NULL, '2020-08-28 04:36:27', 'Zero Arena Tech', 'Phones & Accessories'),
(800156, 'Asus ROG Phone 3', 'Processor	Qualcomm Snapdragon 720G', 'Performance	Snapdragon 720G\r\nStorage	64 GB\r\nCamera	48+8+5+2 MP\r\nBattery	5020 mAh\r\nDisplay	6.67\" (16.94 cm)\r\nRam	4 GB\r\nLaunch Date In India	March 17, 2020 (Official)\r\nKEY SPECS\r\nFront Camera	16 MP\r\nBattery	5020 mAh\r\nProcessor	Qualcomm Snapdragon 720G\r\nDisplay	6.67 inches\r\nRam	4 GB\r\nRear Camera	48 MP + 8 MP + 5 MP + 2 MP', '29999', '30000', 5, NULL, '2020-08-28 04:39:50', 'Jami', 'Phones & Accessories'),
(800157, 'XIAOMI REDMI NOTE 9 PRO SPECIFICATIONS', 'Priced at Rs 13,999, the Xiaomi Redmi Note 9 Pro certainly checks most of the boxes. You get a good-looking smartphone, reasonably good viewing experience', 'Performance	Snapdragon 720G\r\nStorage	64 GB\r\nCamera	48+8+5+2 MP\r\nBattery	5020 mAh\r\nDisplay	6.67\" (16.94 cm)\r\nRam	4 GB\r\nLaunch Date In India	March 17, 2020 (Official)\r\nKEY SPECS\r\nFront Camera	16 MP\r\nBattery	5020 mAh\r\nProcessor	Qualcomm Snapdragon 720G\r\nDisplay	6.67 inches\r\nRam	4 GB\r\nRear Camera	48 MP + 8 MP + 5 MP + 2 MP\r\nSPECIAL FEATURES\r\nOther Sensors	Light sensor, Proximity sensor, Accelerometer, Compass, Gyroscope\r\nFingerprint Sensor Position	Side\r\nFingerprint Sensor	Yes\r\n\r\nGENERAL\r\nQuick Charging	Yes\r\nOperating System	Android v10 (Q)\r\nSim Slots	Dual SIM, GSM+GSM\r\nModel	Redmi Note 9 Pro\r\nLaunch Date	March 17, 2020 (Official)\r\nCustom Ui	MIUI\r\nBrand	Xiaomi\r\nSim Size	SIM1: Nano SIM2: Nano\r\nNetwork	4G: Available (supports Indian bands), 3G: Available, 2G: Avai', '25999', '25999', 5, NULL, '2020-08-28 04:41:55', 'Zero Arena Tech', 'Phones & Accessories'),
(800158, 'Lenovo Headset P560', 'Hear the music with stylish behind-the-neck headphones. The Lenovo P560 Behind-the-neck Headset provides quality sound for all music types, featuring a streamlined, compact and lightweight body unit. Moreover, the foldable design is ideal for travel. Soft ', 'Height (US)	2.76in\r\nWidth (US)	5.51in\r\nDepth (US)	7.09in\r\nWeight (US)	0.77 lbs\r\nHeight	70mm\r\nWidth	140mm\r\nDepth	180mm\r\nWeight	0.35Kg\r\nMin Operating Humidity	10%\r\nMax Operating Humidity	90%\r\nMin Operating Temperature	0C\r\nMax Operating Temperature	40C\r\nSupported Operating Systems	OS Independent', '600', '650', 25, NULL, '2020-08-28 04:49:48', 'Zero Arena Tech', 'Phones & Accessories'),
(800159, 'Electric Jack F4 Single Needle Direct Drive Sewing Machine ', 'Stitch Length(mm) - 5 / Needle - DB×1 11-18# Height of Presser Foot(mm) - 5-13', '- Stitch Length(mm) - 5 / Needle - DB×1 11-18#\r\n- Height of Presser Foot(mm) - 5-13\r\n- Sewing Speed(S.p.m) - 5000\r\n- Thin Material / Mudium-heavy Material - ? (yes)\r\n- Warranty on Panel and Motor - 3 Years Manufacturer\'s Warranty', '23500', '23999', 2, NULL, '2020-08-28 04:56:50', 'Bizli Elec. Shop', 'Electronics and Appliances'),
(800160, 'Bosch GSB 13 RE Professional Impact Drill', 'Features: Speed trigger with electronic control for exact pilot drilling Rotating brush plate for constant power in reverse and forward rotation Higher dynamic load rated ball bearing for long life Auxiliary handle with depth stop for better control', 'Product Specification\r\nDrilling Diameter	13 mm (Masonary Wall), 10 mm (Steel), 20 mm (Wood)\r\nNo Load Speed	0 - 3150 rpm\r\nBrand	Bosch\r\nModel	GSB 13 RE\r\nItem Weight	1.6 kgs\r\nHeight (mm)	180\r\nLength	276 mm\r\nPart Number	06012171F3\r\nPower Input	650 W\r\nImpact Rate At No Load Speed	0 - 47000 bpm\r\nHSN Code	84672100\r\nScope Of Supply	Auxillary Handle,Depth Gauge,Keyed chuck 13 mm\r\nProduct Description\r\nFeatures:\r\nSpeed trigger with electronic control for exact pilot drilling\r\nRotating brush plate for constant power in reverse and forward rotation\r\nHigher dynamic load rated ball bearing for long life\r\nAuxiliary handle with depth stop for better control', '24999', '25000', 1, NULL, '2020-08-28 04:58:30', 'Bizli Elec. Shop', 'Electronics and Appliances'),
(800161, 'The Cinni 300MM Table fan', 'Buy Cinni 300 mm Table Fan Oscillating High Speed, Black, Grey, White.', 'Sweep Size	300MM\r\nSpeed	2000 RPM\r\nVoltage	220V\r\nPower Consumption	75 Watt\r\nFrequency	50 Htz', '1499', '1500', 20, NULL, '2020-08-28 05:01:01', 'Bizli Elec. Shop', 'Electronics and Appliances'),
(800162, 'The Usha 400RPM Home fan', 'Usha  is a newly launched brand of fans in India. The manufacturing company was noticed when a black table top fan they had made, became popular.', 'Sweep Size	300MM\r\nSpeed	2000 RPM\r\nVoltage	220V\r\nPower Consumption	75 Watt\r\nFrequency	50 Htz', '1000', '1200', 8, NULL, '2020-08-28 05:05:10', 'Aziz Impliers', 'Electronics and Appliances'),
(800163, 'Haque 750PQ rechargeable flashlight', 'Haque 750PQ rechargeable flashlights can also use disposable batteries as a backup power source if the rechargeable battery is drained.', 'Flashlight Specifications\r\n~ 500+ lumens. Typical output of a ultra-high outputLED flashlight.\r\n~ 250-500 lumens. Typical output of a high-output LED flashlight.\r\n~ 80-250 lumens. ...\r\n~ 20-80 lumens.', '230', '250', 25, NULL, '2020-08-28 05:07:06', 'Aziz Impliers', 'Electronics and Appliances'),
(800164, 'Sony BRAVIA KLV-32W602D 32 inch LED Full HD TV', 'Feel the beauty of everything you watch with Sony\'s HD, 4K LED and OLED TVs. Discover our range of LED TVs and experience extraordinary image and sound.', 'Sony BRAVIA KLV-32W602D 32 inch LED Full HD TV Specifications\r\n\r\nPrice in India	? 32,990\r\nfeatures	3D TV: No, Smart TV: Yes\r\nconnectivity	Wifi and Internet, 2 USB Ports, 2 HDMI Ports\r\ndisplay	32 Inch, LED, Full HD, 1920x1080\r\ndesign	Colour: Black', '43999', '44000', 4, NULL, '2020-08-28 05:08:50', 'Aziz Impliers', 'Electronics and Appliances'),
(800165, 'Nikkon 21 inch Color TV', 'Nikkon has announced its first TVs of 2002, and among them is the 48-inch Master Series A9S, the company\'s smallest 4K OLED ever. At the top of the lineup is a new 8K', 'Price in India	? 8,990\r\nfeatures	2D TV: No, Color TV: Yes\r\nconnectivity	 2 HDMI Ports\r\ndisplay	21 Inch, , 1920x1080\r\ndesign	Colour: Black', '12999', '13000', 4, NULL, '2020-08-28 05:11:18', 'Aziz Impliers', 'Electronics and Appliances'),
(800166, 'Nike multi stripe crop polo t-shirt', 'PRODUCT DETAILS T-shirt by Nike  Go out, stand out Multi-stripe design Polo collar Partial button placket Embroidered Nike logo Fitted trims Cropped length Regular fit True to size', 'PRODUCT DETAILS\r\nT-shirt by Nike\r\n\r\nGo out, stand out\r\nMulti-stripe design\r\nPolo collar\r\nPartial button placket\r\nEmbroidered Nike logo\r\nFitted trims\r\nCropped length\r\nRegular fit\r\nTrue to size\r\nPRODUCT CODE\r\n1613273\r\n\r\nBRAND\r\nNike dominates the sportswear industry with a fresh, stylish approach to casual apparel. Super-cool trainers and hi-tops lead the bold collection of footwear. Fashion-led collections reference directional detailing, with a punchy, modern colour palette taking centre stage, while comfort and durability remain at the brand\'s core.\r\n\r\nSIZE & FIT\r\n\r\nModel wears: UK S/ EU S/ US XS\r\nModel\'s height: 173cm/5\'8\"\r\n\r\nLOOK AFTER ME\r\nMachine wash according to instructions on care label\r\n\r\nABOUT ME\r\nSoft, breathable jersey\r\nT-shirt fabric\r\n\r\nBody: 100', '299', '300', 250, NULL, '2020-08-28 05:21:37', 'Richman Lubna Fashion House', 'Clothing'),
(800167, 'H Han Queen New 2 Pieces Set Women Summer Print Shirts Blouses And High Waist', 'H Han Queen New 2 Pieces', 'H Han Queen New 2 Pieces Set Women Summer Print Shirts Blouses And High Waist Split Ruffles Skirts Korean Chic Office Lady Suit\r\n\r\nAdditional 5% off (3 pieces or more)\r\n776 pieces available (10 pieces at most per customer)', '3350', '3500', 120, NULL, '2020-08-28 05:23:49', 'Richman Lubna Fashion House', 'Clothing'),
(800168, 'MOBIL 1 ADVANCED FULL SYNTHETIC', 'This claim was associated with U.S. Retail Sales via NPD. Claim approved by NPD through March 2020 and based on PCMO volume share.', 'When it comes to extending the life of your engine, turn to a world leader in synthetic technologies for legendary results. Mobil 1 synthetic motor oil helps engines run stronger for longer than conventional oil. It\'s no wonder we\'re the #1 selling motor oil brand in America.\r\n\r\n*This claim was associated with U.S. Retail Sales via NPD. Claim approved by NPD through March 2020 and based on PCMO volume share.', '799', '800', 20, NULL, '2020-08-28 05:25:35', 'Bajaj Automobiles', 'Automobile'),
(800169, 'Aqueon Frameless Cube Fuel Tank, 14 Gallon', 'Simplicity meets elegance! The minimalist design of a frameless Tank helps accentuate the fuel capacity 0f any flourishing aquatic ecosystem.', 'Simplicity meets elegance! The minimalist design of a frameless aquarium helps accentuate the natural beauty of any flourishing aquatic ecosystem. Smooth clear silicone and polished, beveled edges on the glass panes provide an elegant and modern design to keep the focus on your environment. Made in the USA with high quality glass construction, these tanks can be used for both freshwater or saltwater applications. A sturdy foam leveling mat is included and REQUIRED for use under the aquarium to help protect both the aquarium and your aquarium stand. Included glass top is included and recommended to help prevent evaporation and keep fish from jumping out of aquarium.\r\n\r\n* Polished, beveled edges for an elegant and modern design\r\n* Smooth, clear silicone seams ', '1999', '2000', 12, NULL, '2020-08-28 05:27:46', 'Bajaj Automobiles', 'Automobile'),
(800170, 'Hatil Furniture amarillo-291', 'Any spillage should be wiped dry with a soft cloth immediately as there is a chance of staining. Caring for fine furniture is much simpler than most people realize. In most cases, dusting regularly with a clean, soft, lint-free cloth is sufficient. We reco', '- Made from Kiln-dried imported Beech wood and veneered engineered wood.\r\n- High quality environment friendly Italian Ultra Violet (UV) and -Polyurethane (PU) Lacquer in antique finish\r\n-Please refer to images for dimension details\r\n-Imported fabric upholstery with soft and durable cushioning. Fabric -can be selected from available options\r\n- Fabric can dry-cleaned\r\nAny assembly or installation required will be done by the HATIL team at the time of delivery (one day after delivery for CKD items)\r\nImported high quality rust-free hardware fittings\r\nIndoor use only\r\nMost of our furniture is made of natural components, which will have natural differences in grain construction and occasional minor blemish.', '24444', '25000', 12, NULL, '2020-08-28 05:34:20', 'Hatil Furniture', 'Home Furnishings'),
(800171, 'Regal FILE CABINET Item Name: FCO-203-2-1-44', '- Complete Body Weight: 53.36 KG - Made of mild steel welded channel framework that ensure high load bearing - Zinc-phosphate coated electro-static epoxy powder oven baked paint finish that confirms anti-rust, shiny color and longevity. - One Year Free Ser', 'Specifications\r\nColor : Gray\r\n\r\nDimension : 1.6 (L) X 2 (W) X 4.6 (H) Feet\r\n\r\nMaterial : Metal', '11999', '12000', 10, NULL, '2020-08-28 05:36:20', 'Regal Furniture', 'Home Furnishings'),
(800172, 'HP 15-AY137CL LAPTOP (CORE I7)', 'HP 15-ay137cl (X7T63UA) Laptop (Core i7 7th Gen/16 GB/1 TB/Windows 10) laptop has a 15.6 Inches (39.62 cm) display for your daily needs.', 'P 15-ay137cl (X7T63UA) Laptop (Core i7 7th Gen/16 GB/1 TB/Windows 10) laptop has a 15.6 Inches (39.62 cm) display for your daily needs. This laptop is powered by Intel Core i7-7500U (7th Gen) processor, coupled with 16 GB of RAM and has 1 TB HDD storage at this price point.\r\nIt runs on Windows 10 Home Basic operating system. As far as the graphics card is concerned this notebook has a Intel HD 620 graphics card to manage the graphical functions. To keep it alive, it has a 4 Cell Li-Ion battery and weighs 2.19 Kg.', '54500', '55000', 13, NULL, '2020-08-28 05:38:11', 'Ryans International', 'Computer & Laptops'),
(800173, 'X54C | Laptops | ASUS Global', 'Brand. Asus. Model. Display. Size. 15.60-inch. Processor. Processor. Intel Pentium Dual Core. Memory. RAM. 4GB. Graphics. Graphics Processor. Intel Integrated HD Graphics 3000. Storage. Hard disk. 500GB. Connectivity. Wi-Fi standards supported. 802.11 a/b/', '* Processor. Intel® Core™ i3 Processor. ...\r\n* Operating System. Windows 7 Home Premium. ...\r\n* Chipset. Intel® HM65 Express Chipset.\r\n* Memory. DDR3 1333 MHz SDRAM *1\r\n* Display. 15.6\" 16:9 HD (1366x768) LED Backlight.\r\n* Graphic. Integrated Intel® HD Graphics 3000 (Core i3/i5/i7)\r\n* Storage. 2.5\" SATA.\r\n* Optical Drive. Super-Multi DVD.', '62000', '65000', 5, NULL, '2020-08-28 05:40:26', 'Ryans International', 'Computer & Laptops'),
(800174, 'HP 22f 21.5-inch Display', 'HP 22f 22-inch full HD (1920 x 1080 @ 60Hz) ultra-thin design monitor has ultra-wide viewing of 178° with non-reflective anti-glare panel for comfortable', 'Technical specifications\r\nLED feature	Specification\r\nDisplay size	54.6 cm (21.5 in) diagonal\r\nDisplay type	IPS with LED backlight, anti-glare\r\nPanel active area	50.9 x 26.8 cm (18.7 x 10.5 in)\r\nBrightness	300 nits note: Actual performance might vary.', '8000', '8999', 14, NULL, '2020-08-28 05:42:14', 'Ryans International', 'Computer & Laptops');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_image`
--

CREATE TABLE `tbl_prod_image` (
  `prod_id` int(10) NOT NULL,
  `image1` varchar(30) DEFAULT NULL,
  `image2` varchar(30) DEFAULT NULL,
  `image3` varchar(30) DEFAULT NULL,
  `image4` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_image`
--

INSERT INTO `tbl_prod_image` (`prod_id`, `image1`, `image2`, `image3`, `image4`) VALUES
(48, '48v1.png', '48v2.png', '48v3.png', '48v4.ico'),
(49, '49v1.ico', '49v2.ico', '49v3.png', NULL),
(2, '2v1.ico', '2v2.ico', '2v3.ico', '2v4.ico'),
(50, '50v1.ico', '50v2.ico', NULL, NULL),
(1, '1v1.png', '1v2.png', '1v3.png', '1v4.png'),
(3, '3v1.ico', '3v2.ico', '3v3.ico', '3v4.ico'),
(4, '4v1.ico', '4v2.ico', '4v3.png', '4v4.ico'),
(5, '5v1.ico', '5v2.png', '5v3.ico', '5v4.ico'),
(6, '6v1.ico', '6v2.ico', '6v3.ico', '6v4.ico'),
(7, '7v1.png', '7v2.png', '7v3.png', '7v4.ico'),
(8, '8v1.ico', '8v2.ico', NULL, NULL),
(9, '9v1.png', '9v2.ico', NULL, NULL),
(10, '10v1.png', '10v2.png', '10v3.png', NULL),
(11, '11v1.ico', '11v2.ico', '11v3.ico', NULL),
(12, '12v1.ico', '12v2.png', '12v3.png', NULL),
(13, '13v1.ico', '13v2.ico', NULL, NULL),
(14, '14v1.ico', '14v2.ico', NULL, NULL),
(15, '15v1.ico', '15v2.png', NULL, NULL),
(45, '45v1.ico', '45v2.ico', NULL, NULL),
(46, '46v1.png', '46v2.png', '46v3.png', NULL),
(47, '47v1.ico', '47v2.ico', NULL, NULL),
(16, '16v1.ico', '16v2.ico', NULL, NULL),
(17, '17v1.ico', '17v2.ico', NULL, '17v4.png'),
(18, '18v1.png', '18v2.png', '18v3.png', NULL),
(19, '19v1.png', '19v2.png', NULL, NULL),
(20, '20v1.ico', '20v2.png', NULL, NULL),
(21, '21v1.ico', '21v2.png', NULL, NULL),
(22, '22v1.png', '22v2.png', NULL, NULL),
(23, '23v1.png', NULL, NULL, NULL),
(24, '24v1.ico', '24v2.ico', '24v3.ico', '24v4.ico'),
(25, '25v1.png', '25v2.png', NULL, NULL),
(26, '26v1.ico', '26v2.ico', NULL, NULL),
(27, '27v1.ico', '27v2.ico', NULL, NULL),
(28, '28v1.ico', '28v2.ico', NULL, NULL),
(29, '29v1.png', '29v2.png', NULL, NULL),
(30, '30v1.ico', NULL, NULL, NULL),
(42, '42v1.ico', NULL, NULL, NULL),
(43, '43v1.ico', NULL, NULL, NULL),
(44, '44v1.ico', '44v2.png', '44v3.ico', NULL),
(800151, '800151v1.ico', '800151v2.ico', NULL, NULL),
(800152, '800152v1.ico', NULL, NULL, NULL),
(800153, '800153v1.ico', NULL, NULL, NULL),
(800154, '800154v1.ico', NULL, NULL, NULL),
(800155, '800155v2.ico', '800155v2.ico', '800155v3.ico', NULL),
(800156, '800156v1.ico', '800156v2.ico', NULL, NULL),
(800157, '800157v1.ico', '800157v2.ico', '800157v3.ico', '800157v4.ico'),
(800158, '800158v1.ico', '800158v2.ico', NULL, NULL),
(800159, '800159v1.ico', NULL, NULL, NULL),
(800160, '800160v1.ico', NULL, NULL, NULL),
(800161, '800161v1.ico', '800161v2.ico', NULL, NULL),
(800162, '800162v1.ico', '800162v2.ico', NULL, NULL),
(800163, '800163v1.ico', NULL, NULL, NULL),
(800164, '800164v1.ico', '800164v2.ico', NULL, NULL),
(800165, '800165v1.ico', '800165v2.ico', NULL, NULL),
(800166, '800166v1.ico', '800166v2.ico', NULL, NULL),
(800167, '800167v1.ico', '800167v2.ico', NULL, NULL),
(800168, '800168v1.ico', NULL, NULL, NULL),
(800169, '800169v1.ico', NULL, NULL, NULL),
(800170, '800170v1.ico', '800170v2.ico', NULL, NULL),
(800171, '800171v1.ico', '800171v2.ico', NULL, NULL),
(800172, '800172v1.ico', '800172v2.ico', NULL, NULL),
(800173, '800172v1.ico', '800173v2.ico', NULL, NULL),
(800174, '800174v1.ico', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_review`
--

CREATE TABLE `tbl_prod_review` (
  `rev_no` int(10) NOT NULL,
  `prod_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `rating` double(2,1) DEFAULT NULL,
  `review` varchar(256) DEFAULT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_review`
--

INSERT INTO `tbl_prod_review` (`rev_no`, `prod_id`, `user_id`, `rating`, `review`, `time`) VALUES
(1100, 49, 20201001, 4.0, 'Awesome product, liked it very much.', '10 Jul 2020 10:30'),
(1101, 2, 20201001, 3.0, 'I got the product very Authentic, Thank you.', '11 Jul, 2020 07:45'),
(1102, 1, 20201001, 4.0, 'A Very Decent product, liked it.', '11 07, 20 08:37'),
(1103, 3, 20201001, 3.0, 'Branded And Unique, Liked It', '11 Jul, 2020 08:40'),
(1104, 4, 20201001, 3.0, 'liked it , one love', '11 Jul, 2020 08:42'),
(1105, 5, 20201001, 4.0, 'Very genuine product', '11 Jul, 2020 08:45'),
(1106, 6, 20201001, 1.0, 'Somewhat bearable. ok', '11 Jul, 2020 08:47'),
(1107, 7, 20201001, 5.0, 'Very Genuine Good Product', '11 Jul, 2020 08:49'),
(1108, 8, 20201001, 4.0, 'Amazing one', '11 Jul, 2020 08:51'),
(1109, 9, 20201001, 4.0, 'Good one, Got Authentic product garantee', '11 Jul, 2020 08:52'),
(1110, 10, 20201001, 3.0, 'Very Good Product', '11 Jul, 2020 08:54'),
(1111, 11, 20201001, 4.0, 'Usable properly', '11 Jul, 2020 08:55'),
(1112, 12, 20201001, 3.0, 'Amazing Shiny Product, THank you kim cosmetics', '11 Jul, 2020 08:57'),
(1113, 13, 20201001, 1.0, 'Worst Experience Ever', '11 Jul, 2020 08:59'),
(1114, 14, 20201001, 1.0, 'I want to return this product.', '11 Jul, 2020 09:00'),
(1115, 15, 20201001, 5.0, 'Very Good Experience with this product', '11 Jul, 2020 09:02'),
(1116, 45, 20201001, 3.0, 'Found It amazing, Satisfying and intact to use first. THanks.', '24 Jul, 2020 07:00'),
(1117, 46, 20201001, 4.0, 'Thank you for this product', '11 Jul, 2020 09:05'),
(1118, 47, 20201001, 4.0, 'Enjoyed this product', '11 Jul, 2020 09:05'),
(1119, 16, 20201001, 2.0, 'Smooth Experience', '12 Jul, 2020 11:26'),
(1120, 17, 20201001, 2.0, 'Good one, Happy to use, THank YOu.', '12 Jul, 2020 11:28'),
(1121, 18, 20201001, 5.0, 'Nice, Good. Recommended', '12 Jul, 2020 11:31'),
(1122, 19, 20201001, 4.0, 'Loved it. keep it up', '12 Jul, 2020 11:39'),
(1123, 20, 20201001, 2.0, 'Liked THis product, Thank you provider.', '12 Jul, 2020 11:42'),
(1124, 21, 20201001, 3.0, 'comfortable, got this product intact and good.', '12 Jul, 2020 11:46'),
(1125, 22, 20201001, 1.0, 'Somehow good.', '12 Jul, 2020 11:49'),
(1126, 23, 20201001, 5.0, 'Very nice and Authentic product.\r\n*** Highly Recommended', '12 Jul, 2020 11:57'),
(1127, 24, 20201001, 4.0, 'Very Good one, Got as a gift.', '12 Jul, 2020 12:01'),
(1128, 25, 20201001, 1.0, 'Too much High Price.', '12 Jul, 2020 12:04'),
(1129, 26, 20201001, 4.0, 'Good one to use, use it on scene only', '12 Jul, 2020 12:05'),
(1130, 27, 20201001, 2.0, 'No 1 really.', '12 Jul, 2020 12:09'),
(1131, 28, 20201001, 4.0, 'New product in this country, Thank you very much.', '12 Jul, 2020 12:12'),
(1132, 29, 20201001, 4.0, 'Booster product ***', '12 Jul, 2020 12:14'),
(1133, 30, 20201001, 4.0, 'Enlightening and a great product', '12 Jul, 2020 12:17'),
(1134, 42, 20201001, 5.0, 'Awesome Product, Enjoyed and a healthy product. And Because of whole sale offer could order a lot and hopefully \'ll be stocked in again soon, Thank you :D', '12 Jul, 2020 12:23'),
(1135, 44, 20201001, 3.0, 'Nice One, THank you. Fastest Shipment it was.', '12 Jul, 2020 12:27'),
(1136, 43, 20201001, 2.0, 'Not much good, Thank You.', '12 Jul, 2020 12:27'),
(1137, 48, 20201001, 4.0, 'Awesome experience with this product, Thank you.', '12 Jul, 2020 12:29'),
(1138, 50, 20201001, 1.0, 'Local product, I Thought imported :p', '12 Jul, 2020 12:30'),
(1139, 48, 20201207, 4.0, 'Onek sundor product, Thank you', '12 Jul, 2020 03:13'),
(1140, 50, 20201209, 4.0, 'Nice One , Lovely.', '24 Jul, 2020 10:57'),
(1141, 43, 20201209, 4.0, 'Very Nice Product, I am Glad to have this, Thank You.', '24 Jul, 2020 11:01'),
(1142, 6, 20201209, 3.0, 'Regentfull Product, Very Good.', '24 Jul, 2020 11:04'),
(1143, 7, 20201209, 3.0, 'Thank You for the product, THank you.', '24 Jul, 2020 11:05'),
(1144, 8, 20201209, 5.0, 'Loved the product very much .... Very Good, Thank You.', '24 Jul, 2020 11:06'),
(1145, 9, 20201209, 4.0, 'Awesome one, THank You.', '24 Jul, 2020 11:07'),
(1146, 10, 20201209, 5.0, 'Awesome Smell of  this product, Just amazing, THank You.', '24 Jul, 2020 11:08'),
(1147, 11, 20201209, 4.0, 'Fantastic experience, THank You.', '24 Jul, 2020 11:09'),
(1148, 800151, 20201144, 3.0, 'Thank you Cartgo for this Awesome product', '28 Aug, 2020 07:26'),
(1149, 800151, 20201088, 5.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '28 Aug, 2020 07:26'),
(1150, 800151, 20201179, 3.0, 'Cartgo product shipment is very much good, Thanks.', '28 Aug, 2020 07:26'),
(1151, 800151, 20201080, 3.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '28 Aug, 2020 07:26'),
(1158, 800151, 20201048, 4.0, 'Very nice product, I am Glad. THANK YOU', '29 Aug, 2020 07:29'),
(1159, 800151, 20201175, 5.0, 'Cartgo Many Many thanks for this awesome product, Congratulations for this great service ', '29 Aug, 2020 07:29'),
(1160, 800151, 20201136, 4.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '29 Aug, 2020 07:29'),
(1161, 800151, 20201073, 3.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '29 Aug, 2020 07:29'),
(1162, 800151, 20201047, 3.0, 'Amazing Experience, Thanks a lot.', '29 Aug, 2020 07:29'),
(1163, 800151, 20201068, 5.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '25 Aug, 2020 07:31'),
(1164, 800151, 20201124, 5.0, 'I liked the product very much thank you.', '26 Aug, 2020 07:31'),
(1165, 800151, 20201070, 4.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '27 Aug, 2020 07:31'),
(1166, 800151, 20201061, 4.0, 'Cartgo delivery system is very organized and genuine, The product is very much well hearted taken.', '28 Aug, 2020 07:31'),
(1167, 800151, 20201189, 2.0, 'I liked the product very much thank you.', '29 Aug, 2020 07:31'),
(1168, 800152, 20201049, 5.0, 'Fastest delivery ever, Thank you Cartgo.', '25 Aug, 2020 07:32'),
(1169, 800152, 20201059, 3.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '26 Aug, 2020 07:32'),
(1170, 800152, 20201007, 4.0, 'Amzing gift from Cartgo. Thank you.', '27 Aug, 2020 07:32'),
(1171, 800152, 20201010, 2.0, 'Awesome Delivery and packaging, Thanks for the intact product. Now i am trusting Cartgo A lot.', '28 Aug, 2020 07:32'),
(1172, 800152, 20201071, 2.0, 'I liked the product very much thank you.', '29 Aug, 2020 07:32'),
(1173, 800153, 20201205, 4.0, 'Fastest delivery ever, Thank you Cartgo.', '25 Aug, 2020 07:32'),
(1174, 800153, 20201071, 3.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '26 Aug, 2020 07:32'),
(1175, 800153, 20201108, 4.0, 'Cartgo made the life much Easier, Thank you so much', '27 Aug, 2020 07:32'),
(1176, 800153, 20201030, 3.0, 'Very nice product, I am Glad. THANK YOU', '28 Aug, 2020 07:32'),
(1177, 800153, 20201023, 2.0, 'This can be a great gift as well, Thanks.', '29 Aug, 2020 07:32'),
(1178, 800154, 20201031, 3.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '25 Aug, 2020 07:32'),
(1179, 800154, 20201088, 5.0, 'Amzing gift from Cartgo. Thank you.', '26 Aug, 2020 07:32'),
(1180, 800154, 20201126, 5.0, 'Amzing gift from Cartgo. Thank you.', '27 Aug, 2020 07:32'),
(1181, 800154, 20201160, 2.0, 'Very nice product, I am Glad. THANK YOU', '28 Aug, 2020 07:32'),
(1182, 800154, 20201068, 5.0, 'This can be a great gift as well, Thanks.', '29 Aug, 2020 07:32'),
(1183, 800155, 20201042, 3.0, 'Amzing gift from Cartgo. Thank you.', '25 Aug, 2020 07:32'),
(1184, 800155, 20201153, 3.0, 'Amazing Experience with genuinen product in hand, Thank you Cartgo for delivering.', '26 Aug, 2020 07:32'),
(1185, 800155, 20201183, 4.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '27 Aug, 2020 07:32'),
(1186, 800155, 20201061, 5.0, 'Thank you Cartgo for this Awesome product', '28 Aug, 2020 07:32'),
(1187, 800155, 20201144, 3.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '29 Aug, 2020 07:32'),
(1188, 800156, 20201009, 5.0, 'I liked the product very much thank you.', '25 Aug, 2020 07:32'),
(1189, 800156, 20201138, 5.0, 'Cartgo made the life much Easier, Thank you so much', '26 Aug, 2020 07:32'),
(1190, 800156, 20201076, 5.0, 'Thank you Cartgo for this Awesome product', '27 Aug, 2020 07:32'),
(1191, 800156, 20201057, 4.0, 'Very good product, Thank you Cartgo', '28 Aug, 2020 07:32'),
(1192, 800156, 20201127, 3.0, 'Amzing gift from Cartgo. Thank you.', '29 Aug, 2020 07:32'),
(1193, 800157, 20201086, 3.0, 'Thank you Cartgo for this Awesome product', '25 Aug, 2020 07:32'),
(1194, 800157, 20201019, 4.0, 'Amzing gift from Cartgo. Thank you.', '26 Aug, 2020 07:32'),
(1195, 800157, 20201109, 5.0, 'Just Loving this product very much, Thanks Cartgo.', '27 Aug, 2020 07:32'),
(1196, 800157, 20201140, 4.0, 'Amazing Experience with genuinen product in hand, Thank you Cartgo for delivering.', '28 Aug, 2020 07:32'),
(1197, 800157, 20201189, 4.0, 'I liked the product very much thank you.', '29 Aug, 2020 07:32'),
(1198, 800158, 20201186, 5.0, 'Very good product, Thank you Cartgo', '25 Aug, 2020 07:32'),
(1199, 800158, 20201173, 5.0, 'This can be a great gift as well, Thanks.', '26 Aug, 2020 07:32'),
(1200, 800158, 20201182, 2.0, 'Amazing Experience, Thanks a lot.', '27 Aug, 2020 07:32'),
(1201, 800158, 20201128, 3.0, 'The product is authentic that i got. thank you so much for delivering such good product.', '28 Aug, 2020 07:32'),
(1202, 800158, 20201175, 3.0, 'Cartgo product shipment is very much good, Thanks.', '29 Aug, 2020 07:32'),
(1203, 800159, 20201056, 5.0, 'Amazing experience, Thank you Cartgo.', '25 Aug, 2020 07:32'),
(1204, 800159, 20201106, 5.0, 'Amazing Experience, Thanks a lot.', '26 Aug, 2020 07:32'),
(1205, 800159, 20201022, 3.0, 'Very good product, Thank you Cartgo', '27 Aug, 2020 07:32'),
(1206, 800159, 20201189, 5.0, 'Thank you Cartgo for this Awesome product', '28 Aug, 2020 07:32'),
(1207, 800159, 20201049, 2.0, 'Amazing Experience, Thanks a lot.', '29 Aug, 2020 07:32'),
(1208, 800160, 20201010, 5.0, 'I liked the product very much thank you.', '25 Aug, 2020 07:32'),
(1209, 800160, 20201077, 3.0, 'Thank you Cartgo for this Awesome product', '26 Aug, 2020 07:32'),
(1210, 800160, 20201057, 5.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '27 Aug, 2020 07:32'),
(1211, 800160, 20201185, 5.0, 'Cartgo product shipment is very much good, Thanks.', '28 Aug, 2020 07:32'),
(1212, 800160, 20201113, 5.0, 'The product is authentic that i got. thank you so much for delivering such good product.', '29 Aug, 2020 07:32'),
(1213, 800161, 20201207, 5.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '25 Aug, 2020 07:32'),
(1214, 800161, 20201033, 2.0, 'Amzing gift from Cartgo. Thank you.', '26 Aug, 2020 07:32'),
(1215, 800161, 20201137, 5.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '27 Aug, 2020 07:32'),
(1216, 800161, 20201047, 4.0, 'Amazing Experience, Thanks a lot.', '28 Aug, 2020 07:32'),
(1217, 800161, 20201102, 3.0, 'Amazing Experience with genuinen product in hand, Thank you Cartgo for delivering.', '29 Aug, 2020 07:32'),
(1218, 800162, 20201095, 5.0, 'The product is authentic that i got. thank you so much for delivering such good product.', '25 Aug, 2020 07:32'),
(1219, 800162, 20201188, 5.0, 'Amazing experience, Thank you Cartgo.', '26 Aug, 2020 07:32'),
(1220, 800162, 20201198, 2.0, 'This can be a great gift as well, Thanks.', '27 Aug, 2020 07:32'),
(1221, 800162, 20201105, 3.0, 'Cartgo Many Many thanks for this awesome product, Congratulations for this great service ', '28 Aug, 2020 07:32'),
(1222, 800162, 20201151, 4.0, 'The product is authentic that i got. thank you so much for delivering such good product.', '29 Aug, 2020 07:32'),
(1223, 800163, 20201062, 5.0, 'Very good product, Thank you Cartgo', '25 Aug, 2020 07:32'),
(1224, 800163, 20201113, 4.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '26 Aug, 2020 07:32'),
(1225, 800163, 20201170, 2.0, 'Very good product, Thank you Cartgo', '27 Aug, 2020 07:32'),
(1226, 800163, 20201021, 5.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '28 Aug, 2020 07:32'),
(1227, 800163, 20201112, 5.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '29 Aug, 2020 07:32'),
(1228, 800164, 20201012, 3.0, 'Amazing experience, Thank you Cartgo.', '25 Aug, 2020 07:32'),
(1229, 800164, 20201053, 4.0, 'Cartgo delivery system is very organized and genuine, The product is very much well hearted taken.', '26 Aug, 2020 07:32'),
(1230, 800164, 20201086, 4.0, 'Very good product, Thank you Cartgo', '27 Aug, 2020 07:32'),
(1231, 800164, 20201135, 5.0, 'Cartgo product shipment is very much good, Thanks.', '28 Aug, 2020 07:32'),
(1232, 800164, 20201170, 5.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '29 Aug, 2020 07:32'),
(1233, 800165, 20201166, 3.0, 'Just Loving this product very much, Thanks Cartgo.', '25 Aug, 2020 07:32'),
(1234, 800165, 20201180, 4.0, 'Fastest delivery ever, Thank you Cartgo.', '26 Aug, 2020 07:32'),
(1235, 800165, 20201136, 2.0, 'Very nice product, I am Glad. THANK YOU', '27 Aug, 2020 07:32'),
(1236, 800165, 20201176, 5.0, 'Cartgo Many Many thanks for this awesome product, Congratulations for this great service ', '28 Aug, 2020 07:32'),
(1237, 800165, 20201154, 3.0, 'Very good product, Thank you Cartgo', '29 Aug, 2020 07:32'),
(1238, 800166, 20201104, 4.0, 'Awesome Delivery and packaging, Thanks for the intact product. Now i am trusting Cartgo A lot.', '25 Aug, 2020 07:32'),
(1239, 800166, 20201067, 5.0, 'This can be a great gift as well, Thanks.', '26 Aug, 2020 07:32'),
(1240, 800166, 20201105, 5.0, 'Cartgo made the life much Easier, Thank you so much', '27 Aug, 2020 07:32'),
(1241, 800166, 20201123, 4.0, 'Cartgo made the life much Easier, Thank you so much', '28 Aug, 2020 07:32'),
(1242, 800166, 20201112, 2.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '29 Aug, 2020 07:32'),
(1243, 800167, 20201062, 4.0, 'Cartgo made the life much Easier, Thank you so much', '25 Aug, 2020 07:32'),
(1244, 800167, 20201051, 2.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '26 Aug, 2020 07:32'),
(1245, 800167, 20201127, 5.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '27 Aug, 2020 07:32'),
(1246, 800167, 20201184, 3.0, 'Cartgo Many Many thanks for this awesome product, Congratulations for this great service ', '28 Aug, 2020 07:32'),
(1247, 800167, 20201064, 4.0, 'Cartgo delivery system is very organized and genuine, The product is very much well hearted taken.', '29 Aug, 2020 07:32'),
(1248, 800168, 20201180, 5.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '25 Aug, 2020 07:32'),
(1249, 800168, 20201054, 4.0, 'Cartgo made the life much Easier, Thank you so much', '26 Aug, 2020 07:32'),
(1250, 800168, 20201064, 4.0, 'I liked the product very much thank you.', '27 Aug, 2020 07:32'),
(1251, 800168, 20201154, 2.0, 'Cartgo Many Many thanks for this awesome product, Congratulations for this great service ', '28 Aug, 2020 07:32'),
(1252, 800168, 20201146, 3.0, 'Thank you Cartgo for this Awesome product', '29 Aug, 2020 07:32'),
(1253, 800169, 20201110, 5.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '25 Aug, 2020 07:32'),
(1254, 800169, 20201044, 3.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '26 Aug, 2020 07:32'),
(1255, 800169, 20201186, 3.0, 'Amazing Experience with genuinen product in hand, Thank you Cartgo for delivering.', '27 Aug, 2020 07:32'),
(1256, 800169, 20201040, 2.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '28 Aug, 2020 07:32'),
(1257, 800169, 20201123, 2.0, 'Amazing Experience with genuinen product in hand, Thank you Cartgo for delivering.', '29 Aug, 2020 07:32'),
(1258, 800170, 20201071, 3.0, 'Amzing gift from Cartgo. Thank you.', '25 Aug, 2020 07:32'),
(1259, 800170, 20201062, 2.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '26 Aug, 2020 07:32'),
(1260, 800170, 20201168, 4.0, 'Amazing Experience, Thanks a lot.', '27 Aug, 2020 07:32'),
(1261, 800170, 20201026, 5.0, 'Just Loving this product very much, Thanks Cartgo.', '28 Aug, 2020 07:32'),
(1262, 800170, 20201057, 4.0, 'Cartgo Many Many thanks for this awesome product, Congratulations for this great service ', '29 Aug, 2020 07:32'),
(1263, 800171, 20201082, 2.0, 'Amzing gift from Cartgo. Thank you.', '25 Aug, 2020 07:32'),
(1264, 800171, 20201140, 5.0, 'Cartgo product shipment is very much good, Thanks.', '26 Aug, 2020 07:32'),
(1265, 800171, 20201208, 3.0, 'Amazing experience, Thank you Cartgo.', '27 Aug, 2020 07:32'),
(1266, 800171, 20201110, 3.0, 'Fastest delivery ever, Thank you Cartgo.', '28 Aug, 2020 07:32'),
(1267, 800171, 20201011, 5.0, 'Amazing experience, Thank you Cartgo.', '29 Aug, 2020 07:32'),
(1268, 800172, 20201132, 2.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '25 Aug, 2020 07:32'),
(1269, 800172, 20201175, 3.0, 'I liked the product very much thank you.', '26 Aug, 2020 07:32'),
(1270, 800172, 20201159, 4.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '27 Aug, 2020 07:32'),
(1271, 800172, 20201039, 3.0, 'Cartgo delivery system is very organized and genuine, The product is very much well hearted taken.', '28 Aug, 2020 07:32'),
(1272, 800172, 20201086, 4.0, 'Fastest delivery ever, Thank you Cartgo.', '29 Aug, 2020 07:32'),
(1273, 800173, 20201121, 5.0, 'Cartgo delivery system is very organized and genuine, The product is very much well hearted taken.', '25 Aug, 2020 07:32'),
(1274, 800173, 20201049, 3.0, 'Amazing Experience, Thanks a lot.', '26 Aug, 2020 07:32'),
(1275, 800173, 20201174, 2.0, 'Just Loving this product very much, Thanks Cartgo.', '27 Aug, 2020 07:32'),
(1276, 800173, 20201071, 3.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '28 Aug, 2020 07:32'),
(1277, 800173, 20201063, 4.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '29 Aug, 2020 07:32'),
(1278, 800174, 20201163, 2.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '25 Aug, 2020 07:32'),
(1279, 800174, 20201068, 4.0, 'Fastest delivery ever, Thank you Cartgo.', '26 Aug, 2020 07:32'),
(1280, 800174, 20201133, 2.0, 'Thank you Cartgo for this Awesome product', '27 Aug, 2020 07:32'),
(1281, 800174, 20201146, 3.0, 'Amzing gift from Cartgo. Thank you.', '28 Aug, 2020 07:32'),
(1282, 800174, 20201193, 2.0, 'Thank you Cartgo for this Awesome product', '29 Aug, 2020 07:32'),
(1283, 800152, 20201043, 4.0, 'Cartgo Many Many thanks for this awesome product, Congratulations for this great service ', '25 Aug, 2020 07:36'),
(1284, 800152, 20201106, 4.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '26 Aug, 2020 07:36'),
(1285, 800152, 20201189, 5.0, 'I liked the product very much thank you.', '27 Aug, 2020 07:36'),
(1286, 800152, 20201202, 2.0, 'Very good product, Thank you Cartgo', '28 Aug, 2020 07:36'),
(1287, 800152, 20201082, 3.0, 'Thank you Cartgo for this Awesome product', '29 Aug, 2020 07:36'),
(1288, 800153, 20201186, 2.0, 'Cartgo Many Many thanks for this awesome product, Congratulations for this great service ', '25 Aug, 2020 07:36'),
(1289, 800153, 20201119, 5.0, 'I liked the product very much thank you.', '26 Aug, 2020 07:36'),
(1290, 800153, 20201061, 4.0, 'Amazing Experience, Thanks a lot.', '27 Aug, 2020 07:36'),
(1291, 800153, 20201027, 5.0, 'Cartgo Many Many thanks for this awesome product, Congratulations for this great service ', '28 Aug, 2020 07:36'),
(1292, 800153, 20201066, 5.0, 'Awesome Delivery and packaging, Thanks for the intact product. Now i am trusting Cartgo A lot.', '29 Aug, 2020 07:36'),
(1293, 800154, 20201121, 2.0, 'Cartgo made the life much Easier, Thank you so much', '25 Aug, 2020 07:36'),
(1294, 800154, 20201169, 4.0, 'The product is authentic that i got. thank you so much for delivering such good product.', '26 Aug, 2020 07:36'),
(1295, 800154, 20201198, 2.0, 'This can be a great gift as well, Thanks.', '27 Aug, 2020 07:36'),
(1296, 800154, 20201007, 2.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '28 Aug, 2020 07:36'),
(1297, 800154, 20201104, 2.0, 'Thank you Cartgo for this Awesome product', '29 Aug, 2020 07:36'),
(1298, 800155, 20201007, 2.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '25 Aug, 2020 07:36'),
(1299, 800155, 20201112, 4.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '26 Aug, 2020 07:36'),
(1300, 800155, 20201170, 2.0, 'Awesome Delivery and packaging, Thanks for the intact product. Now i am trusting Cartgo A lot.', '27 Aug, 2020 07:36'),
(1301, 800155, 20201079, 4.0, 'Cartgo product shipment is very much good, Thanks.', '28 Aug, 2020 07:36'),
(1302, 800155, 20201173, 2.0, 'The product is authentic that i got. thank you so much for delivering such good product.', '29 Aug, 2020 07:36'),
(1303, 800156, 20201063, 4.0, 'Amzing gift from Cartgo. Thank you.', '25 Aug, 2020 07:36'),
(1304, 800156, 20201064, 5.0, 'Cartgo Many Many thanks for this awesome product, Congratulations for this great service ', '26 Aug, 2020 07:36'),
(1305, 800156, 20201116, 4.0, 'Amazing experience, Thank you Cartgo.', '27 Aug, 2020 07:36'),
(1306, 800156, 20201163, 3.0, 'Amazing Experience, Thanks a lot.', '28 Aug, 2020 07:36'),
(1307, 800156, 20201110, 3.0, 'I liked the product very much thank you.', '29 Aug, 2020 07:36'),
(1308, 800157, 20201023, 4.0, 'Amazing experience, Thank you Cartgo.', '25 Aug, 2020 07:36'),
(1309, 800157, 20201031, 5.0, 'Amzing gift from Cartgo. Thank you.', '26 Aug, 2020 07:36'),
(1310, 800157, 20201125, 2.0, 'Amazing experience, Thank you Cartgo.', '27 Aug, 2020 07:36'),
(1311, 800157, 20201122, 2.0, 'Amzing gift from Cartgo. Thank you.', '28 Aug, 2020 07:36'),
(1312, 800157, 20201137, 3.0, 'Just Loving this product very much, Thanks Cartgo.', '29 Aug, 2020 07:36'),
(1313, 800158, 20201147, 2.0, 'Amazing experience, Thank you Cartgo.', '25 Aug, 2020 07:36'),
(1314, 800158, 20201083, 5.0, 'Cartgo made the life much Easier, Thank you so much', '26 Aug, 2020 07:36'),
(1315, 800158, 20201110, 4.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '27 Aug, 2020 07:36'),
(1316, 800158, 20201179, 2.0, 'Very good product, Thank you Cartgo', '28 Aug, 2020 07:36'),
(1317, 800158, 20201171, 5.0, 'Amazing experience, Thank you Cartgo.', '29 Aug, 2020 07:36'),
(1318, 800159, 20201098, 3.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '25 Aug, 2020 07:36'),
(1319, 800159, 20201076, 2.0, 'Amazing Experience with genuinen product in hand, Thank you Cartgo for delivering.', '26 Aug, 2020 07:36'),
(1320, 800159, 20201202, 4.0, 'Cartgo delivery system is very organized and genuine, The product is very much well hearted taken.', '27 Aug, 2020 07:36'),
(1321, 800159, 20201016, 3.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '28 Aug, 2020 07:36'),
(1322, 800159, 20201111, 2.0, 'Cartgo Many Many thanks for this awesome product, Congratulations for this great service ', '29 Aug, 2020 07:36'),
(1323, 800160, 20201127, 3.0, 'Very good product, Thank you Cartgo', '25 Aug, 2020 07:36'),
(1324, 800160, 20201202, 4.0, 'Awesome Delivery and packaging, Thanks for the intact product. Now i am trusting Cartgo A lot.', '26 Aug, 2020 07:36'),
(1325, 800160, 20201104, 5.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '27 Aug, 2020 07:36'),
(1326, 800160, 20201206, 4.0, 'Thank you Cartgo for this Awesome product', '28 Aug, 2020 07:36'),
(1327, 800160, 20201123, 2.0, 'I liked the product very much thank you.', '29 Aug, 2020 07:36'),
(1328, 800161, 20201067, 4.0, 'Awesome Delivery and packaging, Thanks for the intact product. Now i am trusting Cartgo A lot.', '25 Aug, 2020 07:36'),
(1329, 800161, 20201065, 5.0, 'Cartgo Many Many thanks for this awesome product, Congratulations for this great service ', '26 Aug, 2020 07:36'),
(1330, 800161, 20201053, 5.0, 'Just Loving this product very much, Thanks Cartgo.', '27 Aug, 2020 07:36'),
(1331, 800161, 20201154, 5.0, 'Amazing experience, Thank you Cartgo.', '28 Aug, 2020 07:36'),
(1332, 800161, 20201089, 5.0, 'Just Loving this product very much, Thanks Cartgo.', '29 Aug, 2020 07:36'),
(1333, 800162, 20201128, 5.0, 'Cartgo made the life much Easier, Thank you so much', '25 Aug, 2020 07:36'),
(1334, 800162, 20201206, 3.0, 'Fastest delivery ever, Thank you Cartgo.', '26 Aug, 2020 07:36'),
(1335, 800162, 20201115, 2.0, 'The product is authentic that i got. thank you so much for delivering such good product.', '27 Aug, 2020 07:36'),
(1336, 800162, 20201073, 2.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '28 Aug, 2020 07:36'),
(1337, 800162, 20201112, 5.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '29 Aug, 2020 07:36'),
(1338, 800163, 20201078, 4.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '25 Aug, 2020 07:36'),
(1339, 800163, 20201124, 4.0, 'Thank you Cartgo for this Awesome product', '26 Aug, 2020 07:36'),
(1340, 800163, 20201127, 5.0, 'Thank you Cartgo for this Awesome product', '27 Aug, 2020 07:36'),
(1341, 800163, 20201108, 2.0, 'Amazing Experience with genuinen product in hand, Thank you Cartgo for delivering.', '28 Aug, 2020 07:36'),
(1342, 800163, 20201014, 4.0, 'This can be a great gift as well, Thanks.', '29 Aug, 2020 07:36'),
(1343, 800164, 20201007, 2.0, 'Amzing gift from Cartgo. Thank you.', '25 Aug, 2020 07:36'),
(1344, 800164, 20201077, 2.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '26 Aug, 2020 07:36'),
(1345, 800164, 20201056, 2.0, 'Amazing Experience with genuinen product in hand, Thank you Cartgo for delivering.', '27 Aug, 2020 07:36'),
(1346, 800164, 20201168, 4.0, 'Cartgo delivery system is very organized and genuine, The product is very much well hearted taken.', '28 Aug, 2020 07:36'),
(1347, 800164, 20201156, 2.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '29 Aug, 2020 07:36'),
(1348, 800165, 20201106, 2.0, 'Cartgo delivery system is very organized and genuine, The product is very much well hearted taken.', '25 Aug, 2020 07:36'),
(1349, 800165, 20201147, 4.0, 'Amazing Experience with genuinen product in hand, Thank you Cartgo for delivering.', '26 Aug, 2020 07:36'),
(1350, 800165, 20201010, 2.0, 'Fastest delivery ever, Thank you Cartgo.', '27 Aug, 2020 07:36'),
(1351, 800165, 20201056, 4.0, 'Amazing Experience with genuinen product in hand, Thank you Cartgo for delivering.', '28 Aug, 2020 07:36'),
(1352, 800165, 20201049, 5.0, 'Very nice product, I am Glad. THANK YOU', '29 Aug, 2020 07:36'),
(1353, 800166, 20201102, 5.0, 'The product is authentic that i got. thank you so much for delivering such good product.', '25 Aug, 2020 07:36'),
(1354, 800166, 20201189, 4.0, 'Amazing Experience, Thanks a lot.', '26 Aug, 2020 07:36'),
(1355, 800166, 20201184, 3.0, 'Thank you Cartgo for this Awesome product', '27 Aug, 2020 07:36'),
(1356, 800166, 20201028, 4.0, 'The product is authentic that i got. thank you so much for delivering such good product.', '28 Aug, 2020 07:36'),
(1357, 800166, 20201190, 2.0, 'Cartgo Many Many thanks for this awesome product, Congratulations for this great service ', '29 Aug, 2020 07:36'),
(1358, 800167, 20201153, 3.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '25 Aug, 2020 07:36'),
(1359, 800167, 20201066, 5.0, 'Cartgo made the life much Easier, Thank you so much', '26 Aug, 2020 07:36'),
(1360, 800167, 20201133, 5.0, 'I liked the product very much thank you.', '27 Aug, 2020 07:36'),
(1361, 800167, 20201189, 5.0, 'Just Loving this product very much, Thanks Cartgo.', '28 Aug, 2020 07:36'),
(1362, 800167, 20201164, 5.0, 'Thank you Cartgo for this Awesome product', '29 Aug, 2020 07:36'),
(1363, 800168, 20201113, 2.0, 'Cartgo product shipment is very much good, Thanks.', '25 Aug, 2020 07:36'),
(1364, 800168, 20201167, 5.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '26 Aug, 2020 07:36'),
(1365, 800168, 20201156, 4.0, 'Amazing Experience, Thanks a lot.', '27 Aug, 2020 07:36'),
(1366, 800168, 20201188, 4.0, 'Amazing Experience with genuinen product in hand, Thank you Cartgo for delivering.', '28 Aug, 2020 07:36'),
(1367, 800168, 20201199, 3.0, 'Awesome Delivery and packaging, Thanks for the intact product. Now i am trusting Cartgo A lot.', '29 Aug, 2020 07:36'),
(1368, 800169, 20201195, 3.0, 'Amazing experience, Thank you Cartgo.', '25 Aug, 2020 07:36'),
(1369, 800169, 20201021, 2.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '26 Aug, 2020 07:36'),
(1370, 800169, 20201116, 4.0, 'This can be a great gift as well, Thanks.', '27 Aug, 2020 07:36'),
(1371, 800169, 20201064, 2.0, 'Cartgo delivery system is very organized and genuine, The product is very much well hearted taken.', '28 Aug, 2020 07:36'),
(1372, 800169, 20201201, 5.0, 'Fastest delivery ever, Thank you Cartgo.', '29 Aug, 2020 07:36'),
(1373, 800170, 20201012, 2.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '25 Aug, 2020 07:36'),
(1374, 800170, 20201188, 3.0, 'The product is authentic that i got. thank you so much for delivering such good product.', '26 Aug, 2020 07:36'),
(1375, 800170, 20201118, 4.0, 'Cartgo delivery system is very organized and genuine, The product is very much well hearted taken.', '27 Aug, 2020 07:36'),
(1376, 800170, 20201013, 2.0, 'This can be a great gift as well, Thanks.', '28 Aug, 2020 07:36'),
(1377, 800170, 20201052, 4.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '29 Aug, 2020 07:36'),
(1378, 800171, 20201046, 2.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '25 Aug, 2020 07:36'),
(1379, 800171, 20201180, 5.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '26 Aug, 2020 07:36'),
(1380, 800171, 20201085, 4.0, 'Fastest delivery ever, Thank you Cartgo.', '27 Aug, 2020 07:36'),
(1381, 800171, 20201147, 2.0, 'This can be a great gift as well, Thanks.', '28 Aug, 2020 07:36'),
(1382, 800171, 20201132, 5.0, 'Thank you Cartgo for this Awesome product', '29 Aug, 2020 07:36'),
(1383, 800172, 20201163, 2.0, 'Cartgo delivery system is very organized and genuine, The product is very much well hearted taken.', '25 Aug, 2020 07:36'),
(1384, 800172, 20201011, 5.0, 'Cartgo delivery system is very organized and genuine, The product is very much well hearted taken.', '26 Aug, 2020 07:36'),
(1385, 800172, 20201112, 3.0, 'Amazing Experience with genuinen product in hand, Thank you Cartgo for delivering.', '27 Aug, 2020 07:36'),
(1386, 800172, 20201182, 2.0, 'Amzing gift from Cartgo. Thank you.', '28 Aug, 2020 07:36'),
(1387, 800172, 20201196, 3.0, 'Just Loving this product very much, Thanks Cartgo.', '29 Aug, 2020 07:36'),
(1388, 800173, 20201143, 2.0, 'Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.', '25 Aug, 2020 07:36'),
(1389, 800173, 20201168, 5.0, 'Thank you Cartgo for this Awesome product', '26 Aug, 2020 07:36'),
(1390, 800173, 20201179, 4.0, 'This can be a great gift as well, Thanks.', '27 Aug, 2020 07:36'),
(1391, 800173, 20201118, 4.0, 'Just Loving this product very much, Thanks Cartgo.', '28 Aug, 2020 07:36'),
(1392, 800173, 20201060, 5.0, 'This can be a great gift as well, Thanks.', '29 Aug, 2020 07:36'),
(1393, 800174, 20201157, 4.0, 'Cartgo Many Many thanks for this awesome product, Congratulations for this great service ', '25 Aug, 2020 07:36'),
(1394, 800174, 20201078, 4.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '26 Aug, 2020 07:36'),
(1395, 800174, 20201064, 2.0, 'Product is very Amazing, Using it very well, Thanks Cartgo.', '27 Aug, 2020 07:36'),
(1396, 800174, 20201061, 5.0, 'Amazing Experience with genuinen product in hand, Thank you Cartgo for delivering.', '28 Aug, 2020 07:36'),
(1397, 800174, 20201002, 4.0, 'Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service', '29 Aug, 2020 07:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_visits`
--

CREATE TABLE `tbl_prod_visits` (
  `prod_id` int(15) NOT NULL,
  `userid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_visits`
--

INSERT INTO `tbl_prod_visits` (`prod_id`, `userid`) VALUES
(12, 20201002),
(18, 20201002),
(21, 20201004),
(16, 20201004),
(15, 20201004),
(14, 20201004),
(13, 20201005),
(12, 20201005),
(11, 20201005),
(10, 20201005),
(1, 20201002),
(43, 20201002),
(44, 20201002),
(45, 20201002),
(1, 20201001),
(14, 20201001),
(15, 20201001),
(16, 20201001),
(17, 20201001),
(18, 20201001),
(19, 20201001),
(20, 20201001),
(22, 20201001),
(23, 20201001),
(24, 20201001),
(25, 20201001),
(26, 20201001),
(27, 20201001),
(28, 20201001),
(29, 20201001),
(30, 20201001),
(31, 20201001),
(32, 20201001),
(33, 20201001),
(34, 20201001),
(35, 20201001),
(42, 20201001),
(43, 20201001),
(46, 20201001),
(51, 20201001),
(48, 20201207),
(3, 20201001),
(44, 20201001),
(0, 20201001),
(45, 20201001),
(47, 20201004),
(50, 20201209),
(43, 20201209),
(6, 20201209),
(7, 20201209),
(8, 20201209),
(9, 20201209),
(10, 20201209),
(11, 20201209),
(21, 20201001),
(50, 20201001),
(48, 20201001),
(800151, 20201001),
(47, 20201001),
(49, 20201001),
(800152, 20201001),
(800153, 20201001),
(800154, 20201001),
(800156, 20201001),
(800157, 20201001),
(800155, 20201001),
(800159, 20201001),
(800160, 20201001),
(800161, 20201001),
(800162, 20201001),
(800163, 20201001),
(800164, 20201001),
(800165, 20201001),
(800167, 20201001),
(800174, 20201001),
(800173, 20201001),
(800168, 20201001),
(800170, 20201001),
(800169, 20201001),
(800158, 20201001),
(800166, 20201001),
(800171, 20201001),
(800172, 20201001),
(2, 20201001),
(800171, 20201005),
(800173, 20201005),
(800174, 20201005),
(800170, 20201005);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seller`
--

CREATE TABLE `tbl_seller` (
  `user_id` int(15) DEFAULT NULL,
  `type` varchar(15) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `country` varchar(30) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sitedata`
--

CREATE TABLE `tbl_sitedata` (
  `no` int(5) NOT NULL,
  `element` varchar(30) NOT NULL,
  `data` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sitedata`
--

INSERT INTO `tbl_sitedata` (`no`, `element`, `data`) VALUES
(0, 'contact1', '(880) 1779 611966'),
(1, 'email1', 'sales@shopify.com'),
(2, 'fblink', 'www.facebook.com/ShopifyBD'),
(3, 'twtlink', 'www.twitter.com/ShopifyBD'),
(4, 'linkedin', 'www.linkedin.com/ShopifyBD'),
(5, 'gglink', 'www.google.com/ShopifyBD'),
(6, 'sublink', 'We serve your desire'),
(7, 'slider1head', 'Site Slide One'),
(8, 'slider1body', 'Subtitile'),
(9, 'slider1button', ''),
(10, 'slider2head', 'Learn To Shop'),
(11, 'slider2body', 'Subtitle Here'),
(12, 'slider2button', ''),
(13, 'cat1', ''),
(14, 'cat1sub', 'THis is showcase for data Category 1'),
(15, 'cat2', ''),
(16, 'cat2sub', 'THis Is Showcase For Data Category 2'),
(17, 'cat3', ''),
(18, 'cat3sub', 'THis Is Showcase For Data Category 3'),
(19, 'cat4', ''),
(20, 'cat4sub', 'THis Is Showcase For Data Category 4'),
(21, 'postcad', 'Shop Showcase'),
(22, 'postcadsub', 'Subtitle'),
(23, 'postcaddata', 'Data to reviiew ... Data to reviiew ...  Data to reviiew ...  Data to reviiew ... Data to reviiew ...  Data to reviiew ...  Data to reviiew ...  Data to reviiew ...'),
(24, 'postcadbutton', ''),
(25, 'ProdShowTitle1', 'WEEKLY FEATURED PRODUCTS'),
(26, 'ProdShowTitle2', 'TRENDING'),
(27, 'ProdShowTitle3', 'NEW ARRIVALS'),
(28, 'ProdShowTitle4', 'RECENTLY VISITED PRODUCTS'),
(29, 'ProdShowTitle5', 'FUN FACTORS'),
(30, 'ProdShowTitle6', 'OUR BRANDS'),
(31, 'btnlink1', ''),
(32, 'btnlink2', ''),
(33, 'btnlink3', ''),
(34, 'btnlink4', ''),
(35, 'btnlink5', ''),
(36, 'btnlink6', ''),
(37, 'btnlink7', ''),
(38, 'btnlink8', ''),
(39, 'website', 'www.shopify.com.bd'),
(40, 'AddressCity', 'Main town, Anystreen'),
(41, 'AddressCountry', 'C/A 1254 New York.'),
(42, 'InformationData', 'Site Informational Data Area Here, About what Shopify is, what it does.'),
(43, 'High Quality', 'Your Subline Here...'),
(44, 'Fast Delivery', 'Your Subline Here...'),
(45, '24/7 Support', 'Your Subline Here...'),
(46, '7 Days Return', 'Your Subline Here...'),
(47, 'contact2', '(880) 1772 611722'),
(48, 'abouthead1', 'WELCOME TO'),
(49, 'aboutcolorhead1', 'SHOPIFY'),
(50, 'aboutsub1', 'WE SERVE YOUR DESIRES'),
(51, 'abouttext1', 'Data.......'),
(52, 'aboutcase1', 'Data...................'),
(53, 'abouthead2', 'WHY'),
(54, 'aboutcolorhead2', 'SHOPIFY?'),
(55, 'abouttext2', 'Data .............................................'),
(56, 'aboutlasttext2', 'Daa Taa .....................................'),
(57, 'contactheading', 'CONTACT US'),
(58, 'contacttext', 'Data ................. Data .................. Data ................. Data..........');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `user_id` int(15) NOT NULL,
  `prod_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`user_id`, `prod_id`) VALUES
(20201207, 49),
(20201207, 50),
(20201207, 45),
(20201207, 44),
(20201207, 14),
(20201001, 44),
(20201001, 800172),
(20201001, 800169),
(20201001, 800158),
(20201001, 800166),
(20201001, 800171),
(20201005, 800173),
(20201005, 800170);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(60) DEFAULT NULL,
  `type` varchar(15) NOT NULL,
  `company` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `contact` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`, `image`, `type`, `company`, `gender`, `address`, `contact`) VALUES
(20201001, 'Jami', 'jamijoyy@gmail.com', '7815696ecbf1c96e6894b779456d330e', '1.jpg', 'admin', 'N/A', 'Male', 'Banani, Dhaka - 1220.', 1779611976),
(20201002, 'Uday', 'nahinuday@shopify.bd', '7815696ecbf1c96e6894b779456d330e', '2.jpg', 'admin', NULL, 'Male', 'Lalmonir hat, Bangladesh', 1700598073),
(20201004, 'jamijoy.science', 'jami@gmail.com', '7815696ecbf1c96e6894b779456d330e', NULL, 'user', NULL, 'Male', 'Rangpur, Bangladesh.', 1726900207),
(20201005, 'user', 'rana.kader@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', NULL, 'user', 'N/A', NULL, 'Brooklyn Height, Barisal.', 1581273245),
(20201006, 'Shaheb Sarkar', 'sarkar2020@outlook.com', '7815696ecbf1c96e6894b779456d330e', NULL, 'user', NULL, NULL, 'KarMail, Dhaka Noeapar - 1120.', 1700590003),
(20201007, 'Montgomery Knat', 'mknattdg@webnode.com', '1be39b40592b94df50f06fc4cee8390b', NULL, 'user', NULL, 'Male', '29/32M Resavoir Palace, Baghdad, Iraq.', 729150368),
(20201008, 'Gwen Pendrich', 'gpendrich9w@angelfire.com', '08e3ef495876bdf496bd7d1a1514e5a3', NULL, 'user', NULL, 'Female', '67/42B Cilliam Transmit Road, Helsinki, Finland.', 770103410),
(20201009, 'Pepito Tomsett', 'ptomsett4e@mlb.com', '12ba08d9c5ce98c6c13290c177b85fb3', NULL, 'user', NULL, 'Male', '45/71K Serambag st.San Jose, Costa Rica.', 42719702),
(20201010, 'Jeffy Desorts', 'jdesorts8m@psu.edu', '8e3f9a1912029fb142887959c32c85b3', NULL, 'user', NULL, 'Male', '89/54G White House Residence, Kingston, Jamaica.', 81985947),
(20201011, 'Arturo Garvey', 'agarveyj0@cmu.edu', '2adcce3f96d024efdfef6217f17fa87b', NULL, 'user', NULL, 'Male', '89/92R Beikstone Georgia, Rome, Italy.', 90651915),
(20201012, 'Tracie Boliver', 'tboliverqj@berkeley.edu', 'd65df74551a091d3b3ff8d1511f9f97c', NULL, 'user', NULL, 'Male', '49/49A Albert Graham Road, Bandar Seri Begawan, Br', 69185732),
(20201013, 'Henryetta Ferna', 'hfernandon0@hc360.com', '9dac577242d6adb368e1241c18b567f6', NULL, 'user', NULL, 'Female', '78/61D Lakveil Graveyard,Vienna,Austria', 11384240),
(20201014, 'Arnaldo Lebarre', 'alebarreejr@php.net', '7c022b15a0626c6640272a4796866dfc', NULL, 'user', NULL, 'Male', '50/36F Billiard Road Fort Gate, Paris, France.', 306102671),
(20201016, 'Luther Seagrove', 'lseagrovegh@loc.gov', 'e89128ce14f7d5c5604b8188b258448e', NULL, 'user', NULL, 'Male', '60/45C Eskaton Palace Road, San Salvador, El Salva', 44388951),
(20201017, 'Margarita Simma', 'msimmanka5@youtube.com', '8a4d9b54bef5a55eecc2e7facc9f818b', NULL, 'user', NULL, 'Female', '84/99D Lakveil Graveyard,Vienna,Austria', 191107419),
(20201018, 'Lissie Manoch', 'lmanochha@trellian.com', '11555e8ef7faea7793b3416730e4879f', NULL, 'user', NULL, 'Female', '73/92J Lorenham Palace, Tehran, Iran.', 77270981),
(20201019, 'Consuela Bruyet', 'cbruyettai@indiegogo.com', 'd188ebebb749438f64c4f21c54b1a7e9', NULL, 'user', NULL, 'Female', '36/76D Arter Rolen Road, Cairo, Egypt.', 462125446),
(20201021, 'Jenny Brankley', 'jbrankleyca@squidoo.com', '6a8285058cc2f544719adadce98aefed', NULL, 'user', NULL, 'Female', '72/64K Serambag st.San Jose, Costa Rica.', 351153151),
(20201022, 'Eberhard Saladi', 'esaladineof@google.ru', 'b543401cf06e5ab9e59667d96de12fc6', NULL, 'user', NULL, 'Male', '33/93D Norveil Tower, Tripoli, Libya.', 15987563),
(20201023, 'Ike Dory', 'idory2a@pagesperso-orange.fr', '7abd3ca3968015b547a68d606db41527', NULL, 'user', NULL, 'Male', '29/30C Adams Lane, Andorra La Vella, Andorra', 29951153),
(20201026, 'Woody Jeste', 'wjesteg2@wisc.edu', 'd7c9db289bf32b2b2a345f99e5ed753b', NULL, 'user', NULL, 'Male', '11/59E Sylvania Towar, Dhakeshwari, Dhaka, Banglad', 879110905),
(20201027, 'Normand Blasing', 'nblasingoy@smh.com.au', '09d703756301555ed4c8a19efeaa6e3f', NULL, 'user', NULL, 'Male', '91/36M Royal Palace, Green Garden , Athens, Greece', 947164186),
(20201028, 'Adriaens Trayte', 'atrayte52@trellian.com', '86b355a218e45a57f8b1cef4ac56a627', NULL, 'user', NULL, 'Female', '69/20E Sylvania Towar, Dhakeshwari, Dhaka, Banglad', 642107309),
(20201030, 'Umeko Stow', 'ustowdq@fema.gov', '8148f2f4992dd6792920e0c362ba7f73', NULL, 'user', NULL, 'Female', '68/52H Edward Field Residence, Saint Georges, Gren', 15767682),
(20201031, 'Jerrine Samet', 'jsamet3i@phoca.cz', '4bc19897ee3d1a35af3ff7aa6bcc1b58', NULL, 'user', NULL, 'Female', '87/22D Jackson Height st.,Saint Johns,Antigua ', 661103656),
(20201032, 'Corine Polycote', 'cpolycote6e@yahoo.co.jp', 'ed1b08584e62d6f124a7609e9128c06d', NULL, 'user', NULL, 'Female', '53/59C Delta Prime Hospital Road, Berlin, Germany', 700139493),
(20201033, 'Niven Culbert', 'nculbertkx@discovery.com', '97a43bc38a8a6303bbcb39a505dfa4e2', NULL, 'user', NULL, 'Male', '75/14B HardGain Road, Beijing, China.', 468188367),
(20201034, 'Nicky Twiddy', 'ntwiddyb@nasa.gov', '66a7c0e33a4003a240fcaae0a7e9b549', NULL, 'user', NULL, 'Male', '32/79T ARB Apartment, Monaco, Monaco.', 95679800),
(20201035, 'Isiahi Hamnet', 'ihamnet25@sourceforge.net', 'bec3b0afacb600257d186e48a668b85d', NULL, 'user', NULL, 'Male', '71/18E Makentile Fort Road, Brasilia, Brazil.', 45965513),
(20201039, 'Kimble Ricardo', 'kricardo5@youtu.be', 'bdda10036d3979c9d0145b26a0b99f04', NULL, 'user', NULL, 'Male', '60/18F Liverpool Playyard,Buenos Aires,Argentina', 180127210),
(20201040, 'Hersh Gilders', 'hgildersc6@blinklist.com', 'afff7735a54ebfa8c69d137b58ebf4a9', NULL, 'user', NULL, 'Male', '52/87C Lorial Grafens Road, Ottawa, Canada.', 85499771),
(20201042, 'Koenraad Goane', 'kgoaneoe@so-net.ne.jp', '875e4ab53a785f8df6077316e89b3b20', NULL, 'user', NULL, 'Male', '92/88J Lorenham Palace, Tehran, Iran.', 598179636),
(20201043, 'Binny Cowdry', 'bcowdryj@ehow.com', '956ff38ee12bde2beb967a03957969be', NULL, 'user', NULL, 'Female', '68/91R Beikstone Georgia, Rome, Italy.', 286148636),
(20201044, 'Nance Bromet', 'nbromet9y@harvard.edu', '56f28a2e228dec536ec9e4f72ccbb8eb', NULL, 'user', NULL, 'Female', '38/88M Royal Palace, Green Garden , Athens, Greece', 49076413),
(20201046, 'Juieta Storms', 'jstormsf7@hc360.com', '7e3b79c58ecbaf92de2a4e565aba29e2', NULL, 'user', NULL, 'Female', '97/85C Delta Prime Hospital Road, Berlin, Germany', 42784932),
(20201047, 'Abigale Segeswo', 'asegeswoethkp@redcross.org', '7f94b720ea9c1dcbb91580e173bf8e8a', NULL, 'user', NULL, 'Female', '89/38B Cilliam Transmit Road, Helsinki, Finland.', 675149214),
(20201048, 'Aubrette McNutt', 'amcnuttbk@chronoengine.com', '7064ac1279268c3c952293f0a6f1e299', NULL, 'user', NULL, 'Female', '89/63B HardGain Road, Beijing, China.', 79586381),
(20201049, 'Ula Newburn', 'unewburndi@telegraph.co.uk', '94a0dde82d6d3d64613492b43fd78508', NULL, 'user', NULL, 'Female', '75/27A Eskaton Road,Santiago, Chile.', 98195711),
(20201051, 'Bette-ann Folke', 'bfolkenf@com.com', '705d1b00cd3a3fece242faf8628022aa', NULL, 'user', NULL, 'Female', '20/99H Washinton View Fort Gate, Kuwait City, Kuwa', 231131203),
(20201052, 'Silvanus Hawksw', 'shawkswellog@over-blog.com', '93ad4720451bc424765cf12c1a52d44d', NULL, 'user', NULL, 'Male', '79/19T ARB Apartment, Monaco, Monaco.', 321130542),
(20201053, 'Lilla Chichgar', 'lchichgarc2@spiegel.de', 'aa0ef5a89d9835980ec2c9ee37ac2fa1', NULL, 'user', NULL, 'Female', '56/65C Delta Prime Hospital Road, Berlin, Germany', 628169915),
(20201054, 'Elli Sreenan', 'esreenanr2@chicagotribune.com', 'c7eb5d0e0adc317954de227a16713f82', NULL, 'user', NULL, 'Female', '66/51M Royal Palace, Green Garden , Athens, Greece', 751126244),
(20201056, 'Nanette Grinaug', 'ngrinaughhu@google.it', 'e8ad93364de559c3c105a939791bf600', NULL, 'user', NULL, 'Female', '29/20D Norveil Tower, Tripoli, Libya.', 38338399),
(20201057, 'Nefen Neumann', 'nneumannqm@youtube.com', '01cc6a69d3a045372efc70e6fd61f6a1', NULL, 'user', NULL, 'Male', '14/60E Idia Gate, Havana,Cuba. ', 69497235),
(20201058, 'Catlaina de Men', 'cdemendozan1@tamu.edu', '78d7421c18f87b6688e04acfe3b9b8bf', NULL, 'user', NULL, 'Female', '77/47E Sylvania Towar, Dhakeshwari, Dhaka, Banglad', 453160295),
(20201059, 'Glenine De Fili', 'gdefilippis33@imdb.com', 'f838c22792be8cb9af28328a4ea1f712', NULL, 'user', NULL, 'Female', '43/59H Edward Field Residence, Saint Georges, Gren', 320173841),
(20201060, 'Ilario Cartmael', 'icartmaellr@ocn.ne.jp', '8412734e71db7c0367296810ff86026e', NULL, 'user', NULL, 'Male', '46/34D Norveil Tower, Tripoli, Libya.', 750117625),
(20201061, 'Ninnette Meredy', 'nmeredythcp@china.com.cn', '4289f8d69d95435cb064b27422415593', NULL, 'user', NULL, 'Female', '96/76K Serambag st.San Jose, Costa Rica.', 134130975),
(20201062, 'Elnar Battram', 'ebattram1e@e-recht24.de', '96c079b50478b9044713404d3ebdd7e2', NULL, 'user', NULL, 'Male', '62/47D Lakveil Graveyard,Vienna,Austria', 26396767),
(20201063, 'Culver Dussy', 'cdussy23@hibu.com', 'c0118a31ae816f8707dcfcb6f945ddbe', NULL, 'user', NULL, 'Male', '81/82T Merul Badda Road, Dhaka, Bangladesh', 913156813),
(20201064, 'Nester Olivey', 'noliveye2@ted.com', 'e44604f6d6a089031f8b1b1c63fd0410', NULL, 'user', NULL, 'Male', '35/34C Eskaton Palace Road, San Salvador, El Salva', 834137406),
(20201065, 'Silva Kiddie', 'skiddielf@accuweather.com', 'a662a43fdb230f5c448ead17f4a23d99', NULL, 'user', NULL, 'Female', '94/48F Loganham Palace, Prague, Czechia.', 976156912),
(20201066, 'Dav Forryan', 'dforryan6y@wikia.com', 'de319b4c5b3f4cc9148a45e01eac3631', NULL, 'user', NULL, 'Male', '92/45D Jackson Height st.,Saint Johns,Antigua ', 91064433),
(20201067, 'Massimo Neath', 'mneathkg@netvibes.com', 'abf920787206ee1e1d5dc4594742f191', NULL, 'user', NULL, 'Male', '92/32E Idia Gate, Havana,Cuba. ', 791124903),
(20201068, 'Marsha Aikman', 'maikmanq6@aol.com', '6dd45810dc3e1dd95e14643225061241', NULL, 'user', NULL, 'Female', '94/89A Yanbkshi Road,Canberra,Australia', 219167600),
(20201070, 'Car Phair', 'cphair4i@facebook.com', 'd201e445dc392e7bd83aba3d9a1829e7', NULL, 'user', NULL, 'Male', '48/65A Albert Graham Road, Bandar Seri Begawan, Br', 903152679),
(20201071, 'Emmett Cossom', 'ecossom85@mac.com', '740981f4694d0f68e8b1ee720c783155', NULL, 'user', NULL, 'Male', '33/18F Billiard Road Fort Gate, Paris, France.', 65638220),
(20201072, 'Lauritz Hyde-Ch', 'lhydechambersjc@gov.uk', 'b7f6ebf1c95a7d30b3ec298dd581c2d7', NULL, 'user', NULL, 'Male', '41/21A Yanbkshi Road,Canberra,Australia', 29182256),
(20201073, 'Tad Vignal', 'tvignal86@multiply.com', 'a8bef1c6047e55ae0f66a1a9c469369c', NULL, 'user', NULL, 'Male', '88/50F Billiard Road Fort Gate, Paris, France.', 55460965),
(20201074, 'Feodora Holme', 'fholmer1@bing.com', '74c7e25010b8586386c2af494abc5c1d', NULL, 'user', NULL, 'Female', '71/59E Idia Gate, Havana,Cuba. ', 93295181),
(20201075, 'Rivalee Merchan', 'rmerchantar@ocn.ne.jp', '33fdebbbffc70d25e5886c04f9826451', NULL, 'user', NULL, 'Female', '79/34A Albert Graham Road, Bandar Seri Begawan, Br', 508128564),
(20201076, 'Miles Twinn', 'mtwinn2q@e-recht24.de', 'ce5a3178f598b99a7a7336dd85ca5586', NULL, 'user', NULL, 'Male', '24/73A Californian St. Copenhagen, Denmark.', 68491577),
(20201077, 'Sheila Asmus', 'sasmush9@google.com', '3fe0a3792dedb8d5288b8f66bc03e9a5', NULL, 'user', NULL, 'Female', '70/82E Makentile Fort Road, Brasilia, Brazil.', 31061953),
(20201078, 'Gabriella O\'Sha', 'goshaughnessy9z@ucoz.com', '73f66a7bc5a9de7ae1cbb303bf2b1858', NULL, 'user', NULL, 'Female', '28/33D Jackson Height st.,Saint Johns,Antigua ', 946110193),
(20201079, 'Dur Camier', 'dcamier6s@statcounter.com', 'f53c03dd00dbc210a7b4c8dc12498d81', NULL, 'user', NULL, 'Male', '43/73H Oscean View Lane, Panama City, Panama.', 226136861),
(20201080, 'Sondra Cowely', 'scowelyji@simplemachines.org', '56ff2616f4f416487495e93ae2619bfa', NULL, 'user', NULL, 'Female', '40/81H Oscean View Lane, Panama City, Panama.', 58777864),
(20201082, 'Loretta Hows', 'lhows93@drupal.org', '1d2a5efd64d7aac63376ca4eafc01f09', NULL, 'user', NULL, 'Female', '90/59H Tokyo Square, Kermail, Tokyo, Japan.', 51181872),
(20201083, 'Ulick Kincla', 'ukinclalb@mashable.com', 'c0ced0c21e10e2d1b40f09720284f992', NULL, 'user', NULL, 'Male', '29/86A Californian St. Copenhagen, Denmark.', 33291196),
(20201084, 'Elvin Goldsmith', 'egoldsmith3e@yahoo.com', '22a1376898737f59729d0ee9410598e5', NULL, 'user', NULL, 'Male', '45/68C Delta Prime Hospital Road, Berlin, Germany', 953171982),
(20201085, 'Walliw Kmicicki', 'wkmicickil@people.com.cn', '30e8a2f70dc0343029b91379b9648d06', NULL, 'user', NULL, 'Female', '51/25A Yanbkshi Road,Canberra,Australia', 16549434),
(20201086, 'Beniamino Lavin', 'blavinbl@g.co', 'f52676d879dbf6dcf71cf5b732c6c47a', NULL, 'user', NULL, 'Male', '34/92A Eskaton Road,Santiago, Chile.', 362101886),
(20201087, 'Munmro Shute', 'mshutek0@mlb.com', '1f3d9f6a2462f02f60a790a9535898ae', NULL, 'user', NULL, 'Male', '55/34A Eskaton Road,Santiago, Chile.', 599114036),
(20201088, 'Lewiss Sagg', 'lsagghg@columbia.edu', '65e28f4985cd35d1ed3b252b63f0190e', NULL, 'user', NULL, 'Male', '97/21A Albert Graham Road, Bandar Seri Begawan, Br', 712172746),
(20201089, 'Layla Drury', 'ldrury77@cbc.ca', 'bd14d9ba13a6678b7340ef38366a87c4', NULL, 'user', NULL, 'Female', '71/14A Eskaton Road,Santiago, Chile.', 98892867),
(20201092, 'Asher Pohls', 'apohls9v@netlog.com', 'b508799c272c28bd5639f86102bccd8e', NULL, 'user', NULL, 'Male', '91/30G White House Residence, Kingston, Jamaica.', 19713434),
(20201093, 'Vivi Tasseler', 'vtasselerbe@hostgator.com', '7559c3eb57d6208fd06c4e1b2870e4c3', NULL, 'user', NULL, 'Female', '30/79D Dankan Street,Manama,Bahrain', 854168393),
(20201095, 'Anett Hitzmann', 'ahitzmanncx@webeden.co.uk', 'db689feaabc9b6048d122f1c61bedd49', NULL, 'user', NULL, 'Female', '28/28B HardGain Road, Beijing, China.', 42078570),
(20201097, 'Quint Cliburn', 'qcliburnro@latimes.com', 'd196a84f7de8b4a0a691323727a38c7f', NULL, 'user', NULL, 'Male', '87/26B Cilliam Transmit Road, Helsinki, Finland.', 505152804),
(20201098, 'Mort Myall', 'mmyall24@apache.org', '0e9aa16b2f8ac017108c7d9eb6759895', NULL, 'user', NULL, 'Male', '16/60E Makentile Fort Road, Brasilia, Brazil.', 585170878),
(20201099, 'Duke Frontczak', 'dfrontczakax@umn.edu', 'c45e785584403f88dfce8ebc4ae49909', NULL, 'user', NULL, 'Male', '33/49K Serambag st.San Jose, Costa Rica.', 66377861),
(20201100, 'Revkah Tibalt', 'rtibaltnt@jimdo.com', '12dd4020c7042bd24943636076f5460e', NULL, 'user', NULL, 'Female', '16/52H Oscean View Lane, Panama City, Panama.', 99486922),
(20201101, 'Dacey Kacheler', 'dkacheler2w@networkadvertising.org', 'ae9b594d3456d31ace3b42cb5a800f03', NULL, 'user', NULL, 'Female', '80/13A Californian St. Copenhagen, Denmark.', 76876953),
(20201102, 'Bruno Harradenc', 'bharradencegc@canalblog.com', 'fa8f788786de1e3c7e7bb95f0bb6300f', NULL, 'user', NULL, 'Male', '99/44D Lakveil Graveyard,Vienna,Austria', 16581836),
(20201104, 'Brooks Mulgrew', 'bmulgrewm1@rakuten.co.jp', '4193c5508bdab507b0feae3a3c8546aa', NULL, 'user', NULL, 'Male', '67/55A Yanbkshi Road,Canberra,Australia', 880101132),
(20201105, 'Raphaela Rowney', 'rrowneyd1@addtoany.com', 'f47e27909ee963260160bc712d3176e7', NULL, 'user', NULL, 'Female', '85/69H Edward Field Residence, Saint Georges, Gren', 30491510),
(20201106, 'Jard Vankeev', 'jvankeevcm@oaic.gov.au', '56cc6c59a7168ada4c82a3ffc33ddf76', NULL, 'user', NULL, 'Male', '38/90F Loganham Palace, Prague, Czechia.', 15245704),
(20201108, 'Ab Vaudin', 'avaudindn@miitbeian.gov.cn', 'da5001c19efb5a925f8c442cb12553b2', NULL, 'user', NULL, 'Male', '75/53T ARB Apartment, Monaco, Monaco.', 990124284),
(20201109, 'Debi Pedican', 'dpedicanbu@mapy.cz', 'dd9af6d689de3d50665fb2658f7e791b', NULL, 'user', NULL, 'Female', '61/15T Merul Badda Road, Dhaka, Bangladesh', 74889067),
(20201110, 'Fleming Conklin', 'fconklinih@parallels.com', 'e3faac241ca9d4ce753f0d2a6bf40826', NULL, 'user', NULL, 'Male', '37/64H Washinton View Fort Gate, Kuwait City, Kuwa', 30567874),
(20201111, 'Birk Irlam', 'birlamlj@ning.com', '773d692b6f5415463dd64dce7f5b19f9', NULL, 'user', NULL, 'Male', '61/23B Cilliam Transmit Road, Helsinki, Finland.', 874125061),
(20201112, 'Sibylla East', 'seast32@smh.com.au', 'd0503e635a9f70a3ed0599b5381bc5bd', NULL, 'user', NULL, 'Female', '98/13A Californian St. Copenhagen, Denmark.', 774116708),
(20201113, 'Wolfgang Collum', 'wcollumbell48@deviantart.com', '82dc7bf6b73cfc92ac6164e310321f58', NULL, 'user', NULL, 'Male', '67/47A Albert Graham Road, Bandar Seri Begawan, Br', 465137496),
(20201115, 'Melvyn Gosnall', 'mgosnall3d@umich.edu', '1db00945baffebccc3a42f49db3fcef9', NULL, 'user', NULL, 'Male', '18/39E Idia Gate, Havana,Cuba. ', 697107030),
(20201116, 'Jackqueline Flo', 'jflohardev@bloglovin.com', '8509b9a70b163c858ff295e36960a477', NULL, 'user', NULL, 'Female', '34/70T Merul Badda Road, Dhaka, Bangladesh', 825150631),
(20201118, 'Tomkin Luty', 'tlutyew@cbslocal.com', '93b3cc3c45400561f1a2fdc843a4a4f5', NULL, 'user', NULL, 'Male', '85/65D Dankan Street,Manama,Bahrain', 284161094),
(20201119, 'Aubert Bollans', 'abollans9@auda.org.au', '528fe0fcfdb27ba7e250eb9fd640eb2b', NULL, 'user', NULL, 'Male', '30/26F Liverpool Playyard,Buenos Aires,Argentina', 31280748),
(20201120, 'Marna Smaridge', 'msmaridge6u@ibm.com', '41474e66060bd08ba090ab89bfab312d', NULL, 'user', NULL, 'Female', '11/86T ARB Apartment, Monaco, Monaco.', 891101468),
(20201121, 'Gaby Benson', 'gbenson9f@kickstarter.com', 'b8bbbbb799e7efdfa907d9b1517507d7', NULL, 'user', NULL, 'Female', '80/82B HardGain Road, Beijing, China.', 64845841),
(20201122, 'Emmalynn Worman', 'ewormanfh@delicious.com', '3ea07068720327ce2ddf2c6a439c381a', NULL, 'user', NULL, 'Female', '37/72C Adams Lane, Andorra La Vella, Andorra', 687132484),
(20201123, 'Lawton Dyet', 'ldyet7i@simplemachines.org', 'adaa2c781a7eac6f2d7285dcca0ce982', NULL, 'user', NULL, 'Male', '92/36F Billiard Road Fort Gate, Paris, France.', 681103721),
(20201124, 'Giuditta Dealey', 'gdealeygs@oaic.gov.au', '22a4efae3be259809bbba576287ddf6d', NULL, 'user', NULL, 'Female', '85/31H Tokyo Square, Kermail, Tokyo, Japan.', 118155847),
(20201125, 'Annora Ebdon', 'aebdonga@mac.com', 'd3518eb652c3b9d1fbe21e4eb4343d36', NULL, 'user', NULL, 'Female', '19/53B HardGain Road, Beijing, China.', 888115042),
(20201126, 'Giacomo Screeto', 'gscreeton9r@amazon.com', 'cf45281f63b1fe15d874c30465dd25e9', NULL, 'user', NULL, 'Male', '97/93D Dankan Street,Manama,Bahrain', 37162019),
(20201127, 'Derick Ortelt', 'dortelth8@xinhuanet.com', '7494b11a59ac49911f9283e03334b2bf', NULL, 'user', NULL, 'Male', '79/61T ARB Apartment, Monaco, Monaco.', 348121301),
(20201128, 'Orlando Winckwo', 'owinckworth2g@eventbrite.com', 'd8aa91becd04358edb55d2ff3f31eb1b', NULL, 'user', NULL, 'Male', '83/37F Liverpool Playyard,Buenos Aires,Argentina', 9144293),
(20201129, 'Nolly McCarlich', 'nmccarlichp@hc360.com', '66e89e31f5e9fbfc4c3bd779ab34bfb9', NULL, 'user', NULL, 'Male', '33/46F Billiard Road Fort Gate, Paris, France.', 97591929),
(20201130, 'Ivory Ruttgers', 'iruttgersed@dedecms.com', 'f54fcdc93124dc7ec5a00ba740d41c9d', NULL, 'user', NULL, 'Female', '89/42B Cilliam Transmit Road, Helsinki, Finland.', 364150107),
(20201131, 'Leoline Ablitt', 'lablitt22@patch.com', 'e45bb83bf0b35928166649c30f659ff1', NULL, 'user', NULL, 'Female', '23/42M Resavoir Palace, Baghdad, Iraq.', 535107375),
(20201132, 'Tymothy Delos', 'tdelos1m@is.gd', '84c41968e335e496820734d381f2dbee', NULL, 'user', NULL, 'Male', '58/88C Adams Lane, Andorra La Vella, Andorra', 652112992),
(20201133, 'Merrily Moggle', 'mmoggle87@sitemeter.com', 'ed599612c6269b8e8d2c009e624b56d5', NULL, 'user', NULL, 'Female', '33/40C Lorial Grafens Road, Ottawa, Canada.', 763102633),
(20201135, 'Kissee Barette', 'kbaretteff@prnewswire.com', '4532b60aca54b351d69425269258f8f5', NULL, 'user', NULL, 'Female', '36/27H Tokyo Square, Kermail, Tokyo, Japan.', 190140299),
(20201136, 'Ileana Vedekhin', 'ivedekhinqc@spotify.com', 'b24c4c9db5c823f9d0d443ee17ee549c', NULL, 'user', NULL, 'Female', '87/30F Liverpool Playyard,Buenos Aires,Argentina', 336106797),
(20201137, 'Gene MacAnellye', 'gmacanellyehf@wordpress.org', 'f8c59630b1df108afef276455cd2debd', NULL, 'user', NULL, 'Male', '70/47K Serambag st.San Jose, Costa Rica.', 527112526),
(20201138, 'Ignatius Alpheg', 'ialphege99@blinklist.com', '28ad0b1dc164584cc11a8211ae315978', NULL, 'user', NULL, 'Male', '11/13T Merul Badda Road, Dhaka, Bangladesh', 921110787),
(20201139, 'Evelin Morpeth', 'emorpeth5y@mlb.com', 'eb2da415ed3f1f856b9143b576b76a02', NULL, 'user', NULL, 'Male', '69/34A Californian St. Copenhagen, Denmark.', 37072063),
(20201140, 'Alexis Yonge', 'ayongecz@hibu.com', '657a2f40c8391c1e3928d5b170c1de0a', NULL, 'user', NULL, 'Male', '79/31B HardGain Road, Beijing, China.', 414142148),
(20201143, 'Mose Nealand', 'mnealand7g@gizmodo.com', '4890e63961c731b2dc1a5762379ca490', NULL, 'user', NULL, 'Male', '60/73R Beikstone Georgia, Rome, Italy.', 13296239),
(20201144, 'Constantine Cla', 'cclaussonp9@omniture.com', '059159013098fedaa1798cb5749291a5', NULL, 'user', NULL, 'Male', '89/50M Resavoir Palace, Baghdad, Iraq.', 112110396),
(20201146, 'Darcy Dubs', 'ddubsfg@is.gd', 'ca8c694b54cfff86ec86017b9fce035c', NULL, 'user', NULL, 'Female', '26/37F Liverpool Playyard,Buenos Aires,Argentina', 692131835),
(20201147, 'Neill Llorens', 'nllorens2v@examiner.com', 'c1d3c74e58bcbe6ac8ee5f3eb4727abe', NULL, 'user', NULL, 'Male', '17/64G White House Residence, Kingston, Jamaica.', 442109539),
(20201148, 'Andy Hailwood', 'ahailwoodal@mtv.com', '27373d6abeefd7db8a74c53dae976561', NULL, 'user', NULL, 'Female', '48/33G White House Residence, Kingston, Jamaica.', 92737737),
(20201149, 'Deborah Winterb', 'dwinterbothamgl@unesco.org', 'b42e7c2d857154604beb919f83b5a253', NULL, 'user', NULL, 'Female', '19/80T Merul Badda Road, Dhaka, Bangladesh', 16069034),
(20201151, 'Dillie Maffia', 'dmaffiaqh@wired.com', '6aa91afe9b1c8efe0be1bb219165cd98', NULL, 'user', NULL, 'Male', '97/14D Jackson Height st.,Saint Johns,Antigua ', 75362268),
(20201153, 'Vania Totterdil', 'vtotterdillgr@slashdot.org', '50894b2c40f989576df950e7b50520ef', NULL, 'user', NULL, 'Female', '83/17J Lorenham Palace, Tehran, Iran.', 192114540),
(20201154, 'Janifer Cashley', 'jcashleykj@xing.com', '8a45ce03767d8eac52d7407ee7b1c211', NULL, 'user', NULL, 'Female', '14/68G White House Residence, Kingston, Jamaica.', 562121224),
(20201156, 'Dario Meneur', 'dmeneurl5@nifty.com', 'e1a7b17611d980554f8ed63ea17d4c08', NULL, 'user', NULL, 'Male', '66/40A Yanbkshi Road,Canberra,Australia', 860135167),
(20201157, 'Fletch Moncreif', 'fmoncreiffer8@sbwire.com', '5e382c648683fdbd7dd1351b82a19cbb', NULL, 'user', NULL, 'Male', '29/54D Jackson Height st.,Saint Johns,Antigua ', 231104144),
(20201158, 'Currey Winfinda', 'cwinfindale1q@zimbio.com', 'b12eeb9bd0b7fe6fd5ce18ca0217b896', NULL, 'user', NULL, 'Male', '61/66C Lorial Grafens Road, Ottawa, Canada.', 46463584),
(20201159, 'Obadiah Piscope', 'opiscopellobb@ebay.co.uk', '00cc328b8d8e194b00f10ad0e5404670', NULL, 'user', NULL, 'Male', '12/93F Liverpool Playyard,Buenos Aires,Argentina', 38993197),
(20201160, 'Massimo Soall', 'msoallnq@bandcamp.com', '1ab9b5697e511b65e5dfe25117a8548a', NULL, 'user', NULL, 'Male', '45/41R Beikstone Georgia, Rome, Italy.', 465193988),
(20201163, 'Aliza MacBain', 'amacbain3o@themeforest.net', '3bb3b01a211ed5ff11e10b0cffbc772a', NULL, 'user', NULL, 'Female', '97/25D Jackson Height st.,Saint Johns,Antigua ', 133118769),
(20201164, 'Trula Jacmard', 'tjacmardhe@oakley.com', '39389766a75ac387a57b8c14408c881d', NULL, 'user', NULL, 'Female', '43/20H Tokyo Square, Kermail, Tokyo, Japan.', 71544702),
(20201165, 'Pietra Winmill', 'pwinmill4u@diigo.com', 'c4880a3e9f608ac89b916988135aa4db', NULL, 'user', NULL, 'Female', '82/76B Cilliam Transmit Road, Helsinki, Finland.', 655110002),
(20201166, 'Claudio Derle', 'cderleob@chronoengine.com', '2367760bd00ee8fe6da67edcc22150cd', NULL, 'user', NULL, 'Male', '82/54B Cilliam Transmit Road, Helsinki, Finland.', 637136636),
(20201167, 'Griffie Jedrzej', 'gjedrzejczakp6@amazon.co.uk', '2f76acd824154258ad8b77680af6771a', NULL, 'user', NULL, 'Male', '80/23C Adams Lane, Andorra La Vella, Andorra', 62287002),
(20201168, 'Jeremy Baynard', 'jbaynardl4@mayoclinic.com', '92d89cec775ff176257223a33e623ef7', NULL, 'user', NULL, 'Male', '47/18G White House Residence, Kingston, Jamaica.', 668138368),
(20201169, 'Astrix Evreux', 'aevreuxd8@jiathis.com', 'a3cb949590dcc6b094e077b5a7239f69', NULL, 'user', NULL, 'Female', '11/14B Cilliam Transmit Road, Helsinki, Finland.', 83899041),
(20201170, 'Annecorinne Dio', 'adionis7d@archive.org', 'bb19d9c72714f1b24d76fc1b92438ab7', NULL, 'user', NULL, 'Female', '39/24F Liverpool Playyard,Buenos Aires,Argentina', 467114952),
(20201171, 'Weylin Orhrt', 'worhrthr@timesonline.co.uk', '1c8b4cc5b285c681a9f37b8b4544c489', NULL, 'user', NULL, 'Male', '19/98T Merul Badda Road, Dhaka, Bangladesh', 60542934),
(20201172, 'Gillian Seebrig', 'gseebright2l@nhs.uk', 'f9865eeb69bbf0a455dc7d21c2b8638e', NULL, 'user', NULL, 'Female', '99/49D Lakveil Graveyard,Vienna,Austria', 465109153),
(20201173, 'Milty Plunket', 'mplunket8c@ucoz.ru', '613ddecc7cd87a309f77758057747188', NULL, 'user', NULL, 'Male', '41/19A Eskaton Road,Santiago, Chile.', 442101121),
(20201174, 'Renell MacCart', 'rmaccart29@t.co', '486aab77762a74de0b83ea690cb9b687', NULL, 'user', NULL, 'Female', '77/19G White House Residence, Kingston, Jamaica.', 526116091),
(20201175, 'Adham Sartain', 'asartainna@europa.eu', '4195129ebd988ac2f9ba4bf760503160', NULL, 'user', NULL, 'Male', '71/78H Oscean View Lane, Panama City, Panama.', 348107193),
(20201176, 'Pepita Rubin', 'prubin1g@bloomberg.com', 'f93850473bb67912a267dc50437a9f4c', NULL, 'user', NULL, 'Female', '42/92K Serambag st.San Jose, Costa Rica.', 503112879),
(20201178, 'Steven Drejer', 'sdrejermx@unc.edu', 'b7af766b6404b75d40216f18615b3335', NULL, 'user', NULL, 'Male', '63/72T ARB Apartment, Monaco, Monaco.', 985137930),
(20201179, 'Shelton Thunner', 'sthunnercliffegk@indiegogo.com', '012daee60e8e552f9225bfb3f3bed036', NULL, 'user', NULL, 'Male', '83/55C Lorial Grafens Road, Ottawa, Canada.', 776112217),
(20201180, 'Isiahi Antrum', 'iantrumjm@nymag.com', '49aa8b0505478bdfa0f535ccc28df73c', NULL, 'user', NULL, 'Male', '55/90A Californian St. Copenhagen, Denmark.', 29575917),
(20201182, 'Mia Wevell', 'mwevelln7@deviantart.com', 'f2f79cf483cc2bc72b4713c4a0296b51', NULL, 'user', NULL, 'Female', '56/84F Liverpool Playyard,Buenos Aires,Argentina', 62388745),
(20201183, 'Renado Turneaux', 'rturneauxkw@wp.com', '8cfbf2644991890637f4c700b55359ca', NULL, 'user', NULL, 'Male', '59/78D Norveil Tower, Tripoli, Libya.', 421145324),
(20201184, 'Noni Valentetti', 'nvalentettih1@joomla.org', '572efd635a71f6046452b51e4b6349d9', NULL, 'user', NULL, 'Female', '37/14J Lorenham Palace, Tehran, Iran.', 99892035),
(20201185, 'Lilia Ploughwri', 'lploughwright21@etsy.com', '4ebde3788560fe9a371db8ee5f741e09', NULL, 'user', NULL, 'Female', '17/40F Billiard Road Fort Gate, Paris, France.', 80534769),
(20201186, 'Fredek Halleday', 'fhalledaypb@theguardian.com', 'a3b4051f57f900c364a28cd61240ecc0', NULL, 'user', NULL, 'Male', '92/71H Tokyo Square, Kermail, Tokyo, Japan.', 172131619),
(20201188, 'Hastings Rawstr', 'hrawstronjk@oaic.gov.au', 'f04a94d6727d04e039005863272a3718', NULL, 'user', NULL, 'Male', '12/46A Albert Graham Road, Bandar Seri Begawan, Br', 22171235),
(20201189, 'Carley Shipperb', 'cshipperbottombc@pcworld.com', '893278b718a15651546d9a7e4d4b8b31', NULL, 'user', NULL, 'Female', '25/34F Liverpool Playyard,Buenos Aires,Argentina', 655144203),
(20201190, 'Brett Licas', 'blicaslq@mlb.com', '78141eecaf0a31b64398cad52b86edd3', NULL, 'user', NULL, 'Male', '25/11F Loganham Palace, Prague, Czechia.', 37890597),
(20201193, 'Tremain Fishwic', 'tfishwickf8@amazon.de', '2309a19929af35e269b57000133386f7', NULL, 'user', NULL, 'Male', '18/28D Dankan Street,Manama,Bahrain', 90585393),
(20201195, 'Corabelle Danil', 'cdanilevichir@artisteer.com', 'b5b13aac55c141a8c18d73676a18b4a8', NULL, 'user', NULL, 'Female', '22/95C Lorial Grafens Road, Ottawa, Canada.', 265107247),
(20201196, 'Carine Sipson', 'csipsonou@linkedin.com', '17d55f0815409479fc9e5a5dad331cc5', NULL, 'user', NULL, 'Female', '71/36A Eskaton Road,Santiago, Chile.', 15443204),
(20201198, 'Xymenes MacCurl', 'xmaccurleypi@ucoz.com', '5b67317d7c53f944dbef1a7edde5e20a', NULL, 'user', NULL, 'Male', '34/79J Lorenham Palace, Tehran, Iran.', 373178472),
(20201199, 'Coop Hulmes', 'chulmes7v@elpais.com', 'ee2d9b43247ad7736515f1e02d814369', NULL, 'user', NULL, 'Male', '79/58T ARB Apartment, Monaco, Monaco.', 51463178),
(20201201, 'Timi Evins', 'tevinsbp@businessweek.com', '377212ef912431a9c1217bf5b50df976', NULL, 'user', NULL, 'Female', '19/82C Eskaton Palace Road, San Salvador, El Salva', 194105939),
(20201202, 'Andrei Pullar', 'apullaren@amazon.co.jp', '84f7bfcb5f5a99817fc8be7772ff8748', NULL, 'user', NULL, 'Female', '82/81C Lorial Grafens Road, Ottawa, Canada.', 42975276),
(20201205, 'Decca Sneezum', 'dsneezumpc@dailymail.co.uk', '4adcc7d60ed23c8fa694c8c36b19892f', NULL, 'user', NULL, 'Male', '80/54A Californian St. Copenhagen, Denmark.', 924113447),
(20201206, 'Leeland Cutchee', 'lcutchee9x@yandex.ru', '2efec31a0424355fd9ae77e12a757df1', NULL, 'user', NULL, 'Male', '55/99G White House Residence, Kingston, Jamaica.', 31089241),
(20201207, 'Prottasha', 'rcsamina@aiub.edu', '3ccefdd0a16d239ca11a5e50723e17a2', '20201207.jpg', 'user', 'N/A', NULL, 'Kerkail Railgate, Jamalpur, Bangladesh.', 1915234539),
(20201208, 'Saurav Kader', 'sauravkader@gmail.com', 'b6addebe2a0b10f534f018967229042e', NULL, 'user', 'N/A', NULL, 'Rolter Hat, Shamer Bazar, Noakhali.', 1725123123),
(20201209, 'kasmeer', 'kasmeer955@gmail.com', '44a5629222580cd74823e823cb97d872', NULL, 'user', 'N/A', NULL, 'Kashmir, India - 9902.', 1988712363),
(20201210, 'Zaman Farid', 'ZamanFarid@zamanit.bd', '786f582fd4178a697bb48213edd8aad4', NULL, 'user', 'N/A', NULL, 'King road, Kurmitola.', 195348348);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_prod_details`
--
ALTER TABLE `tbl_prod_details`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `tbl_prod_review`
--
ALTER TABLE `tbl_prod_review`
  ADD PRIMARY KEY (`rev_no`);

--
-- Indexes for table `tbl_sitedata`
--
ALTER TABLE `tbl_sitedata`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111008;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_prod_details`
--
ALTER TABLE `tbl_prod_details`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=800175;

--
-- AUTO_INCREMENT for table `tbl_prod_review`
--
ALTER TABLE `tbl_prod_review`
  MODIFY `rev_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1398;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20201211;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
