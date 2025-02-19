-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 19 2025 г., 22:43
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `framework`
--

-- --------------------------------------------------------

--
-- Структура таблицы `page`
--

CREATE TABLE `page` (
  `id` int NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `text` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `page`
--

INSERT INTO `page` (`id`, `title`, `text`) VALUES
(1, 'Первый запрос', 'Природа — источник вдохновения. Каждый её элемент, от капель росы до заката, напоминает о том, как важно ценить моменты тишины и красоты.'),
(2, 'Второй запрос', 'Технологии меняют наш мир. Мы можем работать удалённо, общаться с людьми по всему миру и решать задачи мгновенно, улучшая качество жизни.'),
(3, 'Третий запрос', 'Книги — это окна в другие миры. Каждая страница приносит новые идеи, помогает понять себя и окружающий мир, открывая безбрежные горизонты возможностей.');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `price` int NOT NULL DEFAULT '0',
  `quantity` int NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `description`) VALUES
(1, 'Умная розетка SmartPlug X1', 2490, 15, 'Умная розетка с Wi-Fi управлением, поддержка голосовых ассистентов.'),
(2, 'Беспроводные наушники AirSound Pro', 5990, 30, 'Наушники с шумоподавлением, поддержка Bluetooth 5.2, автономность 24 часа.'),
(3, 'Механическая клавиатура MechType K68', 7490, 10, 'Игровая клавиатура с механическими переключателями и RGB-подсветкой.'),
(4, 'Фитнес-браслет FitTrack 5', 3290, 25, 'Фитнес-трекер с пульсометром, мониторингом сна и водонепроницаемостью IP68.'),
(5, 'Внешний SSD-диск SpeedStor 1TB', 9990, 20, 'Высокоскоростной внешний SSD с интерфейсом USB-C, скорость до 1000 МБ/с.'),
(6, 'Игровая мышь HyperClick X7', 4490, 12, 'Эргономичная игровая мышь с сенсором 16 000 DPI и программируемыми кнопками.'),
(7, 'Умная лампочка BrightBulb 10W', 1290, 40, 'RGB-лампочка с регулировкой яркости и управлением через смартфон.'),
(8, 'Пауэрбанк PowerMax 20000mAh', 5690, 18, 'Высокомощный внешний аккумулятор с поддержкой быстрой зарядки PD и QC 3.0.'),
(9, 'Мини-проектор CineView P1', 18990, 8, 'Компактный портативный проектор с разрешением Full HD и встроенным динамиком.'),
(10, 'Смарт-часы TimeSync S3', 7990, 14, 'Многофункциональные смарт-часы с GPS, пульсометром и AMOLED-дисплеем.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `page`
--
ALTER TABLE `page`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
