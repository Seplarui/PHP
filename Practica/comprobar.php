<?php

echo "<meta charset='utf-8'>";
error_reporting(0);

echo"<pre>";
print_r($_REQUEST);
echo"</pre>";

//COMPROBAR TEXTO

function comprobar_texto($var) {

    $tmp=(isset($_REQUEST[$var]))
    ? strip_tags(trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "ISO-8859-1"))) : "";

    if (get_magic_quotes_gpc()) {
        $tmp=stripslashes($tmp);
    }
return $tmp;

}

$texto=comprobar_texto('texto');
$tipo_formato=$_REQUEST['formato'];
$validar= preg_match("(([A-Z]\d{8})|(\d{8}[A-Z])|([a-z]\d{8})|(\d{8}[a-z]))", $texto);

//COMPROBAR SI SE HA RELLENADO EL CAMPO TEXTO
if ($texto=="") {
	echo "Introduce algún texto por favor.<br>";
} else {
	echo "El texto introducido es: <b>$texto</b>.<br>";
}

//COMPROBAR OPCIONES DE FORMATO

$tipo_formato=$_REQUEST['formato'];

if (!isset($_REQUEST['formato'])) 
{

    echo "Selecciona una opción por favor."."<br>";
    
}

if ($tipo_formato=='números' && is_numeric($texto)) {

  echo "Es un número, formato OK.";

} else 

if ($tipo_formato=='texto' && is_string($texto))
 {

    echo "Es texto, formato OK.<br>";

} else if ($tipo_formato=='email' && filter_var($texto, FILTER_VALIDATE_EMAIL) ==true) {

    echo "Formato email correcto.<br>";

} else if ($tipo_formato=='nif' && $validar==1) {

    echo "Formato dni correcto.";

} else {
    echo "Formato incorrecto";
}

/*echo "<br>";
print_r($validar);
*/

echo "<a href='datos.html'>Volver a la página principal</a>";

?>