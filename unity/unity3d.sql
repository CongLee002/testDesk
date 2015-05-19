-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 05 月 22 日 08:06
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `unity3d`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `passwd`) VALUES
(1, 'G', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- 表的结构 `admin1`
--

CREATE TABLE IF NOT EXISTS `admin1` (
  `admin1_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`admin1_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin1`
--

INSERT INTO `admin1` (`admin1_id`, `name`, `passwd`) VALUES
(1, 'f', '6512bd43d9caa6e02c990b0a82652dca');

-- --------------------------------------------------------

--
-- 表的结构 `admin2`
--

CREATE TABLE IF NOT EXISTS `admin2` (
  `admin2_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`admin2_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `group1`
--

CREATE TABLE IF NOT EXISTS `group1` (
  `group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `showinfo` varchar(100) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `standard`
--

CREATE TABLE IF NOT EXISTS `standard` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stage_length` int(10) unsigned NOT NULL DEFAULT '0',
  `stage_width` int(10) unsigned NOT NULL DEFAULT '0',
  `stage_area` int(10) unsigned NOT NULL DEFAULT '0',
  `length` int(10) unsigned NOT NULL DEFAULT '0',
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `num` int(10) unsigned NOT NULL DEFAULT '0',
  `port` int(10) unsigned NOT NULL DEFAULT '0',
  `audience` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `standard`
--

INSERT INTO `standard` (`id`, `stage_length`, `stage_width`, `stage_area`, `length`, `width`, `height`, `num`, `port`, `audience`) VALUES
(1, 40, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 15, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 600, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 60, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 6, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 2, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 15, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0, 60, 0),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 5000);

-- --------------------------------------------------------

--
-- 表的结构 `theater`
--

CREATE TABLE IF NOT EXISTS `theater` (
  `theater_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `showinfo` varchar(100) NOT NULL,
  PRIMARY KEY (`theater_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `theater`
--

INSERT INTO `theater` (`theater_id`, `showinfo`) VALUES
(1, ''),
(2, '');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
