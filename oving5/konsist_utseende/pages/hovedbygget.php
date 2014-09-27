<?php
	require_once('../functions.php')
?>
<!DOCTYPE html>
<html>
	<?php echo (get_header());?>
	<body>
		<div class="container">
			<header>
				<h1>NTNU Gløshaugen</h1>
			</header>

			<section id="main">
				<section id="navigation">
					<?php echo (get_navbar());?>
				</section>
				<section id="content">
					<h2>Hovedbygget</h2><br>
					<img src="../img/hovedbygget.jpg">
					<p>

	Hovedbygningen på Campus NTNU Gløshaugen i Trondheim er en av de fire første bygningene som ble oppført for Norges tekniske høgskole (NTH), alle tegnet av arkitekt Bredo Greve. Bygningen ble innviet da NTH åpnet i 1910, selv om bare den ca 105 meter lange hovedfløyen mot nord var ferdigstilt. Den siste av Greves tre planlagte fløyer mot sør sto ferdig i 1915.
	</p><p>
	Hovedbygningen er resultat av en arkitektkonkurranse. Greves motto for konkurranseprosjektet, «Vis à vis Domkirken», og hans utforming av hovedfasaden, viser at han var inspirert av middelalderarkitektur generelt og Nidarosdomen spesielt. Dette kommer også til syne i interiøret.
	</p>

					<p><a href="<?=get_path()?>/pages/itbygget.php">Gå til neste bygg</a></p>
				</section>
			</section>
		</div>

	</body>
</html>