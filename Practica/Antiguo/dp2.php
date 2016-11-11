<?php

$nombre=$_REQUEST['nombre'];

if ($nombre=="") {
    echo "Introduce algun dato.";
    echo "<a href=dp2.html>Volver</a>";
    //header("Location: http://192.168.1.45/PHP/Practica/dp2.html");

} else {
    echo "El nombre introducido es: $nombre";
     echo "<a href=dp2.html>Volver</a>";
}


?>
