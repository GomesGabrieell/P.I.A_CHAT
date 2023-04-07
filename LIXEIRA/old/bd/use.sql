create database dbpia_user
use dbpia_user

select * from dados_usuarios
CREATE TABLE dados_usuarios(
	id INT AUTO_INCREMENT PRIMARY KEY,
    user_name varchar(600) NOT NULL,
    email varchar(600) NOT NULL,
    senha varchar(600) NOT NULL,
    chave longtext
);