CREATE DATABASE `distribuidora` ;

CREATE TABLE distribuidora.carrito (

  `id_carrito` int NOT NULL AUTO_INCREMENT,

  `nombre` varchar(20) COLLATE utf8mb4_eo_0900_ai_ci NOT NULL,

  `apellidos` varchar(30) COLLATE utf8mb4_eo_0900_ai_ci NOT NULL,

  `producto` varchar(25) COLLATE utf8mb4_eo_0900_ai_ci DEFAULT NULL,

  `precio` double NOT NULL,

  PRIMARY KEY (`id_carrito`)

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_eo_0900_ai_ci;


CREATE TABLE `distribuidora`.`articulo` ( --Le falta precio

  `idArticulo` INT NOT NULL,

  `nombreArticulo` VARCHAR(45) NOT NULL);

)


CREATE TABLE distribuidora.compras ( --Agregar foreign de articulos id, nombre, precio / para realizar consultas

  `id_compras` int NOT NULL AUTO_INCREMENT,

  `cliente` varchar(30) NOT NULL,

  `monto` varchar(30) NOT NULL,

  `fecha` varchar(30) NOT NULL,

  PRIMARY KEY (`id_venta`)

) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE distribuidora.ventas ( --Agregar foreign de articulos para el id

  `id_venta` int NOT NULL AUTO_INCREMENT,

  `cliente` varchar(30) NOT NULL,

  `monto` varchar(30) NOT NULL,

  `fecha` varchar(30) NOT NULL,

  PRIMARY KEY (`id_venta`)

) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


create table distribuidora.usuario(

  id_usuario INT NOT NULL AUTO_INCREMENT,

  correo varchar(20),

  password varchar(200),

PRIMARY KEY (id_usuario)

)ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb4

COLLATE = utf8mb4_eo_0900_ai_ci;

 

insert into distribuidora.usuario (id_usuario, username, password) values

(1,'Yeikel','$2a$10$P1.w58XvnaYQUQgZUCk4aO/RTRl8EValluCqB3S2VMLTbRt.tlre.'),

(2,'Priscilla','$2a$10$GkEj.ZzmQa/aEfDmtLIh3udIH5fMphx/35d0EYeqZL5uzgCJ0lQRi'),

(3,'Adrian','$2a$10$koGR7eS22Pv5KdaVJKDcge04ZB53iMiw76.UjHPY.XyVYlYqXnPbO');

insert into distribuidora.rol (id_rol, nombre, id_usuario) values

 (1,'ROLE_ADMIN',1), (2,'ROLE_VENDEDOR',1), (3,'ROLE_USER',1),

 (4,'ROLE_VENDEDOR',2), (5,'ROLE_USER',2),

(6,'ROLE_US

CREATE DATABASE `distribuidora` ;

drop user admin_123;

create user 'admin_123'@'%' identified by 'administrador_1.';

grant all privileges on distribuidora.* to 'admin_123'@'%';

flush privileges;

create user 'admin_123'@'%' identified by 'administrador_1.';

CREATE TABLE distribuidora.carrito (

  `id_carrito` int NOT NULL AUTO_INCREMENT,

  `nombre` varchar(20) COLLATE utf8mb4_eo_0900_ai_ci NOT NULL,

  `apellidos` varchar(30) COLLATE utf8mb4_eo_0900_ai_ci NOT NULL,

  `producto` varchar(25) COLLATE utf8mb4_eo_0900_ai_ci DEFAULT NULL,

  `precio` double NOT NULL,

  PRIMARY KEY (`id_carrito`)

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_eo_0900_ai_ci;

CREATE TABLE `distribuidora`.`catalogo` (

  `idcatalogo` INT NOT NULL,

  `Articulo` VARCHAR(45) NOT NULL);

)

CREATE TABLE distribuidora.consulta (

  `id_consulta` int NOT NULL AUTO_INCREMENT,

  `texto` varchar(45) NOT NULL,

  PRIMARY KEY (`id_consulta`)

) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE distribuidora.pedido (

  `id_pedido` int NOT NULL AUTO_INCREMENT,

  `cliente` varchar(30) NOT NULL,

  `monto` varchar(30) NOT NULL,

  `estado_venta` varchar(30) NOT NULL,

  `fecha` varchar(30) NOT NULL,

  PRIMARY KEY (`id_pedido`)

) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE distribuidora.seguridad (

  `id_seguridad` int NOT NULL AUTO_INCREMENT,

  `nombre` varchar(20) COLLATE utf8mb4_eo_0900_ai_ci NOT NULL,

  `apellidos` varchar(30) COLLATE utf8mb4_eo_0900_ai_ci NOT NULL,

  `software` varchar(25) COLLATE utf8mb4_eo_0900_ai_ci DEFAULT NULL,

  `producto` varchar(25) COLLATE utf8mb4_eo_0900_ai_ci DEFAULT NULL,

  `precio` double NOT NULL,

  PRIMARY KEY (`id_seguridad`)

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_eo_0900_ai_ci;

CREATE TABLE distribuidora.venta (

  `id_venta` int NOT NULL AUTO_INCREMENT,

  `cliente` varchar(30) NOT NULL,

  `monto` varchar(30) NOT NULL,

  `fecha` varchar(30) NOT NULL,

  PRIMARY KEY (`id_venta`)

) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

create table distribuidora.usuario(

  id_usuario INT NOT NULL AUTO_INCREMENT,

  username varchar(20),

  password varchar(200),

PRIMARY KEY (id_usuario)

)ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb4

COLLATE = utf8mb4_eo_0900_ai_ci;

 

create table distribuidora.rol (

  id_rol INT NOT NULL AUTO_INCREMENT,

  nombre varchar(20),

  id_usuario int,

  PRIMARY KEY (id_rol),

  foreign key fk_rol_usuario (id_usuario) references usuario(id_usuario)

)

ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb4

COLLATE = utf8mb4_eo_0900_ai_ci;

insert into distribuidora.usuario (id_usuario, username, password) values

(1,'Yeikel','$2a$10$P1.w58XvnaYQUQgZUCk4aO/RTRl8EValluCqB3S2VMLTbRt.tlre.'),

(2,'Priscilla','$2a$10$GkEj.ZzmQa/aEfDmtLIh3udIH5fMphx/35d0EYeqZL5uzgCJ0lQRi'),

(3,'Adrian','$2a$10$koGR7eS22Pv5KdaVJKDcge04ZB53iMiw76.UjHPY.XyVYlYqXnPbO');

insert into distribuidora.rol (id_rol, nombre, id_usuario) values

 (1,'ROLE_ADMIN',1), (2,'ROLE_VENDEDOR',1), (3,'ROLE_USER',1),

 (4,'ROLE_VENDEDOR',2), (5,'ROLE_USER',2),

 (6,'ROLE_USER',3);

ER',3);