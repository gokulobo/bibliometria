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
  UNIQUE KEY `id_alumno` (`id_alumno`),
  KEY `id_cohorte` (`id_cohorte`),
  KEY `id_carrera` (`id_carrera`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.alumnos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` (`id_alumno`, `fecha`, `nombre`, `apellido`, `nacionalidad`, `cedula`, `carnet`, `grado_instruccion`, `correo`, `direccion_hab`, `telefono_hab`, `telefono_cel`, `id_cohorte`, `id_carrera`, `trayecto`, `trimestre`) VALUES
	(1, '0000-00-00 00:00:00', 'Erwin', 'Lobo', 'V', 14106119, '500665', 'TSU', 'white.1.wolf@hotmail.com', 'ejoido', '1234567', '67789', 2, 2, 'III', 'III'),
	(2, '0000-00-00 00:00:00', 'Erwin2', 'Lobo2', 'V', 141061192, '500665', 'TSU', 'white.1.wolf@hotmail.com', 'ejoido', '1234567', '67789', 2, 2, 'III', 'III'),
	(3, '0000-00-00 00:00:00', 'eeeeeeeeee', 'lllllllllllllllllllll', 'V', 2147483647, '5555555', 'Universitario(a)', 'ttttttttt@hotmail.com', 'dsfdsf', '23456', '87459621', 2, 13, 'IV', 'III'),
	(4, '2015-07-14 21:39:55', 'judelvis', 'rivass', 'V', 17456121, '000589', 'TSU', 'jud.prog', 'los rosales', '2254641', '6464684', 2, 4, 'III', 'I'),
	(6, '0000-00-00 00:00:00', 'antonio', 'perdomo', 'V', 787878, '21212', 'Universitario(a)', 'judas', 'por alli', '969696', '3232323', 1, 2, 'III', 'I'),
	(7, '0000-00-00 00:00:00', 'prueba3', 'apellido3', 'V', 74747, '21212', 'Universitario(a)', 'iiiiii', 'por alla', '878787', '545454', 2, 1, 'III', 'I');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.articulo
CREATE TABLE IF NOT EXISTS `articulo` (
  `id_articulo` int(18) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `volumen` char(3) COLLATE utf8_spanish_ci NOT NULL,
  `numeracion` int(30) NOT NULL,
  `issn` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pagina_colacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `id_docente` int(18) NOT NULL,
  PRIMARY KEY (`id_articulo`),
  KEY `id_docente` (`id_docente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.articulo: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `articulo` DISABLE KEYS */;
INSERT INTO `articulo` (`id_articulo`, `titulo`, `fecha_publicacion`, `volumen`, `numeracion`, `issn`, `pagina_colacion`, `observaciones`, `id_docente`) VALUES
	(1, 'Articulo 1', '2015-01-08', 'Vol', 1, '1', '1', 'algo largo para mostrar el campo text', 1);
/*!40000 ALTER TABLE `articulo` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.asignacion_guia
CREATE TABLE IF NOT EXISTS `asignacion_guia` (
  `id_docente` int(18) NOT NULL,
  `id_cohorte` int(18) NOT NULL,
  `trayecto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `trimestre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `activo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  KEY `id_docente` (`id_docente`),
  KEY `id_cohorte` (`id_cohorte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.asignacion_guia: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `asignacion_guia` DISABLE KEYS */;
INSERT INTO `asignacion_guia` (`id_docente`, `id_cohorte`, `trayecto`, `trimestre`, `activo`) VALUES
	(1, 1, 'I', 'I', 'Si');
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.carrera: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` (`id_carrera`, `numero_carrera`, `id_sede`, `nombre_carrera`) VALUES
	(0, 1, 1, 'Psicologia Social'),
	(1, 0, 1, 'Informatica'),
	(2, 0, 1, 'Administracion'),
	(3, 0, 2, 'Administracion'),
	(4, 0, 1, 'Historia'),
	(5, 255, 5, 'Fomacion'),
	(6, 0, 1, 'Agroalimentacion'),
	(7, 14595, 1, 'Radiologia e Imagenologia'),
	(8, 14596, 1, 'Agroalimentacion'),
	(9, 14598, 1, 'Turismo'),
	(10, 14599, 1, 'Contaduria Publica'),
	(11, 14600, 3, 'Administracion'),
	(12, 14601, 2, 'Informatica'),
	(13, 14602, 1, 'Construccion Civil'),
	(14, 14604, 1, 'Geociencias'),
	(15, 14605, 1, 'Manejo de Emergencia y Accion Contra Desastre'),
	(16, 14728, 2, 'Historia'),
	(17, 55, 5, 'Informatico');
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.cohorte
CREATE TABLE IF NOT EXISTS `cohorte` (
  `id_cohorte` int(18) NOT NULL AUTO_INCREMENT,
  `numero_cohorte` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `seccion` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_cohorte`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.cohorte: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `cohorte` DISABLE KEYS */;
INSERT INTO `cohorte` (`id_cohorte`, `numero_cohorte`, `seccion`, `estado`) VALUES
	(1, '2015A', 'A', 1),
	(2, '2015A', 'B', 1);
/*!40000 ALTER TABLE `cohorte` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.comunidad
CREATE TABLE IF NOT EXISTS `comunidad` (
  `id_comunidad` int(18) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre_comunidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `convenio` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_convenio` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_hab` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_cel` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_comunidad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.comunidad: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `comunidad` DISABLE KEYS */;
INSERT INTO `comunidad` (`id_comunidad`, `fecha`, `nombre_comunidad`, `rif`, `correo`, `direccion`, `convenio`, `tipo_convenio`, `telefono_hab`, `telefono_cel`, `observaciones`) VALUES
	(1, '0000-00-00 00:00:00', 'comunidad1', 'j-14105119-0', 'goku@hotmail.com', 'bvugwec8igwecf', 'Si', 'ninguno pichirre', '0412652002', '2145369871', ''),
	(2, '2015-07-14 20:47:54', 'comunidad2', 'j12345698-9', '', '', 'Si', 'dfsdfasdf', '', '', ''),
	(3, '2015-07-14 20:54:36', 'comunidad3', 'j-222222222', 'jud.prog', 'los rosales 88', 'Si', 'plata', '8888888', '9999999', 'algo');
/*!40000 ALTER TABLE `comunidad` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.docente
CREATE TABLE IF NOT EXISTS `docente` (
  `id_docente` int(18) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `fecha_nac` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `lugar_nac` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
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
  `fecha_ingreso` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `investigacion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `guia` int(1) NOT NULL DEFAULT '0',
  `coordinador` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_docente`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.docente: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `docente` DISABLE KEYS */;
INSERT INTO `docente` (`id_docente`, `nombre`, `apellido`, `nacionalidad`, `cedula`, `fecha_nac`, `lugar_nac`, `profesion`, `cargo`, `correo`, `clave_usuario`, `telefono_hab`, `telefono_cel`, `direccion_hab`, `categoria`, `modalidad`, `dedicacion`, `ascenso`, `fecha_ingreso`, `investigacion`, `observaciones`, `guia`, `coordinador`) VALUES
	(5, 'Aodolfo', 'Rodriguez', 'V', 12354789, '27/09/1979', 'Barinas', 'Ingeniero de Sistema', 'Maestro', 'prueba@gmail.com', '202cb962ac59075b964b07152d234b70', '0274-2215398', '0412-3214789', '', 'Asociado(a)', 'Presencial', 'Tiempo Completo', '', '0000-00-00 00:00:00', 'DiseÃ±ador', '', 1, 1),
	(7, 'Isabel', 'Albornoz', 'V', 10456789, '', 'Merida', 'Licenciada en Educacion y Turi', 'Maistra', 'isabel@hotmail.com', '', '0274-2215353', '-7771053', '', 'Titular', '', 'Tiempo Convencional', '', '0000-00-00 00:00:00', '', '', 0, 0),
	(8, 'Maura', 'Lobo', 'V', 9456987, '27/09/1979', 'Merida', 'Licenciada en Educacion', 'Maestra', 'maura@hotmail.com', '202cb962ac59075b964b07152d234b70', '0274-2219173', '0412-3214789', '', 'Titular', 'Semipresencial', 'Exclisiva(o)', '', '0000-00-00 00:00:00', 'EducaciÃ³n ', '', 0, 0),
	(9, 'Magaly', 'Paredes', 'E', 20848273, '31/08/1990', 'Merida', 'Licenciada en AdministraciÃ³n ', 'Maestra', 'maria@gmail.com', '202cb962ac59075b964b07152d234b70', '0274-2219173', '0414-7771469', '', 'Agregado(a)', 'Presencial', 'Tiempo Completo', '', '0000-00-00 00:00:00', 'Administrativas', '', 0, 0),
	(10, 'Maria', 'Rangel', 'V', 20848372, '31/08/1990', 'Merida', 'Prescolar', 'Maestra', 'maria@hotmail.com', '202cb962ac59075b964b07152d234b70', '0274-2219173', '0414-7771469', '', 'Titular', 'Presencial', 'Tiempo Convencional', '', '0000-00-00 00:00:00', 'niÃ±os', '', 0, 0),
	(11, 'sgsdvgf', 'sdvgfsdvf', 'V', 0, 'dfsdfs', 'dsdfsdf', 'sddsfsdf', 'sdfsdfsd', 'dfsdfsdf', '202cb962ac59075b964b07152d234b70', 'sdfsdfsd', '0274-2219173', '', 'Asociado(a)', 'Presencial', 'Exclisiva(o)', '', '0000-00-00 00:00:00', 'sdfsdfsd', '', 0, 0),
	(12, 'asdasd', 'asdas', 'E', 0, 'dasd', 'asdas', 'dasd', 'asd', 'jud', '202cb962ac59075b964b07152d234b70', '02742219173', '01427899672', '', 'Titular', 'Presencial', 'Exclisiva(o)', '', '0000-00-00 00:00:00', 'shsh', '', 1, 0),
	(13, 'eliana del mar ', 'lobo rodriguez', 'V', 164445921, '13/84/09', 'merida', 'Lic Educacion y Turismo', 'vendedora', 'Lobo13256@hotmail.com', '202cb962ac59075b964b07152d234b70', '02742219173', '04127899672', '', 'Titular', 'Semipresencial', 'Tiempo Convencional', '', '0000-00-00 00:00:00', 'no se explicarlo', '', 0, 0),
	(14, 'rosita', 'lobo', 'V', 5950872, '19/12/1959', 'merida', 'lic educacion', 'docente', 'loborosita@hotmail.com', '202cb962ac59075b964b07152d234b70', '2742219173', '04126500789', '', 'Instructor', 'Semipresencial', 'Medio Tiempo', '2015', '2015', 'turismo', '', 1, 0),
	(15, 'ericka sarai', 'lobo R', 'V', 25987345, '06/04/84', 'merida', 'vendedora', 'administracion', 'erickalob@hotmail.com', '202cb962ac59075b964b07152d234b70', '03456789', '0987654321', '', 'Asistente', 'Presencial', 'Exclisiva(o)', '2015', '10/06/2015', 'red', '', 1, 0),
	(16, 'ericka sarai', 'lobo R', 'V', 25987345, '06/04/84', 'merida', 'vendedora', 'administracion', 'erickalob@hotmail.com', '202cb962ac59075b964b07152d234b70', '03456789', '0987654321', '', 'Asistente', 'Presencial', 'Exclisiva(o)', '2015', '10/06/2015', 'red', '', 1, 0),
	(17, 'eeeeee', 'lllllll', 'E', 12345678, '12/5/74', 'lara', 'lic geocienc', 'hhhjjjj', 'aaaa@scnaskcklasjc', '202cb962ac59075b964b07152d234b70', '02743323232', '0416313131313', '', 'Asistente', 'Presencial', 'Exclisiva(o)', '2000', '2015', 'uytre', '', 1, 1),
	(18, 'jesus', 'corazon', 'E', 123456789, '2471271990', 'Panama', 'Historia', 'jefe', 'jesuscorazon@hotmail', '202cb962ac59075b964b07152d234b70', '01234567812', '012345678134', '', 'Titular', 'Presencial', 'Exclisiva(o)', '2000', '12/06/2015', 'histori', '', 1, 1),
	(20, 'jud', 'ant', 'V', 17456121, '23 Diciembre, 1985', 'merida', 'prog', 'progs', 'jud.prog@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2215686', '0122f1sd', 'los rosales', 'Asistente(a)', 'Presencial', 'Exclusivo(a)', '2015', '18 Agosto, 2015', 'algo', '', 0, 1),
	(22, 'Erwin', 'Lobo', '', 14106119, '27 Septiembre, 1978', 'Mérida', 'programador', 'ninguno', 'white.1.wolf@hotmail.com', '202cb962ac59075b964b07152d234b70', '0274-2219173', '-6500351', 'Ejido Av.Bolivar', 'Titular', 'Semi-presencial', 'Exclusivo(a)', '2015', '19 Julio, 2005', 'programacion ', 'lobo blanco', 1, 1);
/*!40000 ALTER TABLE `docente` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.estados
CREATE TABLE IF NOT EXISTS `estados` (
  `id_estado` int(18) NOT NULL AUTO_INCREMENT,
  `nombre_estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_comunidad` int(18) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.estados: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.estudios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `estudios` DISABLE KEYS */;
INSERT INTO `estudios` (`id_estudio`, `tipo`, `nombre`, `lugar`, `id_docente`) VALUES
	(1, 'Pregrado', 'Ingenieria Informatica', 'IUTE', 1),
	(2, 'Postgrado', 'Bases De Datos', 'Harvar', 1),
	(3, 'Doctorado', 'Analisis de Algoritmo', 'Priston', 1);
/*!40000 ALTER TABLE `estudios` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.grupo_proyecto
CREATE TABLE IF NOT EXISTS `grupo_proyecto` (
  `id_alumno` int(18) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_proyecto` int(2) NOT NULL,
  KEY `id_alumno` (`id_alumno`),
  KEY `id_proyecto` (`id_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.grupo_proyecto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `grupo_proyecto` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.investigacion: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `investigacion` DISABLE KEYS */;
INSERT INTO `investigacion` (`id_investigacion`, `peii`, `nivel_peii`, `ano_aplicacion_peii`, `forma_grupo_investigacion`, `nombre_investigacion`, `area_investigacion`, `observaciones`, `id_docente`) VALUES
	(1, 'Si', '1', '2015', 'Si', '', '', 'sdfasdfasdf', 1),
	(2, 'No', '2', '2013', 'No', '', '', 'sdfasdfasdf2', 1),
	(3, 'No', '3', '3', 'Si', 'grupo3', '', 'algo va aca', 1),
	(4, 'Si', '4', '4', 'Si', '4', '4', '4', 1);
/*!40000 ALTER TABLE `investigacion` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.municipio
CREATE TABLE IF NOT EXISTS `municipio` (
  `id_municipio` int(18) NOT NULL AUTO_INCREMENT,
  `nombre_municipio` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_estado` int(18) NOT NULL,
  `id_comunidad` int(18) NOT NULL,
  PRIMARY KEY (`id_municipio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.municipio: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.parroquia
CREATE TABLE IF NOT EXISTS `parroquia` (
  `id_parroquia` int(18) NOT NULL,
  `nombre_parroquia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_estado` int(18) NOT NULL,
  `id_municipio` int(18) NOT NULL,
  `id_comunidad` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.parroquia: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `parroquia` DISABLE KEYS */;
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
  PRIMARY KEY (`id_proyecto`),
  KEY `id_carrera` (`id_carrera`),
  KEY `id_comunidad` (`id_comunidad`),
  KEY `id_docente` (`id_docente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.proyecto: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `proyecto` DISABLE KEYS */;
INSERT INTO `proyecto` (`id_proyecto`, `fecha`, `titulo_proyecto`, `area_investigacion`, `tipo_proyecto`, `apoyo`, `tipo_apoyo`, `resumen_proyecto`, `observaciones`, `id_carrera`, `id_comunidad`, `id_docente`, `cupo`) VALUES
	(1, '2015-07-14 22:16:47', 'PROYECTO11', 'AREA11', 'UNICO1', 'No', 'MONETARIO1', 'CALIDAD1', '', 10, 3, 14, 0);
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
  KEY `id_comunidad` (`id_comunidad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.representante: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `representante` DISABLE KEYS */;
INSERT INTO `representante` (`id_representante`, `nombre`, `apellido`, `nacionalidad`, `cedula`, `cargo_rol`, `correo`, `direccion`, `telefono_hab`, `telefono_cel`, `id_comunidad`) VALUES
	(1, 'Erwin', 'Lobo', 'V', 14106119, 'Jefe', 'goku@hotmail.com', 'bvugwec8igwecf', '0412652002', '2145369871', 0),
	(2, 'Eli', 'lobo', 'V', 123554469, 'ingeniero', 'eli@', 'bolivar', '12354879154', '04123659897', 3);
/*!40000 ALTER TABLE `representante` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.sede
CREATE TABLE IF NOT EXISTS `sede` (
  `id_sede` int(18) NOT NULL AUTO_INCREMENT,
  `nombre_sede` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_sede`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.sede: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `sede` DISABLE KEYS */;
INSERT INTO `sede` (`id_sede`, `nombre_sede`, `codigo`) VALUES
	(1, 'Ejido(Sede Principal)', '001'),
	(2, 'Tucani', '002'),
	(3, 'Bailadores', '003'),
	(4, 'Sede Merida', '004'),
	(5, 'Barinas', '005');
/*!40000 ALTER TABLE `sede` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
