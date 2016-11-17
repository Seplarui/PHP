<?php

$fich=fopen("leeme2.txt","w"); //crea el archivo de texto leeme2.txt y lo abre en modo escritura
fwrite($fich, "1.-Añado nueva línea de texto MIA".PHP_EOL);
fwrite($fich, "2.-Añado una segunda nueva línea de texto MIA".PHP_EOL);
fclose($fich); //una vez que acabo con el fichero lo cierro.

?>