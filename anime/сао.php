<!DOCTYPE html>

<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>SAO</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/anime_page.css">
	<link rel="shortcut icon" type="image/x-icon" href="../system_img/icon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
</head>
<body>
	<?php
    	require_once("../header.php");
	?>
	<main>
		<section class="fieldpage">
			<a href="https://ru.wikipedia.org/wiki/Ханами" target="_blanck"><section class="ontop">
				<section id=ontname>Sword Art Online</section>
					<nav><a href="#one"><button>Постер и меню "связанное"</button></a></nav>
					<nav><a href="#two"><button>Название и описание</button></a></nav>
					<nav><a href="#three"><button>Шикимори и сайты для просмотра</button></a></nav>
			</section></a>
			<a id="one" name="one"></a>
			<nav class="dropdown3">
				<button class="dropbutton3">Связанное</button>
					<nav class="droplink3">
						<?php
					    	require_once("сао-связанное.php");
						?>
				    </nav>
				<img class="img" src="../covers/сао.jpg">
			</nav> 
			<nav class="downshiki"><a href="https://shikimori.one/animes/z11757-sword-art-online" target="_blanck"><button>Shikimori</button></a></nav>
			<a id="two" name="two"></a>
			<section class="aboname">
				<section class="name">Мастера меча онлайн</section>
				<section class="abouttitle">
					<h4>Кликните и прокручивайте текст</h4>
					<p><span>Год выхода:</span> 2012 <br>
					<span>Тип:</span> cериал<br>
					<span>Серии:</span> 25<br>
					<span>Жанры:</span> Экшен Игры Приключения Романтика Фэнтези</p>
					<p> 
						<span >Описание:</span>
						И вот вышла многопользовательская игра нового поколения — игра, где смерть реальна и бегство невозможно. Единственный выход — дойти до конца. А называется игра «Sword Art Online».
						Не зная этой правды, десять тысяч игроков зарегистрировались одновременно и тем самым положили начало смертельной битве.
						Главный герой Кирито принимает правила игры и не собирается сдаваться. В этом игровом мире, в гигантской парящей крепости под названием Айнкрад, он стал игроком-одиночкой. Чтобы выйти из игры, ему придётся пройти все 100 этажей этого огромного сооружения. Однако, не в силах противостоять настойчивости мастера рапиры Асуны, он начинает работать с ней в паре. Возможно, эта встреча предопределит судьбу всей игры...
						о принимает правила игры и не собирается сдаваться. В этом игровом мире, в гигантской парящей крепости под названием Айнкрад, он стал игроком-одиночкой. Чтобы выйти из игры, ему придётся пройти все 100 этаже
					</p>
				</section>
		    </section>
		    <a id="three" name="three"></a>
			<section class="sites">
				<nav><a href="https://yummyanime.club/catalog/item/mastera-mecha-onlajn" target="_blank"><button>Yummyanime</button></a></nav>
 				<nav><a href="https://animego.org/anime/mastera-mecha-onlayn-309" target="_blank"><button>Animego</button></a></nav>
				<nav><a href="https://jut.su/swordart-online/" target="_blank"><button>Jutsu</button></a></nav>
				<nav><a href="http://animemoon.org/1128-sword-art-online-2012-goda.html" target="_blank"><button>Animemoon</button></a></nav>
			</section>
		</section>
	</main> 
	<script src="../libraries/jquery-3.6.0.min.js"></script>
	<script src="../script.js" type="text/javascript"></script>
</body>
</html>