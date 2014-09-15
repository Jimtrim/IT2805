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
				<h2>Gamle fysikk</h2><br>
				<img src="../img/gamlefysikk.jpg">
				<p>
					Tegnet av Bredo Greve. Bygget ble tatt i bruk i 1924. I dag huser bygget blant annet studentekspedisjonen til IMEs fakultetadministrasjon.
				</p>
				<p><a href="<?=getPath()?>/pages/hovedbygget.php">Gå til neste bygg</a></p>
			</section>

		</div>

	</body>
</html>