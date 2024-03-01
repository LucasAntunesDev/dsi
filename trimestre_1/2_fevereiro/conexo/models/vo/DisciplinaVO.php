<?php

namespace Model\VO;

final class DisciplinaVO extends VO
{
    private $nome;
    private $professor_id;

    public function __construct($id = 0, $nome = '', $professor_id = 0)
    {
        parent::__construct($id);
        $this->nome = $nome;
        $this->professor_id = $professor_id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getProfessorId()
    {
        return $this->professor_id;
    }

    public function setProfessorId($professor_id)
    {
        $this->professor_id = $professor_id;
    }
}