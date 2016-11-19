<?php

$lineas=file("leeme.txt"); //Sacamos cada línea en un vector
array_splice($lineas,-2,2);//borramos las dos últimas líneas
$fich=fopen("leeme.txt","w+b");//abrimos el fichero
foreach($lineas as $linea) //guarda los cambios volviéndolo a escribir
    fwrite($fich,$linea);
fclose($fich);




?>
