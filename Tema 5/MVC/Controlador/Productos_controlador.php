<?php

require_once("/modelo/Productos_modelo.php");

//LLAMAMOS AL CONSTRUCTOR
$producto=new Productos_modelo();
$matrizProductos=$producto->get_productos();


require_once("/vista/Productos_view.php");

?>