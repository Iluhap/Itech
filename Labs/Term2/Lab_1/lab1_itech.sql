-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 17 2022 г., 20:23
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lab1_itech`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `ID_Category` int(10) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`ID_Category`, `name`) VALUES
(1, 'category1'),
(2, 'category2'),
(3, 'category3'),
(4, 'category4');

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `ID_ITEMS` int(10) NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `quality` text NOT NULL,
  `quantity` int(10) NOT NULL,
  `FID_VENDOR` int(10) NOT NULL,
  `FID_CATEGORY` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`ID_ITEMS`, `name`, `price`, `quality`, `quantity`, `FID_VENDOR`, `FID_CATEGORY`) VALUES
(1, 'Item1', 11111, 'some_quality', 1, 1, 4),
(2, 'Item2', 22222, 'some_quality', 2, 1, 1),
(3, 'Item3', 33333, 'some_quality', 3, 2, 2),
(4, 'Item4', 1122, 'some_quality', 4, 2, 3),
(5, 'Item5', 3331, 'some_quality', 5, 3, 2),
(6, 'Item6', 2223, 'some_quality', 6, 3, 5),
(7, 'Item7', 22313, 'some_quality', 7, 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `vendors`
--

CREATE TABLE `vendors` (
  `ID_VENDORS` int(10) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `vendors`
--

INSERT INTO `vendors` (`ID_VENDORS`, `name`) VALUES
(1, 'vendor1'),
(2, 'vendor2'),
(3, 'vendor3'),
(4, 'vendor4'),
(5, 'vendor5');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_Category`);

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID_ITEMS`);

--
-- Индексы таблицы `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`ID_VENDORS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
