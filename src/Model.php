<?php


namespace App;
class Model extends Func
{
    public function oneArt(){
        return $this->getArticleById($_GET['id']);
    }
}