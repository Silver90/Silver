<form name="giorno" method="get">

    inserisci un numero <input type="text" name="giorno">
    <input type="submit" name="but1" values="invio">


</form>

<?php
$giorno = $_GET['giorno'];

switch ($giorno) {

    case "1":
        echo "lunedì";
        break;
    case "2":
        echo "martedì";
        break;
    case "3":
        echo "mercoledì";
        break;
    case "4":
        echo "giovedì";
        break;
    case "5":
        echo "venerdì";
        break;
    case "6":
        echo "sabato";
        break;
    case "7":
        echo "domenica";
        break;
    default:
        echo "numero errato!";
}
?>