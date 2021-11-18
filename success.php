<?php
$link = $_GET["link"];
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
					<li><a href="index.php">Startseite</a></li>
					<li><a href="upload.php" class="active">Upload</a></li>
				</ul>
			</div>
		</nav>

	<div class="middle">
		<div class="glass-container">
			<h1>Fertig</h1>
			<p>Dein Link wurde generiert! Er lautet:</p> <h3 id="link" class="link"><?php echo $link; ?></h3>

            <div class="btn">
            <button class="btn-round red-hover" style="cursor:pointer;" onclick="copy();">Kopieren</button>
			<button style="margin-left: 20px; cursor:pointer;" class="btn-round " onclick="download();">Download</button>
            </div>
        </div>
			</div>
        <script>

var link = document.getElementById("link")
        function copy(){

            navigator.clipboard.writeText(link.innerHTML)
        }
        function download(){
            window.location = "https://"+link.innerHTML;
        }

        </script>
		<script src="https://kit.fontawesome.com/fc030c9ef7.js" crossorigin="anonymous"></script>
	</body>
	</html>
