<?php
$e = $_POST["euro"];
function valuta($e)
{
    $a = $e * 1.2745;
    return $a;
}

echo "Risultato cambio in dollaro :$" . valuta($e);
?>