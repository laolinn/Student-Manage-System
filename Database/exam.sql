-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?04 �?25 �?02:05
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `exam`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 表的结构 `student2`
--

CREATE TABLE IF NOT EXISTS `student2` (
  `id` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student2`
--

INSERT INTO `student2` (`id`, `name`, `gender`, `address`, `phone`, `email`) VALUES
('01', '朱惜洁', '女', '广东省广州市华南商贸职业学院', '18718412331', '不知道'),
('02', '陈梓浩', '男', '广东省广州市华南商贸职业学院', '15718366706', '441867775@qq.com'),
('03', '陈建维', '男', '广东省广州市华南商贸职业学院', '13172059946', '不知道'),
('04', '叶卓霖', '男', '广东省广州市华南商贸职业学院', '13038829666', 'chaoshenlin@163.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
