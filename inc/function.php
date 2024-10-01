<?php
// Включаем строгую типизацию
declare(strict_types=1);

/**
 * @param $some
 * отладочная функция
 */
function dd($some)
{
	echo '<pre>';
	print_r($some);
	echo '</pre>';
	exit();
}

/**
 * @param $url
 * редирект на указаный URL
 */
function goUrl(string $url)
{
	echo '<script type="text/javascript">location="';
	echo $url;
	echo '";</script>';
}

/**
 * функция возвращает масив статей
 * @return array
 */
<<<<<<< HEAD
function getArticles(): array
=======


function getArticles() : array
>>>>>>> 82ee0ec2ef7ae41ef43c32d724723eeb8f96eda8
{
	return json_decode(file_get_contents('db/articles.json'), true);
}

/**
 * функция возвращает статью  в виде масива по id
 * @param int $id
 * @return array
 */
function getArticleById(int $id): array
{
	$articleList = getArticles();
	$curentArticle = [];
	if (array_key_exists($id, $articleList)) {
		$curentArticle = $articleList[$id];
	}

	return $curentArticle;
}

function lalala(array $article): string
{
	return '<pre><img src =' . "$article[image]" . '>' . '<p>' . "$article[content]" . '</p>' . '</pre>';
}


/**
 * функция генерирует список <li> из Json
 * и формирует ссылки вида URI index.php?id=1
 *
 * @return string
 */
function getArticleList(): string
{
<<<<<<< HEAD
	$articles = getArticles();
	$link = '';
	foreach ($articles as $article) {
		$link .= '<li class="nav-item m-3"><a class="nav-link" href="index.php?id=' . $article['id'] . '&image=' . $article[image]
			. '">' . $article['title'] . '</a></li>';
	}
	return $link;
} 

function checkRequest()
{
	$req = $_REQUEST;
	print_r($req);
}

function renderNewForm(): string
{
	return $form = "<section class='my_articles pt-0'><div class='container'><div class='row '><div class'col-12'><div class='card'><form action='' method='get'><div><ul><?phpprint_r($_GET);?></ul></div></form></div></div></div></div></section>";
=======
    $articles = getArticles();
    $link = '';
    foreach ($articles as $article) {
        $link .= '<li class="nav-item m-3"><a class="nav-link" href="index.php?id='. $article['id'].'">'  . $article['title']. '</a></li>';
    }
    return $link;
}

function calc(string $first, string $second, string $operation): string{
    $message ='';
    switch ($operation){
        case 'plus':
            $result = (int)$first + (int)$second;
            $message = $first. ' + '. $second. ' = '. $result;
            break;
        case 'minus':
            $result = (int)$first - (int)$second;
            $message = $first. ' - '. $second. ' = '. $result;
            break;
        case 'multiply':
            $result = (int)$first * (int)$second;
            $message = $first. ' * '. $second. ' = '. $result;
            break;
        case 'divide':
            $result = (int)$first / (int)$second;
            $message = $first. ' / '. $second. ' = '. $result;
            break;
    }
    return (string)$message;
}
function editJson(string $title, string $content):array{
    $json = file_get_contents('db/articles.json');
    $json = json_decode($json, true);
    $json['title'] = $title;
    $json['content'] = $content;

    $newJsonString = json_encode($json);
    file_put_contents('db/articles.json', $newJsonString);
>>>>>>> 82ee0ec2ef7ae41ef43c32d724723eeb8f96eda8
}