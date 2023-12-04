<?php

namespace Ifba\Controller;

use Ifba\Core\Controller;

class ErroController extends Controller{

    public function erro404(){
        $this->view('404');
    }

}