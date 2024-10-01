<?php
// --------- display all errors
error_reporting(E_ALL);
ini_set('display_errors', 'off');
// --------------
include_once './inc/function.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
	      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="style2.css">
</head>
<body>
<header class="my_topbar">
	<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary my_nav">
		<div class="container-fluid">
			<a class="navbar-brand" href="#footer">
				<img src="img/logo.svg" alt="123" class="">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
			        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			        aria-expanded="false" aria-label="Переключатель навигации">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="#footer">О нас</a>
					</li>
					<li class="nav-item">
						<a href="#footer" class="nav-link">Контакты</a>
					</li>

				</ul>
				<form class="d-flex" role="search">

					<input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
					<button class="btn btn-outline-dark" type="submit">Поиск</button>
				</form>
			</div>
		</div>
		<button class="btn my_btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
		        aria-controls="offcanvasExample"></button>
	</nav>
	<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title" id="offcanvasExampleLabel">Second page</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
		</div>
		<div class="offcanvas-body ">

			<form action="" method="get" class="mt-3">
				<div class="card">
						<ul class="list-group list-group-flush">
							<li><a href="index.html" class="list-group-item">На главную страницу</a></li>
							<li><a href="second.php?act=calc #footer" class="list-group-item">Калькулятор</a></li>
							<li><a href="second.php?act=calc #footer" class="list-group-item">Список статей</a></li>
							<li><a href="second.php?act=calc #footer" class="list-group-item">Добавить статью</a></li>
						</ul>
				</div>
			</form>
		</div>

	</div>
	</div>
</header>
<section class="my_carousel">
	<!--<button class="btn my_btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
	        aria-controls="offcanvasExample"></button>-->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div id="carouselExampleIndicators" class="carousel slide">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
						        class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
						        aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
						        aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="image-block">
								<div class="image">
									<div class="image-shadow"
									     style="background-image: url('https://domoteka-rnd.ru/wp-content/uploads/2019/10/parizh_new-1080x608.jpg');"></div>
									<a href="#house1">
										<img src="https://domoteka-rnd.ru/wp-content/uploads/2019/10/parizh_new-1080x608.jpg"
										     alt="Цветная тень от картинки"/>
									</a>
								</div>
							</div>
							<!--<img src="https://domoteka-rnd.ru/wp-content/uploads/2019/10/parizh_new-1080x608.jpg" class="d-block w-100" alt="...">-->
						</div>
						<div class="carousel-item">
							<div class="image-block">
								<div class="image">
									<div class="image-shadow"
									     style="background-image: url('https://каркасныедома116.рф/wp-content/uploads/2022/04/3pve7u6W4vg.jpg');"></div>
									<a href="#house2">
										<img src="https://каркасныедома116.рф/wp-content/uploads/2022/04/3pve7u6W4vg.jpg"
										     alt="...">
									</a>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="image-block">
								<div class="image">
									<div class="image-shadow"
									     style="background-image: url('https://karkasdoma.pro/wp-content/uploads/8-27-1.jpg');"></div>
									<a href="#house3">
										<img src="https://karkasdoma.pro/wp-content/uploads/8-27-1.jpg" alt="...">
									</a>
								</div>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
					        data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Предыдущий</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
					        data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Следующий</span>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="my_body">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12 ">

				<div class="card" id="house1">
					<img src="https://domoteka-rnd.ru/wp-content/uploads/2019/10/parizh_new-1080x608.jpg"
					     class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Дом №1</h5>
						<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quisquam
							earum soluta laudantium voluptatum architecto quam, veritatis, ea numquam aliquid amet.
							Aliquid, cupiditate inventore cumque magnam culpa eaque recusandae maiores.</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Подробнее</a>
						</li>
						<li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Купить</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-md-4 col-sm-12">
				<div class="card" id="house2">
					<img src="https://каркасныедома116.рф/wp-content/uploads/2022/04/3pve7u6W4vg.jpg"
					     class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Дом №2</h5>
						<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam voluptatibus
							ut maiores, consequuntur reprehenderit sequi itaque quas libero aut iste. Ea et adipisci
							nisi atque laborum blanditiis doloremque quisquam reprehenderit voluptatibus tempore
							cupiditate ullam esse veniam, veritatis sapiente voluptates aperiam in consequatur
							temporibus.</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Подробнее</a>
						</li>
						<li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Купить</a>
						</li>
					</ul>
				</div>
			</div>

<<<<<<< HEAD
			<div class="col-md-4 col-sm-12">
				<div class="card my_card" id="house3">
					<img src="https://karkasdoma.pro/wp-content/uploads/8-27-1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Дом №3</h5>
						<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error deleniti
							impedit, provident obcaecati doloribus qui saepe aspernatur. Adipisci laboriosam porro quos.
							Vel.</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Подробнее</a>
						</li>
						<li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Купить</a>
						</li>
					</ul>
				</div>
			</div>
			<!--<div class="container"><div class="row"><div class="col-12"><div class="card"></div></div></div></div>-->


		</div>
	</div>
</section>

<section class="my_articles pt-0">
	<div class="container">
		<div class="row ">
			<div class="col-12">
				<div class="card">
					<form action="" method="get">
						<div>
							<ul>
								<?php
								print_r(getArticleList());
								?>
							</ul>
						</div>

					</form>
				</div>
			</div>


		</div>
	</div>
=======
            <div class="col-md-4 col-sm-12">
                <div class="card my_card" id="house3">
                    <img src="https://karkasdoma.pro/wp-content/uploads/8-27-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Дом №3</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error deleniti
                            impedit, provident obcaecati doloribus qui saepe aspernatur. Adipisci laboriosam porro quos.
                            Vel.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Подробнее</a>
                        </li>
                        <li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Купить</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
>>>>>>> 82ee0ec2ef7ae41ef43c32d724723eeb8f96eda8
</section>
<!--<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" method="get" class="form-example">
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
                                //print_r(calc($_GET["first"], $_GET["second"], $_GET["operation"]))
                            ?>
                        </label>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <?php
                    print_r(getArticleList());
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


<footer id="footer">
<<<<<<< HEAD
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<a href="https://github.com/skazo4nik262" target="_blank" class="btn btn-outline-light"><i
							class="icon-github-circled"></i></a>
			</div>
		</div>
	</div>
=======
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <a href="https://github.com/skazo4nik262" target="_blank" class="btn btn-outline-light"><i
                            class="icon-github-circled"></i></a><br>
                <a href="calculator.php">Калькулятор</a>
            </div>
        </div>
    </div>
>>>>>>> 82ee0ec2ef7ae41ef43c32d724723eeb8f96eda8
</footer>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Не будет ссылок</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
			</div>
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>