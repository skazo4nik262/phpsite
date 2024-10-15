<?php

namespace  App\Core;

use App\Core\Interfaces\ViewInterface;

class CoreView implements  ViewInterface
{
    protected $loader;
    protected $twig;
    protected $model;

    public function __construct()
    {
        $this->model = new \CoreModel();
        $this->setLoader('template/front/');
        $this->twig = new \Twig\Environment($this->loader, []);
    }
    public function  setLoader($path){
        $this->loader = new \Twig\Loader\FilesystemLoader($path);
    }
}