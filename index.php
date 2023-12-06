<?php
declare(strict_types=1);

use Ifba\Core\Router;

require_once "./vendor/autoload.php";
require_once "./app/config.php";
require_once "./app/routes.php";



function css(string $arquivo) : string 
{
    return URL_BASE."/public/css/{$arquivo}.css";
}

function componente(string $componente): string{
    return PASTA_VIEW."componentes/{$componente}.view.php";
}

$url = $_GET['url'] ?? '/';


Router::exec($url);



