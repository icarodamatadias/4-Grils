create schema Fourgrils;
use Fourgrils;

create table funcionarios(
id int not null auto_increment primary key, 
nome varchar(100) not null,
cargo varchar(45) not null,
cpf varchar(15) not null,
email varchar(100) not null,
senha varchar(45) not null,
datanascimento date not null,
telefone varchar(45) not null,
logradouro varchar(80) not null
);

create table vestimenta(
id int not null auto_increment primary key,
categoria varchar(50) not null,
descricao varchar(150) not null,
cor varchar(50) not null,
quantidade int not null,
preco float not null,
marca varchar(50) not null,
tipo varchar(50) not null,
custo float not null,
tamanho varchar(50)not null
);

create table acessorio(
id int not null auto_increment primary key,
categoria varchar(50) not null,
descricao varchar(150) not null,
cor varchar(50) not null,
quantidade int not null,
preco float not null,
marca varchar(50) not null,
tipo varchar(50) not null,
custo float not null,
material varchar(50)not null
);

create table calcado(
id int not null auto_increment primary key,
categoria varchar(50) not null,
descricao varchar(150) not null,
cor varchar(50) not null,
quantidade int not null,
preco float not null,
marca varchar(50) not null,
tipo varchar(50) not null,
custo float not null,
numero varchar(50)not null
);