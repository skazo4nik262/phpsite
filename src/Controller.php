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

    public function oneArt($id){
        $content = $this->model->getArticleById($id);
        $this->view->oneArt($content);
    }
    public function listArts(){
        $list = $this->model->getArticles();
        $this->view->listArts($list);
    }
    public function addArtForm(){
        $form = $this->view->addArt();
    }

}