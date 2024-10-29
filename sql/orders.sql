-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 10 月 29 日 21:12
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `seihatena_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `buyer_name` varchar(256) NOT NULL,
  `postcode` varchar(11) NOT NULL,
  `address` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `orders`
--

INSERT INTO `orders` (`id`, `buyer_name`, `postcode`, `address`, `email`, `tel`, `total`, `created_at`, `updated_at`) VALUES
(7, 'Yoshika Nakajima', 'V5R 2B7', '4320 Kaslo St', 'nakajimayoshika@gmail.com', '6046530289', 14940, '2024-10-26 15:14:26', '2024-10-26 15:14:26'),
(8, 'Yoshika Nakajima', 'V5R 2B7', '4320 Kaslo St', 'nakajimayoshika@gmail.com', '6046530289', 14940, '2024-10-26 15:15:13', '2024-10-26 15:15:13'),
(9, 'Yoshika Nakajima', 'V5R 2B7', '4320 Kaslo St', 'nakajimayoshika@gmail.com', '6046530289', 4980, '2024-10-26 15:18:31', '2024-10-26 15:18:31'),
(10, 'Yoshika Nakajima', 'V5R 2B7', '4320 Kaslo St', 'nakajimayoshika@gmail.com', '6046530289', 4980, '2024-10-26 15:20:56', '2024-10-26 15:20:56'),
(11, '中島たくみ', '123-4567', '東京都中央区銀座1-1-1-101', 'takumi@gmail.com', '08012345678', 14940, '2024-10-29 12:50:51', '2024-10-29 12:50:51'),
(12, '', 'V5R 2B7', '4320 Kaslo St', 'nakajimayoshika@gmail.com', '6046530289', 0, '2024-10-29 13:00:30', '2024-10-29 13:00:30'),
(13, '', 'V5R 2B7', '4320 Kaslo St', 'nakajimayoshika@gmail.com', '6046530289', 0, '2024-10-29 13:02:31', '2024-10-29 13:02:31'),
(14, '中島好香', 'V5R 2B7', '4320 Kaslo St', 'nakajimayoshika@gmail.com', '6046530289', 4980, '2024-10-29 13:05:19', '2024-10-29 13:05:19'),
(15, '中島好香', 'V5R 2B7', '4320 Kaslo St', 'nakajimayoshika@gmail.com', '6046530289', 9960, '2024-10-29 13:07:02', '2024-10-29 13:07:02'),
(16, '中島好香', 'V5R 2B7', '4320 Kaslo St', 'nakajimayoshika@gmail.com', '6046530289', 9960, '2024-10-29 13:08:53', '2024-10-29 13:08:53');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
