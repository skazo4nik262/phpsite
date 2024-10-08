<?php
// --------- display all errors
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// --------------
include_once './inc/function.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <pre>
                <?php
                $ID = $_GET["id"];
                print_r(lalala(getArticleById(htmlspecialchars($_GET["id"]))));
                ?>
                </pre>
                <a href="editJson.php?id=<?php echo $_GET["id"]; ?>>Отредактировать статью</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>






