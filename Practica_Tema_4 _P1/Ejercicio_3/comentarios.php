<?php

$nombre=$_REQUEST['nombre'];
$correo=$_REQUEST['email'];
$comentario=$_REQUEST['comentario'];
$fichero="comentarios.txt";
$escribir_fichero=fopen("comentarios.txt","a");
//CREAMOS EL FICHERO
if (fopen("comentarios.txt","a")) {
    echo "<b>El archivo comentarios.txt existe y ha quedado abierto.</b>";
} else
{
    echo "<b>El archivo comentarios.txt no existe y lo creamos.</b>";
}


rewind($escribir_fichero);
$fecha=date('d-m-Y');
fwrite($escribir_fichero,$nombre."($correo) escrito el  $fecha"."\r\n");

fwrite($escribir_fichero,$comentario."\r\n");


fclose($fichero);
//." "." "
//MOSTRAR DATOS EN PANTALLA PRUEBAS
echo "<pre>";
echo "El nombre es $nombre";
echo "<br>";
echo "El correo es $correo";
echo "<br>";
echo "El comentario es $comentario";
echo "<br>";
echo "</pre>";

echo "<a href='Ejercicio3.php'><b>Vuelve al formulario de comentarios.</a></b>";






?>