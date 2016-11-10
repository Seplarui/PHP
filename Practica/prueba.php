<?php



$nombre=comprobar('texto');
if ($nombre=="") {
    print "<p>No ha escrito ningún nombre</p>";

} else {
    print "<p>Su nombre es $nombre </p>";
}

function comprobar($var) {

    $tmp=(isset($_REQUEST[$var]))
    ? strip_tags(trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "ISO-8859-1"))) : "";

    if (get_magic_quotes_gpc()) {
        $tmp=stripslashes($tmp);
    }
return $tmp;

}


?>
