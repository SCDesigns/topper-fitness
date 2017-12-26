<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
		<title>Topper Fitness</title>
		<meta name="description" content="Life begins at the TOP." />
		<!--css styles-->
		<link rel="stylesheet" type="text/css" href="./css/main.css">
		<!--favicon links-->
		<link rel="apple-touch-icon" sizes="57x57" href="./assets/img/favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="./assets/img/favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="./assets/img/favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="./assets/img/favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="./assets/img/favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="./assets/img/favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="./assets/img/favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="./assets/img/favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="./assets/img/favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="./assets/img/favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicons/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!--imports-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="./js/nav.js" type="text/javascript"></script>
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<?php include "./partials/layouts/header.html" ?>
		<section id="landing">
			<div class="hero">
				<h1>Topper Fitness</h1>
				<hr><h4 id="nav-trigger">Welcome to the TOP</h4><hr>
			</div>
		</section>
		<section id="about">
			<div class="about-text">
				<h3>About</h3>
				<hr>
				<?php include "./partials/sections/about.html" ?>
			</div>
			<img src="./assets/img/about.jpg" class="about-img"/>
		</section>
		<section id="trainers">
			<h3>The Trainers</h3>
			<hr>
			<?php include "./partials/sections/trainers.html" ?>
		</section>
		<section id="staff">
			<h3>The Staff</h3>
			<hr>
			<?php include "./partials/sections/staff.html" ?>
		</section>
	</body>
</html>
