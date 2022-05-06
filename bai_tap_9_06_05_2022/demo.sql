-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 12:04 PM
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
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `description`) VALUES
(1, 'PC GVN GAMING', 'Cấu hình phục vụ nhu cầu chơi game, giải trí và các tác vụ cơ bản.'),
(2, 'PC GVN VĂN PHÒNG', 'Cấu hình phục vụ nhu cầu giải trí và các tác vụ cơ bản.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(100) NOT NULL,
  `category_ids` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `category_ids`, `name`, `description`, `image`, `create_date`, `update_date`) VALUES
(1, 'GVNPCGM1', '1, 2', 'GVN AXE M', 'Cấu hình chi tiết của PC Gaming GVN AXE M:<br>Mainboard: ASUS PRIME H510M-F<br>CPU: Intel Core i3 10100F / 6MB / 4.3GHZ / 4 nhân 8 luồng / LGA 1200<br>RAM: PNY XLR8 RGB DDR4 1x8GB 3200<br>VGA: Palit GeForce GT 730 2G<br>SSD: PNY CS900 240G 2.5', 'https://product.hstatic.net/1000026716/product/axe_c4d6d5bec05042fba49e325ea27b6e41.jpg', '2022-04-28', '2022-04-28'),
(2, 'GVNPCGM1', '1, 2', 'GVN AXE M', 'Cấu hình chi tiết của PC Gaming GVN AXE M:<br>Mainboard: ASUS PRIME H510M-F<br>CPU: Intel Core i3 10100F / 6MB / 4.3GHZ / 4 nhân 8 luồng / LGA 1200<br>RAM: PNY XLR8 RGB DDR4 1x8GB 3200<br>VGA: Palit GeForce GT 730 2G<br>SSD: PNY CS900 240G 2.5', 'https://product.hstatic.net/1000026716/product/axe_c4d6d5bec05042fba49e325ea27b6e41.jpg', '2022-04-28', '2022-04-28'),
(3, 'GVNPCGM1', '1, 2', 'GVN AXE M', 'Cấu hình chi tiết của PC Gaming GVN AXE M:<br>Mainboard: ASUS PRIME H510M-F<br>CPU: Intel Core i3 10100F / 6MB / 4.3GHZ / 4 nhân 8 luồng / LGA 1200<br>RAM: PNY XLR8 RGB DDR4 1x8GB 3200<br>VGA: Palit GeForce GT 730 2G<br>SSD: PNY CS900 240G 2.5', 'https://product.hstatic.net/1000026716/product/axe_c4d6d5bec05042fba49e325ea27b6e41.jpg', '2022-04-28', '2022-04-28'),
(4, 'GVNPCGM1', '1, 2', 'GVN AXE M', 'Cấu hình chi tiết của PC Gaming GVN AXE M:<br>Mainboard: ASUS PRIME H510M-F<br>CPU: Intel Core i3 10100F / 6MB / 4.3GHZ / 4 nhân 8 luồng / LGA 1200<br>RAM: PNY XLR8 RGB DDR4 1x8GB 3200<br>VGA: Palit GeForce GT 730 2G<br>SSD: PNY CS900 240G 2.5', 'https://product.hstatic.net/1000026716/product/axe_c4d6d5bec05042fba49e325ea27b6e41.jpg', '2022-04-28', '2022-04-28'),
(5, 'GVNPCGM1', '1, 2', 'GVN AXE M', 'Cấu hình chi tiết của PC Gaming GVN AXE M:<br>Mainboard: ASUS PRIME H510M-F<br>CPU: Intel Core i3 10100F / 6MB / 4.3GHZ / 4 nhân 8 luồng / LGA 1200<br>RAM: PNY XLR8 RGB DDR4 1x8GB 3200<br>VGA: Palit GeForce GT 730 2G<br>SSD: PNY CS900 240G 2.5', 'https://product.hstatic.net/1000026716/product/axe_c4d6d5bec05042fba49e325ea27b6e41.jpg', '2022-04-28', '2022-04-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
