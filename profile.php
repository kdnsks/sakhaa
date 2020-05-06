<!DOCTYPE html>
<html>
<head>
	<title>UchiSakha</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<style type="text/css">
		.hover:hover {
		  opacity:0.7;
		  transition: 0.3s;
		}
		a{
		    display: inline-block;
			width: 500px;
		}
		a div{
		    background: #000;  /* У блока, оборачивающего картинку при наведении будет просвечивать черный фон */
		    overflow: hidden;  /* Ограничиваем видиую область */
		}
		a div img{
		    opacity: 1;
		    transition: opacity 124ms linear, transform 124ms linear;  /* Плавное изменение прозрачности и увеличения */
			width: 100%;
			height: auto;
		    display: block; /* Убираем полосу под картинкий */
		}
		a:hover div img{
		    opacity: 0.9; /* Высветляем картинку, но она становится темнее, так как под ней черный фон */
		    transform: scale(1.05); /* Увеличение картинки */
		}
		a + a div{
			background: #fff; /* Если необходимо высветление картинки при наведении, оборачивающий div должен иметь белый фон */
		}
	</style>
</head>
<body>
	<!--ФОН-->
	<div class="body col-12 pr-0 pl-0">
		<!--ШАПКА-->
			<div class="header col-12 pr-5">
				<div class="row">
					<div class="logo"></div>
					<div class="logo-text hover">uchisakha</div>
					<a href="profile.html" class="header-text mx-auto hover">Имя пользователя</a>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" style="font-family: Yanone Kaffeesatz; width: 150px; height: 40px; margin-top: 40px;">Пройти тест
					</button>
			</div>
		<!--КОНТЕНТ-->
			<div>
				<div class="body-title mx-auto" style="text-shadow: black 0 0 2px;">Ваш профиль</div>
				<div class="row col-12">
					<p style="font-family: Yanone Kaffeesatz; font-size: 35px; margin-left: 85px;">Ваш уровень: начинающий</p>
					<div class="mx-auto col-5"> 
						<h1 class="" style="font-family: Yanone Kaffeesatz; ">Сколько выполнено заданий:</h1>
					</div>
					
				</div>
				
				<div class="row mx-auto col-10">
					<a href="index2.html">
						<div class="level" style="margin-left: 100px;"><img src="img/darkbg.jpg" style="position: relative;"><p style="font-size: 35px; position: absolute; top: 340px; left: 220px;">Начинающий</p>
							<p style="font-size: 35px; position: absolute; top: 390px; left: 270px;">0/0</p>
						</div>
					</a>
					<a href="index2.html">
						<div class="level" style="margin-left: 100px;"><img src="img/darkbg.jpg" style="position: relative;"><p style="font-size: 35px; position: absolute; top: 340px; left: 750px;">Средний</p>
							<p style="font-size: 35px; position: absolute; top: 390px; left: 780px;">0/0</p>
						</div>
					</a>
					<a href="index2.html">
						<div class="level" style="margin-left: 100px;"><img src="img/darkbg.jpg" style="position: relative;"><p style="font-size: 35px; position: absolute; top: 340px; left: 1220px;">Продвинутый</p>
							<p style="font-size: 35px; position: absolute; top: 390px; left: 1280px;">0/0</p>
						</div>
					</a>
				</div>
			</div>
	</div>
	
</body>
</html>