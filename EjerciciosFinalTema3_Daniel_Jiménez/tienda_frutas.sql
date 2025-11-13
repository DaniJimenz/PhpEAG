CREATE DATABASE tienda_frutas;

USE tienda_frutas;

CREATE TABLE categorias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT, UNIQUE(nombre)
);

CREATE TABLE productos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(150) NOT NULL,
    categoria_id INT NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL,

    FOREIGN KEY (categoria_id) REFERENCES categorias(id));
);

CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL
);

CREATE TABLE pedidos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10, 2) NOT NULL,

    FOREIGN KEY (usuario_id) REFERENCES usuarios(id));
);

INSERT INTO categorías (nombre) VALUES 'Cítricos', 'Frutas Rojas', 'Tropicales' ;
INSERT INTO productos (nombre, categoria_id, precio, stock) VALUES ''









