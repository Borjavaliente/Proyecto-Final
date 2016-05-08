create database tienda;
use tienda;

create table usuario(
	idUsuario smallint(3) not null primary key AUTO_INCREMENT,
	nombre varchar(60),
	apellido varchar(60),
	fechaNacimiento varchar(15),
	nick varchar(25),
	rol varchar(48) DEFAULT "usuario",
	correo varchar(25),
	pass varchar(15),
	estado varchar(12) DEFAULT "activo"
)ENGINE=InnoDB;

create table aplicaciones(
	idApp smallint(3) not null primary key AUTO_INCREMENT,
	tipo varchar(50) not null DEFAULT "Aplicacion",
	categoria varchar(60),
	nombre varchar(60),
	version varchar(12) DEFAULT "Pago",
	autor varchar(20),
	fechaLanzamiento varchar(15),
	precio float(3)
)ENGINE=InnoDB;

create table compras(
	idCompra smallint(3) not null primary key AUTO_INCREMENT,
	idUsuario smallint(3) not null,
	idApp smallint(3) not null,
	fechaCompra varchar(15),
	FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario),
	FOREIGN KEY (idApp) REFERENCES aplicaciones(idApp)
)ENGINE=InnoDB;

create table gestionaUsuarios(
	idGestion SMALLINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idUsuario SMALLINT(3) NOT NULL,
	fechaalta varchar(15),
	fechabaja varchar(15) DEFAULT "NULL",
	fechabloqueo varchar(15) DEFAULT "NULL",
	FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario)
)ENGINE=InnoDB;

create table ofertas(
	idOferta smallint(3) not null primary key AUTO_INCREMENT,
	idUsuario smallint(3) not null,
	idApp smallint(3) not null,
	fechaLanzamiento varchar(15),
	fechaFinalizacion varchar(15),
	FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario),
	FOREIGN KEY (idApp) REFERENCES aplicaciones(idApp)
)ENGINE=InnoDB;

create table valoraciones(
	idValoracion smallint(3) not null primary key AUTO_INCREMENT,
	idApp smallint(3) not null,
	fechaReseña varchar(15),
	votoPositivo int(5) not null,
	votoNegativo int(5) not null,
	comentarios varchar(255) not null,
	FOREIGN KEY (idApp) REFERENCES aplicaciones(idApp)
)ENGINE=InnoDB;

ALTER DATABASE tienda CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE usuario CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE aplicaciones CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE compras CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE gestionaUsuarios CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE ofertas CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE valoraciones CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

insert into usuario values(1,"Borja","Valiente","22-09-90","rolero","admin","fbvaliente@gmail.com","fbvaliente123","activo");
insert into usuario values (2,"Peter","Parker","12-12-86","spiderman","usuario","spiderman@gmail.com","spiderman123","activo");
insert into usuario values(3, "Steve","Rogers","11-11-36","capitan_america","usuario","capitan_america@gmail.com","estrellaescudo","activo");

insert into aplicaciones values(1,"Aplicacion","chat","Intrachat","1.0","spiderman",NOW(),1.0);
insert into aplicaciones values(2,"Juego","snake","Snake2D","1.0","capitan_america",NOW(),1.0);

insert into  compras values(1,2,2,NOW());
insert into  compras values(2,3,1,NOW());

insert into  gestionaUsuarios values(1,2,"20-04-2016",null,null);
insert into  gestionaUsuarios values(2,3,"11-05-2016",null,null);

insert into  ofertas values(1,2,2,"9-05-2016",null);
insert into  ofertas values(2,2,2,"1-05-2016",null);

insert into valoraciones values(1,2,NOW(),5,3,"Rudimentaria pero muy util");
insert into valoraciones values(2,1,NOW(),5,1,"Muy divertido, parece noventero");
