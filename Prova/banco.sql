DROP DATABASE IF EXISTS prova;
create database prova;
USE prova;

 CREATE TABLE fluxo_caixa(
id int not null auto_increment,
data date NOT NULL,
tipo varchar(10) NOT NULL,
valor decimal (10,2) NOT NULL,
historico varchar(10) NOT NULL,
cheque varchar(3) NOT NULL,
PRIMARY KEY (id)
);