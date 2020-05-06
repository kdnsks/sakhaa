<!DOCTYPE html>
<html>
<head>
	<title>UchiSakha</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<style type="text/css">
		{box-sizing: border-box}

		input[type=text], input[type=password] {
		  width: 100%;
		  padding: 15px;
		  margin: 5px 0 12px 0;
		  display: inline-block;
			height: 40px;
			margin-left: auto;
			margin-right: auto;

			background: #FFFFFF;
			border: 1px solid #888a89;
			box-sizing: border-box;
			border-radius: 20px;
		}

		input[type=text]:focus, input[type=password]:focus {
		  background-color: #ddd;
		  outline: none;
		}

		hr {
		  border: 1px solid #7AA7DE;
		  margin-bottom: 20px;
		  opacity: 0.2;
		}


		.regbtn:hover {
		  opacity:0.8;
		}

		a {
		  color: dodgerblue;
		}

		.signin {
		  text-align: center;
		}
		.box{
			padding-top: 0px;
			padding-bottom: 40px;
			padding-right: 40px;
			padding-left: 40px;
		}
		.font{
			font-family: Yanone Kaffeesatz;
		}
		.font-size{
			font-size: 20px;
		}
		.font-size1{
			font-size: 18px;
		}
	</style>
</head>
<body>
	<!--РЕГИСТРАЦИЯ-->
	<div class="reg">
		<div class="mx-auto col-2 text-center p-0"><img src="img/1.png" style="width: 200px; height: 170px; position: relative; top: 35px;"></div>
		
		<div class="form">
			<form action="action_page.php">
			  <div class="container">
			    <h1 class="title">Регистрация</h1>
			    <p class="mt-5 font text-center font-size">Пожалуйста, заполните форму, чтобы создать свой аккаунт.</p>
			    
			    <div class="box font">
			    	<hr>
			    	<label for="name" class="font-size"><b>ФИО</b></label>
				    <input type="text" placeholder="Введите ФИО" name="email" required class="input font-size1">

				    <label for="email" class="font-size"><b>Email</b></label>
				    <input type="text" placeholder="Введите Вашу действующую почту" name="email" required class="input font-size1">

				    <label for="psw" class="font-size"><b>Пароль</b></label>
				    <input type="password" placeholder="Придумайте пароль для входа" name="psw" required class="input font-size1">
				    <hr>
					<p class="text-center">Создавая аккаунт, вы подтверждаете, что соглашаетесь с <a href="#">правилами сайта и положением о конфиденциальности</a>.</p>
				    <button type="submit" class="registerbtn regbtn">Регистрация</button>
				    <div class="container signin font font-size">
			    		<p>У Вас уже есть аккаунт? <a href="vhod.html">Войти</a>.</p>
				   </div>
			  	</div>
			  </div>
			</form>
		</div>
	</div>
</body>
</html>