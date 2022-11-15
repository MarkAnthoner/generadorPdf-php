-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 10:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intersemestrales`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` varchar(18) NOT NULL,
  `numero_cuenta` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_paterno` varchar(50) DEFAULT NULL,
  `apellido_materno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `constancias`
--

CREATE TABLE `constancias` (
  `id_constancia` int(11) NOT NULL,
  `id_alumno` varchar(18) NOT NULL,
  `validada` tinyint(1) NOT NULL,
  `fecha_emision` date NOT NULL,
  `id_tipo_curso` int(11) NOT NULL,
  `id_periodo_curso` int(11) NOT NULL,
  `id_tipo_constancia` int(11) NOT NULL,
  `requiere_calificacion` tinyint(1) NOT NULL,
  `calificacion` float NOT NULL,
  `porcentaje_asistencia` int(11) NOT NULL,
  `id_mensaje_constancia` int(11) NOT NULL,
  `id_maestro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `tipo_curso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `maestro`
--

CREATE TABLE `maestro` (
  `rfc` varchar(13) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `firma` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mensaje_constancia`
--

CREATE TABLE `mensaje_constancia` (
  `id_mensaje_constancia` int(11) NOT NULL,
  `mensaje_constancia` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` int(11) NOT NULL,
  `periodo` varchar(6) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_constancia`
--

CREATE TABLE `tipo_constancia` (
  `id_tipo_constancia` int(11) NOT NULL,
  `tipo_constancia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_curso`
--

CREATE TABLE `tipo_curso` (
  `id_tipo_curso` int(11) NOT NULL,
  `tipo_curso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indexes for table `constancias`
--
ALTER TABLE `constancias`
  ADD PRIMARY KEY (`id_constancia`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_periodo_curso` (`id_periodo_curso`),
  ADD KEY `id_curso` (`id_tipo_curso`),
  ADD KEY `id_tipo_constancia` (`id_tipo_constancia`),
  ADD KEY `id_mensaje_constancia` (`id_mensaje_constancia`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`rfc`);

--
-- Indexes for table `mensaje_constancia`
--
ALTER TABLE `mensaje_constancia`
  ADD PRIMARY KEY (`id_mensaje_constancia`);

--
-- Indexes for table `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indexes for table `tipo_constancia`
--
ALTER TABLE `tipo_constancia`
  ADD PRIMARY KEY (`id_tipo_constancia`);

--
-- Indexes for table `tipo_curso`
--
ALTER TABLE `tipo_curso`
  ADD PRIMARY KEY (`id_tipo_curso`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `constancias`
--
ALTER TABLE `constancias`
  ADD CONSTRAINT `id_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_curso` FOREIGN KEY (`id_tipo_curso`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_mensaje_constancia` FOREIGN KEY (`id_mensaje_constancia`) REFERENCES `mensaje_constancia` (`id_mensaje_constancia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_periodo_curso` FOREIGN KEY (`id_periodo_curso`) REFERENCES `periodo` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_tipo_constancia` FOREIGN KEY (`id_tipo_constancia`) REFERENCES `tipo_constancia` (`id_tipo_constancia`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
