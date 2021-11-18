<?php
require __DIR__.'/config/config.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MyUpload</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>




	<div class="container">
		<nav class="navigation_bar">
			<div class="nav_logo">Logo</div>
			<a href="#" class="toggle-button">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</a>
			<div class="list-container">
				<ul>
					<li><a href="index.php">Startseite</a></li>
					<li><a href="upload.php" class="active">Upload</a></li>
				</ul>
			</div>
		</nav>

	<div class="middle">
		<div class="glass-container">
			<h1>MyUpload</h1>
			<p>The Baddest Upload Service on the Planet, created by a Person who doesnt know PHP</p>

            <div class="btn">
			<a href="upload.php" class="btn-round ">Upload</a>
            </div>
        </div>
			</div>
		<script src="https://kit.fontawesome.com/fc030c9ef7.js" crossorigin="anonymous"></script>
	</body>
	</html>
