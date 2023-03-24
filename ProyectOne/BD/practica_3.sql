-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2023 a las 20:19:13
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica_3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `Id_lugar` int(11) NOT NULL,
  `nombre_lugar` varchar(55) NOT NULL,
  `descripcion` text NOT NULL,
  `telefono_lugar` varchar(55) NOT NULL,
  `email_lugar` varchar(55) NOT NULL,
  `Facebook` varchar(55) NOT NULL,
  `horario` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantel`
--

CREATE TABLE `plantel` (
  `Id_plantel` int(11) NOT NULL,
  `nombre_plantel` varchar(55) NOT NULL,
  `clave_plantel` varchar(55) NOT NULL,
  `direccion_plantel` varchar(55) NOT NULL,
  `telefono_plantel` varchar(55) NOT NULL,
  `responsable` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `Id_registro` int(11) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `apellidos` varchar(55) NOT NULL,
  `direccion` varchar(55) NOT NULL,
  `telefono` varchar(55) NOT NULL,
  `fecha_nac` date NOT NULL,
  `email_lugar` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`Id_lugar`);

--
-- Indices de la tabla `plantel`
--
ALTER TABLE `plantel`
  ADD PRIMARY KEY (`Id_plantel`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`Id_registro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `Id_lugar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plantel`
--
ALTER TABLE `plantel`
  MODIFY `Id_plantel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `Id_registro` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
