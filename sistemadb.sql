create table usuario
(
	id int not null AUTO_INCREMENT,
	nome varchar(120) not null,
	senha varchar(150) not null,
	email varchar(200),
	telefone varchar(30),
	cidade varchar(80),
	estado char(2),
	observacao text,
	
	constraint pk_id primary key(id)
);