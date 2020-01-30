-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-01-2020 a las 22:29:29
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id12407088_pa_08`
--

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
  `imagenes` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `contenido1` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `contenido2` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `contenido3` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `subtitulo` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`titulo`, `id_articulo`, `nombre_usuario`, `valor_valoracion`, `fecha`, `categoria`, `imagenes`, `contenido1`, `contenido2`, `contenido3`, `subtitulo`) VALUES
('Giants suspende de empleo y sueldo a un jugador', 6, 'admin', 0, '2020-01-29', 'Equipos', 'assets/img/usuarios/admin/articulos/Giants suspende de empleo y sueldo a un jugador/primeraImagen;assets/img/usuarios/admin/articulos/Giants suspende de empleo y sueldo a un jugador/segundaImagen', 'Cuidar lo que dices es fundamental en un sector puramente audiovisual. Pero no solo lo que comentas delante de una cÃ¡mara, sino tambiÃ©n la forma de decirlo.\r\nY es que parece que FOX, jugador portuguÃ©s de CS:GO para Vodafone Giants, realizÃ³ unas condenables y desafortunadas declaraciones tras un ', 'En el tuit se puede ver el vÃ­deo donde, supuestamente, hace tales declaraciones. Eso sÃ­, son en portuguÃ©s, y parece que la sanciÃ³n de Giants confirma las palabras del jugador luso. \r\nFOX se referÃ­a a la mujer de KILLDREAM, ex compaÃ±ero suyo en Giants, que, en teorÃ­a, estaba gritando y haciend', 'FOX respondiÃ³ a los entrevistadores afirmando que, si fuese su mujer, Ã©l hubiese reaccionado de otro modo, llegando incluso a golpearla por tales acciones. ', 'YoungGODCSGO'),
('La renovada ESL Pro League', 8, 'admin', 0, '2020-01-29', 'Liga', 'assets/img/usuarios/admin/articulos/La renovada ESL Pro League/primeraImagen;assets/img/usuarios/admin/articulos/La renovada ESL Pro League/segundaImagen ', 'ESL ha anunciado un formato totalmente renovado para su Pro League de Counter-Strike: Global Offensive cuya gran novedad serÃ¡ la reconversiÃ³n a una liga totalmente global, eliminando asÃ­ las fases previas regionales.\r\nEste cambio tambiÃ©n ha supuesto una reducciÃ³n en el numero de equipos hasta s', 'Los criterios para escoger los invitados no han sido desvelados, ya que si bien casi todos ellos estÃ¡n entre los 25 primeros del ESL World Ranking, llama la atenciÃ³n la presencia de Complexity, situado en el puesto nÃºmero 41 del mismo, muy por detrÃ¡s de otros muchos que se han quedado fuera.\r\nEn', 'Por el momento no han desvelado la sede de ninguna de las fases â€”la primera se disputarÃ¡ en un estudio y la decisiva en un estadioâ€”, pero sÃ­ han confirmado que no se jugarÃ¡ ningÃºn evento del ESL Pro Tour durante el mes que dure la temporada de esta renovada ESL Pro League. ', ' Los 25 primeros'),
('BIG se lleva la DreamHack', 10, 'admin2', 0, '2020-01-29', 'Equipos', 'assets/img/usuarios/admin2/articulos/BIG se lleva la DreamHack/primeraImagen;assets/img/usuarios/admin2/articulos/BIG se lleva la DreamHack/segundaImagen', 'BIG se ha proclamado vencedor del DreamHack Open de Counter-Strike: Global Offensive celebrado en la ciudad alemana de Leipzig tras vencer en la final a Renegades y sin perder ni un solo mapa en todo el evento.\r\nEl club alemÃ¡n quedÃ³ encuadro en el grupo A junto a Renegades, Cloud9 y Virtus.pro. Es', 'En el grupo B el primer clasificado fue MAD Lions. El club espaÃ±ol, que adquiriÃ³ justo antes de DreamHack Sevilla un quinteto danÃ©s, cuajÃ³ tambiÃ©n una buena fase de grupos y se impuso primero a Heoric y posteriormente a North, otros dos rosters daneses.\r\nEn playoffs el primer rival de BIG fue H', 'La final se puso muy rÃ¡pidamente de cara para BIG, que arrasÃ³ en el primer mapa disputado en Mirage al ganar 16-5. El club alemÃ¡n, que venÃ­a de una mala racha de resultados, no dejÃ³ escapar la oportunidad de ganar el torneo y certificÃ³ su victoria por 16-12 en Dust II, embolsÃ¡ndose asÃ­ 50 00', 'Campeones'),
('Las finales de BLAST', 11, 'admin2', 0, '2020-01-29', 'Liga', 'assets/img/usuarios/admin2/articulos/Las finales de BLAST/primeraImagen;assets/img/usuarios/admin2/articulos/Las finales de BLAST/segundaImagen', 'La temporada 2020 de CS:GO comienza con fuerza, prÃ¡cticamente como todos los aÃ±os, en parte por la gran cantidad de torneos major y premier que hay en el calendario.\r\nUno de los mÃ¡s destacados de 2019 fue la BLAST Pro Series, que tuvo distintas paradas a lo largo del aÃ±o y que acabÃ³ ganando Ast', 'La temporada 2020 de CS:GO comienza con fuerza, prÃ¡cticamente como todos los aÃ±os, en parte por la gran cantidad de torneos major y premier que hay en el calendario.\r\n\r\nUno de los mÃ¡s destacados de 2019 fue la BLAST Pro Series, que tuvo distintas paradas a lo largo del aÃ±o y que acabÃ³ ganando A', 'Astralis, Na&#39;Vi, G2 Esports, FaZe Clan o MIBR son algunos de los equipos destacados en esta BLAST Premier de primavera. Los 6 mejores clasificados pasarÃ¡n directamente a las finales de MoscÃº, mientras que los otros 6 se disputarÃ¡n su plaza en el Showdown de primavera.', 'Las finales de BLAST');

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
(16, 6, '2020-01-29', 'Madre mia, increible', 'admin'),
(17, 10, '2020-01-29', 'Campeones!!, os lo mereceis', 'admin2'),
(18, 11, '2020-01-29', 'Que ganas!!!, por fiiin', 'admin2'),
(19, 6, '2020-01-29', 'Se lo merece, no se puede ir asi por la vida', 'miguel'),
(20, 8, '2020-01-29', 'Ya era hora, madre miaaa', 'miguel'),
(21, 10, '2020-01-29', 'No!!!, eran los peoress', 'miguel'),
(22, 11, '2020-01-29', 'ufff que nerviooos', 'miguel'),
(23, 10, '2020-01-29', 'ufff, noooo esos no', 'admin');

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
('Mousesports', 'Alemania', 5, 'img/logo_equipos/mousesports.jpg'),
('Natus', 'Suecia', 8, 'img/logo_equipos/natus.png'),
('Team Liquid', 'America del Norte', 2, 'img/logo_equipos/team-liquid.png'),
('Vitality', 'Francia', 5, 'img/logo_equipos/vitality.jpg');

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
(15, 'Brollan', 'Suecia', 15, 'Fnatic', 'img/jugadores/brollan.jpeg'),
(16, 'Karrigan', 'Dinamarca', 50, 'Mousesports', 'img/jugadores/karrigan.png'),
(17, 'Chrisj', 'Holanda', 60, 'Mousesports', 'img/jugadores/chrisj.png'),
(18, 'Woxic', 'Turquia', 42, 'Mousesports', 'img/jugadores/woxic.png'),
(19, 'Frozen', 'Eslovaquia', 32, 'Mousesports', 'img/jugadores/frozen.jpeg'),
(20, 'Ropz', 'Estonia', 21, 'Mousesports', 'img/jugadores/ropz.png'),
(21, 'Flamie', 'Rusia', 14, 'Natus', 'img/jugadores/flamie.jpeg'),
(22, 's1mple', 'Suecia', 8, 'Natus', 'img/jugadores/s1mple.jpeg'),
(23, 'Electronic', 'Rusia', 15, 'Natus', 'img/jugadores/electronic.jpeg'),
(24, 'Perfect', 'Rusia', 13, 'Natus', 'img/jugadores/perfect.png'),
(25, 'Shox', 'Francia', 11, 'Vitality', 'img/jugadores/shox.jpeg'),
(26, 'Rpx', 'Francia', 15, 'Vitality', 'img/jugadores/rpx.png'),
(28, 'Apex', 'Francia', 25, 'Vitality', 'img/jugadores/apex.jpg'),
(29, 'Alex', 'Inglaterra', 7, 'Vitality', 'img/jugadores/alex.jpg'),
(30, 'Zywio', 'Francia', 7, 'Vitality', 'img/jugadores/zywio.png');

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
(1, 'StarLadder', '2019-12-11', '2019-12-19', 'Berlin, Alemania', 100000, 50000, 30000),
(2, 'DreamHack', '2019-12-02', '2020-04-02', 'Paris, Francia', 20000, 25000, 40000),
(3, 'ESL', '2019-11-04', '2020-03-13', 'Madrid, España', 50000, 60000, 100000),
(4, 'Life', '2019-11-03', '2020-03-12', 'Roma, Italia', 5000, 10000, 15000);

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
('admin@admin', 'redactor', 'assets/img/usuarios/admin/imagenPerfil', 'admin', '$2y$10$ui1eRqSicmjZyUTEXcg8l.EJuY2eHQUw9TDW1T6kfrIRy3f/pDwGC', 'Javi Admin'),
('admin2@admin2', 'redactor', 'assets/img/usuarios/admin2/imagenPerfil', 'admin2', '$2y$10$Dp7Q/Y6r06e1dgteeO.N1uZGM3K3gPWudhJXWot7R2b0QFvJFVI8O', 'German Admin'),
('miguel@miguel', 'lector', 'assets/img/usuarios/miguel/imagenPerfil', 'miguel', '$2y$10$EFwzUD3TYZ1dazxkMRQBh.elnf9ScQvLkAs2eMtdEauk3vBdLTQOm', 'Miguel Gallego');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id_valoracion` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `nombre_usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`id_valoracion`, `id_articulo`, `valor`, `nombre_usuario`) VALUES
(1, 6, 3, 'admin'),
(2, 10, 5, 'admin2'),
(3, 11, 3, 'admin2'),
(4, 6, 1, 'miguel'),
(5, 8, 4, 'miguel'),
(6, 10, 2, 'miguel'),
(7, 11, 4, 'miguel'),
(8, 10, 2, 'admin');

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
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `jugador`
--
ALTER TABLE `jugador`
  MODIFY `id_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `liga`
--
ALTER TABLE `liga`
  MODIFY `id_liga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `partido`
--
ALTER TABLE `partido`
  MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id_valoracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
