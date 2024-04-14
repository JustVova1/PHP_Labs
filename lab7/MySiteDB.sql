-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Квт 13 2024 р., 12:07
-- Версія сервера: 8.0.30
-- Версія PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `MySiteDB`
--

-- --------------------------------------------------------

--
-- Структура таблиці `comments`
--

CREATE TABLE `comments` (
  `ID` int NOT NULL COMMENT 'Ідентифікатор запису',
  `Created` date NOT NULL COMMENT 'Дата публікації замітки',
  `Author` varchar(50) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Автор коментаря',
  `Comment` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Вміст коментаря',
  `Art_Id` int NOT NULL COMMENT 'Зовнішній ключ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `comments`
--

INSERT INTO `comments` (`ID`, `Created`, `Author`, `Comment`, `Art_Id`) VALUES
(1, '2024-04-02', 'Volodymyr', 'Hello', 1),
(2, '2024-04-02', 'Володимир', 'hello2', 2),
(3, '2024-04-02', 'Володимир', 'hello3', 3);

-- --------------------------------------------------------

--
-- Структура таблиці `notes`
--

CREATE TABLE `notes` (
  `ID` int NOT NULL COMMENT 'Ідентифікатор запису',
  `Created` date NOT NULL COMMENT 'Дата створення',
  `Title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Заголовок',
  `Article` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Вміст'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `notes`
--

INSERT INTO `notes` (`ID`, `Created`, `Title`, `Article`) VALUES
(1, '2024-04-09', 'Football ', 'ball'),
(2, '2024-04-02', 'Football ', 'ball2'),
(3, '2024-04-02', 'Football ', 'ball3');

-- --------------------------------------------------------

--
-- Структура таблиці `privileges`
--

CREATE TABLE `privileges` (
  `ID` int NOT NULL COMMENT 'Ідентифікатор',
  `Name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Ім''я',
  `Password` varchar(20) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Пароль',
  `Rights` varchar(1) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Права доступу користувача до сторінок сайту'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `privileges`
--

INSERT INTO `privileges` (`ID`, `Name`, `Password`, `Rights`) VALUES
(1, 'Volodymyr', 'qwerty', 'w'),
(2, 'Volodymyr', 'qwerty', 'r');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Art_Id` (`Art_Id`);

--
-- Індекси таблиці `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`ID`);

--
-- Індекси таблиці `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT COMMENT 'Ідентифікатор запису', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `notes`
--
ALTER TABLE `notes`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT COMMENT 'Ідентифікатор запису', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `privileges`
--
ALTER TABLE `privileges`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT COMMENT 'Ідентифікатор', AUTO_INCREMENT=3;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`Art_Id`) REFERENCES `notes` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
