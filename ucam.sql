-- phpMyAdmin SQL Dump
-- version 4.4.8
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2015 年 06 月 04 日 12:55
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
  `height` float NOT NULL,
  `wifi` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `camera`
--

INSERT INTO `camera` (`id`, `label`, `model`, `feature`, `shop`, `price`, `touch`, `flip`, `maxiso`, `resolution`, `cmos`, `movier`, `moviep`, `isonoise`, `weather`, `quality`, `dynamic`, `fps`, `battery`, `weight`, `length`, `width`, `height`, `wifi`) VALUES
(1, 'Canon', '5D3', '人像首選', 'http://24h.pchome.com.tw/prod/DGBC01-A9005S371', 88900, 0, 0, 102400, 22.3, 'Full Frame', 1080, 30, 2293, 1, 81, 11.7, 6, 950, 950, 152, 116.4, 76.4, 0),
(2, 'Canon', '6D', '享受全幅', 'http://24h.pchome.com.tw/prod/DGBC01-A71326971', 48900, 0, 0, 25600, 20.2, 'Full Frame', 1080, 30, 2340, 1, 82, 12.1, 4.5, 980, 770, 145, 111, 71, 0),
(3, 'Canon', '70D', '運動強者', 'http://24h.pchome.com.tw/prod/DGBC01-A78918160', 27900, 1, 1, 12800, 20, 'APSC', 1080, 30, 926, 1, 68, 11.6, 7, 920, 755, 139, 104, 79, 1),
(4, 'Canon', '700D', '輕鬆入門', 'http://24h.pchome.com.tw/prod/DGBC01-A74977624', 15900, 1, 1, 12800, 18, 'APSC', 1080, 30, 681, 0, 61, 11.2, 5, 550, 580, 133, 100, 79, 0),
(5, 'Canon', 'M3', '輕巧多變', 'http://24h.pchome.com.tw/prod/DGBQ1N-A90060TU3', 20900, 1, 1, 25600, 24.2, 'APSC', 1080, 30, 0, 0, 0, 0, 4.2, 250, 366, 110.9, 68, 44.4, 1),
(6, 'Nikon', 'D610', '全幅入門', 'http://24h.pchome.com.tw/prod/DGBC00-A80465874', 49900, 0, 0, 6400, 24.26, 'Full Frame', 1080, 30, 2980, 1, 94, 14.2, 6, 900, 850, 141, 113, 82, 0),
(7, 'Nikon', 'D810', '畫質王者', 'http://24h.pchome.com.tw/prod/DGBC00-A9005AKMZ', 89900, 0, 0, 12800, 36.3, 'Full Frame', 1080, 60, 2855, 1, 97, 14.8, 5, 1200, 880, 146, 123, 81.5, 0),
(8, 'Nikon', 'D5500', '入門首選', 'http://24h.pchome.com.tw/prod/DGBC00-A9005W8T8', 23980, 1, 1, 25600, 24.2, 'APSC', 1080, 60, 1438, 0, 84, 14, 5, 820, 420, 124, 97, 70, 1),
(9, 'Nikon', 'D7200', '平民王者', 'http://24h.pchome.com.tw/prod/DGBC00-A9005YM40', 37900, 0, 0, 25600, 24.2, 'APSC', 1080, 30, 1333, 1, 87, 14.6, 6, 1110, 765, 135.5, 106.5, 76, 0),
(10, 'Nikon', 'V3', '高速連拍', 'http://24h.pchome.com.tw/prod/DGBQ19-A90052T7T', 28900, 1, 0, 12800, 18.39, '1"', 1080, 60, 0, 0, 0, 0, 60, 310, 324, 110.9, 65, 33.2, 0),
(11, 'Sony', 'A7R', '輕巧全幅', 'http://24h.pchome.com.tw/prod/DGBQ1H-A81323779', 52980, 0, 0, 25600, 36.4, 'Full Frame', 1080, 60, 2746, 1, 95, 14.1, 4, 270, 465, 126.9, 94.4, 48.2, 1),
(12, 'Sony', 'A7S', '微光戰神', 'http://24h.pchome.com.tw/prod/DGBQ1H-A9005BDP9', 66280, 0, 0, 409600, 12.2, 'Full Frame', 1080, 60, 3702, 1, 87, 13.2, 5, 300, 489, 126.9, 94.4, 48.2, 1),
(13, 'Sony', 'A5100', '微單首選', 'http://24h.pchome.com.tw/prod/DGBQ1H-A9005E2CY', 12980, 1, 1, 25600, 24.3, 'APSC', 1080, 60, 1347, 0, 80, 12.7, 6, 400, 283, 109.6, 62.8, 35.7, 1),
(14, 'Sony', 'A6000', '專業輕巧', 'http://24h.pchome.com.tw/prod/DGBQ1H-A83950434', 18980, 0, 1, 25600, 24.3, 'APSC', 1080, 60, 1347, 0, 82, 13.1, 11, 369, 344, 120, 66.9, 45.1, 1),
(15, 'Sony', 'A99', '樣樣精通', 'http://24h.pchome.com.tw/prod/DGBC3I-A69744800', 64880, 0, 1, 25600, 24.3, 'Full Frame', 1080, 50, 1555, 1, 89, 14, 6, 500, 812, 147, 111.2, 78.4, 0),
(16, 'Pentax', '645D', '畫質之神', 'http://24h.pchome.com.tw/prod/DGBC2W-A56496189', 158000, 0, 0, 1000, 40, 'Big', 0, 0, 0, 1, 0, 0, 1.1, 800, 1480, 156, 117, 119, 0),
(17, 'Pentax', 'K-3', '高階戰神', 'http://24h.pchome.com.tw/prod/DGBC2W-A81048027', 29800, 0, 0, 51200, 23.35, 'APSC', 1080, 30, 1216, 1, 80, 13.4, 8.3, 720, 800, 131.5, 100, 77.5, 0),
(18, 'Pentax', 'K-5lls', '中階之選', 'http://mall.pchome.com.tw/prod/ABAQ3C-A70274325', 32800, 0, 0, 12800, 16.3, 'APSC', 1080, 25, 1208, 1, 82, 14.1, 7, 980, 760, 131, 97, 73, 0),
(19, 'Pentax', 'K-50', '入門之選', 'http://24h.pchome.com.tw/prod/DGBC2W-A78420993', 22900, 0, 0, 52100, 16.3, 'APSC', 1080, 30, 1120, 1, 79, 13, 6, 480, 649, 129.5, 96.5, 71.1, 0),
(20, 'Pentax', 'Q7', '輕巧強大', 'http://24h.pchome.com.tw/prod/DGBQ1D-A80220776', 14800, 0, 0, 12800, 12.4, 'APSC', 1080, 30, 0, 0, 0, 0, 5, 270, 200, 102, 58, 34, 0),
(21, 'Fujifilm', 'X-A1', 'Wifi先驅', 'http://24h.pchome.com.tw/prod/DGBQ1G-A9005QJF6', 12980, 0, 0, 6400, 16.3, 'APSC', 1080, 30, 0, 0, 0, 0, 5.6, 350, 330, 116.9, 66.5, 39, 1),
(22, 'Fujifilm', 'X-E2', '電影風格', 'http://24h.pchome.com.tw/prod/DGBQ1G-A82549949', 25980, 0, 1, 6400, 16.3, 'APSC', 1080, 60, 0, 0, 0, 0, 7, 350, 350, 129, 74.9, 37.2, 1),
(23, 'Fujifilm', 'X-M1', '古雅外觀', 'http://24h.pchome.com.tw/prod/DGBQ1G-A78030790', 19900, 0, 0, 6400, 16.3, 'APSC', 1080, 30, 0, 0, 0, 0, 5.6, 350, 330, 116.9, 66.5, 39, 1),
(24, 'Fujifilm', 'X-Pro1', '專業輕巧', 'http://mall.pchome.com.tw/prod/ABAQ07-A66626178', 67900, 0, 0, 6400, 16.3, 'APSC', 1080, 24, 0, 0, 0, 0, 6, 300, 450, 139.5, 81.8, 42.5, 0),
(25, 'Fujifilm', 'X-T1', '復古外型', 'http://24h.pchome.com.tw/prod/DGBQ1G-A83954421', 39900, 0, 0, 6400, 16.3, 'APSC', 1080, 60, 0, 1, 0, 0, 8, 350, 440, 129, 89.8, 46.7, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL,
  `account` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nick` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `account`, `password`, `nick`) VALUES
(3, 'duck', '23e85fa756cfb8ccd9a6b4b5a5952fef', '鴨子的逆襲'),
(4, 'haha', '5212a4480d25a6e0051f43ab2bad30f5', 'HAHA');

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL,
  `label` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `message`
--

INSERT INTO `message` (`id`, `label`, `model`, `user`, `content`, `time`) VALUES
(7, 'Canon', 'M3', '鴨子的逆襲', '<p><span style="font-size:24px"><span style="color:rgb(255, 140, 0)">好看</span></span></p>\r\n', '2015-06-04 12:22:10'),
(8, 'Sony', 'A7R', 'HAHA', '<p>太神拉</p>\r\n', '2015-06-04 12:53:37'),
(9, 'Sony', 'A7S', 'HAHA', '<p>好猛啊</p>\r\n', '2015-06-04 12:53:47');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
