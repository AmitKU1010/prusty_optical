-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 10:59 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prusty`
--

-- --------------------------------------------------------

--
-- Table structure for table `coustomer_prusrty`
--

CREATE TABLE `coustomer_prusrty` (
  `id` int(11) NOT NULL,
  `coustomer_name` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `coustomer_date` varchar(50) NOT NULL,
  `coustomer_address` varchar(50) NOT NULL,
  `coustomer_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coustomer_prusrty`
--

INSERT INTO `coustomer_prusrty` (`id`, `coustomer_name`, `mobile_number`, `coustomer_date`, `coustomer_address`, `coustomer_email`) VALUES
(3, 'sukha', '9000000000', '2000-01-01', 'ngf', ',jghfhfh'),
(4, 'oda', '98767565677', '2000-01-01', 'kjggf', 'jghgfd');

-- --------------------------------------------------------

--
-- Table structure for table `direct_sale_form_one`
--

CREATE TABLE `direct_sale_form_one` (
  `id` int(11) NOT NULL,
  `coustomer_name` varchar(50) NOT NULL,
  `invoice_number` varchar(50) NOT NULL,
  `coustomer_date` varchar(50) NOT NULL,
  `total_cost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `direct_sale_form_one`
--

INSERT INTO `direct_sale_form_one` (`id`, `coustomer_name`, `invoice_number`, `coustomer_date`, `total_cost`) VALUES
(113, 'sukha', '100', '2200-01-01', '1800000');

-- --------------------------------------------------------

--
-- Table structure for table `direct_sale_form_two`
--

CREATE TABLE `direct_sale_form_two` (
  `id` int(11) NOT NULL,
  `direct_sale_form_one_id` varchar(50) NOT NULL,
  `select_model` varchar(50) NOT NULL,
  `hsn_code` varchar(50) NOT NULL,
  `model_price` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `cgst` varchar(50) NOT NULL,
  `sgst` varchar(50) NOT NULL,
  `total_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `direct_sale_form_two`
--

INSERT INTO `direct_sale_form_two` (`id`, `direct_sale_form_one_id`, `select_model`, `hsn_code`, `model_price`, `description`, `quantity`, `cgst`, `sgst`, `total_price`) VALUES
(60, '113', 'samsung', 'fazps', '2000', 'htft', '100', '100', '100', '600000'),
(61, '113', 'nokia', 'fzzzz', '900', 'mhmhhtf', '200', '200', '200', '900000');

-- --------------------------------------------------------

--
-- Table structure for table `eyetest_report_one`
--

CREATE TABLE `eyetest_report_one` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(50) NOT NULL,
  `patientname` varchar(111) NOT NULL,
  `age` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `address` varchar(111) NOT NULL,
  `patient_date` date NOT NULL,
  `d_l_sph` float NOT NULL,
  `d_l_cyl` float NOT NULL,
  `d_l_axis` int(20) NOT NULL,
  `d_l_vision` varchar(20) NOT NULL,
  `d_r_sph` float NOT NULL,
  `d_r_cyl` float NOT NULL,
  `d_r_axis` int(20) NOT NULL,
  `d_r_vision` varchar(20) NOT NULL,
  `r_l_sph` float NOT NULL,
  `r_l_cyl` float NOT NULL,
  `r_l_axis` int(20) NOT NULL,
  `r_l_vision` varchar(20) NOT NULL,
  `r_r_sph` float NOT NULL,
  `r_r_cyl` float NOT NULL,
  `r_r_axis` int(20) NOT NULL,
  `r_r_vision` varchar(20) NOT NULL,
  `total_price_one` varchar(50) NOT NULL,
  `charges_of_glass` varchar(50) NOT NULL,
  `tax` varchar(50) NOT NULL,
  `advance` varchar(111) NOT NULL,
  `balance` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eyetest_report_one`
--

INSERT INTO `eyetest_report_one` (`id`, `bill_no`, `patientname`, `age`, `contact_number`, `address`, `patient_date`, `d_l_sph`, `d_l_cyl`, `d_l_axis`, `d_l_vision`, `d_r_sph`, `d_r_cyl`, `d_r_axis`, `d_r_vision`, `r_l_sph`, `r_l_cyl`, `r_l_axis`, `r_l_vision`, `r_r_sph`, `r_r_cyl`, `r_r_axis`, `r_r_vision`, `total_price_one`, `charges_of_glass`, `tax`, `advance`, `balance`) VALUES
(47, '', 'xvxv', '', 'fffhgf', 'jyfhf', '2000-12-01', 1, 1, 1, '1', 1, 1, 1, '1', 1, 1, 1, '1', 1, 1, 1, '1', '81200', '100', '10', '200', '89230');

-- --------------------------------------------------------

--
-- Table structure for table `eyetest_report_two`
--

CREATE TABLE `eyetest_report_two` (
  `id` int(11) NOT NULL,
  `eye_test_form_one_id` varchar(50) NOT NULL,
  `select_model` varchar(50) NOT NULL,
  `hsn_code` varchar(50) NOT NULL,
  `model_price` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `cgst` varchar(50) NOT NULL,
  `sgst` varchar(50) NOT NULL,
  `total_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eyetest_report_two`
--

INSERT INTO `eyetest_report_two` (`id`, `eye_test_form_one_id`, `select_model`, `hsn_code`, `model_price`, `description`, `quantity`, `cgst`, `sgst`, `total_price`) VALUES
(55, '47', 'samsung', 'fazps', '2000', 'ffhgfgh', '20', '20', '20', '56000'),
(56, '47', 'nokia', 'fzzzz', '900', 'jyfhgfh', '20', '20', '20', '25200');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `id` int(11) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `hsn_code` varchar(50) NOT NULL,
  `model_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `model_name`, `hsn_code`, `model_price`) VALUES
(7, 'samsung', 'fazps', '2000'),
(8, 'nokia', 'fzzzz', '900'),
(9, 'iphone 6s', '7876', '60000');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_form_one`
--

CREATE TABLE `purchase_form_one` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `invoice_number` varchar(50) NOT NULL,
  `supplier_date` varchar(50) NOT NULL,
  `total_cost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_form_one`
--

INSERT INTO `purchase_form_one` (`id`, `supplier_name`, `invoice_number`, `supplier_date`, `total_cost`) VALUES
(65, 'nandini milk', 'stghrtty', '2000-01-01', '50700000'),
(66, 'jghgjhgjhg', '100', '2000-10-10', '600000'),
(67, 'jghgjhgjhg', 'e5678688', '2000-01-01', '870000'),
(68, 'kukuri', '100', '2000-01-01', '1518000'),
(69, 'kukuri', '1000', '2000-01-01', '870000');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_form_two`
--

CREATE TABLE `purchase_form_two` (
  `id` int(11) NOT NULL,
  `purchase_form_one_id` varchar(50) NOT NULL,
  `select_model` varchar(50) NOT NULL,
  `hsn_code` varchar(50) NOT NULL,
  `model_price` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `cgst` varchar(50) NOT NULL,
  `sgst` varchar(50) NOT NULL,
  `total_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_form_two`
--

INSERT INTO `purchase_form_two` (`id`, `purchase_form_one_id`, `select_model`, `hsn_code`, `model_price`, `description`, `quantity`, `cgst`, `sgst`, `total_price`) VALUES
(25, '65', 'samsung', 'fazps', '2000', 'ghfgfg', '2000', '1000', '100', '48000000'),
(26, '65', 'nokia', 'fzzzz', '900', 'hmgjfgh', '1000', '100', '100', '2700000'),
(27, '66', 'samsung', 'fazps', '2000', 'gfthh', '100', '100', '100', '600000'),
(28, '67', 'samsung', 'fazps', '2000', '1000', '100', '100', '100', '600000'),
(29, '67', 'nokia', 'fzzzz', '900', '1000', '100', '100', '100', '270000'),
(30, '68', 'samsung', 'fazps', '2000', 'mhfgdgh', '100', '100', '100', '600000'),
(31, '68', 'nokia', 'fzzzz', '900', 'ghffh', '200', '200', '210', '918000'),
(32, '69', 'samsung', 'fazps', '2000', '100', '100', '100', '100', '600000'),
(33, '69', 'nokia', 'fzzzz', '900', '100', '100', '100', '100', '270000');

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE `stock_details` (
  `id` int(11) NOT NULL,
  `model_name` varchar(555) NOT NULL,
  `hsn_from_stock_details` varchar(555) NOT NULL,
  `stock_in` varchar(555) NOT NULL,
  `stock_out` varchar(555) NOT NULL,
  `available` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`id`, `model_name`, `hsn_from_stock_details`, `stock_in`, `stock_out`, `available`) VALUES
(44, 'nokia', 'fzzzz', '14400', '13100', ''),
(45, 'samsung', 'fazps', '13400', '10400', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `gstin_number` varchar(50) NOT NULL,
  `supplier_date` varchar(50) NOT NULL,
  `supplier_address` varchar(50) NOT NULL,
  `supplier_email` varchar(50) NOT NULL,
  `supplier_pan_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_name`, `mobile_number`, `gstin_number`, `supplier_date`, `supplier_address`, `supplier_email`, `supplier_pan_number`) VALUES
(1, 'jghgjhgjhg', 'jhgjhgjhg', 'jgjhg', '2000-01-01', 'nbnvbbnvn', 'vhbhhm', 'hvhvnv'),
(2, 'nandini milk', '8763909110', 'dfvxvx', '2000-01-01', 'sankhachila', 'sahoosambit@gmail.com', 'FAZPS2545'),
(3, 'kukuri', 'u6756466', 'gnfdh', '2000-01-01', 'j,ggndf', 'hdhdh', 'hghfh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_name`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coustomer_prusrty`
--
ALTER TABLE `coustomer_prusrty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `direct_sale_form_one`
--
ALTER TABLE `direct_sale_form_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `direct_sale_form_two`
--
ALTER TABLE `direct_sale_form_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eyetest_report_one`
--
ALTER TABLE `eyetest_report_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eyetest_report_two`
--
ALTER TABLE `eyetest_report_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_form_one`
--
ALTER TABLE `purchase_form_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_form_two`
--
ALTER TABLE `purchase_form_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coustomer_prusrty`
--
ALTER TABLE `coustomer_prusrty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `direct_sale_form_one`
--
ALTER TABLE `direct_sale_form_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `direct_sale_form_two`
--
ALTER TABLE `direct_sale_form_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `eyetest_report_one`
--
ALTER TABLE `eyetest_report_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `eyetest_report_two`
--
ALTER TABLE `eyetest_report_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `purchase_form_one`
--
ALTER TABLE `purchase_form_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `purchase_form_two`
--
ALTER TABLE `purchase_form_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
