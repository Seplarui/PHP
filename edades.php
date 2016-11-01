<html>

<!--Enunciado: Hacer un programa que indicados tres edades nos diga quien es el abuelo, el
padre y el hijo
Ejecución:
la edad del hijo es 21 años
la edad del padre es 43 años
la edad del abuelo es 67 años-->

<?php

$edades=array(21,43,67);

sort($edades);

echo "La edad del hijo es: $edades[0]";
echo "La edad del padre es: $edades[1]";
echo "La edad del abuelo es: $edades[2]";



?>


</html>