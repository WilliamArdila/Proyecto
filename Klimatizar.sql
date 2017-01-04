-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-12-2016 a las 21:23:00
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `klimatizar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afp`
--

CREATE TABLE `afp` (
  `idAFP` int(11) NOT NULL,
  `nombreAFP` varchar(45) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `afp`
--

INSERT INTO `afp` (`idAFP`, `nombreAFP`, `visibilidad`) VALUES
(1, 'Porvenir', 1),
(2, 'Proteccion', 1),
(3, 'Colfondos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arl`
--

CREATE TABLE `arl` (
  `idARL` int(11) NOT NULL,
  `nombreARL` varchar(45) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `arl`
--

INSERT INTO `arl` (`idARL`, `nombreARL`, `visibilidad`) VALUES
(1, 'Sura', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `codigoCargo` int(11) NOT NULL,
  `NombreCargo` varchar(45) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`codigoCargo`, `NombreCargo`, `Descripcion`, `visibilidad`) VALUES
(1, 'Gerente A/tiva y Financiera ', 'NULL', 1),
(2, 'Ingeniero de Proyectos', 'NULL', 1),
(3, 'Auxiliar de Refregeracion', 'NULL', 1),
(4, 'Auxiliar de Obra', 'NULL', 1),
(5, 'Tecnico Refrieracion', 'NULL', 1),
(6, 'Tecnico Refrigeracion', 'NULL', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `codigoCliente` int(11) NOT NULL,
  `nombreCliente` varchar(45) NOT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `telefono` varchar(30) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`codigoCliente`, `nombreCliente`, `direccion`, `telefono`, `visibilidad`) VALUES
(1, 'KLIMATIZAR COLOMBIA SAS', 'CRA 46 No.131-22 P3', '2592272/2592277 ', 1),
(2, 'RUGELES DURAN ARQUITECTOS', 'NULL', 'NULL', 1),
(3, 'COTEL S.A', 'carrera 49 102a -43', '6325990', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `Producto_codigoProducto` varchar(45) NOT NULL,
  `SolicitudDeMaterial_idCodigoSolicitud` int(11) NOT NULL,
  `Item` int(11) NOT NULL,
  `Cantidad` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Documento` varchar(30) NOT NULL,
  `NombreCompleto` varchar(45) NOT NULL,
  `Direccion` varchar(40) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `FechaNacimiento` date NOT NULL,
  `Cargo_codigoCargo` int(11) NOT NULL,
  `EPS_idEPS` int(11) NOT NULL,
  `ARL_idARL` int(11) NOT NULL,
  `AFP_idAFP` int(11) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Documento`, `NombreCompleto`, `Direccion`, `Telefono`, `Correo`, `FechaNacimiento`, `Cargo_codigoCargo`, `EPS_idEPS`, `ARL_idARL`, `AFP_idAFP`, `visibilidad`) VALUES
('1012410133', 'LOPEZ RICARDO', 'Calle 62B sur No. 87N-21 ', '7848377', 'jlcanchon@misena.edu.co', '1994-04-05', 1, 1, 1, 1, 1),
('1020831720', 'Jorge luis canchon espinosa', 'kr 6a n188 c36 int1', '1234', 'jlcanchon@misena.edu.co', '2016-12-26', 2, 1, 1, 1, 1),
('1022984148', 'AVILA DUARTE CRISTIAN EFREN', ' Cra 14T 170', '2674227', 'avila@gmail.com', '1993-02-08', 4, 1, 1, 1, 1),
('1074616890', 'PRIETO CRISTIAN YESID', ' Cra 1 No. 83-23 ', '3016799658', 'NULL', '1998-01-02', 4, 1, 1, 1, 1),
('1084576463', 'LOPEZ COLLAZOS DILBER ANDRES', ' Calle 23B # 97-18 ', '3019419', 'jlcanchon@misena.edu.co', '1987-09-16', 1, 1, 1, 1, 1),
('1111785903', 'MINOTTA RENTERIA JOHAN ANDRES', 'NULL', 'NULL', 'NULL', '1991-08-22', 5, 2, 1, 2, 1),
('15648017', 'RIVERO MIRANDA MAURICIO JOSE', ' Cra 79 D # 58 C -27 Sur ', '317 512 15 89', 'NULL', '1983-05-12', 5, 2, 1, 1, 1),
('39016339', 'GOMEZ ORTIZ NEYDIS', ' Cra. 53C # 134-29 Int. 6 Ap 303 ', '3014011', 'jlcanchon@misena.edu.co', '1973-12-28', 1, 4, 1, 2, 1),
('79780450', 'ROMERO VELA FLORESMIRO', ' Cra. 53C # 134-29 Int. 6 Ap 303 ', '3014011', 'NULL', '1974-06-30', 2, 2, 1, 3, 1),
('80052388', 'PARDO JIMENEZ HERNANDO ANDRES', ' Calle 147A No 50-83 ', '3033239', 'NULL', '1980-11-24', 2, 5, 1, 3, 1),
('80878336', 'PARDO BALLESTEROS DANIEL ORLANDO', ' Calle 95B Sur No. 14C-10 ', 'NULL', 'NULL', '1983-12-13', 5, 3, 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `idEPS` int(11) NOT NULL,
  `nombreEPS` varchar(45) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`idEPS`, `nombreEPS`, `visibilidad`) VALUES
(1, 'Cafesalud', 1),
(2, 'Compensar', 1),
(3, 'Coomeva', 1),
(4, 'Eps Sanitas', 1),
(5, 'Famisanar', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichatecnica`
--

CREATE TABLE `fichatecnica` (
  `codigoFicha` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `duracion` varchar(45) NOT NULL,
  `valorTotalProyecto` double NOT NULL,
  `Obra_codigoObra` varchar(15) NOT NULL,
  `Empleado_Documento` varchar(30) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fichatecnica`
--

INSERT INTO `fichatecnica` (`codigoFicha`, `Descripcion`, `fechaInicio`, `fechaFin`, `duracion`, `valorTotalProyecto`, `Obra_codigoObra`, `Empleado_Documento`, `visibilidad`) VALUES
(1, 'INSTALACION SISTEMA AIRE ACONDICIONADO', '2015-08-01', '2015-10-01', '2 meses', 20000000, '15_137', '39016339', 1),
(2, 'INSTALACION SISTEMA AIRE ACONDICIONADO', '2016-06-16', '2016-10-16', '4 meses', 30000000, '16_316', '39016339', 1),
(3, 'SUMINISTRO E INSTALACION SISTEMA AIRE ACONDICIONADO', '2014-02-16', '2014-04-16', '2 meses', 25000000, '16_333', '39016339', 1),
(4, 'SUMINISTRO E INSTALACION SISTEMA AIRE ACONDICIONADO', '2015-03-22', '2015-06-22', '3 meses', 15000000, '16_229', '39016339', 1),
(5, 'INSTALACION SISTEMA AIRE ACONDICIONADO', '2016-08-16', '2016-10-16', '2 meses', 18000000, '16_233', '39016339', 1),
(6, 'INSTALACION SISTEMA AIRE ACONDICIONADO', '2016-10-06', '2016-12-06', '2 meses', 32000000, '16_232', '39016339', 1),
(7, 'INSTALACION SISTEMA AIRE ACONDICIONADO', '2016-12-19', '2017-01-19', '1 mes', 32000000, '16_333', '39016339', 1),
(8, 'SUMINISTRO E INSTALACION SISTEMA AIRE ACONDICIONADO', '2017-02-20', '2017-04-20', '2 meses', 20000000, '16_231', '39016339', 1),
(9, 'SUMINISTRO E INSTALACION SISTEMA AIRE ACONDICIONADO', '2017-04-16', '2017-07-16', '3 meses', 23900000, '16_230', '39016339', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movinventario`
--

CREATE TABLE `movinventario` (
  `idTab_inventario` int(11) NOT NULL,
  `existencia` varchar(45) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipoMovimiento` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `documentoEmple` varchar(45) NOT NULL,
  `remisionNO` varchar(45) NOT NULL,
  `Detalle_Producto_codigoProducto` varchar(45) NOT NULL,
  `Detalle_SolicitudDeMaterial_idCodigoSolicitud` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE `obra` (
  `codigoObra` varchar(15) NOT NULL,
  `contratante` varchar(45) NOT NULL,
  `nombreObra` varchar(45) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`codigoObra`, `contratante`, `nombreObra`, `visibilidad`) VALUES
('', '', '', 1),
('15_137', 'OMEGA INGENIEROS', 'HOTEL CITY EXPRESS', 1),
('16_229', 'UNIVERSIDAD JAVERIANA', 'CAMPUS UNVIERSITARIO', 1),
('16_230', 'NULL', 'BRISSA ATLANTIS', 1),
('16_231', 'NULL', 'BRISSA ATLANTIS CLOSET DE LINOS', 1),
('16_232', 'NULL', 'BRISSA TITAN', 1),
('16_233', 'NULL', 'MINISTERIO DEL INTERIOR	', 1),
('16_316', 'TDI SISTEMAS', 'CAV CLARO BMANGA', 1),
('16_333', 'RUGELES DURAN ARQUITECTOS', 'BANCO PICHINCHA B/QUILA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordendecompra`
--

CREATE TABLE `ordendecompra` (
  `idCodigoOrden` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Item` varchar(30) NOT NULL,
  `subTotal` double NOT NULL,
  `valorTotal` double NOT NULL,
  `IVA` double NOT NULL,
  `Cliente_codigoCliente` int(11) NOT NULL,
  `SolicitudDeMaterial_idCodigoSolicitud` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigoProducto` varchar(45) NOT NULL,
  `nombreProducto` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidad` varchar(45) NOT NULL,
  `valorUnitario` double NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigoProducto`, `nombreProducto`, `cantidad`, `unidad`, `valorUnitario`, `visibilidad`) VALUES
('1', 'CABLE AWG No. 14 THHN (VARIOS COLORES) VIENE POR ROLLOS DE 100 MTS 7 HILOS ', 1, 'm', 1200, 1),
('10', '"CODOS PVC CONDUIT DE 1/2"""', 3, 'ML', 1200, 1),
('101', 'JORGE', 10, 'UND', 12345, 1),
('11', '"CODOS PVC CONDUIT DE 3/4"""', 4, 'ML', 1200, 1),
('12', '"ADAPTADOR TERMINAL PVC CONDUIT DE 1/2"""', 5, 'UND', 1200, 1),
('13', '"ADAPTADOR TERMINAL PVC CONDUIT DE 3/4"""', 6, 'UND', 1200, 1),
('14', 'SOLDADURA LIQUIDA PVC CONDUIT x 1/4', 4, 'UND', 1200, 1),
('15', '"LIMPIADOR PVC x 1/4"""', 3, 'UND', 1200, 1),
('16', '"CORAZA AMERICANA DE 1/2"""', 2, 'UND', 1200, 1),
('17', '"CONECTOR CURVO PARA CORAZA AMERICANA DE 1/2"" "', 1, 'UND', 1200, 1),
('18', '"CONECTOR RECTO PARA CORAZA AMERICANA DE 1/2"" "', 2, 'UND', 1200, 1),
('19', 'TERMINAL TIPO OJO PARA CABLE No. 16-14', 3, 'UND', 1200, 1),
('2', 'CABLE AWG No. 16 THHN,', 1, 'm', 1200, 1),
('20', 'medio filtrante merk 7', 4, 'UND', 1200, 1),
('21', 'desindrustante industrial para serpetin', 5, 'UND', 1200, 1),
('22', 'Polifusor tuber', 6, 'UND', 1200, 1),
('23', 'Filtro metalico de 18\'\' x 19\'\' x 1\'\'', 7, 'UND', 1200, 1),
('24', 'TUBERIA COBRE RIGIDA 1/4 \'\'', 5, 'm', 1200, 1),
('25', 'TUBERIA COBRE RIGIDA 3/8\'\'', 3, 'm', 1200, 1),
('26', 'TUBERIA COBRE RIGIDA 1/2 \'\'', 2, 'm', 1200, 1),
('27', 'TUBERIA COBRE RIGIDA 5/8 \'\'', 2, 'm', 1200, 1),
('28', 'UNION COBRE 1/4 \'\'', 1, 'UND', 1200, 1),
('29', 'UNION COBRE 3/8\'\'', 2, 'UND', 1200, 1),
('3', 'AMARRES PLASTICOS NEGROS X 20 CMS ', 1, 'UND', 1200, 1),
('30', 'UNION COBRE 1/2\'\'', 2, 'UND', 1200, 1),
('31', 'UNION COBRE 5/8\'\'', 4, 'UND', 1200, 1),
('32', 'CODO COBRE 1/4 \'\'', 3, 'UND', 1200, 1),
('33', 'CODO COBRE 3/8 \'\'', 4, 'UND', 1200, 1),
('34', 'CODO COBRE 1/2 \'\'', 4, 'UND', 1200, 1),
('35', 'CODO COBRE 5/8 \'\'', 4, 'UND', 1200, 1),
('36', 'SEMICODO COBRE 1/4 \'\'', 5, 'UND', 1200, 1),
('37', 'SEMICODO COBRE 3/8 \'\'', 2, 'UND', 1200, 1),
('38', 'SEMICODO COBRE 1/2 \'\'', 1, 'UND', 1200, 1),
('39', 'SEMICODO COBRE 5/8 \'\'', 2, 'UND', 1200, 1),
('4', '"TUBERIA PVC CONDUIT DE 1/2"""', 1, 'm', 1200, 1),
('40', 'VARILLAS DE SOLDADURA DE PLATA', 3, 'm', 1200, 1),
('41', 'RUBATEX DE 1/4\'\'', 4, 'UND', 1200, 1),
('42', 'RUBATEX DE 3/8\'\'', 5, 'UND', 1200, 1),
('43', 'RUBATEX DE 1/2\'\'', 6, 'UND', 1200, 1),
('44', 'RUBATEX DE 5/8\'\'', 3, 'UND', 1200, 1),
('5', '"TUBERIA PVC CONDUIT DE 3/4"""', 3, '', 1200, 1),
('555', 'jorge', 2, 'm', 456, 1),
('6', 'CAJAS DE PASO METALICA O PLASTICA DE 15CMSX15CMSX10CMS', 3, 'UND', 1200, 1),
('7', 'CAJAS DE PASO METALICA O PLASTICA DE 20CMSX20CMSX10CMS', 2, 'UND', 1200, 1),
('8', '"UNION PVC CONDUIT DE 1/2"""', 1, 'ML', 1200, 1),
('9', '"UNION PVC CONDUIT DE 3/4"""', 2, 'ML', 1200, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `nombreProveedor` varchar(45) NOT NULL,
  `NIT` varchar(35) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `contactoVenta` varchar(45) NOT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `celular` varchar(30) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`nombreProveedor`, `NIT`, `direccion`, `telefono`, `contactoVenta`, `correo`, `celular`, `visibilidad`) VALUES
('PIPECO S.A.', '830510216-3', 'Av (Cl) 80 69-70 Bdg 35', '3116439', 'JOSE ACEVEDO', 'ventas@pipeco.com.co', 'NULL', 1),
('TUVALREP S.A.S', '900013663-4', 'Cra. 29 B # 79 -38', '3713386', 'EDITH ORTIZ', 'ventas6@tuvalrep.com.co', '311-4856922', 1),
('TRS PARTES SA', '900023663-4', 'Cra. 29 B # 79 -38', '805 0163 /805 0169', 'ING HUGO PRIETO', 'hugo.prieto@trspartes.com', '311-2236262', 1),
('TORNIEXITO LTDA', '900242806-6', 'Avenida 27#29-18 SUR', 'NULL', 'NULL', 'torniexito@hotmail.com  ', '3184870777', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor_producto`
--

CREATE TABLE `proveedor_producto` (
  `Producto_codigoProducto` varchar(45) NOT NULL,
  `Proveedor_NIT` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor_producto`
--

INSERT INTO `proveedor_producto` (`Producto_codigoProducto`, `Proveedor_NIT`) VALUES
('41', '830510216-3'),
('42', '830510216-3'),
('43', '830510216-3'),
('44', '830510216-3'),
('1', '900013663-4'),
('101', '900013663-4'),
('24', '900013663-4'),
('25', '900013663-4'),
('28', '900013663-4'),
('29', '900013663-4'),
('30', '900013663-4'),
('31', '900013663-4'),
('32', '900013663-4'),
('33', '900013663-4'),
('34', '900013663-4'),
('35', '900013663-4'),
('40', '900013663-4'),
('101', '900023663-4'),
('26', '900023663-4'),
('27', '900023663-4'),
('36', '900242806-6'),
('37', '900242806-6'),
('38', '900242806-6'),
('39', '900242806-6'),
('41', '900242806-6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remisionmaterial`
--

CREATE TABLE `remisionmaterial` (
  `idCodigoRemision` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Item` varchar(30) NOT NULL,
  `codigoProducto` int(11) NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioUnitario` double NOT NULL,
  `valorTotal` double NOT NULL,
  `entregadoPor` varchar(45) NOT NULL,
  `recibidoPor` varchar(45) DEFAULT NULL,
  `OrdenDeCompra_idCodigoOrden` int(11) NOT NULL,
  `Cliente_codigoCliente` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicituddematerial`
--

CREATE TABLE `solicituddematerial` (
  `idCodigoSolicitud` int(11) NOT NULL,
  `observaciones` varchar(45) NOT NULL,
  `Cliente_codigoCliente` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FichaTecnica_codigoFicha` int(11) NOT NULL,
  `FichaTecnica_Obra_codigoObra` varchar(15) NOT NULL,
  `FichaTecnica_Empleado_Documento` varchar(30) NOT NULL,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `solicituddematerial`
--

INSERT INTO `solicituddematerial` (`idCodigoSolicitud`, `observaciones`, `Cliente_codigoCliente`, `fecha`, `FichaTecnica_codigoFicha`, `FichaTecnica_Obra_codigoObra`, `FichaTecnica_Empleado_Documento`, `visibilidad`) VALUES
(34, 'NULL', 1, '2016-12-06 22:34:34', 0, '15_137', '80052388', 1),
(35, 'cotizar en airtek', 1, '2016-12-06 22:34:34', 0, '16_230', '80052388', 1),
(36, 'cotizar en airtek', 1, '2016-12-06 22:34:34', 0, '16_232', '80052388', 1),
(37, 'NULL', 1, '2016-12-06 22:34:34', 0, '16_232', '80052388', 1),
(38, 'NULL', 1, '2016-12-06 22:34:34', 0, '16_333', '80052388', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contrasena` varchar(80) DEFAULT NULL,
  `Empleado_Documento` varchar(30) NOT NULL,
  `time` datetime DEFAULT CURRENT_TIMESTAMP,
  `visibilidad` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Usuario`, `Contrasena`, `Empleado_Documento`, `time`, `visibilidad`) VALUES
(1, '1020831720', '$2y$10$fDnYh5l6fUjido.FQpFXrevxd.Z5ns6c1M9m6SwduJ.Jn.4XYZfMi', '1020831720', '2016-12-26 22:31:52', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afp`
--
ALTER TABLE `afp`
  ADD PRIMARY KEY (`idAFP`);

--
-- Indices de la tabla `arl`
--
ALTER TABLE `arl`
  ADD PRIMARY KEY (`idARL`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`codigoCargo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigoCliente`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`Item`),
  ADD KEY `Producto_codigoProducto` (`Producto_codigoProducto`),
  ADD KEY `SolicitudDeMaterial_idCodigoSolicitud` (`SolicitudDeMaterial_idCodigoSolicitud`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Documento`),
  ADD KEY `Cargo_codigoCargo` (`Cargo_codigoCargo`),
  ADD KEY `EPS_idEPS` (`EPS_idEPS`),
  ADD KEY `ARL_idARL` (`ARL_idARL`),
  ADD KEY `AFP_idAFP` (`AFP_idAFP`);

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`idEPS`);

--
-- Indices de la tabla `fichatecnica`
--
ALTER TABLE `fichatecnica`
  ADD PRIMARY KEY (`codigoFicha`),
  ADD KEY `Empleado_Documento` (`Empleado_Documento`),
  ADD KEY `Obra_codigoObra` (`Obra_codigoObra`);

--
-- Indices de la tabla `movinventario`
--
ALTER TABLE `movinventario`
  ADD PRIMARY KEY (`idTab_inventario`),
  ADD KEY `Detalle_Producto_codigoProducto` (`Detalle_Producto_codigoProducto`),
  ADD KEY `Detalle_SolicitudDeMaterial_idCodigoSolicitud` (`Detalle_SolicitudDeMaterial_idCodigoSolicitud`);

--
-- Indices de la tabla `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`codigoObra`);

--
-- Indices de la tabla `ordendecompra`
--
ALTER TABLE `ordendecompra`
  ADD PRIMARY KEY (`idCodigoOrden`),
  ADD KEY `Cliente_codigoCliente` (`Cliente_codigoCliente`),
  ADD KEY `SolicitudDeMaterial_idCodigoSolicitud` (`SolicitudDeMaterial_idCodigoSolicitud`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigoProducto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`NIT`);

--
-- Indices de la tabla `proveedor_producto`
--
ALTER TABLE `proveedor_producto`
  ADD PRIMARY KEY (`Producto_codigoProducto`,`Proveedor_NIT`),
  ADD KEY `fk_proveedor_producto_Proveedor1_idx` (`Proveedor_NIT`);

--
-- Indices de la tabla `remisionmaterial`
--
ALTER TABLE `remisionmaterial`
  ADD PRIMARY KEY (`idCodigoRemision`),
  ADD KEY `OrdenDeCompra_idCodigoOrden` (`OrdenDeCompra_idCodigoOrden`),
  ADD KEY `Cliente_codigoCliente` (`Cliente_codigoCliente`);

--
-- Indices de la tabla `solicituddematerial`
--
ALTER TABLE `solicituddematerial`
  ADD PRIMARY KEY (`idCodigoSolicitud`),
  ADD KEY `Cliente_codigoCliente` (`Cliente_codigoCliente`),
  ADD KEY `FichaTecnica_codigoFicha` (`FichaTecnica_codigoFicha`),
  ADD KEY `FichaTecnica_Obra_codigoObra` (`FichaTecnica_Obra_codigoObra`),
  ADD KEY `FichaTecnica_Empleado_Documento` (`FichaTecnica_Empleado_Documento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `Empleado_Documento` (`Empleado_Documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `afp`
--
ALTER TABLE `afp`
  MODIFY `idAFP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `arl`
--
ALTER TABLE `arl`
  MODIFY `idARL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `codigoCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigoCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `Item` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eps`
--
ALTER TABLE `eps`
  MODIFY `idEPS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `fichatecnica`
--
ALTER TABLE `fichatecnica`
  MODIFY `codigoFicha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `solicituddematerial`
--
ALTER TABLE `solicituddematerial`
  MODIFY `idCodigoSolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`Cargo_codigoCargo`) REFERENCES `cargo` (`codigoCargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`EPS_idEPS`) REFERENCES `eps` (`idEPS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `empleado_ibfk_3` FOREIGN KEY (`ARL_idARL`) REFERENCES `arl` (`idARL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `empleado_ibfk_4` FOREIGN KEY (`AFP_idAFP`) REFERENCES `afp` (`idAFP`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fichatecnica`
--
ALTER TABLE `fichatecnica`
  ADD CONSTRAINT `fichatecnica_ibfk_1` FOREIGN KEY (`Empleado_Documento`) REFERENCES `empleado` (`Documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fichatecnica_ibfk_2` FOREIGN KEY (`Obra_codigoObra`) REFERENCES `obra` (`codigoObra`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proveedor_producto`
--
ALTER TABLE `proveedor_producto`
  ADD CONSTRAINT `fk_proveedor_producto_Producto1` FOREIGN KEY (`Producto_codigoProducto`) REFERENCES `producto` (`codigoProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proveedor_producto_Proveedor1` FOREIGN KEY (`Proveedor_NIT`) REFERENCES `proveedor` (`NIT`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Empleado_Documento`) REFERENCES `empleado` (`Documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
