-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: 2015-03-25 15:54:17
-- 服务器版本： 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `translate_ips`
--

-- --------------------------------------------------------

--
-- 表的结构 `ajax_button`
--

CREATE TABLE `ajax_button` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `msg_en` varchar(20) DEFAULT NULL,
  `msg` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ajax_button`
--

INSERT INTO `ajax_button` (`id`, `name`, `num`, `msg_en`, `msg`) VALUES
(0, 'a', 12, 'qwerty', 'scacacsac'),
(1, 'b', 19, 'asdfg', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `geshu`
--

CREATE TABLE `geshu` (
  `id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `geshu`
--

INSERT INTO `geshu` (`id`) VALUES
(0);
