-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-01-2024 a las 18:23:57
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
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `password` text NOT NULL,
  `perfil` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `email`, `cargo`, `foto`, `password`, `perfil`, `fecha`) VALUES
(1, 'Obed Alberto Castro Orellana', 'admin@gmail.com', 'Técnico de Soporte Informático', '', 'admin', 'superadministrador', '2024-01-03 15:46:04'),
(2, 'Usuario prueba', 'prueba@gmail.com', 'Técnico de Soporte Informático', '', 'prueba', 'editor', '2024-01-03 15:46:13'),
(3, 'asdfasfd', 'asfasfd@asfasf.com', '', '', '', '', '2023-12-29 19:22:41'),
(4, 'Miguel Angel Portillo Lozano', 'miguel.portillo@bcr.gob.sv', 'Técnico de Soporte Informático', '', 'admin2', 'superadministrador', '2024-01-03 15:50:13'),
(5, 'Miguel Portillo 2', 'migual@gmail.com', '', '', '', '', '2023-12-29 19:49:34'),
(6, 'Miguel Portillo 3', 'miguelito@gmail.com', '', '', '', '', '2023-12-29 19:50:26'),
(7, 'Miguel Portillo 4', 'portillo@gmail.com', '', '', '', '', '2023-12-29 19:53:10'),
(8, 'Migueeeeeel', 'migueee@gmail.com', '', '', '', '', '2023-12-29 19:54:10'),
(9, 'scxbcncnv', 'aaaaa@aaaa.com', '', '', '', '', '2023-12-29 19:55:50'),
(10, 'bbb', 'bbb@gmail.com', '', '', '', '', '2023-12-29 19:56:34'),
(11, 'Diego Dubán Rivera Martinez', 'diego.rivera@bcr.gob.sv', 'Técnico de Soporte Informático', '', 'admin3', 'superadministrador', '2024-01-03 15:50:18'),
(12, 'Prueba', 'prueba@gmail.com', '', '', '', '', '2023-12-29 19:58:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultores`
--

CREATE TABLE `consultores` (
  `idconsultor` int(11) NOT NULL,
  `nombreconsultor` varchar(50) NOT NULL,
  `duiconsultor` varchar(10) NOT NULL,
  `cargoconsultor` varchar(50) NOT NULL,
  `contactoconsultor` varchar(11) NOT NULL,
  `dispositivo_id` int(11) NOT NULL,
  `sedeconsultor` varchar(20) NOT NULL,
  `fechaactualizacionconsultor` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecharegistroconsultor` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consultores`
--

INSERT INTO `consultores` (`idconsultor`, `nombreconsultor`, `duiconsultor`, `cargoconsultor`, `contactoconsultor`, `dispositivo_id`, `sedeconsultor`, `fechaactualizacionconsultor`, `fecharegistroconsultor`) VALUES
(1, 'Wendy Yasmín Velloso Jiménez', 'DUI1', 'Cargo consultor test 1', 'Contacto1', 1, '1', '2024-01-03 16:37:07', '2023-12-23'),
(2, 'Consultor test 2', 'DUI2', 'Cargo consultor test 2', 'Contacto2', 2, '2', '2024-01-03 16:29:27', '2023-12-23'),
(3, 'Consultor test 3', 'DUI3', 'Cargo consultor test 3', 'Contacto3', 3, '1', '2024-01-03 16:29:35', '2023-12-23'),
(4, 'Consultor 1 ingresando', '55555555-0', 'Cargo inventado', '50332323233', 0, '1', '2023-12-26 20:58:19', '0000-00-00'),
(5, 'Consultor 2 ingresando', '22222222-2', 'Cargo de prueba 2', '50316558747', 0, '1', '2023-12-24 05:46:35', '0000-00-00'),
(6, 'Consultor 3 ingresando', '11111111-1', 'Cargo de prueba 3', '50312345675', 0, '1', '2023-12-24 05:49:47', '2023-12-23'),
(7, 'Consultor Obed', '12121212-1', 'Soporte', '12121212', 0, '1', '2023-12-26 16:41:50', '2023-12-26'),
(8, 'Miguel Portillo Lozano', '0000000000', 'rrrrrrrrrrrrrrrr', '1123123123', 0, '2', '2024-01-03 16:30:01', '2023-12-26'),
(9, 'Consultor Consultor', '923749414-', 'Gerente de GITI', '53253245325', 0, '2', '2023-12-29 16:24:51', '2023-12-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivos`
--

CREATE TABLE `dispositivos` (
  `iddispositivo` int(11) NOT NULL,
  `tipodispositivo` varchar(20) NOT NULL,
  `marcadispositivo` varchar(20) NOT NULL,
  `modelodispositivo` varchar(20) NOT NULL,
  `imeidispositivo` varchar(15) NOT NULL,
  `seriedispositivo` varchar(20) NOT NULL,
  `telefonodispositivo` varchar(11) NOT NULL,
  `accesorios` text NOT NULL,
  `responsabledispositivo` varchar(50) NOT NULL,
  `sededispositivo` tinyint(4) NOT NULL,
  `estadodispositivo` int(11) NOT NULL,
  `comentariodispositivo` text NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
  `fechamodificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fechaasignacion` date NOT NULL DEFAULT current_timestamp(),
  `fecharecepcion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`iddispositivo`, `tipodispositivo`, `marcadispositivo`, `modelodispositivo`, `imeidispositivo`, `seriedispositivo`, `telefonodispositivo`, `accesorios`, `responsabledispositivo`, `sededispositivo`, `estadodispositivo`, `comentariodispositivo`, `fecharegistro`, `fechamodificacion`, `fechaasignacion`, `fecharecepcion`) VALUES
(6, 'Telefono', 'Samsung', 'Galaxy A33', '123427182737281', 'KH123KH23K2HK', '50376253527', '', '', 3, 1, '', '0000-00-00', '2024-01-03 15:11:16', '2023-12-23', '2023-12-23'),
(10, 'Telefono', 'Samsung', 'Galaxy A33', '999999999999999', 'AAAAAA111111', '50367544321', '', '', 2, 1, '', '0000-00-00', '2023-12-29 22:08:53', '2023-12-23', '2023-12-23'),
(19, 'Telefono', 'Samsung', 'Galaxy A34', '454546575334', '343434343', '76678990', '', '', 2, 1, '', '2023-12-28', '2024-01-03 16:36:59', '2023-12-28', '2023-12-28'),
(20, 'Tablet', 'Samsung', 'Galaxy A33', '323243445465', '554656565', '66445454', '', '', 3, 1, '', '2023-12-28', '2024-01-03 16:36:59', '2023-12-28', '2023-12-28'),
(21, 'Tablet', 'Samsung', 'Tab S9', '534535435346', '645435435', '23234556', '', '', 2, 1, '', '2023-12-28', '2024-01-03 16:36:59', '2023-12-28', '2023-12-28'),
(22, 'Tablet', 'Samsung', 'Tab S9', '434234235235234', '3432432323', '45678909', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Lapiz\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '1', 1, 2, '', '2023-12-28', '2024-01-03 16:45:55', '2023-12-28', '2023-12-28'),
(23, 'Telefono', 'Samsung', 'Galaxy A34', '121323434335', '654645653444', '67567890', '', '', 1, 1, '', '2023-12-28', '2024-01-03 16:36:59', '2023-12-28', '2023-12-28'),
(24, 'Telefono', 'Samsung', 'Galaxy A33', '87686786556765', '4545455454', '78909832', '', '', 1, 1, '', '2023-12-28', '2024-01-03 16:36:59', '2023-12-28', '2023-12-28'),
(26, 'Tablet', 'Lenovo', 'Tab S9', '12312332343', '43434353', '7875656879', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Lapiz\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '1', 1, 2, '', '2023-12-28', '2024-01-03 16:44:36', '2023-12-28', '2023-12-28'),
(27, 'Telefono', 'Samsung', 'Galaxy A34', '543434', '34343', '535353', '', '', 0, 1, '', '2023-12-28', '2024-01-03 16:36:59', '2023-12-28', '2023-12-28'),
(28, 'Telefono', 'Samsung', 'Galaxy A33', '777777777777777', '7777777777777', '50377777777', '', '', 1, 1, '', '2023-12-29', '2024-01-03 16:36:59', '2023-12-29', '2023-12-29'),
(29, 'Laptop', 'HP', '640 G9', '', 'ASDASD1213', '', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"1\"}', '1', 1, 2, '', '2024-01-03', '2024-01-03 16:37:18', '2024-01-03', '2024-01-03');

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
  `idsede` int(11) NOT NULL,
  `nombresede` varchar(50) NOT NULL,
  `departamentosede` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`idsede`, `nombresede`, `departamentosede`) VALUES
(1, 'ExBandesal', 'San Miguel'),
(2, 'ITCA MEGATEC', 'La Unión');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consultores`
--
ALTER TABLE `consultores`
  ADD PRIMARY KEY (`idconsultor`);

--
-- Indices de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD PRIMARY KEY (`iddispositivo`);

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
  ADD PRIMARY KEY (`idsede`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `consultores`
--
ALTER TABLE `consultores`
  MODIFY `idconsultor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  MODIFY `iddispositivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `idsede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
