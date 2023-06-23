CREATE DATABASE projetoA3;

CREATE TABLE login (
nome VARCHAR (100),
login VARCHAR (25),
senha VARCHAR (25),
PRIMARY KEY (login)
);

INSERT INTO login (nome, login, senha)
VALUES 
	('administrador', 'admin', 'admin@123');
	
