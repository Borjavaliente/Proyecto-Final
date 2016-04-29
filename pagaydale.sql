CREATE DATABASE tienda;
USE tienda;

CREATE TABLE Usuarios(
idUsuario SMALLINT(3) NOT NULL AUTO_INCREMENT,
nombre  VARCHAR(60),
apellido VARCHAR(60),
fechanacimiento date,
nick  VARCHAR(25),
pass VARCHAR(15),
estado VARCHAR(12) DEFAULT 'ACTIVO',
PRIMARY KEY (idUsuario)
) ENGINE=InnoDB;

CREATE TABLE Juegos(
idJuego SMALLINT(3) NOT NULL AUTO_INCREMENT,
nombre  VARCHAR(60),
version VARCHAR(12) DEFAULT 'Pago',
precio SMALLINT(5),
fechalanzamiento date,
autor VARCHAR(20),
PRIMARY KEY (idJuego)
) ENGINE=InnoDB;


CREATE TABLE APPS(
idApps SMALLINT(3) NOT NULL AUTO_INCREMENT,
nombre  VARCHAR(60),
version VARCHAR(12) DEFAULT 'Pago',
precio SMALLINT(5),
fechalanzamiento date,
autor VARCHAR(20),
PRIMARY KEY (idApps)
) ENGINE=InnoDB;

CREATE TABLE Ofertas(
idofertas SMALLINT(3) NOT NULL AUTO_INCREMENT,
nombre  VARCHAR(60),
version VARCHAR(12) DEFAULT 'Pago',
precio SMALLINT(5),
fechalanzamiento date,
autor VARCHAR(20),
PRIMARY KEY (idApps)
) ENGINE=InnoDB;
