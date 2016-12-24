<?php


require_once("../modelo/Marca_Modelo.php");

$marca_coche=new Marcas_modelo();
$matrizMarca=$marca_coche->getmarcas();



  //print_r($matrizMarca); /*OK*/

  

require_once("../vista/Marca_Vista.php");





?>