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
					<h2>Gamle fysikk</h2><br>
					<img src="../img/gamlefysikk.jpg">
					<p>
						Tegnet av Bredo Greve. Bygget ble tatt i bruk i 1924. I dag huser bygget blant annet studentekspedisjonen til IMEs fakultetadministrasjon.
					</p>
					<p><a href="<?=get_path()?>/pages/hovedbygget.php">Gå til neste bygg</a></p>
				</section>
			</section>

		</div>

	</body>
</html>