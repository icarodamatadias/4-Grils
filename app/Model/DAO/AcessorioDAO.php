<?php

namespace Ifba\Model\DAO;

use Acessorio;
use \PDO;
 class AcessorioDAO { 
    private \PDO $pdo; 

    public function __construct( $pdo) { 
        $this->pdo = $pdo; 
    } 
    
    public function cadastrAracessorio( Acessorio $acessorio) { 
        $query = "INSERT INTO acessorio (
            categoria,
            descricao,
            cor,
            quantidade,
            preco,
            marca,
            tipo,
            custo,
            material) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
        $stmt = $this->pdo->prepare($query); 
        $stmt->bindValue(1, $acessorio->getCategoria()); 
        $stmt->bindValue(2, $acessorio->getDescricao()); 
        $stmt->bindValue(3, $acessorio->getCor()); 
        $stmt->bindValue(4, $acessorio->getQuantidade()); 
        $stmt->bindValue(5, $acessorio->getPreco()); 
        $stmt->bindValue(6, $acessorio->getMarca()); 
        $stmt->bindValue(7, $acessorio->getTipo()); 
        $stmt->bindValue(8, $acessorio->getCusto()); 
        $stmt->bindValue(9, $acessorio->getMaterial()); 
        return $stmt->execute(); 
    } 
        
    public function buscarAcessorio($id) { 
        $query = "SELECT * FROM acessorio WHERE id = ?"; 
        $stmt = $this->pdo->prepare($query); 
        $stmt->bindValue(1, $id); 
        $stmt->execute(); 
        $acessorio = $stmt->fetch(PDO::FETCH_ASSOC); 
        return new Acessorio( 
            $acessorio['id'], 
            $acessorio['categoria'], 
            $acessorio['descricao'], 
            $acessorio['cor'], 
            $acessorio['quantidade'], 
            $acessorio['preco'], 
            $acessorio['marca'], 
            $acessorio['tipo'], 
            $acessorio['custo'],
            $acessorio['material'] 
        ); 
    } 
    
    public function buscaracessorios() { 
        $query = "SELECT * FROM acessorio"; 
        $stmt = $this->pdo->prepare($query); 
        $stmt->execute(); 
        $acessorios = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        $listaacessorios = []; 
        foreach ($acessorios as $acessorio) { 
            $listaacessorios[] = new acessorio( 
                $acessorio['id'], 
            $acessorio['categoria'], 
            $acessorio['descricao'], 
            $acessorio['cor'], 
            $acessorio['quantidade'], 
            $acessorio['preco'], 
            $acessorio['marca'], 
            $acessorio['tipo'], 
            $acessorio['custo'],
            $acessorio['material'] ); 
            } 
            return $listaacessorios; 
        } 
        
        public function contabilizarAcessorio($id, $quantidade) { 
            $query = "UPDATE acessorio SET quantidade = ? 
            WHERE id = ?"; 
            $stmt = $this->pdo->prepare($query); 
            $stmt->bindValue(1, $quantidade); 
            $stmt->bindValue(2, $id); 
            return $stmt->execute(); 
        }
        
        public function excluiracessorio($id) { 
            $query = "DELETE FROM acessorio WHERE id = ?"; 
            $stmt = $this->pdo->prepare($query); 
            $stmt->bindValue(1, $id); 
            return $stmt->execute();

        }
}
    