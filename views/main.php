<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?> : <?=$page;?></title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Тут выводим название проекта из конфига -->
    <title><?=$title;?></title>
	<!-- Тут коннектим нашу табличку стилей отображения страниц -->
	<link rel="stylesheet" href="/css/style.css">
	<!-- Тут коннектим шрифты для отображения страниц -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/b6962483fd.js" crossorigin="anonymous"></script>
	<?php if ($message == "Лажа..."):?>
	<meta http-equiv="refresh" content="0; url=/" />
	<?php endif;?>
</head>
<body>
	<!-- Тут общий контейнер для содержимого страницы -->
    <div class="container">
		<!-- Тут головной блок страницы -->
		<?php include '../views/head.php';?>
		<?=$body;?>
		<!-- Подвал сайта -->
		<?php include '../views/footer.php';?>
	</div>
</body>
</html>
</body>
</html>
