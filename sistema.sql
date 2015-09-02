-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.5.44-0ubuntu0.14.04.1 - (Ubuntu)
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla sistema.alumnos
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id_alumno` int(18) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `carnet` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `grado_instruccion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_hab` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_hab` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_cel` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_cohorte` int(18) NOT NULL,
  `id_carrera` int(18) NOT NULL,
  `trayecto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `trimestre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `lugar_nac` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  UNIQUE KEY `id_alumno` (`id_alumno`),
  KEY `id_cohorte` (`id_cohorte`),
  KEY `id_carrera` (`id_carrera`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.alumnos: ~47 rows (aproximadamente)
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` (`id_alumno`, `fecha`, `nombre`, `apellido`, `nacionalidad`, `cedula`, `carnet`, `grado_instruccion`, `correo`, `direccion_hab`, `telefono_hab`, `telefono_cel`, `id_cohorte`, `id_carrera`, `trayecto`, `trimestre`, `fecha_nac`, `lugar_nac`) VALUES
	(1, '2015-09-01 20:05:43', 'Erwin Alberto', 'Lobo Rodriguez ', 'V', 14106119, '010301290', 'TSU', 'gokulobo@gmail.com', 'Av Bolivar ', '', '04126500763', 1, 1, 'I', 'III', '1978-09-27', 'caracas'),
	(2, '2015-09-01 20:05:43', 'eliana del mar ', 'lobo roriguez', 'V', 16445921, '010301292', 'TSU', 'lobo13256@gmail.com', 'Av bolívar ejido ', '', '0412-7899672', 1, 1, 'I', 'III', '1984-09-13', 'Mérida'),
	(3, '2015-08-29 14:03:29', 'Jose ', 'Humberto Quintero', 'V', 5654253, '010301289', 'TSU', 'jhumberto@gmail.com', 'la mesa de lo indios ejido ', '0274-2211818', '0416-1234567', 2, 1, 'IV', 'I', '2015-08-11', 'Mérida'),
	(4, '2015-08-31 19:41:33', 'Norka ', 'Viloriaa', 'V', 6875456, '010301285', 'Universitario(a)', 'norkanilo15@hotmail.com', 'los curos via panamericana ', '0274-2664596', '0414-8796542', 2, 1, 'IV', 'I', '2015-10-19', 'Mérida'),
	(5, '2015-08-29 14:03:29', 'juan carlos ', 'pachco', 'V', 3256789, '010301280', 'TSU', 'jcpbarinas@gmail.com', 'los molino ejido ', '', '0424-9874563', 2, 1, 'IV', 'I', '2015-01-14', 'Barinas'),
	(6, '2015-08-29 15:52:30', 'Dulce Maria ', 'silva Perez ', 'V', 16654017, '010301295', 'TSU', 'dulcemar521@hotmail.com', 'la don luis de ejido casa 18', '0274-2213535', '0414-0363217', 3, 1, 'III', 'III', '1983-05-25', 'Mérida'),
	(7, '2015-08-29 15:52:30', 'yuraima ', 'rodriguez de albonoz ', 'V', 14106458, '010301273', 'TSU', 'yuricayuri@hotmail.com', 'calle el cristo casa 10', '0274-2215353', '0416-2587456', 3, 1, 'III', 'III', '1979-01-20', 'Mérida'),
	(8, '2015-08-29 15:52:30', 'Maura ', 'Rodriguez de lobo', 'V', 5950871, '010301275', 'Universitario(a)', 'lobom@hotmail.com', 'Av Bolivar ejido ', '0274-2219173', '0416-6881193', 3, 1, 'III', 'III', '1975-12-12', 'Mérida'),
	(9, '2015-08-29 15:52:30', 'erika ', 'lobo', 'V', 16444777, '0103012', 'TSU', 'lavikyeri@hotmail.com', 'el cristo ejido ', '0274-2215353', '0416-2134562', 3, 1, 'III', 'III', '1984-12-13', 'mérida '),
	(10, '2015-08-29 15:52:30', 'isabel', 'rodriguez de albornoz ', 'V', 7895412, '010301300', 'TSU', 'isabelita2@hotmail.com', 'el cristo 10', '02742219173', '04123452145', 3, 1, 'III', 'III', '1970-08-02', 'mérida'),
	(11, '2015-08-28 10:02:03', 'magali ', 'paredes ranguel ', 'V', 16785412, '010301301', 'TSU', 'mmag@gmail.com', 'la vega de las gonzales ', '0274-2219173', '04245213214', 3, 1, 'III', 'III', '1970-08-31', 'mérida '),
	(12, '2015-08-28 10:05:15', 'maria lion', 'leon leon ', 'V', 10541235, '010301302', 'Universitario(a)', 'lionlion@gmail.com', 'los guaimaros ', '0274-2219173', '0412-7899452', 3, 1, 'III', 'III', '1970-11-16', 'mérida'),
	(13, '2015-08-28 10:07:47', 'betty G', 'Garrido oballos ', 'V', 10458751, '010301', 'TSU', 'bettygggg@gmail.com', 'las marias centro ', '0274-2624578', '0414-5412345', 3, 1, 'III', 'III', '1979-03-13', 'Merida'),
	(14, '2015-08-29 15:52:30', 'maria maria', 'petro petro', 'V', 24354123, '041287459', 'TSU', 'marimaripetro@hotmail.com', 'calle el moral  ', '02742215353', '04128745872', 3, 1, 'III', 'III', '2015-08-15', 'el vigia '),
	(15, '2015-08-28 16:02:20', 'kari', 'colmenares ', 'V', 16445920, '00005485652', 'TSU', 'karikaricol@hotmail.com', 'pozo hondo', '02742219173', '04268794512', 3, 11, 'II', 'I', '1985-01-30', 'Barquisimeto'),
	(16, '2015-08-29 15:52:30', 'javier', 'rivas', 'V', 11111111, '00098745', 'TSU', 'jari@hotmail.com', 'la mesa ', '02742218549', '04167895412', 3, 1, 'III', 'III', '2015-12-30', 'mérida'),
	(17, '2015-08-29 15:52:30', 'trino', 'perez', 'V', 10245871, '0321456789', 'TSU', 'salidas@hotmail.com', 'jaji ', '02742214561', '04167895642', 3, 1, 'III', 'III', '1966-12-12', 'mérida'),
	(18, '2015-08-29 15:52:30', 'dario', 'vivas', 'V', 32145621, '012345678', 'TSU', 'vivasda@gmail.com', 'la portuguesa ejido ', '02742215421', '04127899541', 3, 1, 'III', 'III', '1966-12-21', 'mérida'),
	(19, '2015-08-29 15:52:30', 'david', 'rodriguez', 'V', 22222222, '32012301221', 'TSU', 'davidrodrig@hotmail.com', 'san juan ', '02742215353', '04124569874', 3, 1, 'III', 'III', '2015-08-17', 'merida'),
	(20, '2015-08-29 15:52:30', 'chata', 'roj', 'V', 12345613, '21456124', 'TSU', 'lchtines@gmail.com', 'el palmo ', '02742215487', '01424587921', 3, 1, 'III', 'III', '0000-00-00', 'Mérida'),
	(21, '2015-08-29 15:52:30', 'magi', 'walter', 'V', 32156123, '123456213', 'TSU', 'santamagi@hotmail.com', 'santa barbara del zulia ', '02742345631', '014257896312', 3, 1, 'III', 'III', '2015-01-06', 'zulia'),
	(22, '2015-08-29 15:52:30', 'lili', 'lander', 'V', 321456321, '012456214', 'TSU', 'colili@gmail.com', 'calle el cobre ', '02742219173', '04125478965', 3, 1, 'III', 'III', '2015-08-03', 'colombia'),
	(23, '2015-08-29 15:52:30', 'deyci', 'perezca ', 'V', 210312456, '124563214521', 'TSU', 'perezcadey@gmail.com', 'jaji', '0274212191', '041245785214', 3, 1, 'III', 'III', '2015-08-04', 'colombia'),
	(24, '2015-08-29 15:52:30', 'ma', 'rincon', 'V', 12345678, '012155455121', 'Universitario(a)', 'rincomas@gmail.com', 'manzano', '027489745633', '31427854124', 3, 1, 'III', 'III', '1975-08-04', 'merida'),
	(25, '2015-09-01 20:05:43', 'jose de sesus ', 'barinas ', 'V', 3214563, '021456321121', 'TSU', 'barijosej@hotmail.com', 'el molino ejido ', '04127896541', '04142145783', 1, 1, 'I', 'III', '2015-08-09', 'barinas '),
	(26, '2015-09-01 20:05:43', 'marisol', 'albornoz ', 'V', 3245621, '021462135544', 'TSU', 'mari2958@gmail.com', 'los rosales ', '02478451214', '021487541235', 1, 1, 'I', 'III', '1975-02-07', 'merida'),
	(27, '2015-08-30 15:25:08', 'Alondra', 'Quintero', 'V', 20556899, '010500987', 'Bachiller', 'Alonder@gmail.com', 'San Juan', '0245-12336548', '0426-1264587', 6, 1, 'I', 'I', '1985-02-12', 'Mérida'),
	(28, '2015-08-30 15:28:45', 'Shakira', 'Pacheco', 'V', 25461987, '010254887', 'Universitario(a)', 'shakira@gmail.com', 'shakira@gmail.com', '0272-4458755', '0424-2145669', 6, 1, 'I', 'I', '1980-06-23', 'Mérida'),
	(29, '2015-08-30 15:32:41', 'Claudia ', 'Rondón ', 'V', 20754125, '010235547', 'TSU', 'claudia@gmail.com', 'San   José ', '', '0241-10514654', 6, 1, 'I', 'I', '1984-09-23', 'Mérida'),
	(30, '2015-09-01 20:05:43', 'daniel', 'mendez', 'V', 16445930, '02174589', 'Bachiller', '19650804dani@hotmail.com', 'la mesa de los indios ', '04127854785', '04145785412', 1, 1, 'I', 'III', '1965-08-04', 'merida'),
	(31, '2015-09-01 20:05:43', 'ivon', 'ramirez', 'V', 16445931, '214521422122', 'TSU', 'ivonemanuel@yahoo.com', 'jaji el pueblo ', '07422185412', '04167895412', 1, 1, 'I', 'III', '1965-08-17', 'merida'),
	(32, '2015-09-01 20:05:43', 'manuel', 'silva ', 'V', 16445932, '1222543512', 'Universitario(a)', 'mmmanuel@yahoo.com', 'la don luis via la picadora ', '04147896541', '04147896541', 1, 1, 'I', 'III', '1982-08-13', 'merida'),
	(33, '2015-08-30 15:40:21', 'alver', 'rodriguez ', 'V', 16445933, '213646466', 'TSU', 'alvet21@hotmail.com', 'el cristo ', '02742215353', '04167896541', 3, 1, 'I', 'II', '1984-08-21', 'merida'),
	(34, '2015-09-01 20:05:43', 'mariana', 'altuve ', 'V', 16445934, '213156564', 'TSU', 'almatu@gmail.com', 'el chama ', '02742214512', '04167845211', 1, 1, 'I', 'III', '1983-08-10', 'merida'),
	(35, '2015-08-30 15:43:42', 'Ronaldo', 'Guillen ', 'V', 14106112, '0110564781', 'Bachiller', 'ronaldo@hotmail.com', 'campo claro', '042411452368', '0284-2154789', 2, 1, 'II', 'II', '1988-11-15', 'Mérida'),
	(36, '2015-08-30 15:46:04', 'Juan', 'Camacho', 'V', 14106116, '01065478912', 'Bachiller', 'juan@gmail.com', 'Fernadez Peña', '21564684864', '15445156465', 2, 1, 'II', 'II', '1987-11-25', 'Mérida'),
	(37, '2015-08-30 15:48:28', 'vicky', 'vicky', 'V', 16445935, '16464351354646', 'TSU', 'vickyvicky@gmail.com', 'csasaa', '027485412145', '04167896541', 1, 10, 'I', 'I', '1985-01-23', 'merida'),
	(38, '2015-08-30 15:54:17', 'mari', 'mari', 'V', 16445936, '2215464646', 'TSU', 'lmarimari@gmail.com', 'los curos ', '123456644', '04145789654', 1, 10, 'I', 'I', '2005-02-02', 'mérida'),
	(39, '2015-08-30 16:26:23', 'rene', 'renesss', 'V', 16445937, '3234646464', 'TSU', 'rememesmix@gmail.com', 'la paz ', '0214578145121', '041678936655', 1, 10, 'I', 'I', '2015-08-17', 'merida '),
	(40, '2015-08-30 16:27:41', 'luz ', 'luz', 'V', 16445938, '21354354|', 'TSU', 'luz@hotmai.com', 'loma de los ángeles ', '02749874563', '04789654232', 1, 10, 'I', 'I', '1996-09-12', 'merida'),
	(41, '2015-08-30 16:29:04', 'angeles ', 'angeles ', 'V', 16445939, '123546464', 'TSU', 'angeleless@gmail.com', 'el rinco merida ', '02742478954', '04147896541', 1, 10, 'I', 'I', '1993-09-16', 'mérida '),
	(42, '2015-08-30 17:53:50', 'javi', 'javi', 'V', 16445940, '13544464646', 'TSU', 'fasfas@yahoo.es', 'via jaji ', '02742216541', '04167896541', 1, 13, 'II', 'II', '1995-04-13', 'mérida'),
	(43, '2015-08-30 17:53:50', 'richar', 'richar', 'V', 16445941, '51353535', 'TSU', 'richar@hotmail.com', 'manzano alto ', '02742215353', '04127899672', 1, 13, 'II', 'II', '1976-03-10', 'merida'),
	(44, '2015-08-30 17:53:50', 'manuela', 'manuela', 'V', 19445942, '21344646', 'TSU', 'lmanuela@gmail.com', 'la rancheria ', '02742215353', '01427899672', 1, 13, 'II', 'II', '1983-03-09', 'merida'),
	(45, '2015-08-31 11:05:09', 'alejandra ', 'toros', 'V', 16445950, '0124533245', 'TSU', 'tourosale@gmail.com', 'las americas ', '02742216264', '04162135897', 1, 7, 'III', 'I', '1986-03-11', 'mérida'),
	(46, '2015-08-31 11:18:59', 'la coco nasa ', 'la coco nasa ', 'V', 16445951, '1234562114', 'TSU', 'lacoconasa24@gmail.com', 'la virtud', '02742214562', '04167854132', 1, 7, 'III', 'I', '1986-12-24', 'barquisimeto '),
	(47, '2015-09-01 20:05:43', 'go', 'ri', 'V', 111, '123', 'TSU', 'lob@gmail.com', 'av bolivar', '', '04127899672', 1, 1, 'I', 'III', '2008-02-05', 'merida');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.articulo
CREATE TABLE IF NOT EXISTS `articulo` (
  `id_articulo` int(18) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `volumen` char(3) COLLATE utf8_spanish_ci NOT NULL,
  `numeracion` int(30) NOT NULL,
  `issn` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pagina_colacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `id_docente` int(18) NOT NULL,
  PRIMARY KEY (`id_articulo`),
  KEY `id_docente` (`id_docente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.articulo: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `articulo` DISABLE KEYS */;
INSERT INTO `articulo` (`id_articulo`, `titulo`, `fecha_publicacion`, `volumen`, `numeracion`, `issn`, `pagina_colacion`, `observaciones`, `id_docente`) VALUES
	(1, 'Problema de los Adolecentes en', '2015-06-24', '51', 255, '51468498', '23', 'Buena critica', 34),
	(2, 'El embarazo en las mujeres que estudian en la universidad', '2006-03-22', '12', 50, '151465', '2', 'Es verdad', 34),
	(3, 'La corrupción en el IUTE', '1995-03-08', '5', 7000, '254', '20', 'Ven lo que pasa hay', 34),
	(4, 'SJLLKJL', '2008-03-03', 'VV', 22, 'FLKÑL-233', '11', 'VVFF', 2);
/*!40000 ALTER TABLE `articulo` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.asignacion_guia
CREATE TABLE IF NOT EXISTS `asignacion_guia` (
  `id_docente` int(18) NOT NULL,
  `id_cohorte` int(18) NOT NULL,
  `trayecto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `trimestre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `activo` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Si',
  KEY `id_docente` (`id_docente`),
  KEY `id_cohorte` (`id_cohorte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.asignacion_guia: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `asignacion_guia` DISABLE KEYS */;
INSERT INTO `asignacion_guia` (`id_docente`, `id_cohorte`, `trayecto`, `trimestre`, `activo`) VALUES
	(29, 1, 'III', 'III', ''),
	(2, 6, 'II', 'III', ''),
	(31, 3, 'I', 'I', ''),
	(31, 3, 'II', 'III', ''),
	(31, 2, 'III', 'II', ''),
	(2, 3, 'IV', 'I', ''),
	(2, 3, 'III', 'III', ''),
	(34, 2, 'IV', 'I', ''),
	(34, 3, 'I', 'I', '');
/*!40000 ALTER TABLE `asignacion_guia` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.bibliometria
CREATE TABLE IF NOT EXISTS `bibliometria` (
  `ncapms` int(11) NOT NULL,
  `ncapmt` int(11) NOT NULL,
  `nom_tsecc` int(11) NOT NULL,
  `npt` int(11) NOT NULL,
  `npts` int(11) NOT NULL,
  `nut_secc` int(11) NOT NULL,
  `nu_personas_grupo` int(11) NOT NULL,
  `pcapmt` int(11) NOT NULL,
  `pnps` int(11) NOT NULL,
  `pnpt` int(11) NOT NULL,
  `pprt` int(11) NOT NULL,
  `pprts` int(11) NOT NULL,
  `prt` int(11) NOT NULL,
  `ptppms` int(11) NOT NULL,
  `ptppmt` int(11) NOT NULL,
  `tppms` int(11) NOT NULL,
  `tppmt` int(11) NOT NULL,
  `cantidad_grupo_seccion` int(11) NOT NULL,
  `id_bibliometrica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.bibliometria: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `bibliometria` DISABLE KEYS */;
/*!40000 ALTER TABLE `bibliometria` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.carrera
CREATE TABLE IF NOT EXISTS `carrera` (
  `id_carrera` int(18) NOT NULL AUTO_INCREMENT,
  `numero_carrera` int(10) NOT NULL,
  `id_sede` int(18) NOT NULL,
  `nombre_carrera` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_carrera`),
  KEY `id_sede` (`id_sede`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.carrera: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` (`id_carrera`, `numero_carrera`, `id_sede`, `nombre_carrera`) VALUES
	(0, 1, 1, 'Psicologia Social'),
	(1, 14601, 1, 'Informatica'),
	(7, 14595, 1, 'Radiologia e Imagenologia'),
	(8, 14596, 1, 'Agroalimentacion'),
	(9, 14598, 1, 'Turismo'),
	(10, 14599, 1, 'Contaduria Publica'),
	(11, 14600, 1, 'Administracion'),
	(13, 14602, 1, 'Construccion Civil'),
	(14, 14604, 1, 'Geociencias'),
	(15, 14605, 1, 'Manejo de Emergencia y Accion Contra Desastre'),
	(16, 14728, 1, 'Historia');
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.cohorte
CREATE TABLE IF NOT EXISTS `cohorte` (
  `id_cohorte` int(18) NOT NULL AUTO_INCREMENT,
  `numero_cohorte` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_cohorte` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `seccion` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_cohorte`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.cohorte: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `cohorte` DISABLE KEYS */;
INSERT INTO `cohorte` (`id_cohorte`, `numero_cohorte`, `tipo_cohorte`, `seccion`, `estado`) VALUES
	(1, '2015', 'A', 'A', 1),
	(2, '2015', 'B', 'B', 1),
	(3, '2015', 'A', 'B', 1),
	(4, '2015', 'A', 'C', 1),
	(5, '2015', 'A', 'D', 1),
	(6, '2015', 'B', 'A', 1),
	(7, '2015', 'B', 'C', 1),
	(8, '2015', 'B', 'D', 1),
	(9, '2014', 'A', 'C', 1),
	(10, '2014', 'B', 'C', 1),
	(11, '2014', 'A', 'C', 1),
	(12, '2014', 'A', 'A', 1),
	(13, '2014', 'A', 'B', 1),
	(14, '2015', 'B', 'A', 1);
/*!40000 ALTER TABLE `cohorte` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.comunidad
CREATE TABLE IF NOT EXISTS `comunidad` (
  `id_comunidad` int(18) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre_comunidad` text COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `convenio` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_convenio` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_hab` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_cel` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `parroquia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_comunidad`),
  UNIQUE KEY `rif` (`rif`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.comunidad: ~20 rows (aproximadamente)
/*!40000 ALTER TABLE `comunidad` DISABLE KEYS */;
INSERT INTO `comunidad` (`id_comunidad`, `fecha`, `nombre_comunidad`, `rif`, `correo`, `direccion`, `convenio`, `tipo_convenio`, `telefono_hab`, `telefono_cel`, `observaciones`, `estado`, `municipio`, `parroquia`) VALUES
	(1, '2015-08-27 23:29:56', 'UPTM Kleber Ramirez ', ' G-20010201-2 ', 'uptm@hotmail.com', 'Av Monseñor Duque, Ejido 5111', 'no', '', ' 0274-2210746', '', '', '14', '6', '21'),
	(2, '2015-08-28 13:48:27', 'ula ', 'J-31677631-0', 'ulamerida@hotmail.com', 'ula.ve@hotmail.com', 'no', 'no', '0274-2402665', '04145789654', '', '14', '12', '54'),
	(4, '2015-08-30 12:13:19', 'consejo comunal cristo jaji ', ' J-29978452-4', '', ' Parroquia JAJI, municipio Campo Elías, del Estado Mérida  Norte: SILENCIO ALTO. Sur: JAGUANI. Este:', 'no', '', '', '', '', '14', '6', '25'),
	(5, '2015-08-30 12:16:45', 'Comunal Consejo El Chamizal', ' J-29941781-5', '', ' Parroquia JAJI, municipio Campo Elías, del Estado Mérida Norte: LA PLAYA. Sur: LOMA DEL CARMEN. Est', 'no', '', '', '', '', '14', '6', '25'),
	(6, '2015-08-30 12:32:40', 'Consejo Comunal El Chicorial', 'J-29938107-1', '', 'Parroquia JAJI, municipio Campo Elías, del Estado Mérida Norte: LA CARBONERA. Sur: CONSEJO COMUNAL E', 'no', '', '', '', '', '14', '6', '25'),
	(7, '2015-08-30 13:06:23', 'consejo comunal el cobre ', 'J-299772151', '', 'calle el cobre ', 'no', '', '', '', '', '14', '6', '22'),
	(8, '2015-08-30 13:19:48', 'CONSEJO COMUNAL 24 DE JUNIO SAN JUAN', 'J-30587942-7', '', 'CALLE CAMEJO, CASA N° 1-6 ', 'no', '', '', '', '', '14', '20', '79'),
	(9, '2015-08-30 14:55:58', 'junta comunal el salidito ', 'J-00124134-5', '', 'el vigia avenida 15', 'no', '', '', '0472578941', '', '14', '1', '5'),
	(10, '2015-08-30 14:59:01', 'cardenal quintero ', ' J-40521093-1', '', 'el vigia la cadernal  ', 'no', '', '', '04127895412', '', '14', '1', '6'),
	(11, '2015-08-30 15:00:13', 'san feliz ', 'J-400609682', '', 'la azulita via principal ', 'no', '', '', '', '', '14', '2', '8'),
	(12, '2015-08-30 15:02:31', 'comunidad del caracciolo parra perez', 'j 16445921-3', '', 'cardenal quintero ', 'no', '', '02742666874', '04141785214', '', '14', '12', '44'),
	(13, '2015-08-30 15:04:11', 'Consejos Comunales pertenecientes a la Gran Misión Vivienda Venezuela. ... Cumarebo Planta de Cemento Cumarebo ', 'G-20011588-2 ..', '', 'el arenal parte baja ', 'no', '', '02712245617', '04167896412', '', 'seleccione estado', '14', '63'),
	(14, '2015-08-30 15:06:23', 'mocoties', 'G-20011588-2', '', 'mucuruba', '', '', '027422189745', '04127895641', '', '14', '17', '69'),
	(15, '2015-08-30 15:08:34', 'pueblo nuevo ', 'J- 29963981-8', '', 'pueblo llanos ', 'no', '', '0278965412', '0412879641321', '', '14', '16', '65'),
	(16, '2015-08-30 15:10:46', 'los cuji', 'J-31258678-8', '', 'mucumpis ', 'no', '', '', '', '', '14', '20', '78'),
	(17, '2015-08-30 15:12:44', 'comunidad la palmas ', 'G-20005393-3', '', 'mesa las palmas ', 'no', '', '02752219173', '04157894563', '', '14', '3', '11'),
	(18, '2015-08-30 15:17:18', 'Fernandez  Peña ', 'R-999333555-h', 'Fernandesz@hotmail.com', 'Av. Fernandesz Peña', 'no', 'ninguno', '0274-0547896', '041226-1234567', 'ninguna', '14', '6', '22'),
	(19, '2015-08-30 15:20:49', 'Padre Duque', 'P-3698741-H', 'padreduque@gmail.com', 'Vía el Manzano', 'no', 'ninguno', '0274-25814752', '0412-2611546', 'ninguno', '14', '6', '27'),
	(20, '2015-08-30 15:40:34', 'Empres Biosoft', '12125448', 'biosoft@gmail.com', 'Av. 4 con calle 45 ', 'no', 'ningumno', '0274-2356874', '0424-1322567', 'la realidad ', '14', '12', '46'),
	(21, '2015-09-01 17:19:19', 'gggg', 'h', '', 'dssdsc', 'si', 'cccc', '', '', '', 'seleccione estado', 'seleccione municipio', 'seleccione parroquie');
/*!40000 ALTER TABLE `comunidad` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.docente
CREATE TABLE IF NOT EXISTS `docente` (
  `id_docente` int(18) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `fecha_nac` date NOT NULL,
  `lugar_nac` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `profesion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `clave_usuario` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_hab` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_cel` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_hab` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `modalidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `dedicacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ascenso` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `investigacion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `guia` int(1) NOT NULL DEFAULT '0',
  `coordinador` int(1) NOT NULL DEFAULT '0',
  `id_carrera` int(1) NOT NULL DEFAULT '0',
  `admin` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_docente`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.docente: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `docente` DISABLE KEYS */;
INSERT INTO `docente` (`id_docente`, `nombre`, `apellido`, `nacionalidad`, `cedula`, `fecha_nac`, `lugar_nac`, `profesion`, `cargo`, `correo`, `clave_usuario`, `telefono_hab`, `telefono_cel`, `direccion_hab`, `categoria`, `modalidad`, `dedicacion`, `ascenso`, `fecha_ingreso`, `investigacion`, `observaciones`, `guia`, `coordinador`, `id_carrera`, `admin`) VALUES
	(1, 'Erwin', 'Lobo', 'V', 14106119, '1978-09-27', 'Mérida', 'Tecnico', 'Reparación', 'white.1.wolf@hotmail.com', '202cb962ac59075b964b07152d234b70', '0274-2219173', '04126500763', 'Ejido', 'Titular', 'Semi-presencial', 'Exclusivo(a)', '2015', '2015-09-27', 'tecnologia', 'por Dios', 1, 1, 0, 0),
	(2, 'Solange Aniré', 'Leal Leal', 'V', 12722185, '2015-08-12', 'Mérida', 'Ingeniero en Sistema', 'Coordinadora ', 'solangeleal29@gmail.com', '202cb962ac59075b964b07152d234b70', '0274-2623282', '0416-1796501', 'Av. Las Americas, Res. Independecia, Torre Mata Siete, piso 3, Apto 3-1', 'Asistente(a)', 'Presencial', 'Tiempo Completo', '2012', '2008-04-15', 'Redes y telecomunicaciones', 'Gracias por ser nuestra tutora ', 1, 1, 1, 0),
	(29, 'Diony Ginette', 'Alviárez Paredes', 'V', 8047120, '2015-08-12', 'Mérida', 'Ingeniero en Sistema', 'Coordinadora de Proyecto', 'gdiony@gmail.com', '1735297e39c74352e58ac9abd7a7746d', '0274-2623524', '0426-9770025', 'Avenida las Américas Conjunto Residencial Santa Barbara Torre 4 piso 4 Apto 4-c', 'Asociado(a)', 'Semi-presencial', 'Exclusivo(a)', '2011', '2000-10-17', 'Virtualización, Gestión de aulas virtual', '', 1, 1, 1, 0),
	(30, 'Nelma', 'Uzcategui Pineda ', 'V', 13014569, '2015-08-18', 'Mérida', 'Especialista en Telecomunicaci', 'Docente ', 'Redes.asesoria@gmail.com', '5f5c7efb3f15ea81d0dd7b5e67250fcf', '0274-2211241', '0414-7416984', 'Conjunto res. Parque el Salado Torre F Apto 1-4 Planta Baja', 'Asistente(a)', 'Presencial', 'Tiempo Completo', '2013', '2014-04-15', 'Redes y Telecomunicaciones', '', 0, 0, 1, 0),
	(31, 'Blanca Elena ', 'Alviarez de Maldonado', 'V', 5655983, '1975-08-19', 'Mérida ', 'Ingeniera en Sistema ', 'Docente ', 'blancalvi@gmail.com', '463930417ebcaa6c0b983feaa99e55f3', '0274-2713583', '04167771000', 'Urbanización Campo Claro Casa 95 Merida', 'Asociado(a)', 'Semi-presencial', 'Exclusivo(a)', '2011', '2000-10-17', 'Gestion de Proyecto para fortalecer el e', '', 0, 0, 1, 0),
	(32, 'Ana C', 'Muñoz G', 'V', 4491973, '1970-04-01', 'Mérida', 'Ingeniera en Sistema ', 'docente ', 'anamunoz@gmail.com', 'b0298f8ed048311053f60cbf3e42b313', '0274-2637323', '0414-7447472', 'Av. Las Americas Villa el Rodeo #36', 'Asociado(a)', 'Presencial', 'Exclusivo(a)', '2006', '1996-04-01', 'Gestión e Ingeniería del Conocimiento, o', '', 0, 0, 1, 0),
	(33, 'Nelson', 'Corredor Trejo', 'V', 4484976, '1977-10-18', 'Mérida', 'Lic. Comunicación social menci', 'Docente', 'ncorredorve@yahoo.com', 'ba35008385c2ce7c63525c8c517c102c', '0274-2442582', '0424-7272549', 'Conjunto residencial cardenal quintero segunda etapa, edif. 9 piso 5 apto 5-1', 'Asistente(a)', 'Presencial', 'Tiempo Completo', '2013', '0000-00-00', 'Tecnología de Investigación e Informació', '', 0, 0, 1, 0),
	(34, 'Eliana', 'Lobo', 'V', 16445921, '1985-09-13', 'Mérida', 'Educación', 'Maestra', 'admin', '202cb962ac59075b964b07152d234b70', '0412-7899672', '0274-2219173', 'Av. Bolivar casa N° 1 Ejido Estado Mérida, Municipio Campo Elías', 'Titular', 'Semi-presencial', 'Exclusivo(a)', '2015', '2015-06-15', 'Educación', 'Buena Profesora', 0, 0, 1, 1),
	(35, 'María Magaly', 'Paredes Rangel', 'V', 20848273, '1991-08-31', 'Mérida Municumpis Municipio Campo Elías', 'Administración', 'Profesora', 'maria_paredes@gmail.com', '32c9104d98083425c4e50b217d630196', '0424-7496237', '0274-2219173', 'Aldea Mucunpis de Azequia, Ejido Estado Mérida  Municipio Campo Elías', 'Asistente(a)', 'Presencial', 'Tiempo Completo', '2015', '2015-02-11', 'Empresa', 'ninguna', 0, 0, 11, 0),
	(37, 'Judelvis', 'Rivas', 'V', 17456121, '1985-12-23', 'MErida', 'programador', 'programador', 'Judprog@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '02742215686', '04262742990', 'Rosales', 'Agregado(a)', 'Presencial', 'Exclusivo(a)', '2013', '2008-08-04', 'robotica', 'algo', 0, 1, 1, 0),
	(38, 'mari', 'lobo', 'V', 5974271, '1985-08-06', 'merida', 'contadora publica  ', 'docente ', 'mairlobo06@hotmail.com', '202cb962ac59075b964b07152d234b70', '02742215353', '04127899672', 'villa manzano ', 'Asociado(a)', 'Presencial', 'Tiempo Completo', '2013', '2009-08-18', 'contadoria ', '', 1, 0, 10, 0),
	(39, 'sobeida', 'solera', 'V', 16445946, '2015-08-04', 'merida', 'Ingeniero civil', 'docente ', 'sobesolera@hotmail.com', '202cb962ac59075b964b07152d234b70', '02742219173', '04167896541', 'el piñal ', 'Asociado(a)', 'Presencial', 'Tiempo Completo', '2014', '2000-08-08', 'pavimentación ', '', 1, 1, 13, 0),
	(40, 'lilian', 'lilian', 'E', 2147483647, '2015-08-04', 'Bogota Colombia ', 'ingeniero civil', 'docente ', 'bclilian@gmail.com', '202cb962ac59075b964b07152d234b70', '02742219178', '04147896541', 'el palmo ', 'Asociado(a)', 'Semi-presencial', 'Tiempo Convencional', '2013', '2011-08-04', 'nos ', '', 0, 0, 7, 0),
	(41, 'mari', 'ra', 'V', 16654000, '2015-09-15', 'merida', 'informatizxa', 'docente', 'ma@gmail.com', '202cb962ac59075b964b07152d234b70', '01427859672', '01427859672', 'av bolivar', 'Agregado(a)', 'Presencial', 'Tiempo Completo', '2015', '2008-09-17', 'tecnologia', '', 1, 0, 1, 0);
/*!40000 ALTER TABLE `docente` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.estados
CREATE TABLE IF NOT EXISTS `estados` (
  `id_estado` int(18) NOT NULL AUTO_INCREMENT,
  `nombre_estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.estados: ~24 rows (aproximadamente)
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` (`id_estado`, `nombre_estado`) VALUES
	(1, 'Amazonas'),
	(2, 'Anzoategui'),
	(3, 'Apure'),
	(4, 'Aragua'),
	(5, 'Barinas'),
	(6, 'Bolívar'),
	(7, 'Carabobo'),
	(8, 'Cojedes'),
	(9, 'Delta Amacuro'),
	(10, 'Distrito Capital'),
	(11, 'Falcón'),
	(12, 'Guárico'),
	(13, 'Lara'),
	(14, 'Mérida'),
	(15, 'Miranda'),
	(16, 'Monagas'),
	(17, 'Nueva Esparta'),
	(18, 'Portuguesa'),
	(19, 'Sucre'),
	(20, 'Táchira'),
	(21, 'Trujillo'),
	(22, 'Vargas'),
	(23, 'Yaracuy'),
	(24, 'Zulia');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.estudios
CREATE TABLE IF NOT EXISTS `estudios` (
  `id_estudio` int(18) NOT NULL AUTO_INCREMENT,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `lugar` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `id_docente` int(18) NOT NULL,
  PRIMARY KEY (`id_estudio`),
  KEY `id_docente` (`id_docente`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.estudios: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `estudios` DISABLE KEYS */;
INSERT INTO `estudios` (`id_estudio`, `tipo`, `nombre`, `lugar`, `id_docente`) VALUES
	(7, 'Pregrado', 'Ingeniero de Sistema', 'ULA', 2),
	(8, 'Postgrado', 'Doctorado en Ciencias de la Educación ', 'UFT', 2),
	(9, 'Pregrado', 'Especialista en Telecomunicaciones', 'IUP “Santiago Mariño”', 30),
	(10, 'Postgrado', 'Doctorado de Gestión del Conocimiento', 'UPTM', 30),
	(11, 'Pregrado', 'Ingeniero de Sistema', 'ULA', 29),
	(12, 'Postgrado', 'Doctorado de Gestión del Conocimiento', 'UPTM', 29),
	(13, 'Pregrado', 'Ingeniera en Sistema', 'ULA', 31),
	(14, 'Postgrado', 'Doctorado de Gestión del Conocimiento', 'UPTM', 31),
	(15, 'Pregrado', 'Ingeniera en sistema', 'ULA', 32),
	(16, 'Pregrado', 'Lic. Comunicación social mención desarrollo social', 'UNICA', 33),
	(17, 'Postgrado', 'Gestion de Conocimientos', 'UPTM', 33),
	(18, 'Pregrado', 'Técnico en Informática ', 'UPTM', 1),
	(19, 'Postgrado', 'Maestría en Informática ', 'UPTM', 1),
	(20, 'Pregrado', 'Educación', 'UNA', 34),
	(21, 'Pregrado', 'Técnico en Informatica', 'UPTM', 34),
	(22, 'Postgrado', 'Educación', 'UNA', 34),
	(23, 'Postgrado', 'maestría en telemática ', 'URBE', 2),
	(24, 'Pregrado', 'INGENIERO DE SISTEMA ', 'ULA ', 2);
/*!40000 ALTER TABLE `estudios` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.grupo_proyecto
CREATE TABLE IF NOT EXISTS `grupo_proyecto` (
  `id_alumno` int(18) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_proyecto` int(2) NOT NULL,
  KEY `id_alumno` (`id_alumno`),
  KEY `id_proyecto` (`id_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.grupo_proyecto: ~40 rows (aproximadamente)
/*!40000 ALTER TABLE `grupo_proyecto` DISABLE KEYS */;
INSERT INTO `grupo_proyecto` (`id_alumno`, `fecha`, `id_proyecto`) VALUES
	(13, '2015-08-28 17:59:51', 1),
	(12, '2015-08-28 17:59:51', 1),
	(8, '2015-08-28 17:59:52', 1),
	(6, '2015-08-28 17:59:52', 1),
	(16, '2015-08-29 14:38:59', 3),
	(17, '2015-08-29 14:39:54', 3),
	(9, '2015-08-29 14:40:23', 3),
	(14, '2015-08-29 14:40:43', 3),
	(10, '2015-08-29 14:41:01', 3),
	(18, '2015-08-29 14:41:54', 2),
	(7, '2015-08-29 14:42:23', 2),
	(11, '2015-08-29 15:17:43', 14),
	(19, '2015-08-29 15:17:43', 14),
	(20, '2015-08-29 15:17:43', 14),
	(21, '2015-08-29 15:18:31', 15),
	(22, '2015-08-29 15:18:31', 15),
	(23, '2015-08-29 15:18:31', 15),
	(24, '2015-08-29 15:18:31', 15),
	(25, '2015-08-30 15:26:14', 16),
	(26, '2015-08-30 15:26:14', 16),
	(1, '2015-08-30 15:29:10', 17),
	(2, '2015-08-30 15:29:10', 17),
	(3, '2015-08-30 15:31:08', 18),
	(4, '2015-08-30 15:31:08', 18),
	(5, '2015-08-30 15:31:08', 18),
	(27, '2015-08-30 15:34:57', 19),
	(28, '2015-08-30 15:34:57', 19),
	(29, '2015-08-30 15:34:57', 19),
	(35, '2015-08-30 16:29:10', 20),
	(36, '2015-08-30 16:29:10', 20),
	(37, '2015-08-30 16:38:43', 21),
	(38, '2015-08-30 16:38:43', 21),
	(39, '2015-08-30 16:38:43', 21),
	(40, '2015-08-30 16:44:14', 22),
	(41, '2015-08-30 16:44:14', 22),
	(42, '2015-08-30 17:10:56', 23),
	(43, '2015-08-30 17:12:09', 24),
	(44, '2015-08-30 17:12:10', 24),
	(45, '2015-08-31 11:06:29', 25),
	(46, '2015-08-31 11:19:23', 25);
/*!40000 ALTER TABLE `grupo_proyecto` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.investigacion
CREATE TABLE IF NOT EXISTS `investigacion` (
  `id_investigacion` int(18) NOT NULL AUTO_INCREMENT,
  `peii` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `nivel_peii` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ano_aplicacion_peii` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `forma_grupo_investigacion` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_investigacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `area_investigacion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `id_docente` int(18) NOT NULL,
  PRIMARY KEY (`id_investigacion`),
  KEY `id_docente` (`id_docente`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.investigacion: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `investigacion` DISABLE KEYS */;
INSERT INTO `investigacion` (`id_investigacion`, `peii`, `nivel_peii`, `ano_aplicacion_peii`, `forma_grupo_investigacion`, `nombre_investigacion`, `area_investigacion`, `observaciones`, `id_docente`) VALUES
	(1, 'Si', 'no se ', 'enero 2014', 'NO', 'no', 'no', '', 2),
	(2, 'Si', 'no se ', 'enero 2014', 'Si', 'Grupo de Investigación gestion del conocimiento', 'Redes y Telecomunicaciones', '', 30),
	(3, 'Si', 'no se ', 'Enero 2012', 'Si', 'CIME', 'Virtualización, Gestión de aulas virtual', '', 29),
	(4, 'Si', 'no se ', 'Enero 2013', 'Si', 'CIME', 'Gestion de Proyecto para fortalecer el e', '', 31),
	(5, 'Si', 'no se ', '2006', 'Si', 'Gestión e Ingeniería del Conocimiento', 'Gestión e Ingeniería del Conocimiento, o', '', 32),
	(6, 'Si', 'no se ', '2013', 'Si', 'CIME', 'Tecnología de Investigación e Informació', '', 33),
	(7, 'Si', '1', '2015', 'Si', 'Wolves', 'Progamación', 'los diferentes fallas del sistema', 34),
	(8, 'NO', '0', '0', 'Si', 'Los Pipe', 'Tecnología web  ', 'Buen comienzo', 34),
	(9, 'NO', '', '', 'NO', '', '', '', 2);
/*!40000 ALTER TABLE `investigacion` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.municipio
CREATE TABLE IF NOT EXISTS `municipio` (
  `id_municipio` int(18) NOT NULL AUTO_INCREMENT,
  `nombre_municipio` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `id_estado` int(18) NOT NULL,
  PRIMARY KEY (`id_municipio`),
  KEY `id_estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.municipio: ~23 rows (aproximadamente)
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
INSERT INTO `municipio` (`id_municipio`, `nombre_municipio`, `id_estado`) VALUES
	(1, 'Alberto Adriani (El Vigía)', 14),
	(2, 'Andrés Bello (La Azulita)', 14),
	(3, 'Antonio Pinto Salinas', 14),
	(4, 'Aricagua', 14),
	(5, 'Arzobispo Chacón (Canagua)', 14),
	(6, 'Campo Elías (Ejido)', 14),
	(7, 'Caracciolo Parra Olmedo Tucaní', 14),
	(8, 'Cardenal Quintero (Santo Domingo)', 14),
	(9, 'Guaraque', 14),
	(10, 'Julio César Salas (Arapuey)', 14),
	(11, 'Justo Briceño (Torondoy)', 14),
	(12, 'Libertador (Mérida)', 14),
	(13, 'Miranda (Timotes)', 14),
	(14, 'Obispo Ramos de Lora ', 14),
	(15, 'Padre Noguera', 14),
	(16, 'Pueblo Llano', 14),
	(17, 'Rangel (Mucuchíes)', 14),
	(18, 'Rivas Dávila (Bailadores)', 14),
	(19, 'Santos Marquina (Tabay)', 14),
	(20, 'Sucre ', 14),
	(21, 'Tovar', 14),
	(22, 'Tulio Febres Cordero', 14),
	(23, 'Zea', 14);
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.parroquia
CREATE TABLE IF NOT EXISTS `parroquia` (
  `id_parroquia` int(18) NOT NULL AUTO_INCREMENT,
  `nombre_parroquia` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `id_municipio` int(18) NOT NULL,
  `id_estado` int(18) NOT NULL,
  PRIMARY KEY (`id_parroquia`),
  KEY `id_municipio` (`id_municipio`),
  KEY `id_estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.parroquia: ~86 rows (aproximadamente)
/*!40000 ALTER TABLE `parroquia` DISABLE KEYS */;
INSERT INTO `parroquia` (`id_parroquia`, `nombre_parroquia`, `id_municipio`, `id_estado`) VALUES
	(1, 'Gabriel Picón Gonzáles', 1, 14),
	(2, 'Héctor Amable Mora', 1, 14),
	(3, 'José Nucete Sardi', 1, 14),
	(4, 'Presidente Betancourt', 1, 14),
	(5, 'Presidente Páez', 1, 14),
	(6, 'Presidente Rómulo Gallegos ', 1, 14),
	(7, 'Pulido Méndez', 1, 14),
	(8, 'La Azulita', 2, 14),
	(9, 'Santa Cruz de Mora', 3, 14),
	(10, 'Mesa Bolívar', 3, 14),
	(11, 'Mesa Las Palmas', 3, 14),
	(12, 'Aricagua', 4, 14),
	(13, 'San Antonio (Campo Elías)', 4, 14),
	(14, 'Canaguá', 5, 14),
	(15, 'Mucutuy', 5, 14),
	(16, 'Mucuchachí', 5, 14),
	(17, 'Chacantá', 5, 14),
	(18, 'El Molino', 5, 14),
	(19, 'Capurí', 5, 14),
	(20, 'Guaimaral', 5, 14),
	(21, 'Fernández Peña', 6, 14),
	(22, 'Matriz', 6, 14),
	(23, 'Montalbán', 6, 14),
	(24, 'Acequias', 6, 14),
	(25, 'Jají', 6, 14),
	(26, 'La Mesa', 6, 14),
	(27, 'San José del Sur', 6, 14),
	(31, 'Tucaní', 7, 14),
	(32, 'Florencio Ramírez (El Pinar)', 7, 14),
	(33, 'Santo Domingo', 8, 14),
	(34, 'Las Piedras', 8, 14),
	(35, 'Guaraque', 9, 14),
	(36, 'Mesa de Quintero', 9, 14),
	(37, 'Río Negro', 9, 14),
	(38, 'Arapuey', 10, 14),
	(39, 'San José de Palmira', 10, 14),
	(40, 'San Cristóbal de Torondoy ', 11, 14),
	(41, 'Torondoy', 11, 14),
	(42, 'Antonio Spinetti Dini', 12, 14),
	(43, 'Arias', 12, 14),
	(44, 'Caracciolo Parra Pérez', 12, 14),
	(45, 'Domingo Peña', 12, 14),
	(46, 'El Llano', 12, 14),
	(47, 'El Morro', 12, 14),
	(48, 'Gonzalo Picón Febres', 12, 14),
	(49, 'Jacinto Plaza', 12, 14),
	(50, 'Juan Rodríguez Suárez', 12, 14),
	(51, 'Lasso de la Vega', 12, 14),
	(52, 'Los Nevados', 12, 14),
	(53, 'Mariano Picón Salas', 12, 14),
	(54, 'Milla', 12, 14),
	(55, 'Osuna Rodríguez', 12, 14),
	(56, 'Sagrario', 12, 14),
	(57, 'Andrés Eloy Blanco', 13, 14),
	(58, 'La Venta ', 13, 14),
	(59, 'Piñango', 13, 14),
	(60, 'Timotes', 13, 14),
	(61, 'Eloy Paredes (Guayabones)', 14, 14),
	(62, 'San Rafael de Alcázar', 14, 14),
	(63, 'Santa Elena de Arenales', 14, 14),
	(64, 'Santa María de Caparo', 15, 14),
	(65, 'Pueblo Llano', 16, 14),
	(66, 'Rangel', 17, 14),
	(67, 'Cacute', 17, 14),
	(68, 'La toma', 17, 14),
	(69, 'Mucurubá', 17, 14),
	(70, 'San Rafael de Mucuchíes', 17, 14),
	(71, 'Gerónimo Maldonado', 18, 14),
	(72, 'Bailadores', 18, 14),
	(73, 'Tabay', 19, 14),
	(74, 'Chiguará', 20, 14),
	(75, 'Estánquez', 20, 14),
	(76, 'Lagunillas', 20, 14),
	(77, 'La Trampa', 20, 14),
	(78, 'Pueblo Nuevo del Sur', 20, 14),
	(79, 'San Juan', 20, 14),
	(80, 'El Amparo ', 21, 14),
	(81, 'El Llano', 21, 14),
	(82, 'San Francisco ', 21, 14),
	(83, 'Tovar', 21, 14),
	(84, 'Independencia (Palmarito)', 22, 14),
	(85, 'María de la Concepción Palacio Blanco (Las Virtudes)', 22, 14),
	(86, 'Nueva Bolivia', 22, 14),
	(87, 'Santa Apolonia', 22, 14),
	(88, 'Caño El Tigre ', 23, 14),
	(89, 'Zea', 23, 14);
/*!40000 ALTER TABLE `parroquia` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.proyecto
CREATE TABLE IF NOT EXISTS `proyecto` (
  `id_proyecto` int(18) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `titulo_proyecto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `area_investigacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_proyecto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apoyo` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_apoyo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `resumen_proyecto` text COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `id_carrera` int(18) NOT NULL,
  `id_comunidad` int(18) NOT NULL,
  `id_docente` int(18) NOT NULL,
  `cupo` int(18) NOT NULL,
  `id_cohorte` int(18) NOT NULL,
  `tesis` text COLLATE utf8_spanish_ci NOT NULL,
  `carrera2` text COLLATE utf8_spanish_ci NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_proyecto`),
  KEY `id_carrera` (`id_carrera`),
  KEY `id_comunidad` (`id_comunidad`),
  KEY `id_docente` (`id_docente`),
  KEY `id_cohorte` (`id_cohorte`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.proyecto: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `proyecto` DISABLE KEYS */;
INSERT INTO `proyecto` (`id_proyecto`, `fecha`, `titulo_proyecto`, `area_investigacion`, `tipo_proyecto`, `apoyo`, `tipo_apoyo`, `resumen_proyecto`, `observaciones`, `id_carrera`, `id_comunidad`, `id_docente`, `cupo`, `id_cohorte`, `tesis`, `carrera2`, `estatus`) VALUES
	(1, '2015-08-28 17:59:51', '“Sistema de Control Interno en el Área de Caja del Instituto Universitario Tecnológico de Ejido', 'tecnológico ', 'Socio Tecnologico', 'No', 'na', '', '', 1, 1, 2, 5, 3, '', '', 0),
	(2, '2015-08-28 18:18:05', 'Redes Inalambricas', 'Redes y Telecomunicaciones', 'Socio Tecnologico', 'No', 'Ilusiones que van ayudar', 'cvkhgeiufgwiegtfbsdcbkgcfiuwge', '', 1, 1, 2, 2, 1, 'PROGRAMA NACIONAL DE FORMACIÓN  EN  INFORMÁTICA (1).docx', '', 0),
	(3, '2015-08-29 13:15:20', 'sistema de robotica ', 'Tecnología web  ', 'Socio Tecnologico', 'Si', 'de la alcaldía ', '', '', 1, 2, 37, 5, 3, '', '', 0),
	(4, '2015-08-29 14:52:36', 'aula virtual ', 'tecnologia', 'Socio Tecnologico', 'Si', 'monetario', '', '', 1, 2, 37, 4, 3, '', '', 0),
	(14, '2015-08-29 15:17:43', 'asssssssssssssssssssssssss', 'ssssssssdddddddddddddddddddddddddd', 'Socio Tecnologico', 'Si', 'assssssssssssssssssssssssssssssssssssssssssssssss', '', '', 1, 2, 37, 3, 3, '', '', 0),
	(15, '2015-08-29 15:18:31', 'love tecnologi', 'Tecnología web  ', 'Socio Tecnologico', 'No', 'no hay', '', '', 1, 2, 37, 4, 3, '', '', 0),
	(16, '2015-08-30 15:26:14', 'COORDINACION DE PROTECCIONES EN LAS SUB-ESTACIONESNO ATENDIDAS REFERENTE A LOS CIRCUITOS DE LA COSTA', 'tecnologico', 'Socio Tecnologico', 'No', 'no', '', '', 1, 16, 37, 2, 1, 'METRICA_V3_Implantacion_y_Aceptacion_del_Sistema.pdf', '', 0),
	(17, '2015-08-30 15:29:10', 'sistema de información para la optimizacion del proceso de inscripción de alumnos', 'tecnologico', 'Socio Tecnologico', 'No', 'no', '', '', 1, 15, 30, 2, 1, '', '', 0),
	(18, '2015-08-30 15:31:08', 'sistema de información para el proceso de inscripción de alumnos', 'tecnologico', 'Socio Tecnologico', 'No', 'no', '', '', 1, 19, 33, 3, 2, '', '', 0),
	(19, '2015-08-30 15:34:57', 'Identificación y Extracción de redes sociales ', 'Desarrollo WEB', 'Socio Tecnologico', 'No', 'ninguno', 'dsfnhsaehfuh hhfah hafh ahafhfa h hoah', '', 1, 18, 32, 3, 6, '', '', 0),
	(20, '2015-08-30 16:29:10', 'Visualización 3D realista utilizando posicionamiento espacial', 'Tecnología 3D', 'Socio Tecnologico', 'No', 'cuando', 'cvsajdfoiaefg jfipog jgpsejpejgp jpj gpgj pje jpe j', '', 1, 18, 2, 2, 2, '', '', 0),
	(21, '2015-08-30 16:38:43', 'Análisis comparativo de la eficiencia en términos sociales y económicos de las instituciones financi', 'contaduria ', 'Socio Integrador', 'No', 'no', '', '', 10, 14, 38, 3, 1, '', '', 0),
	(22, '2015-08-30 16:44:14', 'Analisis de algunos determinantes economicos de la oferta de nuevas viviendas formales en Venezuela', 'contaduria', 'Socio Integrador', 'No', 'no', '', '', 10, 18, 38, 2, 1, '', '', 0),
	(23, '2015-08-30 17:10:56', 'proyecto de obra civil', 'productivo', 'Socio Productivo', 'Si', 'gobernación de Mérida ', '', '', 13, 9, 39, 1, 1, '', '', 0),
	(24, '2015-08-30 17:12:09', 'obras de pavimento ', 'productivo ', 'Socio Productivo', 'Si', 'gobernación de Mérida ', '', '', 13, 17, 39, 2, 1, '', '', 0),
	(25, '2015-08-31 11:06:29', 'Manejo del paciente pediátrico en un Cistograma', 'Cistograma', 'Socio Integrador', 'No', '', '', '', 7, 12, 40, 2, 1, '', '', 0);
/*!40000 ALTER TABLE `proyecto` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.representante
CREATE TABLE IF NOT EXISTS `representante` (
  `id_representante` int(18) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `cargo_rol` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_hab` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_cel` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_comunidad` int(18) NOT NULL,
  PRIMARY KEY (`id_representante`),
  UNIQUE KEY `cedula` (`cedula`),
  KEY `id_comunidad` (`id_comunidad`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.representante: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `representante` DISABLE KEYS */;
INSERT INTO `representante` (`id_representante`, `nombre`, `apellido`, `nacionalidad`, `cedula`, `cargo_rol`, `correo`, `direccion`, `telefono_hab`, `telefono_cel`, `id_comunidad`) VALUES
	(1, 'judelvis', 'rivass', 'V', 17456121, 'representante', 'jud.p@algo', 'la mesa de los indios', '8798554', '78421', 1),
	(4, 'mentira', 'menira', '', 5950873, 'mentira', 'mentira@hotmail.com', 'milla meida ', '0274-2665478', '0414-24561235', 2),
	(5, 'yaney', 'la CRUZ ', 'V', 16657739, 'vocera princiapl', 'yasmeylacruz16@hotmail.com', 'chamizal 1', '', '04169703213', 5),
	(6, 'yajaira ', 'varga', 'V', 10103388, 'vocera principal', '', 'el cristo casa 10 jaji', '', '04168736461', 4),
	(7, 'carlos ', 'angulos ', 'V', 8033200, 'vocero principal', '', 'la carbonera ', '', '04264287462', 6),
	(8, 'jose ', 'gonzalez ', 'V', 18797309, 'vocero principal', '', 'calle el cristo casa 10', '', '0416309084', 7),
	(9, 'Mirian', 'Maldonado ', 'V', 4485475, 'vocera principal', '', 'san juan el corozo casa 24-a', '', '04165753966', 8),
	(10, 'alguio', 'sdf', 'V', 78787, 'dsf', 'dsfsd@fdsdsf', 'kñlsfdkñkf', 'ñlkñlkñl', 'ñlkñlñl', 16),
	(11, 'ddd', 'ddd', '', 12722185, 'ddd', 'ddd@gmail.com', 'fff', '0000', '0000', 21);
/*!40000 ALTER TABLE `representante` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.sede
CREATE TABLE IF NOT EXISTS `sede` (
  `id_sede` int(18) NOT NULL AUTO_INCREMENT,
  `nombre_sede` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_sede`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.sede: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `sede` DISABLE KEYS */;
INSERT INTO `sede` (`id_sede`, `nombre_sede`, `codigo`) VALUES
	(1, 'Ejido(Sede Principal)', '001'),
	(2, 'Tucani', '002'),
	(3, 'Bailadores', '003'),
	(4, 'Sede Merida', '004'),
	(9, 'Barquisimeto', '008');
/*!40000 ALTER TABLE `sede` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
