<?php
	require_once('functions.php')
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
				<h2>Velkommen til Gløshaugen!</h2><br>
				<img src="img/gloshaugen.jpg">
				<p>
					Gløshaugen er et område ca. 2 km sørøst for Trondheim sentrum. I dag er Gløshaugen-platået 
					best kjent som NTNUs største universitetsområde, campus NTNU Gløshaugen, med Hovedbygningen 
					fra Norges tekniske høgskole (NTH) som et synlig landemerke fra flere steder i byen. Før NTH 
					ble etablert, hadde området gjennom tidene vært brukt til både gårdsdrift, ekserserplass, 
					landsteder og spesialskoler.
				</p>
				<p>
					Etter at Stortinget i 1900 hadde vedtatt at det skulle opprettes en teknisk høyskole i Trondheim, 
					og Gløshaugen var bestemt som tomt for skolen, ble det avholdt en arkitektkonkurranse om 
					hovedbygning og tre laboratoriebygninger. Dette var de bygningene man mente det var behov for. 
					Arkitekt Bredo Greves prosjekt og plan for området ble valgt for utførelse.
				</p>
			</section>

		</div>

	</body>
</html>