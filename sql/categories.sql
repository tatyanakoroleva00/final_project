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
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `short_descr` varchar(255) DEFAULT NULL,
  `full_descr` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `short_descr`, `full_descr`, `image`, `type`) VALUES
(1, 'furniture', '', '', 'furniture/1.jpg', 'horizontal'),
(2, 'textiles', '', '', 'textiles/1.jpg', 'vertical'),
(3, 'decorations', '', '', 'decorations/1.jpg', 'horizontal'),
(4, 'lighting', '', '', 'lighting/1.jpg', 'vertical'),
(5, 'cozy items', '', '', 'cozy_items/1.jpg', 'horizontal'),
(6, 'cozy items', '', '', 'cozy_items/2.jpg', 'vertical'),
(7, 'cozy items', NULL, NULL, 'cozy_items/3.jpg', 'vertical'),
(8, 'cozy items', NULL, NULL, 'cozy_items/4.jpg', 'vertical'),
(9, 'cozy items', NULL, NULL, 'cozy_items/5.jpg', 'vertical'),
(10, 'cozy items', NULL, NULL, 'cozy_items/6.jpg', 'vertical'),
(11, 'decorations', NULL, NULL, 'decorations/2.jpg', 'horizontal'),
(12, 'decorations', NULL, NULL, 'decorations/12.jpg', 'vertical'),
(13, 'decorations', NULL, NULL, 'decorations/3.jpg', 'vertical'),
(14, 'decorations', NULL, NULL, 'decorations/4.jpg', 'horizontal'),
(15, 'decorations', NULL, NULL, 'decorations/5.jpg', 'horizontal'),
(16, 'decorations', NULL, NULL, 'decorations/6.jpg', 'horizontal'),
(17, 'decorations', NULL, NULL, 'decorations/7.jpg', 'horizontal'),
(18, 'decorations', NULL, NULL, 'decorations/8.jpg', 'horizontal'),
(19, 'decorations', NULL, NULL, 'decorations/9.jpg', 'vertical'),
(20, 'decorations', NULL, NULL, 'decorations/10.jpg', 'horizontal'),
(21, 'decorations', NULL, NULL, 'decorations/11.jpg', 'horizontal'),
(22, 'decorations', NULL, NULL, 'decorations/12.jpg', 'vertical'),
(23, 'decorations', NULL, NULL, 'decorations/13.jpg', 'vertical'),
(24, 'decorations', NULL, NULL, 'decorations/14.jpg', 'vertical'),
(25, 'furniture', NULL, NULL, 'furniture/2.jpg', 'vertical'),
(26, 'furniture', NULL, NULL, 'furniture/3.jpg', 'horizontal'),
(27, 'furniture', NULL, NULL, 'furniture/4.jpg', 'horizontal'),
(28, 'furniture', NULL, NULL, 'furniture/5.jpg', 'vertical'),
(29, 'furniture', NULL, NULL, 'furniture/6.jpg', 'horizontal'),
(30, 'furniture', NULL, NULL, 'furniture/7.jpg', 'horizontal'),
(31, 'lighting', NULL, NULL, 'lighting/2.jpg', 'horizontal'),
(32, 'lighting', NULL, NULL, 'lighting/3.jpg', 'horizontal'),
(33, 'textiles', NULL, NULL, 'textiles/2.jpg', 'horizontal'),
(34, 'textiles', NULL, NULL, 'textiles/3.jpg', 'vertical'),
(35, 'textiles', NULL, NULL, 'textiles/4.jpg', 'vertical'),
(36, 'textiles', NULL, NULL, 'textiles/5.jpg', 'vertical'),
(37, 'textiles', NULL, NULL, 'textiles/6.jpg', 'vertical'),
(38, 'textiles', NULL, NULL, 'textiles/7.jpg', 'horizontal'),
(39, 'decorations', NULL, NULL, 'decorations/13.jpg', 'vertical');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
