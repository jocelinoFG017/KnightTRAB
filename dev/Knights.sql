 create database knights;
 use knights;
 create table personagem(
 	codigo integer auto_increment not null,
 	nome varchar(45) not null,
 	descricao varchar(45),
 	armadura varchar(45),
 	constelacao varchar(45),
 	idade integer,
 	primary key(codigo)
 );

