drop database if exists ifsp;

create database ifsp;
use ifsp;


CREATE TABLE Cliente (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nomec VARCHAR(100),
    senha VARCHAR(100),
    email VARCHAR(100),
    ativo bool
);
CREATE TABLE Cidade (
    id_cidade INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    estado CHAR(2)
);