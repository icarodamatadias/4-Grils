<?php
namespace Ifba\Controller;

use Ifba\Core\Controller;

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

    public function criarconta()
    {
        $this->view('criarconta');
    }
}