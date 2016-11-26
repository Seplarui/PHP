<?php
error_reporting(0);
echo "<meta charset='utf-8'>";

//LEEMOS FICHERO datos.txt

$fichero=fopen("datos.txt","r");


while(!feof($fichero)) {
    echo fgets($fichero)."<br>";
}    

fclose($fichero);

echo "<a href='alumno.html'>Volver al formulario</a>";

?>