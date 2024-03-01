-- categorias_palavras–
create table
    categorias_palavras (
        id int not null primary key auto_increment,
        categoria_id int not null,
        palavra_id int not null,
        foreign key (categoria_id) references categorias (id),
        foreign key (palavra_id) references palavras (id)
    );

insert into
    categorias_palavras (categoria_id, palavra_id)
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
    (2, 16),
    (5, 17),
    (5, 18),
    (5, 19),
    (5, 20),
    (5, 21),
    (6, 22),
    (6, 23),
    (6, 24),
    (6, 25)