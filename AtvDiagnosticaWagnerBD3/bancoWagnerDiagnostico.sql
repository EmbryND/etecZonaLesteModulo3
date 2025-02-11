create database bancoWagnerDiagnostico;
use bancoWagnerDiagnostico;

create table usuario (
id int AUTO_INCREMENT PRIMARY KEY,
nome varchar(50),
idade int,
endereco varchar(250),
telefone varchar(11)
);

create table produto (
  id int AUTO_INCREMENT PRIMARY KEY,
  nome varchar(50),
  descricao varchar(250),
  preco decimal(10,2),
);

create table carrinho (
  usuario_id int,
  produto_id int,
  quantidade INT,
  PRIMARY KEY (usuario_id, produto_id),
  FOREIGN KEY (usuario_id) REFERENCES usuario(id),
  FOREIGN KEY (produto_id) REFERENCES produto(id)
);