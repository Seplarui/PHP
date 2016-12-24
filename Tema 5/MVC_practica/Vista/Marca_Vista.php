<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Marca Vista</title>

	<style type="text/css">

	td {
		border:1px dotted #FF0000;
		}



	</style>
	
</head>
<body>
<div align="center">
<h1 align="center">Gestión de Marcas de Coches</h1>
<hr>
<ul><li><a href="../alta_vehiculo.php">Alta Vehículo</a></li></ul>

<table border="1">

<tr><td>LISTADO DE MARCAS DE COCHES</td>

<?php

foreach ($matrizMarca as $registro) {
	

	echo "<tr><td>".$registro . "</td></tr>";


}

?>
	</table>
	<a href="index2.php">Inicio</a>
	<hr>
	<i>CEEDCV Sebastián Plaza 2016/2017 21/12/2016</i>
	</div>

</body>
</html>