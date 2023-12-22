-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-12-2023 a las 23:33:29
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `demosurvey124`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivos`
--

CREATE TABLE `dispositivos` (
  `id_dispositivo` int(11) NOT NULL,
  `tipo_dispositivo` varchar(50) NOT NULL,
  `marca_dispositivo` varchar(30) NOT NULL,
  `modelo_dispositivo` varchar(30) NOT NULL,
  `imei_dispositivo` varchar(20) NOT NULL,
  `numero_serie` varchar(50) NOT NULL,
  `linea_dispositivo` varchar(50) NOT NULL,
  `estado` text NOT NULL,
  `accesorios` text NOT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `sede_id` int(11) NOT NULL,
  `fecha_asignacion` date DEFAULT NULL,
  `fecha_recepcion` date DEFAULT NULL,
  `id_encargado_usuario_campo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`id_dispositivo`, `tipo_dispositivo`, `marca_dispositivo`, `modelo_dispositivo`, `imei_dispositivo`, `numero_serie`, `linea_dispositivo`, `estado`, `accesorios`, `fecha_ingreso`, `sede_id`, `fecha_asignacion`, `fecha_recepcion`, `id_encargado_usuario_campo`) VALUES
(1, 'CELULAR', 'SAMSUNG', 'GALAXY A33', '351426809856745', 'RFW305674', '78998546', '', '', '2023-08-01', 1, '2023-08-21', NULL, 1),
(2, 'CELULAR', 'SAMSUNG', 'GALAXY A34', '351426809856747', 'RFW305677', '78998549', '', '', '2023-08-01', 1, '2023-08-21', NULL, NULL),
(3, 'CELULAR', 'SAMSUNG', 'GALAXY A33', '351426809856899', 'RFW305123', '78998098', '', '', '2023-08-01', 2, '2023-08-21', NULL, NULL),
(4, 'TABLET', 'SAMSUNG', 'GALAXY TAB S8', '351426809854536', 'RFW305671', '78998572', '', '', '2023-08-01', 1, '2023-08-21', NULL, NULL),
(5, 'TABLET', 'SAMSUNG', 'GALAXY TAB S9', '351426809878341', 'RFW305670', '78998765', '', '', '2023-08-01', 3, '2023-08-21', NULL, NULL),
(6, 'TABLET', 'SAMSUNG', 'GALAXY TAB S9', '351426809875555', 'RFW305690', '78398765', '', '', '2023-08-01', 4, '2023-08-21', NULL, NULL),
(7, 'CELULAR', 'HUAWEI', 'HONOR 7', '351234567812345', 'RFW5287127', '78997612', '', '', '2023-12-22', 2, '2023-12-22', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_censo`
--

CREATE TABLE `personal_censo` (
  `id_personal` int(11) NOT NULL,
  `dui` varchar(30) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `cargo` varchar(30) DEFAULT NULL,
  `numeroTelefonico` varchar(11) DEFAULT NULL,
  `sede_id` int(11) DEFAULT NULL,
  `dispositivo_id` varchar(100) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_actualizacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `personal_censo`
--

INSERT INTO `personal_censo` (`id_personal`, `dui`, `nombre`, `apellido`, `cargo`, `numeroTelefonico`, `sede_id`, `dispositivo_id`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, '056749322', 'Misael Antonio', 'Mondragon Alfaro', 'Censista', '70901541', 1, '1', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `fecha_asignacion` date DEFAULT NULL,
  `nombre_asignador` varchar(30) DEFAULT NULL,
  `cargo_asignador` varchar(30) DEFAULT NULL,
  `usuario_campo_id` int(11) DEFAULT NULL,
  `sede_id` int(11) DEFAULT NULL,
  `dispositivo_id` int(11) DEFAULT NULL,
  `fecha_recepcion` date DEFAULT NULL,
  `nombre_receptor` date DEFAULT NULL,
  `cargo_receptor` date DEFAULT NULL,
  `comentario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`fecha_asignacion`, `nombre_asignador`, `cargo_asignador`, `usuario_campo_id`, `sede_id`, `dispositivo_id`, `fecha_recepcion`, `nombre_receptor`, `cargo_receptor`, `comentario`) VALUES
('2023-08-21', 'Obed Castro', 'Tecnico de soporte informatico', 1, 1, 1, NULL, '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id_sede` int(11) NOT NULL,
  `nombre_sede` varchar(50) DEFAULT NULL,
  `departamento_sede` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id_sede`, `nombre_sede`, `departamento_sede`) VALUES
(1, 'EX BANDESAL ', 'SAN MIGUEL'),
(2, 'INJUVE ', 'MORAZAN'),
(3, 'INJUVE USU', 'USULUTAN'),
(4, 'ITCA MEGATEC ', 'LA UNION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `codigo_usuario` varchar(30) DEFAULT NULL,
  `password_usuario` varchar(100) DEFAULT NULL,
  `nombres_usuario` varchar(100) DEFAULT NULL,
  `cargo_usuario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `codigo_usuario`, `password_usuario`, `nombres_usuario`, `cargo_usuario`) VALUES
(4, 'inportillo', 'c5fe4b0a228da6d27ea8600f1ceafcd0', 'Miguel Portillo', 'Tecnico de soporte informatico'),
(5, 'inobed', 'a11cf49906205ca7228e883ca971c800', 'Obed Castro', 'Tecnico de soporte informatico'),
(6, 'induban', '662e9e56ae16b4864240be9aaeabfef3', 'Diego Rivera', 'Tecnico de soporte informatico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD PRIMARY KEY (`id_dispositivo`),
  ADD KEY `sede_id` (`sede_id`),
  ADD KEY `fk_encargado_usuario_campo` (`id_encargado_usuario_campo`);

--
-- Indices de la tabla `personal_censo`
--
ALTER TABLE `personal_censo`
  ADD PRIMARY KEY (`id_personal`),
  ADD KEY `sede_id` (`sede_id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD KEY `sede_id` (`sede_id`),
  ADD KEY `dispositivo_id` (`dispositivo_id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id_sede`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  MODIFY `id_dispositivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD CONSTRAINT `dispositivos_ibfk_1` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id_sede`),
  ADD CONSTRAINT `fk_encargado_usuario_campo` FOREIGN KEY (`id_encargado_usuario_campo`) REFERENCES `personal_censo` (`id_personal`);

--
-- Filtros para la tabla `personal_censo`
--
ALTER TABLE `personal_censo`
  ADD CONSTRAINT `personal_censo_ibfk_1` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id_sede`);

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `registros_ibfk_1` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id_sede`),
  ADD CONSTRAINT `registros_ibfk_2` FOREIGN KEY (`dispositivo_id`) REFERENCES `dispositivos` (`id_dispositivo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
