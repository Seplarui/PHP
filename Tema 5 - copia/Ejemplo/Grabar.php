<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        include_once("Profesor.php");

        function recoge($campo) {
            if (isset($_REQUEST[$campo])) {
                $valor = htmlspecialchars(trim(strip_tags($_REQUEST[$campo])));
            } else {
                $valor = "";
            };
            return $valor;
        }

        function grabar($profesor) {
            $f = fopen("poo.txt", "a");
            $linea = $profesor->getId() . ";" . $profesor->getNombre() . "\r\n";
            fwrite($f, $linea);

            fclose($f);
        }

        function leer() {
            $id = recoge("id");
            $nombre = recoge("nombre");
            $profe = new Profesor($id, $nombre);
            return $profe;
        }

        $profesor = new Profesor("", "");
        $profesor = leer();
        if ($profesor->getId() != "" && $profesor->getNombre() != "") {
            grabar($profesor);
            echo "Grabado: " . $profesor->getNombre() . "<br>";
        } else {
            echo "Error: Campos vacios" . "<br>";
        }
        ?>
    </body>
</html>
