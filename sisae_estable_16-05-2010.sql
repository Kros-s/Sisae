-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-05-2010 a las 14:10:32
-- Versión del servidor: 5.1.36
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sisae`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesoria`
--

CREATE TABLE IF NOT EXISTS `asesoria` (
  `idAsesorMateria` int(11) NOT NULL AUTO_INCREMENT,
  `idAsesor` varchar(50) NOT NULL,
  `IdAlumno` varchar(50) NOT NULL,
  `Materia` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `Dia` varchar(200) NOT NULL,
  PRIMARY KEY (`idAsesorMateria`,`idAsesor`,`IdAlumno`,`status`),
  KEY `status` (`status`),
  KEY `idAsesor` (`idAsesor`),
  KEY `IdAlumno` (`IdAlumno`),
  KEY `Dia` (`Dia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcar la base de datos para la tabla `asesoria`
--

INSERT INTO `asesoria` (`idAsesorMateria`, `idAsesor`, `IdAlumno`, `Materia`, `status`, `Dia`) VALUES
(6, 'Gato', 'marko', 'Quimica', 'ACTIVA', 'Lunes 13:00:00 14:00:00'),
(7, 'Lunita', 'marko', 'Geometria y Trigonometria', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(8, 'Gina', 'marko', 'Dibujo Tecnico', 'ACTIVA', 'Miercoles 14:00:00 15:00:00'),
(9, 'Antonio', 'marko', 'Programacion', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(10, 'Gato', 'marko', 'Programacion', 'ACTIVA', 'Lunes 15:00:00 16:00:00'),
(11, 'Antonio', 'marko', 'Programacion', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(12, 'Gina', 'marko', 'Dibujo Tecnico', 'ACTIVA', 'Miercoles 14:00:00 15:00:00'),
(13, 'Isa', 'marko', 'Quimica', 'ACTIVA', 'Lunes 15:00:00 16:00:00'),
(14, 'Wero', 'marko', 'Quimica', 'ACTIVA', 'Martes 12:00:00 13:00:00'),
(15, 'Antonio', 'marko', 'Programacion', 'ACTIVA', 'Viernes 13:00:00 14:00:00'),
(16, 'Antonio', 'marko', 'Programacion', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(17, 'Antonio', 'marko', 'Programacion', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(18, 'Victor', 'marko', 'Geometria y Trigonometria', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(19, 'Gina', 'marko', 'Dibujo Tecnico', 'ACTIVA', 'Jueves 09:00:00 10:00:00'),
(20, 'Gato', 'marko', 'Quimica', 'ACTIVA', 'Lunes 13:00:00 14:00:00'),
(21, 'Lunita', 'marko', 'Geometria y Trigonometria', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(22, 'Antonio', 'marko', 'Programacion', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(23, 'Isa', 'max', 'Quimica', 'ACTIVA', 'Lunes 15:00:00 16:00:00'),
(24, 'Lunita', 'max', 'Geometria y Trigonometria', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(25, 'Wences', 'max', 'Ingles', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(26, 'Gato', 'max', 'Programacion', 'ACTIVA', 'Lunes 15:00:00 16:00:00'),
(27, 'Antonio', 'max', 'Programacion', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(28, 'Gato', 'max', 'Quimica', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(29, 'Isa', 'maery', 'Quimica', 'ACTIVA', 'Lunes 15:00:00 16:00:00'),
(30, 'Wences', 'maery', 'Ingles', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(31, 'Antonio', 'max', 'Programacion', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(32, 'Wences', 'max', 'Ingles', 'ACTIVA', 'Lunes 14:00:00 15:00:00'),
(33, 'Antonio', 'max', 'Programacion', 'ACTIVA', 'Lunes 14:00:00 15:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesorusuario`
--

CREATE TABLE IF NOT EXISTS `asesorusuario` (
  `idAsesor` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Paterno` varchar(50) DEFAULT NULL,
  `Materno` varchar(50) DEFAULT NULL,
  `Boleta` varchar(50) DEFAULT NULL,
  `clave` varchar(200) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`idAsesor`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `asesorusuario`
--

INSERT INTO `asesorusuario` (`idAsesor`, `Nombres`, `Paterno`, `Materno`, `Boleta`, `clave`, `correo`, `status`) VALUES
('Abel', 'Abel', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Antonio', 'Antonio', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Darky', 'Giovanna', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Ely', 'Ely', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Gato', 'Omar', 'Rodriguez', 'Diaz', '2008081286', '490e3145c1cd9e4aa9b9ca2d6ec782c8', 'mago_1992j@hotmail.com', 'ACTIVE'),
('Gina', 'Gina', 'Rojas', 'Avila', '2008080989', '490e3145c1cd9e4aa9b9ca2d6ec782c8', 'x.cosa@hotmail.com', 'ACTIVE'),
('Isa', 'Isabel', 'Morales', NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Ivan', 'Ivan', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Juan', 'Juan', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Lalo', 'Eduardo', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Lunita', 'Cynthia', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Mariana', 'Mariana', 'Vargas', 'Dominguez', '2008081146', '490e3145c1cd9e4aa9b9ca2d6ec782c8', 'pancakexx_@hotmail.com', 'ACTIVE'),
('mau', 'mau', 'm', 'm', '2', 'e3d0cd173a3342f1d2119cc5bce5d1d4', 'm', 'ACTIVE'),
('maun', 'n', 'n', 'n', 'n', '7b8b965ad4bca0e41ab51de7b31363a1', 'n', 'ACTIVE'),
('Miguel', 'Miguel', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Miriam', 'Miriam', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Nely', 'Nely', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Osvaldo', 'Osvaldo', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Paola', 'Paola', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Paty', 'Paty', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Pity', 'Gabriel', 'Solis', 'Velazquez', '2008081094', '490e3145c1cd9e4aa9b9ca2d6ec782c8', 'gabriel_gs20@hotmail.com', 'EXPULSADO'),
('pu', 'pu', 'p', 'p', 'p', '534b9a3588bdd87bf7c3b9d650e43e46', 'p', 'ACTIVE'),
('Rulo', 'Raul', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Vero', 'Veronica', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Victor', 'Victor', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Wences', 'Wences', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE'),
('Wero', 'Ernesto', NULL, NULL, NULL, '490e3145c1cd9e4aa9b9ca2d6ec782c8', NULL, 'ACTIVE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor_materia`
--

CREATE TABLE IF NOT EXISTS `asesor_materia` (
  `IdAsesor_Materia` int(11) NOT NULL AUTO_INCREMENT,
  `IdAsesor` varchar(50) NOT NULL,
  `IdMateria` int(11) NOT NULL,
  PRIMARY KEY (`IdAsesor_Materia`),
  KEY `IdAsesor` (`IdAsesor`),
  KEY `IdMateria` (`IdMateria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Volcar la base de datos para la tabla `asesor_materia`
--

INSERT INTO `asesor_materia` (`IdAsesor_Materia`, `IdAsesor`, `IdMateria`) VALUES
(1, 'Antonio', 1),
(2, 'Gato', 1),
(3, 'Gato', 2),
(4, 'Isa', 2),
(5, 'Wero', 2),
(6, 'Abel', 2),
(7, 'Miriam', 2),
(8, 'Vero', 2),
(9, 'Lalo', 2),
(10, 'Paola', 2),
(11, 'Victor', 2),
(12, 'Rulo', 2),
(13, 'Victor', 3),
(14, 'Lunita', 3),
(15, 'Wences', 3),
(16, 'Osvaldo', 3),
(17, 'Miguel', 3),
(18, 'Paty', 3),
(19, 'Rulo', 3),
(20, 'Pity', 3),
(21, 'Ivan', 3),
(22, 'Wero', 3),
(23, 'Gina', 4),
(24, 'Lunita', 4),
(25, 'Wences', 5),
(26, 'Darky', 5),
(27, 'Juan', 6),
(28, 'Ely', 6),
(29, 'Ivan', 6),
(30, 'Osvaldo', 6),
(31, 'Antonio', 6),
(32, 'Pity', 6),
(33, 'Ely', 7),
(34, 'Miguel', 7),
(35, 'Isa', 7),
(36, 'Miriam', 8),
(37, 'Isa', 8),
(38, 'Nely', 8),
(39, 'Paty', 8),
(40, 'Paola', 9),
(41, 'Nely', 9),
(42, 'Lalo', 9),
(43, 'Isa', 9),
(44, 'Pity', 9),
(45, 'Vero', 10),
(46, 'Juan', 10),
(47, 'Wero', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `idHorario` int(11) NOT NULL AUTO_INCREMENT,
  `Dia` varchar(50) NOT NULL,
  `Horainic` time NOT NULL,
  `Horafin` time NOT NULL,
  `IdAsesor` varchar(50) NOT NULL,
  `IdMateria` int(11) DEFAULT NULL,
  PRIMARY KEY (`idHorario`),
  KEY `IdAsesor` (`IdAsesor`),
  KEY `Dia` (`Dia`),
  KEY `IdMateria` (`IdMateria`),
  KEY `IdMateria_2` (`IdMateria`),
  KEY `Dia_2` (`Dia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Volcar la base de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`idHorario`, `Dia`, `Horainic`, `Horafin`, `IdAsesor`, `IdMateria`) VALUES
(2, 'Lunes', '14:00:00', '15:00:00', 'Antonio', 1),
(3, 'Lunes', '15:00:00', '16:00:00', 'Gato', 1),
(4, 'Viernes', '13:00:00', '14:00:00', 'Antonio', 1),
(5, 'Lunes', '13:00:00', '14:00:00', 'Gato', 2),
(6, 'Lunes', '14:00:00', '15:00:00', 'Gato', 2),
(7, 'Lunes', '15:00:00', '16:00:00', 'Isa', 2),
(8, 'Martes', '12:00:00', '13:00:00', 'Wero', 2),
(9, 'Martes', '13:00:00', '14:00:00', 'Wero', 2),
(11, 'Martes', '14:00:00', '15:00:00', 'Isa', 2),
(12, 'Miercoles', '13:00:00', '14:00:00', 'Abel', 2),
(13, 'Miercoles', '14:00:00', '15:00:00', 'Abel', 2),
(14, 'Jueves', '14:00:00', '15:00:00', 'Miriam', 2),
(15, 'Jueves', '14:00:00', '15:00:00', 'Vero', 2),
(16, 'Jueves', '14:00:00', '15:00:00', 'Lalo', 2),
(17, 'Viernes', '11:00:00', '12:00:00', 'Paola', 2),
(18, 'Viernes', '13:00:00', '14:00:00', 'Victor', 2),
(19, 'Viernes', '14:00:00', '15:00:00', 'Rulo', 2),
(20, 'Lunes', '14:00:00', '15:00:00', 'Victor', 3),
(22, 'Lunes', '14:00:00', '15:00:00', 'Lunita', 3),
(23, 'Lunes', '15:00:00', '16:00:00', 'Wences', 3),
(24, 'Martes', '11:00:00', '12:00:00', 'Osvaldo', 3),
(25, 'Martes', '12:00:00', '13:00:00', 'Osvaldo', 3),
(26, 'Martes', '14:00:00', '15:00:00', 'Victor', 3),
(27, 'Martes', '14:00:00', '15:00:00', 'Lunita', 3),
(28, 'Miercoles', '13:00:00', '14:00:00', 'Miguel', 3),
(30, 'Miercoles', '13:00:00', '14:00:00', 'Paty', 3),
(31, 'Miercoles', '14:00:00', '15:00:00', 'Miguel', 3),
(32, 'Miercoles', '14:00:00', '15:00:00', 'Paty', 3),
(33, 'Jueves', '13:00:00', '14:00:00', 'Rulo', 3),
(34, 'Jueves', '14:00:00', '15:00:00', 'Pity', 3),
(35, 'Jueves', '14:00:00', '15:00:00', 'Rulo', 3),
(36, 'Viernes', '13:00:00', '14:00:00', 'Ivan', 3),
(37, 'Viernes', '13:00:00', '14:00:00', 'Wero', 3),
(38, 'Viernes', '14:00:00', '15:00:00', 'Wences', 3),
(39, 'Miercoles', '14:00:00', '15:00:00', 'Gina', 4),
(40, 'Miercoles', '14:00:00', '15:00:00', 'Lunita', 4),
(41, 'Jueves', '09:00:00', '10:00:00', 'Gina', 4),
(42, 'Lunes', '14:00:00', '15:00:00', 'Wences', 5),
(43, 'Martes', '14:00:00', '15:00:00', 'Darky', 5),
(44, 'Miercoles', '14:00:00', '15:00:00', 'Wences', 5),
(45, 'Viernes', '13:00:00', '14:00:00', 'Darky', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `idMateria` int(11) NOT NULL AUTO_INCREMENT,
  `Materia` varchar(30) NOT NULL,
  PRIMARY KEY (`idMateria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `materias`
--

INSERT INTO `materias` (`idMateria`, `Materia`) VALUES
(1, 'Programacion'),
(2, 'Quimica'),
(3, 'Geometria y Trigonometria'),
(4, 'Dibujo Tecnico'),
(5, 'Ingles'),
(6, 'Calculo Diferencial'),
(7, 'Filosofia'),
(8, 'Fisica'),
(9, 'Historia'),
(10, 'Biologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `status`
--

INSERT INTO `status` (`status`) VALUES
('ACTIVE'),
('BLOQUEADO'),
('EXPULSADO'),
('INACTIVO'),
('SUSPENDIDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_asesoria`
--

CREATE TABLE IF NOT EXISTS `status_asesoria` (
  `status_Asesoria` varchar(50) NOT NULL,
  PRIMARY KEY (`status_Asesoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `status_asesoria`
--

INSERT INTO `status_asesoria` (`status_Asesoria`) VALUES
('ACTIVA'),
('FINALIZADA'),
('SUSPENDIDA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioalumno`
--

CREATE TABLE IF NOT EXISTS `usuarioalumno` (
  `IdAlumno` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Paterno` varchar(50) NOT NULL,
  `Materno` varchar(50) NOT NULL,
  `Boleta` varchar(20) NOT NULL,
  `Clave` varchar(200) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`IdAlumno`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `usuarioalumno`
--

INSERT INTO `usuarioalumno` (`IdAlumno`, `Nombre`, `Paterno`, `Materno`, `Boleta`, `Clave`, `Correo`, `status`) VALUES
('maery', 'maritza', 'hernandez', 'hernandez', '55', 'e389cb43132a236f3c11e96d4557a28e', '55', 'ACTIVE'),
('marko', 'marko', 'mayen', 'hdz', '222', '37efe2e47d7691194b8b64b7301243d3', 'ppp', 'ACTIVE'),
('max', 'marko', 'mayen', 'hernandez', '2008080699', '37efe2e47d7691194b8b64b7301243d3', 'mmm', 'ACTIVE'),
('mental', 'mariano', 'sample', 'll', 'l', '37efe2e47d7691194b8b64b7301243d3', 'l', 'ACTIVE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(30) NOT NULL,
  `clave` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `clave`) VALUES
('sas', 'sas'),
('hdjkashdjkhas', 'jhdjkshfjksdfh'),
('gato', 'erika'),
('marko', 'yeisuli'),
('pity', 'isabel');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `asesoria`
--
ALTER TABLE `asesoria`
  ADD CONSTRAINT `asesoria_ibfk_10` FOREIGN KEY (`idAsesor`) REFERENCES `asesorusuario` (`idAsesor`),
  ADD CONSTRAINT `asesoria_ibfk_11` FOREIGN KEY (`IdAlumno`) REFERENCES `usuarioalumno` (`IdAlumno`),
  ADD CONSTRAINT `asesoria_ibfk_12` FOREIGN KEY (`status`) REFERENCES `status_asesoria` (`status_Asesoria`);

--
-- Filtros para la tabla `asesorusuario`
--
ALTER TABLE `asesorusuario`
  ADD CONSTRAINT `asesorusuario_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status` (`status`);

--
-- Filtros para la tabla `asesor_materia`
--
ALTER TABLE `asesor_materia`
  ADD CONSTRAINT `asesor_materia_ibfk_2` FOREIGN KEY (`IdMateria`) REFERENCES `materias` (`idMateria`),
  ADD CONSTRAINT `asesor_materia_ibfk_3` FOREIGN KEY (`IdAsesor`) REFERENCES `asesorusuario` (`idAsesor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`IdAsesor`) REFERENCES `asesorusuario` (`idAsesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horarios_ibfk_2` FOREIGN KEY (`IdMateria`) REFERENCES `materias` (`idMateria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarioalumno`
--
ALTER TABLE `usuarioalumno`
  ADD CONSTRAINT `usuarioalumno_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status` (`status`);
