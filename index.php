<?php
declare(strict_types=1);

use Ifba\Core\Router;

require_once "./vendor/autoload.php";
require_once "./app/config.php";


const URL_BASE ="http://localhost/guttinho-3V/atividadesifba3vesp";

function css(string $arquivo) : string 
{
    return URL_BASE."/public/css/{$arquivo}.css";
}

$url = $_GET['url'] ?? '/';



Router::add('/','HomeController','index');
Router::add('login','HomeController','login');
Router::add('criarconta','HomeController','criarconta');
Router::add('__erro','ErroController','erro404');
Router::exec($url);



