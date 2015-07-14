<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $modello = $_POST['modello'];
    $potenza = $_POST['potenza'];
    $cilindrata = $_POST['cilindrata'];
    $peso = $_POST['peso'];
    $altezza_sella = $_POST['altezza_sella'];
    $categoria_emissione = $_POST['categoria_emissione'];
    $cambio = $_POST['cambio'];
    $tipo_cambio = $_POST['tipo_cambio'];
    $consumo = $_POST['consumo'];
    $tipologia = $_POST['tipologia'];
    $prezzo = $_POST['prezzo'];

    $conn = 'mysql:host=localhost;dbname=motosalone';

    $db = new PDO($conn, 'root', '');

    $sql = $db->exec("UPDATE moto SET marca=" . "'" . $marca . "',modello=" . "'" . $modello . "',potenza=" . "'" . $potenza .
        "',cilindrata=" . "'" . $cilindrata . "',peso=" . "'" . $peso . "',altezza_sella=" . "'" . $altezza_sella .
        "',categoria_emissione=" . "'" . $categoria_emissione . "',cambio=" . "'" . $cambio . "',tipo_cambio=" .
        "'" . $tipo_cambio . "',consumo=" . "'" . $consumo . "',tipologia=" . "'" . $tipologia . "',prezzo=" . "'" . $prezzo . "'
                   WHERE id =" . $id);

    echo 'Dato modificato!' . '<a href="index.html"> Home </a>';
} else {
    $id = $_GET['id'];
    $marca = $_GET['marca'];
    $modello = $_GET['modello'];
    $potenza = $_GET['potenza'];
    $cilindrata = $_GET['cilindrata'];
    $peso = $_GET['peso'];
    $altezza_sella = $_GET['altezza_sella'];
    $categoria_emissione = $_GET['categoria_emissione'];
    $cambio = $_GET['cambio'];
    $tipo_cambio = $_GET['tipo_cambio'];
    $consumo = $_GET['consumo'];
    $tipologia = $_GET['tipologia'];
    $prezzo = $_GET['prezzo'];
    ?>
    <form method="post" action="<?php $_PHP_SELF ?>">
        <table>
            <tr>
                <td width="100"> ID Moto</td>
                <td><input name="id" type="text" value="<?php echo $id ?>" id="Nome"></td>
            </tr>
            <tr>
                <td width="100"> Marca</td>
                <td><input name="marca" type="text" value="<?php echo $marca ?>" id="Nome"></td>
            </tr>
            <tr>
                <td width="100"> Modello</td>
                <td><input name="modello" type="text" value="<?php echo $modello ?>" id="Nome"></td>
            </tr>
            <tr>
                <td width="100"> Potenza</td>
                <td><input name="potenza" type="text" value="<?php echo $potenza ?>" id="Nome"></td>
            </tr>
            <tr>
                <td width="100"> Cilindrata</td>
                <td><input name="cilindrata" type="text" value="<?php echo $cilindrata ?>" id="Nome"></td>
            </tr>
            <tr>
                <td width="100"> Peso</td>
                <td><input name="peso" type="text" value="<?php echo $peso ?>" id="Nome"></td>
            </tr>
            <tr>
                <td width="100"> Altezza sella</td>
                <td><input name="altezza_sella" type="text" value="<?php echo $altezza_sella ?>" id="Nome"></td>
            </tr>
            <tr>
                <td width="100"> Categoria emissione</td>
                <td><input name="categoria_emissione" type="text" value="<?php echo $categoria_emissione ?>" id="Nome">
                </td>
            </tr>
            <tr>
                <td width="100"> Cambio</td>
                <td><input name="cambio" type="text" value="<?php echo $cambio ?>" id="Nome"></td>
            </tr>
            <tr>
                <td width="100"> Tipo cambio</td>
                <td><input name="tipo_cambio" type="text" value="<?php echo $tipo_cambio ?>" id="Nome"></td>
            </tr>
            <tr>
                <td width="100"> consumo</td>
                <td><input name="consumo" type="text" value="<?php echo $consumo ?>" id="Nome"></td>
            </tr>
            <tr>
                <td width="100"> tipologia</td>
                <td><input name="tipologia" type="text" value="<?php echo $tipologia ?>" id="Nome"></td>
            </tr>
            <tr>
                <td width="100"> Prezzo</td>
                <td><input name="prezzo" type="text" value="<?php echo $prezzo ?>" id="Nome"></td>
            </tr>
            <tr>
                <td width="100"></td>
                <td><input name="update" type="submit" value="update" id="update"></td>
            </tr>
        </table>
    </form>
<?php
}
?>    

