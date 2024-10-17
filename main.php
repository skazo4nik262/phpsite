<?php

require ('vendor/autoload.php');
use MinasRouter\Router\Route;

$view = new App\Controller();
$view->listArts();
$view->oneArt();
