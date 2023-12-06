<?php

use Ifba\Core\Router;

Router::add('/','HomeController','index');
Router::add('login','HomeController','login');
Router::add('criarconta','HomeController','criarconta');
Router::add('__erro','ErroController','erro404');

