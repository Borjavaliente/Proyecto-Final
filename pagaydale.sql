CREATE DATABASE tienda;
USE tienda;

CREATE TABLE Usuario(
idusuario SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre  VARCHAR(60),
apellido VARCHAR(60),
fechanacimiento date,
nick  VARCHAR(25),
correo VARCHAR(25),
pass VARCHAR(15),
estado VARCHAR(12) DEFAULT 'ACTIVO',
rol VARCHAR(12)
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


CREATE TABLE Multimedia(
idmultimedia SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
tipo  VARCHAR(10),
descripcion VARCHAR(60),
ruta VARCHAR(200)
) ENGINE=InnoDB;


CREATE TABLE Gestion(
idgestion SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
idusuario SMALLINT(3) NOT NULL,
fechaalta date,
fechabaja date,
fechabloqueo date,
FOREIGN KEY (idusuario) REFERENCES Usuario(idusuario)
) ENGINE=InnoDB;

CREATE TABLE Agrega(
idagregar SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
idoferta SMALLINT(3) NOT NULL,
fechalanzamiento date,
fechafinaliza date,
FOREIGN KEY (idoferta) REFERENCES Ofertas(idoferta)
) ENGINE InnoDB;

CREATE TABLE Sube(
idsubida SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
idmultimedia SMALLINT(3) NOT NULL,
fechasubidamult date,
FOREIGN KEY (idmultimedia) REFERENCES Multimedia(idmultimedia)
) ENGINE InnoDB;


ALTER DATABASE tienda CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Usuario CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Juegos CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Ofertas CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Compras CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Multimedia CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Gestion CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Agrega CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Sube CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;


insert into Usuario values (1,"Juan","Romero","1980-2-13","Juanillo_01","franmolsan@gpeto.es","1111","ACTIVO");
insert into Usuario values (2,"Joaquin","Hurtado",NOW(),"Daleqdale","franmolsan@gpeto.es","2222","ACTIVO");
insert into Usuario values (3,"Daniel","Homero","1990-11-13","quepinquepan","franmolsan@gpeto.es","3333","ACTIVO");
insert into Usuario values (4,"Ana","Duran","1985-8-22","SUSanita","franmolsan@gpeto.es","4444","ACTIVO");

insert into Juegos values (1,"Pong","Pago","1","2016-2-22","SUSanita");
insert into Juegos values (2,"Flapy Zero","Pago","2","2016-2-28","quepinquepan");

insert into Administrador values (1,"admin","alumno","root");
insert into Administrador values (2,"web_designer","alumno","root");
insert into Administrador values (3,"web_developer","alumno","root");

insert into Multimedia values (1,"video","Gameplay del AuronPlay","..........");

insert into Ofertas values (1,"2x1","Pago","1",NOW(),"SUSanita");
