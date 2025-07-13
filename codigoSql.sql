-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS UsuariosChatiBot
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_general_ci;

-- Seleciona o banco de dados
USE UsuariosChatiBot;

-- Criação da tabela de usuários
CREATE TABLE IF NOT EXISTS usuario (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) UNIQUE NOT NULL,
    nome VARCHAR(50),
    senha VARCHAR(256)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Criação da tabela de respostas do prompt
CREATE TABLE IF NOT EXISTS respostaPronpt (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    codUsuario INT NOT NULL,
    msgUsuario LONGTEXT,
    msgChat LONGTEXT,
    FOREIGN KEY (codUsuario) REFERENCES usuario(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
