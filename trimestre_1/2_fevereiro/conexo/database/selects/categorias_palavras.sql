select
    categorias_palavras.id
    categorias.nome as 'Categoria',
    palavras.nome as 'Palavra'
from
    categorias_palavras
    join categorias on categorias_palavras.categoria_id = categorias.id
    join palavras on categorias_palavras.palavra_id = palavras.id
