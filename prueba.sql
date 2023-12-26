-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-12-2023 a las 04:38:30
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
  `foto` text NOT NULL,
  `password` text NOT NULL,
  `perfil` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `email`, `foto`, `password`, `perfil`, `fecha`) VALUES
(1, 'Obed Castro', 'admin@gmail.com', '', 'admin', 'superadministrador', '2023-12-14 16:14:17'),
(2, 'Usuario prueba', 'prueba@gmail.com', '', 'prueba', 'editor', '2023-12-14 16:14:17');

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
(1, 'Consultor test 1', 'DUI1', 'Cargo consultor test 1', 'Contacto1', 1, 'Sede1', '2023-12-24 03:34:09', '2023-12-23'),
(2, 'Consultor test 2', 'DUI2', 'Cargo consultor test 2', 'Contacto2', 2, 'Sede2', '2023-12-24 03:34:09', '2023-12-23'),
(3, 'Consultor test 3', 'DUI3', 'Cargo consultor test 3', 'Contacto3', 3, 'Sede3', '2023-12-24 04:37:11', '2023-12-23'),
(4, 'Consultor 1 ingresando', '', '', '', 0, '1', '2023-12-24 05:38:57', '0000-00-00'),
(5, 'Consultor 2 ingresando', '22222222-2', 'Cargo de prueba 2', '50316558747', 0, '1', '2023-12-24 05:46:35', '0000-00-00'),
(6, 'Consultor 3 ingresando', '11111111-1', 'Cargo de prueba 3', '50312345675', 0, '1', '2023-12-24 05:49:47', '2023-12-23');

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
  `fecharegistro` date NOT NULL,
  `fechamodificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fechaasignacion` date NOT NULL DEFAULT current_timestamp(),
  `fecharecepcion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`iddispositivo`, `tipodispositivo`, `marcadispositivo`, `modelodispositivo`, `imeidispositivo`, `seriedispositivo`, `telefonodispositivo`, `accesorios`, `responsabledispositivo`, `sededispositivo`, `estadodispositivo`, `comentariodispositivo`, `fecharegistro`, `fechamodificacion`, `fechaasignacion`, `fecharecepcion`) VALUES
(1, 'Laptop', 'HP', '640 G9', '', '77777777777', '', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"0\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', 'Obed Alberto Castro Orellana', 2, 1, '', '2023-12-18', '2023-12-22 14:54:29', '2023-12-23', '2023-12-23'),
(2, 'Telefono', 'Samsung', 'Galaxy A34', '849384837483748', 'IH98KH98798BB', '50375869444', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"0\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', 'Obed Alberto Castro Orellana', 2, 1, '', '2023-12-18', '2023-12-22 20:39:08', '2023-12-23', '2023-12-23'),
(3, 'Telefono', 'Samsung', 'Galaxy A34', '9879879987', 'kj987iuhiu', '987987987', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"0\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '1', 2, 1, '', '0000-00-00', '2023-12-21 21:58:59', '2023-12-23', '2023-12-23'),
(4, 'Tablet', 'Samsung', 'Tab S9', '129812738728732', 'KJHSDF987SD9FSD', '50376453676', '{\"Cubo\":\"0\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', 'Obed Alberto Castro Orellana', 1, 1, '', '0000-00-00', '2023-12-21 22:14:37', '2023-12-23', '2023-12-23'),
(5, 'Tablet', 'Samsung', 'Tab S9', '198276354612736', 'HJ34KHJ34KJ3', '50367584938', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Lapiz\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '1', 3, 2, '', '0000-00-00', '2023-12-22 21:09:09', '2023-12-23', '2023-12-23'),
(6, 'Telefono', 'Samsung', 'Galaxy A33', '123427182737281', 'KH123KH23K2HK', '50376253527', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"0\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '2', 3, 3, '', '0000-00-00', '2023-12-22 21:39:48', '2023-12-23', '2023-12-23'),
(7, 'Tablet', 'Samsung', 'Tab S9', '197827838297192', 'LKN3LKN2L3N2', '50478327827', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '1', 1, 0, '', '0000-00-00', '2023-12-21 22:14:48', '2023-12-23', '2023-12-23'),
(8, 'Telefono', 'Samsung', 'Galaxy A34', '098574837465746', 'KJ34JL3K434LJ', '50364345654', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"0\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '1', 1, 0, '', '0000-00-00', '2023-12-21 22:14:51', '2023-12-23', '2023-12-23'),
(9, 'Laptop', 'HP', '640 G9', '', 'LKH45L4545', '', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"0\"}', '1', 2, 0, 'Este fue autorizado por el Ingeniero Diego.', '0000-00-00', '2023-12-22 21:50:25', '2023-12-23', '2023-12-23'),
(10, 'Telefono', 'Samsung', 'Galaxy A33', '999999999999999', 'AAAAAA111111', '50367544321', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"0...', '1', 2, 2, '', '0000-00-00', '2023-12-22 21:09:02', '2023-12-23', '2023-12-23'),
(12, 'Tablet', 'Samsung', 'Tab S9', '324523535353523', 'SHD4535SGG', '50376854543', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '1', 2, 2, '', '0000-00-00', '2023-12-22 21:08:59', '2023-12-23', '2023-12-23'),
(15, 'Telefono', 'HP', '640 G9', '', 'LLLLLLL00000', '', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"1\"}', '3', 1, 2, 'Este es un comentario modificado por el jefe Miguel', '0000-00-00', '2023-12-22 21:58:24', '2023-12-23', '2023-12-23');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `consultores`
--
ALTER TABLE `consultores`
  MODIFY `idconsultor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  MODIFY `iddispositivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `idsede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
