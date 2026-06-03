-- criação do banco de dados e tabela de usuários.
CREATE DATABASE sistema_simples;
-- seleciona o banco de dados para uso.
USE sistema_simples;
-- cria a tabela de usuários.
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    -- campos para armazenar usuário e senha.
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
-- insere um usuário padrão na tabela de usuários.
INSERT INTO users (username, password) VALUES ('admin','123');
