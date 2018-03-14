-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 14 2018 г., 18:36
-- Версия сервера: 5.5.53
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `super_mag`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(1, 'РУБАШКИ', 1, 1),
(2, 'ШОРТЫ', 12, 1),
(3, 'ОБУВЬ', 23, 1),
(4, 'ФУТБОЛКИ', 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `is_new` int(11) NOT NULL,
  `is_recomended` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `image`, `description`, `is_new`, `is_recomended`, `status`) VALUES
(24, 'Красное платье', 4, 12, 200, 1, 'Гучи', '', 'Красное платье для вечеринок', 0, 1, 1),
(25, 'Белая Женская кофта', 4, 1234, 150, 1, 'Гучи', '', 'Кофта', 0, 1, 1),
(26, 'Разноцветное платье', 1, 12345, 500, 1, 'Гучи', '', 'Для девушек шик', 1, 1, 1),
(27, 'Синяя футболка', 4, 5431, 400, 1, 'Гучи', '', 'фывфыпуфк ываи ывр ер кер кер кер кер ', 0, 1, 1),
(28, 'Футболка', 3, 1239, 100, 1, 'Гучи', '', 'фівафв пфавп івап ыва фывп фп фвп фап фвапвыапвап ', 0, 1, 1),
(29, 'Кожанка', 1, 1238, 300, 1, 'Дольчи', '', 'Приветули фываор длфоыивдл фывдла фылдвоа длфыовиал доыфвталдо ыфдвиа ыфива одыфивао иыфдва лдыфиад ыивалди фжыдва лыфива ', 1, 1, 1),
(30, 'Синий свитер', 4, 90, 123, 1, 'Гучи', '', 'фывфыва фыва фыва фыва фыва ыфва фыва фыва ыфва ыфва фыва ', 0, 1, 1),
(31, 'Кросовки для тренировок', 3, 91, 123, 1, 'фвыа', '', 'ыва фыва фыва фыва ывафываыфва ыфва ыфва ыфва ', 0, 1, 1),
(33, 'Молодежные кеды', 3, 93, 100, 1, 'Гучи', '', 'й4 е ыва ыпа рвп апр апр аыпл ждт атвы иафылдвта лжфывта ыфтвадж тылва лыдова фытвлда ыдлвта диоывал тфывлиа лытва зшфыовзшауцзшгарцузщашрцзщу ат ажыфвта жфтыдва фыва фыва ', 0, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_comment` text COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(1, '123123', '123123123', '112351235613gafdgbadfbadfb', 0, '2018-03-01 21:42:06', '{\"8\":1,\"7\":1}', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `role` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Maxim Tokar', 'maksim@gmail.com', '123456', 'admin'),
(2, 'Oleg Hutch', 'maksimsz@gmail.com', 'maksimsz@gmail.com', ''),
(3, 'Hutch Arrow', 'sz@gmail.com', 'sz@gmail.com', ''),
(4, 'Hutch Arrow', 'sz@mail.ru', 'sz@mail.ru', ''),
(5, 'asdasd215', 'maksimys_96@mail.ru', 'maksimys_96@mail.ru', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT для таблицы `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
