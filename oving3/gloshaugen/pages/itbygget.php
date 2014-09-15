<?php
	require_once('../functions.php')
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<title>Hovedside | NTNU Gløshaugen</title>
	</head>
	<body>
		<div class="container">
			<header>
				<h1>NTNU Gløshaugen</h1>
			</header>
			
			<?php echo (getNavbar());?>
			
			
			<section id="main">
				<h2>IT-bygget</h2><br>
				<img src="../img/itbygget.jpg">
				<p>
					Tegnet av Herman Krag. IT-Bygget huser institutt for datateknikk og informasjonsvitenskap.
				</p>
				<p><a href="<?=getPath()?>/pages/p15.php">Gå til neste bygg</a></p>
			</section>

		</div>

	</body>
</html>