<?php
namespace Ifba\Model\Entities;

class Registro{
    private $id;
    private $datahora;
    private $formapagamento;
    private $idProduto;

    public function __construct(){
        
    }

    public function getId(){
        return $this->id;
    }

    public function getdatahora(){
        return $this->datahora;
    }

    public function getformapagamento(){
        return $this->formapagamento;
    }

    public function getIdProduto(){
        return $this->idProduto;
    }

    public function setId($id){
        return $this->id = $id;
    }

    public function setDatahora($dh){
        return $this->datahora = $dh;
    }

    public function setFormapagamento($fp){
        return $this->formapagamento = $fp;
    }

    public function setIdProduto($idp){
        return $this->idProduto = $idp;
    }
}