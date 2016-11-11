<?php

echo "<meta charset='utf-8'>";

$nombre=comprobar('nombre');

function comprobar($var) {

    $tmp=(isset($_REQUEST[$var]))
    ? strip_tags(trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "ISO-8859-1"))) : "";

    if (get_magic_quotes_gpc()) {
        $tmp=stripslashes($tmp);
    }
return $tmp;

}



if ($nombre=="") {
    echo "Introduce algún dato.";
    echo "<br><a href=dp2.html>Página Principal</a>";

} else {
    echo "El nombre introducido es: <b>$nombre</b>";
     echo "<br><a href=dp2.html>Página Principal</a>";
}


?>
