-- Remove a tabela 'alunos' caso ela já exista, evitando erros ao recriá-la
drop table if exists alunos;

-- Cria a tabela 'alunos' com os seguintes campos:
-- id: identificador único, chave primária e auto_incrementado
-- nome: nome do aluno, obrigatório
-- idade: idade do aluno, obrigatório
-- ativo: indica se o aluno está ativo, com valor padrão 'true'
create table alunos (
    id int primary key auto_increment,
    nome varchar(255) not null,
    idade int not null,
    ativo boolean default true
);

-- Remove a tabela 'professores' caso ela já exista, evitando erros ao recriá-la
drop table if exists professores;

-- Cria a tabela 'professores' com os mesmos campos da tabela 'alunos'
-- id: identificador único, chave primária e auto_incrementado
-- nome: nome do professor, obrigatório
-- idade: idade do professor, obrigatório
-- ativo: indica se o professor está ativo, com valor padrão 'true'
create table professores (
    id int primary key auto_increment,
    nome varchar(255) not null,
    idade int not null,
    ativo boolean default true
);

-- Insere um aluno chamado 'João', com 20 anos de idade
-- O campo 'ativo' não é informado, então será definido como 'true' automaticamente
insert into alunos (nome, idade) values ('João', 20);

-- Insere um professor chamado 'Maria', com 30 anos de idade
-- O campo 'ativo' também será 'true' por padrão
insert into professores (nome, idade) values ('Maria', 30);

-- Seleciona todos os professores cadastrados na tabela
select * from professores;
