<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" type="text/css">
<?php
if ((isset($_POST['submit'])) || (isset($_POST['marca'])) || (isset($_POST['modello']))) {
    $host = "127.0.0.1";
    $db = "motosalone";
    $user = "root";
    $password = "";
    try {
        $connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        $connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $marca = $_POST['marca'];
        $modello = $_POST['modello'];
        $sql = $connessione->prepare("SELECT * FROM moto WHERE marca = :marca AND modello = :modello");
        $sql->bindParam(':marca', $marca, PDO::PARAM_STR, 7);
        $sql->bindParam(':modello', $modello, PDO::PARAM_STR, 7);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $result = $sql->fetchAll();
            foreach ($result as $row) {
                echo "<h2>ID: " . $row['id'] . "<br>Marca: " . $row['marca'] . " <br>Modello: " . $row['modello'] . " <br>Potenza CV: " .
                    $row['potenza'] . " <br>Cilindrata: " . $row['cilindrata'] . " <br>Peso: " . $row['peso']
                    . " <br>Altezza sella: " . $row['altezza_sella'] . " <br>Categoria emissione: "
                    . $row['categoria_emissione'] . " <br>Rapporti: " . $row['cambio']
                    . " <br>Tipologia cambio: " . $row['tipo_cambio'] . " <br>Consumi: " . $row['consumo']
                    . " <br>Tipologia: " . $row['tipologia'] . "<br> Prezzo: €" . $row['prezzo'] . "</h2>";
                echo ' <a href="querycancellazione.php?id=' . $row['id'] . '"> DELETE </a><br> ';
                echo ' <a href="queryaggiornamento.php?id=' . $row['id'] . '&marca=' . $row['marca'] . '&modello='
                    . $row['modello'] . '&potenza=' . $row['potenza'] . '&cilindrata=' . $row['cilindrata']
                    . '&peso=' . $row['peso'] . '&altezza_sella=' . $row['altezza_sella'] . '&categoria_emissione='
                    . $row['categoria_emissione'] . '&cambio=' . $row['cambio'] . '&tipo_cambio=' . $row['tipo_cambio']
                    . '&consumo=' . $row['consumo'] . '&tipologia=' . $row['tipologia'] . '&prezzo='
                    . $row['prezzo'] . '"> UPDATE </a> ';
            }
        } else {
            echo "Nessun record corrispondente alla richiesta.";
        }
        $connessione = null;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>


