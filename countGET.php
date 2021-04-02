<!DOCTYPE html>
	<html>
	<head>
		<title>cookies</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Bonjour !</h1>
		<h2>Vous avez visité cette page 
			<?php
				if (!isset ($_GET["visite"])) $_GET["visite"]=1;
				echo $_GET["visite"];
			?> fois</h2>
		
		<?php 
			if ($_GET["visite"]==1000000) {
				echo "Félicitations ! Pour vous remercier de votre fidélité nous vous offrons 1000 euros !<br>";
			}
		 ?>
		<a href=
			<?php
				echo "\"countGET.php?visite=", $_GET["visite"]+1,"\"";
			?>  name ="visite" value="0" >
			Visitez à nouveau cette page</a>
		
	</body>
</html>