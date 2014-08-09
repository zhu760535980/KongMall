-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2014 年 08 月 09 日 05:30
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
  `customer` varchar(50) NOT NULL,
  `orderTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `order`
--

INSERT INTO `order` (`id`, `orderId`, `productName`, `total`, `customer`, `orderTime`) VALUES
(5, 'order20140727092652753', 'yifuf,lg,', '277', '燕尾服', '2014-07-27 15:26:52'),
(6, 'order20140727092813515', 'yifuf,lg,衣服1', '327', '燕尾服', '2014-07-27 15:28:13'),
(7, 'order20140727093229730', 'yifuf,lg,衣服2', '545', '晚礼服', '2014-07-27 15:32:29'),
(8, 'order20140727095620919', 'yifuf,lg,衣服2,衣服1', '595', 'tom', '2014-07-27 15:56:20'),
(9, '', '', '', '哈哈', '0000-00-00 00:00:00'),
(10, '', '', '', '李白', '0000-00-00 00:00:00'),
(11, '', '', '', 'peter', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `amount`, `inventory`, `pix`, `description`, `addTime`) VALUES
(1, '衣服1', 50, 0, 53, '20140726052418176.jpg', '女士衣服', '2014-07-26 11:24:18'),
(5, '燕尾服', 5, 0, 5000, '20140802055412258.jpg', '很好！', '2014-07-26 15:34:42'),
(10, '晚礼服', 233, 0, 234, '20140726093519532.jpg', '', '2014-07-26 15:35:19'),
(11, '里面', 0, 0, 0, '', '', '0000-00-00 00:00:00'),
(13, '跑鞋', 0, 0, 0, '', '', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
