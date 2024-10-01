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
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" method="get" class="form-example m-5">
                    <div class="form-example mb-2">
                        <label for="first">Enter first number: </label>
                        <input type="text" name="first" id="fst" required/>
                    </div>
                    <select name="operation" class="mb-2">
                        <option value="plus">+</option>
                        <option value="minus">-</option>
                        <option value="multiply">*</option>
                        <option value="divide">/</option>
                    </select>
                    <div class="form-example mb-2">
                        <label for="second">Enter second number: </label>
                        <input type="text" name="second" id="sec" required/>
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

                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>