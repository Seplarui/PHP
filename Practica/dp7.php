<?php

error_reporting(0);//OCULTAR NOTIFICACIONES DE ERROR
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
$peso=comprobar('kg');
$opcion_edad=$_REQUEST['menu_edad'];
$varsexo=$_REQUEST['sexo'];
$varcivil=$_REQUEST['estado_civil'];
//$varaficiones=$_REQUEST['aficiones'];
$varcine=$_REQUEST['cine'];
$varliteratura=$_REQUEST['literatura'];
$vartebeos=$_REQUEST['tebeos'];
$vardeporte=$_REQUEST['deporte'];
$varmusica=$_REQUEST['musica'];
$vartelevision=$_REQUEST['television'];

if(!isset($varcine) && !isset($varliteratura) && !isset($varmusica) && !isset($vartebeos) && !isset($vardeporte) && 
    !isset($vartelevision)   )  {

    echo "Elige al menos una afición por favor<br>";


}

if ($varcine!="") {

    echo "Te gusta el cine.<br>";

}

if ($varliteratura!="") {

    echo "Te gusta el literatura.<br>";

}
if ($varmusica!="") {

    echo "Te gusta el música.<br>";

}
if ($vartebeos!="") {

    echo "Te gusta los tebeos.<br>";

}
if ($vardeporte!="") {

    echo "Te gusta el deporte.<br>";

}
if ($vartelevision!="") {

    echo "Te gusta la televisión.<br>";

}




comprobar_cadena_vacia($nombre,$apellidos);

//COMPROBAMOS AFICIONES


//COMPROBAMOS SELECCIÓN ESTADO CIVIL

if(!isset($varcivil)) {
    echo "Selecciona el estado civil por favor.<br>";
} else {
    echo "El estado civil seleccionado ha sido: <b>$varcivil</b><br>";
}

//COMPROBAMOS SELECCIÓN DE SEXO

if (!isset($varsexo)) {
    echo "Selecciona Hombre/Mujer por favor.<br>";
} else {
    echo "El sexo seleccionado es: <b>$varsexo</b> <br>";
}

//COMPROBAMOS EDAD

if($opcion_edad=="") {
    echo "Introduce tu edad por favor.<br>";
} else {
    echo "La edad introducida es <b>$opcion_edad</b><br>";
}
//COMPROBAMOS PESO
if ($peso=="") {
    echo "Introduce tu peso por favor.<br>";

} else {
    echo "El peso introducido es: <b>$peso kg.</b>";
}




//FUNCIÓN PARA COMPROBAR SI UNA CADENA ES VACÍA - NOMBRE APELLIDOS
function comprobar_cadena_vacia($nombreV,$apellidosV) {

	if ($nombreV=="" && $apellidosV=="") {
    echo "Introduce nombre y apellidos, por favor.<br>";
    
}  else if ($nombreV==""){
    echo "Introduce el nombre por favor.";
    
}else if ($apellidosV=="") {
    echo "Introduce los apellidos por favor.";
    
} 
if ($nombreV!="") 
{
    echo "El nombre introducido es: <b>$nombreV</b><br>";
    
    
}
if ($apellidosV!="") {
    echo "Los apellidos introducidos son: <b>$apellidosV</b><br>";
}

}


     echo "<br><a href=dp7.html>Página Principal<br></a>";


?>