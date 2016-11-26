<?php
error_reporting(0);

echo "<meta charset='utf-8'>";

//VARIABLES
$nombre=$_REQUEST['nombre'];
$telefono=$_REQUEST['telefono'];
$matriculado=$_REQUEST['matriculado'];
$enseyanza=$_REQUEST['enseyanza'];
$mostrar_datos=$_REQUEST['mostrar'];

//VARIABLES FICHEROS

$fichero="datos.txt";
$escribir_datos=fopen("datos.txt","a");


//COMPRABAR CAMPOS NO VACIOS
if (($nombre!="") && ($telefono!="")) {

//MOSTRAR DATOS PANTALLA

if($mostrar_datos=="Por Pantalla") {

    echo "El alumno $nombre, con teléfono $telefono, está matriculado en un $enseyanza.<br>";
//MOSTRAR DATOS EN FICHERO
} else if (($mostrar_datos=="En Archivo datos.txt")) {

    echo "<a href='ficheros2.php'>Mostrar archivo de datos.</a><br>";


//CREAR FICHERO SI NO EXISTE


fwrite($escribir_datos,"El alumno $nombre, con teléfono $telefono, está matriculado en un $enseyanza.\r\n");


}

} else {
    echo "Introduce los datos que faltan por favor.<br>";
}


fclose($fichero);
echo "<a href='alumno.html'>Volver al formulario.</a><br>";



/*
echo "<pre>";
echo "Nombre: ";print_r($nombre);
echo "<br>";
echo "Teléfono: ";print_r($telefono);
echo "<br>";
echo "Matrículado: ";print_r($matriculado);
echo "<br>";
echo "Enseñanza: ";print_r($enseyanza);
echo "<br>";
echo "Donde mostrar los datos: ";print_r($mostrar_datos);
echo "<br>";
echo "</pre>";
*/

?>