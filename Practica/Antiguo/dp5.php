<?php
error_reporting (0);
$varcine=$_REQUEST['cine'];
$varliteratura=$_REQUEST['literatura'];
$varmusica=$_REQUEST['musica'];



if(!isset($varcine) && !isset($varliteratura) && !isset($varmusica)) {

    echo "Ni le gusta la musica, ni el cine ni la literatura";

} 
 if ($varcine=="on") {
    echo "Le gusta el cine";

} 
if ($varliteratura=="on") {
    echo "Le gusta la literatura";
} 
if ($varmusica=="on") {
    echo "Le gusta la musica";
}
?>
