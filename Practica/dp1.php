<?php

$nombre=$_REQUEST['nombre'];

if ($nombre=="") {
    echo "Introduce algún dato.";
    header("Location: http://192.168.1.45/PHP/Practica/dp1.html");

} else {
    echo "El nombre introducido es: $nombre";
}


?>
