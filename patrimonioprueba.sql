-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-11-2023 a las 13:25:27
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `patrimonioprueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_activos`
--

DROP TABLE IF EXISTS `act_activos`;
CREATE TABLE IF NOT EXISTS `act_activos` (
  `codigo` int NOT NULL COMMENT 'PK Código único del activo',
  `marca` int NOT NULL COMMENT 'FK marca del activo',
  `modelo` varchar(35) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Modelo del activo entrante',
  `serial` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Serial del activo',
  `condicion_act` int NOT NULL COMMENT 'FK de la condición del activo',
  `tipo` int NOT NULL COMMENT 'Nombre del tipo de activo',
  `descripcion` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Descripción del activo',
  `observacion` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Observaciones del activo',
  `proveedor` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Proveedor del activo',
  `n_factura` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Numero de factura del activo',
  `costo` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Costo total del activo',
  `n_orden` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Numero de orden ',
  `garantia_inicio` date NOT NULL COMMENT 'Fecha de inicio de la garantía del activo',
  `garantia_fin` date NOT NULL COMMENT 'Fecha de final de la garantía del activo',
  `asignado` int NOT NULL DEFAULT '0' COMMENT 'Estado de asignacion "por asignar" u "asignado"',
  `estado` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`codigo`),
  KEY `idmarca` (`marca`),
  KEY `idcondicion` (`condicion_act`),
  KEY `tipo` (`tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `act_activos`
--

INSERT INTO `act_activos` (`codigo`, `marca`, `modelo`, `serial`, `condicion_act`, `tipo`, `descripcion`, `observacion`, `proveedor`, `n_factura`, `costo`, `n_orden`, `garantia_inicio`, `garantia_fin`, `asignado`, `estado`) VALUES
(111111111, 1, 'as', '15', 1, 1, 'dsd', '', 'l', '25', '10', '5', '2023-11-18', '2023-11-18', 0, 1),
(200061394, 1, 'dssd', 'sds5', 1, 1, 'dsds', '', 'gg', '25', '10', '5', '2023-11-30', '2023-12-01', 0, 0),
(201000222, 1, 'S M', 'ny-6912', 1, 1, 'Laptop DELL', '', 'DELL', '80', '11', '777', '2023-10-30', '2023-10-30', 1, 1),
(201000225, 2, 'VIT-45', 'nk-4698ksss', 1, 1, 'Computador VIT 7th', '..', 'VIT', '98763', '4500', '89', '2023-10-28', '2023-10-28', 0, 0),
(206240186, 5, 'S M', 'S S', 1, 2, 'Silla Presidencial Tela Negra Giratoria con Brazos', '', 'S P', '25', '1000', '664464', '2023-11-15', '2023-12-29', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_condicion`
--

DROP TABLE IF EXISTS `act_condicion`;
CREATE TABLE IF NOT EXISTS `act_condicion` (
  `id_activo_condicion` int NOT NULL AUTO_INCREMENT COMMENT 'PK Llave primaria ',
  `nombre` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Nombre de la condición ',
  PRIMARY KEY (`id_activo_condicion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `act_condicion`
--

INSERT INTO `act_condicion` (`id_activo_condicion`, `nombre`) VALUES
(1, 'Bueno'),
(2, 'Malo'),
(3, 'Regular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_desincorporacion`
--

DROP TABLE IF EXISTS `act_desincorporacion`;
CREATE TABLE IF NOT EXISTS `act_desincorporacion` (
  `id_desincorporacion` int NOT NULL AUTO_INCREMENT COMMENT 'PK Llave primaria',
  `codigo_activo` int NOT NULL COMMENT 'FK Llave foránea, código único del activo',
  `fecha_des` datetime NOT NULL COMMENT 'Fecha de la desincorporación',
  `motivo` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Motivo de la desincorporacion',
  PRIMARY KEY (`id_desincorporacion`),
  KEY `codigo_activo` (`codigo_activo`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `act_desincorporacion`
--

INSERT INTO `act_desincorporacion` (`id_desincorporacion`, `codigo_activo`, `fecha_des`, `motivo`) VALUES
(1, 201000225, '2023-11-09 00:51:01', 'No se'),
(3, 201000222, '2023-11-11 23:18:43', ' cx'),
(6, 201000225, '2023-11-11 00:00:00', '´sd'),
(9, 201000222, '2023-11-11 20:06:44', 'brr'),
(12, 201000222, '2023-11-17 16:43:31', 'n'),
(13, 200061394, '2023-11-18 11:36:11', ''),
(14, 201000225, '2023-11-18 13:11:56', 'ffgfg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_marca`
--

DROP TABLE IF EXISTS `act_marca`;
CREATE TABLE IF NOT EXISTS `act_marca` (
  `id_marca` int NOT NULL AUTO_INCREMENT COMMENT 'PK Llave primaria',
  `nombre` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Nombre de la marca',
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `act_marca`
--

INSERT INTO `act_marca` (`id_marca`, `nombre`) VALUES
(1, 'DELL'),
(2, 'VIT'),
(3, 'ASUS'),
(4, 'CORSAIR'),
(5, 'S M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_tipo`
--

DROP TABLE IF EXISTS `act_tipo`;
CREATE TABLE IF NOT EXISTS `act_tipo` (
  `id_tipo` int NOT NULL AUTO_INCREMENT COMMENT 'PK Llave primaria ',
  `nombre` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Nombre del tipo de activo',
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `act_tipo`
--

INSERT INTO `act_tipo` (`id_tipo`, `nombre`) VALUES
(1, 'Computador'),
(2, 'Muebles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divisiones`
--

DROP TABLE IF EXISTS `divisiones`;
CREATE TABLE IF NOT EXISTS `divisiones` (
  `id_div` int NOT NULL AUTO_INCREMENT COMMENT 'PK Llave primaria',
  `gerencia` int NOT NULL COMMENT 'FK Llave foránea de la gerencias',
  `nombre_div` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Nombre de las divisiones',
  PRIMARY KEY (`id_div`),
  KEY `gerencia` (`gerencia`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `divisiones`
--

INSERT INTO `divisiones` (`id_div`, `gerencia`, `nombre_div`) VALUES
(1, 2, 'División de determinación de responsabilidades'),
(2, 2, 'División de control posterior'),
(3, 5, 'División de seguridad física '),
(4, 5, 'División de seguridad laboral'),
(5, 5, 'División de investigaciones'),
(6, 8, 'División de contabilidad'),
(7, 8, 'División de tesorería'),
(8, 8, 'División de Servicios Administrativos'),
(9, 9, 'División de relaciones institucionales'),
(10, 9, 'División de prensa'),
(11, 9, 'División para el desarrollo creativo'),
(12, 9, 'División para la atención del ciudadano'),
(13, 10, 'División de planificación personal'),
(14, 10, 'División de administración del personal'),
(15, 10, 'División de bienestar social'),
(16, 11, 'División para la administración de redes y base de'),
(17, 11, 'División de soporte tecnico a usuarios'),
(18, 11, 'División de telecomunicaciones'),
(19, 12, 'División de bienes públicos'),
(20, 12, 'Divisón de control y gestión de almacen '),
(21, 13, 'División de planificación'),
(22, 13, 'División de presupuesto'),
(23, 13, 'División de organización y sistema'),
(24, 15, 'División comercial libertador'),
(25, 15, 'División comercial El Vigia'),
(26, 15, 'División comercial Sucre'),
(27, 15, 'División comercial Sur del Lago'),
(28, 15, 'División comercial Páramo'),
(29, 15, 'División comercial Mocotíes'),
(30, 15, 'División taller de medidores y banco de pruebas'),
(31, 17, 'División de proyectos'),
(32, 17, 'División de costos y contratos'),
(33, 17, 'División de documentación tecnica y catastro'),
(34, 17, 'División de inspección y supervisión de obras'),
(35, 18, 'División de programa educativo'),
(36, 18, 'División de proyectos comunitarios y especiales'),
(37, 18, 'División de trransferencias del servicio de APyS'),
(38, 20, 'División de producción Libertador'),
(39, 20, 'División de producción El Vigia'),
(40, 20, 'División de producción de Sucre'),
(41, 20, 'División de producción Sur del Lago'),
(42, 20, 'División de producción de Páramo'),
(43, 20, 'División de producción Mocotíes'),
(44, 21, 'División de Distribución'),
(45, 21, 'División de mantenimiento'),
(46, 22, 'División de distribución'),
(47, 22, 'División de mantenimiento'),
(48, 23, 'División de distribución'),
(49, 23, 'División de mantenimiento'),
(50, 24, 'División de distribución'),
(51, 24, 'División de mantenimiento'),
(52, 25, 'División de distribución'),
(53, 25, 'División de mantenimiento'),
(54, 26, 'División de distribución'),
(55, 26, 'División de mantenimiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerencias`
--

DROP TABLE IF EXISTS `gerencias`;
CREATE TABLE IF NOT EXISTS `gerencias` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'PK Llave primaria',
  `nombre` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Nombre de las gerencias',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `gerencias`
--

INSERT INTO `gerencias` (`id`, `nombre`) VALUES
(1, 'Junta Directiva'),
(2, 'Auditoria Interna'),
(3, 'Presidencia'),
(4, 'Consultoria Juridica'),
(5, 'Gerencia de Seguridad Integral'),
(6, 'Gerencia de Seguimiento y Politicas Publ'),
(7, 'Gerencia General de Gestión Adminitrativ'),
(8, 'Gerencia de Administración de Finanzas'),
(9, 'Gerencia de Imagen, Comunicación y Merca'),
(10, 'Gerencia de Talento Humano'),
(11, 'Gerencia de Tecnología de la Información'),
(12, 'Gerencia de Protección de Patrimonio'),
(13, 'Gerencia de Planificación, Presupuesto y'),
(14, 'Gerencia General de Gestión Comercial'),
(15, 'Gerencia de Planificación Comercial'),
(16, 'Gerencia General Integral de Obras'),
(17, 'Gerencia de Control y Administración de '),
(18, 'Gerencia de Participación Comunitaria'),
(19, 'Gerencia General de Ingeniería y Operaci'),
(20, 'Gerencia de Potabilización, Tratamiento '),
(21, 'Gerencia Operativa Libertador'),
(22, 'Gerencia Operativa El Vigía'),
(23, 'Gerencia Operativa Sucre'),
(24, 'Gerencia Operativa Sur del Lago'),
(25, 'Gerencia Operativa Páramo'),
(26, 'Gerencia Operativa Mocotíes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mov_detalles`
--

DROP TABLE IF EXISTS `mov_detalles`;
CREATE TABLE IF NOT EXISTS `mov_detalles` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'PK Llave primaria',
  `id_mov` int NOT NULL COMMENT 'FK Llave foránea del movimiento',
  `cedula` int NOT NULL COMMENT 'FK Llave código único numero de cedula del resposable',
  `observacion` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Observaciones',
  PRIMARY KEY (`id`),
  KEY `id_mov` (`id_mov`,`cedula`),
  KEY `cedula_resp` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mov_motivo`
--

DROP TABLE IF EXISTS `mov_motivo`;
CREATE TABLE IF NOT EXISTS `mov_motivo` (
  `id_motivo` int NOT NULL AUTO_INCREMENT COMMENT 'PK Llave unica',
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'nombre del motivo',
  PRIMARY KEY (`id_motivo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `mov_motivo`
--

INSERT INTO `mov_motivo` (`id_motivo`, `nombre`) VALUES
(2, 'Prestamo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mov_movimientos`
--

DROP TABLE IF EXISTS `mov_movimientos`;
CREATE TABLE IF NOT EXISTS `mov_movimientos` (
  `id_movimientos` int NOT NULL AUTO_INCREMENT COMMENT 'PK Llave primaria',
  `codigo` int NOT NULL COMMENT 'FK Llave foránea de numero del documento de identidad ',
  `cedula` int NOT NULL,
  `zona` int NOT NULL COMMENT 'FK Zona de donde viene el activo',
  `ubicacion` int NOT NULL COMMENT 'FK Ubicación del activo',
  `motivo` varchar(50) NOT NULL COMMENT 'Nombre del motivo del movimiento',
  `fecha` date NOT NULL COMMENT 'Fecha del movimiento',
  PRIMARY KEY (`id_movimientos`),
  KEY `idzona` (`zona`),
  KEY `idubicacion` (`ubicacion`),
  KEY `codigo` (`codigo`),
  KEY `cedula` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `mov_movimientos`
--

INSERT INTO `mov_movimientos` (`id_movimientos`, `codigo`, `cedula`, `zona`, `ubicacion`, `motivo`, `fecha`) VALUES
(1, 206240186, 3003485, 1, 1, ' Recepción de cargo del responsable', '2023-11-16'),
(2, 201000222, 30034855, 3, 1, 'Adquisición del activo', '2023-11-11'),
(3, 201000222, 3003485, 2, 1, ' Recepción de cargo del responsable', '2023-11-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mov_ubicacion`
--

DROP TABLE IF EXISTS `mov_ubicacion`;
CREATE TABLE IF NOT EXISTS `mov_ubicacion` (
  `id_ubicacion` int NOT NULL AUTO_INCREMENT COMMENT 'PK Llave primaria',
  `sede` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Nombre de la sede',
  `direccion` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Dirección de la sede',
  PRIMARY KEY (`id_ubicacion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `mov_ubicacion`
--

INSERT INTO `mov_ubicacion` (`id_ubicacion`, `sede`, `direccion`) VALUES
(1, 'C.C. Rodeo', 'Av. Las Américas '),
(2, 'Deposito', 'd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mov_zona`
--

DROP TABLE IF EXISTS `mov_zona`;
CREATE TABLE IF NOT EXISTS `mov_zona` (
  `id_zona` int NOT NULL AUTO_INCREMENT COMMENT 'PK Llave primaria',
  `nombre` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Nombre de la zona',
  `direccion` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Dirección especifica ',
  PRIMARY KEY (`id_zona`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `mov_zona`
--

INSERT INTO `mov_zona` (`id_zona`, `nombre`, `direccion`) VALUES
(1, 'C.C. Rodeo', 'Av las americas'),
(2, 'Panamericana', 'Panamericana'),
(3, 'Comerciales', 'Mariano Picon'),
(4, 'Comerciales', 'Urdaneta'),
(5, 'Sur del lago', 'Sur');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resp_cargo`
--

DROP TABLE IF EXISTS `resp_cargo`;
CREATE TABLE IF NOT EXISTS `resp_cargo` (
  `id_cargo` int NOT NULL AUTO_INCREMENT COMMENT 'PK Llave primaria',
  `nombre_cargo` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Nombre del cargo del responsable',
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `resp_cargo`
--

INSERT INTO `resp_cargo` (`id_cargo`, `nombre_cargo`) VALUES
(1, 'Analista de base de datos'),
(2, 'Analista tecnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resp_condicion`
--

DROP TABLE IF EXISTS `resp_condicion`;
CREATE TABLE IF NOT EXISTS `resp_condicion` (
  `id_condicion` int NOT NULL AUTO_INCREMENT COMMENT 'PK Llave primaria',
  `nombre_condicion` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Nombre la condición del responsable ',
  PRIMARY KEY (`id_condicion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `resp_condicion`
--

INSERT INTO `resp_condicion` (`id_condicion`, `nombre_condicion`) VALUES
(1, 'Fijo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resp_deshabilitacion`
--

DROP TABLE IF EXISTS `resp_deshabilitacion`;
CREATE TABLE IF NOT EXISTS `resp_deshabilitacion` (
  `id_des` int NOT NULL AUTO_INCREMENT COMMENT 'PK Llave primaria',
  `cedula_resp` int NOT NULL COMMENT 'FK cedula del responsable',
  `fecha` datetime NOT NULL COMMENT 'Fecha de la deshabilitacion',
  `motivo` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Motivo de la deshabilitacion',
  PRIMARY KEY (`id_des`),
  KEY `cedula` (`cedula_resp`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `resp_deshabilitacion`
--

INSERT INTO `resp_deshabilitacion` (`id_des`, `cedula_resp`, `fecha`, `motivo`) VALUES
(22, 11466018, '2023-11-07 22:43:05', 'll'),
(23, 11466018, '2023-11-07 22:44:13', 'kk'),
(24, 11466018, '2023-11-07 22:48:03', 'sds'),
(25, 3003485, '2023-11-07 22:50:47', 'Por sapo'),
(31, 3003485, '2023-11-17 16:19:42', 'l');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resp_responsables`
--

DROP TABLE IF EXISTS `resp_responsables`;
CREATE TABLE IF NOT EXISTS `resp_responsables` (
  `cedula` int NOT NULL COMMENT 'PK Llave primaria numero del documento de identidad',
  `nombre` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Nombre del responsable',
  `apellido` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Apellido del responsable',
  `correo` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Correo del responsable',
  `telefono` varchar(12) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Numero telefonico del responsable',
  `condicion_resp` int NOT NULL COMMENT 'FK Llave foránea de la condición del responsables',
  `cargo_resp` int NOT NULL COMMENT 'FK Llave foránea del cargo del responsable',
  `gerencia` int NOT NULL COMMENT 'FK Llave foránea de la gerencia la cual pertenece el responsable',
  `division` int NOT NULL COMMENT 'FK Llave foránea de la division la cual pertenece el responsable',
  `estado` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Estado del responsable "activo" u "deshabilitado"',
  PRIMARY KEY (`cedula`),
  KEY `idcondicionresp` (`condicion_resp`),
  KEY `iddivision` (`division`),
  KEY `iddepartamento` (`gerencia`),
  KEY `cargo_resp` (`cargo_resp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `resp_responsables`
--

INSERT INTO `resp_responsables` (`cedula`, `nombre`, `apellido`, `correo`, `telefono`, `condicion_resp`, `cargo_resp`, `gerencia`, `division`, `estado`) VALUES
(3003485, 'juan', 'Medina', 'a@gmail.com', '02742633332', 1, 1, 15, 16, 1),
(11466018, 'eduardo jose', 'vicuña zambrano', 'eduvicuz@gmail.com', '04248964315', 1, 1, 4, 6, 1),
(30034855, 'juan', 'izquierdo', 'a@gmail.com', '04247270549', 1, 1, 16, 16, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` int NOT NULL COMMENT 'Usuario',
  `password` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'nombre del usuario',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
(1, 123, '123'),
(2, 30034851, 'admin');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `act_activos`
--
ALTER TABLE `act_activos`
  ADD CONSTRAINT `act_activos_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `act_tipo` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `condact` FOREIGN KEY (`condicion_act`) REFERENCES `act_condicion` (`id_activo_condicion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `marcaact` FOREIGN KEY (`marca`) REFERENCES `act_marca` (`id_marca`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `act_desincorporacion`
--
ALTER TABLE `act_desincorporacion`
  ADD CONSTRAINT `act_desincorporacion_ibfk_1` FOREIGN KEY (`codigo_activo`) REFERENCES `act_activos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `divisiones`
--
ALTER TABLE `divisiones`
  ADD CONSTRAINT `gerencia` FOREIGN KEY (`gerencia`) REFERENCES `gerencias` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `mov_detalles`
--
ALTER TABLE `mov_detalles`
  ADD CONSTRAINT `mov_detalles_ibfk_3` FOREIGN KEY (`cedula`) REFERENCES `resp_responsables` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mov_detalles_ibfk_4` FOREIGN KEY (`id_mov`) REFERENCES `mov_movimientos` (`id_movimientos`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `mov_movimientos`
--
ALTER TABLE `mov_movimientos`
  ADD CONSTRAINT `mov_movimientos_ibfk_2` FOREIGN KEY (`zona`) REFERENCES `mov_zona` (`id_zona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mov_movimientos_ibfk_3` FOREIGN KEY (`ubicacion`) REFERENCES `mov_ubicacion` (`id_ubicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mov_movimientos_ibfk_4` FOREIGN KEY (`codigo`) REFERENCES `act_activos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mov_movimientos_ibfk_6` FOREIGN KEY (`cedula`) REFERENCES `resp_responsables` (`cedula`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Filtros para la tabla `resp_deshabilitacion`
--
ALTER TABLE `resp_deshabilitacion`
  ADD CONSTRAINT `resp_deshabilitacion_ibfk_1` FOREIGN KEY (`cedula_resp`) REFERENCES `resp_responsables` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `resp_responsables`
--
ALTER TABLE `resp_responsables`
  ADD CONSTRAINT `resp_responsables_ibfk_1` FOREIGN KEY (`condicion_resp`) REFERENCES `resp_condicion` (`id_condicion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resp_responsables_ibfk_2` FOREIGN KEY (`cargo_resp`) REFERENCES `resp_cargo` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resp_responsables_ibfk_3` FOREIGN KEY (`division`) REFERENCES `divisiones` (`id_div`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resp_responsables_ibfk_4` FOREIGN KEY (`gerencia`) REFERENCES `gerencias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
