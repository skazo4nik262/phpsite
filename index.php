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
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <pre>
                <?php
                print_r (lalala(getArticleById(htmlspecialchars($_GET["id"]))));
                ?>
                </pre>
            </div>
        </div>
    </div>
</div>
</body>
</html>






