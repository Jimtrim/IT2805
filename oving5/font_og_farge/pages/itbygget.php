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
				<h2>IT-bygget</h2><br>
				<img src="../img/itbygget.jpg">
				<p>
					Tegnet av Herman Krag. IT-Bygget huser institutt for datateknikk og informasjonsvitenskap.
				</p>
				<p><a href="<?=get_path()?>/pages/p15.php">Gå til neste bygg</a></p>
			</section>

		</div>

	</body>
</html>