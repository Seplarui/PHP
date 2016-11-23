<pre> 
<?php
//EVITAMOS QUE MUESTRE POR PANTALLA LOS WARNING Y NOTICE.
error_reporting(0);
//COMPROBAMOS SI EXISTE EL FICHERO.
if (fopen("counter.txt","r")) {
    echo "<b>El archivo counter.txt existe y ha quedado abierto.</b>";
} else
{
    echo "<b>El archivo counter.txt no existe y lo creamos.</b>";
}
//ABRIMOS EL FICHERO Y LO LEEMOS
$archivo = fopen("counter.txt", "r");
$tamano = filesize("counter.txt");
$contador = fread($archivo, $tamano);
echo "<br>";
//COGEMOS EL CONTADOR DEL FICHERO Y LE SUMAMOS 1
$contador=$contador+1;

//ESCRIBIMOS EL NUEVO VALOR DEL CONTADOR EN EL FICHERO
$escribir_archivo=fopen("counter.txt","wa");
fwrite($escribir_archivo,$contador);
fclose($archivo);

echo "Contador: $contador";

?>
</pre>