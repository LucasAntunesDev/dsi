select
    palavras.palavra as palavra,
    grupos.nome as 'grupos'
from
    grupos_palavras
    join grupos on grupos_palavras.grupo_id = grupos.id
    join palavras on grupos_palavras.palavra_id = palavras.id