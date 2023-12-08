<?php

namespace Ifba\Model\DAO;

use Vestimenta;
use \PDO;
 class vestimentaDAO { 
    private \PDO $pdo; 

    public function __construct( $pdo) { 
        $this->pdo = $pdo; 
    } 
    
    public function cadastrArvestimenta( vestimenta $vestimenta) { 
        $query = "INSERT INTO vestimenta (
            categoria,
            descricao,
            cor,
            quantidade,
            preco,
            marca,
            tipo,
            custo,
            tamanho) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
        $stmt = $this->pdo->prepare($query); 
        $stmt->bindValue(1, $vestimenta->getCategoria()); 
        $stmt->bindValue(2, $vestimenta->getDescricao()); 
        $stmt->bindValue(3, $vestimenta->getCor()); 
        $stmt->bindValue(4, $vestimenta->getQuantidade()); 
        $stmt->bindValue(5, $vestimenta->getPreco()); 
        $stmt->bindValue(6, $vestimenta->getMarca()); 
        $stmt->bindValue(7, $vestimenta->getTipo()); 
        $stmt->bindValue(8, $vestimenta->getCusto()); 
        $stmt->bindValue(9, $vestimenta->getTamanho()); 
        return $stmt->execute(); 
    } 
        
    public function buscarvestimenta() { 
        $query = "SELECT * FROM vestimenta WHERE id = 1"; 
        $stmt = $this->pdo->prepare($query); 
        $stmt->execute(); 
        $vestimenta = $stmt->fetch(PDO::FETCH_ASSOC); 
        return new Vestimenta( 
            $vestimenta['id'], 
            $vestimenta['categoria'], 
            $vestimenta['descricao'], 
            $vestimenta['cor'], 
            $vestimenta['quantidade'], 
            $vestimenta['preco'], 
            $vestimenta['marca'], 
            $vestimenta['tipo'], 
            $vestimenta['custo'],
            $vestimenta['tamanho'] 
        ); 
    } 
    
    public function buscarvestimentas() { 
        $query = "SELECT * FROM vestimenta "; 
        $stmt = $this->pdo->prepare($query); 
        $stmt->execute(); 
        $vestimentas = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        $listavestimentas = []; 
        foreach ($vestimentas as $vestimenta) { 
            $listavestimentas[] = new Vestimenta( 
                $vestimenta['id'], 
                $vestimenta['categoria'], 
                $vestimenta['descricao'], 
                $vestimenta['cor'], 
                $vestimenta['quantidade'], 
                $vestimenta['preco'], 
                $vestimenta['marca'], 
                $vestimenta['tipo'], 
                $vestimenta['custo'],
                $vestimenta['tamanho'] 
            ); 
            } 
            return $listavestimentas; 
        } 
        
        public function contabilizarVestimenta($id, $quantidade) { 
            $query = "UPDATE vestimenta SET quantidade = ? 
            WHERE id = ?"; 
            $stmt = $this->pdo->prepare($query); 
            $stmt->bindValue(1, $quantidade); 
            $stmt->bindValue(2, $id); 
            return $stmt->execute(); 
        }
        
        public function excluirvestimenta($id) { 
            $query = "DELETE FROM vestimenta WHERE id = ?"; 
            $stmt = $this->pdo->prepare($query); 
            $stmt->bindValue(1, $id); 
            return $stmt->execute();

        }
}
    