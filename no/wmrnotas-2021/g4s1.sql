-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2021 a las 23:49:16
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wmrsknco_walteriomeyer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `g4s1`
--

CREATE TABLE `g4s1` (
  `id` int(10) NOT NULL,
  `alumnos_rut` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `cursos_grado` int(2) NOT NULL,
  `cursos_letra` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `asignaturas_nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(2) NOT NULL,
  `n1` int(2) NOT NULL DEFAULT 0,
  `n2` int(2) NOT NULL DEFAULT 0,
  `n3` int(2) NOT NULL DEFAULT 0,
  `n4` int(2) NOT NULL DEFAULT 0,
  `n5` int(2) NOT NULL DEFAULT 0,
  `n6` int(2) NOT NULL DEFAULT 0,
  `n7` int(2) NOT NULL DEFAULT 0,
  `n8` int(2) NOT NULL DEFAULT 0,
  `n9` int(2) NOT NULL DEFAULT 0,
  `n10` int(2) NOT NULL DEFAULT 0,
  `promedio` int(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `g4s1`
--

INSERT INTO `g4s1` (`id`, `alumnos_rut`, `cursos_grado`, `cursos_letra`, `asignaturas_nombre`, `orden`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `n10`, `promedio`) VALUES
(-81, '23815917', 4, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-80, '23865524', 4, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-79, '23947085', 4, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-78, '23828144', 4, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-77, '23983410', 4, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-76, '23757474', 4, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-75, '23659726', 4, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-74, '23611447', 4, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-73, '23977452', 4, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-72, '23815917', 4, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-71, '23865524', 4, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-70, '23947085', 4, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-69, '23828144', 4, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-68, '23983410', 4, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-67, '23757474', 4, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-66, '23659726', 4, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-65, '23611447', 4, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-64, '23977452', 4, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-63, '23815917', 4, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-62, '23865524', 4, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-61, '23947085', 4, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-60, '23828144', 4, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-59, '23983410', 4, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-58, '23757474', 4, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-57, '23659726', 4, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-56, '23611447', 4, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-55, '23977452', 4, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-54, '23815917', 4, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-53, '23865524', 4, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-52, '23947085', 4, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-51, '23828144', 4, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-50, '23983410', 4, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-49, '23757474', 4, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-48, '23659726', 4, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-47, '23611447', 4, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-46, '23977452', 4, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-45, '23815917', 4, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-44, '23865524', 4, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-43, '23947085', 4, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-42, '23828144', 4, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-41, '23983410', 4, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-40, '23757474', 4, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-39, '23659726', 4, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-38, '23611447', 4, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-37, '23977452', 4, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-36, '23815917', 4, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-35, '23865524', 4, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-34, '23947085', 4, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-33, '23828144', 4, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-32, '23983410', 4, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-31, '23757474', 4, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-30, '23659726', 4, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-29, '23611447', 4, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-28, '23977452', 4, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-27, '23815917', 4, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-26, '23865524', 4, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-25, '23947085', 4, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-24, '23828144', 4, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-23, '23983410', 4, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-22, '23757474', 4, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-21, '23659726', 4, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-20, '23611447', 4, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-19, '23977452', 4, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-18, '23815917', 4, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-17, '23865524', 4, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-16, '23947085', 4, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-15, '23828144', 4, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-14, '23983410', 4, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-13, '23757474', 4, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-12, '23659726', 4, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-11, '23611447', 4, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-10, '23977452', 4, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-9, '23815917', 4, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-8, '23865524', 4, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-7, '23947085', 4, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-6, '23828144', 4, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-5, '23983410', 4, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-4, '23757474', 4, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-3, '23659726', 4, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-2, '23611447', 4, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-1, '23977452', 4, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `g4s1`
--
ALTER TABLE `g4s1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumnos_rut` (`alumnos_rut`),
  ADD KEY `asignaturas_nombre` (`asignaturas_nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `g4s1`
--
ALTER TABLE `g4s1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `g4s1`
--
ALTER TABLE `g4s1`
  ADD CONSTRAINT `g4s1_ibfk_1` FOREIGN KEY (`alumnos_rut`) REFERENCES `alumnos` (`alumnos_rut`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `g4s1_ibfk_2` FOREIGN KEY (`asignaturas_nombre`) REFERENCES `asignaturas` (`asignaturas_nombre`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
