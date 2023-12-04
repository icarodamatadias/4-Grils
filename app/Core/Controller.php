<?php

namespace Ifba\Core;

abstract class Controller{


    #Classe abstrata é uma classe que não pode ser instanciada apenas herdada. Esta classe também pode servir como interface gerando contratos do que deve ser implementado.

    protected $pasta_view = "./app/View/";
    public function view(string $arquivo,array $dados = [])
    {
        extract($dados); #Transforma um array associativo em variaveis em que o indice do array é o nome da variavel que aponta para o seu valor.
        $caminho = $this->pasta_view.$arquivo.".view.php";
        if(file_exists($caminho)){
            require $caminho;
        }else{
            echo "<h2>Arquivo de View Não Existe</h2>";
        }
       
    }    
}