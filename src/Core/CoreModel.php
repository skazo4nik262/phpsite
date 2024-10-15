<?php


class CoreModel implements ModelInterface
{
    public function get_data()
    {
        return json_decode(file_get_contents('db/articles.json'), true);
        // TODO: Implement get_data() method.
    }
}