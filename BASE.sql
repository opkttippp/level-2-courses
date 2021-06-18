-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июн 30 2021 г., 19:23
-- Версия сервера: 8.0.23-0ubuntu0.20.04.1
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `BASE`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `name`, `text`, `img`) VALUES
(1, 'John Doe', 'В 2020 году ИИ претерпел быстрые преобразования, неожиданные разработки и инновации. \r\nИз-за пандемии коронавируса технологии оказались в центре внимания как никогда раньше. Мы вступили в самую цифровую \r\nэпоху всех времен. Что же ожидает технологии в области искусственного интеллекта в 2021 году? Попробуем разобраться \r\nв этом важном вопросе.', '/images/1.jpg'),
(2, 'Liza Cayen', 'Вечная проблема: в мире web-разработки происходит столько всего,\r\n а обсудить не с кем? Отличная новость! Elbrus Coding Bootcamp приглашает на уютные посиделки в московском кампусе.\r\n  Выпьем чай с печеньками, обсудим последние новости в IT-сфере и порассуждаем, почему в буткемпе обучают \r\n  программированию именно на JavaScript. Встреча пройдет 8 июня в 19:00. Длительность: 1,5 часа. Интересно будет всем:\r\n   и новичкам в программировании, и тем, кто уже изучает JavaScript.', '/images/2.jpg'),
(3, 'Deny Pauetry', 'Огромный архив книг \r\n   для программистов, собрано более 1700 книг. Вирусология, криптография, пентест,\r\n    администрирование, языки программирования. Есть бот для поиска.', '/images/3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `profile`
--

CREATE TABLE `profile` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `profile`
--

INSERT INTO `profile` (`id`, `name`, `surname`, `login`, `pass`, `email`, `img`) VALUES
(26, 'tolik', 'dsfgdfg', 'tttolll', 'tttolll', 'tttolll@rambler.ru', '/uploads/46.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
