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

-- Volcando datos para la tabla prueba.administradores: ~4 rows (aproximadamente)
INSERT INTO `administradores` (`id`, `nombre`, `email`, `cargo`, `foto`, `usuario`, `password`, `perfil`, `fecha`) VALUES
	(1, 'Obed Alberto Castro Orellana', 'obed.castro@bcr.gob.sv', 'Técnico de Soporte Informático', 'vistas/assets/img', 'inobed', 'admin', 'superadministrador', '2024-01-10 20:29:48'),
	(4, 'Miguel Angel Portillo Lozano', 'miguel.portillo@bcr.gob.sv', 'Técnico de Soporte Informático', 'vistas/assets/img', 'inportillo', 'admin2', 'superadministrador', '2024-01-10 20:30:37'),
	(11, 'Diego Dubán Rivera Martinez', 'diego.rivera@bcr.gob.sv', 'Técnico de Soporte Informático', 'vistas/assets/img', 'induban', 'admin3', 'superadministrador', '2024-01-10 20:30:04'),
	(13, 'Juver Nahúm Argueta Ortíz', 'juver.argueta@bcr.gob.sv', 'Técnico de Soporte Informático', 'vistas/assets/img', 'injuver', 'admin4', 'superadministrador', '2024-01-10 20:30:06');

-- Volcando datos para la tabla prueba.consultores: ~9 rows (aproximadamente)
INSERT INTO `consultores` (`idconsultor`, `nombreconsultor`, `duiconsultor`, `cargoconsultor`, `contactoconsultor`, `dispositivo_id`, `sedeconsultor`, `fechaactualizacionconsultor`, `fecharegistroconsultor`) VALUES
	(1, 'Wendy Yasmín Velloso Jiménez', 'DUI1', 'Censista', 'Contacto1', 1, '1', '2024-01-10 22:03:49', '2023-12-23'),
	(2, 'Edgar Balmore Diaz Paz', 'DUI2', 'Cencista', 'Contacto2', 2, '2', '2024-01-10 22:03:53', '2023-12-23'),
	(3, 'Carlos Henriquez Casemiro ', 'DUI3', 'Supervisor de Brigada', 'Contacto3', 3, '1', '2024-01-10 22:04:04', '2023-12-23'),
	(4, 'Lionel Andres Messi Pochetti', '55555555-0', 'Supervisor de Brigada', '50332323233', 0, '2', '2024-01-10 22:04:13', '0000-00-00'),
	(5, 'Ibrahim Adalberto Ramirez Castle', '22222222-2', 'Digitador ', '50316558747', 0, '1', '2024-01-10 22:04:43', '0000-00-00'),
	(6, 'Roberto Emiliano Firme Roble', '11111111-1', 'Digitador', '50312345675', 0, '1', '2024-01-10 22:04:46', '2023-12-23'),
	(7, 'Osti Reily Lopez Mena', '12121212-1', 'Censista', '12121212', 0, '1', '2024-01-10 22:04:53', '2023-12-26'),
	(8, 'Frank Bequebauer Ortiz', '0000000000', 'Delegado de Brigada', '1123123123', 0, '2', '2024-01-10 22:05:05', '2023-12-26'),
	(9, 'Julio Mario Pineda Zometa', '923749414-', 'Delegado de Brigada', '53253245325', 0, '2', '2024-01-10 22:05:12', '2023-12-29');

-- Volcando datos para la tabla prueba.dispositivos: ~16 rows (aproximadamente)
INSERT INTO `dispositivos` (`iddispositivo`, `tipodispositivo`, `marcadispositivo`, `modelodispositivo`, `imeidispositivo`, `seriedispositivo`, `telefonodispositivo`, `accesorios`, `responsabledispositivo`, `sededispositivo`, `estadodispositivo`, `comentariodispositivo`, `fecharegistro`, `asignadordispositivo`, `receptordispositivo`, `fechamodificacion`, `fechaasignacion`, `fecharecepcion`) VALUES
	(31, 'Tablet', 'HP', 'Tab S9', '4354677', 'HYYYF5667', '76543677', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '', 2, 1, '', '2024-01-02', 'Obed Alberto Castro Orellana', 'Obed Alberto Castro Orellana', '2024-01-09 19:52:23', '2024-02-05 16:29:43', '2024-01-09 07:52:23'),
	(32, 'Tablet', 'HP', 'Galaxy A34', '737382920', 'HF799335', '72053930', '', '', 1, 1, NULL, '2024-01-02', NULL, NULL, '2024-01-06 04:27:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(34, 'Laptop', 'Lenovo', '640 G9', '8549934JH', '455633F5', '32454543', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '', 2, 1, '', '2024-01-02', 'Obed Alberto Castro Orellana', 'Obed Alberto Castro Orellana', '2024-01-09 19:52:19', '2024-01-09 18:04:40', '2024-01-09 07:52:19'),
	(35, 'Tablet', 'Samsung', 'Tab S9', '738453879435', 'DHER844H3', '453636232', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '1', 3, 2, '', '2024-01-02', 'Obed Alberto Castro Orellana', 'Obed Alberto Castro Orellana', '2024-01-10 16:49:25', '2024-01-10 16:49:25', '0000-00-00 00:00:00'),
	(36, 'Telefono', 'Samsung', 'Galaxy A34', '546564Y7', '54654Y6Y6', '5454Y', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '1', 3, 2, '', '2024-01-02', 'Obed Alberto Castro Orellana', 'Obed Alberto Castro Orellana', '2024-01-09 22:14:52', '2024-01-09 08:54:33', '2024-01-09 07:52:28'),
	(37, 'Laptop', 'Lenovo', '640 G9', '876654T4', '36546758G', '22577777', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '', 1, 1, '', '2024-01-02', 'Obed Alberto Castro Orellana', 'Obed Alberto Castro Orellana', '2024-01-09 19:52:15', '2024-01-09 18:04:32', '2024-01-09 07:52:15'),
	(38, 'Telefono', 'Samsung', 'Galaxy A33', '353535353535353', 'asdas3432dgdg', '50375634634', '', '', 1, 1, NULL, NULL, NULL, NULL, '2024-01-06 04:27:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(39, 'Laptop', 'HP', '640 G9', 'N/A', 'AAAAAA1121212', 'N/A', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"0"}', '', 4, 1, '', '2024-01-09', 'Obed Alberto Castro Orellana', 'Obed Alberto Castro Orellana', '2024-01-10 22:06:31', '2024-01-09 18:04:27', '2024-01-09 18:13:17'),
	(40, 'Telefono', 'Samsung', 'Galaxy A34', '133457585474647', 'SDFW3SSFW35', '50375647364', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, NULL, NULL, NULL, NULL, '2024-01-09 15:25:25', NULL, NULL),
	(41, 'Laptop', 'HP', '640 G9', 'N/A', 'SDGFE3463GSDFG', 'N/A', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '', 5, 1, '', NULL, 'Obed Alberto Castro Orellana', 'Obed Alberto Castro Orellana', '2024-01-10 22:06:32', '2024-01-09 18:04:20', '2024-01-09 07:52:11'),
	(42, 'Laptop', 'HP', '640 G9', 'N/A', 'DRTHE547DFHTD', 'N/A', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '', 5, 1, '', NULL, 'Obed Alberto Castro Orellana', 'Obed Alberto Castro Orellana', '2024-01-10 22:06:34', '2024-01-10 17:01:10', '2024-01-10 17:01:23'),
	(43, 'Laptop', 'HP', '640 G9', 'N/A', 'TJYRTYU567FHJ', 'N/A', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"0"}', '', 2, 1, '', NULL, 'Obed Alberto Castro Orellana', 'Obed Alberto Castro Orellana', '2024-01-10 22:06:35', '2024-01-09 08:06:21', '2024-01-09 08:06:26'),
	(44, 'Laptop', 'Lenovo', 'IdeaPad Slim 5', 'N/A', 'GWERT34534TERW', 'N/A', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, NULL, NULL, NULL, NULL, '2024-01-10 22:06:37', NULL, NULL),
	(45, 'Laptop', 'Lenovo', '640 G9', 'N/A', 'DGE43536RTE', 'N/A', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 2, 1, '', NULL, NULL, NULL, '2024-01-10 22:06:38', NULL, NULL),
	(47, 'Telefono', 'Honor', 'Honor X7', '777777777777777', 'ouuuuuuuuuuuuu', '45645634564', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 5, 1, NULL, NULL, NULL, NULL, '2024-01-10 16:35:16', NULL, NULL),
	(48, 'Telefono', 'Samsung', 'Galaxy A34', '222222222222222', '222222222222222', '22222222222', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, NULL, '2024-01-10', NULL, NULL, '2024-01-10 21:47:02', NULL, NULL);

-- Volcando datos para la tabla prueba.marcadispositivo: ~6 rows (aproximadamente)
INSERT INTO `marcadispositivo` (`idmarca`, `nombremarca`) VALUES
	(1, 'Samsung'),
	(2, 'Honor'),
	(3, 'HP'),
	(4, 'Dell'),
	(5, 'Huawei'),
	(6, 'Lenovo');

-- Volcando datos para la tabla prueba.modelodispositivo: ~0 rows (aproximadamente)
INSERT INTO `modelodispositivo` (`idmodelo`, `nombremodelo`) VALUES
	(1, 'Galaxy A33'),
	(2, 'Galaxy A34'),
	(3, 'Honor X7'),
	(4, 'Tab S8'),
	(5, 'Tab S9'),
	(6, '640 G9');

-- Volcando datos para la tabla prueba.registros: ~8 rows (aproximadamente)
INSERT INTO `registros` (`id`, `fecha_asignacion`, `nombre_asignador`, `usuario_campo_id`, `sede_id`, `dispositivo_id`, `tipo_dispositivo`, `accesorios_entregados`, `accesorios_recuperados`, `fecha_recepcion`, `nombre_receptor`, `comentario`, `fecha_modificacion`) VALUES
	(1, '2024-01-09 07:52:59', 'Obed Alberto Castro Orellana', 8, 2, 43, 'Laptop', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-09 08:03:26', 'Obed Alberto Castro Orellana', NULL, '2024-01-09 20:03:26'),
	(3, '2024-01-09 08:04:13', 'Obed Alberto Castro Orellana', 1, 2, 43, 'Laptop', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '2024-01-09 08:04:20', 'Obed Alberto Castro Orellana', NULL, '2024-01-09 20:04:20'),
	(4, '2024-01-09 08:06:21', 'Obed Alberto Castro Orellana', 7, 2, 43, 'Laptop', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"0"}', '2024-01-09 08:06:26', 'Obed Alberto Castro Orellana', NULL, '2024-01-09 20:06:26'),
	(5, '2024-01-09 08:54:33', 'Obed Alberto Castro Orellana', 1, 1, 36, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, NULL, NULL, NULL, '2024-01-09 20:54:34'),
	(6, '2024-01-09 08:54:33', 'Obed Alberto Castro Orellana', 1, 3, 36, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, NULL, NULL, NULL, '2024-01-09 22:14:52'),
	(7, '2024-01-09 07:57:11', 'Obed Alberto Castro Orellana', 1, 5, 42, 'Laptop', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '2024-01-10 16:52:20', 'Obed Alberto Castro Orellana', NULL, '2024-01-10 16:52:20'),
	(8, '2024-01-10 16:49:25', 'Obed Alberto Castro Orellana', 1, 3, 35, 'Tablet', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, NULL, NULL, NULL, '2024-01-10 16:49:25'),
	(9, '2024-01-10 17:01:10', 'Obed Alberto Castro Orellana', 7, 5, 42, 'Laptop', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '2024-01-10 17:01:23', 'Obed Alberto Castro Orellana', NULL, '2024-01-10 17:01:23');

-- Volcando datos para la tabla prueba.sedes: ~5 rows (aproximadamente)
INSERT INTO `sedes` (`idsede`, `nombresede`, `departamentosede`) VALUES
	(1, 'ExBandesal', 'San Miguel'),
	(2, 'ITCA MEGATEC', 'La Unión'),
	(3, 'INJUVE', 'Morazan'),
	(4, 'INJUVE', 'Usulutan'),
	(5, 'INJUVE', 'San Miguel');

-- Volcando datos para la tabla prueba.tipodispositivo: ~0 rows (aproximadamente)
INSERT INTO `tipodispositivo` (`idtipo`, `nombretipo`) VALUES
	(1, 'Laptop'),
	(2, 'Telefono'),
	(3, 'Tablet');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
