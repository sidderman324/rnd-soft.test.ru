<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RND Soft Test Task</title>
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'); ?>

	<section class="promo" id="one">
		<div class="paralax" id="paralax">
			<div class="paralax__layer paralax__layer-1"></div>
			<div class="paralax__layer paralax__layer-2"></div>
			<div class="paralax__layer paralax__layer-3"></div>
		</div>

		<span class="bird bird__1"></span>
		<span class="bird bird__2"></span>
		<span class="bird bird__3"></span>

		<div class="container">
			<div class="promo__box">
				<h1 class="promo__title">А ты <br>точно <br>верстальщик?</h1>
				<p class="promo__text">Мы тут подготовили для тебя несложное тестовое задание, при выполнении которого, ты сможешь проявить себя и доказать нам, что ты лучший!</p>
				<a href="https://github.com/sidderman324/rnd-soft.test.ru" class="promo__btn">Да  легко!</a>
			</div>
		</div>
	</section>

	<section class="task" id="two">
		<div class="container">
			<h2 class="task__title">Что мы от тебя хотим?</h2>

			<ul class="task__list">
				<li class="task__item">
					<p class="task__number">1</p>
					<p class="task__text">Нужно сделать по-красоте, в общем,параллакс на элементах, на дяде и домиках при движении мышки</p>
				</li>
				<li class="task__item">
					<p class="task__number">2</p>
					<p class="task__text">Еще, конечно, надо и адаптив сделать, 21 век же, все дела. Мы уверены, это для тебя раз плюнуть!</p>
				</li>
				<li class="task__item">
					<p class="task__number">3</p>
					<p class="task__text">Еще надо сделать форму обратной связи, которую ты увидешь ниже! Делов-то, правда??</p>
				</li>
			</ul>
		</div>
	</section>

	<section class="feedback" id="three">
		<div class="container">
			<h2 class="feedback__title">Это форма обратной связи</h2>

			<p class="feedback__text">Настрой форму обратной связи и отправь свои данные, когда закончишь с задачей=)</p>

			<form action="/request_form.php" id="form_send" method="POST" class="feedback__form">
				<input type="text" name="name" placeholder="Имя" class="feedback__input" required>
				<input type="tel" name="phone" id="phone" placeholder="Телефон" class="feedback__input" required>
				<input type="text" name="email" placeholder="E-mail" class="feedback__input" required>
				<input type="text" name="time" placeholder="Время, потраченное на задачу" class="feedback__input" required>

				<input type="submit" class="feedback__submit" value="Готово">
			</form>
		</div>
	</section>

	<?php include ($_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'); ?>

	<div class="result">
		<p class="result__text">123</p>
		<span class="result__close"></span>
	</div>

	<script src='/js/script.min.js'></script>

</body>
</html>
