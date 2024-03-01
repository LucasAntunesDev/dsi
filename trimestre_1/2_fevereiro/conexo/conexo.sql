create table
	professores (
		id int not null primary key auto_increment,
		nome varchar(255) not null
	);
insert into
	professores (nome)
values
	('professor 1'),
	('professor 2'),
	('professor 3'),
	('professor 4'),
	('professor 5');
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
	-- Categorias –
create table
	categorias (
		id int not null primary key auto_increment,
		nome varchar(255) not null
	);
insert into
	categorias (nome)
values
	('Advérbios de Lugar'),
	('Fontes de Energia'),
	('Participantes num processo judicial'),
	('Notas Musicais'),
	('grupo 5');
	-- categorias_disciplinas;
create table
	categorias_disciplinas (
		id int not null primary key auto_increment,
		categoria_id int not null,
		disciplina_id int not null,
		foreign key (categoria_id) references categoria (id),
		foreign key (disciplina_id) references disciplinas (id)
	);
insert into
	categorias_disciplinas (grupo_id, disciplina_id)
values
	(1, 1),
	(1, 2),
	(1, 3),
	(1, 4),
	(1, 5);
insert into
	categorias_disciplinas (grupo_id, disciplina_id)
values
	(2, 1),
	(1, 2),
	(4, 3),
	(2, 4),
	(3, 5);
	-- Palavras –
create table
	palavras (
		id int not null primary key auto_increment,
		palavra varchar(255) not null
	);
insert into
	palavras (palavra)
values
	('lá'),
	('acolá'),
	('ali'),
	('aqui'),
	('vento'),
	('sol'),
	('carvão'),
	('água'),
	('ré'),
	('juíza'),
	('testemunha'),
	('autora'),
	('dó'),
	('mi'),
	('si'),
	('fá');
	-- categorias_palavras–
create table
	categorias_palavras (
		id int not null primary key auto_increment,
		categoria_id int not null,
		palavra_id int not null,
		foreign key (categoria_id) references categoria (id),
		foreign key (palavra_id) references palavras (id)
	);
insert into
	categorias_palavras (grupo_id, palavra_id)
values
	(1, 1),
	(4, 1),
	(1, 2),
	(1, 3),
	(1, 4),
	(2, 5),
	(2, 6),
	(4, 6),
	(2, 7),
	(2, 8),
	(4, 9),
	(3, 9),
	(3, 10),
	(3, 11),
	(3, 12),
	(2, 13),
	(2, 14),
	(2, 15),
	(2, 16)