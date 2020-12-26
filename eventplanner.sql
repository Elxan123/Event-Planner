-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 12:19 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventplanner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE `checklist` (
  `id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `place` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name_az` varchar(50) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name_az`, `name_en`, `name_ru`) VALUES
(3, 'Baki', 'Baku', 'Baku'),
(4, 'Sumqayit', 'Sumgayit', 'Sumgayit'),
(5, 'Gence', 'Ganja', 'Ganja');

-- --------------------------------------------------------

--
-- Table structure for table `ctg_estab`
--

CREATE TABLE `ctg_estab` (
  `id` int(11) NOT NULL,
  `estab_id` int(11) NOT NULL,
  `event_ctg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ctg_estab`
--

INSERT INTO `ctg_estab` (`id`, `estab_id`, `event_ctg_id`) VALUES
(1, 3, 1),
(2, 3, 3),
(3, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ctg_provider`
--

CREATE TABLE `ctg_provider` (
  `id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `event_ctg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ctg_provider`
--

INSERT INTO `ctg_provider` (`id`, `provider_id`, `event_ctg_id`) VALUES
(1, 2, 1),
(2, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`) VALUES
(10);

-- --------------------------------------------------------

--
-- Table structure for table `estab`
--

CREATE TABLE `estab` (
  `user_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about_az` text NOT NULL,
  `about_ru` text NOT NULL,
  `about_en` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  `address_az` varchar(255) NOT NULL,
  `address_ru` varchar(255) NOT NULL,
  `address_en` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `estab`
--

INSERT INTO `estab` (`user_id`, `city_id`, `name`, `about_az`, `about_ru`, `about_en`, `img`, `instagram`, `facebook`, `lat`, `lon`, `address_az`, `address_ru`, `address_en`, `status`) VALUES
(3, 3, 'Establishment Name', 'About : Azerbaijan (Optional)', 'About : Russian (Optional)', 'About : English (Optional)', 'ad.jpg', 'Instagram Link (Optional)', 'Facebook (Optional)', 0, 0, 'Adress In Azerbaijan (Optional)', 'Adress In English (Optional)', 'Adress In English (Optional)', 1),
(5, 4, 'asdasd', 'ads', 'asdas', 'asdd', 'image-2020-12-21-16-35-52.png', 'asdas', 'asd', 40, 50, 'Adress In Azerbaijan (Optional)', 'Adress In Russian (Optional)', 'Adress In English (Optional)', 1),
(6, 3, 'asdasdas', 'ads', '', '', 'capture.PNG', 'ada', 'ad', 0, 0, 'adasd', 'sda', 'asda', 1),
(7, 4, 'asdas', 'ads', '', '', 'image-2020-12-21-16-39-29.png', 'ada', 'ad', 40.403058738875764, 49.87847791559144, 'adasd', 'sda', 'asda', 1),
(8, 4, 'test Name', 'About : Azerbaijan (Optional)', 'About : Russian (Optional)', 'About : English (Optional)', 'image-2020-12-21-16-35-52.png', 'Instagram Link (Optional)', 'Facebook (Optional)', 40.401441049850064, 49.878617390460214, 'asdasd', 'asdsad', 'asdsad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `provider_status` tinyint(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `estab_id` int(11) NOT NULL,
  `event_start` date NOT NULL,
  `event_end` date NOT NULL,
  `estab_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `customer_id`, `provider_id`, `provider_status`, `title`, `description`, `estab_id`, `event_start`, `event_end`, `estab_status`) VALUES
(7, 10, 2, 0, 'adasd', 'asdasdasd', 0, '2020-12-09', '2020-12-22', 0),
(8, 10, 2, 0, 'adasd', 'asdasdasd', 0, '2020-12-09', '2020-12-22', 0),
(9, 10, 2, 0, 'adasdad1231231', 'asdasdasd', 0, '2020-12-09', '2020-12-22', 0),
(10, 10, 2, 0, '1221321', '123213', 0, '2020-12-16', '2020-12-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_ctg`
--

CREATE TABLE `event_ctg` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_ctg`
--

INSERT INTO `event_ctg` (`id`, `type_id`, `name_az`, `name_en`, `name_ru`, `img`) VALUES
(1, 1, 'Ad gunuuu', 'Birthday', 'Birthday', 'friends.jpg'),
(3, 2, 'meeting', 'meeting', 'meeting', 'orta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE `event_type` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`id`, `type`) VALUES
(1, 'personal'),
(2, 'corporate');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_estab`
--

CREATE TABLE `gallery_estab` (
  `id` int(11) NOT NULL,
  `estab_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_provider`
--

CREATE TABLE `gallery_provider` (
  `id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery_provider`
--

INSERT INTO `gallery_provider` (`id`, `provider_id`, `img`) VALUES
(2, 9, 'default.png'),
(3, 2, '5d5bda405449c--1-1.jpg'),
(4, 2, '5d5bda405449c2.jpg'),
(5, 2, '5de91909eafa87.jpg'),
(6, 2, '73.png'),
(7, 2, '450px-azeri-manat-symbol-svg4.png'),
(8, 2, '614.png');

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `user_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `about_az` text NOT NULL,
  `about_en` text NOT NULL,
  `about_ru` text NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`user_id`, `city_id`, `img`, `about_az`, `about_en`, `about_ru`, `instagram`, `facebook`, `status`) VALUES
(2, 3, 'all-kinds-electronic-equipment-testing-instruments-electronic-laboratory-laboratory-electronic-equipment-device-134261658.jpg', 'sdas', 'asda', 'asda', 'asdasd', 'adad', 1),
(9, 3, 'yenilik.jpg', 'Provider Provider', 'ProviderProvider', 'ProviderProvider', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, 'Tort', 'Paste', 'Paste', 'Torta', 'Paste dsad asdsa jaskas kjsadh jsdhj', 'Paste daddd'),
(3, 'sdd', 'asda', 'sdasd', 'asd', 'sdas', 'ddassd'),
(4, 'da', 'dasd', 'asd', 'asd', 'sdad', 'das');

-- --------------------------------------------------------

--
-- Table structure for table `service_event`
--

CREATE TABLE `service_event` (
  `id` int(11) NOT NULL,
  `service_provider_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_event`
--

INSERT INTO `service_event` (`id`, `service_provider_id`, `event_id`) VALUES
(1, 1, 7),
(2, 2, 7),
(3, 1, 8),
(4, 2, 8),
(5, 1, 9),
(6, 3, 9),
(7, 2, 10),
(8, 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`id`, `service_id`, `provider_id`, `price`) VALUES
(1, 1, 9, 344),
(2, 3, 9, 100),
(3, 4, 9, 123);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type_id`, `name`, `surname`, `email`, `mobile`, `password`, `birthday`) VALUES
(1, 1, 'admin', 'admin', 'admin@admin.com', '0550000000', 'admin', '2020-12-02'),
(2, 2, 'Provider1', 'Provider', 'Provider@provider.com', '0500000000', 'provider', '2020-12-01'),
(3, 3, 'Name', 'Surname', 'Estab@estab.com', '1111', 'estab', '2020-12-16'),
(4, 4, 'User', 'User', 'user@user.com', '0990000000', 'user', '2020-12-01'),
(5, 3, 'adad', 'asds', 'asd', '12321313', 'asdas', '2020-12-24'),
(6, 3, 'Cebrayil', 'Huseynli', '', 'asda', 'asdasd', '2020-12-24'),
(7, 3, 'asddada', 'asda', '', '23123213', 'asdasd', '2020-12-09'),
(8, 3, 'Cavid', 'lalayev', 'Email (Optional)', '21313', 'estab', '2020-12-23'),
(9, 2, 'Elxan', 'Aslanov', '', '+994552555555', 'provider', '2020-12-01'),
(10, 4, 'Elxan', 'Aslanov', 'elxan@elxan.com', '994555555', '123123', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `checklist`
--
ALTER TABLE `checklist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provider_id` (`provider_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctg_estab`
--
ALTER TABLE `ctg_estab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estab_id` (`estab_id`),
  ADD KEY `event_ctg_id` (`event_ctg_id`);

--
-- Indexes for table `ctg_provider`
--
ALTER TABLE `ctg_provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provider_id` (`provider_id`),
  ADD KEY `event_ctg_id` (`event_ctg_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `estab`
--
ALTER TABLE `estab`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `estab_id` (`estab_id`),
  ADD KEY `provider_id` (`provider_id`);

--
-- Indexes for table `event_ctg`
--
ALTER TABLE `event_ctg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_estab`
--
ALTER TABLE `gallery_estab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estab_id` (`estab_id`);

--
-- Indexes for table `gallery_provider`
--
ALTER TABLE `gallery_provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provider_id` (`provider_id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_event`
--
ALTER TABLE `service_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `service_id` (`service_provider_id`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `provider_id` (`provider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checklist`
--
ALTER TABLE `checklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ctg_estab`
--
ALTER TABLE `ctg_estab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ctg_provider`
--
ALTER TABLE `ctg_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `event_ctg`
--
ALTER TABLE `event_ctg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_type`
--
ALTER TABLE `event_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery_estab`
--
ALTER TABLE `gallery_estab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_provider`
--
ALTER TABLE `gallery_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_event`
--
ALTER TABLE `service_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `checklist`
--
ALTER TABLE `checklist`
  ADD CONSTRAINT `checklist_ibfk_1` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ctg_estab`
--
ALTER TABLE `ctg_estab`
  ADD CONSTRAINT `ctg_estab_ibfk_1` FOREIGN KEY (`event_ctg_id`) REFERENCES `event_ctg` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ctg_estab_ibfk_2` FOREIGN KEY (`estab_id`) REFERENCES `estab` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ctg_provider`
--
ALTER TABLE `ctg_provider`
  ADD CONSTRAINT `ctg_provider_ibfk_1` FOREIGN KEY (`event_ctg_id`) REFERENCES `event_ctg` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ctg_provider_ibfk_2` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `estab`
--
ALTER TABLE `estab`
  ADD CONSTRAINT `estab_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estab_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_ctg`
--
ALTER TABLE `event_ctg`
  ADD CONSTRAINT `event_ctg_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `event_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery_estab`
--
ALTER TABLE `gallery_estab`
  ADD CONSTRAINT `gallery_estab_ibfk_1` FOREIGN KEY (`estab_id`) REFERENCES `estab` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery_provider`
--
ALTER TABLE `gallery_provider`
  ADD CONSTRAINT `gallery_provider_ibfk_1` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `providers`
--
ALTER TABLE `providers`
  ADD CONSTRAINT `providers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `providers_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

--
-- Constraints for table `service_event`
--
ALTER TABLE `service_event`
  ADD CONSTRAINT `service_event_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `service_event_ibfk_3` FOREIGN KEY (`service_provider_id`) REFERENCES `service_provider` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD CONSTRAINT `service_provider_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_provider_ibfk_2` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
