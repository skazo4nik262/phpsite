<?php

namespace App;
class View
{
    protected $twig;
    protected $loader;

    public function __construct()
    {
        $this->setLoader('template');
        $this->twig = new \Twig\Environment($this->loader, []);
    }
    public function setLoader($path){
        $this->loader = new \Twig\Loader\FilesystemLoader($path);
    }
    public function oneArt($content){
        echo $this->twig->render('oneart.twig', compact('content'));
    }
    public function listArts($list){
        echo $this->twig->render('list.twig',compact('list') );
    }
    public function addArt(){
        echo $this->twig->render('add.twig');
    }
}