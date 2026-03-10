-- Cria o banco se nao existir
CREATE DATABASE IF NOT EXISTS meubanco;
USE meubanco;

-- Cria a tabela de dados dos alunos
CREATE TABLE IF NOT EXISTS dados (
    AlunoID   INT,
    Nome      VARCHAR(50),
    Sobrenome VARCHAR(50),
    Endereco  VARCHAR(150),
    Cidade    VARCHAR(50),
    Host      VARCHAR(50)
);
