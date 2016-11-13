<?php

echo "<meta charset='utf-8'>";

$opcion=$_REQUEST['edad'];

if ($opcion=="") {
    echo "Introduce una edad por favor. <br><a href='dp6.html'>Página Principal </a>";
} else {
    echo "La edad introducida es <b>$opcion</b>.<br> <a href='dp6.html'>Página Principal </a>";
}

?>