<html>
<head>
    <meta charset="UTF-8">
    <title>while3.php</title>
</head>
<body>

<?php

$i=0;

while($i<=10) {

    $i=0;


    echo "<table border=2>";

    while($i<=10) {

        echo "<tr>";
        echo "<td>", "10*$i", "</td>";
        echo "<td>".(10*$i). "</td>";
        $i++;
        echo "</tr>";

    }



    $i++;
}



?>

</body>
</html>