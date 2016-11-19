<?php
//error_reporting(0);

//ABRIR Y/O CREAR FICHERO

//if (fopen("fichero.txt","w")) {
//	echo "<b>El archivo fichero.txt existe y ha quedado abierto</br>";
//} else {
//	echo "<b>El archivo fichero.txt no existe</br>";
//}


//LEER FICHERO
$archivo=fopen("fichero.txt","w+b");
$tamano=filesize("fichero.txt");
$contador=fread($archivo,$tamano);

echo "El contador es: $contador";

//print_r($contador);
$contador=$contador+1;
echo "<br/>";
echo "El contador es: $contador";
$linea=file("fichero.txt");
array_splice($linea,-1,1);

foreach($linea as $line) {
	echo "<br/>";
	
	print_r($line);
	fwrite($archivo,$line);

}


//fwrite($archivo,$contador);
//fwrite($archivo,"kkkkk");






//BORRAR LÍNEA

//$linea=file("fichero.txt");
//array_splice($linea,-1,1);

fclose($archivo);






?>