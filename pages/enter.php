<!DOCTYPE html>

<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Enter</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/enter.css">
	<link rel="shortcut icon" type="image/x-icon" href="../system_img/icon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<script src="../libraries/jquery-3.6.0.min.js"></script>
	<script src="../script.js" type="text/javascript"></script>

</head>

<body>
	<?php
	require_once("../header.php");
	?>
	<main>
		<section class="enter-registration">
			<form action="#" class="enter">
				<section class="form__field">
					<input type="text" name="name" placeholder="ник или e-mail" required>
					<input type="password" id="enter" name="name" placeholder="пароль" required>
					<button type="submit">Войти</button>
				</section>
			</form>
			<form action="#" class="registration">
				<section class="form__field">
					<input type="text" name="name" placeholder="ник" required>
					<input type="password" id="registration" name="name" placeholder="пароль" required>
					<input type="email" name="name" placeholder="е-мail">
					<span class="form__error">Это поле должно содержать E-Mail в формате example@site.com</span>
					<button type="submit">Зарегистрироваться</button>
				</section>
			</form>
			<section class="fantom"></section>
		</section>
	</main>

</body>
</html>