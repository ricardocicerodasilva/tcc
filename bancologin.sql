create database  bd_login;
use bd_login;

CREATE TABLE  tb_dados (
  nome varchar(50) NOT NULL,
  senha varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into tb_dados (nome,senha) values ("israel","123456");


select * from tb_dados;

-- DROP TABLE tb_dados;