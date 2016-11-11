<?php
echo "<meta charset='utf-8'>";

function comprobar($var) {

    $tmp=(isset($_REQUEST[$var]))
    ? strip_tags(trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "ISO-8859-1"))) : "";

    if (get_magic_quotes_gpc()) {
        $tmp=stripslashes($tmp);
    }
return $tmp;

}

$nombre=comprobar('nombre');
$apellidos=comprobar('apellidos');

 if (($nombre=="") && ($apellidos=="")) {

        echo "Introduce el nombre y los apellidos, por favor.";
        echo "<a href='dp3.html'>Página Principal</a>";
    } else if ($nombre=="") {

        echo "Introduce el nombre, por favor.";
        echo "<a href='dp3.html'>Página Principal</a>";
        
    } else if ($apellidos=="")
    {
        echo "Introduce los apellidos, por favor.";
        echo "<a href=dp3.html>Página Principal</a>";

        
    }else {
        echo "Tu nombre es: <b>$nombre</b> <br>";
        echo "Tus apellidos son:<b>$apellidos</b> <br>";
        echo "<a href=dp3.html>Página Principal</a>";
    }




?>