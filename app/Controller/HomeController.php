<?php
namespace Ifba\Controller;

use Ifba\Model\DAO\FuncionarioDAO;
use Ifba\Core\Controller;
use Ifba\Model\Entities\Funcionario;
use Ifba\Core\Database;


class HomeController extends Controller{


    

    public function index()
    {
       $dados = [
        'titulo' => 'Atividades IFBA',
        'data' => date('d/m/Y')
       ];
       $this->view('inicial',$dados);
    }


    public function login()
    {
        $this->view('login');
    }

    function inserirFuncionario(Funcionario $funcionario) {
        // Conexão com o banco de dados
        
        
    }

    public function criarconta(){
        $funcionario = new Funcionario(null, "zé", "vendedor", "4544454545", "gvedjvcjvj", "sdjbchv", "2020-11-10", "7878787878", "svcjvjhvshvj");
        $con = new Database();
    
        // Criação e uso do DAO
        $funcionarioDAO = new FuncionarioDAO($con->getConexao());
        $funcionarioDAO->cadastrarFuncionario($funcionario);
    
    }
}