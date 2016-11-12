<?php
echo "<meta charset='utf-8'>";


echo "<pre>";
print_r ($_REQUEST);
echo "</pre>";


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

comprobar_cadena_vacia($nombre);
comprobar_cadena_vacia($apellidos);




function comprobar_cadena_vacia($variable_vacia) {

	if ($variable_vacia=="") {
    echo "Introduce algún dato.";
    echo "<br><a href=dp7.html>Página Principal</a>";
}  else {
    echo "El dato introducido es: <b>$variable_vacia</b>";
     echo "<br><a href=dp7.html>Página Principal</a>";
}

}

?>