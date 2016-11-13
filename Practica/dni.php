<?php

$dni="A12345678";

$validar= preg_match("(([A-Z]\d{8})|(\d{8}[A-Z])|([a-z]\d{8})|(\d{8}[a-z]))", $dni);

//print_r($dni);
print_r($validar);





?>