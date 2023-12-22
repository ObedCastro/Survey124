-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-12-2023 a las 23:12:27
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
  `sedeconsultor` varchar(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `idusuario` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`idusuario`, `nombres`, `apellidos`, `cargo`) VALUES
(1, 'Obed Alberto', 'Castro Orellana', 'Técnico de Soporte Informático'),
(2, 'Diego', 'Rivera', 'Técnico de Soporte Informático'),
(3, 'Miguel', 'Portillo', 'Técnico de Soporte Informático'),
(4, 'Tomás', 'Meléndez', 'Delegado Regional'),
(5, 'Juver', 'Argueta', 'Técnico de Soporte Informático'),
(6, 'Tania', 'Soto', 'Delegada Regional'),
(7, 'Lisseth', 'Soriano', 'Líder regional de cartografía'),
(8, 'Nahúm', 'Argueta', 'Servicios generales'),
(9, 'Manuel', 'Bentrán', 'Recursos humanos'),
(10, 'Carlos', 'Castillo', 'Jefe de Ofimática y Canales Digitales'),
(11, 'Marta', 'Carolina', 'Gerente de GITI BCR');

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
  `fechamodificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`iddispositivo`, `tipodispositivo`, `marcadispositivo`, `modelodispositivo`, `imeidispositivo`, `seriedispositivo`, `telefonodispositivo`, `accesorios`, `responsabledispositivo`, `sededispositivo`, `estadodispositivo`, `comentariodispositivo`, `fecharegistro`, `fechamodificacion`) VALUES
(1, 'Laptop', 'HP', '640 G9', '', '77777777777', '', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"0\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', 'Obed Alberto Castro Orellana', 2, 1, '', '2023-12-18', '2023-12-22 14:54:29'),
(2, 'Telefono', 'Samsung', 'Galaxy A34', '849384837483748', 'IH98KH98798BB', '50375869444', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"0\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', 'Obed Alberto Castro Orellana', 2, 1, '', '2023-12-18', '2023-12-22 20:39:08'),
(3, 'Telefono', 'Samsung', 'Galaxy A34', '9879879987', 'kj987iuhiu', '987987987', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"0\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '1', 2, 1, '', '0000-00-00', '2023-12-21 21:58:59'),
(4, 'Tablet', 'Samsung', 'Tab S9', '129812738728732', 'KJHSDF987SD9FSD', '50376453676', '{\"Cubo\":\"0\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', 'Obed Alberto Castro Orellana', 1, 1, '', '0000-00-00', '2023-12-21 22:14:37'),
(5, 'Tablet', 'Samsung', 'Tab S9', '198276354612736', 'HJ34KHJ34KJ3', '50367584938', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Lapiz\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '1', 3, 2, '', '0000-00-00', '2023-12-22 21:09:09'),
(6, 'Telefono', 'Samsung', 'Galaxy A33', '123427182737281', 'KH123KH23K2HK', '50376253527', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"0\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '2', 3, 3, '', '0000-00-00', '2023-12-22 21:39:48'),
(7, 'Tablet', 'Samsung', 'Tab S9', '197827838297192', 'LKN3LKN2L3N2', '50478327827', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '1', 1, 0, '', '0000-00-00', '2023-12-21 22:14:48'),
(8, 'Telefono', 'Samsung', 'Galaxy A34', '098574837465746', 'KJ34JL3K434LJ', '50364345654', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"0\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '1', 1, 0, '', '0000-00-00', '2023-12-21 22:14:51'),
(9, 'Laptop', 'HP', '640 G9', '', 'LKH45L4545', '', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"0\"}', '1', 2, 0, 'Este fue autorizado por el Ingeniero Diego.', '0000-00-00', '2023-12-22 21:50:25'),
(10, 'Telefono', 'Samsung', 'Galaxy A33', '999999999999999', 'AAAAAA111111', '50367544321', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"0...', '1', 2, 2, '', '0000-00-00', '2023-12-22 21:09:02'),
(12, 'Tablet', 'Samsung', 'Tab S9', '324523535353523', 'SHD4535SGG', '50376854543', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '1', 2, 2, '', '0000-00-00', '2023-12-22 21:08:59'),
(15, 'Telefono', 'HP', '640 G9', '', 'LLLLLLL00000', '', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"1\"}', '3', 1, 2, 'Este es un comentario modificado por el jefe Miguel', '0000-00-00', '2023-12-22 21:58:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `idsede` int(11) NOT NULL,
  `nombresede` varchar(50) NOT NULL,
  `departamentosede` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`idsede`, `nombresede`, `departamentosede`) VALUES
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
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD PRIMARY KEY (`iddispositivo`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
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
  MODIFY `idconsultor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  MODIFY `iddispositivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `idsede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
