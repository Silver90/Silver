<?php
session_start();
include("pdo.php");
if (isset($_POST['invio'])) {
    if ((isset($_POST['password_reg'])) || (isset($_POST['username_reg'])) || (isset($_POST['email_reg']))) {
        $username = $_POST['username_reg'];
        $password = $_POST['password_reg'];
        $email = $_POST['email_reg'];
        $sql = $connessione->exec("INSERT INTO `anagrafica`.`anagrafica` (`id`,`username`,`password`,`email`) VALUES (NULL,'" . $username . "','" . $password . "','" . $email . "')");
        echo "ti sei registrato con successo. Clicca qui per effettuare il " . "<a href='index.php'>login</a>";
    } else {
        echo "registrazione fallita!! Ritenta. " . "<a href='registrazione.php'> indietro </a>";
    }
} else {
    ?>
    <html>
    <head>
        <meta charset="utf-8">
        <title> Registrazione </title>
    </head>
    <body>
    <h2>Registrazione</h2>

    <form name="registrazione" method="post">
        <br/>

        <p>Username: <input type="text" name="username_reg"></p>
        <br/>

        <p>Password: <input type="password" name="password_reg"></p>
        <br/>

        <p>Email: <input type="text" name="email_reg"></p>
        <br/>
        <input type="submit" value="invio" name="invio">
    </form>

    <body>
    </html>
<?php
}
?>
