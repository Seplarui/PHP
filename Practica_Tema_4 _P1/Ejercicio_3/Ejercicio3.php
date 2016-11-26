<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 3</title>
</head>
<body>

<h1>Libro de Visitas</h1>

<form action="comentarios.php" method="post">
<label for="comentario">Tu Comentario</label>
<br>
<textarea id="comentario" name="comentario" cols="50" rows="10" maxlength="200"></textarea>

<br>
<label for="nombre">Nombre </label>
<br>
<input type="text" name="nombre">
<br>
<label for="correo">Tu correo</label>
<br>
<input type="text" name="email">
<br>
<input type="submit" Value="Enviar Comentario">



</form>

<?php

//LEEMOS EL FICHERO

$fichero=fopen("comentarios.txt","r");
$tamanyo=filesize("comentarios.txt");
while (!feof($fichero)) {
	echo fgets($fichero)."<br>";
}

fclose($fichero);



?>

</body>
</html>

