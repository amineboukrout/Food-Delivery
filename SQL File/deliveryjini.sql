-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 05:42 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: fosdb
--

-- --------------------------------------------------------

--
-- Table structure for table tbladmin
--

CREATE TABLE tbladmin (
  ID int(11) NOT NULL,
  RestaurantName varchar(80) NOT NULL,
  Category varchar(80) NOT NULL,
  AdminName varchar(45) DEFAULT NULL,
  Logo varchar(80) NOT NULL,
  UserName varchar(45) DEFAULT NULL,
  MobileNumber bigint(11) DEFAULT NULL,
  Email varchar(120) DEFAULT NULL,
  Password varchar(120) DEFAULT NULL,
  AdminRegdate timestamp NULL DEFAULT current_timestamp(),
  UID varchar(80) NOT NULL,
  Address varchar(100) NOT NULL,
  Area varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbladmin
--

INSERT INTO tbladmin (ID, RestaurantName, Category, AdminName, Logo, UserName, MobileNumber, Email, Password, AdminRegdate, UID, Address, Area) VALUES
(1, '', '', 'Admin user', '', 'admin', 7894561238, 'test@gmail.com', NULL, '2019-04-05 07:16:39', '', '', ''),
(2, 'Nandos', 'Portuguese-African', 'Nandos_admin', 'nandos.png', 'nandos', 1123456789, 'nandos@nandos.com', '56b804a4a1c89d0d53c01bcb3e1851ea', '2020-06-26 14:56:46', '1bf49ff8-b7bc-11ea-b4db-7cb0c2fe9c1d', 'Gielgud Way, Walsgrave on Sowe, Coventry CV2 2SZ, United Kingdom', 'Walsgrave'),
(3, 'Mcdees', 'FastFood', 'mcdees_admin', 'mcdees.png', 'mcdees', 1741852963, 'mcdees@mcdees.com', 'c476b9075ea4220c0e4eb47b414ff498', '2020-06-26 14:56:46', '13b49416-b7bd-11ea-b4db-7cb0c2fe9c1d', '26 Cross Cheaping, Coventry CV1 1HF, United Kingdom', 'City Centre'),
(7, 'KFC', 'FastFood', 'kfc_admin', 'kfc.png', 'kfc', 7894561233, 'kfc@kfc.com', 'c3e39bf9f009b801037846853bfa9f2c', '2020-06-26 15:00:24', '9274d70a-b7bd-11ea-b4db-7cb0c2fe9c1d', 'Vanguard Ave, Tile Hill, Coventry CV5 6UA, United Kingdom', 'Canley');

-- --------------------------------------------------------

--
-- Table structure for table tblcategory
--

CREATE TABLE tblcategory (
  ID int(5) NOT NULL,
  CategoryName varchar(120) DEFAULT NULL,
  CreationDate timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tblcategory
--

INSERT INTO tblcategory (ID, CategoryName, CreationDate) VALUES
(3, 'Itallian', '2019-04-05 10:36:01'),
(4, 'Thai', '2019-04-05 10:36:25'),
(5, 'South Indian', '2019-04-05 10:36:35'),
(6, 'North Indian', '2019-04-05 10:36:47'),
(7, 'Desserts', '2019-04-05 10:43:13'),
(8, 'Starters', '2019-04-05 10:43:45'),
(9, 'Chinease', '2019-04-24 05:43:08'),
(10, 'Test Food ', '2019-05-06 16:36:16');

-- --------------------------------------------------------

--
-- Table structure for table tbldrivers
--

CREATE TABLE tbldrivers (
  ID bigint(20) NOT NULL,
  UID varchar(40) NOT NULL,
  FirstName varchar(50) NOT NULL,
  LastName varchar(50) NOT NULL,
  DriverLicenseNo varchar(50) NOT NULL,
  DateJoined datetime NOT NULL DEFAULT current_timestamp(),
  HomeAddrress varchar(60) NOT NULL,
  IDNo int(20) NOT NULL,
  UserName varchar(45) DEFAULT NULL,
  Password varchar(120) DEFAULT NULL,
  DriverRegdate timestamp NULL DEFAULT current_timestamp(),
  Email varchar(120) DEFAULT NULL,
  MobileNumber bigint(11) DEFAULT NULL,
  Available varchar(3) NOT NULL DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table tbldrivers
--

INSERT INTO tbldrivers (ID, UID, FirstName, LastName, DriverLicenseNo, DateJoined, HomeAddrress, IDNo, UserName, Password, DriverRegdate, Email, MobileNumber, Available) VALUES
(1, '98791219848544256', 'Amine', 'Craxy', 'hg756325963', '2020-07-03', 'uniwarwick', 822552652, 'amine', '30d2310007b75bf0180f5ed831f20fdb', '2020-06-29 20:38:42', 'amine@amine.com', 726555294, 'Yes'),
(2, '98791219848544265', 'Mubeen', 'shorty', 'mmk80o00-lkjh', '2020-06-29', 'Air street, Londom', 52021652, 'mubeen', '629be1b756a9c749374dae5f3e241548', '2020-06-29 20:38:42', 'shorty@shorty.com', 856365433, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table tblfood
--

CREATE TABLE tblfood (
  ID int(10) NOT NULL,
  CategoryName varchar(120) DEFAULT NULL,
  ItemName varchar(120) DEFAULT NULL,
  ItemPrice varchar(120) DEFAULT NULL,
  ItemDes varchar(500) DEFAULT NULL,
  Image varchar(120) DEFAULT NULL,
  ItemQty varchar(120) DEFAULT NULL,
  UID varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tblfood
--

INSERT INTO tblfood (ID, CategoryName, ItemName, ItemPrice, ItemDes, Image, ItemQty, UID) VALUES
(1, 'FastFood', 'Corn Pizza', '180', 'Sprinkle with salt and pepper; let stand 20 minutes. Place pizza crust on a parchment paper-lined baking sheet;', 'f97fcb777fbc60235e7cfdf991cb0cfa.jpg', 'Medium', '9274d70a-b7bd-11ea-b4db-7cb0c2fe9c1d'),
(3, 'Portuguese-African', 'Corn Pizza', '220', 'Sprinkle with salt and pepper; let stand 20 minutes. Place pizza crust on a parchment paper-lined baking sheet', 'f97fcb777fbc60235e7cfdf991cb0cfa.jpg', 'Large', '1bf49ff8-b7bc-11ea-b4db-7cb0c2fe9c1d'),
(4, 'Portuguese-African', 'Veg Extravaganza Pizza', '450', 'Veg ExtravaganzaA pizza that decidedly staggers', '73323ff74a39e6157cf73ad52cf15c66.jpg', 'Medium', '1bf49ff8-b7bc-11ea-b4db-7cb0c2fe9c1d'),
(5, 'FastFood1', 'Veg Extravaganza Pizza', '440', 'Veg ExtravaganzaA pizza that decidedly staggers under an overload of golden corn, exotic black olives, crunchy onions', '9ed5c4756f56317810d7e364ca7f1634.jpg', 'Large', '13b49416-b7bd-11ea-b4db-7cb0c2fe9c1d'),
(6, 'FastFood', 'Chana Masala', '120', 'To make this chana masala we start with a trio of ingredients found in most Indian curriesâ€“onion, garlic, and ginger. ', '0ee2405d162c60e415bfba56a24aca8c.jpg', 'Full', '9274d70a-b7bd-11ea-b4db-7cb0c2fe9c1d'),
(7, 'Portuguese-African', 'Rajma Masala', '125', 'Rajma Masala is a much loved spicy curry in most Indian Households.                               	', '63d50ef58f33ec97cf928c05deb8ccd3.jpg', 'Full', '1bf49ff8-b7bc-11ea-b4db-7cb0c2fe9c1d'),
(8, 'Portuguese-African', 'Dosa', '85', 'Dosa  are served hot along with sambar, a stuffing of potatoes, and chutney.                             	', 'd984b4a23552203107391bc98dd0e4dc.jpg', 'Regular', '1bf49ff8-b7bc-11ea-b4db-7cb0c2fe9c1d'),
(9, 'Portuguese-African', 'Idli', '75', 'Idli are a type of savoury rice cake, originating from the Indian subcontinent and served coconut chutney.                                         	', '0cbe727a2529cc6cd8dcbd40ee53fe2c.jpg', '2 pcs', '1bf49ff8-b7bc-11ea-b4db-7cb0c2fe9c1d'),
(10, 'Portuguese-African', 'Vada', '60', 'Medu vada served with hot shambhar and coconut chutney ', '66d5785b3c99179f5a5bb7d7d94636dd.jpg', '2 pcs', '1bf49ff8-b7bc-11ea-b4db-7cb0c2fe9c1d'),
(11, 'Portuguese-African', 'Chole Bhature', '120', 'Chole Bhuture is a combination of chana masala (spicy white chickpeas) and bhatura,                                                	', 'da41d10bb09c6cfac8168435164ff0b3.jpg', '2 pcs', '1bf49ff8-b7bc-11ea-b4db-7cb0c2fe9c1d'),
(12, 'FastFood', 'Aloo paratha', '85', ' Aloo paratha is served with butter, chutney, or Indian pickles in different parts of northern and western India.                                                 	', '8cc336b118e1feb503f9a54f3bdcdf1b.jpg', '2 pieces', '9274d70a-b7bd-11ea-b4db-7cb0c2fe9c1d'),
(13, 'FastFood', 'Mix Pratha', '85', 'veg paratha soft, healthy and delicious whole wheat parathas made with mix vegetables. ... this no onion no garlic veg paratha recipe is pretty flexible.                                               	', '4b4f0a570c7f36f0db9e4f8e7fa60442.jpg', '2 pieces', '9274d70a-b7bd-11ea-b4db-7cb0c2fe9c1d'),
(14, 'FastFood1', 'Paneer Paratha.', '95', 'paneer paratha. paneer paratha is an indian flat bread made with cottage cheese stuffing. paneer paratha are popular breakfast recipe in punjabi homes.                                                 	', 'a19b8b7095ad0c23ddd95a28c3f85268.jpg', '2 pieces', '13b49416-b7bd-11ea-b4db-7cb0c2fe9c1d'),
(15, 'FastFood1', 'Hakka Noodle', '120', 'Hakka Noodle is one our famous food which is made up by our homemade masale.                                               	', 'f8f34e70f13c6d9e982640e3b39f317b.jpg', 'full', '13b49416-b7bd-11ea-b4db-7cb0c2fe9c1d'),
(16, 'FastFood', 'Veg Chowmin', '120', 'Veg Chowmien full Plate                                                 	', '927f5a1c2bcfff25ff8a936fa98d5f2f.jpg', 'Full', '9274d70a-b7bd-11ea-b4db-7cb0c2fe9c1d');

-- --------------------------------------------------------

--
-- Table structure for table tblfoodtracking
--

CREATE TABLE tblfoodtracking (
  ID int(10) NOT NULL,
  UID varchar(80) NOT NULL,
  OrderId char(50) DEFAULT NULL,
  remark varchar(200) DEFAULT NULL,
  status char(50) DEFAULT NULL,
  StatusDate timestamp NULL DEFAULT current_timestamp(),
  OrderCanclledByUser int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tblfoodtracking
--

INSERT INTO tblfoodtracking (ID, UID, OrderId, remark, status, StatusDate, OrderCanclledByUser) VALUES
(1, '1bf49ff8-b7bc-11ea-b4db-7cb0c2fe9c1d', '783218118', 'Restaurant Closed.', 'Order Cancelled', '2019-05-05 16:07:35', NULL),
(6, '13b49416-b7bd-11ea-b4db-7cb0c2fe9c1d', '448858080', 'I want  to cancel this order', 'Order Cancelled', '2019-05-05 17:33:42', 1),
(7, '1bf49ff8-b7bc-11ea-b4db-7cb0c2fe9c1d', '270156472', 'Order confiremed', 'Order Confirmed', '2019-05-06 16:30:38', NULL),
(8, '9274d70a-b7bd-11ea-b4db-7cb0c2fe9c1d', '270156472', 'Food is preparing.', 'Food being Prepared', '2019-05-06 16:31:08', NULL),
(9, '13b49416-b7bd-11ea-b4db-7cb0c2fe9c1d', '270156472', 'Food on the way', 'Food Pickup', '2019-05-06 16:31:42', NULL),
(10, '1bf49ff8-b7bc-11ea-b4db-7cb0c2fe9c1d', '270156472', 'Food is delivired', 'Food Delivered', '2019-05-06 16:35:27', NULL),
(11, '9274d70a-b7bd-11ea-b4db-7cb0c2fe9c1d', '201712648', 'order Cancelled', 'Order Cancelled', '2019-05-06 16:41:55', NULL),
(12, '', '8520265632', 'N/A', 'Order Cancelled', '2020-07-08 10:06:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table tblorderaddresses
--

CREATE TABLE tblorderaddresses (
  ID int(11) NOT NULL,
  UID varchar(80) NOT NULL,
  Driver_UID varchar(40) NOT NULL,
  UserId char(100) DEFAULT NULL,
  Ordernumber char(100) DEFAULT NULL,
  Flatnobuldngno varchar(255) DEFAULT NULL,
  StreetName varchar(255) DEFAULT NULL,
  Area varchar(255) DEFAULT NULL,
  Landmark varchar(255) DEFAULT NULL,
  City varchar(255) DEFAULT NULL,
  OrderTime timestamp NOT NULL DEFAULT current_timestamp(),
  OrderFinalStatus varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tblorderaddresses
--

INSERT INTO tblorderaddresses (ID, UID, Driver_UID, UserId, Ordernumber, Flatnobuldngno, StreetName, Area, Landmark, City, OrderTime, OrderFinalStatus) VALUES
(1, '56b804a4a1c89d0d53c01bcb3e1851ea', '98791219848544265', '1', '783218118', 'Hno 546', 'Gali No10', 'New Delhi', 'NA', 'Delhi', '2019-05-05 16:03:28', 'Order Cancelled'),
(2, '9274d70a-b7bd-11ea-b4db-7cb0c2fe9c1d', '98791219848544256', '1', '448858080', '125', 'Malibongwe Drive', 'Robindale', '', 'Johannesburg', '2019-05-05 17:01:58', 'Order Cancelled'),
(3, 'c476b9075ea4220c0e4eb47b414ff498', '98791219848544265', '2', '201712648', 'A-10', 'HK pg house', 'Mayur Vihar', 'Near Reliance Fresh', 'New Delhi', '2019-05-06 06:27:28', 'Order Cancelled'),
(4, 'c476b9075ea4220c0e4eb47b414ff498', '98791219848544256', '5', '270156472', '25', ' Malibongwe Drive', 'Robindale', 'NA', 'Johannesburg', '2019-05-06 16:28:18', 'Food Delivered'),
(5, '9274d70a-b7bd-11ea-b4db-7cb0c2fe9c1d', '98791219848544256', '6', '8520265632', '125', 'Malibongwe Drive', 'Robindale', 'NA', 'Johannesburg', '2020-06-29 19:20:23', 'Order Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table tblorders
--

CREATE TABLE tblorders (
  ID int(11) NOT NULL,
  UserId char(10) DEFAULT NULL,
  FoodId char(10) DEFAULT NULL,
  IsOrderPlaced int(11) DEFAULT NULL,
  OrderNumber char(100) DEFAULT NULL,
  rUID varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tblorders
--

INSERT INTO tblorders (ID, UserId, FoodId, IsOrderPlaced, OrderNumber, rUID) VALUES
(1, '1', '8', 1, '783218118', ''),
(2, '1', '4', 1, '783218118', ''),
(3, '1', '1', 1, '448858080', ''),
(4, '1', '5', 1, '448858080', ''),
(5, '2', '4', 1, '201712648', ''),
(6, '2', '8', NULL, NULL, ''),
(7, '5', '6', 1, '270156472', ''),
(8, '5', '13', 1, '270156472', ''),
(9, '5', '6', 1, '8520265632', ''),
(10, '5', '13', 1, '8520265632', ''),
(15, '6', '3', NULL, NULL, '1bf49ff8-b7bc-11ea-b4db-7cb0c2fe9c1d');

-- --------------------------------------------------------

--
-- Table structure for table tbluser
--

CREATE TABLE tbluser (
  ID int(10) NOT NULL,
  FirstName varchar(45) DEFAULT NULL,
  LastName varchar(50) DEFAULT NULL,
  Email varchar(120) DEFAULT NULL,
  MobileNumber bigint(11) DEFAULT NULL,
  Password varchar(120) DEFAULT NULL,
  RegDate timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbluser
--

INSERT INTO tbluser (ID, FirstName, LastName, Email, MobileNumber, Password, RegDate) VALUES
(1, 'Pankaj', 'Shahu', 'testuser@gmail.com', 7894561236, '202cb962ac59075b964b07152d234b70', '2019-04-08 07:41:22'),
(2, 'Rakesh', 'Chandra', 'rakesh@gmail.com', 7656234589, '202cb962ac59075b964b07152d234b70', '2019-04-08 07:43:28'),
(3, 'Yogesh', 'Chandra', 'y@gmail.com', 8989898989, '202cb962ac59075b964b07152d234b70', '2019-04-24 07:04:02'),
(4, 'Yogesh', 'Shah', 'Test1@gmail.com', 8975895698, '202cb962ac59075b964b07152d234b70', '2019-05-06 09:09:05'),
(5, 'Test demo', 'User', 'testuser123@gmail.com', 1234567890, '7ec66345281b134a33f784bcd06d7ea5', '2019-05-06 16:26:40'),
(6, 'Amine', 'Boukrout', 'amineboukrout@gmail.com', 726555294, '660f0fec04b8d908b39224da0eee6120', '2020-06-26 21:09:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbladmin
--
ALTER TABLE tbladmin
  ADD PRIMARY KEY (ID),
  ADD UNIQUE KEY UID (UID);

--
-- Indexes for table tblcategory
--
ALTER TABLE tblcategory
  ADD PRIMARY KEY (ID);

--
-- Indexes for table tbldrivers
--
ALTER TABLE tbldrivers
  ADD PRIMARY KEY (ID);

--
-- Indexes for table tblfood
--
ALTER TABLE tblfood
  ADD PRIMARY KEY (ID);

--
-- Indexes for table tblfoodtracking
--
ALTER TABLE tblfoodtracking
  ADD PRIMARY KEY (ID);

--
-- Indexes for table tblorderaddresses
--
ALTER TABLE tblorderaddresses
  ADD PRIMARY KEY (ID),
  ADD KEY UserId (UserId,Ordernumber);

--
-- Indexes for table tblorders
--
ALTER TABLE tblorders
  ADD PRIMARY KEY (ID),
  ADD KEY UserId (UserId,FoodId,OrderNumber);

--
-- Indexes for table tbluser
--
ALTER TABLE tbluser
  ADD PRIMARY KEY (ID);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbladmin
--
ALTER TABLE tbladmin
  MODIFY ID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table tblcategory
--
ALTER TABLE tblcategory
  MODIFY ID int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table tbldrivers
--
ALTER TABLE tbldrivers
  MODIFY ID bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table tblfood
--
ALTER TABLE tblfood
  MODIFY ID int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table tblfoodtracking
--
ALTER TABLE tblfoodtracking
  MODIFY ID int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table tblorderaddresses
--
ALTER TABLE tblorderaddresses
  MODIFY ID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table tblorders
--
ALTER TABLE tblorders
  MODIFY ID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table tbluser
--
ALTER TABLE tbluser
  MODIFY ID int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
