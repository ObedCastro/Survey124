-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2023 a las 23:18:41
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
  `responsabledispositivo` varchar(50) NOT NULL,
  `sededispositivo` tinyint(4) NOT NULL,
  `estadodispositivo` int(11) NOT NULL,
  `fecharegistro` date NOT NULL,
  `fechamodificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`iddispositivo`, `tipodispositivo`, `marcadispositivo`, `modelodispositivo`, `imeidispositivo`, `seriedispositivo`, `telefonodispositivo`, `responsabledispositivo`, `sededispositivo`, `estadodispositivo`, `fecharegistro`, `fechamodificacion`) VALUES
(1, 'Telefono', 'Samsung', 'Galaxy A33', '923723784756473', 'SD9F879DF79DF', '50378454378', 'Obed Alberto Castro Orellana', 0, 1, '2023-12-18', '2023-12-18 15:28:13'),
(2, 'Telefono', 'Samsung', 'Galaxy A34', '849384837483748', 'IH98KH98798BB', '50375869444', 'Obed Alberto Castro Orellana', 0, 1, '2023-12-18', '2023-12-18 20:14:20'),
(3, 'Telefono', 'Samsung', 'Galaxy A34', '9879879987', 'kj987iuhiu', '987987987', '1', 0, 1, '0000-00-00', '2023-12-19 20:17:57'),
(4, 'Tablet', 'Samsung', 'Tab S9', '129812738728732', 'KJHSDF987SD9FSD', '50376453676', 'Obed Alberto Castro Orellana', 0, 1, '0000-00-00', '2023-12-19 20:17:40'),
(5, 'Tablet', 'Samsung', 'Tab S9', '198276354612736', 'HJ34KHJ34KJ3', '50367584938', '1', 0, 0, '0000-00-00', '2023-12-19 20:11:43'),
(6, 'Telefono', 'Samsung', 'Galaxy A33', '123427182737281', 'KH123KH23K2HK', '50376253527', '2', 0, 0, '0000-00-00', '2023-12-19 20:13:34'),
(7, 'Tablet', 'Samsung', 'Tab S9', '197827838297192', 'LKN3LKN2L3N2', '50478327827', '1', 0, 0, '0000-00-00', '2023-12-19 20:15:01'),
(8, 'Telefono', 'Samsung', 'Galaxy A34', '098574837465746', 'KJ34JL3K434LJ', '50364345654', '1', 0, 0, '0000-00-00', '2023-12-19 21:38:18');

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
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  MODIFY `iddispositivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `idsede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
