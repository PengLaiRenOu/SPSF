-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 11 月 22 日 14:49
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `spsf`
--

-- --------------------------------------------------------

--
-- 資料表結構 `apply`
--

DROP TABLE IF EXISTS `apply`;
CREATE TABLE `apply` (
  `student` varchar(10) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `father_name` varchar(10) NOT NULL,
  `mother_name` varchar(10) NOT NULL,
  `applyType` smallint(6) NOT NULL,
  `id` int(11) NOT NULL,
  `progress` int(11) NOT NULL DEFAULT 1,
  `teacher_opinion` text DEFAULT NULL,
  `secretary_opinion` text DEFAULT NULL,
  `results` int(11) DEFAULT NULL,
  `principal＿sign` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `apply`
--

INSERT INTO `apply` (`student`, `sid`, `father_name`, `mother_name`, `applyType`, `id`, `progress`, `teacher_opinion`, `secretary_opinion`, `results`, `principal＿sign`) VALUES
('a', '107213004', 'f', 'm', 0, 2, 3, 'slakdlas;d', 'asdasdads', 1000, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(1000) NOT NULL,
  `passwd` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `id` int(11) NOT NULL,
  `authority` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`username`, `passwd`, `id`, `authority`) VALUES
('principal', '*D1C1C6D0D84268BFA9678D6E297BA24509C4AAE4', 1, 4),
('teacher', '*854243B9D1073E77B674326156626EAC57B22263', 2, 2),
('secretary', '*BBAC8DF4D1D1675F13CC6F879B010C1D473EC776', 4, 3),
('student', '*AF8B0FA3E4FD603D634F62731916EC4031BFA25A', 5, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
