-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql109.byetcluster.com
-- Generation Time: Nov 10, 2022 at 12:34 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_32958604_logistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `range` varchar(500) NOT NULL,
  `price_km` int(11) NOT NULL,
  `max_weight` int(64) NOT NULL,
  `max_width` int(64) NOT NULL,
  `max_height` int(64) NOT NULL,
  `comments` varchar(5000) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `image`, `range`, `price_km`, `max_weight`, `max_width`, `max_height`, `comments`, `added_at`) VALUES
(22, 'Andreani', 'http://www.cabb.org.ar/wp-content/uploads/2020/11/Andreani.png', 'Nacional', 11, 8000, 10, 10, '     Grandes avances en I+D       ', '2022-11-10 16:35:10'),
(23, 'Correo Argentino', 'https://yt3.ggpht.com/553_SSqbaWlrt_kmf0Bq2jql5eI-yyWoBu5Lc5xHSkOUvVbqq4SRSOkDe-3i8gjWD18fBHnY2A=s900-c-k-c0x00ffffff-no-rj', 'Internacional', 14, 10000, 15, 10, '  Refactorización de terminales  ', '2022-11-10 02:59:38'),
(24, 'Pickit', 'https://cdn.shopify.com/s/files/1/0608/2822/1695/products/pickit.png?v=1640099282', 'Urbano', 10, 100, 4, 2, '   Courier ML grandes urbes   ', '2022-11-10 02:59:29'),
(27, 'OCA', 'https://upload.wikimedia.org/wikipedia/commons/5/58/Logooca.png', 'Nacional', 13, 5000, 10, 8, ' Proceso de renovación ', '2022-11-10 02:59:23'),
(28, 'OCASA', 'https://seguimientodeenvio.com/wp-content/uploads/2021/09/1632653911532.jpg', 'Nacional', 9, 500, 4, 5, ' Courier nacional  ', '2022-11-10 02:59:13'),
(30, 'Urbano', 'https://media-exp1.licdn.com/dms/image/C4D0BAQHMPY0ZESGgTw/company-logo_200_200/0/1572368685857?e=2147483647&v=beta&t=HHSCXLL6uYbdSqtyUrIiRqIyLXqrnUVpKrAhXczX-j0', 'Urbano', 9, 200, 3, 4, ' Courier, tarifas bajas   ', '2022-11-10 02:59:00'),
(31, 'HOP', 'https://media-exp1.licdn.com/dms/image/C4D0BAQFJuQEp0lpaTA/company-logo_200_200/0/1600356366307?e=2147483647&v=beta&t=yMM_SMQMtBs-7197otQXE-ArV48w8CduU08z8mfibLY', 'Urbano', 8, 250, 6, 4, ' Courier Urbano   ', '2022-11-10 02:58:25'),
(32, 'Via Cargo', 'https://media-exp1.licdn.com/dms/image/C4D0BAQGZ7gbWVeAhNw/company-logo_200_200/0/1600874233260?e=2147483647&v=beta&t=hjRuyS72UwSCzfjkcqh0uDSEsga-gVlsspZdCUYuprc', 'Nacional', 15, 2000, 10, 8, 'Grandes capacidades de carga  ', '2022-11-10 02:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `adress` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `name`, `lastname`, `adress`) VALUES
(1, 'laingard', 'lolo', 'emiemi', 'Emilio', 'Escoliano', 'siempreviva'),
(11, 'brendi', 'Maruchan', 'brendadsa', 'bren', 'blonc', 'asndj'),
(12, 'gody', 'godines', 'lala', 'Gordini', 'Gordinis', 'asdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
