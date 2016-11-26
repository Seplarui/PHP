<?php
//error_reporting(0);
echo "<meta charset='utf-8'>";
$tipo_fichero=$_FILES['imagen']['type'];
$tamano_fichero=$_FILES['imagen']['size'];
$nombreDirectorio="imagenes/";

if(!file_exists($nombreDirectorio)){
  mkdir($nombreDirectorio,0777,true);
}
if(is_uploaded_file($_FILES['imagen']['tmp_name'])) {
    print("Nombre del fichero temporal ".$_FILES['imagen']['tmp_name']."<br>");
    $nombreDirectorio="imagenes/";
    print("Nombre del directorio ".$nombreDirectorio."<br>");
    $nombreFichero=$_FILES['imagen']['name'];
    print("Nombre del fichero ".$nombreFichero."<br>");
    $nombreCompleto=$nombreDirectorio.$nombreFichero;
    print("Nombre del fichero completo ".$nombreCompleto."<br>");
    if(is_file($nombreCompleto)) {
        $id_unico=time();
        $nombreFichero=$id_unico."-".$nombreFichero;
        print("Nombre del fichero definitivo ".$nombreFichero."<br>");
    }

    /*
    move_uploaded_file($_FILES['imagen']['tmp_name'],$nombreDirectorio.$nombreFichero);
    print("El archivo se ha subido con éxito.<br/>");
    print("<a href='prueba1.html'>Volver al Formulario</a>");
    
}else {
    print("No se ha podido subir el fichero.<br/>");
    print("<a href='prueba1.html'>Volver al Formulario</a>");
}
*/
 if(!((strpos($tipo_fichero,"gif")||strpos($tipo_fichero,"jpeg"))&& ($tamano_fichero<200000))) {
   echo "<b>NO SE HA PODIDO SUBIR EL FICHERO</b><br>";
   echo "<b>Para subir un fichero debe cumplir los siguientes requisitos</b><br>";
   echo "<p>";
   echo "<i>Ha de ser una imagen con formato: 'jpeg' o 'gif'<br></i>";
   echo "<i>No puede superar 200kb</i>";
   echo "</p>";

 } else {

   move_uploaded_file($_FILES['imagen']['tmp_name'],$nombreDirectorio.$nombreFichero);
    print("El archivo se ha subido con éxito.<br/>");
    print("<a href='prueba1.html'>Volver al Formulario</a>");

 }
}
echo "<a href='prueba1.html'>Volver a subir un fichero</a>";


//COMPROBACIÓN DE VARIABLES
echo "<pre>";
print_r($_FILES['imagen']['type']);
echo "<br>";
print_r($_FILES['imagen']['size']);
echo "<br>";
echo "Tipo de fichero <br>";
print_r($tipo_fichero);
echo "Tamaño de fichero <br>";
print_r($tamano_fichero);
echo "Nombre de fichero <br>";
print_r($_FILES['imagen']['name']);
echo "</pre>";


?>
