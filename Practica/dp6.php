<?php

echo "<meta charset='utf-8'";

$opcion=$_REQUEST['edad'];

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
if ($opcion=="") {
    echo "Introduce una edad por favor. <a href='dp6.html'>Página Principal </a>";
} else {
    echo "La edad introducida es <b>$opcion</b> <a href='dp6.html'>Página Principal </a>";
}







?>