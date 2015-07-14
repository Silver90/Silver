<?php
$id = $_GET[("id")];
$host = "127.0.0.1";
$db = "motosalone";
$user = "root";
$password = "";
$connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
$sql = $connessione->exec("DELETE FROM moto WHERE id=" . $id);
echo 'Cancellazione eseguita con successo!!!!' . '<a href="index.html"> Home </a>';

?>