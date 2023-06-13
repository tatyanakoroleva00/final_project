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
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `first_name`, `last_name`, `login`, `email`, `password`, `image`) VALUES
(2, 'tatyana', 'Tatiana', 'Koroleva', 'tatyanakoroleva00@mail.ru', '$2y$10$lpQPlcLldBx8pXBGQJtXP.Q.cX5iAtF5DzjEZqKNtG8hD/LOhzXTu', NULL),
(7, 'dsfsdfsdf', 'sdfsdf', 'sdfdsfsdf', 'sdafdsf@nmauk.ru', '$2y$10$/yo9OsHGdbW3CYciUvTeIeNAx1N60wKyLVtSRzVDAmchPUPFJivaW', NULL),
(8, 'sdfsdf', 'sdaf', 'sdaf', 'sdfsdf@mail.ru', '$2y$10$HePuOLJZCZgxK9G0Zq803eZfEt16jaD3vXaoaTl6oXYsoRd3aA.4K', NULL),
(9, 'sdafsdfdsdf', 'asdfsdf', 'sadfsdf', 'dasfdsfdf@mail.ru', '$2y$10$Mb2N5j1oDwqB83ruFxzUpO9YhDeYEskH.ZYNwQDPvnN.qOBsxtbR2', NULL),
(10, 'tatiana', 'Tatiana', 'Koroleva', 'tatyanakoroleva00@gmail.ru', '$2y$10$eR28m31.f0NbjZhSCRKaL.ULEuBCXl3IvJX.8MlSya7b4lCNKThjC', NULL),
(11, 'koroleva1', 'tatiana', 'koroleva', 'tatyanakoroleva0000@mail.ru', '$2y$10$kbCoenQ8NQDwN09ga6UWbeSFriF225FNPeOj2Ni3JHMlA5rNohvdW', NULL),
(12, 'katya123', 'katya', 'koroleva', 'koroleva@mail.ru', '123456', NULL),
(13, 'hello', 'tatyana', 'koroleva', 'hello@mail.ru', '$2y$10$JWjHK5umFi4RBvcwY0lbXuHv6zi7SQD4.U8PR1dhsnrHRb79bUY5G', NULL),
(14, 'mike', 'Mike', 'Brew', 'mike123@mail.ru', '123456', NULL),
(15, 'Annabelle', 'Anna', 'Belle', 'annabelle@mail.ru', 'Annabelle', NULL),
(16, 'annabelle123', 'Annabelle', 'Annabelle', 'annabelle123@mail.ru', 'annabelle123', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
