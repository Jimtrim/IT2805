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
					<h2>P15</h2><br>
					<img src="../img/p15.jpg">
					<p>
						Bygget har uoffisielt overtatt navnet til parkeringsplassen som tidligere lå på tomten, «P-15». Også kjent under navnet Fraggleberget, da alle datasalene i bygningen er oppkalt etter figurer fra denne serien.
					</p>
					<p><a href="<?=get_path()?>/pages/realfagsbygget.php">Gå til neste bygg</a></p>
				</section>
			</section>

		</div>

	</body>
</html>