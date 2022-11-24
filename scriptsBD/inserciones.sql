-- Insercion de datos en tablas

-- id, num_cuenta,nombre, apellido_pat, apellido_mat
insert into alumnos values(1,000000001,'LUIS','NEIRA','DEL ROMERO');
insert into alumnos values(2,000000002,'PAOLA','ESPAÑA','VALER');
insert into alumnos values(3,000000003,'APOLINAR','ANDREU','TORRIJOS');

SELECT nombre,apellido_paterno,apellido_materno from alumnos;

-- id_curso, tipo_curso
insert into curso values(1, 'Linux basico');
insert into curso values(2, 'Redes');
insert into curso values(3, 'Base de datos');

-- rfc, nombre, ap_pat, ap_mat, firma
insert into maestro values('xxxxxxxxxxxx1', 'OTILIA','ROBLES','CAMPOS','https://www.ingenieria.unam.mx/unica/indexN.php');
insert into maestro values('xxxxxxxxxxxx2', 'IGNACIO','CASAL','CUETOS','http://www.mcc.unam.mx/index.php');
insert into maestro values('xxxxxxxxxxxx3', 'ANA','CORNEJO','TEJADA','http://www.mcc.unam.mx/index.php');

-- id_msj, msj
insert into mensaje_constancia values(1,'POR SU GRAN ESFUERZO Y DEDICACIÓN');
insert into mensaje_constancia values(2,'POR SU GRAN COMPROMISO Y ESFUERZO');
insert into mensaje_constancia values(3,'POR SU GRADO DE EXCELENCIA');

-- id_periodo, periodo, fecha_ini, fecha_fin
insert into periodo values(1, 'INTERSEMESTRAL','2022-01-15','2022-02-15');
insert into periodo values(2, 'INTERSEMESTRAL','2022-06-02','2022-07-02');
insert into periodo values(3, 'EXPRESS','2022-08-15','2022-08-22');

-- id_tipo_const, tipo_const
insert into tipo_constancia values(1, 'TIPO 1');
insert into tipo_constancia values(2, 'TIPO 2');
insert into tipo_constancia values(3, 'TIPO 3');

-- id_curso, tipo_curso
insert into tipo_curso values(1, 'PRESENCIAL');
insert into tipo_curso values(2, 'EN LINEA');

--id_funcion, funcion
insert into admin_funcion values (1, 'SECRETARIO GENERAL DE LA FACULTAD DE INGENIERIA');
insert into admin_funcion values (2, 'COORDINADOR DE LA UNIDAD DE SERVICIOS DE CÓMPUTO ACADÉMICO');

-- id_admin, nombre, ap_pat, ap_mat, id_funcion, firma
insert into administrativo values (1,'SARITA','LOPEZ','COROMINAS',1,'https://www.ingenieria.unam.mx/unica/indexN.php');
insert into administrativo values (2,'TEOBALDO','IBAÑEZ','PINDEO',2,'http://www.mcc.unam.mx/index.php' );
insert into administrativo values (3, 'FELLIX','CEPEDA','VILLALOBOS',1,'http://www.mcc.unam.mx/index.php')

-- id_logo, logo
insert into logo values (1,'FI');
insert into logo values (2,'UNAM');
insert into logo values (3,'UNICA');

-- id_fondo, fondo
insert into fondo values (1, 'fondo1');
insert into fondo values (2, 'fondo2');
insert into fondo values (3, 'fondo3');
insert into fondo values (4, 'fondo4');

-- id_constancia, id_alumno, validada, fecha_emision, id_tipo_curso, id_periodo_curso, 
-- id_tipo_constancia, requiere_calif, calificacion, porcentaje_asis, id_mensaje_cons, 
--id_maestro, folio, id_admin, id_admin2, id_admin3, id_fondo, id_logo1, id_logo2, id_logo3
insert into constancias values 
(1,1,true,'2022-11-22',1,1,
	1,true,10.0,80,1,
	1, 123456,1,2,null,1,1,2,3);
insert into constancias values (2,2,true,'2022-11-22',2,2,
	2,true,8.0,60,2,
	2, 65432,2,3,null,2,1,2,null);
insert into constancias values (3,3,true,'2022-11-22',3,3,
	3,true,9.0,75,3,
	3,14321,3,1,2,1,1,2,3);
--
insert into constancias values (4,2,false,'2022-11-24',1,3
	,1,true,7,90,2,
	1,98765,1,null,null,1,1,3,null);
