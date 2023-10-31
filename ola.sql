create schema pachecocorretor;
use pachecocorretor;

create table Cliente(
id int primary key not null auto_increment,
nome varchar(30), 
numeroTelefone int,
rendabruta float,
endereco varchar(60),
contatadoPor int,
foreign key (contatadoPor) references Corretor(idCorretor)
  );
  
create table Corretor(
idCorretor int primary key not null auto_increment,
nome varchar(30), 
login varchar(15),
senha varchar(20)
);