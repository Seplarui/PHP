<pre> 
<?php
$archivo = fopen("kk.txt", "r");
$tamano = filesize("kk.txt");
$texto = fread($archivo, $tamano);
//echo $texto;
echo "<br>";
//$texto=$texto+1;
$texto=$texto+1;
//fwrite($archivo,$texto);


$escribir_archivo=fopen("kk.txt","wa");
fwrite($escribir_archivo,$texto);
fclose($archivo);

echo "Texto sumado $texto";

?>
</pre>