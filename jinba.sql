-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-06-01 09:42:33
-- 服务器版本： 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jinba`
--

-- --------------------------------------------------------

--
-- 表的结构 `cfh_company`
--

CREATE TABLE IF NOT EXISTS `cfh_company` (
`id` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `company` varchar(100) NOT NULL DEFAULT '',
  `industry` varchar(100) NOT NULL DEFAULT '',
  `business` varchar(100) NOT NULL DEFAULT '',
  `product` varchar(100) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `number` int(10) NOT NULL,
  `create_time` int(10) unsigned NOT NULL,
  `update_time` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cfh_extend`
--

CREATE TABLE IF NOT EXISTS `cfh_extend` (
`id` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `background_objectives` text NOT NULL COMMENT '创新背景及期望目标',
  `try_result` text NOT NULL COMMENT '创新尝试及结果',
  `difficult` text NOT NULL COMMENT '过程中遇到的困难',
  `need_help` text NOT NULL COMMENT '你需要的帮助',
  `information` varchar(100) NOT NULL DEFAULT '' COMMENT '相关资料提供1.照片 2.视频 3.媒体报到 4.其他',
  `create_time` int(10) unsigned NOT NULL,
  `update_time` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cfh_user`
--

CREATE TABLE IF NOT EXISTS `cfh_user` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '姓名',
  `gender` tinyint(1) unsigned NOT NULL COMMENT '性别 1.女 2.男',
  `birthday` date NOT NULL COMMENT '出生日期',
  `mobile` varchar(15) NOT NULL COMMENT '手机',
  `email` varchar(100) NOT NULL DEFAULT '' COMMENT '邮箱',
  `social` varchar(100) NOT NULL DEFAULT '' COMMENT '微信微博',
  `type` varchar(100) NOT NULL DEFAULT '' COMMENT '类型 1.企业创始人 2.私营企业主 3.个体户 4.股东 5.外聘高管 6.其他',
  `create_time` int(10) unsigned NOT NULL,
  `update_time` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cfh_company`
--
ALTER TABLE `cfh_company`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cfh_extend`
--
ALTER TABLE `cfh_extend`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cfh_user`
--
ALTER TABLE `cfh_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cfh_company`
--
ALTER TABLE `cfh_company`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cfh_extend`
--
ALTER TABLE `cfh_extend`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cfh_user`
--
ALTER TABLE `cfh_user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
