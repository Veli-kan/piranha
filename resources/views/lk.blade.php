<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" type="text/css" href=lk.css> <!-- Подключаем внешнюю таблицу стилей -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">	

</head>

<body>
<header>
    <div class="shapka">
	    <img class="art" src="images/black_white_town.jpg" alt="art">
        <img class="logo" src="images/logo.jpg" alt="logo">
		<div class= ""></div>
    </div>
	
	
</header>
	
<main>
	
	<div class="main_info">	
			<div class="left_column">
				<div class="form-wrap">
				<i class="fa fa-etsy" aria-hidden="true"></i>
				<h1>Регистрация</h1>
				  <form method="post" action="form.php">
					<div>
					  <label for="name">Имя</label>
					  <input type="text" name="name" required>
					</div>
					<div class="radio">
					  <span>Пол</span>
					  <label>
						<input type="radio" name="sex" value="мужской">мужской
						<div class="radio-control male"></div>
					  </label>
					  <label>
						<input type="radio" name="sex" value="женский">женский
						<div class="radio-control female"></div>
					  </label>
					</div>
					<div>
					  <label for="email">E-mail</label>
					  <input type="email" name="email" required>
					</div>
					<div>
					  <label for="country">Страна</label>
					  <select name="country">
						<option>Выберите страну проживания</option>
						<option value="Россия">Россия</option> 
						<option value="Украина">Украина</option> 
						<option value="Беларусь">Беларусь</option> 
					  </select> 
					  <div class="select-arrow"></div> 
					</div> 
					<button type="submit">Отправить</button> 
				  </form> 
				</div>


			</div>
			<div class="chat_reklama">
				<h4>Наши друзья</h4>
				<a href="#"><img src="images/DiscordLogo.jpg"></a>					
			</div>
	</div>
	
</main>
<footer>
	<div class="late_info">
		<ul class="footer_links">
			<li><a href="http://rootgames.ru" target="_blank">Rootgames.Ru</a></li>
			<li><a href="https://www.nk-cs.ru" target="_blank">www.nk-cs.ru</a></li> 
			<li><a href="/index/0-3">Связь с Администрацией</a></li>
		</ul>
	</div>

</footer>
</body>
</html>