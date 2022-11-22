-- Insercion de datos en tablas

-- id, num_cuenta,nombre, apellido_pat, apellido_mat
insert into alumnos values(1,000000001,'Luis','Neira','del Romero');
insert into alumnos values(2,000000002,'Paola','España','Valer');
insert into alumnos values(3,000000003,'Apolinar','Andreu','Torrijos');

-- id_curso, tipo_curso
insert into curso values(1, 'Linux basico');
insert into curso values(2, 'Redes');
insert into curso values(3, 'Base de datos');

-- rfc, nombre, ap_pat, ap_mat, firma
insert into maestro values('xxxxxxxxxxxx1', 'Otilia','Robles','Campos','firma');
insert into maestro values('xxxxxxxxxxxx2', 'Ignacio','Casal','Cuetos','firma');
insert into maestro values('xxxxxxxxxxxx3', 'Ana','Cornejo','Tejada','firma');

-- id_msj, msj
insert into mensaje_constancia values(1,'Por su gran esfuerzo y dedicación');
insert into mensaje_constancia values(2,'Por su gran compromiso y esfuerzo');
insert into mensaje_constancia values(3,'Por su grado de excelencia');

-- id_periodo, periodo, fecha_ini, fecha_fin
insert into periodo values(1, 'Intersemestral','2022-01-15','2022-02-15');
insert into periodo values(2, 'Intersemestral','2022-06-02','2022-07-02');
insert into periodo values(3, 'Express','2022-08-15','2022-08-22');

-- id_tipo_const, tipo_const
insert into tipo_constancia values(1, 'Tipo 1');
insert into tipo_constancia values(2, 'Tipo 2');
insert into tipo_constancia values(3, 'Tipo 3');

-- id_curso, tipo_curso
insert into tipo_curso values(1, 'Presencial');
insert into tipo_curso values(2, 'En Linea');

-- id_constancia, id_alumno, validada, fecha_emision, id_tipo_curso, id_periodo_curso, id_tipo_constancia, requiere_calif, calificacion, porcentaje_asis, id_mensaje_cons, id_maestro