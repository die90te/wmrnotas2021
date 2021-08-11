-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2021 a las 23:04:15
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
-- Estructura de tabla para la tabla `g6s1`
--

CREATE TABLE `g6s1` (
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
-- Volcado de datos para la tabla `g6s1`
--

INSERT INTO `g6s1` (`id`, `alumnos_rut`, `cursos_grado`, `cursos_letra`, `asignaturas_nombre`, `orden`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `n10`, `promedio`) VALUES
(-171, '100518618', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-170, '23348662', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-169, '23287379', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-168, '23103193', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-167, '23189014', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-166, '23078918', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-165, '23137255', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-164, '23118935', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-163, '23151757', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-162, '23029944', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-161, '23086876', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-160, '23210362', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-159, '23277995', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-158, '23084670', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-157, '23177313', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-156, '23359899', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-155, '23286119', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-154, '23086932', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-153, '23050787', 6, 'A', 'INGLES', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-152, '100518618', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-151, '23348662', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-150, '23287379', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-149, '23103193', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-148, '23189014', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-147, '23078918', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-146, '23137255', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-145, '23118935', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-144, '23151757', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-143, '23029944', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-142, '23086876', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-141, '23210362', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-140, '23277995', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-139, '23084670', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-138, '23177313', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-137, '23359899', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-136, '23286119', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-135, '23086932', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-134, '23050787', 6, 'A', 'ED. FISICA', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-133, '100518618', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-132, '23348662', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-131, '23287379', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-130, '23103193', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-129, '23189014', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-128, '23078918', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-127, '23137255', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-126, '23118935', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-125, '23151757', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-124, '23029944', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-123, '23086876', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-122, '23210362', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-121, '23277995', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-120, '23084670', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-119, '23177313', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-118, '23359899', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-117, '23286119', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-116, '23086932', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-115, '23050787', 6, 'A', 'MUSICA', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-114, '100518618', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-113, '23348662', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-112, '23287379', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-111, '23103193', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-110, '23189014', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-109, '23078918', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-108, '23137255', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-107, '23118935', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-106, '23151757', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-105, '23029944', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-104, '23086876', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-103, '23210362', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-102, '23277995', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-101, '23084670', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-100, '23177313', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-99, '23359899', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-98, '23286119', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-97, '23086932', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-96, '23050787', 6, 'A', 'ARTES VISUALES', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-95, '100518618', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-94, '23348662', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-93, '23287379', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-92, '23103193', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-91, '23189014', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-90, '23078918', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-89, '23137255', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-88, '23118935', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-87, '23151757', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-86, '23029944', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-85, '23086876', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-84, '23210362', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-83, '23277995', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-82, '23084670', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-81, '23177313', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-80, '23359899', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-79, '23286119', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-78, '23086932', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-77, '23050787', 6, 'A', 'TECNOLOGIA', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-76, '100518618', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-75, '23348662', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-74, '23287379', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-73, '23103193', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-72, '23189014', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-71, '23078918', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-70, '23137255', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-69, '23118935', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-68, '23151757', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-67, '23029944', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-66, '23086876', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-65, '23210362', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-64, '23277995', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-63, '23084670', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-62, '23177313', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-61, '23359899', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-60, '23286119', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-59, '23086932', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-58, '23050787', 6, 'A', 'HISTORIA', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-57, '100518618', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-56, '23348662', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-55, '23287379', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-54, '23103193', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-53, '23189014', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-52, '23078918', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-51, '23137255', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-50, '23118935', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-49, '23151757', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-48, '23029944', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-47, '23086876', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-46, '23210362', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-45, '23277995', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-44, '23084670', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-43, '23177313', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-42, '23359899', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-41, '23286119', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-40, '23086932', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-39, '23050787', 6, 'A', 'CS. NATURALES', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-38, '100518618', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-37, '23348662', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-36, '23287379', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-35, '23103193', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-34, '23189014', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-33, '23078918', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-32, '23137255', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-31, '23118935', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-30, '23151757', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-29, '23029944', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-28, '23086876', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-27, '23210362', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-26, '23277995', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-25, '23084670', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-24, '23177313', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-23, '23359899', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-22, '23286119', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-21, '23086932', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-20, '23050787', 6, 'A', 'MATEMATICA', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-19, '100518618', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-18, '23348662', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-17, '23287379', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-16, '23103193', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-15, '23189014', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-14, '23078918', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-13, '23137255', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-12, '23118935', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-11, '23151757', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-10, '23029944', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-9, '23086876', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-8, '23210362', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-7, '23277995', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-6, '23084670', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-5, '23177313', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-4, '23359899', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-3, '23286119', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-2, '23086932', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(-1, '23050787', 6, 'A', 'LENG. Y COMUNIC.', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `g6s1`
--
ALTER TABLE `g6s1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumnos_rut` (`alumnos_rut`),
  ADD KEY `asignaturas_nombre` (`asignaturas_nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `g6s1`
--
ALTER TABLE `g6s1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `g6s1`
--
ALTER TABLE `g6s1`
  ADD CONSTRAINT `g6s1_ibfk_1` FOREIGN KEY (`alumnos_rut`) REFERENCES `alumnos` (`alumnos_rut`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `g6s1_ibfk_2` FOREIGN KEY (`asignaturas_nombre`) REFERENCES `asignaturas` (`asignaturas_nombre`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
