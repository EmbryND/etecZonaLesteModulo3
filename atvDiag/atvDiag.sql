drop table if exists alunos;
create table alunos (
    id int primary key auto_increment,
    nome varchar (255) not null,
    idade int not null,
   ativo boolean default true
);

drop table if exists professores;
create table professores (
    id int primary key auto_increment,
    nome varchar(255) not null,
    idade int not null,
    ativo boolean default true
);

insert into alunos (nome, idade) values('João', 20);
insert into professores (nome, idade) values('Maria', 30);

select * from professores;