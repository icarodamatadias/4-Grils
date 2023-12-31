<?php
namespace Ifba\Controller;

use Ifba\Model\DAO\FuncionarioDAO;
use Ifba\Core\Controller;
use Ifba\Model\Entities\Funcionario;
use Ifba\Core\Database;


class HomeController extends Controller{


    

    public function index()
    {
      
       $this->view('inicial');
    }


    public function login()
    {
        $this->view('login');
    }

    public function criarconta()
    {
        $this->view('criarconta');
    }

    public function produtoinfo()
    {
        $this->view('produtoinfo');
    }
    public function catalogo()
    {
        $this->view('catalogo');
    }
    
    public function registro()
    {
        $this->view('registro');
    }

    
    public function cadastrarproduto(){
        $this->view('cadastroproduto');
    }
    public function vestimenta(){
        $this->view('vestimenta');
    }

    public function acessorio(){
        $this->view('acessorio');
    }
    public function calcado(){
        $this->view('calcados');
    }

    public function infocalcado(){
        $this->view('infocalcado');
    }
    public function infovestimenta(){
        $this->view('infovestimenta');
    }
    public function infoacessorio(){
        $this->view('infoacessorio');
    }

    
}