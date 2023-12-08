<?php

use Ifba\Core\Router;

Router::add('/','HomeController','index');
Router::add('login','HomeController','login');
Router::add('criarconta','HomeController','criarconta');
Router::add('verprodutos','HomeController','produtoinfo');
Router::add('catalogo','HomeController','catalogo');
Router::add('registro','HomeController','registro');
Router::add('__erro','ErroController','erro404');

Router::add('cadastroproduto','HomeController','cadastrarproduto');
Router::add('acessorio','HomeController','acessorio');
Router::add('vestimenta','HomeController','vestimenta');
Router::add('calcado','HomeController','calcado');

Router::add('infovestimenta','HomeController','infovestimenta');
Router::add('infocalcado','HomeController','index');
Router::add('infoacessorio','HomeController','index');


