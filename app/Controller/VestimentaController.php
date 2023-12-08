<?php
namespace Ifba\Controller;

use Ifba\Model\DAO\VestimentaDAO;
use Ifba\Core\Controller;
use Vestimenta;
use Ifba\Core\Database;


class VestimentaController extends Controller{



   public function atualizarEstoque(int $id, int $quantidade){
        $con = new Database();
        $vestimentaDAO = new VestimentaDAO($con->getConexao());
        $vestimentaDAO->contabilizarVestimenta($id, $quantidade);
   }

    public function cadastrarVestimenta(Vestimenta $vestimenta){
        $con = new Database();
        $vestimentaDAO = new VestimentaDAO($con->getConexao());
        $vestimentaDAO->cadastrarVestimenta($vestimenta);
    
    }

    public function buscarVestimenta(){
        $con = new Database();
        $vestimentaDAO = new VestimentaDAO($con->getConexao());
        return $vestimentaDAO->buscarVestimenta();

    }
}