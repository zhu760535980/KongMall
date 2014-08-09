-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2014 年 08 月 09 日 22:32
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mall`
--
CREATE DATABASE `mall` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mall`;

-- --------------------------------------------------------

--
-- 表的结构 `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderId` varchar(100) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `orderTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `order`
--

INSERT INTO `order` (`id`, `orderId`, `productName`, `total`, `orderTime`) VALUES
(5, 'order20140727092652753', 'yifuf,lg,', '277', '2014-07-27 15:26:52'),
(6, 'order20140727092813515', 'yifuf,lg,衣服1', '327', '2014-07-27 15:28:13'),
(7, 'order20140727093229730', 'yifuf,lg,衣服2', '545', '2014-07-27 15:32:29'),
(8, 'order20140727095620919', 'yifuf,lg,衣服2,衣服1', '595', '2014-07-27 15:56:20'),
(9, 'order20140727110928594', 'yifuf,孔子像', '333', '2014-07-27 17:09:28');

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `inventory` int(11) NOT NULL,
  `pix` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `addTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `amount`, `inventory`, `pix`, `description`, `addTime`) VALUES
(41, 'd', 0, 0, 0, '20140728160840154.jpg', 'd', '2014-07-28 16:08:40'),
(43, '4', 4, 0, 4, '20140728161149149.jpg', '444', '2014-07-28 16:11:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
