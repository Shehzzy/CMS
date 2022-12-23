-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 09:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `f_name`, `email`, `password`, `status`, `created_at`) VALUES
(1, 'admin', 'CMSadmin@gmail.com', 'xeshcms1010', 1, '2022-12-16 20:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `hosp_id` int(11) NOT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `P_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `p_id` int(11) NOT NULL,
  `hos_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `selected_date` date NOT NULL,
  `selected_time` time NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `P_name`, `email`, `number`, `p_id`, `hos_id`, `v_id`, `selected_date`, `selected_time`, `status`, `created_at`) VALUES
(1, 'Zoya', 'zoya@gmail.com', '213131', 7, 1, 1, '2022-12-13', '12:37:00', 0, '2022-12-13 18:37:41'),
(17, 'John Naver', 'naver@gmail.com', '0334178264', 8, 2, 4, '2022-12-24', '22:05:00', 0, '2022-12-16 20:05:12'),
(18, 'Ali Khan', 'ali@gmail.com', '096482375', 2, 2, 1, '2022-12-21', '22:10:00', 0, '2022-12-21 19:07:07'),
(19, 'Waqas ali', 'wq12@gmail.com', '92216956424', 9, 1, 1, '2022-12-24', '09:51:00', 0, '2022-12-23 18:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `booking_status`
--

CREATE TABLE `booking_status` (
  `id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `cont_number` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `email`, `password`, `address`, `cont_number`, `city`, `created_at`) VALUES
(1, 'al khidmat', 'alkhidmat@gmail.com', '1234', 'Sadar,Karachi', 5656534, 'Karaci', '2022-12-09 19:44:02'),
(2, 'Shifa Hospital', 'shifah@gmail.com', 'shifa1234', 'Main Korangi Rd، near Kala Pul, Clifton, Karachi, Karachi City, Sindh', 210938123, 'Karachi', '2022-12-16 20:01:09'),
(3, 'Liaquat National Hospital', 'lnh@gmail.com', 'hjhj00', 'Stadium Road, Karachi', 21992604, 'Karachi', '2022-12-23 19:59:51'),
(4, 'Abbasi shaheed Hospital', 'ash@gmail.com', 'ashash', ' Block M, North Nazimabad, Karachi', 2342424, 'Karachi', '2022-12-23 20:16:49'),
(5, 'South City Hospital', 'sch@gmail.com', '', 'St-1 Shahrah-e-Firdousi, Block 3 Clifton', 34534532, 'Karachi', '2022-12-23 20:16:49'),
(6, 'Hashmanis Hospital', 'hsh@gmail.com', 'hashhosp', 'M A Jinnah Road, JM-75, Off M A Jinnah Road, Jacob Lines, Karachi', 2147483647, 'Karachi', '2022-12-23 20:16:49'),
(7, 'Pak International Hospital', 'pih@gmail.com', 'pihpih', '39-C, 22nd, East St, D.H.A. Phase 1 Sector A, DHA City', 23342423, 'Karachi', '2022-12-23 20:16:49'),
(8, 'Anum Hospital', 'anumh@gmail.com', 'annnn12', ' C24/76, Khokhrapar Number 2, Pak Kausar Town, Malir', 2165654, 'Karachi', '2022-12-23 20:16:49'),
(9, 'Taj Medical Complex Hospital', 'tmch@gmail.com', 'bvbvc54', 'Opposite Capri Cinema Central Jacob Lines, M. A. Jinnah Road, Saddar', 2147483647, 'Karachi', '2022-12-23 20:16:49'),
(10, 'Karachi Medical Complex Consultants Clinic', 'kmccc@gmail.com', 'kfiosd', 'Rae Ave, Block 16, Gulshan e Iqbal, Karachi', 2147483647, 'Karachi', '2022-12-23 20:16:49'),
(11, 'Altamash General Hospital', 'agh@gmail.com', 'terrfd', 'ST-9/A, block 1 clifton, Clifton, Karachi', 3535345, 'Karachi', '2022-12-23 20:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `m_number` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `f_name`, `l_name`, `email`, `pass`, `age`, `gender`, `dob`, `address`, `m_number`, `created_at`) VALUES
(2, 'Ali', 'Khan', 'alI@gmail.com', '1234', 17, '0', '2022', 'Malir', 938782347, '0000-00-00 00:00:00'),
(3, 'Ania', 'Hanif', 'hanif@gmail.com', '2345', 16, '0', '2022', 'Tariq road', 9878, '0000-00-00 00:00:00'),
(4, 'Shafaq', 'Fatima', 'shafaq@gmail.com', '151515', 20, '0', '2002', 'Model Colony', 12323424, '0000-00-00 00:00:00'),
(5, 'Ali', 'Khan', 'alI@gmail.com', '1234', 17, '0', '2022', 'Malir', 938782347, '0000-00-00 00:00:00'),
(6, 'Saad', 'Islam', 'saad@gmail.com', '00000', 21, '0', '2022', 'Model Colony', 938782347, '2022-12-11 19:56:47'),
(7, 'Zoya', 'Khan', 'zoya@gmail.com', '1234', 25, '0', '1998-02-13', 'nazimad Karachi', 324566677, '2022-12-13 16:39:45'),
(8, 'John', 'Naver', 'naver@gmail.com', 'naver34', 35, 'Male', '1980-02-10', 'Saddar', 2147483647, '2022-12-16 20:04:07'),
(9, 'Waqas', 'Ali', 'wq12@gmail.com', 'qwrr', 24, '', '1998-09-08', 'Opp.Arambagh Masjid Shahrah-e-Liaquat,karachi', 2147483647, '2022-12-23 18:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `pat_list`
--

CREATE TABLE `pat_list` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `m_number` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `Id` int(11) NOT NULL,
  `V_name` varchar(255) NOT NULL,
  `Availability` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`Id`, `V_name`, `Availability`) VALUES
(1, 'Pfizer–BioNTech', 1),
(2, 'Moderna', 1),
(3, 'CanSino', 1),
(4, 'SinoVac', 1),
(5, 'SinoPharm', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pat_id` (`pat_id`),
  ADD KEY `hosp_id` (`hosp_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `hos_id` (`hos_id`),
  ADD KEY `v_id` (`v_id`);

--
-- Indexes for table `booking_status`
--
ALTER TABLE `booking_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pat_list`
--
ALTER TABLE `pat_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `booking_status`
--
ALTER TABLE `booking_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pat_list`
--
ALTER TABLE `pat_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`pat_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`hosp_id`) REFERENCES `hospital` (`id`);

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`hos_id`) REFERENCES `hospital` (`id`),
  ADD CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`v_id`) REFERENCES `vaccine` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;