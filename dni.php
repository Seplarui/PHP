<html>


<?php

$letras="TRWAGMYFPDXBNJZSQVHLCKEO";
$dni=48321351;
$letra_dni=$dni%23;
$resultado=substr($letras,$letra_dni,1);

echo "La letra del DNI es: $resultado";

?>

</html>