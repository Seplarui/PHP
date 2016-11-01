<html>

<!--Enunciado: Crear un vector de n números y calcule la media.-->

<?php

$vector= array(5 , 7 , 9 , 13);
$suma=0;

for ($i=0;$i<=count($vector);$i++) {

    $suma=$vector[$i]+$suma;

}

$media=$suma/(count($vector));

echo "La media es: ".$media;

?>


</html>