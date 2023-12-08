<?php

use Ifba\Core\Router;

Router::add('/','HomeController','index');
Router::add('login','HomeController','login');
Router::add('criarconta','HomeController','criarconta');
Router::add('verprodutos','HomeController','produtoinfo');
Router::add('catalogo','HomeController','catalogo');
Router::add('registro','HomeController','registro');
Router::add('cadastroproduto','HomeController','cadastrarproduto');
Router::add('__erro','ErroController','erro404');

