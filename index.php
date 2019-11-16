<?php require_once "config.php";?>
<html>
<head>
	<title>Главная</title>
    <link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Ubuntu:700&display=swap&subset=cyrillic" rel="stylesheet">  
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no"/>
</head>

<body>
<?php
if($_SESSION["loggedin"] === true){
	echo('<div style="text-align: center; background-color: rgb(193, 248, 214); color: black;">Выполнен Вход</div>');
}
?>
	<div id="overlay">
		<?php include("registration-block.php"); ?>
	</div>
	<header>
		<div class="header">
			<div class="logo">
				<img src="res/images/Logo.png">
			</div>

			<div class="search">
					<img src="res/images/magnif.png" href=#>
					<img src="res/images/sign.png" onclick="document.getElementById('overlay').style.display = 'flex';">
			</div>
		</div>

		<div class="nav">
			<a href="#">БИО</a>
			<a href="#">IT</a>
			<a href="#">РОБО</a>
			<a href="#">ЭНЕРДЖИ</a>
			<a href="#">ПРОМДИЗАЙН</a>
			<a href="#">ХАЙ-ТЕК</a>
		</div>
	</header>

	

	<div class="main">
		<div class="background-pic"></div>
		<div class="kvantorium-desc">
			<a href="https://www.kvantorium-don.ru/"><div class="kvantorium-desc-img"><img id="large-logo" src="res/images/kvantorium.png" alt=""></div></a>
			<p>Детский технопарк «Кванториум» — это возможность для 800 школьников Ростовской области получать дополнительное образование в квантумах — объединениях по образовательным направлениям: Аэроквантум, Биоквантум, IT-квантум, Робоквантум, Промдизайн, Энерджиквантум, Хайтек-цех.</p>
<p>Миссия Кванториума — содействие интеллектуальному развитию детей и подростков, реализации научно-технического потенциала российской молодежи путём внедрения эффективных моделей образования, доступных для тиражирования в учреждениях дополнительного образования Ростовской области.</p>
<p>Основная цель деятельности Кванториума — подготовка будущих молодых инженерных кадров в научно-технической сфере, выявление талантливых детей по направлениям естественнонаучного и научно-технического творчества и создание для них системы мотивации и дальнейшего сопровождения. Задача данного сайта - каталогизировать проекты выпускников кванториума.</p>
		</div>
		<div class="kvantum" id="Bio">
			<h1 class="kvantum-name">Самые популярные Био</h1>
			<div class="featured">
				<?php for ($i=0;$i<4;$i++){include("project-block.php");}?>
			</div>
		</div>
		<div class="kvantum" id="It">
            <h1 class="kvantum-name">Самые популярные Айти</h1>
            <div class="featured">
				<?php for ($i=0;$i<4;$i++){include("project-block.php");}?>
			</div>
		</div>
		<div class="kvantum" id="Robo">
			<h1 class="kvantum-name">Самые популярные Робо</h1>
			<div class="featured">
				<?php for ($i=0;$i<4;$i++){include("project-block.php");}?>
			</div>
		</div>
		<div class="kvantum" id="Energy">
			<h1 class="kvantum-name">Самые популярные Энерджи</h1>
			<div class="featured">
				<?php for ($i=0;$i<4;$i++){include("project-block.php");}?>
			</div>	
		</div>
		<div class="kvantum" id="Design">
			<h1 class="kvantum-name">Самые популярные Промдизайн</h1>
			<div class="featured">
				<?php for ($i=0;$i<4;$i++){include("project-block.php");}?>
			</div>
		</div>
		<div class="kvantum" id="Hitech">
			<h1 class="kvantum-name">Самые популярные Хай-тек</h1>
			<div class="featured">
				<?php for ($i=0;$i<4;$i++){include("project-block.php");}?>
			</div>
		</div>
	</div>
	<footer>
		<div class="phone">
			<img src="res/images/phone.png" alt="" class="phone-logo">
			<span class="phone-number">+7 (863) 238-15-68,  +7 (863) 251-22-81</span>
		</div>
		<div class="mail">
			<img src="res/images/mail.png" alt="" class="mail-logo">
			<span class="email">info@kvantorium-don.ru</span>
		</div>
	</footer>
</body>
</html>
