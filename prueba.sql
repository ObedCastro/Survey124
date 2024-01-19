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

-- Volcando datos para la tabla prueba.administradores: ~6 rows (aproximadamente)
INSERT INTO `administradores` (`id`, `nombre`, `email`, `cargo`, `foto`, `usuario`, `password`, `perfil`, `fecha`) VALUES
	(1, 'Obed Alberto Castro Orellana', 'obed.castro@bcr.gob.sv', 'Técnico de Soporte Informático', 'vistas/assets/img', 'inobed', '21232f297a57a5a743894a0e4a801fc3', 'superadministrador', '2024-01-19 20:18:10'),
	(4, 'Miguel Angel Portillo Lozano', 'miguel.portillo@bcr.gob.sv', 'Técnico de Soporte Informático', 'vistas/assets/img', 'inportillo', '6b44146a52fe0cb872686e7631786802', 'superadministrador', '2024-01-19 20:23:14'),
	(11, 'Diego Dubán Rivera Martinez', 'diego.rivera@bcr.gob.sv', 'Técnico de Soporte Informático', 'vistas/assets/img', 'induban', 'e823be777ac3d8b1052e62c96c965049', 'superadministrador', '2024-01-19 20:23:34'),
	(13, 'Juver Nahúm Argueta Ortíz', 'juver.argueta@bcr.gob.sv', 'Técnico de Soporte Informático', 'vistas/assets/img', 'injuver', 'fc1ebc848e31e0a68e868432225e3c82', 'superadministrador', '2024-01-19 19:45:20'),
	(34, 'Administrador de prueba', 'prueba@prueba.com', 'Cargo de prueba', 'vistas/assets/img', 'prueba', '81dc9bdb52d04dc20036dbd8313ed055', 'Perfil de prueba', '2024-01-19 22:15:10'),
	(35, 'Admin test', 'test@test.com', 'Cargo test', 'vistas/assets/img', 'usuariotest', 'd79c8788088c2193f0244d8f1f36d2db', 'perfil test', '2024-01-19 22:14:21');

-- Volcando datos para la tabla prueba.consultores: ~12 rows (aproximadamente)
INSERT INTO `consultores` (`idconsultor`, `nombreconsultor`, `duiconsultor`, `cargoconsultor`, `contactoconsultor`, `dispositivo_id`, `sedeconsultor`, `fechaactualizacionconsultor`, `fecharegistroconsultor`) VALUES
	(10, 'Juan Camanei', '504938273', 'Analista de sistemas de información', '58493843847', NULL, '1', '2024-01-12 16:40:39', '2024-01-12'),
	(14, 'Jorge Alberto González Barillas', '98765645-3', 'Auxiliar de bodega miscelanea', '7867-0988', NULL, '3', '2024-01-18 15:21:21', '2024-01-18'),
	(15, '', '', '', '', NULL, '', '2024-01-18 15:22:59', '2024-01-18'),
	(16, 'Rene Portillo Cuadra', '27378329-2', 'Maestro de Obra', '7688-4433', NULL, '2', '2024-01-18 15:23:46', '2024-01-18'),
	(18, 'Schafik Jorge Hándal Hánd', '77668890-0', 'Artista', '3848-0099', NULL, '4', '2024-01-18 15:25:57', '2024-01-18'),
	(19, '', '', '', '', NULL, '', '2024-01-18 15:31:16', '2024-01-18'),
	(20, 'ANTONIO JOSE PORTILLO', '04150189-1', 'Sensador', '77777771', NULL, '1', '2024-01-19 21:06:58', '2024-01-19'),
	(21, 'MANUEL ANTONIO PORTILLO', '04150189-2', 'Delegado', '77777772', NULL, '2', '2024-01-19 21:07:19', '2024-01-19'),
	(22, 'JOSE JUAN PORTILLO', '04150189-3', 'Supervisor', '77777773', NULL, '3', '2024-01-19 21:07:45', '2024-01-19'),
	(23, 'FRANCISCO MANUEL PORTILLO', '04150189-4', 'Sensador', '77777774', NULL, '4', '2024-01-19 21:08:11', '2024-01-19'),
	(24, 'DAVID FRANCISCO PORTILLO', '04150189-5', 'Delegado', '77777775', NULL, '4', '2024-01-19 21:08:41', '2024-01-19'),
	(25, 'JUAN LUIS PORTILLO', '04150189-6', 'Supervisor', '77777776', NULL, '5', '2024-01-19 21:09:04', '2024-01-19');

-- Volcando datos para la tabla prueba.dispositivos: ~28 rows (aproximadamente)
INSERT INTO `dispositivos` (`iddispositivo`, `tipodispositivo`, `marcadispositivo`, `modelodispositivo`, `imeidispositivo`, `seriedispositivo`, `telefonodispositivo`, `accesorios`, `responsabledispositivo`, `sededispositivo`, `estadodispositivo`, `comentariodispositivo`, `fecharegistro`, `asignadordispositivo`, `receptordispositivo`, `fechamodificacion`, `fechaasignacion`, `fecharecepcion`) VALUES
	(31, 'Tablet', 'HP', 'Tab S9', '4354677', 'HYYYF5667', '76543677', NULL, NULL, 2, 1, '', '2024-01-02', NULL, NULL, '2024-01-18 20:18:57', NULL, NULL),
	(32, 'Tablet', 'HP', 'Galaxy A34', '737382920', 'HF799335', '72053930', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 3, 'Pérdida de lápiz óptico en labor de campo y pantalla rota por caída en alcantarilla.', '2024-01-02', 'Obed Alberto Castro Orellana', 'Obed Alberto Castro Orellana', '2024-01-15 17:17:40', '2024-01-15 17:16:48', '2024-01-15 17:17:40'),
	(36, 'Telefono', 'Samsung', 'Galaxy A34', '546564Y7', '54654Y6Y6', '5454Y', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 3, 1, '', '2024-01-02', 'Obed Alberto Castro Orellana', 'Diego Dubán Rivera Martinez', '2024-01-15 20:32:27', '2024-01-09 08:29:39', '2024-01-15 08:32:27'),
	(37, 'Laptop', 'Lenovo', '640 G9', '876654T4', '36546758G', '22577777', NULL, NULL, 1, 1, '', '2024-01-02', NULL, NULL, '2024-01-16 16:17:16', NULL, NULL),
	(38, 'Telefono', 'Samsung', 'Galaxy A33', '353535353535353', 'asdas3432dgdg', '50375634634', NULL, NULL, 1, 1, '', NULL, NULL, NULL, '2024-01-17 21:48:56', NULL, NULL),
	(40, 'Telefono', 'Samsung', 'Galaxy A34', '133457585474647', 'SDFW3SSFW35', '50375647364', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, '', NULL, 'Obed Alberto Castro Orellana', 'Diego Dubán Rivera Martinez', '2024-01-15 20:32:16', '2024-01-12 07:55:03', '2024-01-15 08:32:16'),
	(47, 'Telefono', 'Honor', 'Honor X7', '777777777777777', 'ouuuuuuuuuuuuu', '45645634564', NULL, NULL, 5, 1, '', NULL, NULL, NULL, '2024-01-18 19:57:56', NULL, NULL),
	(48, 'Telefono', 'Samsung', 'Galaxy A34', '222222222222222', '222222222222222', '22222222222', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, '', '2024-01-10', 'Obed Alberto Castro Orellana', 'Diego Dubán Rivera Martinez', '2024-01-15 20:31:47', '2024-01-02 08:22:44', '2024-01-15 08:31:47'),
	(50, 'Telefono', 'Honor', 'Honor X7', '09832423', '0949484', '949484', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, '', '2024-01-12', 'Obed Alberto Castro Orellana', 'Diego Dubán Rivera Martinez', '2024-01-15 20:31:26', '2024-01-14 13:53:12', '2024-01-15 08:31:26'),
	(51, 'Telefono', 'Huawei', 'Galaxy A34', '56yertg54', '54634r', '878787878', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, '', '2024-01-12', 'Obed Alberto Castro Orellana', 'Diego Dubán Rivera Martinez', '2024-01-15 20:31:18', '2024-01-09 07:57:06', '2024-01-15 08:31:18'),
	(52, 'Telefono', 'Lenovo', 'Honor X7', '8989898', 'SV8988777888', '77992489', NULL, NULL, 1, 1, '', '2024-01-15', NULL, NULL, '2024-01-16 16:12:50', NULL, NULL),
	(53, 'Telefono', 'Honor', 'Honor X7', '999999933333333', '121212121ASASASAS', '50377777777', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, NULL, '2024-01-16', NULL, NULL, '2024-01-16 21:30:31', NULL, NULL),
	(54, 'Telefono', 'Samsung', 'Galaxy A34', '555555555555555', 'LLLLLLLLL', '13131313131', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, NULL, '2024-01-16', NULL, NULL, '2024-01-16 21:45:52', NULL, NULL),
	(56, 'Laptop', 'Dell', '640 G9', '', '555555yyyyyy', '', NULL, NULL, 1, 3, 'Se recibe con pantalla rota.', '2024-01-16', NULL, NULL, '2024-01-18 20:21:40', NULL, NULL),
	(58, 'Telefono', 'Samsung', 'Galaxy A33', '23462346', '2346364', '342346', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, NULL, '2024-01-16', NULL, NULL, '2024-01-16 22:04:18', NULL, NULL),
	(59, 'Telefono', 'Honor', 'Galaxy A33', '674745745', 'thdhdh', '46456646', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, NULL, '2024-01-16', NULL, NULL, '2024-01-16 22:06:07', NULL, NULL),
	(125, 'Telefono', 'Samsung', 'Galaxy A34', 'No hay', 'esryerye346346', 'Noooo', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, NULL, '2024-01-18', NULL, NULL, '2024-01-18 18:03:20', NULL, NULL),
	(135, 'Telefono', 'Samsung', 'Galaxy A34', '55555555555555', 'sehshsdh6ewt6e', '43634636363', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 2, 1, NULL, '2024-01-18', NULL, NULL, '2024-01-18 19:08:44', NULL, NULL),
	(136, 'Telefono', 'HP', 'Galaxy A33', '22222', '221212', '44244', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 2, 1, NULL, '2024-01-18', NULL, NULL, '2024-01-18 19:09:27', NULL, NULL),
	(138, 'Telefono', 'Samsung', 'Galaxy A33', '3333', 'ca', 'aa', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 1, 1, NULL, '2024-01-18', NULL, NULL, '2024-01-18 19:11:16', NULL, NULL),
	(140, 'Telefono', 'Honor', 'Honor X7', '121212121212121', '13131313131313', '23142135252', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 3, 1, NULL, '2024-01-18', NULL, NULL, '2024-01-18 19:14:04', NULL, NULL),
	(144, 'Telefono', 'Samsung', 'Galaxy A34', '366463768579064', 'dbdbdhew6363e6', '36366436343', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', 18, 4, 2, NULL, '2024-01-18', 'Miguel Angel Portillo Lozano', NULL, '2024-01-19 20:49:19', '2024-01-19 08:49:19', NULL),
	(145, 'Telefono', 'Honor', 'Galaxy A34', '34634636346', 'sdhsh364346', NULL, '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 2, 1, NULL, '2024-01-18', NULL, NULL, '2024-01-18 19:31:06', NULL, NULL),
	(146, 'Telefono', 'Samsung', 'Galaxy A34', '34636363463', 'sdfgsd3t436', NULL, '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 2, 1, NULL, '2024-01-18', NULL, NULL, '2024-01-18 19:31:53', NULL, NULL),
	(148, 'Telefono', 'Honor', 'Galaxy A33', '346363634634634', 'dshsdgh34636346', '43763634634', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 2, 1, NULL, '2024-01-18', NULL, NULL, '2024-01-18 19:33:01', NULL, NULL),
	(150, 'Telefono', 'Honor', 'Galaxy A34', '345634574537474', '4GTRU3456RTY435', '35345345', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, 2, 1, NULL, '2024-01-18', NULL, NULL, '2024-01-18 19:55:23', NULL, NULL);

-- Volcando datos para la tabla prueba.marcadispositivo: ~6 rows (aproximadamente)
INSERT INTO `marcadispositivo` (`idmarca`, `nombremarca`) VALUES
	(1, 'Samsung'),
	(2, 'Honor'),
	(3, 'HP'),
	(4, 'Dell'),
	(5, 'Huawei'),
	(6, 'Lenovo');

-- Volcando datos para la tabla prueba.modelodispositivo: ~6 rows (aproximadamente)
INSERT INTO `modelodispositivo` (`idmodelo`, `nombremodelo`) VALUES
	(1, 'Galaxy A33'),
	(2, 'Galaxy A34'),
	(3, 'Honor X7'),
	(4, 'Tab S8'),
	(5, 'Tab S9'),
	(6, '640 G9');

-- Volcando datos para la tabla prueba.registros: ~23 rows (aproximadamente)
INSERT INTO `registros` (`id`, `fecha_asignacion`, `nombre_asignador`, `usuario_campo_id`, `sede_id`, `dispositivo_id`, `tipo_dispositivo`, `accesorios_entregados`, `accesorios_recuperados`, `fecha_recepcion`, `nombre_receptor`, `comentario`, `fecha_modificacion`) VALUES
	(5, '2024-01-09 08:54:33', 'Obed Alberto Castro Orellana', 1, 1, 36, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 16:17:34', 'Obed Alberto Castro Orellana', NULL, '2024-01-15 16:17:34'),
	(6, '2024-01-09 08:54:33', 'Obed Alberto Castro Orellana', 1, 3, 36, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-15 16:17:34', 'Obed Alberto Castro Orellana', NULL, '2024-01-15 16:17:34'),
	(11, '2024-01-11 10:18:46', 'Obed Alberto Castro Orellana', 5, 1, 48, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-11 10:19:24', 'Obed Alberto Castro Orellana', NULL, '2024-01-11 22:19:24'),
	(12, '2024-01-12 08:53:47', 'Diego Dubán Rivera Martinez', 11, 5, 47, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"0","Funda":"0","Lapiz":"1","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-12 08:55:52', 'Diego Dubán Rivera Martinez', NULL, '2024-01-12 20:55:52'),
	(13, '2024-01-12 08:57:44', 'Diego Dubán Rivera Martinez', 2, 1, 32, 'Tablet', '{"Cubo":"1","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-12 08:59:11', 'Diego Dubán Rivera Martinez', NULL, '2024-01-12 20:59:11'),
	(14, '2024-01-12 09:04:34', 'Diego Dubán Rivera Martinez', 10, 1, 51, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"0","Funda":"1","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-12 09:05:06', 'Diego Dubán Rivera Martinez', NULL, '2024-01-12 21:05:06'),
	(15, '2024-01-12 09:06:24', 'Diego Dubán Rivera Martinez', 10, 1, 32, 'Tablet', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"1","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-13 09:11:39', 'Diego Dubán Rivera Martinez', NULL, '2024-01-12 21:12:58'),
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
	(65, '2024-01-17 09:43:19', 'Diego Dubán Rivera Martinez', 10, 1, 56, 'Laptop', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"1","Mousepad":"1"}', '{"Cubo":"0","Cable":"0","Funda":"0","Lapiz":"0","Powerbank":"0","Maletin":"1","Cargador":"1","Mouse":"0","Mousepad":"0"}', '2024-01-18 15:08:55', 'Obed Alberto Castro Orellana', 'Se recibe con pantalla rota.', '2024-01-18 15:08:55'),
	(70, '2024-01-18 08:18:47', 'Obed Alberto Castro Orellana', 16, 2, 31, 'Tablet', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', '2024-01-18 08:18:57', 'Obed Alberto Castro Orellana', '', '2024-01-18 20:18:57'),
	(71, '2024-01-19 08:49:19', 'Miguel Angel Portillo Lozano', 18, 4, 144, 'Telefono', '{"Cubo":"1","Cable":"1","Funda":"1","Lapiz":"1","Powerbank":"0","Maletin":"0","Cargador":"0","Mouse":"0","Mousepad":"0"}', NULL, NULL, NULL, NULL, '2024-01-19 20:49:19');

-- Volcando datos para la tabla prueba.sedes: ~4 rows (aproximadamente)
INSERT INTO `sedes` (`idsede`, `nombresede`, `departamentosede`) VALUES
	(1, 'ExBandesal', 'San Miguel'),
	(2, 'ITCA MEGATEC', 'La Unión'),
	(3, 'INJUVE', 'Morazan'),
	(4, 'INJUVE', 'Usulutan'),
	(5, 'INJUVE', 'San Miguel');

-- Volcando datos para la tabla prueba.tipodispositivo: ~2 rows (aproximadamente)
INSERT INTO `tipodispositivo` (`idtipo`, `nombretipo`) VALUES
	(1, 'Laptop'),
	(2, 'Telefono'),
	(3, 'Tablet');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
