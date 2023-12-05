<?php

class Calcado extends Produto{
    private string $numero;

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
        $numero 
    ) {
        parent::__construct($id, $categoria, $descricao, $cor, $quantidade, $preco, $marca, $tipo, $custo);
        $this->numero = $numero;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }
}