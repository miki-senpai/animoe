<!DOCTYPE html>

<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>SAO Alicization</title>
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
				<section id=ontname>Sword Art Online: Alicization</section>
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
				<img class="img" src="../covers/сао-алисизация.jpg">
			</nav> 
			<nav class="downshiki"><a href="https://shikimori.one/animes/z36474-sword-art-online-alicization" target="_blanck"><button>Shikimori</button></a></nav>
			<a id="two" name="two"></a>
			<section class="aboname">
				<section class="name">
					Мастера Меча Онлайн: Алисизация
				</section>
				<section class="abouttitle">
					<h4>Кликните и прокручивайте текст</h4>
					<p><span>Год выхода:</span> 2019 <br>
					<span>Тип:</span> cериал<br>
					<span>Серии:</span> 24<br>
					<span>Жанры:</span> Экшен Игры Приключения Романтика Фэнтези</p>
					<p> 
						<span >Описание:</span>
							Кирито просыпается в гуще огромного, фантастического леса. В попытках разузнать, как он там очутился, он встречает мальчика, который, кажется, знает его. Он должен быть обычным NPC, но его эмоции ничуть не отличаются от человеческих. Со временем к Кирито возвращаются некие воспоминания. Воспоминания из его детства, об этом мальчике и девочке с золотыми, как солнце, волосами, и именем, которое он никогда не должен забыть, — Алиса.
					</p>
				</section>
		    </section>
		    <a id="three" name="three"></a>
			<section class="sites">
				<nav><a href="https://yummyanime.club/catalog/item/mastera-mecha-onlajn-alisizaciya" target="_blank"><button>Yummyanime</button></a></nav>
 				<nav><a href="https://animego.org/anime/sword-art-online-alicization1-s735" target="_blank"><button>Animego</button></a></nav>
				<nav><a href="https://jut.su/swordart-online/" target="_blank"><button>Jutsu</button></a></nav>
				<nav><a href="http://animemoon.org/5244-sword-art-online-alicization-2018-goda.html" target="_blank"><button>Animemoon</button></a></nav>
			</section>
		</section>
	</main> 
	<script src="../libraries/jquery-3.6.0.min.js"></script>
	<script src="../script.js" type="text/javascript"></script>
</body>
</html>