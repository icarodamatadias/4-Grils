<?php

namespace Ifba\Model\DAO;

use calcado;
use \PDO;
 class CalcadoDAO { 
    private \PDO $pdo; 

    public function __construct( $pdo) { 
        $this->pdo = $pdo; 
    } 
    
    public function cadastrArcalcado( Calcado $calcado) { 
        $query = "INSERT INTO calcado (
            categoria,
            descricao,
            cor,
            quantidade,
            preco,
            marca,
            tipo,
            custo,
            numero) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
        $stmt = $this->pdo->prepare($query); 
        $stmt->bindValue(1, $calcado->getCategoria()); 
        $stmt->bindValue(2, $calcado->getDescricao()); 
        $stmt->bindValue(3, $calcado->getCor()); 
        $stmt->bindValue(4, $calcado->getQuantidade()); 
        $stmt->bindValue(5, $calcado->getPreco()); 
        $stmt->bindValue(6, $calcado->getMarca()); 
        $stmt->bindValue(7, $calcado->getTipo()); 
        $stmt->bindValue(8, $calcado->getCusto()); 
        $stmt->bindValue(9, $calcado->getnumero()); 
        return $stmt->execute(); 
    } 
        
    public function buscarcalcado($id) { 
        $query = "SELECT * FROM calcado WHERE id = ?"; 
        $stmt = $this->pdo->prepare($query); 
        $stmt->bindValue(1, $id); 
        $stmt->execute(); 
        $calcado = $stmt->fetch(PDO::FETCH_ASSOC); 
        return new Calcado( 
            $calcado['id'], 
            $calcado['categoria'], 
            $calcado['descricao'], 
            $calcado['cor'], 
            $calcado['quantidade'], 
            $calcado['preco'], 
            $calcado['marca'], 
            $calcado['tipo'], 
            $calcado['custo'],
            $calcado['numero'] 
        ); 
    } 
    
    public function buscarcalcados() { 
        $query = "SELECT * FROM calcado"; 
        $stmt = $this->pdo->prepare($query); 
        $stmt->execute(); 
        $calcados = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        $listacalcados = []; 
        foreach ($calcados as $calcado) { 
            $listacalcados[] = new Calcado( 
                $calcado['id'], 
            $calcado['categoria'], 
            $calcado['descricao'], 
            $calcado['cor'], 
            $calcado['quantidade'], 
            $calcado['preco'], 
            $calcado['marca'], 
            $calcado['tipo'], 
            $calcado['custo'],
            $calcado['numero'] ); 
            } 
            return $listacalcados; 
        } 
        
        public function contabilizarCalcado($id, $quantidade) { 
            $query = "UPDATE calcado SET quantidade = ? 
            WHERE id = ?"; 
            $stmt = $this->pdo->prepare($query); 
            $stmt->bindValue(1, $quantidade); 
            $stmt->bindValue(2, $id); 
            return $stmt->execute(); 
        }
        
        public function excluircalcado($id) { 
            $query = "DELETE FROM calcado WHERE id = ?"; 
            $stmt = $this->pdo->prepare($query); 
            $stmt->bindValue(1, $id); 
            return $stmt->execute();

        }
}
    