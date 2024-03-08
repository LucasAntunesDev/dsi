insert into
	professores (nome, login, senha)
values
('Rafael Jaques', 'Rafael Jaques', 'Rafael Jaques'),
('Thyago Salvá', 'Thyago Salvá', 'Thyago Salvá'),
('Ivan Prá', 'Ivan Prá', 'Ivan Prá'),
('Eduardo Schenato', 'Eduardo Schenato', 'Eduardo Schenato'),
('Ronaldo Serpa da Rosa', 'Ronaldo Serpa da Rosa', 'Ronaldo Rosa');


insert into
    palavras (nome)
values
( 'lá'),
( 'acolá'),
( 'ali'),
( 'aqui'),
( 'vento'),
( 'sol'),
( 'carvão'),
( 'água'),
( 'ré'),
( 'juíza'),
( 'testemunha'),
( 'autora'),
( 'dó'),
( 'mi'),
( 'si'),
( 'fá'),
( 'inter'),
( 'grêmio'),
( 'palmeiras'),
( 'flamengo'),
( 'milan'),
( 'banrisul'),
( 'caixa'),
( 'bradesco'),
( 'santander'),
( 'liceu'),
( 'escola'),
( 'ginágio'),
( 'instituto'),
( 'traders'),
( 'investidores'),
( 'contadores'),
( 'economistas'),
( 'merenda'),
( 'provisão'),
( 'refeição'),
( 'lance'),
( 'zumbi'),
( 'colégio'),
( 'bancários'),
( 'recreio');


insert into
	disciplinas (nome, professor_id)
values
( 'Desenvolvimento de Sistemas', 2),
( 'Programação Web III', 1),
( 'Programação Web II', 4),
( 'Programação Web I', 2),
( 'Introdução a Computação', 3);

insert into
    categorias (nome, disciplina_id)
values
('Advérbios de Lugar',  1),
('Fontes de Energia',  1),
('Participantes num processo judicial',  1),
('Notas Musicais',  1),
('Times de Futebol',  1),
('Bancos',  1),
('Estabelecimentos educacionais',  1),
('Cargos no mercado financeiro',  1),
('Comida',  1),
('Bairros do Rio de Janeiro',  1);

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
(6, 25),
(7, 26),
(7, 27),
(7, 28),
(7, 29),
(8, 30),
(8, 31),
(8, 32),
(8, 33),
(9, 34),
(9, 35),
(9, 36),
(9, 37),
(10, 38),
(10, 39),
(10, 40),
(10, 41);
