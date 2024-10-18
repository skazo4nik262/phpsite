<?php

namespace App;

class Model
{
    function getArticleById(int $id): array
    {
        $articleList = $this->getArticles();
        $curentArticle = [];
        if (array_key_exists($id, $articleList)) {
            $curentArticle = $articleList[$id];
        }

        return $curentArticle;
    }

    function getArticles(): array
    {
        return json_decode(file_get_contents('db/articles.json'), true);
    }

}