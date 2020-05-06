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
			<div style="border-radius: 18px; background-color: white; border: 1px solid #7AA7DE; margin-top: 100px;" class="col-7 mx-auto text-center p-3">
				<h1 style="text-align:; font-family: Yanone Kaffeesatz; font-size: 30px;">Имя сущивительное - аат тыл</h1>
				<ol>
				    <li>Найди среди этих слов имена существительные:
						<div class="row">
							<div class="border border-dark rounded" style="margin-left: 15%">Сүүрэбин</div>
							<div class="border border-dark rounded" style="margin-left: 15%">аһаҕас</div>
							<div class="border border-dark rounded" style="margin-left: 15%">аан</div>
							<div class="border border-dark rounded" style="margin-left: 15%">ахсыс</div>
						</div>
				    </li>
				    <li>излечение от пунктуальности (никогда никуда не будете торопиться);</li>
				    <li>изменение восприятия времени и часов.</li>
				</ol>
				
			</div>
			

			
	<script type="text/javascript">
		
	</script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>