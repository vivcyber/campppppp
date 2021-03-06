-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 06 月 11 日 13:22
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `projecttest`
--

-- --------------------------------------------------------

--
-- 資料表結構 `room_order`
--

CREATE TABLE `room_order` (
  `OrderNum` int(20) NOT NULL,
  `Date` date NOT NULL,
  `RoomType` varchar(11) NOT NULL COMMENT 'Link Roomtype_Sid',
  `ID_Comments` text NOT NULL,
  `Create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `room_order`
--

INSERT INTO `room_order` (`OrderNum`, `Date`, `RoomType`, `ID_Comments`, `Create_at`) VALUES
(33, '2021-04-10', 'Room2', 'NULL', '2022-06-04'),
(34, '2022-04-18', 'Room1', 'NULL', '2022-06-04'),
(35, '2021-03-31', 'Room3', 'NULL', '2022-06-04'),
(36, '2021-01-17', 'Room1', 'NULL', '2022-06-04'),
(37, '2021-10-22', 'Room1', 'NULL', '2022-06-04'),
(38, '2021-09-24', 'Room1', 'NULL', '2022-06-04'),
(39, '2022-02-04', 'Car1', 'NULL', '2022-06-04'),
(40, '2021-04-10', 'Room1', 'NULL', '2022-06-04'),
(41, '2021-10-17', 'Room1', 'NULL', '2022-06-04'),
(42, '2021-01-19', 'Room1', 'NULL', '2022-06-04'),
(43, '2021-01-17', 'Room1', 'NULL', '2022-06-04'),
(44, '2021-04-13', 'Room1', 'NULL', '2022-06-04'),
(45, '2022-05-27', 'Room1', 'NULL', '2022-06-04'),
(46, '2021-12-30', 'Room1', 'NULL', '2022-06-04'),
(47, '2021-12-18', 'Room1', 'NULL', '2022-06-04'),
(48, '2021-09-25', 'Room1', 'NULL', '2022-06-04'),
(49, '2021-01-09', 'Room1', 'NULL', '2022-06-04'),
(50, '2022-03-13', 'Room1', 'NULL', '2022-06-04'),
(51, '2021-12-12', 'Room1', 'NULL', '2022-06-04'),
(52, '2022-03-02', 'Room1', 'NULL', '2022-06-04'),
(53, '2021-12-22', 'Room1', 'NULL', '2022-06-04'),
(54, '2021-11-13', 'Room1', 'NULL', '2022-06-04'),
(55, '2022-04-08', 'Room1', 'NULL', '2022-06-04'),
(56, '2022-03-30', 'Room1', 'NULL', '2022-06-04'),
(57, '2021-05-14', 'Room1', 'NULL', '2022-06-04'),
(58, '2021-01-16', 'Room1', 'NULL', '2022-06-04'),
(59, '2022-05-22', 'Room1', 'NULL', '2022-06-04'),
(60, '2021-03-09', 'Room1', 'NULL', '2022-06-04'),
(61, '2021-03-14', 'Room1', 'NULL', '2022-06-04');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `room_order`
--
ALTER TABLE `room_order`
  ADD PRIMARY KEY (`OrderNum`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `room_order`
--
ALTER TABLE `room_order`
  MODIFY `OrderNum` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
