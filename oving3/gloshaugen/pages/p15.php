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
				<h2>P15</h2><br>
				<img src="../img/p15.jpg">
				<p>
					Bygget har uoffisielt overtatt navnet til parkeringsplassen som tidligere lå på tomten, «P-15». Også kjent under navnet Fraggleberget, da alle datasalene i bygningen er oppkalt etter figurer fra denne serien.
				</p>
				<p><a href="<?=getPath()?>/pages/realfagsbygget.php">Gå til neste bygg</a></p>
			</section>

		</div>

	</body>
</html>