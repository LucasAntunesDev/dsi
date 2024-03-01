select
    palavras.nome as 'Palavra',
    categorias.nome as 'Categoria'
from
    categorias_palavras
    join categorias on categorias_palavras.categoria_id = categorias.id
    join palavras on categorias_palavras.palavra_id = palavras.id