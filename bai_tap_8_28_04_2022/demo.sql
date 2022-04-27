-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 09:21 AM
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
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `description`) VALUES
(1, 'PC GVN GAMING', 'Cấu hình phục vụ nhu cầu chơi game, giải trí và các tác vụ cơ bản.'),
(2, 'PC GVN VĂN PHÒNG', 'Cấu hình phục vụ nhu cầu giải trí và các tác vụ cơ bản.');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
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
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `sku`, `category_ids`, `name`, `description`, `image`, `create_date`, `update_date`) VALUES
(1, 'GVNPCGM1', '1, 2', 'GVN AXE M', 'Cấu hình chi tiết của PC Gaming GVN AXE M:\r\nMainboard: ASUS PRIME H510M-F\r\nCPU: Intel Core i3 10100F / 6MB / 4.3GHZ / 4 nhân 8 luồng / LGA 1200\r\nRAM: PNY XLR8 RGB DDR4 1x8GB 3200\r\nVGA: Palit GeForce GT 730 2G\r\nSSD: PNY CS900 240G 2.5\" Sata 3\r\nHHD: Có thể tùy chọn Nâng Cấp\r\nPSU: Jetek GEN450 - 80 Plus\r\nCase:Case XIGMATEK AERO 2F (2 fan RGB)', 'https://product.hstatic.net/1000026716/product/axe_c4d6d5bec05042fba49e325ea27b6e41.jpg', '2022-04-28', '2022-04-28'),
(2, 'GVNPCGM2', '1, 2', 'GVN IVY M', 'Thông số kỹ thuật:\r\nMainboard: ASUS PRIME H510M-F\r\nCPU: Intel Core i3 10100F / 6MB / 4.3GHZ / 4 nhân 8 luồng / LGA 1200\r\nRAM: PNY XLR8 1x8GB 3200 RGB\r\nVGA - Card đồ họa: GIGABYTE GeForce GTX 1650 OC Low Profile 4G\r\nHDD: Có thể tùy chọn Nâng cấp\r\nSSD: PNY CS900 240G 2.5\" Sata 3\r\nPSU: Jetek GEN450 - 80 Plus\r\nCase: 1st Player Fire Dancing V2-A (4 fan RGB)\r\nTản: DEEPCOOL GAMMAXX 400 XT', 'https://product.hstatic.net/1000026716/product/ivy_c469b20cd3c84f398b20176c012e5ff8.jpg', '2022-04-28', '2022-04-28'),
(3, 'GVNPCGM3', '1, 2', 'GVN RATCHET M', 'GVN Ratchet M\r\n- Mainboard: MSI MAG B560M MORTAR\r\n- CPU: Intel Core i5 11400F / 12MB / 4.4GHZ / 6 nhân 12 luồng / LGA 1200\r\n- RAM: PNY XLR8 RGB DDR4 1x8GB 3200\r\n- VGA: GIGABYTE GeForce GTX 1650 OC 4G\r\n- HDD: Có thể tùy chọn Nâng cấp\r\n- SSD: PNY CS900 240G 2.5\" Sata 3\r\n- PSU: SilverStone ST50F-ES230 - 80 Plus - 500W\r\n- Case: 1st Player Fire Dancing V2-A (4 fan RGB)\r\n- Tản Nhiệt: Cooler Master Hyper 212 ARGB	\r\n', 'https://product.hstatic.net/1000026716/product/ratchet_c6d03b5dee39455bbcb66144b29bcbfe.jpg', '2022-04-28', '2022-04-28'),
(4, 'GVNPCVP1', '2', 'GVN HOMEWORK PENTIUM', 'GVN Homework Pentium\r\nThông số kỹ thuật:\r\nMainboard: ASROCK H510M-HVS R2.0\r\nCPU: Intel Pentium G6405 / 4MB / 4.1GHz / 2 Nhân 4 Luồng / LGA 1200\r\nRAM: TeamGroup T-Force Vulcan Z Gray 1x8GB 3200\r\nHDD: Có thể tùy chọn Nâng cấp\r\nSSD: KIMTIGO 240GB 2.5\" SATA 3\r\nPSU: Xigmatek X-POWER III 350\r\nCase: Jetek EM4\r\n', 'https://product.hstatic.net/1000026716/product/hw_pentium_73a9b2f2b4584436b051bc13a87a3b47.jpg', '2022-04-28', '2022-04-28'),
(5, 'GVNPCVP2', '2', 'GVN HOMEWORK I3', 'Chi tiết cấu hình:\r\nMainboard: ASROCK H510M-HVS R2.0\r\nCPU: Intel Core i3 10105 / 6MB / 4.4GHZ / 4 nhân 8 luồng / LGA 1200\r\nRAM: TeamGroup T-Force Vulcan Z Gray 1x8GB 3200\r\nHDD: Có thể tùy chọn Nâng cấp	 \r\nSSD: KIMTIGO 240GB 2.5\" SATA 3\r\nPSU: Xigmatek X-POWER III 350\r\nCase:Jetek EM4', 'https://product.hstatic.net/1000026716/product/hw_i3_1e781b0a256f467db08aa26076c838b1.jpg', '2022-04-28', '2022-04-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
