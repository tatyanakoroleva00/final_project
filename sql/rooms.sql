-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 13 2023 г., 02:28
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `portfolio`
--

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_descr` varchar(255) NOT NULL,
  `full_descr` text NOT NULL,
  `image` text NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `short_descr`, `full_descr`, `image`, `type`) VALUES
(1, 'bedroom', '', '', 'bedroom/1.jpg', 'horizontal'),
(2, 'kitchen', '', '', 'kitchen/1.jpg', 'horizontal'),
(3, 'bathroom', '', '', 'bathroom/1.jpg', 'vertical'),
(4, 'living room', '', '', 'living_room/1.jpg', 'horizontal'),
(5, 'home office', '', '', 'home_office/1.jpg', 'horizontal'),
(6, 'bedroom', '', '', 'bedroom/2.jpg', 'horizontal'),
(7, 'bedroom', '', '', 'bedroom/3.jpg', 'horizontal'),
(8, 'bedroom', '', '', 'bedroom/4.jpg', 'horizontal'),
(9, 'bedroom', '', '', 'bedroom/5.jpg', 'horizontal'),
(10, 'bedroom', '', '', 'bedroom/6.jpg', 'horizontal'),
(11, 'bedroom', '', '', 'bedroom/7.jpg', 'vertical'),
(12, 'bathroom', '', '', 'bathroom/2.jpg', 'vertical'),
(13, 'bathroom', '', '', 'bathroom/3.jpg', 'horizontal'),
(14, 'bathroom', '', '', 'bathroom/4.jpg', 'vertical'),
(15, 'bathroom', '', '', 'bathroom/5.jpg', 'vertical'),
(16, 'bathroom', '', '', 'bathroom/6.jpg', 'horizontal'),
(17, 'bathroom', '', '', 'bathroom/7.jpg', 'horizontal'),
(18, 'bathroom', '', '', 'bathroom/8.jpg', 'horizontal'),
(19, 'bathroom', '', '', 'bathroom/9.jpg', 'horizontal'),
(20, 'bathroom', '', '', 'bathroom/10.jpg', 'horizontal'),
(21, 'bathroom', '', '', 'bathroom/11.jpg', 'horizontal'),
(22, 'bathroom', '', '', 'bathroom/12.jpg', 'horizontal'),
(23, 'home office', '', '', 'home_office/2.jpg', 'horizontal'),
(24, 'home office', '', '', 'home_office/3.jpg', 'vertical'),
(25, 'home office', '', '', 'home_office/4.jpg', 'vertical'),
(26, 'home office', '', '', 'home_office/5.jpg', 'vertical'),
(27, 'home office', '', '', 'home_office/6.jpg', 'horizontal'),
(28, 'home office', '', '', 'home_office/7.jpg', 'vertical'),
(29, 'home office', '', '', 'home_office/8.jpg', 'horizontal'),
(30, 'home office', '', '', 'home_office/9.jpg', 'horizontal'),
(31, 'home office', '', '', 'home_office/10.jpg', 'vertical'),
(32, 'kitchen', '', '', 'kitchen/2.jpg', 'vertical'),
(33, 'kitchen', '', '', 'kitchen/3.jpg', 'horizontal'),
(34, 'kitchen', '', '', 'kitchen/4.jpg', 'horizontal'),
(35, 'kitchen', '', '', 'kitchen/5.jpg', 'horizontal'),
(36, 'kitchen', '', '', 'kitchen/6.jpg', 'horizontal'),
(37, 'kitchen', '', '', 'kitchen/7.jpg', 'horizontal'),
(38, 'kitchen', '', '', 'kitchen/8.jpg', 'horizontal'),
(39, 'kitchen', '', '', 'kitchen/9.jpg', 'horizontal'),
(40, 'living room', '', '', 'living_room/2.jpg', 'horizontal'),
(41, 'living room', '', '', 'living_room/3.jpg', 'vertical'),
(42, 'living room', '', '', 'living_room/4.jpg', 'horizontal'),
(43, 'living room', '', '', 'living_room/5.jpg', 'horizontal'),
(44, 'living room', '', '', 'living_room/6.jpg', 'horizontal'),
(45, 'living room', '', '', 'living_room/7.jpg', 'horizontal'),
(46, 'living room', '', '', 'living_room/8.jpg', 'horizontal'),
(47, 'living room', '', '', 'living_room/9.jpg', 'horizontal'),
(48, 'living room', '', '', 'living_room/10.jpg', 'horizontal'),
(49, 'living room', '', '', 'living_room/11.jpg', 'horizontal'),
(50, 'living room', '', '', 'living_room/12.jpg', 'horizontal'),
(51, 'living room', '', '', 'living_room/13.jpg', 'horizontal'),
(52, 'living room', '', '', 'living_room/14.jpg', 'horizontal'),
(53, 'living room', '', '', 'living_room/15.jpg', 'horizontal'),
(54, 'living room', '', '', 'living_room/13.jpg', 'horizontal');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
