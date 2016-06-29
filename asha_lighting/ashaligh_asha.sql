-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2016 at 11:41 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ashaligh_asha`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `email`, `address`) VALUES
(4, ' office 1: 016747512924587 ;  office 2: 0167475129', 'masum_bellah1990@yahoo.com4585', 'nikunja-24988945'),
(3, ' office 1: 016747512924587 ;  office 2: 0167475129', 'masum_bellah1990@yahoo.com4585', '<p>nikunja-24988945</p>\r\n'),
(5, '01715-081025, 01715-594943 ', 'asha@gmail.com', ''),
(6, '01715-081025, 01715-594943 ', 'asha@gmail.com', '<p style="text-align: justify;"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Noor Electric Market (1st floor)<br />\r\n128/13, Nobabpur Road, Dhaka-Bangladesh</span></span></span></p>\r\n'),
(7, '01715-081025, 01715-594943 ', 'ashacorporation1987@gmail.com', '<p style="text-align:justify">Corporate Office:</p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Noor Electric Market (1st floor)<br />\r\n128/13, Nobabpur Road, Dhaka-Bangladesh</span></span></span></p>\r\n'),
(8, 'Phone: +880 2 7121924, 9511718', 'ashacorporation1987@gmail.com', '<p style="text-align:justify"><span style="color:#009900"><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Corporate Office: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Head Office: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Factory:</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:24px"><span style="font-family:arial,helvetica,sans-serif">ASHA TRADING AGENCY &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ASHA CORPORATION &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></strong></span><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Fatullah, Narayangonj,</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Noor Electric Market (1st Floor), &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;124/2, Shantinagar Plaza (1st Floor), &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Bangladesh.<br />\r\n128/13, Nobabpur Road, Dhaka-1100,&nbsp;Bangladesh.&nbsp; &nbsp; &nbsp; &nbsp;New Kakrail Road, Dhaka-1000, Bangladesh.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span></p>\r\n'),
(9, 'Phone: +880 2 7121924, 9511718', 'ashacorporation1987@gmail.com', '<p style="text-align:justify"><span style="color:#009900"><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Corporate Office:</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:24px"><span style="font-family:arial,helvetica,sans-serif">ASHA TRADING AGENCY&nbsp;</span></span></strong></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Noor Electric Market (1st Floor),&nbsp;<br />\r\n128/13, Nobabpur Road, Dhaka-1100,&nbsp;Bangladesh.</span></span></span></p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify"><span style="color:#009900"><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Head Office: </span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:24px"><span style="font-family:arial,helvetica,sans-serif">ASHA CORPORATION</span></span></strong></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">124/2, Shantinagar Plaza (1st Floor), </span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">New Kakrail Road, Dhaka-1000, Bangladesh.</span></span></span></p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify"><span style="color:#009900"><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Factory:</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Fatullah, Narayangonj,</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Bangladesh.</span></span></span></p>\r\n'),
(10, '', 'ashacorporation1987@gmail.com', '<p style="text-align:justify"><span style="color:#009900"><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Corporate Office:</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:24px"><span style="font-family:arial,helvetica,sans-serif">ASHA TRADING AGENCY&nbsp;</span></span></strong></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Noor Electric Market (1st Floor),&nbsp;<br />\r\n128/13, Nobabpur Road, Dhaka-1100,&nbsp;Bangladesh.</span></span></span></p>\r\n\r\n<p style="text-align:justify">Phone :&nbsp;+880 2 7121924, 9511718, Cell : 01711-239178, 01711-46210, 01935909391</p>\r\n\r\n<p style="text-align:justify"><span style="color:#009900"><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Head Office: </span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:24px"><span style="font-family:arial,helvetica,sans-serif">ASHA CORPORATION</span></span></strong></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">124/2, Shantinagar Plaza (1st Floor), </span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">New Kakrail Road, Dhaka-1000, Bangladesh.</span></span></span></p>\r\n\r\n<p style="text-align:justify">Phone : +880 2 8316094, Cell : 01935909391,&nbsp;01711-239178, 01711-46210</p>\r\n\r\n<p style="text-align:justify"><span style="color:#009900"><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Factory:</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Fatullah, Narayangonj,</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Bangladesh.</span></span></span></p>\r\n'),
(11, '+8801935-909391,Â 01711-239178, 01711-46210', 'ashacorporation1987@gmail.com', '<p style="text-align:justify"><span style="color:#009900"><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Corporate Office:</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:24px"><span style="font-family:arial,helvetica,sans-serif">ASHA TRADING AGENCY&nbsp;</span></span></strong></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Noor Electric Market (1st Floor),&nbsp;<br />\r\n128/13, Nobabpur Road, Dhaka-1100,&nbsp;Bangladesh.</span></span></span></p>\r\n\r\n<p style="text-align:justify">Phone :&nbsp;+880 2 7121924, 9511718, Cell : 01711-239178, 01711-46210, 01935-909391</p>\r\n\r\n<p style="text-align:justify"><span style="color:#009900"><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Head Office: </span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:24px"><span style="font-family:arial,helvetica,sans-serif">ASHA CORPORATION</span></span></strong></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">124/2, Shantinagar Plaza (1st Floor), </span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">New Kakrail Road, Dhaka-1000, Bangladesh.</span></span></span></p>\r\n\r\n<p style="text-align:justify">Phone : +880 2 8316094, Cell : 01935-909391,&nbsp;01711-239178, 01711-46210</p>\r\n\r\n<p style="text-align:justify"><span style="color:#009900"><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Factory:</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Fatullah, Narayangonj,</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Bangladesh.</span></span></span></p>\r\n'),
(12, '+8801935-909391,Â 01711-239178, 01711-46210', 'ashacorporation1987@gmail.com', '<p style="text-align:justify"><span style="color:#009900"><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Corporate Office:</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:24px"><span style="font-family:arial,helvetica,sans-serif">ASHA TRADING AGENCY&nbsp;</span></span></strong></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Noor Electric Market (1st Floor),&nbsp;<br />\r\n128/13, Nobabpur Road, Dhaka-1100,&nbsp;Bangladesh.</span></span></span></p>\r\n\r\n<p style="text-align:justify">Phone :&nbsp;+880 2 7121924, 9511718, Cell : 01711-239178, 01711-46210, 01935-909391</p>\r\n\r\n<p style="text-align:justify"><span style="color:#009900"><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Head Office: </span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="color:#FF0000"><strong><span style="font-size:24px"><span style="font-family:arial,helvetica,sans-serif">ASHA CORPORATION</span></span></strong></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">124/2, Shantinagar Plaza (1st Floor), </span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">New Kakrail Road, Dhaka-1000, Bangladesh.</span></span></span></p>\r\n\r\n<p style="text-align:justify">Phone : +880 2 8316094, Cell : 01935-909391,&nbsp;01711-239178, 01711-46210</p>\r\n\r\n<p style="text-align:justify"><span style="color:#009900"><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Factory:</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Fatullah, Narayangonj,</span></span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)">Bangladesh.</span></span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Stand-in structure for view `menusubmenu`
--
CREATE TABLE IF NOT EXISTS `menusubmenu` (
`menu_id` int(10)
,`product_menu` text
,`submenu_name` text
,`menu_name` text
,`id` int(10)
);
-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `gallery_id` int(10) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `caption` text NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `location`, `caption`) VALUES
(21, 'uploads/slider-03.jpg', ''),
(18, 'uploads/slider2.jpg', ''),
(19, 'uploads/slider-03.jpg', ''),
(17, 'uploads/slider1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE IF NOT EXISTS `tbl_image` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `category_1` text NOT NULL,
  `category` text NOT NULL,
  `caption` text NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=152 ;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`id`, `image`, `category_1`, `category`, `caption`, `details`) VALUES
(139, 'uploads/Net-Fan.jpg_220x220.jpg', '', '48', 'Seven Star NET Fan', '<p><span style="color:#000000"><strong>Product Name: Seven Star Net Fan</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Model : CFD-154</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Price : 2000 TK</strong></span></p>\r\n'),
(140, 'uploads/Net-Fank.jpg_220x220.jpg', '', '48', 'Seven Star NET Fan', '<p><span style="color:#000000"><strong>Product Name: Seven Star Net Fan</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Model : NVD-1554</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Price : 700 TK</strong></span></p>\r\n'),
(135, 'uploads/46389.jpg', '', '41', 'Seven Star Delux Fan', '<p><span style="color:#000000"><strong>Product Name: Seven Star Delux Fan</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Model : ACFD-1554</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Price : 7000 TK</strong></span></p>\r\n'),
(136, 'uploads/fan.jpg', '', '41', 'Seven Star Delux Fan', '<p><span style="color:#000000"><strong>Product Name: Seven Star Delux Fan</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Model : AD-1554</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Price : 5000 TK</strong></span></p>\r\n'),
(137, 'uploads/Fusion Golden Brown.jpg', '', '41', 'Seven Star Delux Fan', '<p><span style="color:#000000"><strong>Product Name: Seven Star Delux Fan</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Model : AFD-1554HY</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Price : 3000 TK</strong></span></p>\r\n'),
(131, 'uploads/TNPP258.JPG', '', '51', 'Fluorescent Tubelight', '<p><strong><span style="color:#000000">Product Name: Fluorescent Tubelight</span></strong></p>\r\n\r\n<p><strong><span style="color:#000000">Model No: ASC-1258 </span></strong></p>\r\n\r\n<p><strong><span style="color:#000000">Price:&nbsp; 1250 TK</span></strong></p>\r\n'),
(138, 'uploads/Aircool-Plastic.jpg', '', '48', 'Seven Star NET Fan', '<p><span style="color:#000000"><strong>Product Name: Seven Star Net Fan</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Model : AFD-1554</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Price : 5000 TK</strong></span></p>\r\n'),
(123, 'uploads/m.php', '', '29', 'Fancy Bracket & Table Lamp', '<p><strong>Product Name:</strong>&nbsp; Fancy Bracket</p>\r\n\r\n<p><strong>Model:</strong> &nbsp; &nbsp; B2H250</p>\r\n'),
(151, 'uploads/ACS-CJ 1053 L-16.jpg', '', 'slider', '', ''),
(127, 'uploads/Crystal-Ceiling-Light.jpg', '', '50', 'Ceiling Soccer Light', '<p><strong>Product Name:&nbsp; </strong>Ceiling Soccer Light</p>\r\n\r\n<p><strong>Model:&nbsp; </strong>ASC-458</p>\r\n\r\n<p><strong>Price:</strong> 3000 TK</p>\r\n'),
(128, 'uploads/modern-ceiling-light.jpg', '', '50', 'Ceiling Soccer Light', '<p><strong>Product Name:&nbsp; Ceiling Soccer Light</strong></p>\r\n\r\n<p><strong>Model No:&nbsp; ASC-12548</strong></p>\r\n\r\n<p><strong>Price: 1200 TK</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(129, 'uploads/112-fluorescent-light-fixtures-covers.jpg', '', '51', 'Fluorescent Tubelight', '<p><strong>Product Name: Fluorescent Tubelight</strong></p>\r\n\r\n<p><strong>Model No:&nbsp; BDF-1257</strong></p>\r\n\r\n<p><strong>Price: 1800 TK</strong></p>\r\n'),
(50, 'uploads/exporters-of-chandelier-in-moradabad-chandelier-exporter-chandelier-light.jpg', '', '30', '', '<div class="col-md-8 about-right" style="margin-top: 30px;">\r\n<div style="font-size:16px;">\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Name :</strong>&nbsp; ASC-BS1981 </span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Code :</strong> &nbsp; G5487 DGN</span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Price :&nbsp;</strong>&nbsp; 400Tk</span></span></span></p>\r\n</div>\r\n</div>\r\n'),
(51, 'uploads/images.jpg', '', '30', '', '<div class="col-md-8 about-right" style="margin-top: 30px;">\r\n<div style="font-size:16px;">\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Name :</strong>&nbsp; ASC-BS1981 </span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Code :</strong> &nbsp; G544 DGN</span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Price :&nbsp;</strong>&nbsp; 1200Tk</span></span></span></p>\r\n</div>\r\n</div>\r\n'),
(52, 'uploads/LARGE_PORTFOLIO nine-light Kichler Aztec chandelier, model 34330 w arrows.jpg', '', '30', '', '<div class="col-md-8 about-right" style="margin-top: 30px;">\r\n<div style="font-size:16px;">\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Name :</strong>&nbsp; ASC-BS1981 </span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Code :</strong> &nbsp; G544 DGN</span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Price :&nbsp;</strong>&nbsp; 3000Tk</span></span></span></p>\r\n</div>\r\n</div>\r\n'),
(53, 'uploads/schonbek_rivendell_crystal_chandelier_24in_ceiling-_light_530x330.jpg', '', '30', '', '<div class="col-md-8 about-right" style="margin-top: 30px;">\r\n<div style="font-size:16px;">\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Name :</strong>&nbsp; ASC-BS1981 </span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Code :</strong> &nbsp; G544 DGN</span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Price :&nbsp;</strong>&nbsp; 300Tk</span></span></span></p>\r\n</div>\r\n</div>\r\n'),
(54, 'uploads/HEREFORD_CLEAR_GLASS_GLOBE_SWAN_NECK_BATHROOM_LIGHT.jpg', '', '32', 'Bathroom Light', '<div class="col-md-8 about-right" style="margin-top: 30px;">\r\n<div style="font-size:16px;">\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Name :</strong>&nbsp; ASC-BS1981 </span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Code :</strong> &nbsp; G544 DGN</span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Price :&nbsp;</strong>&nbsp; 2300Tk</span></span></span></p>\r\n</div>\r\n</div>\r\n'),
(55, 'uploads/lighting-1.jpg', '', '32', 'Bathroom Light', '<div class="col-md-8 about-right" style="margin-top: 30px;">\r\n<div style="font-size:16px;">\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Name :</strong>&nbsp; ASC-BS1981 </span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Code :</strong> &nbsp; G544 DGN</span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Price :&nbsp;</strong>&nbsp; 1500Tk</span></span></span></p>\r\n</div>\r\n</div>\r\n'),
(56, 'uploads/transitional-bathroom-vanity-lighting.jpg', '', '32', '', '<div class="col-md-8 about-right" style="margin-top: 30px;">\r\n<div style="font-size:16px;">\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Name :</strong>&nbsp; ASC-BS1981 </span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Code :</strong> &nbsp; G544 DGN</span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Price :&nbsp;</strong>&nbsp; 1200Tk</span></span></span></p>\r\n</div>\r\n</div>\r\n'),
(57, 'uploads/3af60e8003ba2c8dd2e2b86d7a53a6db.jpg', '', '31', 'Pendent Light', '<div class="col-md-8 about-right" style="margin-top: 30px;">\r\n<div style="font-size:16px;">\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Name :</strong>&nbsp; ASC-BS1981 </span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Code :</strong> &nbsp; G544 DGN</span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Price :&nbsp;</strong>&nbsp; 1500Tk</span></span></span></p>\r\n</div>\r\n</div>\r\n'),
(58, 'uploads/circus-pendant-light_large.jpg', '', '31', 'Pendent Light', '<div class="col-md-8 about-right" style="margin-top: 30px;">\r\n<div style="font-size:16px;">\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Name :</strong>&nbsp; ASC-BS1981 </span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Code :</strong> &nbsp; G554 DGN</span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Price :&nbsp;</strong>&nbsp; 1500Tk</span></span></span></p>\r\n</div>\r\n</div>\r\n'),
(59, 'uploads/images.jpg', '', '31', 'Pendent Light', '<div class="col-md-8 about-right" style="margin-top: 30px;">\r\n<div style="font-size:16px;">\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Name :</strong>&nbsp; ASC-BS1981 </span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Code :</strong> &nbsp; G544 DGN</span></span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:16px"><span style="color:rgb(0, 0, 0)"><strong>Product Price :&nbsp;</strong>&nbsp; 1500Tk</span></span></span></p>\r\n</div>\r\n</div>\r\n'),
(60, 'uploads/de6bf3acf9cb1090707aef745e3a67e9.jpg', '', 'home_gallery', 'Fancy Bracket & Table Lamp', '<p style="text-align: justify;"><span style="color:#000000">When pulling together the decorative elements in our favorite rooms, such as our living room, family or keeping room, bedroom, great room or library we often think first of our textiles, furniture, carpets and wall colors. These things are the foundation of our space and the predominant elements of our chosen design statement. Of equal importance as room building elements are the accessories that we choose or acquire over time.</span></p>\r\n'),
(126, 'uploads/ceiling-light-before.jpg', '', '50', 'Ceiling Soccer Light', '<p><strong>Product Name:</strong> Ceiling Soccer Light</p>\r\n\r\n<p><strong>Model :</strong>&nbsp; ASC -585</p>\r\n\r\n<p><strong>Price </strong>: 1500TK</p>\r\n'),
(65, 'uploads/3af60e8003ba2c8dd2e2b86d7a53a6db.jpg', '', 'home_gallery', 'Pendent Light', '<p style="text-align: justify;"><span style="color:#000000">When pulling together the decorative elements in our favorite rooms, such as our living room, family or keeping room, bedroom, great room or library we often think first of our textiles, furniture, carpets and wall colors. These things are the foundation of our space and the predominant elements of our chosen design statement. Of equal importance as room building elements are the accessories that we choose or acquire over time.</span></p>\r\n'),
(66, 'uploads/bathroom-lighting-fixtures-throughout-a-great-bathroom-design-with-the-perfect-bathroom-light-fixtures.jpg', '', '32', 'Bathroom Light', ''),
(67, 'uploads/bathroom-lighting-fixtures-throughout-a-great-bathroom-design-with-the-perfect-bathroom-light-fixtures.jpg', '', 'home_gallery', 'Bathroom Light', '<p style="text-align: justify;"><span style="color:#000000">When pulling together the decorative elements in our favorite rooms, such as our living room, family or keeping room, bedroom, great room or library we often think first of our textiles, furniture, carpets and wall colors. These things are the foundation of our space and the predominant elements of our chosen design statement. Of equal importance as room building elements are the accessories that we choose or acquire over time.</span></p>\r\n'),
(68, 'uploads/Bollard-Lights-Contemporary-Ideas.jpg', '', 'home_gallery', 'bollard Light', '<p style="text-align: justify;"><span style="color:#000000">When pulling together the decorative elements in our favorite rooms, such as our living room, family or keeping room, bedroom, great room or library we often think first of our textiles, furniture, carpets and wall colors. These things are the foundation of our space and the predominant elements of our chosen design statement. Of equal importance as room building elements are the accessories that we choose or acquire over time.</span></p>\r\n'),
(69, 'uploads/4-globe-pole-light.jpg', '', 'home_gallery', 'Halogen Light', '<p style="text-align: justify;"><span style="color:#000000">When pulling together the decorative elements in our favorite rooms, such as our living room, family or keeping room, bedroom, great room or library we often think first of our textiles, furniture, carpets and wall colors. These things are the foundation of our space and the predominant elements of our chosen design statement. Of equal importance as room building elements are the accessories that we choose or acquire over time.</span></p>\r\n'),
(70, 'uploads/Antique-outdoor-wall-lamp-post-lights-aluminum-die-casting-garden-light-garden-gate-Pillar-Light-waterproof.jpg', '', 'home_gallery', 'Wall & Gate Light', '<p style="text-align: justify;"><span style="color:#000000">When pulling together the decorative elements in our favorite rooms, such as our living room, family or keeping room, bedroom, great room or library we often think first of our textiles, furniture, carpets and wall colors. These things are the foundation of our space and the predominant elements of our chosen design statement. Of equal importance as room building elements are the accessories that we choose or acquire over time.</span></p>\r\n'),
(71, 'uploads/112-fluorescent-light-fixtures-covers.jpg', '', 'home_gallery', 'Fluorescent Tubelight ', '<p style="text-align: justify;"><span style="color:#000000">When pulling together the decorative elements in our favorite rooms, such as our living room, family or keeping room, bedroom, great room or library we often think first of our textiles, furniture, carpets and wall colors. These things are the foundation of our space and the predominant elements of our chosen design statement. Of equal importance as room building elements are the accessories that we choose or acquire over time.</span></p>\r\n'),
(72, 'uploads/Crystal-Ceiling-Light.jpg', '', 'home_gallery', 'Ceiling Soccer Light', '<p style="text-align: justify;"><span style="color:#000000">When pulling together the decorative elements in our favorite rooms, such as our living room, family or keeping room, bedroom, great room or library we often think first of our textiles, furniture, carpets and wall colors. These things are the foundation of our space and the predominant elements of our chosen design statement. Of equal importance as room building elements are the accessories that we choose or acquire over time.</span></p>\r\n'),
(74, 'uploads/schonbek_rivendell_crystal_chandelier_24in_ceiling-_light_530x330.jpg', '', 'slider', '', ''),
(75, 'uploads/slider_3.jpg', '', 'slider', '', ''),
(76, 'uploads/s;ider_4.jpg', '', 'slider', '', ''),
(91, 'uploads/Copper-Pendant-Light5.jpg', '', 'about_img', '', ''),
(90, 'uploads/traditional-pendant-lighting.jpg', '', 'new_product', '', ''),
(85, 'uploads/Copper-Pendant-Light5.jpg', '', 'new_product', '', ''),
(87, 'uploads/Home-Fixture-Lighting-Free-Shipping-E2740W-Mosaic-Lamp-Shade-European-Mirror-font-b-Wall-b-font.jpg', '', 'new_product', '', ''),
(88, 'uploads/LARGE_PORTFOLIO nine-light Kichler Aztec chandelier, model 34330 w arrows.jpg', '', 'new_product', '', ''),
(89, 'uploads/Lot.17.chandelier.jpg', '', 'new_product', '', ''),
(92, 'uploads/EX2V08S68M.png', '', 'ceo_img', '', ''),
(102, 'uploads/traditional-pendant-lighting.jpg', '', 'gallery', '', ''),
(150, 'uploads/2.jpg', '', 'gallery', '', ''),
(101, 'uploads/Lot.17.chandelier.jpg', '', 'gallery', '', ''),
(99, 'uploads/Copper-Pendant-Light5.jpg', '', 'gallery', '', ''),
(100, 'uploads/Home-Fixture-Lighting-Free-Shipping-E2740W-Mosaic-Lamp-Shade-European-Mirror-font-b-Wall-b-font.jpg', '', 'gallery', '', ''),
(104, 'uploads/Free-shipping-Modern-brief-led-lighting-bed-lighting-double-slider-wall-lights-mirror-light-bulb-wall.jpg', '', 'gallery', '', ''),
(130, 'uploads/109-112-fluorescent-ceiling-light-fixtures.jpg', '', '51', 'Fluorescent Tubelight', '<p><span style="color:#000000"><strong>Product Name: Fluorescent Tubelight</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Model No:&nbsp; ACD-1585</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Price : 5800 TK</strong></span></p>\r\n'),
(122, 'uploads/european-style-black-crystal-chandelier-fancy-antique.jpg_220x220.jpg', '', '29', 'Fancy Bracket & Table Lamp', '<p><strong>Product Name:</strong> Fancy Bracket</p>\r\n\r\n<p><strong>Model:</strong> ASC 548GT</p>\r\n'),
(111, 'uploads/1015-10MC-splash.jpg', '17', '', 'Energy Saving Blub', ''),
(118, 'uploads/5.jpg', '', '46', 'Seven Star Stan Fan', '<p>Product Name:&nbsp; Seven Star Stan Fan</p>\r\n'),
(119, 'uploads/8.jpg', '', '46', 'Seven Star Net Fan', '<p><strong>Product Name:&nbsp; </strong>Seven Star Net Fan</p>\r\n'),
(120, 'uploads/Negative_Ion_Stand_Fan.jpg', '', '46', 'Seven Star Stan Fan', '<p><strong>Product Name:&nbsp; </strong>Seven Star Stan Fan</p>\r\n'),
(121, 'uploads/de6bf3acf9cb1090707aef745e3a67e9.jpg', '', '29', 'Fancy Bracket & Table Lamp', '<p><strong>Product Name:&nbsp; </strong>Fancy Bracket</p>\r\n\r\n<p><strong>Model:&nbsp; </strong>ASC-BD 1981</p>\r\n'),
(141, 'uploads/017801997804lg.jpg', '', '42', 'Seven Star 18W Blub', '<p><strong>Product Name: Seven Star 18W Blub</strong></p>\r\n\r\n<p><strong>Model : ACFD-1554</strong></p>\r\n\r\n<p><strong>Price : 7000 TK</strong></p>\r\n'),
(142, 'uploads/822985510820lg.jpg', '', '42', 'Seven Star 18W Blub', '<p>Product Name: Seven Star 18W Blub</p>\r\n\r\n<p>Model : ACFD-1554</p>\r\n\r\n<p>Price : 800 TK</p>\r\n'),
(143, 'uploads/000151209.jpg', '', '42', 'Seven Star 18W Blub', '<p><span style="color:#000000"><strong>Product Name: Seven Star 18W Blub</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Model : A58FD-1554</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Price : 500 TK</strong></span></p>\r\n'),
(144, 'uploads/6117161408627482._set-of-6-energy-efficient-12-watt-w-led-bulb-light-lamp.jpg', '', '52', 'Seven Star 20W Blub', '<p><span style="color:#000000"><strong>Product Name: Seven Star 20W Blub</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Model : ACFD-1554</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Price : 800 TK</strong></span></p>\r\n'),
(145, 'uploads/energy_saving_bulb.jpg', '', '52', 'Seven Star 20W Blub', '<p>Product Name: Seven Star 20W Blub</p>\r\n\r\n<p>Model : ACFD-1554</p>\r\n\r\n<p>Price : 600 TK</p>\r\n'),
(146, 'uploads/822985510820lg.jpg', '', '52', 'Seven Star 20W Blub', '<p>Product Name: Seven Star 20W Blub</p>\r\n\r\n<p>Model : ACFD-1554</p>\r\n\r\n<p>Price : 800 TK</p>\r\n'),
(147, 'uploads/m48-18422-20_watt_e27_edison_screw_cfl_energy_saving_light_bulb_-_warm_white.jpg', '', '53', 'Seven Star 36W Blub', '<p><strong><span style="color:#000000">Product Name: Seven Star 36W Blub</span></strong></p>\r\n\r\n<p><strong><span style="color:#000000">Model : ACFD-1554</span></strong></p>\r\n\r\n<p><strong><span style="color:#000000">Price : 800 TK</span></strong></p>\r\n'),
(148, 'uploads/017801997804lg.jpg', '', '53', 'Seven Star 36W Blub', '<p><strong><span style="color:#000000">Product Name: Seven Star 36W Blub</span></strong></p>\r\n\r\n<p><strong><span style="color:#000000">Model : ACFD-1554</span></strong></p>\r\n\r\n<p><strong><span style="color:#000000">Price : 800 TK</span></strong></p>\r\n'),
(149, 'uploads/Daylight-Power-Saving-Lamp-15w-Energy-Saving-Light-Bulb-E27-Cap-0.jpg', '', '53', 'Seven Star 36W Blub', '<p><span style="color:#000000"><strong>Product Name: Seven Star 36W Blub</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Model : ACFD-1554</strong></span></p>\r\n\r\n<p><span style="color:#000000"><strong>Price : 800 TK</strong></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `login_id` int(10) NOT NULL AUTO_INCREMENT,
  `login_name` varchar(100) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `login_name`, `login_password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_image`
--

CREATE TABLE IF NOT EXISTS `tbl_menu_image` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `category` text NOT NULL,
  `submenu_id` int(10) NOT NULL,
  `caption` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_menu_image`
--

INSERT INTO `tbl_menu_image` (`id`, `image`, `category`, `submenu_id`, `caption`) VALUES
(1, 'uploads/61ZBCEPKMqL._SL1500_.jpg', '16', 41, ' Delux Fan'),
(3, 'uploads/2.jpg', '16', 46, 'Stan Fan'),
(4, 'uploads/de6bf3acf9cb1090707aef745e3a67e9.jpg', '15', 29, 'Fancy Bracket & Table Lamp'),
(5, 'uploads/exporters-of-chandelier-in-moradabad-chandelier-exporter-chandelier-light.jpg', '15', 30, 'Chandelier Light'),
(6, 'uploads/transitional-bathroom-vanity-lighting.jpg', '15', 32, 'Bathroom Light'),
(7, 'uploads/Mr-Cooper-spun-copper-pendant-light-by-Coco-Flip.jpg', '15', 31, 'Pendent Light'),
(8, 'uploads/Crystal-Ceiling-Light.jpg', '15', 50, 'Ceiling Soccer Light'),
(9, 'uploads/112-fluorescent-light-fixtures-covers.jpg', '15', 51, 'Fluorescent Tubelight'),
(10, 'uploads/000151209.jpg', '17', 42, '18W Blub'),
(11, 'uploads/6117161408627482._set-of-6-energy-efficient-12-watt-w-led-bulb-light-lamp.jpg', '17', 52, '20W Blub'),
(12, 'uploads/m48-18422-20_watt_e27_edison_screw_cfl_energy_saving_light_bulb_-_warm_white.jpg', '17', 53, '36W Blub');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_article`
--

CREATE TABLE IF NOT EXISTS `tbl_page_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `text` text NOT NULL,
  `category` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_page_article`
--

INSERT INTO `tbl_page_article` (`id`, `header`, `text`, `category`) VALUES
(2, 'Welcome To ASHA Lighting', '<p style="text-align:justify"><span style="font-family:verdana,geneva,sans-serif"><span style="color:rgb(0, 0, 0)"><span style="font-size:16px">Asha Corporation is a renowned corporate establishment with operations commencing since 1977 with pride and heritage. With the years of financial growth, customer satisfaction and innovation the organization has anchored itself as a true multinational conglomerate of our beloved Bangladesh.</span></span></span><span style="color:#000000"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif"> </span></span></span></p>\r\n', 'h_w_t'),
(3, 'About Us', '<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="color:#000000"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif">Asha Corporation is an enterprise with solid presence in various sectors of the Bangladeshi economy, which include the strong engagement in the construction, architecture and real estate sectors of the economy; poultry breeding, production of quality poultry and fish feed, and also the manufacturing and distribution of porcelain and &nbsp;ceramic tiles.</span></span></span></p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:justify"><span style="color:#000000"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif">The success of Asha began more than 3 decades ago in the year 1977 with the inception of Index Architects Ltd. It dispatched its operations under the stout leadership of celebrated architect, Md. Mazerhul Quader, and the company has an impressive approximate amount of 300 projects under its name to date. Over the years of success through leadership, innovation and customer satisfaction, the company evolved into a true conglomerate via diversifying from its core business operations and venturing into other fruitful enterprises.</span></span></span></p>\r\n', 'a_w_t'),
(4, 'CEO Message ', '<p style="text-align:justify"><span style="color:#000000"><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif">&ldquo;The community is not just a stakeholder in the business, but is, in fact, was the key purpose behind the creation of Pacific Ashalighting&rdquo; are not only the words by the Founder S M Hasanuzaman Tito but he strongly believes in Social Responsibility and Community uplift in all the ventures. We are underpinned by a firm belief that the sustainable business is the only business, which generates better long-term value for all its stakeholders. Sustainability has always been the core value of the Pacific A-1 Group, since its inception this is reflected in the theme of our Business . We believe a business beyond generating financial returns and prosperity needs to have a positive impact and peace of mind on all its stakeholders and bring satisfaction for all concerned in any way. The trust and confidence of the Customer or Consumer or even the Venture is multiplied when they know it is the end result or outcome of services and processes executed ethically and in a sustainably fair way. Employees and business partners experience pride and engage better when working with a business that makes such choices. Investors recognize that such businesses generate healthier long-term returns. Communities are supportive when businesses co-exist in harmony and also support development. Asha lighting has identified six core pillars, which are integrated into its strategy .</span></span></span></p>\r\n', 'md_mess');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_product_menu` (
  `menu_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_menu` text NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_product_menu`
--

INSERT INTO `tbl_product_menu` (`menu_id`, `product_menu`) VALUES
(17, 'Energy Saving Blub'),
(16, 'Fan'),
(15, 'Light');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_submenu`
--

CREATE TABLE IF NOT EXISTS `tbl_product_submenu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `submenu_name` text NOT NULL,
  `menu_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tbl_product_submenu`
--

INSERT INTO `tbl_product_submenu` (`id`, `submenu_name`, `menu_name`) VALUES
(29, 'Fancy Bracket & Table Lamp', '15'),
(30, 'Chandelier Light', '15'),
(31, 'Pendent Light', '15'),
(32, 'Bathroom Light', '15'),
(33, 'Delux Fan', '16'),
(34, 'Seven Star', '16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `slider_id` int(10) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `caption` text NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `location`, `caption`) VALUES
(19, 'uploads/slider/6.jpg', ''),
(20, 'uploads/slider/7.jpg', ''),
(18, 'uploads/slider/4.jpg', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_img`
--
CREATE TABLE IF NOT EXISTS `view_img` (
`id` int(10)
,`image` text
,`category` text
,`caption` text
,`details` text
,`submenu_name` text
,`menu_name` text
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_menusubmenu`
--
CREATE TABLE IF NOT EXISTS `view_menusubmenu` (
`menu_id` int(10)
,`product_menu` text
,`submenu_name` text
,`menu_name` text
,`id` int(10)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_menu_img`
--
CREATE TABLE IF NOT EXISTS `view_menu_img` (
`caption` text
,`submenu_name` text
,`id` int(10)
,`image` text
);
-- --------------------------------------------------------

--
-- Structure for view `menusubmenu`
--
DROP TABLE IF EXISTS `menusubmenu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`ashalighting`@`localhost` SQL SECURITY DEFINER VIEW `menusubmenu` AS select `tbl_product_menu`.`menu_id` AS `menu_id`,`tbl_product_menu`.`product_menu` AS `product_menu`,`tbl_product_submenu`.`submenu_name` AS `submenu_name`,`tbl_product_submenu`.`menu_name` AS `menu_name`,`tbl_product_submenu`.`id` AS `id` from (`tbl_product_menu` join `tbl_product_submenu` on((`tbl_product_menu`.`menu_id` = `tbl_product_submenu`.`menu_name`)));

-- --------------------------------------------------------

--
-- Structure for view `view_img`
--
DROP TABLE IF EXISTS `view_img`;

CREATE ALGORITHM=UNDEFINED DEFINER=`ashalighting`@`localhost` SQL SECURITY DEFINER VIEW `view_img` AS select `tbl_image`.`id` AS `id`,`tbl_image`.`image` AS `image`,`tbl_image`.`category` AS `category`,`tbl_image`.`caption` AS `caption`,`tbl_image`.`details` AS `details`,`tbl_product_submenu`.`submenu_name` AS `submenu_name`,`tbl_product_submenu`.`menu_name` AS `menu_name` from (`tbl_image` join `tbl_product_submenu` on((`tbl_image`.`category` = `tbl_product_submenu`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `view_menusubmenu`
--
DROP TABLE IF EXISTS `view_menusubmenu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`ashalighting`@`localhost` SQL SECURITY DEFINER VIEW `view_menusubmenu` AS select `tbl_product_menu`.`menu_id` AS `menu_id`,`tbl_product_menu`.`product_menu` AS `product_menu`,`tbl_product_submenu`.`submenu_name` AS `submenu_name`,`tbl_product_submenu`.`menu_name` AS `menu_name`,`tbl_product_submenu`.`id` AS `id` from (`tbl_product_menu` join `tbl_product_submenu` on((`tbl_product_menu`.`menu_id` = `tbl_product_submenu`.`menu_name`)));

-- --------------------------------------------------------

--
-- Structure for view `view_menu_img`
--
DROP TABLE IF EXISTS `view_menu_img`;

CREATE ALGORITHM=UNDEFINED DEFINER=`ashalighting`@`localhost` SQL SECURITY DEFINER VIEW `view_menu_img` AS (select `tbl_menu_image`.`caption` AS `caption`,`tbl_product_submenu`.`submenu_name` AS `submenu_name`,`tbl_product_submenu`.`id` AS `id`,`tbl_menu_image`.`image` AS `image` from (`tbl_menu_image` join `tbl_product_submenu` on((`tbl_menu_image`.`submenu_id` = `tbl_product_submenu`.`id`))));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
