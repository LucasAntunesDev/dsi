<?php

namespace Model;

use Model\VO\ProfessorVO;
use Util\Database;

final class ProfessorModel extends Model
{
    public function selectAll($vo = null)
    {
        $db = new Database();
        $data = $db->select('SELECT * FROM professores');

        $array = [];

        foreach ($data as $row) {
            $vo = new ProfessorVO(
                $row['id'],
                $row['nome'],
                $row['login'],
                $row['senha']
            );
            array_push($array, $vo);
        }

        return $array;
    }

    public function selectOne($vo = null)
    {
        $db = new Database();
        $query = 'SELECT * FROM professores WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0)
            return null;

        return new ProfessorVO(
            $data[0]['id'],
            $data[0]['nome'],
            $data[0]['login'],
            $data[0]['senha']
        );
    }

    public function insert($vo = null)
    {
        $db = new Database();
        $query = 'INSERT INTO professores (nome, login, senha) VALUES ( :nome, :login, :senha)';

        $binds = [
            ':nome' => $vo->getNome(),
            ':login' => $vo->getLogin(),
            ':senha' => $vo->getSenha()
        ];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null)
    {
        $db = new Database();

        $query = 'UPDATE professores
                    SET  
                    nome = :nome,
                    login = :login,
                    senha = :senha
                    WHERE id = :id';

        $binds = [
            ':nome' => $vo->getNome(),
            ':login' => $vo->getlogin(),
            ':senha' => $vo->getSenha(),
            ':id' => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($vo = null)
    {
        $db = new Database();
        $query = 'DELETE FROM professores WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}