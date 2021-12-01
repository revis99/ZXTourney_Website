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
				<li class="buy"><a href="exit.php">Выйти</a></li>
			</ul>
		</nav>
		<!-- Всплывающая форма -->
			<div id="popup" class="overlay">
			<a class="cancel" href="#"></a> 
			<div class="popup" id="auth.php">
				<h2>Войти</h2>
				<form>
					<input type="text" name="login"  placeholder="Логин">
					<input type="password" name="pass" placeholder="Пароль">
					<input type="submit" name value="Войти">
					<p>
						У вас нет аккаунта? - <a href="register.php">Зарегистрироваться</a>!
					</p>
				</form>
			</div>
		</div>
	</header>
</div>
	<!-- Основная часть -->
	<main>
		<?php  if($_COOKIE['role']=='user'): ?>
        <div class="container mt-4 mb-3 p-3 d-flex justify-content-center">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" /></button> <span class="name mt-3"></span><?php echo $_COOKIE['user']?></p> <span class="idd"></span><?php echo $_COOKIE['email']?></p>
            <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Ваш пропуск</button> </div>
            <div class="text mt-3"> <span>Ряд: 5<br><br> Дата и место проведения: 21 November, Stockholm </span> </div>
            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
            <div class=" px-2 rounded mt-4 "> <span class="join">Admit on 100$</span> </div>
        </div>
    </div>
</div>
        </div>
		<?php  else: ?>
				<h1 class='text-center my-5'>Добро пожаловать, <?=$_COOKIE['user']?></h1>
				<table class="table w-75 mx-auto">
					<h2 class='w-75 mx-auto'>Покупатели</h2>
				<thead>
					<tr>
					<th scope="col">#</th>
					<th scope="col">Имя</th>
					<th scope="col">Логин</th>
					<th scope="col">Почта</th>
					<th scope="col">Удаление пользователя</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					 $mysql = new mysqli('localhost','root','root','zxtourney'); 


					 if(isset($_GET['id']) && !empty($_GET['id'])) {
						 $deleted_user = $_GET['id'];
						$mysql->query("DELETE FROM `users` WHERE `id`='$deleted_user'");
					 }

					 
					 $result = $mysql->query("SELECT * FROM `users` WHERE `role`='user' ");
					 
					 while($row=$result->fetch_assoc()):
					 
				?>
					<tr>
					<th scope="row"><?= $row['id']-1?></th>
					<td><?= $row['name']?></td>
					<td><?= $row['login']?></td>
					<td><?= $row['email']?></td>
					<td><a href="profile.php?id=<?=$row['id']?>">Удалить</a></td>
					</tr>
				<?php endwhile; ?>
				</tbody>
				</table>
			<?php endif; ?>
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