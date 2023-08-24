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
    email VARCHAR(100) NOT NULL
    );

-- Tabla de artículos
CREATE TABLE articulos (
    idProducto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    UNIQUE KEY (precio)
);

-- Tabla de carrito de compras
CREATE TABLE carrito (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    articulo_id INT NOT NULL,
    cantidad INT NOT NULL,
    articulo_precio DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (articulo_id) REFERENCES articulos(id),
    FOREIGN KEY (articulo_precio) REFERENCES articulos(precio)
);

-- Tabla de compras
CREATE TABLE compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    articulo_id INT NOT NULL,
    cantidad INT NOT NULL,
    articulo_precio DECIMAL(10, 2) NOT NULL,
    fecha_compra DATE NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (articulo_id) REFERENCES articulos(id),
    FOREIGN KEY (articulo_precio) REFERENCES articulos(precio)
);

-- Tabla de ventas
CREATE TABLE ventas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    articulo_id INT NOT NULL,
    cantidad INT NOT NULL,
    articulo_precio DECIMAL(10, 2) NOT NULL,
    fecha_venta DATE NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (articulo_id) REFERENCES articulos(id),
    FOREIGN KEY (articulo_precio) REFERENCES articulos(precio)
);


-- Inserción de datos en la tabla usuarios
INSERT INTO usuarios (nombre, email, telefono, contrasenia) VALUES
    ('Admin', 'admin@gmail.com', '123456789', 'admin1234*'),
    ('María López', 'maria@gmail.com', '987654321', 'maria1234*'),
    ('Carlos Gómez', 'carlos@gmail.com', '555555555', 'carlos1234*');

-- Inserción de datos en la tabla articulos
INSERT INTO articulos (nombre, descripcion, precio) VALUES
    ('Canasta Navideña', 'Canasta con productos navideños', 10000),
    ('Queque Navideño', 'Queque Navideño Artesanal', 5000),
    ('Pastel de Papa', 'Pastel de Papa con carne y chile', 6500);

-- Inserción de datos en la tabla compras
INSERT INTO compras (usuario_id, articulo_id, cantidad, articulo_precio, fecha_compra) VALUES
    (2, 3, 1, 6500, '2023-07-31'),
    (2, 1, 2, 10000, '2023-07-30'),
    (3, 2, 3, 5000, '2023-07-29');

-- Inserción de datos en la tabla ventas
INSERT INTO ventas (usuario_id, articulo_id, cantidad, articulo_precio, fecha_venta) VALUES
    (2, 3, 1, 6500, '2023-07-31'),
    (2, 1, 2, 10000, '2023-07-30'),
    (3, 2, 3, 5000, '2023-07-29');