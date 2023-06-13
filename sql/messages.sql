-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 13 2023 г., 02:31
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
(39, 'Mike', 'Jordan@mail.ru', 'Hello, how are you these days ? \r\n'),
(40, 'Hello', 'Hello@mail.ru', 'What is up ?'),
(41, 'hello', 'helo@mail.ru', 'aheloadfj'),
(42, 'asdfsdf', 'sdfsdf@mail.ru', 'asdfsdfsdfsdf'),
(43, 'asdfdsfsdf', 'alex@mail.ru', 'Hello, how are you doing? i am happy to find your website !'),
(44, 'Mike', 'mike@mail.ru', 'Hi, I like your website');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
