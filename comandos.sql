-- Criando Banco de dados -- 
CREATE SCHEMA `alunos` ;

-- Criando tabela alunos -- 
CREATE TABLE tb_aluno (
    id int,
    nome varchar(255),
    cidade varchar(255),
    matricula varchar(20)
);

-- Adicionando valores na tabela --
INSERT INTO tb_aluno (nome, cidade,matricula)
VALUES ('Elias','Mauriti',1111);

INSERT INTO tb_aluno (nome, cidade,matricula)
VALUES ('Alessandro','Hellcife',666);

INSERT INTO tb_aluno (nome, cidade,matricula)
VALUES ('XeroVerde','Paumacia',2424);