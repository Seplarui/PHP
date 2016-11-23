<?php
error_reporting(0);
if(is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {
    print("Nombre del fichero temporal ".$_FILES['nombre_archivo_cliente']['tmp_name']."<br>");
    $nombreDirectorio="archivos/";
    print("Nombre del directorio ".$nombreDirectorio."<br>");
    $nombreFichero=$_FILES['nombre_archivo_cliente']['name'];
    print("Nombre del fichero ".$nombreFichero."<br>");
    $nombreCompleto=$nombreDirectorio.$nombreFichero;
    print("Nombre del fichero completo ".$nombreCompleto."<br>");
    if(is_file($nombreCompleto)) {
        $id_unico=time();
        $nombreFichero=$id_unico."-".$nombreFichero;
        print("Nombre del fichero definitivo ".$nombreFichero."<br>");
    }
    move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'],$nombreDirectorio.$nombreFichero);
    print("El archivo se ha subido con éxito.<br/>");
    print("<a href='ficheros1.html'>Volver al Formulario</a>");
}else {
    print("No se ha podido subir el fichero.<br/>");
    print("<a href='ficheros1.html'>Volver al Formulario</a>");
}


?>

