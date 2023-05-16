-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-02-2023 a las 08:04:45
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejercicio1402`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `cod_reg` int(3) NOT NULL,
  `fecha_reg` date NOT NULL,
  `hora_reg` time NOT NULL,
  `cod_usu` int(3) NOT NULL,
  `tipo_reg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`cod_reg`, `fecha_reg`, `hora_reg`, `cod_usu`, `tipo_reg`) VALUES
(29, '2023-02-14', '11:59:54', 3, 'entradaâ¬†'),
(30, '2023-02-14', '11:59:56', 3, 'Salidaâ¬‡'),
(31, '2023-02-15', '12:00:22', 1, 'entradaâ¬†'),
(32, '2023-02-15', '12:00:23', 1, 'Salidaâ¬‡'),
(33, '2023-02-15', '12:00:34', 2, 'entradaâ¬†'),
(34, '2023-02-15', '12:00:36', 2, 'Salidaâ¬‡'),
(35, '2023-02-15', '12:05:02', 4, 'entradaâ¬†'),
(36, '2023-02-15', '12:05:05', 4, 'Salidaâ¬‡'),
(37, '2023-02-15', '12:12:36', 5, 'entradaâ¬†'),
(38, '2023-02-15', '12:12:37', 5, 'Salidaâ¬‡'),
(39, '2023-02-15', '12:12:53', 4, 'entradaâ¬†'),
(40, '2023-02-15', '12:12:54', 4, 'Salidaâ¬‡'),
(41, '2023-02-15', '07:29:50', 3, 'entradaâ¬†'),
(42, '2023-02-15', '07:29:56', 3, 'Salidaâ¬‡'),
(43, '2023-02-15', '07:40:12', 6, 'entradaâ¬†'),
(44, '2023-02-15', '07:40:16', 6, 'Salidaâ¬‡'),
(45, '2023-02-15', '07:41:11', 6, 'entradaâ¬†'),
(46, '2023-02-15', '07:41:13', 6, 'Salidaâ¬‡'),
(47, '2023-02-15', '07:42:00', 6, 'entradaâ¬†'),
(48, '2023-02-15', '07:42:01', 6, 'Salidaâ¬‡'),
(49, '2023-02-15', '07:42:21', 6, 'entradaâ¬†'),
(50, '2023-02-15', '07:42:22', 6, 'Salidaâ¬‡'),
(51, '2023-02-15', '07:43:11', 7, 'entradaâ¬†'),
(52, '2023-02-15', '07:43:12', 7, 'Salidaâ¬‡'),
(53, '2023-02-15', '07:43:26', 6, 'entradaâ¬†'),
(54, '2023-02-15', '07:43:28', 6, 'Salidaâ¬‡');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usu` int(3) NOT NULL,
  `nom_usu` varchar(100) NOT NULL,
  `email_usu` varchar(100) NOT NULL,
  `pass_usu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cod_usu`, `nom_usu`, `email_usu`, `pass_usu`) VALUES
(1, 'dani', 'a@a', '1234'),
(2, 'dani2', 'b@b', '1234'),
(3, 'Daniel', 'c@c', '1234'),
(4, 'DaniBoy', 'd@d', '1234'),
(5, 'DaniRG', 'f@f', '1234'),
(6, 'danyboy', 'pch@msn.com', '1111'),
(7, 'aula', 'aula@aula', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`cod_reg`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `cod_reg` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
