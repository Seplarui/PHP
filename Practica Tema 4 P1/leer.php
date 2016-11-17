<?php

$fich=fopen("leeme.txt","r"); //abro fichero en modo lectura, puntero al inicio
while(!feof($fich)) { //hasta que no llegue al ifn del fichero voy a leer cada línea
    echo fgets($fich)."<br/>";//pongo salto de línea para que muestrae cada línea en una diferente
}
fclose($fich);//una vez que acabo con el fichero, lo cierro.







?>

