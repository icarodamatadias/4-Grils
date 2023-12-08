<?php
namespace Ifba\Controller;

use Ifba\Model\DAO\AcessorioDAO;
use Ifba\Core\Controller;
use Acessorio;
use Ifba\Core\Database;


class acessorioController extends Controller{



   public function atualizarEstoque(int $id, int $quantidade){
        $con = new Database();
        $acessorioDAO = new AcessorioDAO($con->getConexao());
        $acessorioDAO->contabilizarAcessorio($id, $quantidade);
   }

    public function cadastrarAcessorio(Acessorio $acessorio){
        $con = new Database();
        $acessorioDAO = new AcessorioDAO($con->getConexao());
        $acessorioDAO->cadastrarAcessorio($acessorio);
    
    }
}