-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-01-2024 a las 22:23:06
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

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
  `id` int NOT NULL,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `password` text NOT NULL,
  `perfil` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `idconsultor` int NOT NULL,
  `nombreconsultor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `duiconsultor` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `cargoconsultor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `contactoconsultor` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `dispositivo_id` int NOT NULL,
  `sedeconsultor` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `fechaactualizacionconsultor` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecharegistroconsultor` date DEFAULT NULL
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
  `iddispositivo` int NOT NULL,
  `tipodispositivo` varchar(20) NOT NULL,
  `marcadispositivo` varchar(20) NOT NULL,
  `modelodispositivo` varchar(20) NOT NULL,
  `imeidispositivo` varchar(15) NOT NULL,
  `seriedispositivo` varchar(20) NOT NULL,
  `telefonodispositivo` varchar(11) NOT NULL,
  `accesorios` text NOT NULL,
  `responsabledispositivo` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `sededispositivo` tinyint NOT NULL,
  `estadodispositivo` int NOT NULL,
  `comentariodispositivo` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `fecharegistro` date DEFAULT NULL,
  `asignadordispositivo` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `receptordispositivo` varchar(50) DEFAULT NULL,
  `fechamodificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fechaasignacion` timestamp NULL DEFAULT NULL,
  `fecharecepcion` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`iddispositivo`, `tipodispositivo`, `marcadispositivo`, `modelodispositivo`, `imeidispositivo`, `seriedispositivo`, `telefonodispositivo`, `accesorios`, `responsabledispositivo`, `sededispositivo`, `estadodispositivo`, `comentariodispositivo`, `fecharegistro`, `asignadordispositivo`, `receptordispositivo`, `fechamodificacion`, `fechaasignacion`, `fecharecepcion`) VALUES
(30, 'Telefono', 'Samsung', 'Galaxy A34', '234253252353535', 'ert345ert', '11111111111', '', '', 1, 1, 'aaa', '2024-01-02', NULL, NULL, '2024-01-05 21:32:47', NULL, NULL),
(31, 'Tablet', 'HP', 'Tab S9', '4354677', 'HYYYF5667', '76543677', '', '', 3, 1, NULL, '2024-01-02', NULL, NULL, '2024-01-05 21:32:52', NULL, NULL),
(32, 'Tablet', 'HP', 'Galaxy A34', '737382920', 'HF799335', '72053930', '', '', 1, 1, NULL, '2024-01-02', NULL, NULL, '2024-01-05 21:32:54', NULL, NULL),
(33, 'Telefono', 'Samsung', 'Galaxy A33', '719283714', 'HV8R840H', '04048958', '', '', 1, 1, NULL, '2024-01-02', NULL, NULL, '2024-01-05 21:32:56', NULL, NULL),
(34, 'Laptop', 'Lenovo', '640 G9', '8549934JH', '455633F5', '32454543', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"0\"}', '5', 2, 2, '', '2024-01-02', 'Obed Alberto Castro Orellana', NULL, '2024-01-05 21:33:00', '2024-02-05 17:12:22', NULL),
(35, 'Tablet', 'Samsung', 'Tab S9', '738453879435', 'DHER844H3', '453636232', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Lapiz\":\"0\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '', 1, 1, '', '2024-01-02', 'Obed Alberto Castro Orellana', 'Obed Alberto Castro Orellana', '2024-01-05 21:33:02', '2024-01-05 09:20:17', '2024-01-05 09:20:43'),
(36, 'Telefono', 'Samsung', 'Galaxy A34', '546564Y7', '54654Y6Y6', '5454Y', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Lapiz\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '7', 1, 2, '', '2024-01-02', 'Obed Alberto Castro Orellana', NULL, '2024-01-05 21:33:04', '2024-01-05 16:25:16', '2024-01-04 10:10:20'),
(37, 'Laptop', 'Lenovo', '640 G9', '876654T4', '36546758G', '22577777', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"1\"}', '4', 1, 2, '', '2024-01-02', 'Obed Alberto Castro Orellana', 'Obed Alberto Castro Orellana', '2024-01-05 21:36:49', '2024-01-05 17:47:01', '2024-01-05 17:13:56');

--
-- Disparadores `dispositivos`
--
DELIMITER $$
CREATE TRIGGER `actualizar_registros` AFTER UPDATE ON `dispositivos` FOR EACH ROW BEGIN
    IF NEW.estadodispositivo = 2 THEN
        INSERT INTO registros (fecha_asignacion, usuario_campo_id, sede_id, dispositivo_id, tipo_dispositivo, accesorios_entregados, nombre_asignador)
        VALUES (NEW.fechaasignacion, NEW.responsabledispositivo, NEW.sededispositivo, NEW.iddispositivo, NEW.tipodispositivo, NEW.accesorios, NEW.asignadordispositivo);

    ELSEIF NEW.estadodispositivo = 1 THEN
        UPDATE registros
        SET fecha_recepcion = NEW.fecharecepcion, accesorios_recuperados = NEW.accesorios, nombre_receptor = NEW.receptordispositivo
        WHERE dispositivo_id = OLD.iddispositivo AND fecha_asignacion = OLD.fechaasignacion AND usuario_campo_id = OLD.responsabledispositivo;

    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int NOT NULL,
  `fecha_asignacion` timestamp NULL DEFAULT NULL,
  `nombre_asignador` varchar(30) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `usuario_campo_id` int DEFAULT NULL,
  `sede_id` int DEFAULT NULL,
  `dispositivo_id` int DEFAULT NULL,
  `tipo_dispositivo` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `accesorios_entregados` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `accesorios_recuperados` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `fecha_recepcion` timestamp NULL DEFAULT NULL,
  `nombre_receptor` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `comentario` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `fecha_asignacion`, `nombre_asignador`, `usuario_campo_id`, `sede_id`, `dispositivo_id`, `tipo_dispositivo`, `accesorios_entregados`, `accesorios_recuperados`, `fecha_recepcion`, `nombre_receptor`, `comentario`) VALUES
(111, '2024-01-04 09:58:13', NULL, 8, 1, 37, NULL, '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Lapiz\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', NULL, NULL, NULL, NULL),
(112, '2024-01-04 10:07:07', NULL, 4, 1, 37, NULL, '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"1\"}', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '2024-01-04 10:07:32', NULL, NULL),
(113, '2024-01-04 10:08:38', NULL, 4, 1, 37, NULL, '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '2024-01-04 10:09:14', NULL, NULL),
(114, '2024-01-04 10:09:44', NULL, 8, 1, 36, 'Telefono', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '2024-01-04 10:10:20', NULL, NULL),
(115, '2024-01-05 15:39:50', NULL, 8, 1, 37, 'Laptop', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"1\"}', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '2024-01-05 15:41:31', NULL, NULL),
(116, '2024-01-05 15:42:57', 'Obed Alberto Castro Orellana', 8, 1, 37, 'Laptop', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"1\"}', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '2024-01-05 15:51:04', 'Miguel Angel Portillo Lozano', NULL),
(117, '2024-01-05 15:42:57', 'Obed Alberto Castro Orellana', 8, 1, 37, 'Laptop', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"1\"}', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '2024-01-05 15:51:04', 'Miguel Angel Portillo Lozano', NULL),
(118, '2024-01-05 15:51:58', 'Miguel Angel Portillo Lozano', 4, 1, 37, 'Laptop', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"1\"}', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '2024-01-05 15:54:30', 'Obed Alberto Castro Orellana', NULL),
(119, '2024-01-05 16:23:39', 'Obed Alberto Castro Orellana', 4, 1, 37, 'Laptop', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"0\"}', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '2024-01-05 16:50:55', 'Obed Alberto Castro Orellana', NULL),
(120, '2024-01-05 16:25:16', 'Obed Alberto Castro Orellana', 7, 1, 36, 'Tablet', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Lapiz\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', NULL, NULL, NULL, NULL),
(121, '2024-02-05 16:25:16', 'Obed Alberto Castro Orellana', 7, 1, 36, 'Telefono', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Lapiz\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', NULL, NULL, NULL, NULL),
(122, '2024-01-05 16:25:16', 'Obed Alberto Castro Orellana', 7, 1, 36, 'Telefono', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Lapiz\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', NULL, NULL, NULL, NULL),
(123, '2024-01-05 16:56:15', 'Obed Alberto Castro Orellana', 4, 1, 37, 'Laptop', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"1\"}', NULL, NULL, NULL, NULL),
(124, '2024-02-05 16:56:15', 'Obed Alberto Castro Orellana', 4, 1, 37, 'Laptop', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"1\"}', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '2024-01-05 17:13:56', 'Obed Alberto Castro Orellana', NULL),
(125, '2024-01-05 17:12:22', 'Obed Alberto Castro Orellana', 5, 2, 34, 'Laptop', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"0\"}', NULL, NULL, NULL, NULL),
(126, '2024-02-05 17:12:22', 'Obed Alberto Castro Orellana', 5, 2, 34, 'Laptop', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"0\"}', NULL, NULL, NULL, NULL),
(127, '2024-01-05 17:47:01', 'Obed Alberto Castro Orellana', 4, 1, 37, 'Laptop', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"1\"}', NULL, NULL, NULL, NULL),
(128, '2024-01-05 09:20:17', 'Obed Alberto Castro Orellana', 1, 1, 35, 'Tablet', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Lapiz\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Lapiz\":\"0\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', '2024-01-05 09:20:43', 'Obed Alberto Castro Orellana', NULL),
(129, '2024-02-05 17:12:22', 'Obed Alberto Castro Orellana', 5, 2, 34, 'Laptop', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"0\"}', NULL, NULL, NULL, NULL),
(130, '2024-01-05 16:25:16', 'Obed Alberto Castro Orellana', 7, 1, 36, 'Telefono', '{\"Cubo\":\"1\",\"Cable\":\"1\",\"Funda\":\"1\",\"Lapiz\":\"1\",\"Powerbank\":\"1\",\"Maletin\":\"0\",\"Cargador\":\"0\",\"Mouse\":\"0\",\"Mousepad\":\"0\"}', NULL, NULL, NULL, NULL),
(131, '2024-01-05 17:47:01', 'Obed Alberto Castro Orellana', 4, 1, 37, 'Laptop', '{\"Cubo\":\"0\",\"Cable\":\"0\",\"Funda\":\"0\",\"Lapiz\":\"0\",\"Powerbank\":\"0\",\"Maletin\":\"1\",\"Cargador\":\"1\",\"Mouse\":\"1\",\"Mousepad\":\"1\"}', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `idsede` int NOT NULL,
  `nombresede` varchar(50) NOT NULL,
  `departamentosede` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  ADD PRIMARY KEY (`id`),
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `consultores`
--
ALTER TABLE `consultores`
  MODIFY `idconsultor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  MODIFY `iddispositivo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `idsede` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
