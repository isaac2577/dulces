-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2023 a las 03:19:22
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dulceria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dulces`
--

CREATE TABLE `dulces` (
  `id_dulce` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `costo` int(10) NOT NULL,
  `Textura` varchar(50) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dulces`
--

INSERT INTO `dulces` (`id_dulce`, `nombre`, `cantidad`, `costo`, `Textura`, `fecha`) VALUES
(1, 'Mazapan', 4, 5, 'suave', '2023-12-08'),
(2, 'Picafresa', 10, 2, '', '2023-12-30'),
(3, 'Picafresa', 10, 2, 'suave', '2023-12-30'),
(4, 'bombon', 10, 2, 'suave', '2023-12-23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dulces`
--
ALTER TABLE `dulces`
  ADD PRIMARY KEY (`id_dulce`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dulces`
--
ALTER TABLE `dulces`
  MODIFY `id_dulce` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
