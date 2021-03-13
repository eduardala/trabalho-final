CREATE DATABASE banco_final;

USE banco_final;

CREATE TABLE clientes
(
	idCliente INT PRIMARY KEY,
    nome VARCHAR(60) NOT NULL, 
    sexo CHAR(1) NOT NULL,
    
    CONSTRAINT PK_Cliente PRIMARY KEY (IdCliente)
);

CREATE TABLE documentos
(
	idDocumento INT PRIMARY KEY,
    idCliente INT NOT NULL,
    tipoDocumento VARCHAR(25) NOT NULL,
    numeroDocumento VARCHAR(15) NOT NULL,
    
    CONSTRAINT PK_Documento PRIMARY KEY (idDocimento),
    CONSTRAINT FK_idCliente FOREIGN KEY (idCliente) REFERENCES clientes (idCliente)
);