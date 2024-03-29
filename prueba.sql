-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para prueba
CREATE DATABASE IF NOT EXISTS `prueba` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `prueba`;

-- Volcando estructura para tabla prueba.administradores
CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `foto` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `usuario` varchar(20) NOT NULL DEFAULT '',
  `password` text NOT NULL,
  `perfil` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3;

-- Volcando datos para la tabla prueba.administradores: ~5 rows (aproximadamente)
INSERT INTO `administradores` (`id`, `nombre`, `email`, `cargo`, `foto`, `usuario`, `password`, `perfil`, `fecha`) VALUES
	(1, 'Obed Alberto Castro Orellana', 'obed.castro@bcr.gob.sv', 'Técnico de Soporte Informático', 'vistas/assets/img', 'inobed', '21232f297a57a5a743894a0e4a801fc3', 'superadministrador', '2024-02-13 15:11:21'),
	(4, 'Miguel Ángel Portillo Lozano', 'miguel.portillo@bcr.gob.sv', 'Técnico de Soporte Informático', 'vistas/assets/img', 'inportillo', '6b44146a52fe0cb872686e7631786802', 'superadministrador', '2024-02-06 16:39:55'),
	(11, 'Diego Dubán Rivera Martinez', 'diego.rivera@bcr.gob.sv', 'Técnico de Soporte Informático', 'vistas/assets/img', 'induban', 'e823be777ac3d8b1052e62c96c965049', 'superadministrador', '2024-02-06 16:39:56'),
	(13, 'Juver Nahúm Argueta Ortíz', 'juver.argueta@bcr.gob.sv', 'Técnico de Soporte Informático', 'vistas/assetsvistas/assets/img/img/', 'injuver', 'fc1ebc848e31e0a68e868432225e3c82', 'superadministrador', '2024-02-06 16:39:57'),
	(34, 'Administrador de prueba', 'prueba@prueba.com', 'Cargo de prueba', 'vistas/assets/img', 'prueba01', 'c893bad68927b457dbed39460e6afd62', 'Perfil de prueba', '2024-02-09 17:06:58'),
	(43, 'asgasdgsdg', 'sadgsg@gmail.com', 'sdfgsdfhdhdh', 'vistas/assets/img', 'sadgsdgdsg', '7afce24c2a526cc4d52d4050d285d5b5', 'asdgsdgdgsdgASsdg', '2024-02-09 17:18:41');

-- Volcando estructura para tabla prueba.consultores
CREATE TABLE IF NOT EXISTS `consultores` (
  `idconsultor` int NOT NULL AUTO_INCREMENT,
  `nombreconsultor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `duiconsultor` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `cargoconsultor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `contactoconsultor` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `dispositivo_id` int DEFAULT NULL,
  `sedeconsultor` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `fechaactualizacionconsultor` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecharegistroconsultor` date DEFAULT NULL,
  PRIMARY KEY (`idconsultor`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla prueba.consultores: ~24 rows (aproximadamente)
INSERT INTO `consultores` (`idconsultor`, `nombreconsultor`, `duiconsultor`, `cargoconsultor`, `contactoconsultor`, `dispositivo_id`, `sedeconsultor`, `fechaactualizacionconsultor`, `fecharegistroconsultor`) VALUES
	(10, 'Juan Antonio Segovia', '504938273', 'Delegado', '58493843847', NULL, '1', '2024-01-26 21:14:36', '2024-01-12'),
	(14, 'Jorge Alberto González Barillas', '98765645-3', 'Auxiliar de bodega miscelanea', '7867-0988', NULL, '3', '2024-01-23 21:28:52', '2024-01-18'),
	(15, '', '', '', '', NULL, '', '2024-01-18 15:22:59', '2024-01-18'),
	(19, '', '', '', '', NULL, '', '2024-01-18 15:31:16', '2024-01-18'),
	(20, 'ANTONIO JOSE PORTILLO', '04150189-1', 'Cartógrafo', '77777771', NULL, '1', '2024-02-12 17:21:40', '2024-01-19'),
	(21, 'MANUEL ANTONIO PORTILLO', '04150189-2', 'Delegado', '77777772', NULL, '2', '2024-01-19 21:07:19', '2024-01-19'),
	(22, 'JOSE JUAN PORTILLO', '04150189-3', 'Supervisor', '77777773', NULL, '3', '2024-01-19 21:07:45', '2024-01-19'),
	(23, 'FRANCISCO MANUEL PORTILLO', '04150189-4', 'Cartografo', '77777774', NULL, '4', '2024-01-26 21:12:32', '2024-01-19'),
	(24, 'DAVID FRANCISCO PORTILLO', '04150189-5', 'Delegado', '77777775', NULL, '4', '2024-01-19 21:08:41', '2024-01-19'),
	(25, 'JUAN LUIS PORTILLO', '04150189-6', 'Supervisor', '77777776', NULL, '5', '2024-01-19 21:09:04', '2024-01-19'),
	(26, 'Oscar David Rivera Benitez', '09867443-2', 'Censista', '79269223', NULL, '1', '2024-01-26 22:13:13', '2024-01-26'),
	(27, 'Nuevo consultor lunes', '123412345', 'Cargo del lunes', '50384938483', NULL, '2', '2024-02-05 16:58:33', '2024-02-05'),
	(28, 'Nuevo consultor lunes', '123412345', 'Cargo del lunes', '50384938483', NULL, '2', '2024-02-05 16:59:49', '2024-02-05'),
	(29, 'asdfasf', '35635', 'sfasgasdg', '', NULL, '', '2024-02-05 17:01:39', '2024-02-05'),
	(30, 'asdfasf', '35635', 'sfasgasdg', '', NULL, '', '2024-02-05 17:02:35', '2024-02-05'),
	(33, 'rtuyrturtu', '456363456', 'sgsdhdfh', 'fjfgjfgjfgj', NULL, '1', '2024-02-05 17:45:31', '2024-02-05'),
	(45, 'shdfhfgjrejfjfj', '', 'reurururturt', '', NULL, '3', '2024-02-05 20:10:38', '2024-02-05'),
	(46, 'Otro consultor para probar', '23523525', 'Cargo para probar', '123131231', NULL, '5', '2024-02-06 21:02:01', '2024-02-06'),
	(47, 'Usuario de prueba', '12312312-4', 'Cargo de prueba', '1241-4124', NULL, '2', '2024-02-07 16:57:29', '2024-02-07'),
	(48, 'Consultor Consultor', '2323525', 'Cargo del consultor', '14143', NULL, '1', '2024-02-07 17:14:21', '2024-02-07'),
	(49, 'Otro Consultor', '234235', 'Otro cargo de consultor', '23525', NULL, '1', '2024-02-07 17:15:43', '2024-02-07'),
	(50, 'Nombre modificado', '', 'Cargo colocado después', '123', NULL, '1', '2024-02-12 17:21:26', '2024-02-07'),
	(51, 'sdfgdsg', '', 'ereryeyhdh34346fdgh', '235235', NULL, '1', '2024-02-07 17:25:44', '2024-02-07'),
	(52, 'Nombre', '', 'Consultor', '123', NULL, '1', '2024-02-07 17:31:31', '2024-02-07'),
	(54, 'Juan Antonio Perez', '041501895', 'Supervisor', '77777771', NULL, '1', '2024-02-09 21:54:32', '2024-02-09'),
	(55, 'sfsaf asf sf saf ', '', 'sfwetrw aw awf awf af af ', '23423452', NULL, '3', '2024-02-12 17:10:16', '2024-02-12');

-- Volcando estructura para tabla prueba.dispositivos
CREATE TABLE IF NOT EXISTS `dispositivos` (
  `iddispositivo` int NOT NULL AUTO_INCREMENT,
  `tipodispositivo` varchar(20) NOT NULL,
  `marcadispositivo` varchar(20) NOT NULL,
  `modelodispositivo` varchar(20) NOT NULL,
  `imeidispositivo` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `seriedispositivo` varchar(20) NOT NULL,
  `telefonodispositivo` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `accesorios` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `responsabledispositivo` int DEFAULT NULL,
  `sededispositivo` int DEFAULT NULL,
  `estadodispositivo` int NOT NULL,
  `comentariodispositivo` text,
  `fecharegistro` date DEFAULT NULL,
  `asignadordispositivo` varchar(50) DEFAULT NULL,
  `receptordispositivo` varchar(50) DEFAULT NULL,
  `fechamodificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fechaasignacion` timestamp NULL DEFAULT NULL,
  `fecharecepcion` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`iddispositivo`),
  UNIQUE KEY `imeidispositivo` (`imeidispositivo`),
  KEY `FKresponsabledispositivo` (`responsabledispositivo`),
  CONSTRAINT `FKresponsabledispositivo` FOREIGN KEY (`responsabledispositivo`) REFERENCES `consultores` (`idconsultor`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8mb3;

-- Volcando datos para la tabla prueba.dispositivos: ~31 rows (aproximadamente)
INSERT INTO `dispositivos` (`iddispositivo`, `tipodispositivo`, `marcadispositivo`, `modelodispositivo`, `imeidispositivo`, `seriedispositivo`, `telefonodispositivo`, `accesorios`, `responsabledispositivo`, `sededispositivo`, `estadodispositivo`, `comentariodispositivo`, `fecharegistro`, `asignadordispositivo`, `receptordispositivo`, `fechamodificacion`, `fechaasignacion`, `fecharecepcion`) VALUES
	(31, 'Tablet', 'HP', 'Tab S9', '4354677', 'HYYYF5667', '76543677', NULL, NULL, 2, 3, '', '2024-01-02', NULL, NULL, '2024-02-07 15:12:04', NULL, NULL),
	(32, 'Tablet', 'HP', 'Galaxy A34', '737382920', 'HF799335', '72053930', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 3, 'Pérdida de lápiz óptico en labor de campo y pantalla rota por caída en alcantarilla.', '2024-01-02', 'Obed Alberto Castro Orellana', 'Obed Alberto Castro Orellana', '2024-01-15 17:17:40', '2024-01-15 17:16:48', '2024-01-15 17:17:40'),
	(36, 'Telefono', 'Samsung', 'Galaxy A34', '546564Y7', '54654Y6Y6', '5454Y', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 3, 1, '', '2024-01-02', 'Obed Alberto Castro Orellana', 'Diego Dubán Rivera Martinez', '2024-01-15 20:32:27', '2024-01-09 08:29:39', '2024-01-15 08:32:27'),
	(37, 'Laptop', 'Lenovo', '640 G9', '876654T4', '36546758G', '22577777', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', 20, 1, 2, '', '2024-01-02', 'Obed Alberto Castro Orellana', NULL, '2024-02-07 15:13:31', '2024-02-07 15:13:31', NULL),
	(38, 'Telefono', 'Samsung', 'Galaxy A33', '353535353535353', 'asdas3432dgdg', '50375634634', NULL, NULL, 1, 1, '', NULL, NULL, NULL, '2024-01-17 21:48:56', NULL, NULL),
	(40, 'Telefono', 'Samsung', 'Galaxy A34', '133457585474647', 'SDFW3SSFW35', '50375647364', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, '', NULL, 'Obed Alberto Castro Orellana', 'Diego Dubán Rivera Martinez', '2024-01-15 20:32:16', '2024-01-12 07:55:03', '2024-01-15 08:32:16'),
	(47, 'Telefono', 'Honor', 'Honor X7', '777777777777777', 'ouuuuuuuuuuuuu', '45645634564', NULL, NULL, 5, 1, '', NULL, NULL, NULL, '2024-01-18 19:57:56', NULL, NULL),
	(48, 'Telefono', 'Samsung', 'Galaxy A34', '222222222222222', '222222222222222', '22222222222', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, '', '2024-01-10', 'Obed Alberto Castro Orellana', 'Diego Dubán Rivera Martinez', '2024-01-15 20:31:47', '2024-01-02 08:22:44', '2024-01-15 08:31:47'),
	(50, 'Telefono', 'Honor', 'Honor X7', '09832423', '0949484', '949484', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, '', '2024-01-12', 'Obed Alberto Castro Orellana', 'Diego Dubán Rivera Martinez', '2024-01-15 20:31:26', '2024-01-14 13:53:12', '2024-01-15 08:31:26'),
	(51, 'Telefono', 'Huawei', 'Galaxy A34', '56yertg54', '54634r', '878787878', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, '', '2024-01-12', 'Obed Alberto Castro Orellana', 'Diego Dubán Rivera Martinez', '2024-01-15 20:31:18', '2024-01-09 07:57:06', '2024-01-15 08:31:18'),
	(52, 'Telefono', 'Lenovo', 'Honor X7', '8989898', 'SV8988777888', '77992489', NULL, NULL, 1, 1, '', '2024-01-15', NULL, NULL, '2024-01-16 16:12:50', NULL, NULL),
	(53, 'Telefono', 'Honor', 'Honor X7', '999999933333333', '121212121ASASASAS', '50377777777', NULL, NULL, 1, 1, '', '2024-01-16', NULL, NULL, '2024-01-23 21:29:51', NULL, NULL),
	(54, 'Telefono', 'Samsung', 'Galaxy A34', '555555555555555', 'LLLLLLLLL', '13131313131', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, NULL, '2024-01-16', NULL, NULL, '2024-01-16 21:45:52', NULL, NULL),
	(56, 'Laptop', 'Dell', '640 G9', '', '555555yyyyyy', '', NULL, NULL, 1, 3, 'Se recibe con pantalla rota.', '2024-01-16', NULL, NULL, '2024-01-26 21:28:23', NULL, NULL),
	(58, 'Telefono', 'Samsung', 'Galaxy A33', '23462346', '2346364', '342346', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, NULL, '2024-01-16', NULL, NULL, '2024-01-16 22:04:18', NULL, NULL),
	(59, 'Telefono', 'Honor', 'Galaxy A33', '674745745', 'thdhdh', '46456646', NULL, NULL, 1, 1, '', '2024-01-16', NULL, NULL, '2024-02-07 15:12:56', NULL, NULL),
	(125, 'Telefono', 'Samsung', 'Galaxy A34', 'No hay', 'esryerye346346', 'Noooo', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, NULL, '2024-01-18', NULL, NULL, '2024-01-18 18:03:20', NULL, NULL),
	(135, 'Telefono', 'Samsung', 'Galaxy A34', '55555555555555', 'sehshsdh6ewt6e', '43634636363', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 2, 1, NULL, '2024-01-18', NULL, NULL, '2024-01-18 19:08:44', NULL, NULL),
	(136, 'Telefono', 'HP', 'Galaxy A33', '22222', '221212', '44244', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 2, 1, NULL, '2024-01-18', NULL, NULL, '2024-01-18 19:09:27', NULL, NULL),
	(138, 'Telefono', 'Samsung', 'Galaxy A33', '3333', 'ca', 'aa', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, NULL, '2024-01-18', NULL, NULL, '2024-01-18 19:11:16', NULL, NULL),
	(140, 'Telefono', 'Honor', 'Honor X7', '121212121212121', '13131313131313', '23142135252', NULL, NULL, 3, 1, '', '2024-01-18', NULL, NULL, '2024-01-29 17:23:55', NULL, NULL),
	(144, 'Telefono', 'Samsung', 'Galaxy A34', '366463768579064', 'dbdbdhew6363e6', '36366436343', NULL, NULL, 4, 1, '', '2024-01-18', NULL, NULL, '2024-02-07 15:12:47', NULL, NULL),
	(145, 'Telefono', 'Honor', 'Galaxy A34', '34634636346', 'sdhsh364346', NULL, NULL, NULL, 2, 1, '', '2024-01-18', NULL, NULL, '2024-02-06 15:39:22', NULL, NULL),
	(146, 'Telefono', 'Samsung', 'Galaxy A34', '34636363463', 'sdfgsd3t436', NULL, '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 2, 1, NULL, '2024-01-18', NULL, NULL, '2024-01-18 19:31:53', NULL, NULL),
	(148, 'Telefono', 'Honor', 'Galaxy A33', '346363634634634', 'dshsdgh34636346', '43763634634', NULL, NULL, 2, 4, '', '2024-01-18', NULL, NULL, '2024-02-07 15:12:18', NULL, NULL),
	(150, 'Telefono', 'Honor', 'Galaxy A34', '345634574537474', '4GTRU3456RTY435', '35345345', NULL, NULL, 2, 3, 'Fue perseguido por unos perros y se le cayó el celular.', '2024-01-18', NULL, NULL, '2024-01-31 20:19:11', NULL, NULL),
	(151, 'Tablet', 'Samsung', 'Tab S9', '245235326346236', 'WER3465ERT345', '50375757347', NULL, NULL, 4, 1, '', '2024-02-01', NULL, NULL, '2024-02-21 16:39:42', NULL, NULL),
	(152, 'Tablet', 'Samsung', 'Tab S9', '123412424242423', 'SDF234SDFSFSF32', '50378847394', NULL, NULL, 3, 1, '', '2024-02-05', NULL, NULL, '2024-02-06 17:01:07', NULL, NULL),
	(153, 'Telefono', 'Samsung', 'Galaxy A33', '141234525323512', 'WEQW23523EWTWER', '50393485937', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', 20, 1, 2, '', '2024-02-07', 'Obed Alberto Castro Orellana', NULL, '2024-02-12 20:59:09', '2024-02-12 08:59:09', NULL),
	(154, 'Laptop', 'Dell', '640 G9', NULL, 'WW2352WETW235', NULL, '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', 14, 3, 2, NULL, '2024-02-08', 'Diego Dubán Rivera Martinez', NULL, '2024-02-09 21:51:21', '2024-02-09 09:51:21', NULL),
	(155, 'Laptop', 'HP', '640 G9', NULL, 'DFHERT232433', '', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 2, 1, '', '2024-02-09', NULL, NULL, '2024-02-12 17:08:43', NULL, NULL);

-- Volcando estructura para tabla prueba.marcadispositivo
CREATE TABLE IF NOT EXISTS `marcadispositivo` (
  `idmarca` int NOT NULL AUTO_INCREMENT,
  `nombremarca` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idmarca`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla prueba.marcadispositivo: ~6 rows (aproximadamente)
INSERT INTO `marcadispositivo` (`idmarca`, `nombremarca`) VALUES
	(1, 'Samsung'),
	(2, 'Honor'),
	(3, 'HP'),
	(4, 'Dell'),
	(5, 'Huawei'),
	(6, 'Lenovo');

-- Volcando estructura para tabla prueba.modelodispositivo
CREATE TABLE IF NOT EXISTS `modelodispositivo` (
  `idmodelo` int NOT NULL AUTO_INCREMENT,
  `nombremodelo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`idmodelo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla prueba.modelodispositivo: ~6 rows (aproximadamente)
INSERT INTO `modelodispositivo` (`idmodelo`, `nombremodelo`) VALUES
	(1, 'Galaxy A33'),
	(2, 'Galaxy A34'),
	(3, 'Honor X7'),
	(4, 'Tab S8'),
	(5, 'Tab S9'),
	(6, '640 G9');

-- Volcando estructura para tabla prueba.registros
CREATE TABLE IF NOT EXISTS `registros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha_asignacion` timestamp NULL DEFAULT NULL,
  `nombre_asignador` varchar(30) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `usuario_campo_id` int DEFAULT NULL,
  `sede_id` int DEFAULT NULL,
  `dispositivo_id` int DEFAULT NULL,
  `tipo_dispositivo` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `accesorios_entregados` text COLLATE utf8mb3_unicode_ci,
  `accesorios_recuperados` text COLLATE utf8mb3_unicode_ci,
  `fecha_recepcion` timestamp NULL DEFAULT NULL,
  `nombre_receptor` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `comentario` varchar(500) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `fecha_modificacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `sede_id` (`sede_id`),
  KEY `dispositivo_id` (`dispositivo_id`),
  CONSTRAINT `FK1restriccionregistros` FOREIGN KEY (`dispositivo_id`) REFERENCES `dispositivos` (`iddispositivo`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla prueba.registros: ~40 rows (aproximadamente)
INSERT INTO `registros` (`id`, `fecha_asignacion`, `nombre_asignador`, `usuario_campo_id`, `sede_id`, `dispositivo_id`, `tipo_dispositivo`, `accesorios_entregados`, `accesorios_recuperados`, `fecha_recepcion`, `nombre_receptor`, `comentario`, `fecha_modificacion`) VALUES
	(5, '2024-01-09 08:54:33', 'Obed Alberto Castro Orellana', 1, 1, 36, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 16:17:34', 'Obed Alberto Castro Orellana', NULL, '2024-01-15 16:17:34'),
	(6, '2024-01-09 08:54:33', 'Obed Alberto Castro Orellana', 1, 3, 36, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 16:17:34', 'Obed Alberto Castro Orellana', NULL, '2024-01-15 16:17:34'),
	(11, '2024-01-11 10:18:46', 'Obed Alberto Castro Orellana', 5, 1, 48, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-11 10:19:24', 'Obed Alberto Castro Orellana', NULL, '2024-01-11 22:19:24'),
	(12, '2024-01-12 08:53:47', 'Diego Dubán Rivera Martinez', 11, 5, 47, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"0","Funda":"0","Lapiz":"1","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-12 08:55:52', 'Diego Dubán Rivera Martinez', NULL, '2024-01-12 20:55:52'),
	(13, '2024-01-12 08:57:44', 'Diego Dubán Rivera Martinez', 2, 1, 32, 'Tablet', '{"Cubo":"1","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-12 08:59:11', 'Diego Dubán Rivera Martinez', NULL, '2024-01-12 20:59:11'),
	(14, '2024-01-12 09:04:34', 'Diego Dubán Rivera Martinez', 10, 1, 51, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-12 09:05:06', 'Diego Dubán Rivera Martinez', NULL, '2024-01-30 20:05:40'),
	(15, '2024-01-12 09:06:24', 'Diego Dubán Rivera Martinez', 10, 1, 32, 'Tablet', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-13 09:11:39', 'Diego Dubán Rivera Martinez', NULL, '2024-01-30 20:21:06'),
	(21, '2024-01-15 17:16:48', 'Obed Alberto Castro Orellana', 3, 1, 32, 'Tablet', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 17:17:40', 'Obed Alberto Castro Orellana', 'Pérdida de lápiz óptico en labor de campo y pantalla rota por caída en alcantarilla.', '2024-01-15 17:17:40'),
	(23, '2024-01-13 06:00:00', 'Obed Alberto Castro Orellana', 3, 1, 52, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 08:31:12', 'Diego Dubán Rivera Martinez', '', '2024-01-15 20:31:12'),
	(24, '2024-01-14 13:53:12', 'Obed Alberto Castro Orellana', 11, 1, 50, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 08:31:26', 'Diego Dubán Rivera Martinez', '', '2024-01-15 20:31:26'),
	(25, '2024-01-12 07:55:03', 'Obed Alberto Castro Orellana', 2, 1, 40, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 08:32:16', 'Diego Dubán Rivera Martinez', '', '2024-01-15 20:32:16'),
	(26, '2024-01-09 07:57:06', 'Obed Alberto Castro Orellana', 4, 1, 51, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 08:31:18', 'Diego Dubán Rivera Martinez', '', '2024-01-15 20:31:18'),
	(31, '2024-01-10 08:15:03', 'Obed Alberto Castro Orellana', 8, 1, 37, 'Laptop', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 08:30:39', 'Diego Dubán Rivera Martinez', '', '2024-01-15 20:30:39'),
	(34, '2024-01-02 08:17:57', 'Obed Alberto Castro Orellana', 3, 2, 31, 'Tablet', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 08:31:05', 'Diego Dubán Rivera Martinez', '', '2024-01-15 20:31:05'),
	(35, '2024-01-02 08:22:44', 'Obed Alberto Castro Orellana', 3, 1, 48, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 08:31:47', 'Diego Dubán Rivera Martinez', '', '2024-01-15 20:31:47'),
	(36, '2024-01-15 08:23:51', 'Obed Alberto Castro Orellana', 3, 5, 47, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 08:32:10', 'Diego Dubán Rivera Martinez', '', '2024-01-15 20:32:10'),
	(37, '2024-01-02 08:24:51', 'Obed Alberto Castro Orellana', 2, 1, 38, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 08:32:22', 'Diego Dubán Rivera Martinez', '', '2024-01-15 20:32:22'),
	(38, '2024-01-09 08:29:39', 'Obed Alberto Castro Orellana', 2, 3, 36, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 08:32:27', 'Diego Dubán Rivera Martinez', '', '2024-01-15 20:32:27'),
	(47, '2024-01-14 09:40:54', 'Obed Alberto Castro Orellana', 10, 1, 52, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-16 16:12:50', 'Obed Alberto Castro Orellana', '', '2024-01-16 16:12:50'),
	(49, '2024-01-15 09:49:13', 'Obed Alberto Castro Orellana', 2, 1, 37, 'Laptop', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"0"}', '2024-01-16 16:11:49', 'Obed Alberto Castro Orellana', '', '2024-01-16 16:11:49'),
	(56, '2024-01-16 16:14:29', 'Obed Alberto Castro Orellana', 10, 1, 37, 'Laptop', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '2024-01-16 16:17:16', 'Obed Alberto Castro Orellana', '', '2024-01-16 16:17:16'),
	(59, '2024-01-17 08:32:25', 'Obed Alberto Castro Orellana', 10, 1, 38, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-17 09:48:56', 'Obed Alberto Castro Orellana', '', '2024-01-17 21:48:56'),
	(65, '2024-01-17 09:43:19', 'Diego Dubán Rivera Martinez', 10, 1, 56, 'Laptop', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '2024-01-18 15:08:55', 'Obed Alberto Castro Orellana', 'Se recibe con pantalla rota.', '2024-01-30 20:29:14'),
	(70, '2024-01-18 08:18:47', 'Obed Alberto Castro Orellana', 16, 2, 31, 'Tablet', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-18 08:18:57', 'Obed Alberto Castro Orellana', '', '2024-01-18 20:18:57'),
	(71, '2024-01-19 08:49:19', 'Miguel Angel Portillo Lozano', 18, 4, 144, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-26 10:11:19', 'Diego Dubán Rivera Martinez', '', '2024-01-26 22:11:19'),
	(72, '2024-01-23 09:15:46', 'Miguel Angel Portillo Lozano', 20, 1, 37, 'Laptop', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"0"}', '2024-01-26 10:13:31', 'Diego Dubán Rivera Martinez', '', '2024-01-30 20:30:19'),
	(73, '2024-01-23 09:19:57', 'Miguel Angel Portillo Lozano', 14, 1, 53, 'Telefono', '{"Cubo":"1","Cable":"0","Funda":"1","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, NULL, NULL, NULL, '2024-01-23 21:19:57'),
	(74, '2024-01-23 09:25:20', 'Miguel Angel Portillo Lozano', 14, 1, 53, 'Telefono', '{"Cubo":"1","Cable":"0","Funda":"1","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"0","Funda":"1","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-23 09:29:51', 'Miguel Angel Portillo Lozano', '', '2024-01-23 21:31:13'),
	(75, '2024-01-24 08:23:10', 'Miguel Angel Portillo Lozano', 20, 1, 59, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-02-07 15:12:56', 'Obed Alberto Castro Orellana', '', '2024-02-07 15:12:56'),
	(76, '2024-01-24 08:23:42', 'Miguel Angel Portillo Lozano', 22, 3, 140, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-24 08:26:31', 'Miguel Angel Portillo Lozano', '', '2024-01-30 21:07:52'),
	(77, '2024-01-26 08:57:52', 'Obed Alberto Castro Orellana', 21, 2, 31, 'Tablet', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-29 17:06:06', 'Obed Alberto Castro Orellana', '', '2024-01-30 20:31:22'),
	(78, '2024-01-26 09:10:15', 'Miguel Angel Portillo Lozano', 21, 2, 150, 'Telefono', '{"Cubo":"0","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, NULL, NULL, NULL, '2024-01-26 21:10:15'),
	(79, '2024-01-26 09:19:12', 'Miguel Angel Portillo Lozano', 21, 2, 148, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, NULL, NULL, NULL, '2024-01-26 21:19:12'),
	(80, '2024-02-26 09:10:15', 'Miguel Angel Portillo Lozano', 21, 2, 150, 'Telefono', '{"Cubo":"0","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"0","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-31 08:19:11', 'Obed Alberto Castro Orellana', 'Fue perseguido por unos perros y se le cayó el celular.', '2024-01-31 20:19:11'),
	(81, '2024-01-26 10:13:42', 'Diego Dubán Rivera Martinez', 26, 1, 37, 'Laptop', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '2024-01-26 10:21:01', 'Diego Dubán Rivera Martinez', '', '2024-01-26 22:21:01'),
	(82, '2024-01-29 17:11:19', 'Obed Alberto Castro Orellana', 21, 2, 31, 'Tablet', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-29 17:15:33', 'Obed Alberto Castro Orellana', '', '2024-01-30 20:45:45'),
	(83, '2024-01-29 17:11:32', 'Obed Alberto Castro Orellana', 24, 4, 144, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-02-07 15:12:47', 'Obed Alberto Castro Orellana', '', '2024-02-07 15:12:47'),
	(84, '2024-01-29 17:13:45', 'Obed Alberto Castro Orellana', 14, 3, 140, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-29 17:23:55', 'Obed Alberto Castro Orellana', '', '2024-01-30 21:04:57'),
	(85, '2024-01-29 17:14:59', 'Obed Alberto Castro Orellana', 21, 2, 145, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"0","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-02-06 15:39:22', 'Obed Alberto Castro Orellana', '', '2024-02-12 19:07:46'),
	(86, '2024-01-29 17:15:47', 'Obed Alberto Castro Orellana', 21, 2, 31, 'Tablet', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-29 17:24:06', 'Obed Alberto Castro Orellana', '', '2024-01-30 20:51:46'),
	(88, '2024-02-01 09:49:39', 'Obed Alberto Castro Orellana', 10, 1, 151, 'Tablet', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-02-07 15:11:52', 'Obed Alberto Castro Orellana', '', '2024-02-07 15:11:52'),
	(89, '2024-02-05 16:32:19', 'Obed Alberto Castro Orellana', 21, 2, 31, 'Tablet', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-02-07 15:12:04', 'Obed Alberto Castro Orellana', '', '2024-02-07 15:12:04'),
	(91, '2024-02-06 17:00:48', 'Obed Alberto Castro Orellana', 14, 3, 152, 'Tablet', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-02-06 17:01:07', 'Obed Alberto Castro Orellana', '', '2024-02-06 17:07:47'),
	(92, '2024-02-07 15:13:31', 'Obed Alberto Castro Orellana', 20, 1, 37, 'Laptop', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', NULL, NULL, NULL, NULL, '2024-02-07 15:13:31'),
	(93, '2024-02-09 09:51:21', 'Diego Dubán Rivera Martinez', 14, 3, 154, 'Laptop', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', NULL, NULL, NULL, NULL, '2024-02-09 21:51:21'),
	(94, '2024-02-12 08:59:09', 'Obed Alberto Castro Orellana', 20, 1, 153, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, NULL, NULL, NULL, '2024-02-12 20:59:09');

-- Volcando estructura para tabla prueba.sedes
CREATE TABLE IF NOT EXISTS `sedes` (
  `idsede` int NOT NULL AUTO_INCREMENT,
  `nombresede` varchar(50) NOT NULL,
  `departamentosede` varchar(50) NOT NULL,
  PRIMARY KEY (`idsede`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

-- Volcando datos para la tabla prueba.sedes: ~5 rows (aproximadamente)
INSERT INTO `sedes` (`idsede`, `nombresede`, `departamentosede`) VALUES
	(1, 'ExBandesal', 'San Miguel'),
	(2, 'ITCA MEGATEC', 'La Unión'),
	(3, 'INJUVE', 'Morazan'),
	(4, 'INJUVE', 'Usulutan'),
	(5, 'INJUVE', 'San Miguel');

-- Volcando estructura para tabla prueba.tipodispositivo
CREATE TABLE IF NOT EXISTS `tipodispositivo` (
  `idtipo` int NOT NULL AUTO_INCREMENT,
  `nombretipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla prueba.tipodispositivo: ~2 rows (aproximadamente)
INSERT INTO `tipodispositivo` (`idtipo`, `nombretipo`) VALUES
	(1, 'Laptop'),
	(2, 'Telefono'),
	(3, 'Tablet');

-- Volcando estructura para tabla prueba.wiki
CREATE TABLE IF NOT EXISTS `wiki` (
  `idwiki` int NOT NULL AUTO_INCREMENT,
  `tituloproblema` text NOT NULL,
  `descripcionproblema` text NOT NULL,
  `solucionproblema` text NOT NULL,
  `reportaproblema` int NOT NULL DEFAULT '0',
  `fechareporte` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idwiki`),
  KEY `FK1reporta` (`reportaproblema`),
  CONSTRAINT `FK1reporta` FOREIGN KEY (`reportaproblema`) REFERENCES `administradores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla prueba.wiki: ~16 rows (aproximadamente)
INSERT INTO `wiki` (`idwiki`, `tituloproblema`, `descripcionproblema`, `solucionproblema`, `reportaproblema`, `fechareporte`) VALUES
	(3, 'Problema en segmento 12140098', 'El segmento se encuentra mal delimitado por que hay manzanas que estan compartidas con segmento 12146678', 'Escalar caso a Dto de Censos para que trasladar a los expertos en sistemas de edicion cartografica arreglen el segmento', 1, '2024-01-23 22:24:39'),
	(4, 'Problema en mapa 1417 Conchagua', 'No sale la isla de conchaguita', 'Actualizarle el archivo tpkx del 18 de Enero', 11, '2024-01-23 22:29:22'),
	(5, 'asdfasdgsag sgsdfgsdfgs sg sg sdgf sdgs', 'agsdgsdg dgdsgdsgf sdg sdfgds gs ', 'sgsdfgdfgsd sfdgfsdgsdfg sgs gsdfg sg', 1, '2024-01-24 16:32:53'),
	(6, '¿Por qué la gallina cruzó la calle?', 'Algunas personas dicen que la gallina cruzó la calle para llegar al otro lado, cuando la verdad, desconocemos la razón porque no hablamos idioma gallina, ni modo que les pudiéramos entender. Tendríamos que ser BOBITOS.', 'aaaaaaa aaaaaaaaaaaaaaasdsdgfsdgsd sdg sdgdsgsdg', 1, '2024-01-24 20:43:39'),
	(7, 'sbsdfbds', 'bsdbsdbf', 'sdbfsjhdfhsdhf', 1, '2024-01-24 16:36:12'),
	(8, 'zdszdfbzxb', 'zxbzxbnxnxcbc', '', 1, '2024-01-24 16:36:46'),
	(9, 'ENTREGA DE DISPOSITIVOS ORIENTE', 'Mencionar a que sede y cantidad de dispositivos asignados', '', 4, '2024-01-25 19:47:55'),
	(10, 'Otra entrada', 'Entrada para comprobar que esta baina, aún funciona.', '', 1, '2024-01-26 19:21:37'),
	(11, 'Problema con el sr. Mike', 'Prueba para ver si funciona lo de que lo agregue de una vez.', 'Solución del problema, bla, bla, bla.', 1, '2024-01-30 22:02:09'),
	(12, 'Probando', 'Probando de nuevo', 'Nueva solución', 1, '2024-01-30 22:04:10'),
	(13, 'asdfasdfasf', 'dsfgdshsd ghsdsdfg', 'dshdfjhgfhkghjl drh dfj ', 1, '2024-01-30 22:08:36'),
	(14, 'asdflubl', 'lainsldif laisd fas dfib sñfasdf', '', 1, '2024-02-01 21:29:12'),
	(15, 'problemas en teams', 'revisar version', '', 11, '2024-02-01 21:44:14'),
	(16, 'PROBLEMAS EN TEAMS', 'librefutbol', 'librefutbol', 4, '2024-02-01 21:44:55'),
	(17, 'Probando titulo de entrada', 'Descripción para la nueva entrada, revisando si hay algún tipo de error. ', 'Esta es la solución de prueba que se agrega, a modo de ir probando y ver si hay algún error en el momento que la información es almacenada o si se guarda correctamente, para tomar las medidas respectivas, dependiendo del caso. ', 1, '2024-02-07 15:37:18'),
	(18, 'Actualización de Laptops', '¿Qué actualizaciones se les aplica a las laptops?', '', 4, '2024-02-09 22:05:48'),
	(22, 'sdgweggasgasgdg', 'wafasgsgsg asgasgsg asg sag sg sag saga sg asg asgsa', '', 1, '2024-02-12 18:56:56'),
	(23, 'asdfasdf a fs fsa', 'safasg asg sg asgas gs g', 'asdg alsh sah sh fdsahf ñhñsehf safgegfl galufg lasugflas ñfhsa lfgls gfl gsalfug salgf lsugf lgsal fugslau fglsau gfluigsd lfgusdl fglsa gfl sgflu gaslfug saluigf luisgdf lugsa flgusdal fgsla fglusag flusag flugs lfugsal fugasl fugalsgf', 1, '2024-02-12 18:57:43'),
	(24, 'Probando nueva entrada', 'Descripción del problema', 'Estoy agregando esta solución de prueba, para verificar el correcto funcionamiento de los comentarios, dentro de las publicaciones. \r\n\r\nEntonces, esta es la respuesta propuesta para el problema planteado, por si les llega a aparecer este inconveniente, haya más o menos una alternativa que se pueda probar para solventar.', 1, '2024-02-19 20:06:45');

-- Volcando estructura para tabla prueba.wikicolaboraciones
CREATE TABLE IF NOT EXISTS `wikicolaboraciones` (
  `idwikicolaboraciones` int NOT NULL AUTO_INCREMENT,
  `idcolabora` int NOT NULL DEFAULT '0',
  `idwiki` int NOT NULL DEFAULT '0',
  `colaboracion` text NOT NULL,
  `fechacolaboracion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idwikicolaboraciones`) USING BTREE,
  KEY `FK1colabora` (`idcolabora`),
  KEY `idwiki` (`idwiki`),
  CONSTRAINT `FK1colabora` FOREIGN KEY (`idcolabora`) REFERENCES `administradores` (`id`),
  CONSTRAINT `FK2wiki` FOREIGN KEY (`idwiki`) REFERENCES `wiki` (`idwiki`)
) ENGINE=InnoDB AUTO_INCREMENT=194 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla prueba.wikicolaboraciones: ~43 rows (aproximadamente)
INSERT INTO `wikicolaboraciones` (`idwikicolaboraciones`, `idcolabora`, `idwiki`, `colaboracion`, `fechacolaboracion`) VALUES
	(66, 1, 6, 'asasdvasv', '2024-01-25 19:35:01'),
	(67, 1, 6, 'qweqweqweqweqweqweqweqwe', '2024-01-25 19:35:48'),
	(91, 1, 5, 'Primer comentario.', '2024-01-25 21:25:01'),
	(92, 1, 6, 'ssss', '2024-01-25 21:55:15'),
	(93, 1, 6, 'probando', '2024-01-25 21:55:56'),
	(96, 1, 7, 'probando dsdvsdfsfafdfffffffffffffffffffffffffffff', '2024-01-25 21:56:48'),
	(97, 1, 4, 'Registra Ricky.', '2024-01-25 22:29:09'),
	(98, 4, 9, 'este', '2024-01-26 21:33:35'),
	(99, 4, 3, 'Se contacto con el proveedor e implementara la solución lo más pronto posible suele tardar unos 2 dias.', '2024-01-26 21:41:11'),
	(100, 11, 3, 'También puedes buscar apoyo con el área de sistemas con la ayuda de los servicios de Arcgis en dashboards ellos pueden conocer que manzanas son las que están compartidas,  como dato he notado que los segmentos que están colindando entre municipios o departamentos vecinos por lo general siempre presentan este problema', '2024-01-26 21:45:01'),
	(101, 1, 3, 'Estuve en la sede Exbandesal San Miguel, cuando tuvimos un problema similar. La duda que surge en este caso, en los consultores, es a qué brigada le corresponderá realizar el levantamiento de esos puntos, por lo que hay que tener en cuenta, las indicaciones de los compañeros de sistemas. ', '2024-01-26 21:47:52'),
	(102, 11, 3, 'Mjuuu, si seguro', '2024-01-29 22:19:08'),
	(103, 1, 8, 'Este es el otro aporte.', '2024-01-31 19:15:59'),
	(104, 1, 8, 'Aportando otra vez.', '2024-01-31 19:16:20'),
	(105, 1, 17, 'Aquí humildemente probando proporcionar una respuesta que pueda servir como solución para el problema que se plantea, y al mismo tiempo, comprobar si es que se general errores al momento de manipular la información. Lo que se espera que esta información se agrega, sin problema, de inmediato al guardar. ', '2024-02-07 15:38:56'),
	(106, 1, 11, 'Este es un aporte, que hasta el momento, nadie más había aportado algo para solucionarlo.', '2024-02-07 15:41:37'),
	(107, 1, 11, 'Comprobando si se actualizó el script que limpia el textarea.', '2024-02-07 15:42:31'),
	(108, 11, 3, 'y asi sustantivamente...', '2024-02-09 16:20:29'),
	(109, 1, 4, 'El bobito con las donas.', '2024-02-09 21:34:41'),
	(110, 4, 9, 'Cual', '2024-02-09 21:55:36'),
	(111, 4, 9, 'puesi', '2024-02-09 21:56:05'),
	(112, 4, 9, 'este', '2024-02-09 21:56:36'),
	(113, 1, 9, 'Pues sí, ese.', '2024-02-09 22:00:03'),
	(114, 4, 9, 'no lo veo', '2024-02-09 22:01:17'),
	(115, 4, 9, 'aja\r\n', '2024-02-09 22:02:08'),
	(116, 4, 18, '* Las Actualizaciones de Windows, incluyendo las opcionales.\r\n* Las Actualizaciones de HP.', '2024-02-09 22:08:11'),
	(117, 11, 18, 'Saludos Miguel, espero estar pronto en Sede San Miguel\r\nen esta oportunidad mi aporte seria que deben de actualizar los controladores del equipo a través de HP Support \r\nBuen dia.. quedo atento', '2024-02-12 17:29:11'),
	(177, 1, 3, 'qwqeqeqe', '2024-02-19 20:03:58'),
	(178, 1, 3, 'eryeyeyery', '2024-02-19 20:04:04'),
	(179, 1, 3, 'liuhglsdlgjnsdgjnksdgdsgfsdg', '2024-02-19 20:04:15'),
	(180, 1, 3, 'psdijhpgihsdghdñngsdg', '2024-02-19 20:04:34'),
	(181, 1, 3, 'ewteryterydsydsrysdry', '2024-02-19 20:04:40'),
	(182, 1, 3, 'sdrhsdhshdfhdfshdh', '2024-02-19 20:04:44'),
	(183, 1, 3, 'sdgsdhsdfhsdhfsdhsdfh', '2024-02-19 20:04:49'),
	(184, 1, 3, 'sdfhsdfhfdjhfghkjgkg', '2024-02-19 20:04:56'),
	(185, 1, 3, 'dfgjghkdyhdfghfghsdfghgdf', '2024-02-19 20:05:01'),
	(186, 1, 24, 'Primer aporte para este problema.', '2024-02-19 20:07:11'),
	(187, 1, 24, 'Segundo aporte para este problema.', '2024-02-19 20:07:25'),
	(188, 1, 12, 'Este es el primer aporte', '2024-02-19 20:10:18'),
	(189, 1, 12, 'Segundooooooooooooo', '2024-02-19 20:10:25'),
	(190, 1, 10, 'asdfasdfasdfdsf', '2024-02-19 20:38:12'),
	(191, 1, 10, 'asdgasdgasdgdsag', '2024-02-19 20:38:28'),
	(192, 1, 10, 'astrerydfgh sdh sfdh sdfh sdh', '2024-02-19 20:38:37'),
	(193, 1, 3, 'Probando este otro comentario.', '2024-02-20 22:01:45');

-- Volcando estructura para disparador prueba.actualizar_registros
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `actualizar_registros` AFTER UPDATE ON `dispositivos` FOR EACH ROW BEGIN
    IF NEW.estadodispositivo = 2 THEN
        INSERT INTO registros (fecha_asignacion, usuario_campo_id, sede_id, dispositivo_id, tipo_dispositivo, accesorios_entregados, nombre_asignador)
        VALUES (NEW.fechaasignacion, NEW.responsabledispositivo, NEW.sededispositivo, NEW.iddispositivo, NEW.tipodispositivo, NEW.accesorios, NEW.asignadordispositivo);

    ELSEIF NEW.estadodispositivo = 1  OR NEW.estadodispositivo = 3 THEN
        UPDATE registros
        SET fecha_recepcion = NEW.fecharecepcion, accesorios_recuperados = NEW.accesorios, nombre_receptor = NEW.receptordispositivo, comentario = NEW.comentariodispositivo
        WHERE dispositivo_id = OLD.iddispositivo AND fecha_asignacion = OLD.fechaasignacion AND usuario_campo_id = OLD.responsabledispositivo;
        
    END IF;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
