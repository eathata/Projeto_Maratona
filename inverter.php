<form method="POST">
    Digite uma palavra:
    <input type="text" name="palavra">
    <input type="submit" value="Inverter">
</form>

<?php
if (isset($_POST['palavra'])) {
    $palavra = $_POST['palavra'];
    $invertida = "";

    for ($i = strlen($palavra) - 1; $i >= 0; $i--) {
        $invertida = $invertida . $palavra[$i];
    }

    echo "Palavra invertida: $invertida";
}
?>