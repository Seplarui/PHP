<?php
//$lineas = file("leeme.txt"); //Sacamos cada línea en un vector array_splice($lineas,-2,2); //borramos las dos últimas líneas 
$fich=fopen("/Applications/XAMPP/xamppfiles/htdocs/PHP/Practica_Tema_4 _P1/Pruebas/prueba1.php/leeme.txt","r"); //abrimos el archivo
$tamano=filesize($fich);
$escribir=123456789;
fwrite($fich, $escribir);
$texto=fread($fich,$tamano);
echo $texto;
fclose($fich); //Cerramos el fichero

?>