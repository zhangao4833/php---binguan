-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 01 月 11 日 07:44
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ks`
--

-- --------------------------------------------------------

--
-- 表的结构 `checkroom`
--

CREATE TABLE IF NOT EXISTS `checkroom` (
  `房间号` int(6) NOT NULL,
  `入住时间` datetime NOT NULL,
  PRIMARY KEY (`房间号`),
  UNIQUE KEY `房间号` (`房间号`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `checkroom`
--

INSERT INTO `checkroom` (`房间号`, `入住时间`) VALUES
(204, '2018-01-05 13:52:09'),
(103, '2018-01-05 13:51:40'),
(102, '2018-01-06 19:37:12'),
(101, '2018-01-08 11:00:18'),
(104, '2018-01-10 15:50:49'),
(203, '2018-01-11 10:43:29'),
(111, '2018-01-11 10:47:28'),
(112, '2018-01-11 10:48:32'),
(113, '2018-01-11 10:49:12');

-- --------------------------------------------------------

--
-- 表的结构 `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
  `房间号` int(11) NOT NULL,
  `姓名` char(8) COLLATE utf8_bin NOT NULL,
  `性别` char(2) COLLATE utf8_bin NOT NULL,
  `身份证` char(18) COLLATE utf8_bin NOT NULL,
  `电话` char(11) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`房间号`),
  UNIQUE KEY `房间号` (`房间号`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `guest`
--

INSERT INTO `guest` (`房间号`, `姓名`, `性别`, `身份证`, `电话`) VALUES
(102, '赵建', '男', '369852147852147852', '12545875478'),
(204, '张昭', '男', '654987321654521452', '12345678955'),
(103, '李四', '男', '254125632145214523', '12345678955'),
(101, '123', '男', '65652984562298562', '123546123'),
(104, '张三', '女', '123234343434345434', '12345234343'),
(203, '李凯', '男', '621525635156982823', '15636364545'),
(111, '沈晓', '女', '361532661566412453', '13396558856'),
(112, '张和', '男', '636356199651528469', '15696965545'),
(113, '徐文', '男', '623626169546252645', '17796851234');

-- --------------------------------------------------------

--
-- 表的结构 `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `房间号` int(11) NOT NULL,
  `类型` char(6) COLLATE utf8_bin NOT NULL,
  `等级` char(6) COLLATE utf8_bin NOT NULL,
  `价格` int(6) NOT NULL,
  `状态` char(2) COLLATE utf8_bin NOT NULL DEFAULT 'N',
  PRIMARY KEY (`房间号`),
  UNIQUE KEY `房间号` (`房间号`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `room`
--

INSERT INTO `room` (`房间号`, `类型`, `等级`, `价格`, `状态`) VALUES
(101, '单人间', '标准间', 198, 'Y'),
(102, '单人间', '标准间', 198, 'Y'),
(103, '双人间', '标准间', 260, 'Y'),
(104, '双人间', '标准间', 260, 'Y'),
(202, '单人间', '豪华间', 500, 'N'),
(203, '单人间', '豪华间', 500, 'Y'),
(204, '双人间', '豪华间', 620, 'Y'),
(111, '单人间', '标准间', 198, 'Y'),
(112, '单人间', '标准间', 198, 'Y'),
(113, '双人间', '标准间', 260, 'Y'),
(114, '双人间', '豪华间', 620, 'N'),
(115, '双人间', '标准间', 260, 'N');

-- --------------------------------------------------------

--
-- 表的结构 `workers`
--

CREATE TABLE IF NOT EXISTS `workers` (
  `职工号` int(5) NOT NULL,
  `账户` char(10) COLLATE utf8_bin NOT NULL,
  `密码` char(50) COLLATE utf8_bin NOT NULL,
  `职位` char(10) COLLATE utf8_bin NOT NULL,
  `电话` char(11) COLLATE utf8_bin NOT NULL,
  `住址` char(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`职工号`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `workers`
--

INSERT INTO `workers` (`职工号`, `账户`, `密码`, `职位`, `电话`, `住址`) VALUES
(3, '33', '33', '前台', '13393699966', '甘肃省兰州市七里河兴隆小区'),
(2, '1234', '1234', '大堂经理', '13896334411', '甘肃省兰州市七里河区昕昕小区'),
(4, '44', '44', '前台', '13888889963', '江苏省南京市玄武湖小区'),
(6, '12589', '12589', '前台员工', '15697698855', '江苏省南京市公安大楼'),
(5, '55', '55', '迎宾员', '15293655555', '甘肃省兰州市安宁区培黎小区'),
(7, '77', '77', '迎宾员', '13893669965', '甘肃省兰州市七里河嘉兴小区'),
(8, '88', '88', '迎宾员', '13396564454', '陕西省西安市蓝心小区'),
(9, '99', '99', '卫生管理员', '13895444563', '四川省成都文建小区'),
(10, '100', '100', '卫生员', '15293556969', '甘肃省武威市凤凰路元亨小区'),
(11, '11', '111', '卫生院', '13333336666', '甘肃省兰州市安宁区十里店小区');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
