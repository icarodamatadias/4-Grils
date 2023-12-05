<?php

class Acessorio extends Produto{

    private string $material;

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
        $material 
    ) {
        parent::__construct($id, $categoria, $descricao, $cor, $quantidade, $preco, $marca, $tipo, $custo);
        $this->material = $material;
    }

    public function getMaterial() {
        return $this->material;
    }

    public function setMaterial($material) {
        $this->material = $material;
    }
}