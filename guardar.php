<?php
//Indica la posición del carácter "@" o FALSE si no está

$posicion_arroba=strpos($_REQUEST["email"],"@");
//Busca la aparición de un punto (.) a partir de la arroba
$posicion_punto=strpos($_REQUEST["email"],".",$posicion_arroba);
if($posicion_arroba&&$posicion_punto) {
    //Aquí vendría el código para guardar en la bda
    header("location:confirmacion.html");//Redirección
} else {
    //Aquí vendría el código para guardar en la base de datos
    header("location:error.html");//Redirección
}
?>