-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2023 at 02:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffee_menu`
--

CREATE TABLE `coffee_menu` (
  `item` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `bagels` varchar(255) NOT NULL,
  `bagels_price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `coffee_menu`
--

INSERT INTO `coffee_menu` (`item`, `price`, `bagels`, `bagels_price`) VALUES
('espresso', 70, 'Croissants', 10),
('Americano', 35, 'Cookies', 5),
('Macchiato', 40, 'Cinnamon rolls', 15),
('Cappuccino', 45, 'Muffins', 7),
('3n1', 8, 'pan', 5);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `email`) VALUES
('admin', '$2y$10$ULp.bO3QNNCww2HuyNtjJOvnWEAMMSyH1lj/IuJ7szZ7V4bwsYX9S', 'yajzkie2@gmail.com'),
('admin', '$2y$10$1Y5ovKVB3qZBvwiR4XVeaOlPODwGFXdF6Keng7fhBknxvE8aJlsEa', 'yajzkie2@gmail.com'),
('jay', '$2y$10$yP3RrFDKNg9ULc.A0.0yYOWv8icg.y2euS6kYsr4K8Qmc8HGewZKq', 'yaj143sabalo@gmail.com'),
('Meryjie ', '$2y$10$3ZxO.naql7.sxs/dPD598eKtvw8T13M5BnbLYL5nncGstcqtWzW7y', 'mejmeking@gmail.com'),
('althea', '$2y$10$XplzGuVi.BiL8/PCi74k6eMWFUby5sT0QAdV8JkPtBBAZ6TooX1ke', 'yajzkie2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int NOT NULL,
  `order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `item_name`, `quantity`, `order_date`) VALUES
(1, 'jay', 'mocha', 3, '2023-11-11 15:59:54'),
(2, 'jay', 'mocha', 3, '2023-11-11 16:00:38'),
(3, 'jay', 'mocha', 3, '2023-11-11 16:02:15'),
(4, 'jay', 'mocha', 1, '2023-11-11 16:02:30'),
(5, 'jay', 'mocha', 1, '2023-11-11 16:02:44'),
(6, 'meryjie', 'black coffee', 3, '2023-11-11 16:03:16'),
(7, 'meryjie', 'americano', 1, '2023-11-11 17:16:50'),
(8, 'meryjie', 'americano', 1, '2023-11-11 17:17:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
