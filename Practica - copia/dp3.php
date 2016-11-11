<?php

$nombre=$_REQUEST['nombre'];
$apellidos=$_REQUEST['apellidos'];

function comprobacion($variable1, $variable2) {


    if (($variable1=="") && ($variable2=="")) {

        echo "Introduce el nombre y los apellidos, por favor.";
        echo "<a href='dp3.html'>Volver</a>";
    } else if ($variable1=="") {

        echo "Introduce el nombre, por favor.";
        echo "<a href='dp3.html'>Volver</a>";
        
    } else if ($variable2=="")
    {
        echo "Introduce los apellidos, por favor.";
        echo "<a href=dp3.html>Volver</a>";

        
    }else {
        echo "Tu nombre es: $variable1 <br>";
        echo "Tus apellidos son: $variable2 <br>";
        echo "<a href=dp3.html>Volver</a>";
    }
}

comprobacion($nombre,$apellidos);


?>