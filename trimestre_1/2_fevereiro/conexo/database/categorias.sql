-- Categorias –
create table
    categorias (
        id int not null primary key auto_increment,
        nome varchar(255) not null,
        disciplina_id int not null,
        FOREIGN KEY (disciplina_id) REFERENCES disciplinas (id)
    );

insert into
    categorias (nome, disciplina_id)
values
    ('Advérbios de Lugar', 1),
    ('Fontes de Energia', 1),
    ('Participantes num processo judicial', 1),
    ('Notas Musicais', 1),
    ('Times de Futebol', 1);

insert into
    categorias (nome, disciplina_id)
values
    ('Bancos', 1)

insert into
    categorias (nome, disciplina_id)
values
    ('Estabelecimentos educacionais', 1)

insert into
    categorias (nome, disciplina_id)
values
    ('Cargos no mercado financeiro', 1)

insert into
    categorias (nome, disciplina_id)
values
    ('Comida', 1)