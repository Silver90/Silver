<?php
$base = $_POST[("base")];
$altezza = $_POST[("altezza")];
$lato = $_POST[("lato")];

$area_triangolo = (($base * $altezza) / 2);
$perimetro_triangolo = ($lato * 3);
echo "L'area del triangolo e' " . $area_triangolo;
echo " Il perimetro del triangolo e' " . $perimetro_triangolo;
?>