-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 مارس 2023 الساعة 04:10
-- إصدار الخادم: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- بنية الجدول `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `NameOrder` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `pices` int(11) NOT NULL,
  `totle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `myguests`
--

CREATE TABLE `myguests` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `prodact`
--

CREATE TABLE `prodact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `proddetil` varchar(255) NOT NULL,
  `size` varchar(200) NOT NULL,
  `data_make` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `prodact`
--

INSERT INTO `prodact` (`id`, `name`, `price`, `image`, `proddetil`, `size`, `data_make`, `model`) VALUES
(33, 'laptop', '233$', 'images/icons8-my-computer-100.png', 'Ù†Ø¸Ø§Ù… ÙƒØ§Ù…ÙŠØ±Ø§Øª Pro  ÙƒØ§Ù…ÙŠØ±Ø§ Ø±Ø¦ÙŠØ³ÙŠØ© 48MPâ€ ÙƒØ§Ù…ÙŠØ±Ø§ ÙˆØ§Ø³Ø¹Ø© Ù„Ù„ØºØ§ÙŠØ© Ù…ÙŠØ²Ø© ØªÙ‚Ø±ÙŠØ¨ Ø§Ù„Ù…Ø³Ø§ÙØ§Øª Ù…Ø­Ø±Ùƒ Photonic Engine Ù„Ù…Ø³ØªÙˆÙ‰ Ù…Ø°Ù‡Ù„ Ù…Ù† Ø§Ù„ØªÙØ§ØµÙŠÙ„ ÙˆØ§Ù„Ø£Ù„ÙˆØ§Ù† Ø¶Ø¨Ø· ØªÙ„Ù‚Ø§Ø¦ÙŠ Ù„Ù„Ø¹Ø¯Ø³Ø©', '500 * 750', '2022', 'XZ50581'),
(34, 'phone', '100', 'images/gamer-zone-g230261079_1280.png', 'Ù†Ø¸Ø§Ù… ÙƒØ§Ù…ÙŠØ±Ø§Øª Pro  ÙƒØ§Ù…ÙŠØ±Ø§ Ø±Ø¦ÙŠØ³ÙŠØ© 48MPâ€ ÙƒØ§Ù…ÙŠØ±Ø§ ÙˆØ§Ø³Ø¹Ø© Ù„Ù„ØºØ§ÙŠØ© Ù…ÙŠØ²Ø© ØªÙ‚Ø±ÙŠØ¨ Ø§Ù„Ù…Ø³Ø§ÙØ§Øª Ù…Ø­Ø±Ùƒ Photonic Engine Ù„Ù…Ø³ØªÙˆÙ‰ Ù…Ø°Ù‡Ù„ Ù…Ù† Ø§Ù„ØªÙØ§ØµÙŠÙ„ ÙˆØ§Ù„Ø£Ù„ÙˆØ§Ù† Ø¶Ø¨Ø· ØªÙ„Ù‚Ø§Ø¦ÙŠ Ù„Ù„Ø¹Ø¯Ø³Ø©', '500 * 750', '2022', 'XZ50581'),
(35, 'laptop xmax', '155', 'images/Martz90-Circle-Video-camera.ico', '1005615645', '700px', '2023', '115423wqe4d'),
(40, 'T-shirt', '75 SR', 'images/pexels-cottonbro-3945673 (1).jpg', 'couton', 'XXL', '2023', 'V7'),
(41, 'laptop', '100', 'images/ØªÙ†Ø²ÙŠÙ„ (2).jpg', 'Ù†Ø¸Ø§Ù… ÙƒØ§Ù…ÙŠØ±Ø§Øª Pro  ÙƒØ§Ù…ÙŠØ±Ø§ Ø±Ø¦ÙŠØ³ÙŠØ© 48MPâ€ ÙƒØ§Ù…ÙŠØ±Ø§ ÙˆØ§Ø³Ø¹Ø© Ù„Ù„ØºØ§ÙŠØ© Ù…ÙŠØ²Ø© ØªÙ‚Ø±ÙŠØ¨ Ø§Ù„Ù…Ø³Ø§ÙØ§Øª Ù…Ø­Ø±Ùƒ Photonic Engine Ù„Ù…Ø³ØªÙˆÙ‰ Ù…Ø°Ù‡Ù„ Ù…Ù† Ø§Ù„ØªÙØ§ØµÙŠÙ„ ÙˆØ§Ù„Ø£Ù„ÙˆØ§Ù† Ø¶Ø¨Ø· ØªÙ„Ù‚Ø§Ø¦ÙŠ Ù„Ù„Ø¹Ø¯Ø³Ø©', '500 * 750', '2022', 'XZ50581'),
(42, 'phone', '150', 'images/gaming-g64e9fae34_1280.jpg', 'Ù†Ø¸Ø§Ù… ÙƒØ§Ù…ÙŠØ±Ø§Øª Pro  ÙƒØ§Ù…ÙŠØ±Ø§ Ø±Ø¦ÙŠØ³ÙŠØ© 48MPâ€ ÙƒØ§Ù…ÙŠØ±Ø§ ÙˆØ§Ø³Ø¹Ø© Ù„Ù„ØºØ§ÙŠØ© Ù…ÙŠØ²Ø© ØªÙ‚Ø±ÙŠØ¨ Ø§Ù„Ù…Ø³Ø§ÙØ§Øª Ù…Ø­Ø±Ùƒ Photonic Engine Ù„Ù…Ø³ØªÙˆÙ‰ Ù…Ø°Ù‡Ù„ Ù…Ù† Ø§Ù„ØªÙØ§ØµÙŠÙ„ ÙˆØ§Ù„Ø£Ù„ÙˆØ§Ù† Ø¶Ø¨Ø· ØªÙ„Ù‚Ø§Ø¦ÙŠ Ù„Ù„Ø¹Ø¯Ø³Ø©', '500 * 750', '2022', 'XZ50581'),
(43, 'camera', '766', 'images/Martz90-Circle-Video-camera.ico', '0', '700', '2023', '08415dw41s'),
(44, 'laptop', '150', 'images/pexels-photo-3183132.png', 'Ù…Ù†ØªØ¬ Ø¹ØµØ±ÙŠ', '500 * 750', '2022', 'XZ50581'),
(45, 'laptop', '100', 'images/pexels-miguel-Ã¡-padriÃ±Ã¡n-19677.jpg', 'Ù†Ø¸Ø§Ù… ÙƒØ§Ù…ÙŠØ±Ø§Øª Pro  ÙƒØ§Ù…ÙŠØ±Ø§ Ø±Ø¦ÙŠØ³ÙŠØ© 48MPâ€ ÙƒØ§Ù…ÙŠØ±Ø§ ÙˆØ§Ø³Ø¹Ø© Ù„Ù„ØºØ§ÙŠØ© Ù…ÙŠØ²Ø© ØªÙ‚Ø±ÙŠØ¨ Ø§Ù„Ù…Ø³Ø§ÙØ§Øª Ù…Ø­Ø±Ùƒ Photonic Engine Ù„Ù…Ø³ØªÙˆÙ‰ Ù…Ø°Ù‡Ù„ Ù…Ù† Ø§Ù„ØªÙØ§ØµÙŠÙ„ ÙˆØ§Ù„Ø£Ù„ÙˆØ§Ù† Ø¶Ø¨Ø· ØªÙ„Ù‚Ø§Ø¦ÙŠ Ù„Ù„Ø¹Ø¯Ø³Ø©', '500 * 750', '2022', 'XZ50581'),
(47, 'Cheese is good ', '12', 'images/30C20BA4-50A1-4BF2-93E1-42E4E6FCC90F.png', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- بنية الجدول `sss`
--

CREATE TABLE `sss` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `sss`
--

INSERT INTO `sss` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES
(1, 'jaber', 'alasere', '1', '2023-03-21 19:14:37');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repass` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `repass`, `created_at`, `phone`) VALUES
(30, 'jaber', '123', '123', '2023-03-14 09:39:23', 0),
(32, '111', '$2y$10$cRIy44uc865kCRxt.3lqBu3ISEqzAvfJXPcLrbt3v6Nhi4nE9lymu', '111', '2023-03-21 21:51:38', 111),
(33, '33', '$2y$10$CXOTO94ZbVFI/Lj1Oe42r.Ozku/p77wQMUklFKMBRR9J35TZeoEU2', '33', '2023-03-21 21:54:04', 33),
(34, '1083056778', '$2y$10$/RDvjbJSEjztH7Gnx1aZoOSIWf1LyR75C87BCdqdfU2E/iqN6VKKe', '123', '2023-03-21 21:55:33', 123),
(35, '22', '$2y$10$37FuKWH40h3NJa9dGtxYQ.xwnGIwiuNwrKEbc8A72cIH67kUOEV26', '22', '2023-03-21 21:56:56', 22),
(36, 'ali123123', '$2y$10$HZpRM3xn2i7iRNA46oCiwuaes5Gst96FHL8IvHXSpLK3E/Vn1ejxa', '123', '2023-03-21 21:57:52', 123),
(37, '0533802042', '$2y$10$jNntS5Wxu8O9gF6Urq/8juA5.vwKmVWAqRTujzhcIudfA1mATHCRS', '123', '2023-03-21 21:58:18', 123),
(39, '533802042', '$2y$10$WhAmwD1.dtmNJLk/wU/zL.5xfhtUBqzwcuhV8xljVoin5R5cyXJXW', '123', '2023-03-21 22:01:07', 123),
(41, 'aa', '$2y$10$c1sbbkjW8dwCYZpWrv0i2.E4nAolsrPn8jYGm4G/.6YK4KmoSZOcC', '11', '2023-03-21 22:03:46', 0),
(43, '855555', '$2y$10$Orc6gXsW65kbfsfcHZRibuXqB/Vd6pHnJktiNR0pu1S0YSlCNy.1W', '555', '2023-03-21 22:06:29', 555),
(45, '11111', '$2y$10$EIxPQ9LKLUrBKEulYItHPOy5fL3Qqv3DzRVrV/Q7cazLNTxzBtvnS', '111', '2023-03-21 22:06:59', 1111),
(46, 'aaa', '$2y$10$uuWfcnlkIPNIa0RCM2CgKOPddvCp49t5Yl96tBkyRgR.LWTwzFZca', '555', '2023-03-21 22:07:13', 0),
(47, 'sss', '$2y$10$8WdQSDwzZj/42hFOn/bR.ugZal.rTRYYBMvqf2DQ6Q0CV0p8frD2S', '1', '2023-03-21 22:13:38', 0),
(48, '321', '$2y$10$gMlHQY1.eTiJACr2/VKJZuNkgcaE.r.DMOstTdOVxVKWQvpHvUHoS', '321', '2023-03-21 22:18:43', 321),
(49, 'jaber703', '$2y$10$NG9JHRK12fLXhV4MiCrSOe5u42naIAeZR0pbH.bud4fanLQJOn0DS', '123', '2023-03-22 06:09:14', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodact`
--
ALTER TABLE `prodact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss`
--
ALTER TABLE `sss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodact`
--
ALTER TABLE `prodact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `sss`
--
ALTER TABLE `sss`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
