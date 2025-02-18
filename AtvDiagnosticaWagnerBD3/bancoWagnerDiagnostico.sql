CREATE DATABASE bancoWagnerDiagnostico;
USE bancoWagnerDiagnostico;

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    idade INT,
    endereco VARCHAR(250),
    telefone VARCHAR(11),
    email VARCHAR(100),
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    descricao VARCHAR(250),
    preco DECIMAL(10,2),
    estoque INT,
    categoria VARCHAR(50)
);

CREATE TABLE carrinho (
    usuario_id INT,
    produto_id INT,
    quantidade INT,
    data_adicao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (usuario_id, produto_id),
    FOREIGN KEY (usuario_id) REFERENCES usuario(id),
    FOREIGN KEY (produto_id) REFERENCES produto(id)
);
