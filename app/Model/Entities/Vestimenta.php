<?php

class Vestimenta extends Produto{
    private string $tamanho;

    public function __construct(
        $id,
        $categoria,
        $descricao,
        $cor,
        $quantidade,
        $preco,
        $marca,
        $tipo,
        $custo,
        $tamanho
        ) {
        parent::__construct($id, $categoria, $descricao, $cor, $quantidade, $preco, $marca, $tipo, $custo);
        $this->tamanho = $tamanho;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }
}