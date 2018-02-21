-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 17 2017 г., 11:35
-- Версия сервера: 10.1.25-MariaDB
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `armbd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `grid35`
--

CREATE TABLE `grid35` (
  `id` int(11) NOT NULL,
  `imia` varchar(255) NOT NULL,
  `familia` varchar(255) NOT NULL,
  `pobatkovi` varchar(255) NOT NULL,
  `riknar` int(11) DEFAULT NULL,
  `notatok` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `grid35`
--

INSERT INTO `grid35` (`id`, `imia`, `familia`, `pobatkovi`, `riknar`, `notatok`) VALUES
(1, 'Ð Ñ–Ñ…Ð°Ñ€Ð´', 'ÐŸÐ¾Ð¿Ð¾Ð²Ð¸Ñ‡', 'Ð Ñ–Ñ…Ð°Ñ€Ð´Ð¾Ð²Ð¸Ñ‡', 1996, 'Ð¨Ð¾ÑÑŒ ÑˆÐ°Ñ€Ð¸Ñ‚ÑŒ, Ð½Ð¾ Ð»Ñ–Ð½Ð¸Ð²Ð¸Ð¹'),
(2, 'ÐŸÐµÑ‚Ñ€Ð¾', 'Ð“Ñ€ÐµÐ¹Ñ†Ð°Ñ€Ð¾Ð²ÑÑŒÐºÐ¸Ð¹', 'Ð‘Ð°Ñ‚ÑŒÐºÐ¾Ð²Ð¸Ñ‡', 1998, 'ÐšÑ€ÑƒÑ‚Ð¸Ð¹ ÑÑ‚ÑƒÐ´ÐµÐ½Ñ‚');

-- --------------------------------------------------------

--
-- Структура таблицы `grid36`
--

CREATE TABLE `grid36` (
  `id` int(11) NOT NULL,
  `imia` varchar(255) NOT NULL,
  `familia` varchar(255) NOT NULL,
  `pobatkovi` varchar(255) NOT NULL,
  `riknar` int(11) DEFAULT NULL,
  `notatok` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `grid36`
--

INSERT INTO `grid36` (`id`, `imia`, `familia`, `pobatkovi`, `riknar`, `notatok`) VALUES
(1, 'ÐÐ»ÐµÑ€Ñ–Ñ', 'Ð’Ñ–Ñ‚Ñ€Ð¾ÐºÑ€Ð¸Ð»Ð°', 'Ð’Ð°Ð»ÐµÑ€Ñ–Ñ—Ð²Ð½Ð°', 2000, 'Ð¤Ð°Ð¹Ð½Ð°, Ð½Ð¾ Ð½Ð°Ð³Ð»Ð°'),
(2, 'ÐšÐ°Ñ‚Ñ', 'Ð†Ð³Ð½Ð°Ñ†', 'Ð’Ð°ÑÐ¸Ð»Ñ–Ð²Ð½Ð°', 1999, 'Ð¢Ð¾Ð¶Ðµ Ñ„Ð°Ð¹Ð½Ð°, Ð½Ð¾ Ñ…Ð¸Ñ‚Ñ€Ð°');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `nazva` varchar(15) NOT NULL,
  `opisanie` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `nazva`, `opisanie`) VALUES
(35, 'ÐšÐ-42', 'Ð—Ð½Ð°ÑŽÑ‚ÑŒ Ð¿Ð¸ÑÐ°Ñ‚Ð¸ Ð¿Ñ€Ð¾Ð³Ñ€Ð°Ð¼Ð¸'),
(36, 'Ð‘Ðž-31', 'Ð¤Ð°Ð¹Ð½Ñ– Ð´Ñ–Ð²Ñ‡Ð°Ñ‚Ð°'),
(37, 'Ð‘Ð¡-21', 'Ð‘ÑƒÐ´Ñ–Ð²ÐµÐ»ÑŒÐ½Ð¸ÐºÐ¸');

-- --------------------------------------------------------

--
-- Структура таблицы `journal12`
--

CREATE TABLE `journal12` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `tema` varchar(255) DEFAULT NULL,
  `zapisi` varchar(800) DEFAULT NULL,
  `tipuroka` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `journal12`
--

INSERT INTO `journal12` (`id`, `date`, `tema`, `zapisi`, `tipuroka`) VALUES
(3, '2017-09-14', 'Ð£Ð¶Ð³Ð¾Ñ€Ð¾Ð´ Ð´ÑƒÐ¶Ðµ Ð±Ð°Ð³Ð°Ñ‚Ð¸Ð¹ (Ð²ÑÑ‚ÑƒÐ¿)', '5,-', ''),
(4, '2017-09-15', 'Ð£Ð¶Ð³Ð¾Ñ€Ð¾Ð´ ÑÐº Ð±Ñ–Ð·Ð½ÐµÑ', '5,Ð½', ''),
(5, '2017-09-21', 'urok', 'Ð½,Ð½', '');

-- --------------------------------------------------------

--
-- Структура таблицы `journal13`
--

CREATE TABLE `journal13` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `tema` varchar(255) DEFAULT NULL,
  `zapisi` varchar(800) DEFAULT NULL,
  `tipuroka` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `journal13`
--

INSERT INTO `journal13` (`id`, `date`, `tema`, `zapisi`, `tipuroka`) VALUES
(5, '2017-12-10', 'Ð’ÐµÐ»Ð¸ÐºÑ– Ñ‡Ð¸ÑÐ»Ð°', '-,-', 'Ð›ÐµÐºÑ†Ñ–Ñ');

-- --------------------------------------------------------

--
-- Структура таблицы `journals`
--

CREATE TABLE `journals` (
  `id` int(11) NOT NULL,
  `predmet` varchar(200) NOT NULL,
  `id_lect` int(11) NOT NULL,
  `id_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `journals`
--

INSERT INTO `journals` (`id`, `predmet`, `id_lect`, `id_group`) VALUES
(12, 'Ð•ÐºÐ¾Ð½Ð¾Ð¼Ñ–ÐºÐ° Ð£Ð¶Ð³Ð¾Ñ€Ð¾Ð´Ð°', 3, 35),
(13, 'Ð‘Ð¾Ñ‚Ð°Ð½Ñ–ÐºÐ°', 4, 36);

-- --------------------------------------------------------

--
-- Структура таблицы `lectors`
--

CREATE TABLE `lectors` (
  `id` int(11) NOT NULL,
  `lect_pib` varchar(60) DEFAULT NULL,
  `lect_urok` varchar(60) DEFAULT NULL,
  `rozklad_pon` varchar(600) NOT NULL,
  `rozklad_viv` varchar(600) NOT NULL,
  `rozklad_ser` varchar(600) NOT NULL,
  `rozklad_chet` varchar(600) NOT NULL,
  `rozklad_piat` varchar(600) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `lectors`
--

INSERT INTO `lectors` (`id`, `lect_pib`, `lect_urok`, `rozklad_pon`, `rozklad_viv`, `rozklad_ser`, `rozklad_chet`, `rozklad_piat`, `login`, `password`) VALUES
(3, 'ÐŸÐµÑ‚Ñ€Ð¾Ð²Ñ†Ð¸ Ð’Ð°ÑÐ¸Ð»ÑŒ ÐŸÐµÑ‚Ñ€Ð¾Ð²Ð¸Ñ‡', 'Ð•ÐºÐ¾Ð½Ð¾Ð¼Ñ–ÐºÐ°', '35,35,36,0,0', '0,0,0,0,0', '0,0,0,0,0', '0,0,0,0,0', '0,0,0,0,0', 'dekanat', 'dekanat'),
(4, 'Ð£Ñ‡ÐµÐ½ÐºÐ¾ Ð”Ð¼Ð¸Ñ‚Ñ€Ð¾ Ð’Ð°ÑÐ¸Ð»ÑŒÐ¾Ð²Ð¸Ñ‡', 'Ð‘Ñ–Ð¾Ð»Ð¾Ð³Ñ–Ñ', '0,36,0,0,0', '0,0,0,0,0', '0,0,0,0,0', '0,0,0,0,0', '0,0,0,0,0', 'dima', 'dima');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `grid35`
--
ALTER TABLE `grid35`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `grid36`
--
ALTER TABLE `grid36`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `journal12`
--
ALTER TABLE `journal12`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `journal13`
--
ALTER TABLE `journal13`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lectors`
--
ALTER TABLE `lectors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `grid35`
--
ALTER TABLE `grid35`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `grid36`
--
ALTER TABLE `grid36`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT для таблицы `journal12`
--
ALTER TABLE `journal12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `journal13`
--
ALTER TABLE `journal13`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `journals`
--
ALTER TABLE `journals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `lectors`
--
ALTER TABLE `lectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
