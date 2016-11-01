<html>

<!--Enunciado: Hacer un programa que dados cinco números al azar nos diga cuantos son pares-->

<?php

$numeros=array (rand(1,100), rand(1,100), rand(1,100),rand(1,100), rand(1,100));

$par=0;
$impar=0;

for($i=0;$i<count($numeros);$i++) {
    echo $numeros[$i];
    echo "<br>";
    if ($numeros[$i]%2==0) {
        $par=$par+1;

    } else {
        $impar=$impar+1;
    }
}

echo "Hay $par pares";
echo"<br>";
echo "Hay $impar impares";



?>




</html>