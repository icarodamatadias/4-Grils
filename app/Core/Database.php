<?php

namespace Ifba\Core;


class Database{

    protected \PDO $conexao;

    public function __construct(){
        
        $servidor = 'localhost';
        $banco = 'atividades';
        $usuario = 'root';
        $senha = '';
        
        $dsn = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($dsn,$usuario,$senha);

    }
}