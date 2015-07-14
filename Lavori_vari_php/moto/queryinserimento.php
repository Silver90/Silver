<?php

$host = "127.0.0.1";
$db = "motosalone";
$user = "root";
$password = "";
$connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
$marca1 = $_POST['marca1'];
$modello1 = $_POST['modello1'];
$potenza1 = $_POST['potenza1'];
$cilindrata1 = $_POST['cilindrata1'];
$peso1 = $_POST['peso1'];
$altezza_sella1 = $_POST['altezza_sella1'];
$categoria_emissione1 = $_POST['categoria_emissione1'];
$cambio1 = $_POST['cambio1'];
$tipo_cambio1 = $_POST['tipo_cambio1'];
$consumo1 = $_POST['consumo1'];
$tipologia1 = $_POST['tipologia1'];
$prezzo1 = $_POST['prezzo1'];
$sql = $connessione->exec("INSERT INTO `motosalone`.`moto` (`id`,`marca`,`modello`,`potenza`,`cilindrata`,`peso`,`altezza_sella`,`categoria_emissione`,`cambio`,`tipo_cambio`,`consumo`,`tipologia`,`prezzo`,`immagine`) VALUES (NULL,'" . $marca1 . "','" . $modello1 . "','" . $potenza1 . "','" . $cilindrata1 . "','" . $peso1 . "','" . $altezza_sella1 . "','" . $categoria_emissione1 . "','" . $cambio1 . "','" . $tipo_cambio1 . "','" . $consumo1 . "','" . $tipologia1 . "','" . $prezzo1 . "',null)");
echo "Dati inseriti!!";


?>