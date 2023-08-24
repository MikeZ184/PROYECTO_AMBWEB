-- Creación de la base de datos distribuidora
CREATE DATABASE Proyecto_Web_Distribuidora;

-- Usar la base de datos distribuidora
USE Proyecto_Web_Distribuidora;

-- Tabla de usuarios // Usando HASH
-- CREATE TABLE usuarios (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     nombre VARCHAR(50),
--     apellido VARCHAR(50),
--     correo VARCHAR(100) NOT NULL UNIQUE,
--     contrasena VARCHAR(255) NOT NULL,
--     hashed_password VARCHAR(255) NOT NULL
-- );

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    );

-- Tabla de artículos
CREATE TABLE productos (
    idProducto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    UNIQUE KEY (precio)
);

CREATE TABLE facturas (

    idFactura INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    monto DECIMAL(10, 2) NOT NULL,
    UNIQUE KEY (monto)

);