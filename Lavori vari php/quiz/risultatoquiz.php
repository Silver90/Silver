<?php
if isset($val) == true {
    $punteggio = $punteggio + 0;
} elseif ($_POST["risposta2_2"])===true {
    $punteggio = $punteggio + 3;
}
if ($_POST["risposta2_1"])===true {
    $punteggio = $punteggio + 3;
}
elseif ($_POST["risposta2_2"]) = true {
    $punteggio = $punteggio + 0;
}
elseif ($_POST["risposta2_3"]) = true {
    $punteggio = $punteggio + 0;
}
if ($_POST["risposta3_1"]) == true {
    $punteggio = $punteggio + 3;
}
elseif ($_POST["risposta3_2"]) = true {
    $punteggio = $punteggio + 0;
}
elseif ($_POST["risposta3_3"]) = true {
    $punteggio = $punteggio + 0;
}
if ($_POST["risposta4_1"]) = true {
    $punteggio = $punteggio + 3;
}
elseif ($_POST["risposta4_2"]) = true {
    $punteggio = $punteggio + 0;
}
elseif ($_POST["risposta4_3"]) = true {
    $punteggio = $punteggio + 0;
}
if ($_POST["risposta5_1"]) == true {
    $punteggio = $punteggio + 3;
}
elseif ($_POST["risposta5_2"]) = true {
    $punteggio = $punteggio + 0;
}
elseif ($_POST["risposta5_3"]) = true {
    $punteggio = $punteggio + 0;
}
if ($punteggio > 7) {
    echo "Sei stato bravo! il tuo punteggio è " . $punteggio;
} else {
    echo "fai schifo! il tup punteggio è " . $punteggio;
}
?>