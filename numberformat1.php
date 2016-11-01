<html>

<!--Enunciado: Dado un cierto valor numérico, imprimirlo con dos decimales separados por una
coma, mostrando también los miles separados por puntos.
Ejecución: El valor corresponde a: 8.546.921.546,49-->

<?php
$numero= 8546921546.49451;


$resultado=number_format($numero,2,',','.');


echo $numero;
echo "<br>";
echo $resultado;



?>




</html>