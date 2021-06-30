<!DOCTYPE html>

<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Arts</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/arts.css">
	<link rel="shortcut icon" type="image/x-icon" href="../system_img/icon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<script src="../libraries/jquery-3.6.0.min.js"></script>
	<script acync src="../script.js" type="text/javascript"></script>
</head>

<body>
	<?php
	require_once("../header.php");
	?>
	<main>
		<section style="font-size: 14px; position: relative; padding: 0;">
			<section class="am-container">
				<a  data-fancybox="gallery" href="../arts/1.jpg">
					<img src="../arts/1.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/2.jpg">
					<img src="../arts/2.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/3.jpg">
					<img src="../arts/3.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/4.jpg">
					<img src="../arts/4.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/5.jpg">
					<img src="../arts/5.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/6.jpg">
					<img src="../arts/6.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/7.jpg">
					<img class="width" src="../arts/7.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/8.jpg">
					<img src="../arts/8.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/9.jpg">
					<img src="../arts/9.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/10.jpg">
					<img src="../arts/10.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/11.jpg">
					<img src="../arts/11.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/12.jpg">
					<img src="../arts/12.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/13.jpg">
					<img src="../arts/13.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/14.jpg">
					<img src="../arts/14.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/15.jpg">
					<img src="../arts/15.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/16.jpg">
					<img src="../arts/16.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/17.jpg">
					<img src="../arts/17.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/18.jpg">
					<img src="../arts/18.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/19.jpg">
					<img src="../arts/19.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/20.jpg">
					<img src="../arts/20.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/21.jpg">
					<img src="../arts/21.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/22.jpg">
					<img src="../arts/22.jpg" alt="">
				</a>
				<a data-fancybox="gallery" href="../arts/23.jpg">
					<img src="../arts/23.jpg" alt="">
				</a>
			</section>

			<link rel="stylesheet" href="https://snipp.ru/cdn/fancybox/3.5.7/jquery.fancybox.min.css">

			<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>

			<script src="https://snipp.ru/cdn/fancybox/3.5.7/jquery.fancybox.min.js"></script>

			<script src="https://snipp.ru/cdn/montage/jquery.montage.min.js"></script>

			<script>
				$(function() {
					$('.am-container').montage({
						liquid: false, 
						fillLastRow: true,
						margin: 4,
						fixedHeight: 160
					});
				});		
			</script>

			<script type="text/javascript">
			// Если true, то добавляется overflow-y к <body>.
			liquid: false,

			// Расстояние между изображениями.
			margin: 1,

			// Минимальная ширина изображения.
			minw: 70,	

			// Минимальная высота изображения.
			minh: 20,	

			// Максимальная высота изображения.
			maxh: 250,	

			// Чередование высот у строк.
			alternateHeight: false,

			// Случайная высота от min до max.
			alternateHeightRange: {
				min: 100,
				max: 300
			},

			// Фиксированная высота для всех изображений.
			fixedHeight: null,	

			// Если true, то не учитываются minw, minh.
			// Высота берется по самому маленькому изображению.
			minsize: false,

			// Если не будет хватать изображений для полного заполнения, 
			// растянет последнее изображение на всю ширину.
			fillLastRow: false
			</script>
		</section>
		<button id="dark">Затемнить галерею</button>
	</main>
</body>
</html>