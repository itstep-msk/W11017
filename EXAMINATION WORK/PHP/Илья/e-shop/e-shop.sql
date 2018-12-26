-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3307
-- Время создания: Дек 22 2018 г., 20:53
-- Версия сервера: 5.5.50
-- Версия PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `e-shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(4) NOT NULL,
  `user` varchar(20) NOT NULL,
  `rate` int(1) NOT NULL,
  `shortMsg` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `productId` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user`, `rate`, `shortMsg`, `message`, `productId`) VALUES
(1, 'admin', 0, 'shortMsg', 'MASSIVNY COMMENT\r\n', 1),
(2, 'admin', 0, 'short', 'MASSIVNY COMMENT\r\nMASSIVNY COMMENT\r\nMASSIVNY COMMENT\r\n', 2),
(3, 'admin', 0, 'sshshsh', 'msgmsgmsgmsg', 3),
(4, 'admin', 0, '33', 'asdf', 3),
(5, 'asdf', 0, 'asdf', 'asdfasdfasdf', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `direction`
--

CREATE TABLE IF NOT EXISTS `direction` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `whereList` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `direction`
--

INSERT INTO `direction` (`id`, `name`, `whereList`) VALUES
(2, 'dir 2', 'list 1'),
(5, '2', 'list 2'),
(6, 'dir 1', 'list 1');

-- --------------------------------------------------------

--
-- Структура таблицы `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `list`
--

INSERT INTO `list` (`id`, `name`) VALUES
(1, 'list 1'),
(2, 'list 2'),
(3, 'list 3');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(5) NOT NULL,
  `data` varchar(5000) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `data`, `status`) VALUES
(1, 'a:6:{s:4:"city";s:5:"fasdf";s:5:"house";s:3:"324";s:6:"street";s:4:"fdas";s:4:"flat";s:2:"34";s:6:"number";s:10:"3456789765";s:8:"products";a:2:{s:2:"id";a:2:{i:0;s:1:"2";i:1;s:1:"1";}s:7:"countPr";a:2:{i:0;s:1:"1";i:1;s:1:"1";}}}', 'true'),
(2, 'a:6:{s:4:"city";s:5:"fasdf";s:5:"house";s:3:"324";s:6:"street";s:4:"fdas";s:4:"flat";s:2:"34";s:6:"number";s:10:"3456789765";s:8:"products";a:2:{s:2:"id";a:2:{i:0;s:1:"2";i:1;s:1:"1";}s:7:"countPr";a:2:{i:0;s:1:"1";i:1;s:1:"1";}}}', 'true'),
(3, 'a:6:{s:4:"city";s:7:"jhgfdfd";s:5:"house";s:6:"ergthj";s:6:"street";s:10:"wertghjukj";s:4:"flat";s:5:"34567";s:6:"number";s:6:"567894";s:8:"products";a:2:{s:2:"id";a:3:{i:0;s:1:"2";i:1;s:1:"1";i:2;s:1:"3";}s:7:"countPr";a:3:{i:0;s:1:"4";i:1;s:1:"5";i:2;s:1:"3";}}}', 'true'),
(4, 'a:6:{s:4:"city";s:6:"asdfbf";s:5:"house";s:4:"dsfg";s:6:"street";s:5:"wefrg";s:4:"flat";s:5:"43567";s:6:"number";s:0:"";s:8:"products";a:2:{s:2:"id";a:3:{i:0;s:1:"2";i:1;s:1:"1";i:2;s:1:"3";}s:7:"countPr";a:3:{i:0;s:1:"1";i:1;s:1:"1";i:2;s:1:"1";}}}', 'true'),
(5, 'a:6:{s:4:"city";s:3:"dfa";s:5:"house";s:6:"ewrgft";s:6:"street";s:3:"sdf";s:4:"flat";s:5:"12345";s:6:"number";s:1:"4";s:8:"products";a:2:{s:2:"id";a:3:{i:0;s:1:"2";i:1;s:1:"1";i:2;s:1:"3";}s:7:"countPr";a:3:{i:0;s:1:"1";i:1;s:1:"1";i:2;s:1:"1";}}}', 'true'),
(6, 'a:6:{s:4:"city";s:15:"ewrtyuikujytrew";s:5:"house";s:12:"ewrstdyguiho";s:6:"street";s:9:"trertyugi";s:4:"flat";s:12:"345678987654";s:6:"number";s:0:"";s:8:"products";a:2:{s:2:"id";a:1:{i:0;s:1:"3";}s:7:"countPr";a:1:{i:0;s:1:"1";}}}', 'true'),
(7, 'a:6:{s:4:"city";s:5:"dsfgh";s:5:"house";s:4:"dfgh";s:6:"street";s:5:"dsfgh";s:4:"flat";s:3:"dfg";s:6:"number";s:5:"34567";s:8:"products";a:2:{s:2:"id";a:1:{i:0;s:1:"1";}s:7:"countPr";a:1:{i:0;s:1:"3";}}}', 'true');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(5) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(12) NOT NULL,
  `type` varchar(50) NOT NULL,
  `currency` varchar(5) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `photo1` varchar(100) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `photo3` varchar(100) NOT NULL,
  `photo4` varchar(100) NOT NULL,
  `photo5` varchar(100) NOT NULL,
  `photo6` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `price`, `type`, `currency`, `description`, `avatar`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`) VALUES
(1, 'Ddf9MLOEDK04UuiuPRDv', 'фывафцуы', 1234, 'dir 1', 'руб', 'йуцкеногронреку', 'aaa.jpg', 'ccc.jpg', 'bbb.jpg', '', '', '', ''),
(2, 'q6lbxCwUFuXwGEeKTBtN', 'wgtfhj', 2345, 'dir 1', 'руб', 'wrtryuioiuytre', 'aaa.jpg', 'bbb.jpg', '', 'ccc.jpg', '', '', ''),
(3, 'GJROMI5eWiFCCzPOO7h8', 'jkl;h', 2345, 'dir 1', 'руб', 'wrtryuioiuytre', 'ccc.jpg', 'aaa.jpg', 'bbb.jpg', 'ccc.jpg', '', '', ''),
(4, 'Vju7BiqbA9XslWjMRgdv', 'wgt', 12344, 'dir 2', 'руб', 'edrftyhujiklo;lkjhgf', 'img.png', 'icon-close.png', 'img.png', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `eMail` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `year` varchar(4) NOT NULL,
  `registrationDate` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `password`, `eMail`, `number`, `year`, `registrationDate`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', '1901', '22.07.2018'),
(2, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '1978', '22.07.2018');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `direction`
--
ALTER TABLE `direction`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `direction`
--
ALTER TABLE `direction`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `list`
--
ALTER TABLE `list`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
