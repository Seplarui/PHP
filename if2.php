<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $sueldo = 2880;
        
        if ($sueldo < 800) {
            $sueldo = $sueldo*1.2;
            echo 'Tu nuevo salario es de ' . $sueldo . ' Euros';
    }
        else if ($sueldo > 1200) {
            $sueldo = $sueldo * 0.8;
            echo 'Tu nuevo salario es de ' . $sueldo . ' Euros';
    }
        else {
            echo 'Tu salario no va a cambiar';}
        ?>
    </body>
</html>