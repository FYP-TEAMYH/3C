-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 10:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `image`, `gender`, `phone`) VALUES
(18, 'admin', '1181203441@student.mmu.edu.my', 'e66055e8e308770492a44bf16e875127', 'img/user2.jpg', 'Male', '012-3456789');

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
  `image` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compare`
--

INSERT INTO `compare` (`id`, `name`, `performance`, `storage`, `camera`, `battery`, `display`, `ram`, `image`, `brand`) VALUES
(1, 'IPHONE 11', 'Apple A13 Bionic', '64GB', '12MP+12MP', '3110mAh', '6.1 inches', '4GB', 'img/iphone11png', 'Iphone'),
(2, 'Asus Zenfone 7 Pro ZS671KS', 'Qualcomm SM8250 Snapdragon 865+ (7 nm+)', '256GB', '64MP+8MP+12MP', '5000 mAh', '6.67 inches', '8GB', 'img/2020FlagshipPhoneSpec/AsusZenfone7_Pro_ZS671KS.jpg', 'Asus'),
(3, 'Xiaomi Mi 10 Pro 5G', 'Qualcomm SM8250 Snapdragon 865 (7 nm+)', '256GB,512GB', '108MP,12MP,8MP,20MP', '4500 mAh', '6.67 inches\r\n', '8GB,12GB', 'img/2020FlagshipPhoneSpec/XiaomiMi10Pro_5G.jpg', 'Xiaomi'),
(4, 'Huawei Mate 40 Pro', 'Kirin 9000 5G (5 nm)', '256GB,512GB', '50 MP,12 MP,20 MP', 'Li-Po 4400 mAh, non-removable', '6.76 inches', '8GB', 'img/2020FlagshipPhoneSpec/HuaweiMate40_Pro.jpg', 'Huawei'),
(5, 'Samsung Galaxy Note20 Ultra 5G', 'Exynos 990 (7 nm+) - Global\r\nQualcomm SM8250 Snapdragon 865+ (7 nm+) - USA', '128GB,256GB,512GB', '108MP+12MP+12MP', '4500mAh', '6.9 inches', '12GB', 'img/2020FlagshipPhoneSpec/SamsungGalaxy_Note20Ultra_5G.jpg', 'Samsung'),
(6, 'Samsung Galaxy Z Fold2 5G', 'Qualcomm SM8250 Snapdragon 865+ (7 nm+)', '256GB,512GB', '12MP+ 12MP+ 12MP', '4500mAh', '7.6 inches', '12GB', 'img/2020FlagshipPhoneSpec/SamsungGalaxy_ZFold2_5G.jpg', 'Samsung'),
(7, 'Oppo Find X2 Pro', 'Qualcomm SM8250 Snapdragon 865 (7 nm+)', '256GB,512GB', '48MP+13MP+48MP', '4260mAh', '6.7 inches', '12', 'img/2020FlagshipPhoneSpec/OppoFindX2_Pro.jpg', 'Oppo'),
(8, 'One Plus 8 Pro', 'Qualcomm SM8250 Snapdragon 865 (7 nm+)', '128GB,256GB', '48MP+8MP+48MP', '4510 mAh', '6.78 inches', '8GB,12GB', 'img/2020FlagshipPhoneSpec/OnePlus8_Pro.jpg', 'One Plus');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_item_name` varchar(250) NOT NULL,
  `order_item_quantity` int(11) NOT NULL,
  `order_item_price` double(12,2) NOT NULL,
  `user_id` int(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `order_item_name`, `order_item_quantity`, `order_item_price`, `user_id`, `date`) VALUES
(87, 68, 'Razer BlackWidow Elite Mechanical Gaming Keyboard: Orange Mechanical Switches ', 1, 399.00, 23, '2021-02-23 09:56:41'),
(88, 68, 'Logitech G213 Prodigy Gaming Keyboard', 1, 199.00, 23, '2021-02-23 09:56:41'),
(89, 68, 'Redragon K530 Draconic 60% Compact RGB Wireless Mechanical Keyboard', 1, 299.00, 23, '2021-02-23 09:56:41'),
(90, 69, 'Razer Cynosa Chroma Gaming Keyboard', 1, 199.00, 23, '2021-02-23 09:59:40'),
(91, 69, 'ASUS ROG Strix G17 (2020) Gaming Laptop, 17.3 ', 1, 6599.00, 23, '2021-02-23 09:59:40'),
(92, 69, 'Iphone 12 Pro Max', 1, 5799.00, 23, '2021-02-23 09:59:40'),
(93, 70, 'Logitech G633 Artemis Spectrum', 1, 419.00, 23, '2021-02-23 10:01:09'),
(94, 70, 'Sony Noise Cancelling Headphones WHCH710N', 1, 699.00, 23, '2021-02-23 10:01:09'),
(95, 70, 'Samsung Galaxy Z Fold2 5G', 1, 7999.00, 23, '2021-02-23 10:01:09'),
(96, 71, 'Razer BlackWidow Elite Mechanical Gaming Keyboard: Orange Mechanical Switches ', 1, 399.00, 23, '2021-02-23 10:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `order_number` int(11) NOT NULL,
  `order_total_amount` double(12,2) NOT NULL,
  `transaction_id` varchar(200) NOT NULL,
  `card_cvc` int(5) NOT NULL,
  `card_expiry_month` varchar(30) NOT NULL,
  `card_expiry_year` varchar(30) NOT NULL,
  `card_holder_number` varchar(250) NOT NULL,
  `email_address` varchar(250) NOT NULL,
  `customer_name` varchar(250) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_city` varchar(250) NOT NULL,
  `customer_pin` varchar(30) NOT NULL,
  `customer_state` varchar(250) NOT NULL,
  `customer_country` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `order_status` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `discount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `order_number`, `order_total_amount`, `transaction_id`, `card_cvc`, `card_expiry_month`, `card_expiry_year`, `card_holder_number`, `email_address`, `customer_name`, `customer_address`, `customer_city`, `customer_pin`, `customer_state`, `customer_country`, `user_id`, `date`, `order_status`, `status`, `discount`) VALUES
(68, 847402, 807.00, 'txn_6034c34958f5e', 123, '12', '2021', '4242 4242 4242 4242', 'yonghaocha@gmail.com', 'Yong Hao', '20/2 Jalan Bayan 45, Taman Megah Ria', 'johor', '81750', 'masai', 'Malaysia', 23, '2021-02-23 09:56:41', 3, 0, '30'),
(69, 890946, 12597.00, 'txn_6034c3fc70771', 345, '12', '2023', '4242 4242 4242 4242', '1181203427@email.com', 'Jian Ping', '4/2 Jalan Jaya 45, Taman Jaya ', 'johor', '81750', 'masai', 'Malaysia', 23, '2021-02-23 09:59:40', 1, 0, '0'),
(70, 294112, 9027.00, 'txn_6034c455a41ea', 234, '12', '2025', '4242 4242 4242 4242', '1181203441@student.mmu.edu.my', 'Kengy', '45, Jalan Api-Api 45, Taman Megah Ria', 'Johor', '81750', 'masai', 'Malaysia', 23, '2021-02-23 10:01:09', 2, 0, '30'),
(71, 714568, 399.00, 'txn_6034c56562a95', 123, '12', '2021', '4242 4242 4242 4242', '1181203427@email.com', 'Jian Ping', '4/2 Jalan Jaya 45, Taman Jaya', 'johor', '81750', 'masai', 'Malaysia', 23, '2021-02-23 10:05:41', 3, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('1181203426@student.mmu.edu.my', '9cc5394586d5c2fe59c71be0f1ba17f5d1abd2f35a', '2021-01-29 18:28:25'),
('jjj@hotmail.com', '768e78024aa8fdb9b8fe87be86f64745a8aef24bbf', '2021-02-05 14:47:11'),
('1181203426@student.mmu.edu.my', '9cc5394586d5c2fe59c71be0f1ba17f56e9ebc36f7', '2021-02-05 14:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `description2` longtext NOT NULL,
  `brand` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `quality` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `category`, `description`, `description2`, `brand`, `color`, `quality`, `quantity`) VALUES
(1, 'Razer BlackWidow Elite Mechanical Gaming Keyboard: Orange Mechanical Switches ', 'img/keyboard1jpg', '399.00', 'keyboard', '<br>- Tactile & Silent \r\n<br>- Chroma RGB Lighting \r\n<br>- Magnetic Wrist Rest \r\n<br>- Dedicated Media Keys & Dial \r\n<br>- USB Passthrough               ', '<br>- The No.1 Best-Selling Gaming Peripherals Manufacturer in the US: Source - The NPD Group, Inc., U.S. Retail Tracking Service, Gaming Designed: Keyboards, Mice, PC Headsets, and PC Microphones, Based on dollar sales, Jan. 2017- June 2020 combined\r\n<br>- Zero-Compromise Mechanical Switch for Speed & Accuracy: Razer Orange switch technology provides tactile feedback with a quieter click, requiring 45 G of actuation force; ideal for most gaming and typing experiences\r\n<br>- Ultimate Personalization & Gaming Immersion with Razer Chroma: Fully syncs with popular games, Razer hardware, Philips Hue, and gear from 30+ partners; supports 16.8 million colors on individually backlit keys\r\n<br>- Fully Programmable Macros: Razer Hypershift allows for all keys and keypress combinations be remapped to execute complex commands\r\n<br>- Ergonomic, Magnetic Wrist Rest: Made of plush leatherette to maximize comfort over extended gaming sessions\r\n<br>- Durable Construction: Supports up to 80 million clicks; made of military-grade metal top plate               ', 'Razer', 'Black', 'Yes', 97),
(2, 'Logitech G213 Prodigy Gaming Keyboard', 'img/keyboard/keyboard5.jpg', '199.00', 'keyboard', 'Worlds NO. 1 Best Selling Gaming Gear Brand - Based on independent aggregated sales data (FEB \'19 - FEB\'20) of Gaming Keyboard, Mice, & PC Headset in units from: US, CA, CN, JP, KR, TW, TH, ID, DE, FR, RU, UK, SE, TR', 'About this item<br><br>\r\n\r\n- Brilliant color spectrum illumination - personalize five individual lighting Zones from a spectrum of over 16. 8 million colors. Change colors to match your setup, specific games, or to showcase your favorite colors. Synchronize lighting effects with other Logitech G devices using Logitech gaming software. Low light leak around each keycap means less more light comes through the lettering - and less leaks around the keycaps. This helps make the illumination of each key more brilliant, making it easier to find your keys in the dark.<br>\r\n\r\n- Comfortable and durable - G213 Prodigy is a full-sized keyboard designed for gaming and productivity. The slim body is built for gamers of all levels, with a durable construction that repels liquids, crumbs and dirt for easy cleanup. An integrated Palm rest And adjustable feet Let you set your keyboard to the ideal position, so it\'s comfortable to use even during the longest gaming sessions.<br>\r\n- Performance tuned with multi-key input - G213 brings together the best in tactile feel and performance with Keys built specifically for the way gamers play. Each key on the G213 is tuned to enhance the tactile experience, delivering ultra-quick, responsive feedback that is up to 4 times faster than standard keyboards. The anti-ghosting gaming Matrix is tuned for optimal gaming performance, keeping you in control when you press multiple gaming keys simultaneously.\r\n', 'Logitech G', 'Black', 'Yes', 98),
(3, 'Redragon K530 Draconic 60% Compact RGB Wireless Mechanical Keyboard', 'img/keyboard/keyboard2.jpg', '299.00', 'keyboard', '61 Keys TKL Designed 5.0 Bluetooth Gaming Keyboard with Brown Switches and 16.8 Million RGB Lighting for PC, Laptop, Cell Phone ', 'About this item<br><br>\r\n- First Redragon 60% Keyboard - Ultra minimalistic tenkeyless (TKL) design with 61 keys portable layout frees up table space for mouse movement, which offers the purest performance for FPS pro (11.5*3.9*1.4 in).<br>\r\n- Wireless Made Easy - Enjoy the freedom of wirelessness with a Bluetooth 5.0 connection and 3000mAh long-lasting battery capacity. Reliable and fast connects hassle-free with devices such as laptops, tablets, and even phones that support Bluetooth.<br>\r\n- Dual Mode Switch - Easily switch between wireless and wired modes with the mode switch on the side. Included USB-C cable gives you the option to go wired for competitive games.<br>\r\n- Hot-Swappable Brown Switches - Tactile brown switches provide a soft bump, but no click, unlike blue switches for quiet use. Hot-swappable with other Redragon switches. <br>\r\n- Made to last with switches rated for 50 million keypresses.<br>\r\n- RGB Illumination Builder - 13 Dynamic presets available onboard. Millions of color options and effects make you the designer of your ultimate gear with a pro driver. Software/Driver link (http://bit.ly/K530BTKeyboard) ', 'Redragon', 'White', 'Yes', 98),
(4, 'Razer Cynosa Chroma Gaming Keyboard', 'img/keyboard/keyboard3.jpg', '199.00', 'keyboard', '168 Individually Backlit RGB Keys - Spill-Resistant Design - Programmable Macro Functionality - Quiet & Cushioned', 'About this item<br><br>\r\n<br>- The No.1 Best-Selling Gaming Peripherals Manufacturer in the US: Source - The NPD Group, Inc., U.S. Retail Tracking Service, Gaming Designed: Keyboards, Mice, PC Headsets, and PC Microphones, Based on dollar sales, Jan. 2017- June 2020 combined\r\n<br>- All-around Gaming Performance: Able to execute up to ten commands at the same time with built-in key rollover anti-ghosting\r\n<br>- Ultimate Personalization & Gaming Immersion with Razer Chroma: Fully syncs with popular games, Razer hardware, Philips Hue, and gear from 30+ partners; supports 16.8 million colors on individually backlit keys\r\n<br>- Spill-Resistant Design: Built to withstand most accidental liquid splashes\r\n<br>- Fully Programmable Macros: Razer Hypershift allows for all keys and keypress combinations be remapped to execute complex commands\r\n<br>- Durable Construction: Supports up to 80 million clicks with a 2 year manufacturer warranty', 'Razer', 'Black', 'Yes', 9),
(5, 'Corsair K55 RGB Gaming Keyboard', 'img/keyboard/keyboard6.jpg', '219.00', 'keyboard', 'IP42 Dust and Water Resistance - 6 Programmable Macro Keys - Dedicated Media Keys - Detachable Palm Rest Included', 'About this item<br><br>\r\n<br>- Dynamic RGB backlighting across three zones, with full customization of colors and lighting effects\r\n<br>- Dust and spill resistant design rated up to IP42 protection guards against accidents so your gameplay never has to stop\r\n<br>- Six programmable macro keys give you the in-game advantage of powerful macros or key remaps\r\n<br>- Detachable, soft rubber palm rest reduces stress on your wrists so you can play longer in comfort\r\n<br>- Dedicated volume and media controls give you direct control over your audio without having to interrupt your game\r\n<br>- Powerful corsair iCUE software enables vivid dynamic RGB lighting control, sophisticated macro programming and full-system lighting synchronization across all iCUE-compatible Corsair devices\r\n<br>- Quiet and responsive keys for comfortable typing during both work and play', 'Corsair', 'Black', 'Yes', 10),
(6, 'Corsair K68 RGB Mechanical Gaming Keyboard', 'img/keyboard/keyboard7.jpg', '369.00', 'keyboard', 'Backlit RGB LED, Dust and Spill Resistant - Linear & Quiet - Cherry MX Red', 'About this item<br><br>\r\n\r\n<br>- Vivid RGB backlighting offers virtually unlimited lighting customization, or use a variety of on board pre-installed effects for instant illumination\r\n<br>- Dust and spill resistant design rated up to IP32 protection, helps defend against accidents so your gameplay never has to stop\r\n<br>- 100 percentage gold contact Cherry MX mechanical gaming key switches deliver the ultimate performance and competitive advantage\r\n<br>- Corsair Utility Engine (CUE) software controls sophisticated macro programming and stunning dynamic lighting effects\r\n<br>- 100 percentage Anti ghosting with full key rollover ensures your commands and simultaneous keystrokes always register the way you intended', 'Corsair', 'Black', 'Yes', 10),
(7, 'Razer Huntsman Tournament Edition TKL Tenkeyless Gaming Keyboard', 'img/keyboard/keyboard8.jpg', '549.00', 'keyboard', 'Fastest Keyboard Switches Ever - Linear Optical Switches - Chroma RGB Lighting - PBT Keycaps - Onboard Memory - Classic Black', 'About this item<br><br>\r\n\r\n<br>- The No.1 Best-Selling Gaming Peripherals Manufacturer in the US: Source - The NPD Group, Inc., U.S. Retail Tracking Service, Gaming Designed: Keyboards, Mice, PC Headsets, <br>and PC Microphones, Based on dollar sales, Jan. 2017- June 2020 combined\r\n- Faster Than Traditional Mechanical Switches: Razer Linear Optical switch technology uses optical beam-based actuation, registering key presses at the speed of light (15-30% shorter actuation distance than other linear switches at 1.0 millimeter)\r\n<br>- Ultimate Personalization & Gaming Immersion with Razer Chroma: Fully syncs with popular games, Razer hardware, Philips Hue, and gear from 30+ partners; supports 16.8 million colors on individually backlit keys\r\n<br>- Quality, Aluminum Construction: Covered with a matte, aluminum top frame for increased structural integrity\r\n<br>- Tournament-Ready Design: A tenkeyless design with a detachable USB-C cable provides a portable form-factor for on-the-go gamers\r\n<br>- Oil-Resistant Double shot PBT Keycaps: Made of textured, high-grade PBT for a more durable and textured finish less prone to long-term grime build up\r\n<br>- Fully Programmable Macros: Razer Hypershift allows for all keys and keypress combinations be remapped to execute complex commands', 'Razer', 'Black', 'Yes', 10),
(8, 'SteelSeries Apex 5 Hybrid Mechanical Gaming Keyboard', 'img/keyboard/keyboard12.jpg', '379.00', 'keyboard', '- Per-Key RGB Illumination - Aircraft Grade Aluminum Alloy Frame - OLED Smart Display (Hybrid Blue Switch)', 'About this item<br><br>\r\n<br>- Hybrid mechanical gaming switches - The tactile click of a blue mechanical switch plus a smooth membrane\r\n<br>- OLED smart display - Customize with gifs, game info, discord messages, and more.\r\n<br>- Aircraft-grade aluminum alloy frame - Manufactured for unbreakable durability and sturdiness\r\n<br>- Dynamic per-key RGB illumination - Gorgeous color schemes and reactive effects for every key\r\n<br>- Premium magnetic wrist rest - Provides full palm support and comfort\r\n<br>- 900 x 300 x 4 millimeter / 35.43 inches x 11.81 inches\r\n<br>- SteelSeries cannot guarantee the quality or authenticity of products sold by non-authorized resellers on Amazon, and they are not eligible for warranty. Authorized retailers: Amazon.com, Adorama Inc, Encore Technology, Spacebound', 'SteelSeries', 'Black', 'Yes', 10),
(9, 'Razer Huntsman Mini 60% Gaming Keyboard', 'img/keyboard/keyboard10.jpg', '499.00', 'keyboard', 'Fastest Keyboard Switches Ever - Clicky Optical Switches - Chroma RGB Lighting - PBT Keycaps - Onboard Memory - Classic Black', 'About this item<br><br>\r\n<br>- The No.1 Best-Selling Gaming Peripherals Manufacturer in the US: Source - The NPD Group, Inc., U.S. Retail Tracking Service, Gaming Designed: Keyboards, Mice, PC Headsets, and PC Microphones, Based on dollar sales, Jan. 2017- June 2020 combined\r\n<br>- Faster Than Legacy Mechanical Switches: Razer Optical switches use light-based actuation, registering key presses at the speed of light (30% shorter actuation distance than other clicky switches at 1.5 millimeter) with satisfying, clicky feedback\r\n<br>- Ultimate Personalization & Gaming Immersion with Razer Chroma: Fully syncs with popular games, Razer hardware, Philips Hue, and gear from 30+ partners; supports 16.8 million colors on individually backlit keys\r\n<br>- Quality, Aluminum Construction: Covered with a matte, aluminum top frame for increased structural integrity\r\n<br>- Oil-Resistant Double shot PBT Keycaps: Made of textured, high-grade PBT for a more durable and textured finish less prone to long-term grime build up\r\n<br>- Fully Programmable Macros: Razer Hypershift allows for all keys and keypress combinations be remapped to execute complex commands', 'Razer', 'Black', 'Yes', 10),
(10, 'Razer Huntsman Elite Gaming Keyboard', 'img/keyboard/keyboard11.jpg', '649.00', 'keyboard', 'Fastest Keyboard Switches Ever - Linear Optical Switches - Chroma RGB Lighting - Magnetic Plush Wrist Rest - Dedicated Media Keys & Dial - Classic Black', 'About this item<br><br>\r\n<br>- The #1 Best-Selling Gaming Peripherals Manufacturer in the US: Source - The NPD Group, Inc., U.S. Retail Tracking Service, Gaming Designed: Keyboards, Mice, PC Headsets, and PC Microphones, Based on dollar sales, Jan. 2017- June 2020 combined\r\n<br>- Faster Than Traditional Mechanical Switches: Razer Linear Optical switch technology uses optical beam-based actuation, registering key presses at the speed of light (15-30% shorter actuation distance than other linear switches at 1.0 mm)\r\n<br>- Ultimate Personalization & Gaming Immersion with Razer Chroma: Fully syncs with popular games, Razer hardware, Philips Hue, and gear from 30+ partners; supports 16.8 million colors on individually backlit keys\r\n<br>- Quality, Aluminum Construction: Covered with a matte, aluminum top frame for increased structural integrity\r\n<br>- Ergonomic, Magnetic Wrist Rest: Made of plush leatherette to maximize comfort over extended gaming sessions (with built-in underglow lighting)\r\n<br>- Fully Programmable Macro Support: Razer Hypershift allows for all keys and keypress combinations to be remapped to execute complex commands\r\n<br>- Unrivalled Durability: Supports up to 100 million clicks with a 2 year manufacturer warranty, double the lifespan of most competitor keyboards', 'Razer', 'Black', 'Yes', 10),
(11, 'Razer DeathAdder Essential Gaming Mouse', 'img/mouse/mouse3.png', '119.00', 'mouse', '6400 DPI Optical Sensor - 5 Programmable Buttons - Mechanical Switches - Rubber Side Grips - White', 'About this item<br><br>\r\n<br>- The No.1 Best-Selling Gaming Peripherals Manufacturer in the US: Source - The NPD Group, Inc., U.S. Retail Tracking Service, Gaming Designed: Keyboards, Mice, PC Headsets, and PC Microphones, Based on dollar sales, Jan. 2017- June 2020 combined\r\n<br>- High-Precision 6,400 DPI Optical Sensor: Offers on-the-fly sensitivity adjustment through dedicated DPI buttons (reprogrammable) for gaming and creative work\r\n<br>- Durable Mechanical Switches: Supports up to 10 million clicks, backed by a 2 year warranty\r\n<br>- Ridged, Rubberized Scroll Wheel for Maximum Accuracy: Small, tactile bumps increases grip and allows for more controlled scrolling in high-stakes gaming situations\r\n<br>- 5 Programmable Buttons: Allows for button remapping and assignment of complex macro functions through Razer Synapse', 'Razer ', 'White', 'Yes', 10),
(12, 'HyperX Pulsefire Raid Gaming Mouse', 'img/mouse1.png', '239.00', 'mouse', '11 Programmable Buttons, RGB, Ergonomic Design, Comfortable Side Grips, Software-Controlled Customization  ', 'About this item<br><br>\r\n<br>- Lightweight 11-button programmable mouse\r\n<br>- Premium Pixart 3389 Sensor\r\n<br>- Advanced customization using HyperX NGenuity software\r\n<br>- Ergonomic design with comfortable side grips\r\n<br>- Split-button design for extreme responsiveness\r\n<br>- Customizable RGB lighting\r\n<br>- Large skates and flexible braided cable\r\n<br>- Multi-platform compatibility  ', 'HyperX', 'Black', 'Yes', 10),
(13, 'Razer Basilisk X HyperSpeed Wireless Gaming Mouse', 'img/mouse/mouse2.png', '199.00', 'mouse', 'luetooth & Wireless Compatible, 16K DPI Optical Sensor, 6 Programmable Buttons, 450 Hr Battery, Classic Black', 'About this item<br><br>\r\n<br>- The No.1 Best-Selling Gaming Peripherals Manufacturer in the US: Source - The NPD Group, Inc., U.S. Retail Tracking Service, Keyboards, Mice, PC Headset, PC Microphone, Gaming Designed, Based on dollar sales, Jan. 2017- Mar. 2020 combined.\r\n<br>- 25% Faster Than Competing Wireless Mice: The all-new, Razer HyperSpeed wireless technology brings together extreme low-latency and interference reduction for true wireless freedom\r\n<br>- Dual Mode Connectivity: Supports Bluetooth for efficient power consumption and  HyperSpeed Wireless for lag-free gaming. Max Acceleration (G): 40\r\n<br>- 6 Programmable Buttons: Allows for reconfiguration and assignment of complex macro functions through Razer Synapse 3\r\n<br>- Up to 450 Hour Battery Life: Lasts 450 hours on Bluetooth, 285 hours on HyperSpeed Wireless', 'Razer', 'Black', 'Yes', 10),
(14, 'Razer Basilisk v2 Wired Gaming Mouse', 'img/mouse/mouse4.png', '299.00', 'mouse', '20K DPI Optical Sensor, Fastest Gaming Mouse Switch, Chroma RGB Lighting, 11 Programmable Buttons, Classic Black', 'About this item<br><br>\r\n<br>- The #1 Best-Selling Gaming Peripherals Manufacturer in the US: Source - The NPD Group, Inc., U.S. Retail Tracking Service, Gaming Designed: Keyboards, Mice, PC Headsets, and PC Microphones, Based on dollar sales, Jan. 2017- June 2020 combined.\r\n<br>- Focus+ 20K DPI Optical Sensor: Offers an on-the-fly sensitivity adjustment through dedicated DPI buttons (programmable) for gaming\r\n<br>- 3x Faster Than Traditional Mechanical Switches: New Razer optical mouse switches use light beam-based actuation, registering button presses at the speed of light for complete immersion and absolute control\r\n<br>- Customizable Chroma RGB Color Profiles: Supports 16.8 million color combinations w/ included preset profiles\r\n<br>- 11 Programmable Buttons: Allows for reconfiguration and assignment of complex macro functions through Razer Synapse 3\r\n<br>- Drag-Free Cord for Wireless-Like Performance: Razer Speedflex cables eliminate the need for mouse bungees, drastically reducing weight and drag for absolute control', 'Razer', 'Black', 'Yes', 10),
(15, 'Logitech G203 LIGHTSYNC Wired Gaming Mouse - Black', 'img/mouse/mouse5.jpg', '129.00', 'mouse', 'Worlds no.1 Best Selling Gaming Gear Brand - Based on independent aggregated sales data (FEB \'19 - FEB\'20) of Gaming Keyboard, Mice, & PC Headset in units from: US, CA, CN, JP, KR, TW, TH, ID, DE, FR, RU, UK, SE, TR', 'About this item<br><br>\r\n\r\n<br>- 8, 000 DPI gaming-grade sensor responds precisely to movements. Customize your sensitivity settings to suit the sensitivity you like with Logitech G HUB gaming software and cycle easily through up to 5 DPI settings.\r\n<br>- Play in color with our most vibrant LIGHTSYNC RGB featuring color wave effects customizable across -16. 8 million colors. Install Logitech G HUB software to choose from preset colors and animations or make your own. Game-driven, audio visualization and screen mapping options are also available.\r\n<br>- Play comfortably and with total control. The classic and simple 6-button layout and classic gaming shape is a comfortable time-tested and loved design. Each button can be customized using Logitech G HUB software to simplify tasks.\r\n<br>- Primary buttons are mechanical and tensioned with durable metal springs for reliability, performance and excellent feel. The crisp clicks and precise feedback delivers a great precision feel to maximize your fun in game.', 'Logitech', 'Black', 'Yes', 10),
(16, 'MSI GL65 Leopard 10SFK-062 15.6', 'img/laptop/laptop1.jpg', '5699.00', 'laptop', 'FHD 144Hz 3ms Thin Bezel Gaming Laptop Intel Core i7-10750H RTX2070 16GB 512GB NVMe SSD Win 10', 'About this item<br><br>\r\n\r\n<br>- \r\n15.6\" FHD IPS-Level 144Hz 72%NTSC Thin Bezel close to 100%Srgb NVIDIA GeForce RTX 2070 8G GDDR6\r\n<br>-Intel Core i7-10750H 2.6-5.0GHz Intel Wi-Fi 6 AX201(2 x 2 ax)\r\n<br>-512GB NVMe SSD 16GB (8G*2) DDR4 2666MHz 2 Sockets Max Memory 64GB\r\n<br>-USB 3.1 Gen2 Type C 1 USB 3.2 Gen1 3 Steel Series per-Key RGB with Anti-Ghost key+ silver lining 720p HD Webcam\r\n<br>-Win10 Multi-language Giant Speakers 3W x 2 6 cell (51Wh) Li-Ion 230W', 'MSI', 'Black', 'Yes', 10),
(17, 'ASUS ROG Strix G17 (2020) Gaming Laptop, 17.3 ', 'img/laptop/laptop2.jpg', '6599.00', 'laptop', '144Hz FHD IPS Type Display, NVIDIA GeForce RTX 2070, Intel Core i7-10750H, 16GB DDR4, 512GB PCIe NVMe SSD, RGB Keyboard, Windows 10, Black, G712LW-ES74', 'About this item<br><br>\r\n\r\n<br>- \r\nNVIDIA GeForce RTX 2070 8GB GDDR6 with ROG Boost (Base: 1260MHz, Boost: 1455MHz, TDP: 115W)\r\n<br>- Latest 10th Gen Intel Core i7-10750H Processor\r\n<br>- 144Hz 3ms 17.3\' Full HD 1920x1080 IPS-Type Display\r\n<br>- 16GB DDR4 2933MHz RAM | 512GB PCIe SSD | Windows 10 Home\r\n<br>- ROG Intelligent Cooling thermal system with Thermal Grizzly Liquid Metal Thermal Compound\r\n<br>- ROG Aura Sync System with RGB Keyboard and Light Bar\r\n<br>- Gig+ Wi-Fi 6 with RangeBoost & Bluetooth 5.0 | ROG Easy Upgrade System', 'Asus', 'Black', 'Yes', 9),
(18, 'ROG Zephyrus G15 (2020) Ultra Slim Gaming Laptop, 15.6', 'img/laptop/laptop3.jpg', '5399.00', 'laptop', '240Hz FHD, GeForce RTX 2060, AMD Ryzen 7 4800HS, 16GB DDR4, 1TB PCIe NVMe SSD, Windows 10 Pro, GA502IV-XS76', 'About this item<br><br>\r\n\r\n<br>- \r\nNVIDIA GeForce RTX 2060 6GB GDDR6 with ROG Boost (Base: 982MHz, Boost: 1198MHz, TDP: 65W)\r\n<br>- AMD Ryzen 7 4800HS processor (up to 4.2GHz)\r\n<br>- 15.6\' 240Hz 3ms IPS-Type Full HD (1920x1080) PANTONE Validated display\r\n<br>- 16GB 3200MHz DDR4 RAM | 1TB PCIe NVMe M.2 SSD | Backlit Precision Gaming Keyboard | Windows 10 Professional\r\n<br>- 0.8\' thin, 4.85 lbs ultraportable form-factor\r\n<br>- Gig+ Wi-Fi 6 (802.11ax) | USB Type-C Charging Capable\r\n<br>- ROG Intelligent Cooling system with self-cleaning anti-dust tunnels preserves cooling performance and system stability', 'Asus', 'Black', 'Yes', 10),
(19, 'Acer Predator Triton 500 PT515-52-73L3 Gaming Laptop', 'img/laptop/laptop4.jpg', '6699.00', 'laptop', 'Intel i7-10750H, NVIDIA GeForce RTX 2070 SUPER, 15.6\" FHD NVIDIA G-SYNC Display, 300Hz, 16GB Dual-Channel DDR4, 512GB NVMe SSD, RGB Backlit KB', 'About this item<br><br>\r\n\r\n<br>- \r\n10th Generation Intel Core i7-10750H 6-Core Processor (Up to 5.0GHz) with Windows 10 Home\r\n<br>-Overclockable NVIDIA GeForce RTX 2070 SUPER Graphics with Max-Q Design & 8 GB of dedicated GDDR6 VRAM\r\n<br>-15.6\" Full HD (1920 x 1080) widescreen LED-backlit IPS display with NVIDIA G-SYNC technology | 300Hz Refresh Rate | 3ms Overdrive Response Time | 300nit Brightness | 100% sRGB\r\n<br>-16GB DDR4 2933MHz Memory | 512GB PCIe NVMe SSD (2 x PCIe M.2 Slots with 1 Slot Open for Easy Upgrades)\r\n<br>-Per-key RGB Backlit Keyboard with Customizable Lighting | LAN: Killer Gaming Network E3100G | Wireless: Killer Double Shot Pro Wireless-AX 1650i 802.11ax WiFi 6 | 4th Gen All-Metal AeroBlade 3D Fan', 'Acer', 'Black', 'Yes', 10),
(20, 'OMEN 15 Gaming Laptop', 'img/laptop/laptop5.jpg', '6699.00', 'laptop', 'NVIDIA GeForce RTX 2070 Max-Q, Intel Core i7-10750H, 16 GB DDR4 RAM, 512 GB PCIe NVMe SSD, 15.6\" Full HD 144hz, Windows 10 Home, RGB Keyboard (15-dh1060nr, 2020 Model)', 'About this item<br><br>\r\n\r\n<br>-\r\nHYPER-REALISTIC GRAPHICS FOR LAPTOP GAMING: NVIDIA GeForce RTX 2070 (8 GB GDDR6 dedicated) with Max-Q for power and efficiency combined, NVIDIA Studio Driver delivers multi-app reliability. Cutting-edge NVIDIA Turing architecture immerses you in incredible realism and gaming laptop performance. VR and Mixed Reality-ready. 15.6-inch diagonal Full HD IPS anti-glare micro-edge WLED-backlit display (1920 x 1080) with 144Hz refresh rate, 78% screen to body ratio\r\n<br>-SUPER-FAST PROCESSOR: 10th Generation Intel Core i7-10750H, 6-Core, 2.6 GHz base frequency, up to 5 GHz with Intel Turbo Boost Technology\r\n<br>-HIGHER BANDWIDTH MEMORY, FAST SSD AND SINGLE ACCESS PANEL: 16 GB DDR4-2933 MHz SDRAM (2 x 8 GB, 2 accessible memory slots upgradable to 64 GB, 2 x 32 GB) & 512 GB PCIe NVMe M.2 SSD (2 accessible M.2 slots). Easy access to your gaming laptop internals make upgrades and maintenance simple\r\n<br>-THIN, LIGHTWEIGHT, & PORTABLE GAMING WITH LONG BATTERY LIFE: Crafted with an all-metal design, polished accents, and quality materials built to last. 5.43 lb; 14.17 in (W) x 10.35 in (D) x 0.79 in (H); up to 6 hours and 15 minutes (mixed usage), up to 3 hours and 30 minutes (video playback), up to 3 hours (wireless streaming), 6-cell, 69 WH Li-ion polymer battery\r\n<br>-GAMING CONNECTIVITY: Thunderbolt 3 (40Gbps signaling rate) with SuperSpeed USB Type-C (DisplayPort 1.4, HP Sleep and Charge), 3 SuperSpeed USB Type-A, RJ-45, 3.5mm Headphone/microphone combo (DTS: X Ultra), AC smart pin, Mini DisplayPort, HDMI 2.0a. Enjoy a smoother wireless experience with Wi-Fi 6 (2x2) and Bluetooth 5.0 combo, all your connections are solid and up to 3x faster file transfer speeds than Wi-Fi 5', 'Omen', 'Black', 'Yes', 10),
(21, 'ASUS TUF Gaming A17 Gaming Laptop, 17.3', 'img/laptop/laptop6.jpg', '4199.00', 'laptop', '120Hz FHD IPS-Type, AMD Ryzen 7 4800H, GeForce GTX 1660 Ti, 16GB DDR4, 1TB PCIe SSD, 90WHr Battery, RGB Backlit KB, Windows 10 Home, TUF706IU-AS76', 'About this item<br><br>\r\n\r\n<br>-\r\nNVIDIA GeForce GTX 1660 Ti 6GB Graphics with ROG Boost\r\n<br>-8-core AMD Ryzen 7 4800H Processor 45W (8M Cache, up to 4.2GHz)\r\n<br>-17.3\' Full HD (1920x1080) 120Hz IPS-Type display\r\n<br>-1TB PCIe NVMe M.2 SSD | 16GB DDR4 3200MHz RAM | Gigabit Wave 2 Wi-Fi 5 (802.11ac) | Windows 10 Home\r\n<br>-90WHr battery | Up to 8.7 hours web browsing and up to 12.3 hours video playback\r\n<br>-Durable MIL-STD-810H military standard construction\r\n<br>-Self cleaning dual fans with anti-dust technology to extend system longevity', 'Asus', 'Black', 'Yes', 10),
(22, 'Asus Zenfone 7_Pro ZS671KS', 'img/2020FlagshipPhoneSpec/AsusZenfone7_Pro_ZS671KS.jpg', '3999.00', 'smartphone', '5G + 4G dual card dual standby<br>\r\nUsing Android 10 operating system\r\n<br>6.67-inch 2,400 x 1,080pixels resolution AMOLED NanoEdge screen (90Hz screen refresh rate)\r\n<br>Built-in Qualcomm Snapdragon 865 octa-core processor\r\n<br>64 million pixels + 12 million pixels + 8 million pixels camera\r\n<br>Wi-Fi 6, Bluetooth 5.1, NFC\r\n<br>Side fingerprint recognition\r\n<br>5,000mAh battery\r\n<br>Adopt USB Type-C specification, support QC 4.0 fast charge\r\n<br>Support microSD memory card, expandable up to 2TB storage space', 'Operating system and version: Android 10\r\nProcessor brand: Qualcomm\r\nProcessor model: Snapdragon 865 / Snapdragon 865+\r\nNumber of processor cores: 8\r\nGraphics processor: Adreno 650\r\nRAM memory: 6 GB / 8 GB\r\nROM storage space: 128 GB / 256 GB\r\nMemory card: microSD\r\n<br>Maximum expansion storage space: 2 TB\r\n<br>Battery capacity: 5000 mAh\r\n<br>Display screen\r\n<br>Main screen size: 6.67 inch\r\n<br>Main screen resolution: 2400x1080 pixels\r\n<br>Main screen pixel density: 395 ppi\r\n<br>Main screen material: AMOLED\r\n<br>Main screen touch: Yes\r\n<br>Camera specifications\r\n<br>Main camera pixels: 64 million pixels\r\n<br>Main camera sensor: CMOS\r\n<br>Main camera aperture F: 1.8\r\n<br>Main camera LED fill light: Yes\r\n<br>Main camera autofocus: Yes\r\n<br>Main camera UHD 4K recording: Yes\r\n<br>Main camera 8K video recording: Yes\r\n<br>Pixels of the second main camera: 12 million pixels\r\n<br>Second main camera sensor: CMOS\r\n<br>Second main camera aperture F: 2.2\r\n<br>The third main camera pixel: 8 million pixels\r\n<br>The third main camera sensor: CMOS\r\n<br>Communication and Internet\r\n<br>4G LTE: Yes\r\n<br>5G connection: Yes', 'Asus', 'White', 'Yes', 10),
(23, 'Iphone 12 Mini', 'img/2020FlagshipPhoneSpec/iPhone12mini-Blue.jpg', '3399.00', 'smartphone', 'As part of Apple\'s efforts to reach their environmental goals, iPhone 12 mini does not include a power adapter or EarPods. Please use your existing Apple power adapter and headphones or purchase these accessories separately.\r\n<br><br>\r\n5.4-inch Super Retina XDR display\r\nWater and dust resistance (maximum depth of 6 metres for up to 30 minutes)\r\nAdvanced dual-camera system with 12MP Ultra Wide and Wide cameras\r\n12MP TrueDepth front camera with Night mode', 'iPhone 12 mini packs big features in a 5.4-inch design. A beautifully bright and compact Super Retina XDR display. Ceramic Shield with four times better drop performance. Incredible low-light photography with Night mode on all cameras. Cinema-grade Dolby Vision HDR video recording, editing and playback. Powerful A14 Bionic chip. And new MagSafe accessories for easy attachment and faster wireless charging. It\'s big news for mini.\r\n<br><br>\r\nFeature bullets\r\n<br>- 5.4-inch Super Retina XDR display1\r\n<br>- Ceramic Shield, tougher than any smartphone glass\r\n<br>- A14 Bionic chip, the fastest chip ever in a smartphone\r\n<br>- Advanced dual-camera system with 12MP Ultra Wide and Wide cameras; Night mode, Deep Fusion,\r\nSmart HDR 3, 4K Dolby Vision HDR recording\r\n<br>- 12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording\r\n<br>- Industry-leading IP68 water resistance4\r\n<br>- Supports MagSafe accessories for easy attachment and faster wireless charging3\r\n<br>- iOS 14 with redesigned widgets on the Home Screen, all-new App Library, App Clips and more', 'Apple', 'Blue', 'Yes', 10),
(24, 'Iphone 12', 'img/2020FlagshipPhoneSpec/iPhone12-Blue.jpg', '4099.00', 'smartphone', 'As part of Apple\'s efforts to reach their environmental goals, iPhone 12 does not include a power adapter or EarPods. Please use your existing Apple power adapter and headphones or purchase these accessories separately.\r\n<br><br>\r\n6.1-inch Super Retina XDR display\r\nWater and dust resistant (maximum depth of 6 metres for up to 30 minutes)\r\nAdvanced dual-camera system with 12MP Ultra Wide and Wide cameras\r\n12MP TrueDepth front camera with Night mode', 'iPhone 12. Beautifully bright 6.1-inch Super Retina XDR display. Ceramic Shield with four times better drop performance.2 Incredible low-light photography with Night mode on all cameras. Cinema-grade Dolby Vision video recording, editing and playback. Powerful A14 Bionic chip. And new MagSafe accessories for easy attachment and faster wireless charging. Let the fun begin.\r\n<br><br>\r\nFeature bullets\r\n<br>- 6.1-inch Super Retina XDR display\r\n<br>- Ceramic Shield, tougher than any smartphone glass\r\n<br>- A14 Bionic chip, the fastest chip ever in a smartphone\r\n<br>- Advanced dual-camera system with 12MP Ultra Wide and Wide cameras; Night mode, Deep Fusion,\r\nSmart HDR 3, 4K Dolby Vision HDR recording\r\n<br>- 12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording\r\n<br>- Industry-leading IP68 water resistance4\r\n<br>- Supports MagSafe accessories for easy attachment and faster wireless charging\r\n<br>- iOS 14 with redesigned widgets on the Home Screen, all-new App Library, App Clips and more', 'Apple', 'Blue', 'Yes', 10),
(25, 'Iphone 12 Pro', 'img/2020FlagshipPhoneSpec/iphone-12-pro-blue.webp', '4899.00', 'smartphone', 'As part of Apple\'s efforts to reach their environmental goals, iPhone 12 Pro does not include a power adapter or EarPods. Please use your existing Apple power adapter and headphones or purchase these accessories separately.\r\n<br><br>\r\n6.1-inch Super Retina XDR display\r\nWater and dust resistant (maximum depth of 6 metres for up to 30 minutes)\r\nPro camera system with 12MP Ultra Wide, Wide and Telephoto cameras\r\n12MP TrueDepth front camera with Night mode', 'iPhone 12 Pro. Beautifully bright 6.1-inch Super Retina XDR display. Ceramic Shield with four times better drop performance. Incredible low-light photography with a new Pro camera system and 4x optical zoom range. Cinema-grade Dolby Vision video recording, editing and playback. Night mode portraits and next-level AR experiences with the LiDAR Scanner. Powerful A14 Bionic chip. And new MagSafe accessories for easy attachment and faster wireless charging.3 For infinitely spectacular possibilities.\r\n<br><br>\r\nKey feature bullets<br>\r\n- 6.1-inch Super Retina XDR display<br>\r\n- Ceramic Shield, tougher than any smartphone glass<br>\r\n- A14 Bionic chip, the fastest chip ever in a smartphone<br>\r\n- Pro camera system with 12MP Ultra Wide, Wide and Telephoto cameras; 4x optical zoom range;\r\nNight mode, Deep Fusion, Smart HDR 3, Apple ProRAW, 4K Dolby Vision HDR recording<br>\r\n- LiDAR Scanner for improved AR experiences, Night mode portraits<br>\r\n- 12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording<br>\r\n- Industry-leading IP68 water resistance<br>\r\n- Supports MagSafe accessories for easy attachment and faster wireless charging<br>\r\n- iOS 14 with redesigned widgets on the Home Screen, all-new App Library, App Clips and more<br>', 'Apple', 'Pacific Blue', 'Yes', 10),
(26, 'Iphone 12 Pro Max', 'img/2020FlagshipPhoneSpec/iphone-12-pro-max-blue.webp', '5799.00', 'smartphone', 'As part of Apple\'s efforts to reach their environmental goals, iPhone 12 Pro Max does not include a power adapter or EarPods. Please use your existing Apple power adapter and headphones or purchase these accessories separately.\r\n\r\n\r\n<br><br>6.7-inch Super Retina XDR display\r\nWater and dust resistant (maximum depth of 6 metres for up to 30 minutes)\r\nPro camera system with 12MP Ultra Wide, Wide and Telephoto cameras\r\n12MP TrueDepth front camera with Night mode.', 'iPhone 12 Pro Max. Larger 6.7-inch Super Retina XDR display. Ceramic Shield with four times better drop performance. Incredible low-light photography with the best Pro camera system on an iPhone, and 5x optical zoom range. Cinema-grade Dolby Vision video recording, editing and playback. Night mode portraits and next-level AR experiences with the LiDAR Scanner.  Powerful A14 Bionic chip. And new MagSafe accessories for easy attachment and faster wireless charging.3 For infinitely spectacular possibilities.\r\n<br><br>\r\nFeature bullets<br>\r\n- 6.7-inch Super Retina XDR display<br>\r\n- Ceramic Shield, tougher than any smartphone glass<br>\r\n- A14 Bionic chip, the fastest chip ever in a smartphone<br>\r\n- Pro camera system with 12MP Ultra Wide, Wide and Telephoto cameras; 5x optical zoom range; Night mode, Deep Fusion, Smart HDR 3, Apple ProRAW, 4K Dolby Vision HDR recording<br>\r\n- LiDAR Scanner for improved AR experiences, Night mode portraits<br>\r\n- 12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording<br>\r\n- Industry-leading IP68 water resistance<br>\r\n- Supports MagSafe accessories for easy attachment and faster wireless charging<br>\r\n- iOS 14 with redesigned widgets on the Home Screen, all-new App Library, App Clips and more<br>', 'Apple', 'Pacific Blue', 'Yes', 9),
(27, 'OnePlus 8 Pro', 'img/OnePlus8_Pro.jpg', '3389.00', 'smartphone', 'The OnePlus 8 Pro is a proper flagship phone.   ', 'Weight: 199g\r\n', 'OnePlus', 'Blue', 'Yes', 10),
(28, 'Oppa Find X2 Pro', 'img/OppoFindX2_Pro.jpg', '4599.00', 'smartphone', '12GB RAM+512GB ROM\r\n\r\n<br>RAM Type: LPDDR5\r\n\r\n<br>ROM Type: UFS 3.0\r\n\r\n<br>External Memory: not supported    ', '120Hz Ultra Vision Screen\r\n\r\n<br>Size: 6.7 inches (diagonal)\r\n\r\n<br>Type: OLED\r\n\r\n<br>Screen Ratio: 93.1%\r\n\r\n<br>Resolution: 3168*1440 (3K QHD+)\r\n\r\n<br>Refresh Rate: up to 120Hz\r\n\r\n<br>Touch Sampling Rate: up to 240Hz\r\n\r\n<br>Colour Depth: 8+2-bit (1.07 billion colours)\r\n\r\n<br>Colour Gamut: 100% P3 (typical)\r\n\r\n<br>Pixel Density: 513 PPI\r\n\r\n<br>Contrast Ratio: 5,000,000:1 (typical)    ', 'Oppo', 'Orange', 'Yes', 10),
(29, 'Samsung Galaxy Note20 Ultra5G', 'img/2020FlagshipPhoneSpec/SamsungGalaxy_Note20Ultra_5G.jpg', '4224.00', 'smartphone', '<br>12GB RAM\r\n\r\n<br>256GB ROM\r\n\r\n<br>S Pen & Samsung Notes\r\n\r\n<br>Sync to Microsoft OneNote\r\n\r\n<br>HyperFast 5G', 'The first to merge a pen with a phone, Note put a whole new world in your pocket. As we face a new normal, life demands a new kind of device. This is not a smartphone as you know it. This is a computer suite in your pocket. This is next-level gaming on mobile. This is a pro-grade 8K camera and editing suite.\r\nThis is the power phone that forever changes how you work and play.', 'Samsung', 'MYSTIC WHITE', 'Yes', 10),
(30, 'Samsung Galaxy Z Fold2 5G', 'img/2020FlagshipPhoneSpec/SamsungGalaxy_ZFold2_5G.jpg', '7999.00', 'smartphone', 'Processor: Qualcomm SM8250 Snapdragon 865+\r\n<br>RAM: 12 GB\r\n<br>Storage: 256 GB\r\n<br>Display: 7.6 inches\r\n<br>Camera: Triple Camera\r\n<br>Battery: Li-Po 4500 mAh', 'The display of the smartphone is Foldable Dynamic AMOLED 2X capacitive touchscreen which is sized 7.6 inches. The resolution of the display is 1768 x 2208 pixels and Cover display: 6.23\", Super AMOLED, 816 x 2260 pixels (25:9).\r\n<br><br>\r\nThe smartphone is fueled with a non-removable Li-Po 4500 mAh + Fast charging 25W + Fast wireless charging 11W + Reverse wireless charging 9W. The smartphone is available in two colors such as Mystic Bronze and Mystic Black.', 'Samsung', 'Mystic Black', 'Yes', 9),
(32, 'Razer Kraken X USB Ultralight Gaming Headset', 'img/earphone/earphone1.png', '249.00', 'earphone', 'Headphone material: plastic headphones\r\n<br>Plug diameter: 3.5mm\r\n<br>Headphone output source: PC computer\r\n<br>Cable length: 1.3m', 'With or without microphone: with wheat\r\n<br>Wearing method: head-mounted ear protection\r\n<br>Headset type: wired headset\r\n<br>Plug type: L-bend\r\n<br>Whether by wire: No\r\n<br>Compatible platforms: ANDROID Windows Phone\r\n<br>Smart type: does not support smart\r\n<br>Applicable music type: Universal\r\n<br>Impedance: 32\r\n<br>Sensitivity: 109dB/mW\r\n<br>Frequency response range: 12-28000Hz', 'Razer', 'Black', 'Yes', 10),
(33, 'Razer Hammerhead Bluetooth Earbuds for iOS & Android', 'img/earphone/earphone2.png', '399.00', 'earphone', 'Connection : Wireless\r\n<br>Model Name : RZ04-01930100-R3U1\r\n<br>Headphones Form Factor : Two-ear', 'Boasting an amazing battery life of up to 8 hours, the Razer hammerhead Bluetooth is made to deliver non-stop high performance; Bluetooth wireless range : 10 m / 30 ft\r\n<br>Each 10 mm dynamic driver is custom tuned to provide the sound signature that you love - from deep bass in electronic tracks clear to high notes in inspiring OVERTURE.\r\n<br>The Razer Hammerhead Bluetooth features built-in Bluetooth 4.1, which utilizes the renowned aptX codec so there’s no compromise on sound quality', 'Razer', 'Black', 'Yes', 10),
(34, 'Logitech G633 Artemis Spectrum', 'img/earphone/earphone3.png', '419.00', 'earphone', 'Bluetooth: No\r\n<br>Microphone: Microphone Present\r\n<br>Volume Control: Volume Control Present', 'Plug diameter: 3.5mm\r\n<br>Headphone output source: other\r\n<br>Headphone Category: Gaming Headset\r\n<br>With or without microphone: with wheat\r\n<br>Wearing method: wearing earphones\r\n<br>Type: Wired\r\n<br>Headphone plug type: Straight type', 'Logitech', 'Black', 'Yes', 9),
(35, 'Logitech G433 7.1 Wired Gaming Headset with DTS Headphone', 'img/earphone/earphone4.png', '399.00', 'earphone', 'Gaming Audio Fit For Life\r\n<br>7.1 Surround Sound Positional Audio\r\n<br>Pro-G Advanced Audio Driver\r\n<br>USB/3.5mm jack input available\r\n', 'Lightweight Comfort\r\n<br>Detachable Boom Mic and Swappable Cables\r\n<br>Console Compatible\r\n<br>Black Colour/Blue Colour/Red Colour', 'Logitech', 'Red', 'Yes', 10),
(36, 'Sony Noise Cancelling Headphones WHCH710N', 'img/earphone/earphone5.png', '699.00', 'earphone', 'True Wireless: No\r\n<br>Sound Isolating: No\r\n<br>Built-In Microphone: Yes\r\n<br>Battery Life: 35 hours\r\n<br>Minimum Frequency Response: 7 hertz\r\n<br>Wireless Connectivity: Bluetooth', 'Turn down the world\'s noise with the long-lasting noise cancellation performance of the WH-CH710N wireless headphones. Dual Noise Sensor technology automatically senses your environment to deliver an amazing sound experience. With up to 35 hours of battery life1, quick charging, and access to your smartphone\'s voice assistant2, the WH-CH710N are sure to be a must-have for your travels.', 'Sony', 'Gray', 'Yes', 9),
(37, '\r\nSony MDRZX110/BLK ZX Series Stereo Headphones (Black)', 'img/earphone/earphone6.png', '249.00', 'earphone', '30mm Dynamic Dome Drivers\r\n<br>12 to 22,000 Hz Frequency Response\r\n<br>Earcups Swivel and Fold For Portability\r\n<br>Flat Cable Helps Reduce Tangles', 'For improved portability, the earcups can swivel flat and fold up into a more compact form factor. A flat Y-type cable design helps prevent tangles and terminates in an L-shaped stereo mini plug.', 'Sony', 'Black', 'Yes', 10);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `image`, `gender`, `phone`) VALUES
(23, 'user', '1181203441@student.mmu.edu.my', '5725dbcc7254ee8422d1cb60db29625c', 'img/user2.jpg', 'Male', '012-3456789');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `discount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `code`, `status`, `discount`) VALUES
(9, '3CVoucher', 0, '30'),
(10, 'TRY3C', 1, '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compare`
--
ALTER TABLE `compare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `compare`
--
ALTER TABLE `compare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
