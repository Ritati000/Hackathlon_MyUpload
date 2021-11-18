<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Use Richard | V_Alpha19</title>
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
					<li><a href="index.php" class="active">Startseite</a></li>
					<li><a href="upload.php">Upload</a></li>
				</ul>
			</div>
		</nav>

	<div class="middle">
		<div class="glass-container">
			<h1>Upload deiner Dateien</h1>
			<p>Klicke auf Datei auswählen und dann auf Upload. Erlaubte Dateitypen sind : "MP4, MP3, PNG, JPG"</p>

            <form method="post" class="btn" enctype="multipart/form-data" action="/assets/php/upload.php">
                <input class="btn-round" type="file" name="datei[]">
                <button class="btn-round" name="submit" type="submit">Hochladen und Bestätigen</button>
</form>
        </div>
			</div>
		<script src="https://kit.fontawesome.com/fc030c9ef7.js" crossorigin="anonymous"></script>
	</body>
	</html>
