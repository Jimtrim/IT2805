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
			
			<?php echo (get_navbar());?>
			
			
			<section id="main">
				<h2>Gamle fysikk</h2><br>
				<img src="../img/gamlefysikk.jpg">
				<p>
					Tegnet av Bredo Greve. Bygget ble tatt i bruk i 1924. I dag huser bygget blant annet studentekspedisjonen til IMEs fakultetadministrasjon.
				</p>
				<p><a href="<?=get_path()?>/pages/hovedbygget.php">Gå til neste bygg</a></p>
			</section>

		</div>

	</body>
</html>