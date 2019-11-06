-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: nov. 06, 2019 la 05:55 PM
-- Versiune server: 10.1.36-MariaDB
-- Versiune PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `project`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `cart`
--

INSERT INTO `cart` (`c_id`, `p_id`, `product_name`, `product_price`, `file_name`, `quantity`, `u_id`) VALUES
(1, 1, 'Vaporesso Revenger X', '350', 'res_e6eed49ee8f4a7daf14fac3d1be90161_full.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `pending_orders`
--

CREATE TABLE `pending_orders` (
  `po_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `cart_total` varchar(100) NOT NULL,
  `bill_fname` varchar(100) NOT NULL,
  `bill_lname` varchar(100) NOT NULL,
  `bill_add` varchar(100) NOT NULL,
  `bill_city` varchar(100) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_phone` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `pending_orders`
--

INSERT INTO `pending_orders` (`po_id`, `u_id`, `cart_total`, `bill_fname`, `bill_lname`, `bill_add`, `bill_city`, `bill_email`, `bill_phone`, `status`, `date`) VALUES
(1, 2, '1350', 'da', 'da', 'da', 'khi', 'da', 'd032190918421', 'delivered', '2019-11-06 16:15:07');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_des` mediumtext NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `file_ext` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `products`
--

INSERT INTO `products` (`p_id`, `product_name`, `product_category`, `product_price`, `product_des`, `file_name`, `file_path`, `file_ext`) VALUES
(1, 'Vaporesso Revenger X', 'Starter Kits', '350', 'The Revenger X is an incredible device, with incredible power, that\'s been specifically designed by the folks at Vaporesso to cover all of the expectations you have for an excellent kit, and go above-and-beyond. The touch-screen takes over for the traditional button-style format, without sacrificing the interactive capabilities of the menu functions. In addition, the kit features the new and improved NRG Tank, which features its GT coils that promise for a high volume of vapor and incredible flavor! \r\n\r\nIt is recommended that you use a Max VG blend with this tank.\r\n\r\nParameters:\r\n\r\nRevenger X Mod Size: 45mm * 89mm * 28mm\r\nVaporesso NRG Tank Size: 26.5mm * 56mm\r\nCell Type: Two 18650 cell (Not Included)\r\nTank Capacity: 5ml\r\nThread Type: 510 Thread\r\nPower Range: 5W - 220W\r\nRated Resistance Range: 0.05?-5? \r\nRated Temperature Range: 100-315°C/200-600°F(TC mode)\r\nKit Contains:\r\n\r\n(1) Revenger X MOD\r\n(1) Vaporesso NRG Tank\r\n(1) Extra Pyrex Glass Tube\r\n(1) GT8 Core 0.15? Quad coil Pre-installed in the tank\r\n(1) GT4 Core 0.15? Quad coil\r\n(1) USB Charging Cable\r\n(1) User Manual\r\nSpare Parts\r\n*This Device Requires (2) 18650 Battery*', 'res_e6eed49ee8f4a7daf14fac3d1be90161_full.jpg', 'C:/xampp/htdocs/e-commerce-master/uploads/', '.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `purchase_history`
--

CREATE TABLE `purchase_history` (
  `ph_id` int(11) NOT NULL,
  `oh` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` varchar(100) NOT NULL,
  `p_qty` varchar(100) NOT NULL,
  `u_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `purchase_history`
--

INSERT INTO `purchase_history` (`ph_id`, `oh`, `p_name`, `p_price`, `p_qty`, `u_id`, `date`) VALUES
(1, 1, 'Vaporesso Revenger X', '350', '1', 2, '2019-11-06 14:55:13');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`u_id`, `fname`, `lname`, `username`, `email`, `password`, `status`) VALUES
(1, 'Root', 'Admin', 'admin', 'admin@ecigora.com', 'admin', 'admin'),
(2, 'Rosu', 'Razvan', 'yungr', 'yungr@gmail.com', 'yungr', '');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexuri pentru tabele `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexuri pentru tabele `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexuri pentru tabele `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`ph_id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `purchase_history`
--
ALTER TABLE `purchase_history`
  MODIFY `ph_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
