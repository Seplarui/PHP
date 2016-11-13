<?php

echo "<meta charset='utf-8'>";
error_reporting(0);

echo"<pre>";
print_r($_REQUEST);
echo"</pre>";

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

if ($texto=="") {
	echo "Introduce algún texto por favor.<br>";
} else {
	echo "El texto introducido es: <b>$texto</b>.<br>";
}

if (!isset($_REQUEST['formato'])) 
{

    echo "Selecciona una opción por favor."."<br>";
    
} else {

    $tipo_formato=$_REQUEST['formato'];
    //echo "La opción que has seleccionado ha sido <b>$tipo_formato</b>.";
    if($tipo_formato=="números") {
	//echo "Has seleccionado números.";
	if (is_numeric($tipo_formato)) {
		echo "El formato número no es correcto.<br>";
	} else {
		echo "El formato número es correcto.<br>";
	}
}


}




echo "<a href='datos.html'>Volver a la página principal</a>";








?>