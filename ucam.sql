-- phpMyAdmin SQL Dump
-- version 4.4.8
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2015 年 06 月 02 日 06:24
-- 伺服器版本: 5.6.24
-- PHP 版本： 5.5.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `ucam`
--

-- --------------------------------------------------------

--
-- 資料表結構 `camera`
--

CREATE TABLE IF NOT EXISTS `camera` (
  `id` int(11) NOT NULL,
  `label` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `feature` varchar(30) NOT NULL,
  `shop` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `touch` int(11) NOT NULL,
  `flip` int(11) NOT NULL,
  `maxiso` int(11) NOT NULL,
  `resolution` float NOT NULL,
  `cmos` varchar(30) NOT NULL,
  `movier` int(11) NOT NULL,
  `moviep` int(11) NOT NULL,
  `isonoise` int(11) NOT NULL,
  `weather` int(11) NOT NULL,
  `quality` float NOT NULL,
  `dynamic` float NOT NULL,
  `fps` float NOT NULL,
  `battery` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `length` float NOT NULL,
  `width` float NOT NULL,
  `height` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `camera`
--

INSERT INTO `camera` (`id`, `label`, `model`, `feature`, `shop`, `price`, `touch`, `flip`, `maxiso`, `resolution`, `cmos`, `movier`, `moviep`, `isonoise`, `weather`, `quality`, `dynamic`, `fps`, `battery`, `weight`, `length`, `width`, `height`) VALUES
(1, 'Canon', '5D3', '人像首選', 'http://24h.pchome.com.tw/prod/DGBC01-A9005S371', 88900, 0, 0, 102400, 22.3, 'Full Frame', 1080, 30, 2293, 1, 81, 11.7, 6, 950, 950, 152, 116.4, 76.4),
(2, 'Canon', '6D', '享受全幅', 'http://24h.pchome.com.tw/prod/DGBC01-A71326971', 48900, 0, 0, 25600, 20.2, 'Full Frame', 1080, 30, 2340, 1, 82, 12.1, 4.5, 980, 770, 145, 111, 71),
(3, 'Canon', '70D', '運動', 'http://24h.pchome.com.tw/prod/DGBC01-A78918160', 27900, 1, 1, 12800, 20, 'APSC', 1080, 30, 926, 1, 68, 11.6, 7, 920, 755, 139, 104, 79),
(4, 'Canon', '700D', '輕鬆入門', 'http://24h.pchome.com.tw/prod/DGBC01-A74977624', 15900, 1, 1, 12800, 18, 'APSC', 1080, 30, 681, 0, 61, 11.2, 5, 550, 580, 133, 100, 79),
(5, 'Canon', 'M3', '輕巧多變', 'http://24h.pchome.com.tw/prod/DGBQ1N-A90060TU3', 20900, 1, 1, 25600, 24.2, 'APSC', 1080, 30, 0, 0, 0, 0, 4.2, 250, 366, 110.9, 68, 44.4),
(6, 'Nikon', 'D610', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Nikon', 'D810', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Nikon', 'D5500', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'Nikon', 'D7200', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'Nikon', 'V3', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'Sony', 'A7R', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'Sony', 'A7S', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'Sony', 'A5100', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'Sony', 'A6000', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'Sony', 'A99', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'Pentax', '654D', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'Pentax', 'K-3', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'Pentax', 'K-5lls', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'Pentax', 'K-50', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'Pentax', 'Q7', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'Fujifilm', 'X-A1', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'Fujifilm', 'X-E2', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'Fujifilm', 'X-M1', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'Fujifilm', 'X-Pro1', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'Fujifilm', 'X-T1', '', '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL,
  `account` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nick` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `account`, `password`, `nick`) VALUES
(3, 'duck', '23e85fa756cfb8ccd9a6b4b5a5952fef', '鴨子的逆襲');

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL,
  `label` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `camera`
--
ALTER TABLE `camera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
