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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.alumnos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` (`id_alumno`, `fecha`, `nombre`, `apellido`, `nacionalidad`, `cedula`, `carnet`, `grado_instruccion`, `correo`, `direccion_hab`, `telefono_hab`, `telefono_cel`, `id_cohorte`, `id_carrera`, `trayecto`, `trimestre`, `fecha_nac`, `lugar_nac`) VALUES
	(1, '2015-08-11 17:09:51', 'ppppepep', 'asdfasdf', 'V', 1111, '3213213', 'TSU', 'kik@sdfdsf.com', 'tampoco', '21212', '31321', 1, 14, 'I', 'I', '2015-08-20', 'merd'),
	(2, '2015-08-11 20:22:29', 'Erwin', 'Lobo', 'V', 14106119, '500665', 'TSU', 'goku1_908@hotmail.com', 'Ejido', '02742219173', '0412-6500763', 1, 1, 'III', 'III', '2015-08-23', 'Mérida');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.articulo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `articulo` DISABLE KEYS */;
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

-- Volcando datos para la tabla sistema.asignacion_guia: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `asignacion_guia` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.carrera: ~19 rows (aproximadamente)
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
	(17, 55, 5, 'Informatico'),
	(18, 654123, 9, 'Robotica');
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.cohorte
CREATE TABLE IF NOT EXISTS `cohorte` (
  `id_cohorte` int(18) NOT NULL AUTO_INCREMENT,
  `numero_cohorte` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_cohorte` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `seccion` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_cohorte`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.cohorte: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `cohorte` DISABLE KEYS */;
INSERT INTO `cohorte` (`id_cohorte`, `numero_cohorte`, `tipo_cohorte`, `seccion`, `estado`) VALUES
	(1, '2015', 'A', 'A', 1);
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
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `parroquia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_comunidad`),
  UNIQUE KEY `rif` (`rif`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.comunidad: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `comunidad` DISABLE KEYS */;
INSERT INTO `comunidad` (`id_comunidad`, `fecha`, `nombre_comunidad`, `rif`, `correo`, `direccion`, `convenio`, `tipo_convenio`, `telefono_hab`, `telefono_cel`, `observaciones`, `estado`, `municipio`, `parroquia`) VALUES
	(1, '2015-08-11 17:19:07', 'comunidad1', '7878', 'algo@algo', 'ejido', 'si', 'grupal', '8797', '798798798', 'algo maS', '14', '3', '9'),
	(4, '2015-08-12 19:30:29', 'COMUNIDAD2', '8989', 'COMUNIDAD@ALGO', 'EJIDO', 'no', 'PARA TODOS', '55558', '5563244', 'OBSERVACION', '14', '6', '21');
/*!40000 ALTER TABLE `comunidad` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.docente
CREATE TABLE IF NOT EXISTS `docente` (
  `id_docente` int(18) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `fecha_nac` date NOT NULL,
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
  `fecha_ingreso` date NOT NULL,
  `investigacion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `guia` int(1) NOT NULL DEFAULT '0',
  `coordinador` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_docente`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.docente: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `docente` DISABLE KEYS */;
INSERT INTO `docente` (`id_docente`, `nombre`, `apellido`, `nacionalidad`, `cedula`, `fecha_nac`, `lugar_nac`, `profesion`, `cargo`, `correo`, `clave_usuario`, `telefono_hab`, `telefono_cel`, `direccion_hab`, `categoria`, `modalidad`, `dedicacion`, `ascenso`, `fecha_ingreso`, `investigacion`, `observaciones`, `guia`, `coordinador`) VALUES
	(1, 'Eliana', 'Lobo', 'V', 16445921, '1984-09-13', 'Mérida', 'Licenciada en educación', 'Maestra', 'lobo13256@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0274-2219173', '0412-5478972', 'Ejido', 'Titular', 'Semi-presencial', 'Exclusivo(a)', '2015', '2015-04-21', 'Programación', 'ya', 1, 1),
	(26, 'Erwin', 'Lobo', 'V', 14106119, '1978-09-27', 'Mérida', 'Tecnico', 'Reparación', 'white.1.wolf@hotmail.com', '202cb962ac59075b964b07152d234b70', '0274-2219173', '04126500763', 'Ejido', 'Titular', 'Semi-presencial', 'Exclusivo(a)', '2015', '2015-09-27', 'tecnologia', 'por Dios', 1, 1);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.estudios: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `estudios` DISABLE KEYS */;
INSERT INTO `estudios` (`id_estudio`, `tipo`, `nombre`, `lugar`, `id_docente`) VALUES
	(1, 'Pregrado', 'Ingenieria Informatica', 'IUTE', 1),
	(2, 'Postgrado', 'Bases De Datos', 'Harvar', 1),
	(3, 'Doctorado', 'Analisis de Algoritmo', 'Priston', 1),
	(4, 'Postgrado', 'matematica', 'UNA', 22),
	(5, 'Pregrado', 'Ing. Sistemas', 'Merida', 20),
	(6, 'Postgrado', 'control y automatizacion', 'francia', 20);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.investigacion: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `investigacion` DISABLE KEYS */;
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
  PRIMARY KEY (`id_proyecto`),
  KEY `id_carrera` (`id_carrera`),
  KEY `id_comunidad` (`id_comunidad`),
  KEY `id_docente` (`id_docente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.proyecto: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `proyecto` DISABLE KEYS */;
INSERT INTO `proyecto` (`id_proyecto`, `fecha`, `titulo_proyecto`, `area_investigacion`, `tipo_proyecto`, `apoyo`, `tipo_apoyo`, `resumen_proyecto`, `observaciones`, `id_carrera`, `id_comunidad`, `id_docente`, `cupo`) VALUES
	(2, '2015-08-12 20:29:53', 'proyecto 1', 'informatica', 'Socio Productivo', 'No', 'ninguno', 'Muy calidad', '', 0, 1, 1, 0),
	(3, '2015-08-12 20:36:55', 'practica algo', 'otra', 'Socio Tecnologico', 'Si', 'monetario', 'esta bueno', 'kilo', 1, 4, 26, 0);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.representante: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `representante` DISABLE KEYS */;
INSERT INTO `representante` (`id_representante`, `nombre`, `apellido`, `nacionalidad`, `cedula`, `cargo_rol`, `correo`, `direccion`, `telefono_hab`, `telefono_cel`, `id_comunidad`) VALUES
	(1, 'judelvis', 'rivass', 'V', 17456121, 'representante', 'jud.p@algo', 'la mesa de los indios', '8798554', '78421', 1);
/*!40000 ALTER TABLE `representante` ENABLE KEYS */;


-- Volcando estructura para tabla sistema.sede
CREATE TABLE IF NOT EXISTS `sede` (
  `id_sede` int(18) NOT NULL AUTO_INCREMENT,
  `nombre_sede` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_sede`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla sistema.sede: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `sede` DISABLE KEYS */;
INSERT INTO `sede` (`id_sede`, `nombre_sede`, `codigo`) VALUES
	(1, 'Ejido(Sede Principal)', '001'),
	(2, 'Tucani', '002'),
	(3, 'Bailadores', '003'),
	(4, 'Sede Merida', '004'),
	(5, 'Barinas', '005'),
	(7, 'Apure', '006'),
	(8, 'trujillo', '007'),
	(9, 'Barquisimeto', '008');
/*!40000 ALTER TABLE `sede` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
