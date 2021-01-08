-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 08:34 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`ID`, `User`, `Pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `compare`
--

CREATE TABLE `compare` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `performance` varchar(100) NOT NULL,
  `storage` varchar(100) NOT NULL,
  `camera` varchar(100) NOT NULL,
  `battery` varchar(100) NOT NULL,
  `display` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compare`
--

INSERT INTO `compare` (`id`, `name`, `performance`, `storage`, `camera`, `battery`, `display`, `ram`, `photo`) VALUES
(1, 'IPHONE 11', 'Apple A13 Bionic', '64GB', '12MP+12MP', '3110mAh', '6.1 inches', '4GB', 'img/2020FlagshipPhoneSpec/iphone11.png'),
(2, 'Asus Zenfone 7 Pro ZS671KS', 'Qualcomm SM8250 Snapdragon 865+ (7 nm+)', '256GB', '64MP+8MP+12MP', '5000 mAh', '6.67 inches', '8GB', 'img/2020FlagshipPhoneSpec/AsusZenfone7_Pro_ZS671KS.jpg'),
(3, 'Xiaomi Mi 10 Pro 5G', 'Qualcomm SM8250 Snapdragon 865 (7 nm+)', '256GB,512GB', '108MP,12MP,8MP,20MP', '4500 mAh', '6.67 inches\r\n', '8GB,12GB', 'img/2020FlagshipPhoneSpec/XiaomiMi10Pro_5G.jpg'),
(4, 'Huawei Mate 40 Pro', 'Kirin 9000 5G (5 nm)', '256GB,512GB', '50 MP,12 MP,20 MP', 'Li-Po 4400 mAh, non-removable', '6.76 inches', '8GB', 'img/2020FlagshipPhoneSpec/HuaweiMate40_Pro.jpg'),
(5, 'Samsung Galaxy Note20 Ultra 5G', 'Exynos 990 (7 nm+) - Global\r\nQualcomm SM8250 Snapdragon 865+ (7 nm+) - USA', '128GB,256GB,512GB', '108MP+12MP+12MP', '4500mAh', '6.9 inches', '12GB', 'img/2020FlagshipPhoneSpec/SamsungGalaxy_Note20Ultra_5G.jpg'),
(6, 'Samsung Galaxy Z Fold2 5G', 'Qualcomm SM8250 Snapdragon 865+ (7 nm+)', '256GB,512GB', '12MP+ 12MP+ 12MP', '4500mAh', '7.6 inches', '12GB', 'img/2020FlagshipPhoneSpec/SamsungGalaxy_ZFold2_5G.jpg'),
(7, 'Oppo Find X2 Pro', 'Qualcomm SM8250 Snapdragon 865 (7 nm+)', '256GB,512GB', '48MP+13MP+48MP', '4260mAh', '6.7 inches', '12', 'img/2020FlagshipPhoneSpec/OppoFindX2_Pro.jpg'),
(8, 'One Plus 8 Pro', 'Qualcomm SM8250 Snapdragon 865 (7 nm+)', '128GB,256GB', '48MP+8MP+48MP', '4510 mAh', '6.78 inches', '8GB,12GB', 'img/2020FlagshipPhoneSpec/OnePlus8_Pro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `photo`, `price`, `category`) VALUES
(1, 'Razer BlackWidow Mechanical Gaming Keyboard', 'img/keyboard/keyboard1.jpg', '399.00', 'keyboard'),
(2, 'Logitech G213 Prodigy Gaming Keyboard', 'img/keyboard/keyboard5.jpg', '199.00', 'keyboard'),
(3, 'Redragon K530 Draconic 60% Compact RGB Wireless Mechanical Keyboard', 'img/keyboard/keyboard2.jpg', '299.00', 'keyboard'),
(4, 'Razer Cynosa Chroma Gaming Keyboard', 'img/keyboard/keyboard3.jpg', '199.00', 'keyboard'),
(5, 'Corsair K55 RGB Gaming Keyboard', 'img/keyboard/keyboard6.jpg', '219.00', 'keyboard'),
(6, 'Corsair K68 RGB Mechanical Gaming Keyboard', 'img/keyboard/keyboard7.jpg', '369.00', 'keyboard'),
(7, 'Razer Huntsman Tournament Edition TKL Tenkeyless Gaming Keyboard', 'img/keyboard/keyboard8.jpg', '549.00', 'keyboard'),
(8, 'SteelSeries Apex 5 Hybrid Mechanical Gaming Keyboard', 'img/keyboard/keyboard12.jpg', '379.00', 'keyboard'),
(9, 'Razer Huntsman Mini 60% Gaming Keyboard', 'img/keyboard/keyboard10.jpg', '499.00', 'keyboard'),
(10, 'Razer Huntsman Elite Gaming Keyboard', 'img/keyboard/keyboard11.jpg', '649.00', 'keyboard'),
(11, 'Razer DeathAdder Essential Gaming Mouse', 'img/mouse/mouse3.png', '119.00', 'mouse'),
(12, 'HyperX Pulsefire Raid – Gaming Mouse', 'img/mouse/mouse1.png', '239.00', 'mouse'),
(13, 'Razer Basilisk X HyperSpeed Wireless Gaming Mouse', 'img/mouse/mouse2.png', '199.00', 'mouse'),
(14, 'Razer Basilisk v2 Wired Gaming Mouse', 'img/mouse/mouse4.png', '299.00', 'mouse'),
(15, 'Logitech G203 LIGHTSYNC Wired Gaming Mouse - Black', 'img/mouse/mouse5.jpg', '129.00', 'mouse'),
(16, 'MSI GL65 Leopard 10SFK-062 15.6', 'img/laptop/laptop1.jpg', '5699.00', 'laptop'),
(17, 'ASUS ROG Strix G17 (2020) Gaming Laptop, 17.3 ', 'img/laptop/laptop2.jpg', '6599.00', 'laptop'),
(18, 'ROG Zephyrus G15 (2020) Ultra Slim Gaming Laptop, 15.6', 'img/laptop/laptop3.jpg', '5399.00', 'laptop'),
(19, 'Acer Predator Triton 500 PT515-52-73L3 Gaming Laptop', 'img/laptop/laptop4.jpg', '6699.00', 'laptop'),
(20, 'OMEN 15 Gaming Laptop', 'img/laptop/laptop5.jpg', '6699.00', 'laptop'),
(21, 'ASUS TUF Gaming A17 Gaming Laptop, 17.3', 'img/laptop/laptop6.jpg', '4199.00', 'laptop'),
(22, 'Asus Zenfone 7_Pro ZS671KS', 'img/2020FlagshipPhoneSpec/AsusZenfone7_Pro_ZS671KS.jpg', '3999.00', 'smartphone'),
(23, 'Iphone 12 Mini', 'img/2020FlagshipPhoneSpec/iPhone12mini-Blue.jpg', '3399.00', 'smartphone'),
(24, 'Iphone 12', 'img/2020FlagshipPhoneSpec/iPhone12-Blue.jpg', '4099.00', 'smartphone'),
(25, 'Iphone 12 Pro', 'img/2020FlagshipPhoneSpec/iphone-12-pro-blue.webp', '4899.00', 'smartphone'),
(26, 'Iphone 12 Pro Max', 'img/2020FlagshipPhoneSpec/iphone-12-pro-max-blue.webp', '5799.00', 'smartphone'),
(27, 'OnePlus 8 Pro', 'img/2020FlagshipPhoneSpec/OnePlus8_Pro.jpg', '3389.00', 'smartphone'),
(28, 'Oppo Find X2 Pro', 'img/2020FlagshipPhoneSpec/OppoFindX2_Pro.jpg', '4599.00', 'smartphone'),
(29, 'Samsung Galaxy Note20 Ultra5G', 'img/2020FlagshipPhoneSpec/SamsungGalaxy_Note20Ultra_5G.jpg', '4224.00', 'smartphone'),
(30, 'Samsung Galaxy Z Fold2 5G', 'img/2020FlagshipPhoneSpec/SamsungGalaxy_ZFold2_5G.jpg', '7999.00', 'smartphone'),
(31, 'Xiaomi Mi 10 Pro 5G', 'img/2020FlagshipPhoneSpec/XiaomiMi10Pro_5G.jpg', '2299.00', 'smartphone'),
(32, 'Razer Kraken X USB Ultralight Gaming Headset', 'img/earphone/earphone1.png', '249.00', 'earphone'),
(33, 'Razer Hammerhead Bluetooth Earbuds for iOS & Android', 'img/earphone/earphone2.png', '399.00', 'earphone'),
(34, 'Logitech G633 Artemis Spectrum', 'img/earphone/earphone3.png', '419.00', 'earphone'),
(35, 'Logitech G433 7.1 Wired Gaming Headset with DTS Headphone', 'img/earphone/earphone4.png', '399.00', 'earphone'),
(36, 'Sony Noise Cancelling Headphones WHCH710N', 'img/earphone/earphone5.png', '699.00', 'earphone'),
(37, '\r\nSony MDRZX110/BLK ZX Series Stereo Headphones (Black)', 'img/earphone/earphone6.png', '249.00', 'earphone');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetID` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(2, 'abc', '1181203426@student.mmu.edu.my', 'b59c67bf196a4758191e42f76670ceba'),
(6, 'admin', '1181203426@student.mmu.edu.my', '96e79218965eb72c92a549dd5a330112'),
(7, 'aa', '1181203426@student.mmu.edu.my', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `compare`
--
ALTER TABLE `compare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `compare`
--
ALTER TABLE `compare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
