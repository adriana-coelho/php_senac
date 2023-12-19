Necessária a criação de um banco de dados.
Siga os seguintes passos:

CREATE DATABASE livraria;
USE livraria;
CREATE TABLE cadastros (
  nome varchar(40) NOT NULL,
  email varchar(40) NOT NULL,
  telefone varchar(11) NOT NULL,
  cpf varchar(11) NOT NULL,
  senha varchar(20) NOT NULL
);
