<?php
namespace Ifba\Controller;

use Ifba\Model\DAO\CalcadoDAO;
use Ifba\Core\Controller;
use Calcado;
use Ifba\Core\Database;


class calcadoController extends Controller{



   public function atualizarEstoque(int $id, int $quantidade){
        $con = new Database();
        $calcadoDAO = new CalcadoDAO($con->getConexao());
        $calcadoDAO->contabilizarcalcado($id, $quantidade);
   }

    public function cadastrarcalcado(Calcado $calcado){
        $con = new Database();
        $calcadoDAO = new CalcadoDAO($con->getConexao());
        $calcadoDAO->cadastrarCalcado($calcado);
    
    }
}