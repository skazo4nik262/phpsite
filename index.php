<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require ('vendor/autoload.php');

use MiladRahimi\PhpRouter\Router;
use MiladRahimi\PhpRouter\Exceptions\RouteNotFoundException;
use Laminas\Diactoros\Response\HtmlResponse;

$router = Router::create();

$router->get('/', [\App\Controller::class, 'listArts']);
$router->get('/article/{id}', [\App\Controller::class, 'oneArt']);
$router->get('/add', [\App\Controller::class, 'addArtForm']);

try {
    $router->dispatch();
} catch (RouteNotFoundException $e) {
    // It's 404!
    $router->getPublisher()->publish(new HtmlResponse('Not found.', 404));
} catch (Throwable $e) {
    // Log and report...
    $router->getPublisher()->publish(new HtmlResponse('Internal error.', 500));
}
//https://github.com/miladrahimi/phprouter

//$view = new App\Controller();
//$view->listArts();
//$view->oneArt();
