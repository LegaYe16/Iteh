-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 28 2020 г., 11:08
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `legadb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `departament`
--

CREATE TABLE `departament` (
  `ID_Departament` int(11) NOT NULL,
  `chief` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `departament`
--

INSERT INTO `departament` (`ID_Departament`, `chief`) VALUES
(1, 'Антон'),
(2, 'Дима');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `ID_Projects` int(11) NOT NULL,
  `name` text NOT NULL,
  `manager` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`ID_Projects`, `name`, `manager`) VALUES
(1, 'lab1', 'Антон'),
(2, 'lab2', 'Василий');

-- --------------------------------------------------------

--
-- Структура таблицы `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `Fid_Worker` int(11) NOT NULL,
  `Fid_Projects` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `work`
--

INSERT INTO `work` (`id`, `Fid_Worker`, `Fid_Projects`, `date`, `time_start`, `time_end`, `description`) VALUES
(1, 1, 1, '2020-03-12', '11:22:33', '11:23:25', 'description12'),
(2, 2, 2, '2020-03-02', '15:00:00', '20:00:00', 'description1');

-- --------------------------------------------------------

--
-- Структура таблицы `worker`
--

CREATE TABLE `worker` (
  `ID_Worker` int(11) NOT NULL,
  `Name_worker` char(15) NOT NULL,
  `FID_Department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `worker`
--

INSERT INTO `worker` (`ID_Worker`, `Name_worker`, `FID_Department`) VALUES
(1, 'Роман', 1),
(2, 'Давид', 1),
(3, 'Гоша', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
