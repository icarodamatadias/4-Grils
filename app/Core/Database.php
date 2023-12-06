<?php

namespace Ifba\Core;


class Database{

    protected \PDO $conexao;

    public function __construct(){
        
        $servidor = 'localhost';
        $banco = 'fourgrils';
        $usuario = 'icaro';
        $senha = 'icaro09072005';
        
        $dsn = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($dsn,$usuario,$senha);
    }

    public function getConexao()
    {
        return $this->conexao;
    }
}