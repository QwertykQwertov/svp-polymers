-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 10 2024 г., 23:08
-- Версия сервера: 10.3.34-MariaDB
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `svp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_link` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `category_link`) VALUES
(1, 'ПВХ пруток', 'ser_d3.jpeg', '', 'pvc_rod'),
(2, 'Пластик ПВХ', 'plastic_pvc.jpg', '', 'pvc_plastic'),
(3, 'Сэндвич-панели', 'sandwich.jpg', '', 'sandwich'),
(4, 'ПП', 'pp.png', '', 'pp'),
(5, 'ПНД', 'pnd.jpg', '', 'pnd'),
(6, 'Монолитный  поликарбонат', 'monolitniy_polycarbonat.jpg', '', 'monolithic_polycarbonate'),
(7, 'ПЭТ', 'pet.png', '', 'pat'),
(8, 'Полистирол', 'polystirol.webp', '', 'polystyrene');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(100) NOT NULL,
  `opt_price` int(100) NOT NULL,
  `pack` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diameter` int(100) DEFAULT NULL,
  `use_product` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `href`, `category`, `subcategory`, `image`, `price`, `opt_price`, `pack`, `description`, `color`, `diameter`, `use_product`, `instruction`, `format`, `width`) VALUES
(5, 'Пруток ПВХ для сварки белый d 4 мм', '', '1', '1', 'bel_1.jpeg', 3887, 3642, 'бухта 5кг', 'Сварочный пруток применяется для надежной и качественной сварки пластмассовых материалов. Сварочный пруток продается бухтами, в 1ой бухте 5кг, примерно 400 м.п.', 'белый', 4, 'Сварочный пруток применяется для надежной и качественной сварки пластмассовых материалов.', '<ul><li>Подготовка рабочей зоны и компонентов. Заточите кончик прутка и прикрепите насадку. Пруток должен выступать из насадки на 45-50 мм.</li>\r\n<li>Нагрев оборудования до необходимой температуры. Предварительный нагрев рабочей поверхности. Для этого используйте обычный строительный фен.</li>\r\n<li>Прямая сварка. Здесь необходимо следить за положением сварочного аппарата. Инструмент наклоняется параллельно шву (канавке). Как только пластик начинает нагреваться, пруток осторожным толкающим движением помещается в шов.</li><br>\r\n<p>При соблюдении правил техники и безопасности сварка пластика не представляет сложности.\r\nСварочный пруток продается бухтами , в 1ой бухте 5кг., примерно 400м.п.</p>', '', NULL),
(6, 'Пруток ПВХ для сварки серый \"овал 5/3\"', '', '1', '2', 'ser_oval.jpeg', 4211, 3945, 'бухта 5кг', 'Сварочный пруток применяется для надежной и качественной сварки пластмассовых материалов. Сварочный пруток продается бухтами, в 1ой бухте 5кг, примерно 400 м.п.', 'серый', 0, '', '', '', 0),
(7, 'Пруток ПВХ для сварки серый d 3 мм', '', '1', '2', 'ser_d3.jpeg', 4211, 3945, 'бухта 5кг', 'Сварочный пруток применяется для надежной и качественной сварки пластмассовых материалов. Сварочный пруток продается бухтами, в 1ой бухте 5кг, примерно 400 м.п.', 'серый', 3, '', '', '', 0),
(8, 'Пруток ПВХ для сварки серый d 4 мм', '', '1', '2', 'ser_d4.jpg', 4211, 3945, 'бухта 5кг', 'Сварочный пруток применяется для надежной и качественной сварки пластмассовых материалов. Сварочный пруток продается бухтами, в 1ой бухте 5кг, примерно 400 м.п.', 'серый', 4, '', '', '', 0),
(9, 'ПВХ 03,0мм (1500х3000) RS-Rigid - NF	\r\n', NULL, '2', '6', 'pvc-trudnogoruch.jpg', 11633, 10732, 'лист', NULL, NULL, NULL, NULL, NULL, '1500х3000', 3),
(10, 'ПВХ 04,0мм (2000х3000) RS-Rigid - NF	\r\n', NULL, '2', '6', 'pvc-trudnogoruch.jpg', 20534, 18942, 'лист', NULL, NULL, NULL, NULL, NULL, '2000х3000', 4),
(11, 'ПЛАСТИК ПВХ жесткий RSRigid белый. 0,6мм глянцевый (с защитной пленкой)	', NULL, '2', '4', 'zhestkiy.png', 1452, 1339, 'лист', NULL, 'белый', NULL, NULL, NULL, '1500х3000', 0.6),
(12, 'ПЛАСТИК ПВХ жесткий RSRigid белый 0,6мм матовый (с защитной пленкой)	', NULL, '2', '4', 'zhestkiy.png', 1322, 1219, 'лист', NULL, NULL, NULL, NULL, NULL, '1500х3000', 0.6),
(16, 'ПЛАСТИК ПВХ жесткий RSRigid белый 0.7 мм глянцевый (с защитной пленкой) 2000х3000	\r\n', NULL, '2', '4', 'zhestkiy.png', 2240, 2066, 'лист', NULL, 'белый', NULL, NULL, NULL, '2000х3000', 0.7),
(17, 'ПЛАСТИК ПВХ жесткий RSRigid белый 0,7мм глянцевый (с защитной пленкой)	\r\n', '', '2', '4', 'zhestkiy.png', 1679, 1549, 'лист', NULL, 'белый', NULL, NULL, NULL, '1500х3000', 0.7),
(18, 'ПЛАСТИК ПВХ жесткий RSRigid белый 0.7 мм матовый (с защитной пленкой) 2000х3000	\r\n', NULL, '2', '4', 'zhestkiy.png', 2054, 1895, 'лист', NULL, 'белый', NULL, NULL, NULL, '2000х3000', 0.7),
(19, 'ПЛАСТИК ПВХ жесткий RSRigid белый 0,7мм матовый (с защитной пленкой)', NULL, '2', '4', 'zhestkiy.png', 1541, 1422, 'лист', NULL, 'белый', NULL, NULL, NULL, '1500х3000\r\n', 0.7),
(20, 'ПЛАСТИК ПВХ жесткий RSRigid белый 1,4 мм матовый (с защитной пленкой)', NULL, '2', '4', 'zhestkiy.png', 4314, 3979, 'лист', NULL, 'белый', NULL, NULL, NULL, '2000х3000', 1.4),
(21, 'ПЛАСТИК ПВХ жесткий RSRigid белый 1,4 мм матовый (с защитной пленкой)', NULL, '2', '4', 'zhestkiy.png', 3235, 2984, 'лист', NULL, 'белый', NULL, NULL, NULL, '1500х3000', 1.4),
(22, 'ПЛАСТИК ПВХ жесткий RSRigid белый 10 мм матовый (с защитной пленкой)', NULL, '2', '4', 'zhestkiy_bel.jpeg', 24569, 22665, 'лист', NULL, 'белый', NULL, NULL, NULL, '1500х3000', 10),
(23, 'ПЛАСТИК ПВХ жесткий RSRigid белый 2 мм матовый (с защитной пленкой)', NULL, '2', '4', 'zhestkiy_bel.jpeg', 6158, 5681, 'лист', NULL, 'белый', NULL, NULL, NULL, '2000х3000', 2),
(24, 'ПЛАСТИК ПВХ жесткий RSRigid белый 3 мм матовый (с защитной пленкой)', NULL, '2', '4', 'zhestkiy_bel.jpeg', 9151, 8441, 'лист', NULL, 'белый', NULL, NULL, NULL, '2000х3000', 3),
(25, 'ПЛАСТИК ПВХ жесткий RSRigid белый 4 мм матовый (с защитной пленкой)', NULL, '2', '4', 'zhestkiy_bel.jpeg', 12114, 11176, 'лист', NULL, 'белый', NULL, NULL, NULL, '2000х3000', 4),
(26, 'ПЛАСТИК ПВХ жесткий RSRigid белый 5 мм матовый (с защитной пленкой)', NULL, '2', '4', 'zhestkiy_bel.jpeg', 15095, 13925, 'лист', NULL, 'белый', NULL, NULL, NULL, '2000х3000', 5),
(27, 'ПЛАСТИК ПВХ жесткий RSRigid белый 8 мм матовый (с защитной пленкой)', NULL, '2', '4', 'zhestkiy_bel.jpeg', 19032, 17557, 'лист', NULL, 'белый', NULL, NULL, NULL, '1500х3000', 8),
(28, 'ПЛАСТИК ПВХ жесткий RSRigid Flex белый 0,7мм матовый (с защитной пленкой)', NULL, '2', '4', 'zhestkiy.png', 1857, 1713, 'лист', NULL, 'белый', NULL, NULL, NULL, '1500х3000', 0.7),
(29, 'ПЛАСТИК ПВХ жесткий RSRigid Flex белый 1,4 мм матовый (с защитной пленкой)', NULL, '2', '4', 'zhestkiy.png', 3712, 3425, 'лист', NULL, 'белый', NULL, NULL, NULL, '1500х3000', 1.4);

-- --------------------------------------------------------

--
-- Структура таблицы `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `image`, `link`, `category`) VALUES
(1, 'ПВХ пруток белый', 'subcat_bel_2.jpeg', 'pvc_rod_white', 1),
(2, 'ПВХ пруток серый', 'subcat_ser_oval.jpeg', 'pvc_rod_black', 1),
(3, 'Вспененный', 'subcat_foam.jpg', 'foam', 2),
(4, 'Жесткий', 'subcat_pvc_zhestk.png', 'rigid', 2),
(5, 'Светоблокирующий', 'subcat_light_block.jpg', 'light_blocking', 2),
(6, 'Трудногорючий', 'subcat_pvc-trudnogoruch.jpg', 'flame_resistant', 2),
(7, 'Блоксополимер', '', 'blocksopolymer', 4),
(8, 'Гомополимер', '', 'homopolymer', 4),
(9, 'ПНД', '', 'pnd', 5),
(10, 'ПНД для хоккейных коробок', '', 'pnd_hockey', 5),
(11, 'УПС', '', 'ps', 8),
(12, 'ПС', '', 'ups', 8);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
