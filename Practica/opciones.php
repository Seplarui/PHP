
<html>
<form>
<input type=”checkbox” name=”extras[]” value=”garaje” checked> Garaje <input type=”checkbox” name=”extras[]” value=”piscina” >Piscina
<input type=”checkbox” name=”extras[]” value=”jardin” >Jardin
</form>


</html>
<?php
$extras = $_REQUEST['extras']; 
foreach ($extras as $extra){
echo "$extra"; 
}

?>