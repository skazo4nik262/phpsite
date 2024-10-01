<?php
// --------- display all errors
error_reporting(E_ALL);
ini_set('display_errors', 'on');
$ID = 0;
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
<<<<<<< HEAD
        <div class="col-6">
=======
        <div class="col-12">
            <form action="" method="get" class="m-5">
                <div class="form-example mb-2">
                    <label for="title">Enter new title: </label>
                    <input type="text" name="title" id="fst" required/>
                </div>
                <div class="form-example mb-2">
                    <label for="content">Enter new content: </label>
                    <input type="text" name="content" id="sec" required/>
                </div>
                <div class="form-example">
                    <input type="submit" value="Update"/>
                </div>
                <?php
                editJson(htmlspecialchars($_GET["title"], $_GET["content"]))
                ?>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
>>>>>>> 82ee0ec2ef7ae41ef43c32d724723eeb8f96eda8
            <div class="card">
                <?php
                $ID = $_GET["id"];
                print_r (lalala(getArticleById(htmlspecialchars($_GET["id"]))));
                ?>
            </div>
        </div>
    </div>

</div>
</body>
</html>






