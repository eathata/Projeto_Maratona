<form method="POST">
    Digite um número:
    <input type="number" name="num" min="0">
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($_POST['num'])) {
    $num = $_POST['num'];
    $fatorial = 1;

    if ($num < 0) {
        echo "Digite um número positivo.";
    } else {
        for ($i = 1; $i <= $num; $i++) {
            $fatorial = $fatorial * $i;
        }

        echo "O fatorial de $num é $fatorial";
    }
}
?>