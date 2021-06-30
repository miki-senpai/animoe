"use strict"

//меню 18 только на главной
var a = "Главная";
var c = "Arts18"
var b = document.getElementsByTagName("title")[0].innerHTML;

if (( a == b ) || (c == b)) {
	$(function(){
		$('.dropdown2').css({ 'display': 'block' });
	});
}
else {
	$(function(){
		$('.dropdown2').css({ 'display': 'none' });
	});
};

$(window).on("resize", function(){
	if ($(window).width() < 769 && ($(window).height() < 1025)) {
		const script = document.createElement("script");
		script.type = "text/javascript";
		script.src = "script.js";
		document.getElementsByTagName("head")[0].appendChild(script);
		console.log('if');
	}
	else { 
		console.log('else');
		$(function(){
			window.location.reload();
		}, 100);
	}
});


//пункты главного меню , 9 кнопок на главной, кнопки на странице "аниме"
if (($(window).width() < 769) && ($(window).height() < 1025)) {
	$(function() {
		/*топ бар*/
		$('.topbar').html('\
			<nav class="dropdown">\
			<button class="dropbutton">萌え</button>\
			<nav class="droplink">\
			<a class="btn18"><span class="text">18</span></a>\
			<a href="/pages/about_site.php"><span class="text">О сайте</span></a>\
			<a href="/pages/arts.php"><span class="text">Арты</span></a>\
			<a href="/pages/enter.php"><span class="text">Вход</span></a>\
			<a href="/pages/anime_list.php"><span class="text">Аниме</span></a>\
			<a href="/index.php"><span class="text">Главная</span></a>\
			</nav>\
			</nav> \
			<section class="search">\
			<form method="get">\
			<input autofocus="" type="text" placeholder="Поиск...">\
			<button class="btnsubmit" type="submit"></button>\
			</form>\
			</section>\
			<section class="js18">\
			<p class="text18">Вы хотите перейти на страницу с материалами эротического характера?<br>Или же вы случайно нажали на кнопку "18"?</p>\
			<nav><a href="/pages/menu_18.php"><button class="yes">Конечно хочу</button></a></nav>\
			<nav><button class="no">Случайно,я вообще монах(иня)</button></nav>\
			</section>\
			<section id="back"></section>\
			');

		/*главная траница*/
		$('.field').html('\
			<nav class="mainb"><a href="https://ru.wikipedia.org/wiki/Моэ" target="_blank"><button>萌え</button></a></nav>\
			<nav><a href="https://shikimori.one" target="_blank"><button>Shikimori</button></a></nav>\
			<nav><a href="https://yummyanime.club" target="_blank"><button>Yummyanime</button></a></nav>\
			<nav><a href="https://animego.org" target="_blank"><button>Animego</button></a></nav>\
			<nav><a href="https://mangalib.me/?section=all-updates" target="_blank"><button>Mangalib</button></a></nav>\
			<nav><a href="http://animemoon.org" target="_blank"><button>Animemoon</button></a></nav>\
			<nav><a href="https://jut.su/anime/" target="_blank"><button>Jutsu</button></a></nav>\
			<nav><a title="Use VPN" href="https://www.anilibria.tv" target="_blank"><button>Anilibria</button></a></nav>\
			<nav><a href="http://shiza-project.com" target="_blank"><button class="two">SHIZA Project</button></a></nav>\
			<nav><a href="https://sovetromantica.com" target="_blank"><button class="two">Sovetromantica</button></a></nav>\
			');
		/*список аниме*/
		$('.fieldanime').html('\
			<nav class="mainb"><a href="https://ru.wikipedia.org/wiki/Аниме" target="_blank"><button><strong>ア<br>ニ<br>メ</strong></button></a></nav>\
			<nav><a href="../anime/сао.php"><button id="a"></button></a><section class="cut">Мастера меча онлайн</section></nav>\
			<nav><a href="../anime/сао2.php"><button id="b"></button></a><section class="cut">Мастера меча онлайн 2</section></nav>\
			<nav><a href="../anime/сао-порядковый ранг.php"><button id="c"></button></a><section class="cut">Мастера Меча Онлайн: Порядковый ранг</section></nav>\
			<nav><a href="../anime/сао-алисизация.php"><button id="d"></button></a><section class="cut">Мастера Меча Онлайн: Алисизация</section></nav>\
			<nav><a href="../anime/сао-война-подмирье.php"><button id="e"></button></a><section class="cut">Мастера Меча Онлайн: Алисизация - Война Андерворлда</section></nav>\
			<nav><a href="../anime/сао-война-подмирье2.php"><button id="f"></button></a><section class="cut">Мастера Меча Онлайн: Алисизация - Война Андерворлда 2</section></nav>\
			<nav><a href="../anime/токийский-гуль.php"><button id="g"></button></a><section class="cut">Токийский гуль</section></nav>\
			<nav><a href="../anime/токийский-гуль2.php"><button id="h"></button></a><section class="cut">Токийский гуль √A</section></nav>\
			<nav><a href="../anime/токийский-гуль-перерождение.php"><button id="i"></button></a><section class="cut">Токийский гуль: Перерождение</section></nav>\
			<nav><a href="../anime/токийский-гуль-перерождение2.php"><button id="j"></button></a><section class="cut">Токийский гуль: Перерождение 2</section></nav>\
			<nav><a href="../anime/паразит.php"><button id="k"></button></a><section class="cut">Паразит: Учение о жизни</section></nav>\
			<nav><a href="../anime/тетрадь-смерти.php"><button id="l"></button></a><section class="cut">Тетрадь смерти</section></nav>\
			<nav><a href="#"><button></button></a>?</nav>\
			<nav><a href="#"><button></button></a>?</nav>\
			');
	});

    //разморозка и заморозка блока с описанием тайтла
    $('.aboname').click(function() {
    	$('.aboname').css({ 'overflow-y': 'scroll' });
    	$('.abouttitle h4').css({ 'display': 'none' });
    	setTimeout((function() {
    		$('.aboname').css({ 'overflow-y': 'hidden' });
    	}), 8500);
    });

    /*появление  и блока с ссылками на связанныйе anime при нажатии на кнопку*/
    $('.dropbutton3').click(function() {
    	$('.droplink3').css({ 'display': 'block', 'height' : 'auto' });
    	setTimeout((function() {
    		$('.droplink3').css({ 'display': 'none' });
    	}), 8000);
    });

    //модальное окно 18
    $(document).ready(function() {
    	$('.btn18').click(function() {
            $('#back').fadeIn('slow', // анимация показ обложки
                function() { // показ мод окно
                	$('.js18')
                	.css('display', 'block')
                	.animate({ opacity: 1, bottom: '20vh' }, 'slow');
                });
        });

        // закрытие мод окна
        $('.no').click(function() {
        	$('.js18')
        	.animate({ opacity: 0, bottom: '15vh' }, 600,
        		function() {
                        $(this).css('display', 'none'); // скрытие окна
                        $('#back').fadeOut('slow'); // скрытие пoдлoжки
                    });
        });
    });
};

//затемнение галереи
var first = true;
$(document).ready(function(){
	$('#dark').click(function() {
		if(first)
		{
			$(this).text('Убрать затемнение');
			first = false;
			$('.am-container').css({'background':'black', 'opacity': '0.5'});
		}
		else
		{
			$(this).text('Затемнить галерею')
			first = true;
			$('.am-container').css({'background':'black', 'opacity': '1'});
		};

	});
});