create database if not exists escuela;

  use escuela;

  create table if not exists alumno(

    id_alumno tinyint not null auto_increment,
    no_control int not null,
    nombre_alumno varchar(100) not null,
    apellido_paterno varchar(100) not null,
    apellido_materno varchar(100) not null,
    fecha_nacimiento date not null,
    semestre_actual tinyint(2) not null,
    carrera varchar(100) not null,
    especialidad varchar(100) not null,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    primary key(id_alumno)
  );

-- 10 registros para la tabla alumno con numero de control
insert into alumno(id_alumno, no_control, nombre_alumno, apellido_paterno, apellido_materno, fecha_nacimiento, semestre_actual, carrera, especialidad) values(1, 123489157, 'Erika', 'De la Zeta', 'Rodriguez', '2000-03-22', 8, 'Licenciatura en Gestion empresarial', 'Gestion empresarial');
insert into alumno(id_alumno, no_control, nombre_alumno, apellido_paterno, apellido_materno, fecha_nacimiento, semestre_actual, carrera, especialidad) values(2, 456789123, 'Anthony', 'Solano', 'López', '1996-04-16', 8, 'Ingenieria en TICS', 'Sistemas');
insert into alumno(id_alumno, no_control, nombre_alumno, apellido_paterno, apellido_materno, fecha_nacimiento, semestre_actual, carrera, especialidad) values(3, 195489432, 'Enrique', 'Perez', 'Perez', '1996-08-17', 8, 'Ingenieria Mecanica', 'Mecanica');
insert into alumno(id_alumno, no_control, nombre_alumno, apellido_paterno, apellido_materno, fecha_nacimiento, semestre_actual, carrera, especialidad) values(4, 741156963, 'Luis', 'Sanchez', 'Reyna', '1998-09-25', 6, 'Ingenieria Electronica', 'Electronica');
insert into alumno(id_alumno, no_control, nombre_alumno, apellido_paterno, apellido_materno, fecha_nacimiento, semestre_actual, carrera, especialidad) values(5, 615375189, 'Juan', 'Perez', 'Perez', '1997-01-01', 6, 'Ingenieria en Sistemas', 'Sistemas');
insert into alumno(id_alumno, no_control, nombre_alumno, apellido_paterno, apellido_materno, fecha_nacimiento, semestre_actual, carrera, especialidad) values(6, 681593597, 'Martín', 'Lopez', 'Ramirez', '1998-10-06', 1, 'Ingenieria en Sistemas', 'Sistemas');
insert into alumno(id_alumno, no_control, nombre_alumno, apellido_paterno, apellido_materno, fecha_nacimiento, semestre_actual, carrera, especialidad) values(7, 729861459, 'Jose Felix', 'Ramos', 'Mendiola', '1999-05-11', 3, 'Ingenieria en Sistemas', 'Sistemas');
insert into alumno(id_alumno, no_control, nombre_alumno, apellido_paterno, apellido_materno, fecha_nacimiento, semestre_actual, carrera, especialidad) values(8, 156230789, 'Kevin De Jesus', 'Solano', 'Lopez', '1998-12-22', 3, 'Licenciatura en Gestion empresarial', 'Gestion empresarial');
insert into alumno(id_alumno, no_control, nombre_alumno, apellido_paterno, apellido_materno, fecha_nacimiento, semestre_actual, carrera, especialidad) values(9, 456123056, 'Angel de Jesus', 'PEstaña', 'Sanchez', '2000-09-18', 1, 'Ingenieria en Sistemas', 'Sistemas');
insert into alumno(id_alumno, no_control, nombre_alumno, apellido_paterno, apellido_materno, fecha_nacimiento, semestre_actual, carrera, especialidad) values(10, 78945606, 'Etni Uriel', 'Lopez', 'Jarquin', '2000-07-14', 1, 'Ingenieria en Sistemas', 'Sistemas');