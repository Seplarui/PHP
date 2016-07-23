<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Documento sin título</title>
	</head>
	<body>

	<?php

	function incrementaVariable() {

		static $contador=0;
		$contador++;
		echo $contador . "<br>";

		
	}

	incrementaVariable();
		incrementaVariable();
			incrementaVariable();
				incrementaVariable();

		?>
	</body>
	</html>		
