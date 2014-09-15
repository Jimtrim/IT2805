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
				<h2>Hovedbygget</h2><br>
				<img src="../img/hovedbygget.jpg">
				<p>

Hovedbygningen på Campus NTNU Gløshaugen i Trondheim er en av de fire første bygningene som ble oppført for Norges tekniske høgskole (NTH), alle tegnet av arkitekt Bredo Greve. Bygningen ble innviet da NTH åpnet i 1910, selv om bare den ca 105 meter lange hovedfløyen mot nord var ferdigstilt. Den siste av Greves tre planlagte fløyer mot sør sto ferdig i 1915.
</p><p>
Hovedbygningen er resultat av en arkitektkonkurranse. Greves motto for konkurranseprosjektet, «Vis à vis Domkirken», og hans utforming av hovedfasaden, viser at han var inspirert av middelalderarkitektur generelt og Nidarosdomen spesielt. Dette kommer også til syne i interiøret.
</p>

				<p><a href="<?=getPath()?>/pages/itbygget.php">Gå til neste bygg</a></p>
			</section>
		</div>

	</body>
</html>