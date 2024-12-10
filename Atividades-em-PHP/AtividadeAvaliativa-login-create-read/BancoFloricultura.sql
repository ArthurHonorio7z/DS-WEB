CREATE DATABASE floricultura;

create table produtos (id int PRIMARY KEY AUTO_INCREMENT, nomeP varchar (20), valor float, descricao varchar(1000));

create table usuarios (id int PRIMARY KEY AUTO_INCREMENT, nomeU varchar (20), email varchar(20), senha varchar(15));

INSERT INTO usuarios (nomeU, email, senha) 
VALUES ('admin', 'admin@admin.com', '1234');

INSERT INTO produtos (nomeP, valor, descricao) 
VALUES ('Rosa Vermelha', '9', 'Flor do amor');