--
-- Database: `intersemestrales`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

create table alumnos (
	id_alumno varchar(18) not null,
	numero_cuenta int not null,
	nombre varchar(100) not null,
	apellido_paterno varchar(50) default null,
	apellido_materno varchar(50) default null
);


-- --------------------------------------------------------

--
-- Table structure for table `constancias`
--

CREATE TABLE constancias (
  id_constancia int NOT NULL,
  id_alumno varchar(18) NOT NULL,
  validada bool NOT NULL,
  fecha_emision date NOT NULL,
  id_tipo_curso int NOT NULL,
  id_periodo_curso int NOT NULL,
  id_tipo_constancia int NOT NULL,
  requiere_calificacion bool NOT NULL,
  calificacion float NOT NULL,
  porcentaje_asistencia int NOT NULL,
  id_mensaje_constancia int NOT NULL,
  id_maestro int NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

CREATE TABLE curso (
  id_curso int NOT NULL,
  tipo_curso varchar(50) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `maestro`
--

CREATE TABLE maestro (
  rfc varchar(13) NOT NULL,
  nombre varchar(100) NOT NULL,
  apellido_paterno varchar(50) NOT NULL,
  apellido_materno varchar(50) NOT NULL,
  firma varchar(200) NOT NULL
);
-- * Moidificar firma por qr en formato png

-- --------------------------------------------------------

--
-- Table structure for table `mensaje_constancia`
--

CREATE TABLE mensaje_constancia (
  id_mensaje_constancia int NOT NULL,
  mensaje_constancia varchar(1000) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `periodo`
--

CREATE TABLE periodo (
  id_periodo int NOT NULL,
  periodo varchar(15) NOT NULL,
  fecha_inicio date NOT NULL,
  fecha_final date NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_constancia`
--

CREATE TABLE tipo_constancia (
  id_tipo_constancia int NOT NULL,
  tipo_constancia varchar(50) DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_curso`
--

CREATE TABLE tipo_curso (
  id_tipo_curso int NOT NULL,
  tipo_curso varchar(50) NOT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE alumnos
  ADD PRIMARY KEY (id_alumno);

--
-- Indexes for table `constancias`
--
 
ALTER TABLE constancias
  ADD PRIMARY KEY (id_constancia);

--
-- Indexes for table `curso`
--
ALTER TABLE curso
  ADD PRIMARY KEY (id_curso);

--
-- Indexes for table `maestro`
--
ALTER TABLE maestro
  ADD PRIMARY KEY (rfc);

--
-- Indexes for table `mensaje_constancia`
--
ALTER TABLE mensaje_constancia
  ADD PRIMARY KEY (id_mensaje_constancia);

--
-- Indexes for table `periodo`
--
ALTER TABLE periodo
  ADD PRIMARY KEY (id_periodo);

--
-- Indexes for table `tipo_constancia`
--
ALTER TABLE tipo_constancia
  ADD PRIMARY KEY (id_tipo_constancia);

--
-- Indexes for table `tipo_curso`
--
ALTER TABLE tipo_curso
  ADD PRIMARY KEY (id_tipo_curso);


--
-- Constraints for table `constancias`
--
ALTER TABLE constancias
  ADD CONSTRAINT id_alumno FOREIGN KEY (id_alumno) REFERENCES alumnos (id_alumno) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT id_curso FOREIGN KEY (id_tipo_curso) REFERENCES curso (id_curso) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT id_mensaje_constancia FOREIGN KEY (id_mensaje_constancia) REFERENCES mensaje_constancia (id_mensaje_constancia) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT id_periodo_curso FOREIGN KEY (id_periodo_curso) REFERENCES periodo (id_periodo) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT id_tipo_constancia FOREIGN KEY (id_tipo_constancia) REFERENCES tipo_constancia (id_tipo_constancia) ON DELETE CASCADE ON UPDATE CASCADE;