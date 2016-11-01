<html>

<?php

$vector= array(1,1,1,1,1,1,1,1,1,1);
$suma=0;

for ($i=0;$i<=count($vector);$i++) {

    $suma=$vector[$i]+$suma;

}

$media=$suma/(count($vector));

echo "La media es: ".$media;






?>


</html>