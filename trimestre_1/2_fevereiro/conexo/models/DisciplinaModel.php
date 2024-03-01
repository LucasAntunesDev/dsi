<?php

namespace Model;

use Model\VO\DisciplinaVO;
use Util\Database;

final class DisciplinaModel extends Model
{
    public function selectAll($vo = null)
    {
        $db = new Database();
        $data = $db->select('SELECT * FROM disciplinas');

        $array = [];

        foreach ($data as $row) {
            $vo = new DisciplinaVO(
                $row['id'],
                $row['nome'],
                $row['professor_id']
            );
            array_push($array, $vo);
        }

        return $array;
    }

    public function selectOne($vo = null)
    {
        $db = new Database();
        $query = 'SELECT * FROM disciplinas WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0)
            return null;

        return new DisciplinaVO(
            $data[0]['id'],
            $data[0]['nome'],
            $data[0]['professor_id']
        );
    }

    public function insert($vo = null)
    {
        $db = new Database();
        $query = 'INSERT INTO disciplinas (nome, professor_id) VALUES (:nome, :professor_id)';

        $binds = [
            ':nome' => $vo->getNome(),
            ':professor_id' => $vo->getProfessorId()
        ];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null)
    {
        $db = new Database();

        $query = 'UPDATE disciplinas
                    SET  
                    nome = :nome,
                    professor_id = :professor_id
                    WHERE id = :id';

        $binds = [
            ':nome' => $vo->getNome(),
            ':professor_id' => $vo->getProfessorId(),
            ':id' => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($vo = null)
    {
        $db = new Database();
        $query = 'DELETE FROM disciplinas WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}