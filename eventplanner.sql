-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Ara 2020, 11:58:43
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eventplanner`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `checklist`
--

CREATE TABLE `checklist` (
  `id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `place` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name_az` varchar(50) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `city`
--

INSERT INTO `city` (`id`, `name_az`, `name_en`, `name_ru`) VALUES
(3, 'Baki', 'Baku', 'Baku'),
(4, 'Sumqayit', 'Sumgayit', 'Sumgayit'),
(5, 'Gence', 'Ganja', 'Ganja');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ctg_estab`
--

CREATE TABLE `ctg_estab` (
  `id` int(11) NOT NULL,
  `estab_id` int(11) NOT NULL,
  `event_ctg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ctg_estab`
--

INSERT INTO `ctg_estab` (`id`, `estab_id`, `event_ctg_id`) VALUES
(4, 16, 1),
(5, 16, 3),
(6, 17, 1),
(7, 17, 3),
(8, 18, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ctg_provider`
--

CREATE TABLE `ctg_provider` (
  `id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `event_ctg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ctg_provider`
--

INSERT INTO `ctg_provider` (`id`, `provider_id`, `event_ctg_id`) VALUES
(3, 11, 1),
(4, 11, 3),
(7, 12, 1),
(8, 12, 3),
(9, 13, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customer`
--

CREATE TABLE `customer` (
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `customer`
--

INSERT INTO `customer` (`user_id`) VALUES
(10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `estab`
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
-- Tablo döküm verisi `estab`
--

INSERT INTO `estab` (`user_id`, `city_id`, `name`, `about_az`, `about_ru`, `about_en`, `img`, `instagram`, `facebook`, `lat`, `lon`, `address_az`, `address_ru`, `address_en`, `status`) VALUES
(16, 3, 'Demo Cafe1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'artsadmin-cafe-77-scaled.jpg', 'https://www.instagram.com/', 'https://www.facebook.com/', 40.40148271055728, 49.87199769861146, '28 may street near the samed vurgun park', '28 may street near the samed vurgun park', '28 may street near the samed vurgun park', 1),
(17, 3, 'Demo Cafe2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'cafe-tasarimi-ic-mimarlik-5.jpg', 'https://www.instagram.com/', 'https://www.facebook.com/', 0, 0, '28 may street near the samed vurgun park', '28 may street near the samed vurgun park', '28 may street near the samed vurgun park', 1),
(18, 3, 'Demo Cafe3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'images.jpg', 'https://www.instagram.com/', 'https://www.facebook.com/', 0, 0, '28 may street near the samed vurgun park', '28 may street near the samed vurgun park', '28 may street near the samed vurgun park', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `events`
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
-- Tablo döküm verisi `events`
--

INSERT INTO `events` (`id`, `customer_id`, `provider_id`, `provider_status`, `title`, `description`, `estab_id`, `event_start`, `event_end`, `estab_status`) VALUES
(7, 10, 2, 0, 'adasd', 'asdasdasd', 0, '2020-12-09', '2020-12-22', 0),
(8, 10, 2, 0, 'adasd', 'asdasdasd', 0, '2020-12-09', '2020-12-22', 0),
(9, 10, 2, 0, 'adasdad1231231', 'asdasdasd', 0, '2020-12-09', '2020-12-22', 0),
(10, 10, 2, 0, '1221321', '123213', 3, '2020-12-16', '2020-12-15', 0),
(11, 10, 0, 0, 'asdas', 'asadad', 3, '2020-12-29', '2020-12-22', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `event_ctg`
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
-- Tablo döküm verisi `event_ctg`
--

INSERT INTO `event_ctg` (`id`, `type_id`, `name_az`, `name_en`, `name_ru`, `img`) VALUES
(1, 1, 'Birthday', 'Birthday', 'Birthday', 'friends.jpg'),
(3, 2, 'Concert', 'Concert', 'Concert', 'orta.jpg'),
(4, 2, 'Meeting', 'Meeting', 'Meeting', 'orta.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `event_type`
--

CREATE TABLE `event_type` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `event_type`
--

INSERT INTO `event_type` (`id`, `type`) VALUES
(1, 'Personal'),
(2, 'Corporate');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gallery_estab`
--

CREATE TABLE `gallery_estab` (
  `id` int(11) NOT NULL,
  `estab_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `gallery_estab`
--

INSERT INTO `gallery_estab` (`id`, `estab_id`, `img`) VALUES
(8, 16, '1596871829-kafe-genel-gorunum.jpg'),
(9, 16, 'artsadmin-cafe-77-scaled1.jpg'),
(10, 16, 'cafe-gray-deluxe-hero-01.jpg'),
(11, 16, 'cafe-tasarimi-ic-mimarlik-5.jpg'),
(12, 16, 'cec09bc2-2da0-11e8-aca1-e0fd24c4b573-1320x770-172306.jpg'),
(13, 16, 'emek-cafe.jpg'),
(14, 16, 'images.jpg'),
(15, 17, 'artsadmin-cafe-77-scaled2.jpg'),
(16, 17, '1596871829-kafe-genel-gorunum1.jpg'),
(17, 17, 'cafe-tasarimi-ic-mimarlik-52.jpg'),
(18, 17, 'cafe-gray-deluxe-hero-011.jpg'),
(19, 17, 'cec09bc2-2da0-11e8-aca1-e0fd24c4b573-1320x770-1723061.jpg'),
(20, 17, 'emek-cafe1.jpg'),
(21, 17, 'images2.jpg'),
(22, 18, '1596871829-kafe-genel-gorunum2.jpg'),
(23, 18, 'artsadmin-cafe-77-scaled3.jpg'),
(24, 18, 'cafe-gray-deluxe-hero-012.jpg'),
(25, 18, 'cafe-tasarimi-ic-mimarlik-53.jpg'),
(26, 18, 'cec09bc2-2da0-11e8-aca1-e0fd24c4b573-1320x770-1723062.jpg'),
(27, 18, 'emek-cafe2.jpg'),
(28, 18, 'images3.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gallery_provider`
--

CREATE TABLE `gallery_provider` (
  `id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `gallery_provider`
--

INSERT INTO `gallery_provider` (`id`, `provider_id`, `img`) VALUES
(14, 11, 'cor1.jpg'),
(15, 11, '15651828144571.jpg'),
(16, 11, 'download--1-.jpg'),
(17, 11, 'download1.jpg'),
(18, 11, 'events-management-festival-image1.jpg'),
(19, 11, 'hero-slider-31.jpg'),
(20, 11, 'messe-luzern-corporate-event1.jpg'),
(21, 12, '15651828144572.jpg'),
(22, 12, 'cor11.jpg'),
(23, 12, 'download--1-1.jpg'),
(24, 12, 'download2.jpg'),
(25, 12, 'events-management-festival-image2.jpg'),
(26, 12, 'hero-slider-32.jpg'),
(27, 12, 'messe-luzern-corporate-event2.jpg'),
(28, 13, 'cor12.jpg'),
(29, 13, '15651828144573.jpg'),
(30, 13, 'download--1-2.jpg'),
(31, 13, 'download3.jpg'),
(32, 13, 'events-management-festival-image3.jpg'),
(33, 13, 'hero-slider-33.jpg'),
(34, 13, 'messe-luzern-corporate-event3.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `providers`
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
-- Tablo döküm verisi `providers`
--

INSERT INTO `providers` (`user_id`, `city_id`, `img`, `about_az`, `about_en`, `about_ru`, `instagram`, `facebook`, `status`) VALUES
(11, 3, 'pexels-photo-220453.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'https://www.instagram.com/', 'https://www.facebook.com/', 1),
(12, 3, 'cory+monteith+2011+people+choice+awards+portraits+syn-kxgaodul.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'https://www.instagram.com/', 'https://www.facebook.com/', 1),
(13, 3, 'unnamed.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'https://www.instagram.com/', 'https://www.facebook.com/', 1),
(14, 3, 'pexels-photo-220453.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'https://www.instagram.com/', 'https://www.facebook.com/', 1),
(15, 3, 'pexels-photo-220453.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, \r\npulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. \r\nDonec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, \r\nin pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent\r\nper conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut \r\nvestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.\r\nInteger eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat \r\nfaucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. \r\nPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. \r\nCras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, \r\nnon dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.', 'https://www.instagram.com/', 'https://www.facebook.com/', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
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
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`id`, `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, 'Cake Cooking', 'Cake Cooking', 'Cake Cooking', 'Cooking the deliscious cake', 'Cooking the deliscious cake', 'Cooking the deliscious cake'),
(3, 'Finding Singers', 'Finding Singers', 'Finding Singers', 'Find the best singers for you ', 'Find the best singers for you ', 'Find the best singers for you '),
(4, 'Find good place', 'Find good place', 'Find good place', 'Find the best place for your desire', 'Find the best place for your desire', 'Find the best place for your desire');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `service_event`
--

CREATE TABLE `service_event` (
  `id` int(11) NOT NULL,
  `service_provider_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `service_provider`
--

CREATE TABLE `service_provider` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `service_provider`
--

INSERT INTO `service_provider` (`id`, `service_id`, `provider_id`, `price`) VALUES
(4, 3, 11, 120),
(5, 4, 11, 60),
(6, 1, 11, 25),
(7, 3, 12, 54),
(8, 4, 13, 200),
(9, 1, 13, 70);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
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
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_type_id`, `name`, `surname`, `email`, `mobile`, `password`, `birthday`) VALUES
(1, 1, 'admin', 'admin', 'admin@admin.com', '0550000000', 'admin', '2020-12-02'),
(10, 4, 'Elxan', 'Aslanov', 'elxan@elxan.com', '994555555', '123123', '0000-00-00'),
(11, 2, 'Jhon', 'Miles', 'Provider1@provider.com', '+994554542785', 'admin123', '2000-06-21'),
(12, 2, 'Andy ', 'Francis', 'Provider2@provider.com', '+994554542785', 'admin123', '2000-06-21'),
(13, 2, 'Leo', 'Daniel', 'Provider3@provider.com', '+994554542785', 'admin123', '2000-06-21'),
(14, 2, 'Jhon', 'Miles', 'Provider4@provider.com', '+994554542785', 'admin123', '2000-06-21'),
(15, 2, 'Jhon', 'Miles', 'Provider5@provider.com', '+994554542785', 'admin123', '2000-06-21'),
(16, 3, 'Lisa', 'Fletcher', 'estab1@estab.com', '+994553457635', 'admin123', '1986-07-16'),
(17, 3, 'Mario', 'Fletcher', 'estab2@estab.com', '+994553457635', 'admin123', '1986-07-16'),
(18, 3, 'Vernon', 'norris', 'estab3@estab.com', '+994553457635', 'admin123', '1986-07-16'),
(19, 4, 'Pedro', 'Daniel', 'user@user.com', '+994558764532', 'user', '2020-12-02');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD KEY `user_id` (`user_id`);

--
-- Tablo için indeksler `checklist`
--
ALTER TABLE `checklist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provider_id` (`provider_id`);

--
-- Tablo için indeksler `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ctg_estab`
--
ALTER TABLE `ctg_estab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estab_id` (`estab_id`),
  ADD KEY `event_ctg_id` (`event_ctg_id`);

--
-- Tablo için indeksler `ctg_provider`
--
ALTER TABLE `ctg_provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provider_id` (`provider_id`),
  ADD KEY `event_ctg_id` (`event_ctg_id`);

--
-- Tablo için indeksler `customer`
--
ALTER TABLE `customer`
  ADD KEY `user_id` (`user_id`);

--
-- Tablo için indeksler `estab`
--
ALTER TABLE `estab`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Tablo için indeksler `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `estab_id` (`estab_id`),
  ADD KEY `provider_id` (`provider_id`);

--
-- Tablo için indeksler `event_ctg`
--
ALTER TABLE `event_ctg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`);

--
-- Tablo için indeksler `event_type`
--
ALTER TABLE `event_type`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gallery_estab`
--
ALTER TABLE `gallery_estab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estab_id` (`estab_id`);

--
-- Tablo için indeksler `gallery_provider`
--
ALTER TABLE `gallery_provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provider_id` (`provider_id`);

--
-- Tablo için indeksler `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Tablo için indeksler `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `service_event`
--
ALTER TABLE `service_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `service_id` (`service_provider_id`);

--
-- Tablo için indeksler `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `provider_id` (`provider_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `checklist`
--
ALTER TABLE `checklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `ctg_estab`
--
ALTER TABLE `ctg_estab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `ctg_provider`
--
ALTER TABLE `ctg_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `event_ctg`
--
ALTER TABLE `event_ctg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `event_type`
--
ALTER TABLE `event_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `gallery_estab`
--
ALTER TABLE `gallery_estab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `gallery_provider`
--
ALTER TABLE `gallery_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `service_event`
--
ALTER TABLE `service_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `checklist`
--
ALTER TABLE `checklist`
  ADD CONSTRAINT `checklist_ibfk_1` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `ctg_estab`
--
ALTER TABLE `ctg_estab`
  ADD CONSTRAINT `ctg_estab_ibfk_1` FOREIGN KEY (`event_ctg_id`) REFERENCES `event_ctg` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ctg_estab_ibfk_2` FOREIGN KEY (`estab_id`) REFERENCES `estab` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `ctg_provider`
--
ALTER TABLE `ctg_provider`
  ADD CONSTRAINT `ctg_provider_ibfk_1` FOREIGN KEY (`event_ctg_id`) REFERENCES `event_ctg` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ctg_provider_ibfk_2` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `estab`
--
ALTER TABLE `estab`
  ADD CONSTRAINT `estab_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estab_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

--
-- Tablo kısıtlamaları `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Tablo kısıtlamaları `event_ctg`
--
ALTER TABLE `event_ctg`
  ADD CONSTRAINT `event_ctg_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `event_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `gallery_estab`
--
ALTER TABLE `gallery_estab`
  ADD CONSTRAINT `gallery_estab_ibfk_1` FOREIGN KEY (`estab_id`) REFERENCES `estab` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `gallery_provider`
--
ALTER TABLE `gallery_provider`
  ADD CONSTRAINT `gallery_provider_ibfk_1` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `providers`
--
ALTER TABLE `providers`
  ADD CONSTRAINT `providers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `providers_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

--
-- Tablo kısıtlamaları `service_event`
--
ALTER TABLE `service_event`
  ADD CONSTRAINT `service_event_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `service_event_ibfk_3` FOREIGN KEY (`service_provider_id`) REFERENCES `service_provider` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `service_provider`
--
ALTER TABLE `service_provider`
  ADD CONSTRAINT `service_provider_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_provider_ibfk_2` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
