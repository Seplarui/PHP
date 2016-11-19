<?php

//Inicializamos las variables

$i=1; //Contador de la línea que se está leyendo
$numlinea=3; //Línea que se desea borrar
$aux=array();//Vector auxiliar donde ir guardando los datos


//Abrimos el archivo

$archivo=fopen("leeme.txt","r");

//Hacemos un bucle y vamos recogiendo línea a línea el archivo

while($linea=fgets($archivo)) {
    if($i!=$numlinea) { //Si la línea que queremos eliminar no está
        $aux[]=$linea; //La agregamos a nuestra variable auxiliar
    }
    $i++;
}

//Cerramos el archivo
fclose($archivo);

//Convertimos el vector auxiliar en una cadena de texto(string) para guardarlo de nuevo
$aux=implode($aux,"");

//Reemplazamos el contenido del archivo con la cadena de texto (sin la línea eliminada)
file_put_contents("leeme.txt",$aux);
?>