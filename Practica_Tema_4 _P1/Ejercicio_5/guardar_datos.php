<?php

echo "<meta charset='utf-8'>";

$titulo=$_REQUEST['titulo'];
$director=$_REQUEST['director'];
$genero=$_REQUEST['genero'];
$fichero="datos_peliculas.txt";
$escribir_datos=fopen("datos_peliculas.txt","a");

if(($titulo!="")&& ($director!="")) {

    echo "Título: $titulo, Director: $director, Género: $genero";

    if ($escribir_datos) {
        fwrite($escribir_datos, "Título: $titulo, Director: $director, Género: $genero.\r\n");
        echo "<br>";
        echo "Datos guardados<br>";
        echo "<a href='mostrar_datos.php'>Mostrar los datos</a><br>";
        echo "<a href='pelicula.html'>Volver al formulario</a>";
    } else {
        echo "No se han podido guardar los datos";
    }

} else {
    echo "Rellena todos los campos por favor.<br>";
    echo "<a href='pelicula.html'>Volver al formulario.</a>";
}

/*
echo "<pre>";

echo "El titulo es: $titulo";
echo "El director es: $director";
echo "El género es: $genero";


echo "</pre>";
*/
?>