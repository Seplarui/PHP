<?php

echo "<meta charset='utf-8'>";

if (!isset($_REQUEST['sexo'])) 
{

    echo "Selecciona una opción por favor."."<br><a href='dp4.html'>Página Principal</a>";
    
} else {

    $varsexo=$_REQUEST['sexo'];
    echo "La opción que has seleccionado ha sido <b>$varsexo</b>. <a href='dp4.html'>Página Principal</a>";

}

  



    




?>