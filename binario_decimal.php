<form method="POST">
    Digite um número:
    <input type="number" name="num" min="0" step="1">
    <input type="submit" value="Converter">
</form>

<?php
if (isset($_POST['num'])) {
    $num = $_POST['num'];
    $binario = "";

    if ($num == 0) {
        $binario = "0";
    } else {
        while ($num > 0) {
            $resto = $num % 2;
            $binario = $resto . $binario;
            $num = ($num - $resto) / 2;
        }
    }

    echo "Número binário: $binario";
}
?>