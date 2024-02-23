select
    palavras.palavra as 'Palavra',
    grupos.nome as 'Grupo'
from
    grupos_palavras
    join grupos on grupos_palavras.grupo_id = grupos.id
    join palavras on grupos_palavras.palavra_id = palavras.id