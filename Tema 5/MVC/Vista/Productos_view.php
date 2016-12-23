<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vista</title>

	<style type="text/css">

	td {
		border:1px dotted #FF0000;
	}
		

	</style>
	}
</head>
<body>

<table>

<tr><td>NOMBRE DEL ARTÍCULO</td>


<?php

foreach ($matrizProductos as $registro) {
	

	echo "<tr><td>".$registro["NOMBREARTÍCULO"] . "</td></tr>";




}
?>

</table>
	
</body>
</html>