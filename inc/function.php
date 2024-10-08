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


function getArticles(): array
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
    //return '<img src =' . "$article[image]" . '>' . '<p>' . "$article[content]" . '</p>' . '<a class="btn" href="?act=artlist>Назад</a>' ;
    return "<img src='$article[image]' alt='Изображение не загрузилось('>
<p>$article[content]</p>
<a href='?act=artlist#footer' class='btn'>Назад</a>
<a href='?act=artedit&id=$article[id]#footer' class='btn'>Редактировать</a>";
}


/**
 * функция генерирует список <li> из Json
 * и формирует ссылки вида URI index.php?id=1
 *
 * @return string
 */
function getArticleList(): string
{
    $articles = getArticles();
    $link = '';
    foreach ($articles as $article) {
        $link .= '<li class="nav-item m-3"><a class="nav-link" href="second.php?id=' . $article['id'] . '&image=' . $article['image'] . '&act=oneart' . '">' . $article['title'] . '</a></li>';
    }
    return $link;
}

function calc(string $first, string $second, string $operation): string
{
    $message = '';
    switch ($operation) {
        case 'plus':
            $result = (int)$first + (int)$second;
            $message = $first . ' + ' . $second . ' = ' . $result;
            break;
        case 'minus':
            $result = (int)$first - (int)$second;
            $message = $first . ' - ' . $second . ' = ' . $result;
            break;
        case 'multiply':
            $result = (int)$first * (int)$second;
            $message = $first . ' * ' . $second . ' = ' . $result;
            break;
        case 'divide':
            if ($second == 0) {
                $result = "Делить на ноль нельзя";
                $message = $first . ' / ' . $second . ' = ' . $result;
            } else {
                $result = (int)$first / (int)$second;
                $message = $first . ' / ' . $second . ' = ' . $result;
            }
            break;
    }
    return $message;
}

function editJson(string $title, string $content, int $id, string $image): string
{
    $json = json_decode(file_get_contents('db/articles.json'), true);

    $json[$id]["id"] = (string)$id;
    $json[$id]["title"] = $title;
    $json[$id]["content"] = $content;

    $json[$id]["image"] = $image;


    $newJsonString = json_encode($json);
    file_put_contents('db/articles.json', $newJsonString);

    return 'Редактирование прошло успешно';
}

function checkRecuest(): string
{
    if (isset($_REQUEST["act"])) {
        $req = $_REQUEST["act"];
        $res = '';
        switch ($req) {
            case 'calc':
                $res = renderCalcForm();
                break;
            case 'artlist':
                $res = renderListForm();
                break;
            case 'addlist':
                $res = renderCreateForm();
                break;
            case 'artedit':
                $res = renderEditForm();
                break;
            case 'add-article':
                $res = '<a href="?act=addlist#footer" class="mb-3 btn">Добавить ещё</a>'.
                    '<a href="?act=artlist#footer"class="mb-3 btn">Назад</a>'.
                    addToJson($_GET["title"], $_GET["content"], (int)$_GET["id"], $_GET["image"]);
                break;
            case 'edit-article':
                $res = '<a href="?act=artlist#footer" class="mb-3 btn">Продолжить редактировать</a>'.
                    '<a href="?act=artlist#footer"class="mb-3 btn">Назад</a>'.
                    editJson($_GET["title"], $_GET["content"], (int)$_GET["id"], $_GET["image"]);
                break;
            case 'oneart':
                $res = renderOneArtForm();
        }
        return $res;
    } else
        return '';
}

function renderOneArtForm(): string
{
    return lalala(getArticleById((int)$_GET["id"]));
}


function renderCreateForm(): string
{
    $json = json_decode(file_get_contents('db/articles.json'), true);
    $jsonmaxid = (int)array_key_last($json);
    $jsonmaxid++;
    $jsonmaxid = (string)$jsonmaxid;
    return '<form action="" method="get" class="m-5">
                    <!--<input type="hidden" name="act" value="addlist ">-->
                    <input type="hidden" name="id" id="sec" value="' . $jsonmaxid . '"/>
                    <input type="hidden" name="act" id="sec" value="add-article"/>
                <div class="form-example mb-2">
                    <label for="title">Enter new title: </label>
                    <input type="text" name="title" id="fst" required/>
                </div>
                <div class="form-example mb-2">
                    <label for="content">Enter new content: </label>
                    <input type="text" name="content" id="sec" required/>
                </div>
                <div class="form-example mb-2">
                    <label for="image">Enter new image path: </label>
                    <input type="text" name="image" id="sec"/>
                </div>
                <div class="form-example">
                    <input type="submit" ` value="Add"/>
                </div>
                <div>
                <?php
                 addToJson($_GET["title"], $_GET["content"], (int)$_GET["id"], $_GET["image"]);
                ?>
                </div>

            </form>';
}
function renderEditForm(): string
{
    $thisid = $_GET["id"];

    return '<form action="" method="get" class="m-5">
                    <!--<input type="hidden" name="act" value="addlist ">-->
                    <input type="hidden" name="id" id="sec" value="'.$thisid.'"/>
                    <input type="hidden" name="act" id="sec" value="edit-article"/>
                <div class="form-example mb-2">
                    <label for="title">Enter new title: </label>
                    <input type="text" name="title" id="fst" required/>
                </div>
                <div class="form-example mb-2">
                    <label for="content">Enter new content: </label>
                    <input type="text" name="content" id="sec" required/>
                </div>
                <div class="form-example mb-2">
                    <label for="image">Enter new image path: </label>
                    <input type="text" name="image" id="sec"/>
                </div>
                <div class="form-example">
                    <input type="submit" value="Update"/>
                </div>
                <div>
                <?php
                 editJson($_GET["title"], $_GET["content"], (int)$_GET["id"], $_GET["image"]);
                ?>
                </div>

            </form>';
}


function addToJson(string $title, string $content, int $id, string $image):string
{

    $newEntry = [
        'id' => (string)$id,
        'title' => $title,
        'image' => $image,
        'content' => $content,
    ];
    $data = json_decode(file_get_contents('db/articles.json'), true);

    $data[] = $newEntry;

    $newJsonString = json_encode($data);
    file_put_contents('db/articles.json', $newJsonString);
    return 'Успешно добавлен';
}

function renderCalcForm(): string
{
    return '<form action="" method="get" class="form-example m-5">
                    <div class="form-example mb-2">
                        <label for="first">Enter first number: </label>
                        <input type="number" name="first" id="fst" required/>
                    </div>
                    <select name="operation" class="mb-2">
                        <option value="plus">+</option>
                        <option value="minus">-</option>
                        <option value="multiply">*</option>
                        <option value="divide">/</option>
                    </select>
                    <div class="form-example mb-2">
                        <label for="second">Enter second number: </label>
                        <input type="number" name="second" id="sec" required/>
                    </div>
                    <div class="form-example">
                        <input type="submit" value="Sumbit"/>
                    </div>

                    <div class="form-example">
                        <label>
                            <?php
                            print_r(calc($_GET["first"], $_GET["second"], $_GET["operation"]))
                            ?>
                        </label>
                    </div>

                </form>';
}

function renderListForm(): string
{
    return getArticleList();
}
