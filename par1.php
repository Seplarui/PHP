<html>
<body>
<?php

DEFINE("LIMITE", 100);

$i=rand(1,LIMITE);

if($i%2==0) {

    echo "El número $i es par";

} else
{
    echo "El número $i no es par";
}


?>


</body>



</html>