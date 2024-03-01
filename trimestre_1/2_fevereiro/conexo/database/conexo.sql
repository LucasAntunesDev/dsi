create table
	professores (
		id int not null primary key auto_increment,
		nome varchar(255) not null,
		login varchar(255) not null,
		senha varchar(255) not null
	);

insert into
	professores (nome, login, senha)
values
	('professor 1', 'professor 1', 'professor 1'),
	('professor 2', 'professor 2', 'professor 2'),
	('professor 3', 'professor 3', 'professor 3'),
	('professor 4', 'professor 4', 'professor 4'),
	('professor 5', 'professor 5', 'professor 5');

create table
	disciplinas (
		id int not null primary key auto_increment,
		nome varchar(255) not null,
		professor_id int not null,
		FOREIGN KEY (professor_id) REFERENCES professores (id)
	);

insert into
	disciplinas (nome, professor_id)
values
	('Desenvolvimento de Sistemas', 1),
	('Programação Web III', 2),
	('Programação Web II', 3),
	('Programação Web I', 4),
	('Introdução a Computação', 5);
