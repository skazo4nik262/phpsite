<?php

namespace App;

class Controller
{
    private Model $model;
    private View $view;

    public function __construct()
    {
        $this->model = new Model();
        $this->view = new View();
    }

    public function oneArt(){
        $content = $this->model->oneArt();
        $this->view->oneArt($content);
    }
    public function listArts(){
        $list = $this->model->getArticleList();
        $this->view->listArts($list);
    }

}