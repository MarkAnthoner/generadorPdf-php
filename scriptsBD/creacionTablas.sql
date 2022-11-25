--
-- Database: `intersemestrales`
--
/*
drop table constancias;
drop table alumnos,curso,maestro, mensaje_constancia, periodo, tipo_constancia,tipo_curso;
drop table administrativo, admin_funcion, logo, fondo;
*/

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

create table alumnos (
	id_alumno varchar(18) not null, -- curp
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
  id_maestro int NOT null, 
  --
  folio int not null,
  id_admin int null,
  id_admin2 int null,
  id_admin3 int null,
  id_fondo int not null,
  id_logo1 int null,
  id_logo2 int null,
  id_logo3 int null 
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
	id_maestro int not null,
  rfc varchar(13) NOT NULL,
  nombre varchar(100) NOT NULL,
  apellido_paterno varchar(50) NOT NULL,
  apellido_materno varchar(50) NOT NULL,
  firma varchar(200) NOT NULL
);


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
-- Table structure for table 'administrativo'
--

create table administrativo(
	id_admin int not null,
	nombre varchar(50) not null,
	ap_pat varchar(25) not null,
	ap_mat varchar(25) not null,
	id_funcion int not null,
	firma varchar(200) not null
);

create table admin_funcion(
	id_funcion int not null,
	funcion varchar(200) not null
);

create table logo(
	id_logo int not null,
	logo varchar(20) not null
);


create table fondo(
	id_fondo int not null,
	fondo varchar(20) not null
);


--
-- Indexes for dumped tables
--

alter table fondo
	add primary key(id_fondo);

alter table logo
	add primary key(id_logo);

alter table admin_funcion
	add primary key(id_funcion);

alter table administrativo
	add primary key(id_admin);

alter table administrativo
	add constraint id_funcion foreign key (id_funcion) references admin_funcion(id_funcion) on delete cascade on update cascade; 
	

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
  ADD PRIMARY KEY (id_maestro);

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
  ADD CONSTRAINT id_tipo_constancia FOREIGN KEY (id_tipo_constancia) REFERENCES tipo_constancia (id_tipo_constancia) ON DELETE CASCADE ON UPDATE cascade,
 --
 add constraint id_maestro foreign key (id_maestro) references maestro(id_maestro) on delete cascade on update cascade,
 add constraint id_admin foreign key (id_admin) references administrativo(id_admin) on delete cascade on update cascade,
 add constraint id_admin2 foreign key (id_admin2) references administrativo(id_admin) on delete cascade on update cascade,
 add constraint id_admin3 foreign key (id_admin3) references administrativo(id_admin) on delete cascade on update cascade,
 add constraint id_fondo foreign key (id_fondo) references fondo(id_fondo) on delete cascade on update cascade,
 add constraint id_logo1 foreign key (id_logo1) references logo(id_logo) on delete cascade on update cascade,
 add constraint id_logo2 foreign key (id_logo2) references logo(id_logo) on delete cascade on update cascade,
 add constraint id_logo3 foreign key (id_logo3) references logo(id_logo) on delete cascade on update cascade;
 
 
 
 
 
 
 