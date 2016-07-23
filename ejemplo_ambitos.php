<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Documento sin título</title>
</head>

<body>
    <?php

    $nombre="Juan";
    function dameNombre() {
        
        global $nombre;
        $nombre="el nombre es " . $nombre;
        
    }

    dameNombre();
    echo $nombre;

?>
</body>

</html>