<?php
function getNavbar() {	
	$path = getPath();

	return '<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <a class="navbar-brand" href="'. $path . '">NTNU Gløshaugen</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="' . $path . '/pages/gamlefysikk.php">Gamle Fysikk</a></li>
			<li><a href="' . $path . '/pages/hovedbygget.php">Hovedbygget</a></li>
			<li><a href="' . $path . '/pages/itbygget.php">IT-bygget</a></li>
			<li><a href="' . $path . '/pages/p15.php">P15</a></li>
			<li><a href="' . $path . '/pages/realfagsbygget.php">Realfagsbygget</a></li>
		  </ul>
		</div>
	  </div>
	</nav>';
}


function getPath() {
	$path = $_SERVER['REQUEST_URI'];
	$path = preg_replace("/\/gloshaugen(.*)/", "", $path);
	$path .= "/gloshaugen";
	return $path;
}
