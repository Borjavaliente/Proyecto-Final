CREATE DATABASE tienda;
USE tienda;

CREATE TABLE Usuario(
idusuario SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre  VARCHAR(60),
apellido VARCHAR(60),
fechanacimiento date,
nick  VARCHAR(25),
pass VARCHAR(15),
estado VARCHAR(12) DEFAULT 'ACTIVO'
) ENGINE=InnoDB;

CREATE TABLE Juegos(
idjuego SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre  VARCHAR(60),
version VARCHAR(12) DEFAULT 'Pago',
precio SMALLINT(5),
fechalanzamiento date,
autor VARCHAR(20)
) ENGINE=InnoDB;

CREATE TABLE Ofertas(
idoferta SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre  VARCHAR(60),
version VARCHAR(12) DEFAULT 'Pago',
precio SMALLINT(5),
fechalanzamiento date,
autor VARCHAR(20)
) ENGINE=InnoDB;


CREATE TABLE Compras(
idCompra SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
idusuario SMALLINT(3) NOT NULL,
idjuego SMALLINT(3) NOT NULL,
FOREIGN KEY (idusuario) REFERENCES Usuario(idusuario),
FOREIGN KEY (idjuego) REFERENCES Juegos(idjuego)
) ENGINE=InnoDB;


CREATE TABLE Administrador(
idadmin SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
nick  VARCHAR(60),
pass VARCHAR(60),
tipo VARCHAR(10)
) ENGINE=InnoDB;


CREATE TABLE Multimedia(
idamultimedia SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
tipo  VARCHAR(10),
descripcion VARCHAR(60),
fechasubidamult date,
ruta VARCHAR(200)
) ENGINE=InnoDB;


CREATE TABLE Gestion(
idgestion SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
idadmin SMALLINT(3) NOT NULL AUTO_INCREMENT,
idusuario SMALLINT(3) NOT NULL AUTO_INCREMENT,
fechaalta date,
fechabaja date,
fechabloqueo date,
FOREIGN KEY (idadmin) REFERENCES Administrador(idadmin),
FOREIGN KEY (idusuario) REFERENCES Usuario(idusuario)
) ENGINE=InnoDB;

CREATE TABLE Agrega(
idagregar SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
idadmin SMALLINT(3) NOT NULL AUTO_INCREMENT,
idoferta SMALLINT(3) NOT NULL AUTO_INCREMENT,
fechalanzamiento date,
fechafinaliza date,
FOREIGN KEY (idadmin) REFERENCES Administrador(idadmin),
FOREIGN KEY (idoferta) REFERENCES Ofertas(idoferta)
) ENGINE InnoDB;

CREATE TABLE Sube(
idsubida SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
idadmin SMALLINT(3) NOT NULL AUTO_INCREMENT,
idmultimedia SMALLINT(3) NOT NULL AUTO_INCREMENT,
KEY (fechadesubidamult),
FOREIGN KEY (idadmin) REFERENCES Administrador(idadmin),
FOREIGN KEY (idmultimedia) REFERENCES Multimedia(idmultimedia)
) ENGINE InnoDB;


<= Sube => idadmin,idmultimedia,fechadesubida


ALTER DATABASE biblioteca CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Usuario CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Juegos CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Ofertas CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Compras CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Administrador CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Multimedia CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Gestionausuario CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Agrega CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Sube CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
