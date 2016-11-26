<?php
error_reporting(0);
echo "<meta charset='utf-8'>";

//LEEMOS FICHERO datos.txt

$fichero=fopen("datos_peliculas.txt","r");


while(!feof($fichero)) {
    echo fgets($fichero)."<br>";
}    

fclose($fichero);

echo "<a href='pelicula.html'>Volver al formulario</a>";

?>