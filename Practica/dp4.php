<?php

//$varsexo=$_REQUEST['sexo'];

//print_r($_REQUEST);

if (!isset($_REQUEST['sexo'])) 
{

    echo "Selecciona una opcion por favor"."<a href='dp4.html'> Volver</a>";
    
} else {

    $varsexo=$_REQUEST['sexo'];
    echo "La opcion que has seleccionado ha sido <b>$varsexo</b>. <a href='dp4.html'>Volver</a>";

}

  



    




?>