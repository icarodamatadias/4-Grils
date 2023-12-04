<?php

namespace Ifba\Core;




class Router{
   /* 
    Métodos e Propriedades estáticas permitem que o acesso seja feito diretamente na classe não necessitando da criação de um objeto pra isso. Estes elementos então são compartilhados entre os objetos desta classe.
   */
    protected static array $rotas = [];

    public static function add($url,$controlador,$metodo)
    {
        static::$rotas[$url] = [$controlador,$metodo];
    }

    public static function exec($url)
    {
        $rotas = static::$rotas;
        if( array_key_exists($url,$rotas)){
            [$controlador,$metodo] = $rotas[$url];    
        }else{
            [$controlador,$metodo] = $rotas['__erro'];   
        }
        static::carregaController($controlador,$metodo);
    }

    protected static function carregaController($controlador,$metodo)
    {
        $controlador = "Ifba\\Controller\\{$controlador}";
        if(class_exists($controlador)){
            $ctr = new $controlador();
            if(method_exists($ctr,$metodo)){
                $ctr->$metodo();
            }else{
                echo "<h2>Método não existe no Controlador</h2>";
            }       
        }else{
            echo "<h2>Controlador não existe</h2>";
        }   
    }

}