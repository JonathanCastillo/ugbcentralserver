-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 10:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ugbcentral`
--

-- --------------------------------------------------------

--
-- Table structure for table `carreras`
--

CREATE TABLE `carreras` (
  `Id_Carrera` int(11) NOT NULL,
  `Nombre` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `Abreviatura` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `carreras`
--

INSERT INTO `carreras` (`Id_Carrera`, `Nombre`, `Abreviatura`, `Estado`) VALUES
(1, 'Ingenieria en Sistemas y Redes Informaticas', 'IS', 1),
(2, 'Licenciatura en Computacion', 'LC', 1),
(3, 'Tecnico en Sistemas y Redes Informaticas', 'TS', 1),
(4, 'Ingenieria en Base de Datos', 'IB', 1),
(5, 'Licenciatura en Administracion de Empresas', 'LA', 1),
(6, 'Licenciatura en Derecho', 'LD', 1),
(7, 'Licenciatura en Psicologia', 'LP', 1),
(8, 'Licenciatura en Idioma Ingles', 'LI', 1),
(9, 'Tecnologo en Enfermiria', 'TE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cedes`
--

CREATE TABLE `cedes` (
  `Cede` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `cedes`
--

INSERT INTO `cedes` (`Cede`, `Nombre`, `Estado`) VALUES
('SM', 'San Miguel', 1),
('US', 'Usulutan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `docente`
--

CREATE TABLE `docente` (
  `Codigo` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `DUI` int(9) NOT NULL,
  `Nombres` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `Domicilio` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Especialidad` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo` int(11) NOT NULL DEFAULT '2',
  `Estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `docente`
--

INSERT INTO `docente` (`Codigo`, `DUI`, `Nombres`, `Apellidos`, `Domicilio`, `Telefono`, `Email`, `Especialidad`, `Tipo`, `Estado`) VALUES
('SMDC000219', 223456789, 'Delmy Esperanza', 'Guevara Guevara', 'Santa Rosa de Lima, La Union', '75345521', 'DelGuevara1@hotmail.com', 'Lic. Administracion de Empresas', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE `estudiante` (
  `Codigo_Alumno` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `DUI` char(11) COLLATE utf8_spanish_ci NOT NULL,
  `Nombres` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `Domicilio` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Carrera` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Foto` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Cede` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `estudiante`
--

INSERT INTO `estudiante` (`Codigo_Alumno`, `DUI`, `Nombres`, `Apellidos`, `Domicilio`, `Telefono`, `Email`, `Carrera`, `Foto`, `Cede`, `Fecha`, `Estado`) VALUES
('SMIB051419', '051975371', 'Moises Elias', 'Villatoro Alvarez', 'Santa Rosa de Lima, La Union.', '76236433', 'TuElias12@hotmail.com', 'Ingenieria en Base de Datos', 'upload/photos/SMIB05141932', 'SM', '2019-07-14 16:44:08', 1),
('SMIS120619', '123456789', 'Jonathan Josue', 'Castillo Cruz', 'Pasaquina, La Union, El Salvador', '76422313', 'JonaCastillo9611@hotmail.com', 'Ingenieria en Sistemas y Redes Informaticas', 'upload/photos/SMIS12061943', 'SM', '2019-07-05 22:30:49', 1),
('SMIS120819', '123456789', 'Jonathan Josue', 'Castillo Cruz', 'Pasaquina, La Union, El Salvador', '76218921', 'JonaCastillo9611@hotmail.com', 'Ingenieria en Sistemas y Redes Informaticas', 'upload/photos/SMIS12081943', 'SM', '2019-07-08 18:13:30', 1),
('SMIS210819', '213456789', 'Heyling Elizabeth', 'Montenegro Reyes', 'Pasaquina, La Union, El Salvador', '72891211', 'Hey12M@hotmail.com', 'Ingenieria en Sistemas y Redes Informaticas', 'upload/photos/SMIS2108197', 'SM', '2019-07-08 18:32:10', 1),
('SMLA410919', '412356789', 'Madelyn Alejandra', 'Delgado Martinez', 'Jocoro, Morazan', '71225412', 'MoodDelgado@gmail.com', 'Licenciatura en Administracion de Empresas', 'upload/photos/SMLA41091936', 'SM', '2019-07-08 22:37:32', 1),
('SMLD310919', '312456789', 'Karen Milena', 'Servellon Sosa', 'Santiago de Maria, San Miguel', '72671233', 'Milenatuamiga@hotmail.com', 'Licenciatura en Derecho', 'upload/photos/SMLD31091913', 'SM', '2019-07-08 22:32:21', 1),
('SMLI620919', '623456789', 'Ligia Verenice', 'Rubio Rubio', 'Santa Rosa de Lima, La Union.', '76992144', 'TutwRubio@hotmail.com', 'Licenciatura en Idioma Ingles', 'upload/photos/SMLI62091915', 'SM', '2019-07-08 22:25:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `Codigo` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `DUI` int(11) NOT NULL DEFAULT '123456789',
  `Nombres` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Domicilio` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo` int(11) NOT NULL DEFAULT '2',
  `Estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`Codigo`, `DUI`, `Nombres`, `Apellidos`, `Domicilio`, `Telefono`, `Email`, `Password`, `Tipo`, `Estado`) VALUES
('SMAD000119', 123456789, 'Jonathan Josue', 'Castillo Cruz', 'Pasaquina, La Union', '76321522', 'JonaCastillo96@hotmail.com', '12345', 1, 1),
('SMDC000219', 223456789, 'Delmy Esperanza', 'Guevara Guevara', 'Santa Rosa, La Union', '77891233', 'Delguevara1@hotmail.com', '12345', 3, 1),
('SMIB051419', 51975371, 'Moises Elias', 'Villatoro Alvarez', 'Santa Rosa de Lima, La Union.', '76236433', 'TuElias12@hotmail.com', 'BARRIOS19', 2, 1),
('SMIS210819', 213456789, 'Heyling Elizabeth', 'Montenegro Reyes', 'Pasaquina, La Union, El Salvad', '72891211', 'Hey12M@hotmail.com', 'BARRIOS19', 2, 1),
('SMLA410919', 412356789, 'Madelyn Alejandra', 'Delgado Martinez', 'Jocoro, Morazan', '71225412', 'MoodDelgado@gmail.com', 'BARRIOS19', 2, 1),
('SMLD310919', 312456789, 'Karen Milena', 'Servellon Sosa', 'Santiago de Maria, San Miguel', '72671233', 'Milenatuamiga@hotmail.com', 'BARRIOS19', 2, 1),
('SMLI620919', 623456789, 'Ligia Verenice', 'Rubio Rubio', 'Santa Rosa de Lima, La Union.', '76992144', 'TutwRubio@hotmail.com', 'BARRIOS19', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`Id_Carrera`);

--
-- Indexes for table `cedes`
--
ALTER TABLE `cedes`
  ADD PRIMARY KEY (`Cede`);

--
-- Indexes for table `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indexes for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`Codigo_Alumno`),
  ADD KEY `Cede` (`Cede`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Codigo`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carreras`
--
ALTER TABLE `carreras`
  MODIFY `Id_Carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`Cede`) REFERENCES `cedes` (`Cede`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
