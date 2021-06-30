<!DOCTYPE html>

<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Tokyo Ghoul</title>
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
				<section id=ontname>Tokyo Ghoul</section>
					<nav><a href="#one"><button>Постер и меню "связанное"</button></a></nav>
					<nav><a href="#two"><button>Название и описание</button></a></nav>
					<nav><a href="#three"><button>Шикимори и сайты для просмотра</button></a></nav>
			</section></a>
			<a id="one" name="one"></a>
			<nav class="dropdown3">
				<button class="dropbutton3">Связанное</button>
					<nav class="droplink3">
						<?php
					    	require_once("токийский-гуль-связанное.php");
						?>
				    </nav>
				<img class="img" src="../covers/токийский-гуль.jpg">
			</nav> 
			<nav class="downshiki"><a href="https://shikimori.one/animes/22319-tokyo-ghoul" target="_blanck"><button>Shikimori</button></a></nav>
			<a id="two" name="two"></a>
			<section class="aboname">
				<section class="name">
					Токийский гуль
				</section>
				<section class="abouttitle">
					<h4>Кликните и прокручивайте текст</h4>
					<p><span>Год выхода:</span> 2014 <br>
					<span>Тип:</span> cериал<br>
					<span>Серии:</span> 12<br>
					<span>Жанры:</span> Экшен Детектив Ужасы Психологическое Сверхъестественное Драма Сейнен</p>
					<p> 
						<span >Описание:</span>
							В Токио происходит серия жестоких убийств. На местах преступлений практически нет улик, однако все уверены, что виновниками являются гули, пожирающие людей, хотя никто толком не знает, кто они и как выглядят. Эти события мало волнуют Кэна Канэки, но вместе со своим лучшим другом Хидэёши Нагачикой он считает, что гулей до сих пор не обнаружили только потому, что они ловко маскируются под своих жертв...
							Кэн любит книги и частенько читает их в кафе. Однажды его привлекла одна девушка, читающая книгу в этом самом кафе, причём, того же автора, что и книга в руках главного героя. Однако почему такой редкий шанс начать взаимоотношения с прекрасной девушкой кончается провалом? И почему она оказалась гулем? Что же может произойти со студентом первого курса филологического факультета? Шок, потеря сознания, больница, операция, новый желудок. Это знакомство изменило его жизнь: теперь он не человек, но и не гуль. Какое решение он примет и что его ждёт? Кэн Канэки, кем же ты станешь: охотником или добычей?
					</p>
				</section>
		    </section>
		    <a id="three" name="three"></a>
			<section class="sites">
				<nav><a href="https://yummyanime.club/catalog/item/tokijskij-gul" target="_blank"><button>Yummyanime</button></a></nav>
 				<nav><a href="https://animego.org/anime/tokiyskiy-gul-s243" target="_blank"><button>Animego</button></a></nav>
				<nav><a href="https://jut.su/tokushu/" target="_blank"><button>Jutsu</button></a></nav>
				<nav><a href="http://animemoon.org/1293-tokyo-ghoul.html" target="_blank"><button>Animemoon</button></a></nav>
			</section>
		</section>
	</main> 
	<script src="../libraries/jquery-3.6.0.min.js"></script>
	<script src="../script.js" type="text/javascript"></script>
</body>
</html>