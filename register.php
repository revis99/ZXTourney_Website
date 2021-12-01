<!DOCTYPE html>
<html lang="ru">
<head>
	<title>zX TOURNEY</title>
	<meta charset="utf-8"><!-- Кодировка -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Свойство для адаптации -->
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
	<!-- Фоновое изображение -->
	<div class="background">
		<!-- Шапка -->
	<header>
		<img src="img/logo.png" alt="">
		<nav>
			<ul>
				<li><a href="#about">О нас</a></li>
				<li><a href="#shed">Расписание</a></li>
				<li><a href="#comp">Для партнёров</a></li>
				<li class="buy"><a href="#popup">Войти</a></li>
			</ul>
		</nav>
		<!-- Всплывающая форма -->
			<div id="popup" class="overlay">
			<a class="cancel" href="#"></a> 
			<div class="popup">
				<h2>Войти</h2>
				<form>
					<input type="text" name="name" placeholder="Логин">
					<input type="tel" name="number" placeholder="Пароль">
					<input type="submit" value="Войти">
					<p>
						У вас нет аккаунта? - <a href="/register.php">Регистрация</a>!
					</p>
				</form>
			</div>
		</div>
	</header>
    <main>
		<div class="register">
	<form action="registration.php" method="post">
		<p>
			Регистрация
		</p>
        <label>ФИО</label>
        <input type="text" name="name"  id="name" placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input type="text" name="login" id="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" id="email" placeholder="Введите адрес своей почты">
     <!-- <label>Изображение профиля</label>
        <input type="file" name="avatar">  -->
        <label>Пароль</label>
        <input type="password" name="pass" id="pass" placeholder="Введите пароль">
        <button type="submit">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="index.php">Авторизируйтесь</a>!
        </p>
		</div>
    </main>
    <footer>
		<p class="timer"><span>zX</span> TOURNEY <span>НАЧИНАЕТСЯ</span>: 10:00</p>
		<p class="soctext">Share us on social networks</p>
		<div class="socials">
			<a href="https://www.facebook.com/"><img src="img/facebook.png" alt=""></a>
			<a href="https://www.instagram.com/"><img src="img/inst.png" alt=""></a>
			<a href="https://vk.com/feed"><img src="img/vk.png" alt=""></a>
		</div>
		<p>© Cybersport Media — All Rights Reserved.</p>
	</footer>
</body>
</html>