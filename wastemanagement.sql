-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2024 at 06:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wastemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `matricnumber` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `matricnumber`, `password`, `image`) VALUES
(1, 'posi', 'cazumuzuk@mailinator.com', '07012847395', '$2y$10$fPsCy6lIPE9gt1Zw54rU3.OUR0t.DhpFvL//AZ/Q3znULG5IEyYWG', '352797165_211409401790504_5531144661606814821_n.jpg'),
(2, 'ade', 'cazumuzuk@mailinator.com', '070', '$2y$10$JMYzWi77OqzXW2VgtkZzP.tV0zhHGbWf827m9324ZO2PD07sISODW', ''),
(3, 'ade', 'cazumuzuk@mailinator.com', '701', '$2y$10$404c7Q49e6knwRNJdlJqReeOHeGBNzFyz6Bvr4Yxmu6iqaEjoN3xu', ''),
(4, 'ade', 'cazumuzuk@mailinator.com', '07012847395', '$2y$10$UAjs9rderDGxGyHF8O.jXumWnuukzEjqMYhqsHESVKCwy/2fwjtWG', ''),
(5, 'ade', 'cazumuzuk@mailinator.com', '090', '$2y$10$sKL9AF5wavfnZS4JVw4aWeI3SLYQAJdpHifXydmtpIl85sl7hpov6', ''),
(6, 'ade', 'cazumuzuk@mailinator.com', '686', '$2y$10$gN1myy0MjsR6pai0/KbYruUjzSLnXmQItT2mRsx2K6hCw4MDozGV2', ''),
(7, 'ade', 'cazumuzuk@mailinator.com', '686', '$2y$10$1kxibek1bv88ql9Lb0Kc3OeibxZJQwfV5NmCr9yd3B.ZlRRtTMEVW', '452204883_478712948071419_2812751532280995739_n.jpg'),
(8, 'ade', 'cazumuzuk@mailinator.com', '385', '$2y$10$jSey5nJRW4ywjODAWKxJ7.NUk2j590Cyq03mUE7HouZWWDgBkOL0i', ''),
(9, 'ade', 'cazumuzuk@mailinator.com', '156', '$2y$10$SGGHFewzCmaZLfmvO5I3iudCQqJsDQDZ9eS1Upglt.veOsoHlEJTC', ''),
(10, 'ade', 'cazumuzuk@mailinator.com', '465', '$2y$10$0v0.OCR60ziCuR9aD3Fogeui5I2xsFfyCUZI64Q9eRgsrebJkVSja', ''),
(11, 'ade', 'cazumuzuk@mailinator.com', '164', '$2y$10$qo/RLz7ZzxVJ/ySYUew6CuFoYfYohHYZkoy1EmM0qV91.0KNWgBry', ''),
(12, 'ade', 'cazumuzuk@mailinator.com', '81', '$2y$10$B3YQq9lcLED30a8POpK4KODoiSupOqU9dsUgoctkzenFrZiIctg1O', ''),
(13, 'titi', 'cazumuzuk@mailinator.com', '001', '$2y$10$1pcguwSJHQ.gPMbiQV1EEuTZAiqCWafcnPahypsLH0VnHzchxCKFm', 'download (2).jpg'),
(14, 'joshua', 'josh@josh.com', '070', '$2y$10$iEDWKEX7vfGQFwVDg.0UdOebyOpCsVZParOERKB8up5.csfY0VDIS', '774bae2667d9afdf5a69479bd6c49252.jpg'),
(15, 'joshua', 'josh@josh.com', '070', '$2y$10$oBlnbVj0KzoKnAzpo3Ktxumo3VNW.5ysj.G27qpp9OPkQ75AG5Epa', '774bae2667d9afdf5a69479bd6c49252.jpg'),
(16, 'joshua', 'josh@josh.com', '070', '$2y$10$/5K2d4udKu8gY7G/pGLC6OPdsqKOaE38idqd.Wf1G1Jx4isj61hMW', '774bae2667d9afdf5a69479bd6c49252.jpg'),
(17, 'admin', 'admin@admin.com', '000', '$2y$10$dL5.MO.Bt5ZfKOtcvq/9EuUnADpC6OGRVAeIbMKs4wOswzOezzeR2', '774bae2667d9afdf5a69479bd6c49252.jpg'),
(18, 'amina', 'joy@gmail.com', '080', '$2y$10$.CHM9y87yiLXEuvSi0hum.B1ZiN5kdeBOjIyOeuYxMf/S3iUgAtdi', 'WhatsApp Image 2024-05-28 at 10.25.32 PM.jpeg'),
(19, 'ay', 'josh@josh.com', '005', '$2y$10$D967cNMDu5bi9pxHEkJAtuz3qPC3/zi10eBJ6hudV2BFn8b.DrUoq', '80831664_112836640223867_746331106906734592_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
