<?php
session_start();
include("pdo.php");
if (isset($_POST['invio'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $sql = $connessione->prepare("SELECT * FROM anagrafica WHERE username = :username AND password = :password");
    $sql->bindParam(':username', $username);
    $sql->bindParam(':password', $password);
    $sql->execute();

    if ($row = $sql->fetch()) {

        $_SESSION["username"] = $row["username"];
        $_SESSION["username"] = $row["password"];
        echo "connessione riuscita! clicca qui per entrare nel " . "<a href='#'>sito</a>";
    } else {
        echo "login fallito!! Ritenta " . "<a href='index.php'>clicca qui</a>";
    }
} else {

    ?>
    <html>
    <head>
        <meta charset="utf-8">
        <title> log in </title>
    </head>
    <body>
    <h2>Log in</h2>

    <form name="form_login" method="post">
        <p>Username</p><input type="text" name="username"></p>
        <p>Password <input name="password"></p>
        <input type="submit" value="invio" name="invio"><br><br>
        Non sei registrato? <a href="registrazioneform.php"> Registrati </a>
    </form>
    </body>
    </html>
<?php
}
?>
