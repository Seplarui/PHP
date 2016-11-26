<?php

$dir_imagenes="imagenes/";
$directorio=opendir($dir_imagenes);
$i=0;

while($archivo=readdir($directorio)) {
$i++;
	
	if($archivo!="." && $archivo!="..") {

	
	?>
	<table border="2">
	<tr>
	<td><img src="<?php echo $dir_imagenes.$archivo ?>" width="200px"><br> </img></td>
	</tr>
	</table>





	</table>   
           


    <?php
   
   }
}
echo "<a href='prueba1.html'>Volver a subir un fichero</a>";
?>