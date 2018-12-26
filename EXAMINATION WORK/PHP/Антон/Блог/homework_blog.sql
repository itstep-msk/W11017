-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 15 2018 г., 21:40
-- Версия сервера: 5.5.50
-- Версия PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `homework_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `homework_blog`
--

CREATE TABLE IF NOT EXISTS `homework_blog` (
  `header` varchar(2000) NOT NULL,
  `news` varchar(5000) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `homework_blog`
--

INSERT INTO `homework_blog` (`header`, `news`, `time`) VALUES
('asdf', 'asdfasdf', '07:57:14 PM'),
('456', 'olololo', '08:12:32 PM'),
('lalala', 'пление и развитие структуры в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач. Идейные соображения высшего порядка, а также укрепление и развитие структуры требуют определения и уточнения дальнейших направлений развития.', '08:59:53 PM'),
('This is some new news here', 'Задача организации, в особенности же сложившаяся структура организации способствует подготовки и реализации форм развития. Разнообразный и богатый опыт реализация намеченных плановых заданий способствует подготовки и реализации направлений прогрессивного развития.\r\n\r\nТаким образом дальнейшее развитие различных форм деятельности способствует подготовки и реализации систем массового участия. Не следует, однако забывать, что консультация с широким активом в значительной степени обуславливает создание систем массового участия. С другой стороны укрепление и развитие структуры требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач.', '09:39:07 PM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
