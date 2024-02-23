create database conexo

-- Professores –

create table professores (
	id int not null primary key auto_increment,
	nome varchar(255) not null
)

insert into professores (nome) values ('professor 1'), ('professor 2'), ('professor 3'), ('professor 4'), ('professor 5')

-- Disciplinas –
create table disciplinas (
id int not null primary key auto_increment,
	nome varchar(255) not null,
	professor_id int not null
    --,
	--grupos_id int
	)

ALTER TABLE disciplinas
ADD FOREIGN KEY (professor_id) REFERENCES professores(id)

ALTER TABLE disciplinas
ADD FOREIGN KEY (grupos_id) references grupos(id)

insert into disciplinas (nome, professor_id) values ('disciplina 1', 1), ('disciplina 2', 2), ('disciplina 3', 3), ('disciplina 4', 4), ('disciplina 5', 5)

-- Grupos –

create table grupos (
id int not null primary key auto_increment,
	nome varchar(255) not null,
--disciplinas_id int not null
)

ALTER TABLE grupos
ADD FOREIGN KEY (disciplinas_id) references disciplinas(id)

insert into grupos (nome) values ('grupo 1'), ('grupo 2'), ('grupo 3'), ('grupo 4'), ('grupo 5')

-- grupos_disciplinas

create table grupos_disciplinas (
	id int not null primary key auto_increment,
    grupo_id int not null,
    disciplina_id int not null,
	foreign key (grupo_id) references grupos(id),
	foreign key (disciplina_id) references disciplinas(id)
)

insert into grupos_disciplinas (grupo_id, disciplina_id) values (1, 1), (1, 2), (1, 3), (1, 4), (1, 5)
insert into grupos_disciplinas (grupo_id, disciplina_id) values (2, 1), (1, 2), (4, 3), (2, 4), (3, 5)


-- Palavras –

create table palavras (
	id int not null primary key auto_increment,
	palavra varchar(255) not null
)

insert into palavras (palavra) values ('palavra 1'), ('palavra 2'), ('gpalavra 3'), ('palavra 4'), ('palavra 5')

-- grupos_palavras–

create table grupos_palavras (
	id int not null primary key auto_increment,
    grupo_id int not null,
    palavra_id int not null,
	foreign key (grupo_id) references grupos(id),
	foreign key (palavra_id) references palavras(id)
)

insert into grupos_palavras (grupo_id, palavra_id) values (1, 1), (1, 2), (1, 3), (1, 4), (1, 5)
insert into grupos_palavras (grupo_id, palavra_id) values (2, 1), (1, 2), (4, 3), (2, 4), (3, 5)