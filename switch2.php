<html>

<body>

<?php

$cadena="coche";

echo "La variable tiene el valor: ". $cadena . "<br>";

switch($cadena) {

    case "camion":
        echo "La cadena tiene el valor: " . $cadena;
        break;
    case "coche":
        echo "La cadena tiene el valor: " . $cadena;
        break;
    case "moto":
        echo "La cadena tiene el valor" . $cadena;
        break;
    default:
        echo "La cadena no coincide";
}
?>
</body>
</html>