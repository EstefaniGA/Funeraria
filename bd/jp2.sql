-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2017 a las 00:29:40
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `jp2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoyo`
--

CREATE TABLE IF NOT EXISTS `apoyo` (
  `idApoyo` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Solicitantes_idSolicitantes` int(11) NOT NULL,
  `Sucursal_idSucursal` int(11) NOT NULL,
  `PersonaAtendio` varchar(45) NOT NULL,
  `Estatus` varchar(3) DEFAULT 'si'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiarios`
--

CREATE TABLE IF NOT EXISTS `beneficiarios` (
  `idBeneficiarios` int(11) NOT NULL,
  `NombreB` varchar(40) DEFAULT NULL,
  `ApellidoPa` varchar(30) DEFAULT NULL,
  `ApellidoMa` varchar(30) DEFAULT NULL,
  `Apoyo_idApoyo` int(11) NOT NULL,
  `Tipo_idTipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad`
--

CREATE TABLE IF NOT EXISTS `comunidad` (
  `idComunidad` int(11) NOT NULL,
  `NombreC` varchar(45) NOT NULL,
  `Estatus` varchar(3) DEFAULT 'si'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE IF NOT EXISTS `orden` (
  `Folio` int(11) NOT NULL,
  `FechaOrden` date NOT NULL,
  `Sucursal_idSucursal` int(11) NOT NULL,
  `PersonaAtendio` varchar(45) NOT NULL,
  `LugarDifuncion` varchar(45) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora` varchar(10) DEFAULT NULL,
  `Causa` varchar(45) DEFAULT NULL,
  `LugarVelacion` varchar(45) DEFAULT NULL,
  `Panteon` varchar(45) DEFAULT NULL,
  `HoraMisa` varchar(10) DEFAULT NULL,
  `Ubicacion` varchar(45) DEFAULT NULL,
  `FechaMisa` varchar(45) DEFAULT NULL,
  `Iglesia` varchar(45) DEFAULT NULL,
  `Perpetuidad` varchar(3) DEFAULT NULL,
  `Temporal` varchar(20) DEFAULT NULL,
  `HoraSepelio` varchar(20) DEFAULT NULL,
  `Ataud` int(11) DEFAULT NULL,
  `ModeloAtaud` varchar(45) DEFAULT NULL,
  `Urna` int(11) DEFAULT NULL,
  `ModeloUrna` varchar(45) DEFAULT NULL,
  `Capillas` int(11) DEFAULT NULL,
  `Cremacion` int(11) DEFAULT NULL,
  `Embalsamado` int(11) DEFAULT NULL,
  `OtrosGastos` int(11) DEFAULT NULL,
  `Adomicilio` int(11) DEFAULT NULL,
  `LugarCremacion` varchar(45) DEFAULT NULL,
  `Carroza` int(11) DEFAULT NULL,
  `Traslado` int(11) DEFAULT NULL,
  `SubTotal` int(11) NOT NULL,
  `Impuestos` int(11) DEFAULT NULL,
  `CertificadoMedico` varchar(45) DEFAULT NULL,
  `Otros` int(11) DEFAULT NULL,
  `Observaciones` varchar(45) DEFAULT NULL,
  `Total` int(11) NOT NULL,
  `Solicitantes_idSolicitantes` int(11) NOT NULL,
  `NombreFinado` varchar(45) DEFAULT NULL,
  `ApellidoFinPa` varchar(30) DEFAULT NULL,
  `ApellidoFinMa` varchar(30) DEFAULT NULL,
  `DomicilioFinado` varchar(45) DEFAULT NULL,
  `NumeroFinado` varchar(10) DEFAULT NULL,
  `Nacionalidad` varchar(45) DEFAULT NULL,
  `CiudadFinado` varchar(45) DEFAULT NULL,
  `ColoniaFinado` varchar(45) DEFAULT NULL,
  `Ocupacion` varchar(30) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `EstadoCivil` varchar(20) DEFAULT NULL,
  `DerechoHabiente` varchar(45) DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Escolaridad` varchar(30) DEFAULT NULL,
  `Sexo` varchar(6) DEFAULT NULL,
  `NombreFinExhumar` varchar(45) DEFAULT NULL,
  `ApellidoPaterno` varchar(30) DEFAULT NULL,
  `ApellidoMaterno` varchar(30) DEFAULT NULL,
  `FechaDifuncionExhumar` date DEFAULT NULL,
  `Restante` int(11) DEFAULT NULL,
  `Estatus` varchar(3) DEFAULT 'si',
  `Parentesco` varchar(45) DEFAULT NULL,
  `ApoyoPert` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenbeneficiarios`
--

CREATE TABLE IF NOT EXISTS `ordenbeneficiarios` (
  `OrdenServicio_Folio` int(11) NOT NULL,
  `OrdenServicio_Sucursal_idSucursal` int(11) NOT NULL,
  `Beneficiarios_idBeneficiarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `idPagos` int(11) NOT NULL,
  `NoRecibo` varchar(20) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Fecha` date NOT NULL,
  `OrdenServicio_Folio` int(11) NOT NULL,
  `OrdenServicio_Sucursal_idSucursal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitantes`
--

CREATE TABLE IF NOT EXISTS `solicitantes` (
  `idSolicitantes` int(11) NOT NULL,
  `NombreSolicitante` varchar(45) NOT NULL,
  `ApellidoSolPa` varchar(30) NOT NULL,
  `ApellidoSolMa` varchar(30) NOT NULL,
  `DomicilioSolicitante` varchar(45) NOT NULL,
  `NumeroSolicitante` varchar(10) DEFAULT NULL,
  `ColoniaSolicitante` varchar(45) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `EstadoCivilSolicitante` varchar(45) DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Estatus` varchar(3) DEFAULT 'si',
  `Comunidad_idComunidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE IF NOT EXISTS `sucursal` (
  `idSucursal` int(11) NOT NULL,
  `NombreS` varchar(45) NOT NULL,
  `Seleccionada` varchar(1) DEFAULT NULL,
  `Estatus` varchar(3) DEFAULT 'si'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `idTipo` int(11) NOT NULL,
  `NombreT` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`idTipo`, `NombreT`) VALUES
(1, 'Padre'),
(2, 'Madre'),
(3, 'Conyugue'),
(4, 'Suegro'),
(5, 'Suegra'),
(6, 'Hijo soltero 1'),
(7, 'Hijo soltero 2'),
(8, 'Hijo soltero 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Contraseña` varchar(45) DEFAULT NULL,
  `Privilegios` varchar(45) DEFAULT NULL,
  `Estatus` varchar(3) DEFAULT 'si'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `Nombre`, `Contraseña`, `Privilegios`, `Estatus`) VALUES
(1, 'root', 'root', '0', 'si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apoyo`
--
ALTER TABLE `apoyo`
  ADD PRIMARY KEY (`idApoyo`,`Solicitantes_idSolicitantes`,`Sucursal_idSucursal`), ADD KEY `fk_Apoyo_Solicitantes1_idx` (`Solicitantes_idSolicitantes`), ADD KEY `fk_Apoyo_Sucursal1_idx` (`Sucursal_idSucursal`);

--
-- Indices de la tabla `beneficiarios`
--
ALTER TABLE `beneficiarios`
  ADD PRIMARY KEY (`idBeneficiarios`,`Apoyo_idApoyo`,`Tipo_idTipo`), ADD KEY `fk_Beneficiarios_Apoyo1_idx` (`Apoyo_idApoyo`), ADD KEY `fk_Beneficiarios_Tipo1_idx` (`Tipo_idTipo`);

--
-- Indices de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  ADD PRIMARY KEY (`idComunidad`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`Folio`,`Sucursal_idSucursal`,`Solicitantes_idSolicitantes`), ADD KEY `fk_OrdenServicio_Sucursal_idx` (`Sucursal_idSucursal`), ADD KEY `fk_Orden_Solicitantes1_idx` (`Solicitantes_idSolicitantes`);

--
-- Indices de la tabla `ordenbeneficiarios`
--
ALTER TABLE `ordenbeneficiarios`
  ADD PRIMARY KEY (`OrdenServicio_Folio`,`OrdenServicio_Sucursal_idSucursal`,`Beneficiarios_idBeneficiarios`), ADD KEY `fk_OrdenServicio_has_Beneficiarios_Beneficiarios1_idx` (`Beneficiarios_idBeneficiarios`), ADD KEY `fk_OrdenServicio_has_Beneficiarios_OrdenServicio1_idx` (`OrdenServicio_Folio`,`OrdenServicio_Sucursal_idSucursal`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`idPagos`,`OrdenServicio_Sucursal_idSucursal`), ADD KEY `fk_Pagos_OrdenServicio1_idx` (`OrdenServicio_Folio`), ADD KEY `fk_Pagos_Sucursal1_idx` (`OrdenServicio_Sucursal_idSucursal`);

--
-- Indices de la tabla `solicitantes`
--
ALTER TABLE `solicitantes`
  ADD PRIMARY KEY (`idSolicitantes`,`Comunidad_idComunidad`), ADD KEY `fk_Solicitantes_Comunidad1_idx` (`Comunidad_idComunidad`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`idSucursal`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apoyo`
--
ALTER TABLE `apoyo`
  MODIFY `idApoyo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `beneficiarios`
--
ALTER TABLE `beneficiarios`
  MODIFY `idBeneficiarios` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  MODIFY `idComunidad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `Folio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `idPagos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `solicitantes`
--
ALTER TABLE `solicitantes`
  MODIFY `idSolicitantes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `idSucursal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apoyo`
--
ALTER TABLE `apoyo`
ADD CONSTRAINT `fk_Apoyo_Solicitantes1` FOREIGN KEY (`Solicitantes_idSolicitantes`) REFERENCES `solicitantes` (`idSolicitantes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Apoyo_Sucursal1` FOREIGN KEY (`Sucursal_idSucursal`) REFERENCES `sucursal` (`idSucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `beneficiarios`
--
ALTER TABLE `beneficiarios`
ADD CONSTRAINT `fk_Beneficiarios_Apoyo1` FOREIGN KEY (`Apoyo_idApoyo`) REFERENCES `apoyo` (`idApoyo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Beneficiarios_Tipo1` FOREIGN KEY (`Tipo_idTipo`) REFERENCES `tipo` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
ADD CONSTRAINT `fk_OrdenServicio_Sucursal` FOREIGN KEY (`Sucursal_idSucursal`) REFERENCES `sucursal` (`idSucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Orden_Solicitantes1` FOREIGN KEY (`Solicitantes_idSolicitantes`) REFERENCES `solicitantes` (`idSolicitantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ordenbeneficiarios`
--
ALTER TABLE `ordenbeneficiarios`
ADD CONSTRAINT `fk_OrdenServicio_has_Beneficiarios_Beneficiarios1` FOREIGN KEY (`Beneficiarios_idBeneficiarios`) REFERENCES `beneficiarios` (`idBeneficiarios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_OrdenServicio_has_Beneficiarios_OrdenServicio1` FOREIGN KEY (`OrdenServicio_Folio`, `OrdenServicio_Sucursal_idSucursal`) REFERENCES `orden` (`Folio`, `Sucursal_idSucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
ADD CONSTRAINT `fk_Pagos_OrdenServicio1` FOREIGN KEY (`OrdenServicio_Folio`) REFERENCES `orden` (`Folio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Pagos_Sucursal1` FOREIGN KEY (`OrdenServicio_Sucursal_idSucursal`) REFERENCES `sucursal` (`idSucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitantes`
--
ALTER TABLE `solicitantes`
ADD CONSTRAINT `fk_Solicitantes_Comunidad1` FOREIGN KEY (`Comunidad_idComunidad`) REFERENCES `comunidad` (`idComunidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
