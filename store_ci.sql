-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2020 a las 02:31:25
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store_ci`
--
CREATE DATABASE IF NOT EXISTS `store_ci` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `store_ci`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `store`
--

DROP TABLE IF EXISTS `store`;
CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `fecha_ingreso` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `store`
--

INSERT INTO `store` (`id`, `nombre`, `marca`, `descripcion`, `precio`, `fecha_ingreso`) VALUES
(1, 'Laptop Lenovo', 'Lenovo', 'Lenovo Thinkpad, procesador AMD, ROM 500GB, RAM 8BG', '400.00', '2020-07-27 19:52:15'),
(2, 'Laptop Lenovo', 'Lenovo', 'Lenovo Thinkpad, procesador AMD, ROM 500GB, RAM 8BG', '400.00', '2020-07-27 19:52:15'),
(3, 'Laptop Lenovo', 'Lenovo', 'Lenovo Thinkpad, procesador AMD, ROM 500GB, RAM 8BG', '400.00', '2020-07-27 19:52:15'),
(4, 'Laptop Lenovo', 'Lenovo', 'Lenovo Thinkpad, procesador AMD, ROM 500GB, RAM 8BG', '400.00', '2020-07-27 19:52:15'),
(5, 'Laptop Lenovo', 'Lenovo', 'Lenovo Thinkpad, procesador AMD, ROM 500GB, RAM 8BG', '400.00', '2020-07-27 19:52:15'),
(6, 'Laptop Lenovo', 'Lenovo', 'Lenovo Thinkpad, procesador AMD, ROM 500GB, RAM 8BG', '400.00', '2020-07-27 19:52:15'),
(7, 'Laptop Lenovo', 'Lenovo', 'Lenovo Thinkpad, procesador AMD, ROM 500GB, RAM 8BG', '400.00', '2020-07-27 19:52:15'),
(8, 'Laptop Lenovo', 'Lenovo', 'Lenovo Thinkpad, procesador AMD, ROM 500GB, RAM 8BG', '400.00', '2020-07-27 19:52:15'),
(10, 'Hp EliteBook', 'HP', 'Computadora de escritorio', '450.00', '2020-07-28 16:56:05'),
(11, 'Hp EliteBook', 'HP', 'Computadora de escritorio procesador AMD integrado', '550.00', '2020-07-28 16:57:35'),
(12, 'Dell escritorio', 'Dell', 'Computadora de escritorio', '456.00', '2020-07-28 17:22:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
