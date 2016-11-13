<?php
echo "<meta charset='utf-8'>";
error_reporting (0);
$varcine=$_REQUEST['cine'];
$varliteratura=$_REQUEST['literatura'];
$varmusica=$_REQUEST['musica'];



if(!isset($varcine) && !isset($varliteratura) && !isset($varmusica)) {

    echo "Ni le gusta la música, ni el cine ni la literatura.<br>";

} 
 if ($varcine=="on") {
    echo "Le gusta el cine.<br>";

} 
if ($varliteratura=="on") {
    echo "Le gusta la literatura.<br>";
} 
if ($varmusica=="on") {
    echo "Le gusta la música.<br>";
}
echo "<a href='dp5.html'>Página Principal</a>"
?>
