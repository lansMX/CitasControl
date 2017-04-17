-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2017 a las 00:57:14
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `psicologa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE `archivo` (
  `id_archivo` int(11) NOT NULL,
  `fk_id_expediente` int(11) NOT NULL,
  `nombre` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `peso` int(11) NOT NULL,
  `contenido` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` int(11) NOT NULL,
  `fk_id_paciente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(13) NOT NULL DEFAULT 'PROXIMA',
  `tarifa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(75) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(75) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `mensaje` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expediente`
--

CREATE TABLE `expediente` (
  `id_expediente` int(11) NOT NULL,
  `fk_id_cita` int(11) NOT NULL,
  `titulo` varchar(70) NOT NULL DEFAULT 'INDICADOR',
  `descripcion` varchar(255) NOT NULL DEFAULT 'BREVE_EXPLICACION',
  `tecnica` varchar(80) NOT NULL DEFAULT 'TECNICA',
  `nota` varchar(300) NOT NULL DEFAULT 'NOTA_RAPIDA'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `nombre` varchar(75) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO_INGRESADO',
  `apellido_paterno` varchar(75) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO_INGRESADO',
  `apellido_materno` varchar(75) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO_INGRESADO',
  `telefono` varchar(10) NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `calle` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `colonia` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numero` varchar(10) NOT NULL,
  `correo` int(11) NOT NULL,
  `contra` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'paciente'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nombre`, `apellido_paterno`, `apellido_materno`, `telefono`, `email`, `calle`, `colonia`, `numero`, `correo`, `contra`, `role`) VALUES
(1, 'Luis', 'Nav', 'Sal', '2225863563', 'navarretesalgado.lans@gmail.com', 'Vicente Guerrero', 'Patrimonio', '6330', 72450, 'paur3o', 'suprU');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`id_archivo`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD PRIMARY KEY (`id_expediente`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivo`
--
ALTER TABLE `archivo`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `expediente`
--
ALTER TABLE `expediente`
  MODIFY `id_expediente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
