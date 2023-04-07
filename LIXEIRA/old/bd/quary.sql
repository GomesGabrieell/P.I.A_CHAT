create database dbpia
use dbpia

select * from cv_pia
select * from aprendizagem_palavras
select * from aprendizagem_palavras_modulo

CREATE TABLE cv_pia(
	id INT AUTO_INCREMENT PRIMARY KEY,
    pia varchar(600) NOT NULL,
    usuario varchar(600) NOT NULL,
    sala longtext,
	texto longtext
);

CREATE TABLE aprendizagem_palavras_modulo(
	id INT AUTO_INCREMENT PRIMARY KEY,
    quem_fez varchar(600) NOT NULL,
    modulo varchar(600) NOT NULL
);

CREATE TABLE aprendizagem_palavras(
	id INT AUTO_INCREMENT PRIMARY KEY,
    palavra varchar(600) NOT NULL,
    resposta varchar(600) NOT NULL
);

