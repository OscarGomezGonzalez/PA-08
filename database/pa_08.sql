-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-01-2020 a las 18:55:05
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `imagenes` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `contenido1` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `contenido2` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `contenido3` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `subtitulo` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`titulo`, `id_articulo`, `nombre_usuario`, `valor_valoracion`, `fecha`, `categoria`, `imagenes`, `contenido1`, `contenido2`, `contenido3`, `subtitulo`) VALUES
('asdvfbn', 1, 'miguelgz_97', 0, '2020-01-28', 'sadfghn', 'assets/img/usuarios/miguelgz_97/articulos/asdvfbn/primeraImagen;assets/img/usuarios/miguelgz_97/articulos/asdvfbn/segundaImagen', 'sadfgxcv', 'adsfg', 'sdfgbn', 'asdfg'),
('AZXSCDVFBGNHM,.', 6, 'admin', 0, '2020-01-29', 'Qwaesfthyjgkl', 'assets/img/usuarios/admin/articulos/AZXSCDVFBGNHM,./primeraImagen;assets/img/usuarios/admin/articulos/AZXSCDVFBGNHM,./segundaImagen', 'ewarstdfgh', 'qwertyu', 'wertyjk', 'qewartyju'),
('asdzfcghjvkl,.', 7, 'admin', 0, '2020-01-29', 'sa>dZFXCGVHBJNM,-.', 'assets/img/usuarios/admin/articulos/asdzfcghjvkl,./primeraImagen;assets/img/usuarios/admin/articulos/asdzfcghjvkl,./segundaImagen', 'Swdafesghmbn,', 'asdgfhbnm', 'AFSGDHVMBJN,.', 'DSAFVHBNM'),
('1', 8, 'admin', 0, '2020-01-29', '1', 'assets/img/usuarios/admin/articulos/sadfvbcgnhmjk.-./primeraImagen;assets/img/usuarios/admin/articulos/sadfvbcgnhmjk.-./segundaImagen', '1', '1', '1', '1'),
('prueba', 9, 'admin', 0, '2020-01-29', 'Â´sadfghtyjkliÃ±okL', 'assets/img/usuarios/admin/articulos/prueba/primeraImagen;assets/img/usuarios/admin/articulos/prueba/segundaImagen', 'qwdafsghj,m', 'Asdafsgbn', 'asdfvcbgnm,.', 'WDAEFSGHN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `texto` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_articulo`, `fecha`, `texto`, `nombre_usuario`) VALUES
(3, 6, '2020-01-29', 'ola q ase colega del infierno', 'admin'),
(4, 8, '2020-01-29', 'pasa bro\r\n', 'admin'),
(14, 6, '2020-01-29', 'sadfhjbknÃ±l,.-', 'admin');

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

--
-- Volcado de datos para la tabla `liga`
--

INSERT INTO `liga` (`id_liga`, `nombre`, `fecha_inicio`, `fecha_fin`, `lugar`, `premio_1`, `premio_2`, `premio_3`) VALUES
(1, 'StarLadder', '2019-12-11', '2019-12-19', 'Berlin, Alemania', 100000, 50000, 30000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mapa`
--

CREATE TABLE `mapa` (
  `nombre_mapa` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `ruta_imagen` varchar(32) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mapa`
--

INSERT INTO `mapa` (`nombre_mapa`, `ruta_imagen`) VALUES
('cache', 'img/mapas/cache.jpg'),
('inferno', 'img/mapas/inferno.jpg'),
('mirage', 'img/mapas/mirage.jpg'),
('train', 'img/mapas/train.jpg');

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

--
-- Volcado de datos para la tabla `partido`
--

INSERT INTO `partido` (`id_partido`, `id_liga`, `fecha`, `equipo1`, `equipo2`, `mapa1`, `mapa2`, `mapa3`, `ganador1`, `ganador2`, `ganador3`) VALUES
(1, 1, '2019-11-11', 'Astralis', 'Fnatic', 'cache', 'inferno', 'mirage', 'Astralis', 'Astralis', ''),
(2, 1, '2020-01-12', 'Fnatic', 'Team Liquid', 'train', 'inferno', 'mirage', 'Fnatic', 'Team Liquid', 'Team Liquid'),
(3, 1, '2019-12-14', 'Astralis', 'Team Liquid', 'cache', 'train', 'inferno', 'Astralis', 'Team Liquid', 'Astralis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_perfil` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`email`, `tipo_usuario`, `imagen_perfil`, `nombre_usuario`, `password`, `nombre`) VALUES
('admin@admin.com', 'redactor', 'assets/img/usuarios/admin/imagenPerfil', 'admin', '$2y$10$cfsW63NdNSMJKUgE3KksjuwcqXDjpUxRQtnzW7fROnWIPH3UOuv9e', 'pepe20'),
('car01@wd', 'lector', 'assets/img/usuarios/car02/imagenPerfil', 'car02', '$2y$10$vsb3Z.3rnCF74V1pwxmycO8E5.N3TZ3J9.Inw3HQiV8RRKqZBQisK', 'Carlos'),
('ger@ger.com', 'lector', '../../assets/img/usuarios/german1/astralis.jpg', 'german1', '$2y$10$YO7we3aujoKfUGLItO.wN.k9CfZYDPNS5pXBTCaJ40/wOY3r4Wi3O', 'german'),
('miguel@ola', 'lector', 'assets/img/usuarios/miguelgz97/imagenPerfil', 'miguelgz97', '$2y$10$FczPuO908xI1OmUn.Ux2IObb/wc2Xn5A4Jo.6hEpUzVUBjfRjThba', 'Miguel Gallego');

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
-- Indices de la tabla `mapa`
--
ALTER TABLE `mapa`
  ADD PRIMARY KEY (`nombre_mapa`);

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`id_partido`),
  ADD KEY `id_liga` (`id_liga`),
  ADD KEY `equipo1` (`equipo1`),
  ADD KEY `equipo2` (`equipo2`),
  ADD KEY `mapa1` (`mapa1`),
  ADD KEY `mapa2` (`mapa2`),
  ADD KEY `mapa3` (`mapa3`);

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
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `jugador`
--
ALTER TABLE `jugador`
  MODIFY `id_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `liga`
--
ALTER TABLE `liga`
  MODIFY `id_liga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `partido`
--
ALTER TABLE `partido`
  MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  ADD CONSTRAINT `partido_ibfk_1` FOREIGN KEY (`id_liga`) REFERENCES `liga` (`id_liga`),
  ADD CONSTRAINT `partido_ibfk_2` FOREIGN KEY (`equipo1`) REFERENCES `equipo` (`nombre`),
  ADD CONSTRAINT `partido_ibfk_3` FOREIGN KEY (`equipo2`) REFERENCES `equipo` (`nombre`),
  ADD CONSTRAINT `partido_ibfk_4` FOREIGN KEY (`mapa1`) REFERENCES `mapa` (`nombre_mapa`),
  ADD CONSTRAINT `partido_ibfk_5` FOREIGN KEY (`mapa2`) REFERENCES `mapa` (`nombre_mapa`),
  ADD CONSTRAINT `partido_ibfk_6` FOREIGN KEY (`mapa3`) REFERENCES `mapa` (`nombre_mapa`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
