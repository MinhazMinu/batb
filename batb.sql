-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 08:08 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minhaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `batb`
--

CREATE TABLE `batb` (
  `id` int(20) NOT NULL,
  `name` varchar(256) COLLATE utf32_croatian_ci NOT NULL,
  `age` int(20) NOT NULL,
  `conducted_by_representative` varchar(256) COLLATE utf32_croatian_ci NOT NULL,
  `capsule_offer` varchar(256) COLLATE utf32_croatian_ci NOT NULL,
  `full_flavoured_smoke` varchar(256) COLLATE utf32_croatian_ci NOT NULL,
  `Blueberry_and_lemon_flavour` varchar(256) COLLATE utf32_croatian_ci NOT NULL,
  `primary_brand` varchar(256) COLLATE utf32_croatian_ci NOT NULL,
  `secondary_brand` varchar(256) COLLATE utf32_croatian_ci NOT NULL,
  `profession` varchar(256) COLLATE utf32_croatian_ci NOT NULL,
  `job_business_study` varchar(256) COLLATE utf32_croatian_ci NOT NULL,
  `express_thanks` varchar(256) COLLATE utf32_croatian_ci NOT NULL,
  `call_status` varchar(256) COLLATE utf32_croatian_ci NOT NULL,
  `call_remarks` varchar(256) COLLATE utf32_croatian_ci NOT NULL,
  `call_check_required` varchar(256) COLLATE utf32_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

--
-- Dumping data for table `batb`
--

INSERT INTO `batb` (`id`, `name`, `age`, `conducted_by_representative`, `capsule_offer`, `full_flavoured_smoke`, `Blueberry_and_lemon_flavour`, `primary_brand`, `secondary_brand`, `profession`, `job_business_study`, `express_thanks`, `call_status`, `call_remarks`, `call_check_required`) VALUES
(2, 'a', 33, 'aa', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1'),
(3, 'a', 33, 'aa', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1'),
(4, 'aa', 2, 'ss', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batb`
--
ALTER TABLE `batb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batb`
--
ALTER TABLE `batb`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
