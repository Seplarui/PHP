<?php

error_reporting(0);
//$nombre_fichero='counter.txt';

//$fich=fopen("counter.txt","w");

echo "<br/>";
//print_r(file_exists($fich));

if (fopen("counter.txt","a")) {
    echo "<b>El archivo \"counter.txt\" existe y ha quedado abierto.</b>";
} else {
    echo "<b>El archivo\"counter.txt\"no existe.</b>";
}

?>