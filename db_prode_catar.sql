-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2022 a las 23:46:35
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_prode_catar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `nacceso` int(11) DEFAULT NULL,
  `vacceso` varchar(100) NOT NULL,
  `bhabilitado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `selecciones`
--

CREATE TABLE `selecciones` (
  `nseleccion` int(11) NOT NULL,
  `vseleccion` varchar(100) NOT NULL,
  `bandera` varbinary(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `selecciones`
--

INSERT INTO `selecciones` (`nseleccion`, `vseleccion`, `bandera`) VALUES
(1, 'QATAR', NULL),
(2, 'ALEMANIA', NULL),
(3, 'ALEMANIA', NULL),
(4, 'DINAMARCA', NULL),
(5, 'BRASIL', NULL),
(6, 'FRANCIA', NULL),
(7, 'BELGICA', NULL),
(8, 'CROACIA', NULL),
(9, 'ESPAÑA', NULL),
(10, 'SERBIA', NULL),
(11, 'INGLATERRA', NULL),
(12, 'SUIZA', NULL),
(13, 'HOLANDA', NULL),
(14, 'ARGENTINA', NULL),
(15, 'IRAN', NULL),
(16, 'COREA DEL SUR', NULL),
(17, 'JAPON', NULL),
(18, 'ARABIA SAUDITA', NULL),
(19, 'ECUADOR', NULL),
(20, 'URUGUAY', NULL),
(21, 'CANADA', NULL),
(22, 'ESTADOS UNIDOS', NULL),
(23, 'MEXICO', NULL),
(24, 'GHANA', NULL),
(25, 'SENEGAL', NULL),
(26, 'POLONIA', NULL),
(27, 'PORTUGAL', NULL),
(28, 'TUNEZ', NULL),
(29, 'MARRUECOS', NULL),
(30, 'CAMERUN', NULL),
(31, 'COSTA RICA', NULL),
(32, 'PERU', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nusuario` int(11) NOT NULL,
  `vnombre` varchar(50) NOT NULL,
  `vapellido` varchar(50) NOT NULL,
  `fk_nacceso` int(11) NOT NULL,
  `tscreado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `selecciones`
--
ALTER TABLE `selecciones`
  ADD PRIMARY KEY (`nseleccion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `selecciones`
--
ALTER TABLE `selecciones`
  MODIFY `nseleccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `nusuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
