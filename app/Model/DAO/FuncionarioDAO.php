<?php

namespace Ifba\Model\DAO;
use Ifba\Model\Entities\Funcionario;
use \PDO;
 class FuncionarioDAO { 
    private \PDO $pdo; 

    public function __construct( $pdo) { 
        $this->pdo = $pdo; 
    } 
    
    public function cadastrarFuncionario( $funcionario) { 
        $query = "INSERT INTO funcionarios (nome, cargo, cpf, email, senha, datanascimento, telefone, logradouro) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?)"; 
        $stmt = $this->pdo->prepare($query); 
        $stmt->bindValue(1, $funcionario->getNome()); 
        $stmt->bindValue(2, $funcionario->getCargo()); 
        $stmt->bindValue(3, $funcionario->getCpf()); 
        $stmt->bindValue(4, $funcionario->getEmail()); 
        $stmt->bindValue(5, $funcionario->getSenha()); 
        $stmt->bindValue(6, $funcionario->getDataNascimento()); 
        $stmt->bindValue(7, $funcionario->getTelefone()); 
        $stmt->bindValue(8, $funcionario->getLogradouro()); 
        return $stmt->execute(); 
    } 
        
    public function buscarFuncionario($id) { 
        $query = "SELECT * FROM funcionarios WHERE id = ?"; 
        $stmt = $this->pdo->prepare($query); 
        $stmt->bindValue(1, $id); 
        $stmt->execute(); 
        $funcionario = $stmt->fetch(PDO::FETCH_ASSOC); 
        return new Funcionario( 
            $funcionario['id'], 
            $funcionario['nome'], 
            $funcionario['cargo'], 
            $funcionario['cpf'], 
            $funcionario['email'], 
            $funcionario['senha'], 
            $funcionario['datanascimento'], 
            $funcionario['telefone'], 
            $funcionario['logradouro'] 
        ); 
    } 
    
    public function buscarFuncionarios() { 
        $query = "SELECT * FROM funcionarios"; 
        $stmt = $this->pdo->prepare($query); 
        $stmt->execute(); 
        $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        $listaFuncionarios = []; 
        foreach ($funcionarios as $funcionario) { 
            $listaFuncionarios[] = new Funcionario( 
                $funcionario['id'], 
                $funcionario['nome'], 
                $funcionario['cargo'],
                $funcionario['cpf'], 
                $funcionario['email'], 
                $funcionario['senha'], 
                $funcionario['datanascimento'], 
                $funcionario['telefone'], 
                $funcionario['logradouro'] ); 
            } 
            return $listaFuncionarios; 
        } 
        
        public function editarFuncionario($funcionario) { 
            $query = "UPDATE funcionarios SET nome = ?, cargo = ?, cpf = ?, 
            email = ?, senha = ?, datanascimento = ?, telefone = ?, logradouro = ? 
            WHERE id = ?"; 
            $stmt = $this->pdo->prepare($query); 
            $stmt->bindValue(1, $funcionario->getNome()); 
            $stmt->bindValue(2, $funcionario->getCargo()); 
            $stmt->bindValue(3, $funcionario->getCpf()); 
            $stmt->bindValue(4, $funcionario->getEmail()); 
            $stmt->bindValue(5, $funcionario->getSenha()); 
            $stmt->bindValue(6, $funcionario->getDataNascimento()); 
            $stmt->bindValue(7, $funcionario->getTelefone()); 
            $stmt->bindValue(8, $funcionario->getLogradouro()); 
            $stmt->bindValue(9, $funcionario->getId()); 
            return $stmt->execute(); 
        } 
        
        public function excluirFuncionario($id) { 
            $query = "DELETE FROM funcionarios WHERE id = ?"; 
            $stmt = $this->pdo->prepare($query); 
            $stmt->bindValue(1, $id); 
            return $stmt->execute();

        }
}
    