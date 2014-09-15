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
			<h2>Realfagsbygget</h2><br>
			<img src="../img/realfagsbygget.jpg">
			<p>
				Realfagbygget er en av NTNUs bygninger på Gløshaugen i Trondheim. Det rommer undervisningslokaler, laboratorier, kontorer, Realfagbiblioteket og kantine for studenter og ansatte ved instituttene for biologi, for fysikk og for kjemi.
			</p>
			<p>
				I 1994 ble det gjennomført en åpen arkitektkonkurranse om et realfagbygg på Gløshaugen. Arkitektkontoret Narud-Stokke-Wiig vant konkurransen i samarbeid med HUS Arkitekter AS, og de fikk oppdraget med å prosjektere det nye bygget. I 1996 vedtok Stortinget å etablere NTNU. Samme år ble det bevilget midler over statsbudsjettet til å starte byggingen, for å kunne samle de realfaglige fakultetene, som var spredt på flere områder i byen. Grunnarbeidene startet samme år og 28. mai 1997 ble grunnstenen lagt ned av daværende statsråd Gudmund Hernes.
			</p>
			<p><a href="<?=getPath()?>/">Gå til neste bygg</a></p>
		</section>

	</div>

</body>
</html>