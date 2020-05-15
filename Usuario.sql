CREATE DATABASE PruebaLogin;

USE PruebaLogin;

CREATE TABLE Usuario(
	id INT PRIMARY KEY IDENTITY,
	usuario VARCHAR(15),
	contrasenia VARCHAR(100),
	nombre VARCHAR(250),
	apellido VARCHAR(250)
);

INSERT INTO Usuario VALUES ('psuarez','1234','Pedro','Suarez');