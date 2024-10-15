<?php

namespace App\Views;


use App\Core\CoreView;

class FrontEndView extends CoreView
{
    public function showIndexPage(){
        $title = 'Главная страница';
        $description = 'Описание Главной страницы';
        $list = $this->model->get_data();
        $template = $this->twig->loadTemplate('index.twig');
        echo $template->render([
            'title' => $title,
            'description' => $description,
            'list'=>$list
        ]);
    }
}