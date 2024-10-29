-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 10 月 29 日 21:11
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
-- テーブルの構造 `order_products`
--

CREATE TABLE `order_products` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `num` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_name`, `num`, `price`) VALUES
(1, 9, 'はじめてのおうち性教育キット for boy', 1, 4980),
(2, 10, 'はじめてのおうち性教育キット for boy', 1, 4980),
(3, 11, 'はじめてのトイトレちゃれんじキット for girl（ハート）（うさぎ）', 1, 4980),
(4, 11, 'はじめてのトイトレちゃれんじキット for boy（車）（ライオン）', 1, 4980),
(5, 11, 'はじめてのおうち性教育キット for girl（クローバー）（かえる）', 1, 4980),
(6, 14, 'はじめてのおうち性教育キット for boy（ヒーロー）（かえる）', 1, 4980),
(7, 16, 'はじめてのトイトレちゃれんじキット for boy（ヒーロー）（ライオン）', 1, 4980),
(8, 16, 'はじめてのおうち性教育キット for boy（ヒーロー）（あひる）', 1, 4980);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
