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
		<?php if($_COOKIE['user']==''): ?>
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
				<form action="auth.php" method="post">
					<input type="text" name="login"  placeholder="Логин">
					<input type="password" name="pass" placeholder="Пароль">
					<input type="submit" value="Войти">
					<p>
						У вас нет аккаунта? - <a href="register.php">Зарегистрироваться</a>!
					</p>
				</form>
			</div>
		</div>
	</header>
	<?php else:?>
		<header> 
		<img src="img/logo.png" alt="">
		<nav>
			<ul>
				<li><a href="#about">О нас</a></li>
				<li><a href="#shed">Расписание</a></li>
				<li><a href="#comp">Для партнёров</a></li>
				<li class="buy"><a href="profile.php">Профиль</a></li>
				<li class="buy"><a href="exit.php">Выйти</a></li>
			</ul>
		</nav>
		<!-- Всплывающая форма -->
			<div id="popup" class="overlay">
			<a class="cancel" href="#"></a> 
			<div class="popup">
				<h2>Войти</h2>
				<form action="auth.php" method="post">
					<input type="text" name="login"  placeholder="Логин">
					<input type="password" name="pass" placeholder="Пароль">
					<input type="submit" value="Войти">
					<p>
						У вас нет аккаунта? - <a href="register.php">Зарегистрироваться</a>!
					</p>
				</form>
			</div>
		</div>
	</header>
	<?php endif; ?>
	<!-- Основная часть -->
	<main>
		<!-- Первая секция -->
		<section class="first">
			<div class="infoblock">
				<h1>The largest esports<br> tournament ever</h1>
				<ul>
					<li>Семь невероятных дней</li>
					<li>Море эмоций</li>
				</ul>
				<p>/////////////////////////////////////</p>
				<p>DOTA 2</p>
				<p>/////////////////////////////////////</p>
				<p class="date1">20-27 NOVEMBER 2021</p>
			</div>
			<div class="formblock">
				<h2>ЗАПОЛНИТЕ ФОРМУ<br>ЧТОБЫ КУПИТЬ ПРОПУСК</h2>
				<form action="requests.php" method="post">
					<input type="text" name="fullname" placeholder="Имя" required>
					<input type="email" name="mail" placeholder="E-mail" required>
					<div class="checkblock">
						<input type="checkbox" name="confirm" id="confirm" required><label for="confirm">I agree to receive commercial information</label>
					</div>
					<input type="submit" value="КУПИТЬ СЕЙЧАС">
				</form>
			</div>
		</section>
	</div>
		<!-- Вторая секция -->
		<section class="second" id="about">
			<div class="flexblock">
				<div class="infoblock">
					<h2>О ТУРНИРЕ</h2>
					<p>Долгожданный «чемпионат мира» по Dota 2, который наконец-то будет проведен осенью 2021 года. В течение 7 дней, с 20 по 27 ноября, 18 лучших команд мира будут сражаться за рекордный призовой фонд и эгиду чемпионов.

						В основной стадии турнира примет участие 12 команд со всего мира, которые набрали наибольшее количество DPC-очков за два тура рейтинговых лиг и мейджоров. Остальные 6 участников определяться по итогам квалификаций — через них в итоге пройдет по одному коллективу из каждого региона.</p>
				</div>
				<div class="videoblock">
					<iframe src="https://www.youtube.com/embed/Cn1Bq9mNmvw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<img class="fond" src="img/prizepool.png">
		</section>
		<!-- Третья секция -->
		<section class="third">
			<h2>СПОНСОРЫ</h2>
			<div class="sponsors">
				<img src="img/ea.png">
				<img src="img/dxracer.png">
				<img src="img/valve.png">
				<img src="img/blizzard.png">
				<img src="img/cola.png">
			</div>
		</section>
		<!-- Четвертая секция -->
		<section class="fourth" id="shed">
			<h2>РАСПИСАНИЕ ТУРНИРА</h2>
			<div class="shedule">
				<div class="green">
					<h3>ДЕНЬ 1</h3>
					<p class="time">||</p>
					<p class="desc">Descirtion Descirtion Descirtion Descirtion</p>
					<p class="time">|TIME|</p>
					<p class="desc">Descirtion Descirtion Descirtion Descirtion</p>
					<p class="time">|TIME|</p>
					<p class="desc">Descirtion Descirtion Descirtion Descirtion</p>
					<p class="time">|TIME|</p>
					<p class="desc">Descirtion Descirtion Descirtion Descirtion</p>
				</div>
				<div class="purple"> 
					<h3>ДЕНЬ 2</h3>
					<p>БУДЕТ ДОСТУПЕН ПОЗЖЕ</p>
				</div>
			</div>
		</section>
		<!-- Пятая секция -->
		<section class="fifth" id="comp">
			<h2>ДЛЯ ПАРТНЁРОВ</h2>
			<p>
				Предоставляем выгодные условия партнёрства для наших партнёров
			</p>
		</section>
		<!-- Шестая секция -->
		<section class="sixth">
			<h2>ОСТАВЬТЕ ЗАЯВКУ, И МЫ ВАМ ПЕРЕЗВОНИМ</h2>
			<form action="requests.php" method="post">
				<input type="text" name="fullname" placeholder="Имя">
				<input type="email" name="mail" placeholder="Почта">
				<input type="submit" value="Отправить">
			</form>
		</section>
	</main>
	<!-- Подвальная часть -->
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