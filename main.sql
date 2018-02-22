-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 22 2018 г., 21:08
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `lolkeker`
--

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `Subject` varchar(255) NOT NULL,
  `WorkOrder_ID` int(11) NOT NULL,
  `WorkOrder_URL` varchar(255) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Internal Description` varchar(2000) NOT NULL,
  `Response/Solution` varchar(255) NOT NULL,
  `Assigned_to` varchar(255) NOT NULL,
  `Progress` varchar(255) NOT NULL,
  `Spec` varchar(255) NOT NULL,
  `QA` varchar(255) NOT NULL,
  `Project` varchar(255) NOT NULL,
  `Registration_Date` date NOT NULL,
  `Estimated_Hours` float NOT NULL,
  `Actual_Hours` float NOT NULL,
  `Module` varchar(255) NOT NULL,
  `Started_Date` date NOT NULL,
  PRIMARY KEY (`WorkOrder_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`Subject`, `WorkOrder_ID`, `WorkOrder_URL`, `Description`, `Internal Description`, `Response/Solution`, `Assigned_to`, `Progress`, `Spec`, `QA`, `Project`, `Registration_Date`, `Estimated_Hours`, `Actual_Hours`, `Module`, `Started_Date`) VALUES
('lolo kek', 1212, 'kek lol', 'cheburek', 'sweet cheburek', 'daft punk', 'rammstein', 'uganda', 'my sql', 'ded sus', 'tatra ', '2018-02-28', 1.2, 1.2, '2.3', '2018-03-01'),
('eueou', 1414, 'oeu ', 'aou au ', 'e u', ' oeu ', ' oeu a ', ' eu yp ', 'iii u ui u ', 'ei ,p. ieoui', ' ueoi kjqkx o', '2018-02-21', 0, 0, 'a'',.u ', '2018-02-09'),
('eueou', 1454, 'oeu ', 'aou au ', 'e u', ' oeu ', ' oeu a ', ' eu yp ', 'iii u ui u ', 'ei ,p. ieoui', ' ueoi kjqkx o', '2018-02-21', 0, 1.2, '1.2'',.u ', '2018-02-09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
