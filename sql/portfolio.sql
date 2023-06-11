-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 11 2023 г., 00:30
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

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(19, 'ыфваыва', 'asdkjdsfkjd@mail.ru', 'asdlfsdfjkajsdfsdf'),
(20, 'ыфваыва', 'asdkjdsfkjd@mail.ru', 'asdlfsdfjkajsdfsdf'),
(21, 'ыфваыва', 'asdkjdsfkjd@mail.ru', 'asdlfsdfjkajsdfsdf'),
(22, 'ыфваыва', 'asdkjdsfkjd@mail.ru', 'asdlfsdfjkajsdfsdf'),
(23, 'ыфваыва', 'asdkjdsfkjd@mail.ru', 'asdlfsdfjkajsdfsdf'),
(24, 'asdfadsf', 'adfafsdafsd@mail.ru', 'fkajdf;ajsf;ksadj;f'),
(25, 'Tatiana', 'tatyanakoroleva@mail.ru', 'Hello :)'),
(26, 'dfgfdg', 'fdgfdgfdg@mail.ru', 'falsjdf\'asjdfklsddsfasdf'),
(27, 'Tatiana', 'tatyanakoroleva@mail.ru', 'Hello :)'),
(28, 'asdfasdf', 'asdfasdfdsf@mail.ru', 'sadfsdfsdfdf'),
(29, 'asdfsdaf', 'asdfadf@mail.ru', 'adfasdfsdafdsf'),
(30, 'dfgfdg', 'fdgfdgfdg@mail.ru', 'falsjdf\'asjdfklsddsfasdf'),
(31, 'фывафыва', 'kadjfkdjf@amail.ru', 'akfjakdfj;akdsfsdfsdafds'),
(32, 'фывафыва', 'kadjfkdjf@amail.ru', 'akfjakdfj;akdsfsdfsdafds'),
(33, 'asdfasdf', 'asdfasdfdsf@mail.ru', 'sadfsdfsdfdf'),
(34, 'asdfasdf', 'asdfasdfdsf@mail.ru', 'sadfsdfsdfdf'),
(35, 'asdfasdf', 'sdafasdf@mail.ru', 'dsfsdfsdf'),
(36, 'adfasd', 'fasdfasdf@maidfljaf', 'adfadfads'),
(37, 'adfasd', 'fasdfasdf@maidfljaf', 'adfadfads'),
(38, 'dfsdf', 'dsfadff@mail.rusajdf', 'asdfadsfsdf'),
(39, 'Mike', 'Jordan@mail.ru', 'Hello, how are you these days ? \r\n'),
(40, 'Hello', 'Hello@mail.ru', 'What is up ?'),
(41, 'hello', 'helo@mail.ru', 'aheloadfj'),
(42, 'asdfsdf', 'sdfsdf@mail.ru', 'asdfsdfsdfsdf');

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
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
