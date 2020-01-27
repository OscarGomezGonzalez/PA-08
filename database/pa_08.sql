-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2020 a las 18:23:02
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pa_08`
--
CREATE DATABASE IF NOT EXISTS `pa_08` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `pa_08`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `valor_valoracion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagenes` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `texto` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `pais_origen` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `ranking_global` int(11) NOT NULL,
  `ruta_foto` varchar(32) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`nombre`, `pais_origen`, `ranking_global`, `ruta_foto`) VALUES
('Astralis', 'Dinarmarca', 1, 'img/logo_equipos/astralis.jpg'),
('Fnatic', 'Suecia', 3, 'img/logo_equipos/fnatic.jpg'),
('Team Liquid', 'America del Norte', 2, 'img/logo_equipos/team-liquid.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id_jugador` int(11) NOT NULL,
  `nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `pais_origen` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `ranking_jugador` int(11) NOT NULL,
  `nombre_equipo` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `ruta_imagen` varchar(32) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id_jugador`, `nombre`, `pais_origen`, `ranking_jugador`, `nombre_equipo`, `ruta_imagen`) VALUES
(1, 'Xyp9x', 'Dinarmarca', 5, 'Astralis', 'img/jugadores/xipne.jpg'),
(2, 'dupreeh', 'Dinamarca', 4, 'Astralis', 'img/jugadores/dupreeh.jpg'),
(3, 'gla1ve', 'Dinamarca', 2, 'Astralis', 'img/jugadores/glaive.jpg'),
(4, 'device', 'Dinamarca', 1, 'Astralis', 'img/jugadores/device.jpg'),
(5, 'Magisk', 'Dinamarca', 6, 'Astralis', 'img/jugadores/magisk.jpg'),
(6, 'Nitr0', 'USA', 7, 'Team Liquid', 'img/jugadores/nitro.jpeg'),
(7, 'NAF', 'Canada', 8, 'Team Liquid', 'img/jugadores/naf.jpg'),
(8, 'Elige', 'USA', 3, 'Team Liquid', 'img/jugadores/elige.jpeg'),
(9, 'Stewie2k', 'USA', 9, 'Team Liquid', 'img/jugadores/stewie.jpg'),
(10, 'Twistzz', 'Canada', 10, 'Team Liquid', 'img/jugadores/twistzz.jpg'),
(11, 'flusha', 'Suecia', 11, 'Fnatic', 'img/jugadores/flusha.jpeg'),
(12, 'JW', 'Suecia', 12, 'Fnatic', 'img/jugadores/jw.jpeg'),
(13, 'Krimz', 'Suecia', 13, 'Fnatic', 'img/jugadores/krimz.jpeg'),
(14, 'Golden', 'Suecia', 14, 'Fnatic', 'img/jugadores/golden.jpeg'),
(15, 'Brollan', 'Suecia', 15, 'Fnatic', 'img/jugadores/brollan.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liga`
--

CREATE TABLE `liga` (
  `id_liga` int(11) NOT NULL,
  `nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `lugar` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `premio_1` int(11) NOT NULL,
  `premio_2` int(11) NOT NULL,
  `premio_3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE `partido` (
  `id_partido` int(11) NOT NULL,
  `id_liga` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `equipo1` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `equipo2` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `mapa1` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `mapa2` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `mapa3` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ganador1` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ganador2` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ganador3` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_perfil` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`email`, `tipo_usuario`, `imagen_perfil`, `nombre_usuario`, `password`, `nombre`) VALUES
('admin@admin.com', 'redactor', '', 'admin', '$2y$10$PjmFU7vi9ilMPJ4/wvffAujYT14UTEsNE1JqMVbbY070m7SyeeLVe', 'pepe'),
('ger@ger.com', 'lector', '../../assets/img/usuarios/german1/astralis.jpg', 'german1', '$2y$10$YO7we3aujoKfUGLItO.wN.k9CfZYDPNS5pXBTCaJ40/wOY3r4Wi3O', 'german');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id_valoracion` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id_jugador`),
  ADD KEY `nombre_equipo` (`nombre_equipo`);

--
-- Indices de la tabla `liga`
--
ALTER TABLE `liga`
  ADD PRIMARY KEY (`id_liga`);

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`id_partido`),
  ADD KEY `id_liga` (`id_liga`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nombre_usuario`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id_valoracion`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jugador`
--
ALTER TABLE `jugador`
  MODIFY `id_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `liga`
--
ALTER TABLE `liga`
  MODIFY `id_liga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `partido`
--
ALTER TABLE `partido`
  MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id_valoracion` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`);

--
-- Filtros para la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `jugador_ibfk_1` FOREIGN KEY (`nombre_equipo`) REFERENCES `equipo` (`nombre`);

--
-- Filtros para la tabla `partido`
--
ALTER TABLE `partido`
  ADD CONSTRAINT `partido_ibfk_1` FOREIGN KEY (`id_liga`) REFERENCES `liga` (`id_liga`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
