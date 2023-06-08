-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 08 2023 г., 22:13
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
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(4) NOT NULL,
  `short_text` varchar(168) NOT NULL,
  `full_text` text NOT NULL,
  `add_date` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `short_text`, `full_text`, `add_date`, `image`) VALUES
(1, 'This is my first IT post that I\'ve ever written in my entire life! What an incredible pleasure it is to do what you like and you love. Computers have always played', 'This is my first IT post that I\'ve ever written in my entire life!\r\n\r\nWhat an incredible pleasure it is to do what you like and you love. Computers have always played a significant part in my life and I\'ve always felt this connection and a sort of computer intuition inside of me!', '2023-05-11', '1.jpg'),
(2, 'Today, I\'ve decided to edit my classes and id-s names so that to make my code more structural. I am on the way of learning how to write a clean code so that to be under', 'Today, I\'ve decided to edit my classes and id-s names so that to make my code more structural. I am on the way of learning how to write a clean code so that to be understandable and to understand others. I\'ve better placed the side elements on the page. And I\'ve checked my page with ZOOM+/- so that my website will be O.K.', '2023-05-12', '2.jpg'),
(3, 'Happy and fruitful Saturday, because I\'ve created several sliders for my website, linked buttons and texts together, made up some new designs in my head to realize them', 'Happy and fruitful Saturday, because I\'ve created several sliders for my website, linked buttons and texts together, made up some new designs in my head to realize them in the future. These days, even small successes make me happy because each of them is a big achievement on the way to be able to create beautiful and functional websites.', '2023-05-13', 'pic1.jpg'),
(4, 'These days, I feel like logics goes hand in hand with creativity. They never confront but always help each other. Logics is responsible for the task completion speed an', 'These days, I feel like logics goes hand in hand with creativity. They never confront but always help each other. Logics is responsible for the task completion speed and creativity - websites\' attractiveness. It is great when the balance exists and motivates to go straight. I understand why I like coding. I\'ve always loved writing, languages... Each line of coding reminds me of my passions. Let\'s see what it may all lead to.  ', '2023-06-03', 'pic2.jpg'),
(5, 'One week and a half before the final attestation. Sad to understand that studies finish soon because during the courses I\'ve finally managed to get all the data well st', 'One week and a half before the final attestation. Sad to understand that studies finish soon because during the courses I\'ve finally managed to get all the data well structured in my head. When you study alone, you never know what should be learnt the first. With the time, you definitely start to listen to your intuition which leads you to new discoveries. When you have a master, he helps you to follow the path. ', '2023-06-04', 'pic3-1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `short_descr` varchar(255) DEFAULT NULL,
  `full_descr` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `short_descr`, `full_descr`, `image`) VALUES
(1, 'furniture', '', '', 'furniture/1.jpg'),
(2, 'textiles', '', '', 'textiles/1.jpg'),
(3, 'decorations', '', '', 'decorations/1.jpg'),
(4, 'lighting', '', '', 'lighting/1.jpg'),
(5, 'cozy items', '', '', 'cozy_items/1.jpg'),
(6, 'cozy items', '', '', 'cozy_items/2.jpg'),
(7, 'cozy items', NULL, NULL, 'cozy_items/3.jpg'),
(8, 'cozy items', NULL, NULL, 'cozy_items/4.jpg'),
(9, 'cozy items', NULL, NULL, 'cozy_items/5.jpg'),
(10, 'cozy items', NULL, NULL, 'cozy_items/6.jpg'),
(11, 'decorations', NULL, NULL, 'decorations/2.jpg'),
(12, 'decorations', NULL, NULL, 'decorations/2.jpg'),
(13, 'decorations', NULL, NULL, 'decorations/3.jpg'),
(14, 'decorations', NULL, NULL, 'decorations/4.jpg'),
(15, 'decorations', NULL, NULL, 'decorations/5.jpg'),
(16, 'decorations', NULL, NULL, 'decorations/6.jpg'),
(17, 'decorations', NULL, NULL, 'decorations/7.jpg'),
(18, 'decorations', NULL, NULL, 'decorations/8.jpg'),
(19, 'decorations', NULL, NULL, 'decorations/9.jpg'),
(20, 'decorations', NULL, NULL, 'decorations/10.jpg'),
(21, 'decorations', NULL, NULL, 'decorations/11.jpg'),
(22, 'decorations', NULL, NULL, 'decorations/12.jpg'),
(23, 'decorations', NULL, NULL, 'decorations/13.jpg'),
(24, 'decorations', NULL, NULL, 'decorations/14.jpg'),
(25, 'furniture', NULL, NULL, 'furniture/2.jpg'),
(26, 'furniture', NULL, NULL, 'furniture/3.jpg'),
(27, 'furniture', NULL, NULL, 'furniture/4.jpg'),
(28, 'furniture', NULL, NULL, 'furniture/5.jpg'),
(29, 'furniture', NULL, NULL, 'furniture/6.jpg'),
(30, 'furniture', NULL, NULL, 'furniture/7.jpg'),
(31, 'lighting', NULL, NULL, 'lighting/2.jpg'),
(32, 'lighting', NULL, NULL, 'lighting/3.jpg'),
(33, 'textiles', NULL, NULL, 'textiles/2.jpg'),
(34, 'textiles', NULL, NULL, 'textiles/3.jpg'),
(35, 'textiles', NULL, NULL, 'textiles/4.jpg'),
(36, 'textiles', NULL, NULL, 'textiles/5.jpg'),
(37, 'textiles', NULL, NULL, 'textiles/6.jpg'),
(38, 'textiles', NULL, NULL, 'textiles/7.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_descr` varchar(255) NOT NULL,
  `full_descr` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `short_descr`, `full_descr`, `image`) VALUES
(1, 'bedroom', '', '', 'bedroom/1.jpg'),
(2, 'kitchen', '', '', 'kitchen/1.jpg'),
(3, 'bathroom', '', '', 'bathroom/1.jpg'),
(4, 'living room', '', '', 'living_room/1.jpg'),
(5, 'home office', '', '', 'home_office/1.jpg'),
(6, 'bedroom', '', '', 'bedroom/2.jpg'),
(7, 'bedroom', '', '', 'bedroom/3.jpg'),
(8, 'bedroom', '', '', 'bedroom/4.jpg'),
(9, 'bedroom', '', '', 'bedroom/5.jpg'),
(10, 'bedroom', '', '', 'bedroom/6.jpg'),
(11, 'bedroom', '', '', 'bedroom/7.jpg'),
(12, 'bathroom', '', '', 'bathroom/2.jpg'),
(13, 'bathroom', '', '', 'bathroom/3.jpg'),
(14, 'bathroom', '', '', 'bathroom/4.jpg'),
(15, 'bathroom', '', '', 'bathroom/5.jpg'),
(16, 'bathroom', '', '', 'bathroom/6.jpg'),
(17, 'bathroom', '', '', 'bathroom/7.jpg'),
(18, 'bathroom', '', '', 'bathroom/8.jpg'),
(19, 'bathroom', '', '', 'bathroom/9.jpg'),
(20, 'bathroom', '', '', 'bathroom/10.jpg'),
(21, 'bathroom', '', '', 'bathroom/11.jpg'),
(22, 'bathroom', '', '', 'bathroom/12.jpg'),
(23, 'home office', '', '', 'home_office/2.jpg'),
(24, 'home office', '', '', 'home_office/3.jpg'),
(25, 'home office', '', '', 'home_office/4.jpg'),
(26, 'home office', '', '', 'home_office/5.jpg'),
(27, 'home office', '', '', 'home_office/6.jpg'),
(28, 'home office', '', '', 'home_office/7.jpg'),
(29, 'home office', '', '', 'home_office/8.jpg'),
(30, 'home office', '', '', 'home_office/9.jpg'),
(31, 'home office', '', '', 'home_office/10.jpg'),
(32, 'kitchen', '', '', 'kitchen/2.jpg'),
(33, 'kitchen', '', '', 'kitchen/3.jpg'),
(34, 'kitchen', '', '', 'kitchen/4.jpg'),
(35, 'kitchen', '', '', 'kitchen/5.jpg'),
(36, 'kitchen', '', '', 'kitchen/6.jpg'),
(37, 'kitchen', '', '', 'kitchen/7.jpg'),
(38, 'kitchen', '', '', 'kitchen/8.jpg'),
(39, 'kitchen', '', '', 'kitchen/9.jpg'),
(40, 'living room', '', '', 'living_room/2.jpg'),
(41, 'living room', '', '', 'living_room/3.jpg'),
(42, 'living room', '', '', 'living_room/4.jpg'),
(43, 'living room', '', '', 'living_room/5.jpg'),
(44, 'living room', '', '', 'living_room/6.jpg'),
(45, 'living room', '', '', 'living_room/7.jpg'),
(46, 'living room', '', '', 'living_room/8.jpg'),
(47, 'living room', '', '', 'living_room/9.jpg'),
(48, 'living room', '', '', 'living_room/10.jpg'),
(49, 'living room', '', '', 'living_room/11.jpg'),
(50, 'living room', '', '', 'living_room/12.jpg'),
(51, 'living room', '', '', 'living_room/13.jpg'),
(52, 'living room', '', '', 'living_room/14.jpg'),
(53, 'living room', '', '', 'living_room/15.jpg'),
(54, 'living room', '', '', 'living_room/16.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `first_name`, `last_name`, `login`, `password`, `image`) VALUES
(1, 'Marina', 'Anderson', 'marinaK123', '123456', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
