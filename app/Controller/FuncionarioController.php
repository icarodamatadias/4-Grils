<?php
namespace Ifba\Controller;

use Ifba\Model\DAO\FuncionarioDAO;
use Ifba\Core\Controller;
use Ifba\Model\Entities\Funcionario;
use Ifba\Core\Database;


class FuncionarioController extends Controller{



    public function index()
    {
       $this->view('inicial',);
    }


    public function login()
    {
        $this->view('login');
    }


    public function criarconta(Funcionario $funcionario){
        $con = new Database();
        $funcionarioDAO = new FuncionarioDAO($con->getConexao());
        $funcionarioDAO->cadastrarFuncionario($funcionario);    
    }
}