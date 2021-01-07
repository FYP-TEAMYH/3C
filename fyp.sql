-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-01-07 07:40:18
-- 服务器版本： 10.4.11-MariaDB
-- PHP 版本： 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `fyp`
--

-- --------------------------------------------------------

--
-- 表的结构 `adminlogin`
--

CREATE TABLE `adminlogin` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `adminlogin`
--

INSERT INTO `adminlogin` (`ID`, `User`, `Pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `compare`
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
-- 转存表中的数据 `compare`
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
-- 表的结构 `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(2, 'abc', '1181203426@student.mmu.edu.my', 'b59c67bf196a4758191e42f76670ceba'),
(6, 'admin', '1181203426@student.mmu.edu.my', '96e79218965eb72c92a549dd5a330112'),
(7, 'aa', '1181203426@student.mmu.edu.my', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- 转储表的索引
--

--
-- 表的索引 `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `compare`
--
ALTER TABLE `compare`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `compare`
--
ALTER TABLE `compare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
