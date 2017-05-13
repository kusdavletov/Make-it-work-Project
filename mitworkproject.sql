-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 12 2017 г., 10:14
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mitworkproject`
--

-- --------------------------------------------------------

--
-- Структура таблицы `class`
--

CREATE TABLE `class` (
  `id` int(4) NOT NULL,
  `fio_teacher` varchar(20) NOT NULL,
  `average_point` float NOT NULL,
  `number_of_students` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `class`
--

INSERT INTO `class` (`id`, `fio_teacher`, `average_point`, `number_of_students`) VALUES
(1, 'Ivan Ivanov', 98, 2),
(2, 'Alla Petrovna', 76, 2),
(3, 'Dautov Askar', 50, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `student_id` int(4) NOT NULL,
  `student_fio` varchar(20) NOT NULL,
  `student_class` int(2) NOT NULL,
  `student_score` int(3) NOT NULL,
  `student_enrollment` varchar(8) NOT NULL,
  `student_graduation` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`student_id`, `student_fio`, `student_class`, `student_score`, `student_enrollment`, `student_graduation`) VALUES
(1, 'Kusdavletov Ernar', 1, 100, '2015', '2019'),
(2, 'Kairzhanov Damir', 1, 96, '2015', '2019'),
(3, 'Abdigazy Angsagan', 2, 92, '2020', '2024'),
(4, 'Zhardemov Azat', 2, 60, '2016', '2020'),
(5, 'Gabbas Malika', 3, 50, '2010', '2015');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `class`
--
ALTER TABLE `class`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
