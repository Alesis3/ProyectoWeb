drop database if exists B_Datos_proyecto;
create database if not exists B_Datos_proyecto;
use B_Datos_proyecto;
create table usuarios (id int not null auto_increment primary key,
						nombre varchar(50) not null,
                        edad int(2) not null,
                        correo varchar(50) not null, 
                        artista varchar(20), 
                        explicacion varchar(50));

INSERT INTO usuarios (nombre, edad, correo, artista, explicacion) VALUES
('Juan', 25, 'juan@example.com', 'Alvaro Diaz', 'Explicación de Juan');
                   
select * from usuarios;