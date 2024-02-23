create database conexo

– Professores –

create table professores (
	id int not null primary key auto_increment,
	nome varchar(255) not null
)

insert into professores (nome) values ('professor 1')
insert into professores (nome) values ('professor 2')
insert into professores (nome) values ('professor 3')
insert into professores (nome) values ('professor 4')
insert into professores (nome) values ('professor 5')

– Disciplinas –
create table disciplinas (
id int not null primary key auto_increment,
	nome varchar(255) not null,
	professor_id int not null,
	grupos_id int
	)

ALTER TABLE disciplinas
ADD FOREIGN KEY (professor_id) REFERENCES professores(id)

ALTER TABLE disciplinas
ADD FOREIGN KEY (grupos_id) references grupos(id)

insert into disciplinas (nome, professor_id) values ('disciplina 1', 1)

– Grupos –

create table grupos (
id int not null primary key auto_increment,
	nome varchar(255) not null,
disciplinas_id int not null
)

ALTER TABLE grupos
ADD FOREIGN KEY (disciplinas_id) references disciplinas(id)

insert into grupos (nome, disciplinas_id ) values ('grupo 1', 1)

– grupos_disciplinas

create table grupos_disciplinas (
	id int not null primary key auto_increment,
    grupo_id int not null,
    disciplina_id int not null,
	foreign key (grupo_id) references grupos(id),
	foreign key (disciplina_id) references disciplinas(id)
)



– Palavras –

create table palavras (
	id int not null primary key auto_increment,
	palavra varchar(255) not null
)


– grupos_palavras–

create table grupos_palavras (
	id int not null primary key auto_increment,
    grupo_id int not null,
    palavra_id int not null,
	foreign key (grupo_id) references grupos(id),
	foreign key (palavra_id) references palavras(id)
)
