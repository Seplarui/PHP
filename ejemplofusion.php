<!--ejemplofusion.html-->

<?php

$opciones=array("piedra","papel","tijeras");

if($_REQUEST["jugada"]!="") {
    $mijugada=$opciones[rand(0,2)];
    if($_REQUEST["jugada"]==$mijugada) {
        $resultado="Empates.";
    } else if (($_REQUEST["jugada"]=="piedra"&& $mijugada=="tijeras")|| ($_REQUEST["jugada"]=="tijeras" && $mijugada=="papel") || ($_REQUEST["jugada"]=="papel"&&$mijugada=="piedra"))
    {
        $resultado="Tú ganas";
    } else {
        $resultado="Gano yo";
    }
}

?>

<html>
<head><title>Piedra, papel o tijera</title></head>
<body>
<?php
if ($_REQUEST["jugada"]!="") {
    ?>
    Has elegido <?=$_REQUEST["jugada"];?>, yo he elegido <?=$mijugada?>.
    <?=$resultado?> <br>
    ¿Quieres jugar otra vez=<br>
    <?php
}
?>

<form "juego" method="post" action="<?$_SERVER['PHP_SELF']//el archivo actual?>">
Piedra <input type="radio" name="jugada" value="piedra">
Papel <input type="radio" name="jugada" value="papel">
Tijera <input type="radio" name="jugada" value="tijeras">
<input type="submit" value="Jugar">
</form>
</body>
</html>