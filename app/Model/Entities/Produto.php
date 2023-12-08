<?php

class Produto{
    private int $id;
    private string $categoria;
    private string $descricao;
    private string $cor;
    private int $quantidade;
    private float $preco;
    private string $marca;
    private string $tipo;
    private float $custo;

    public function __construct(){
        
    }

    public function getId() {
        return $this->id;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getCusto() {
        return $this->custo;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setCusto($custo) {
        $this->custo = $custo;
    }
}