<form method="POST">
    Primeiro número: <input type="number" name="n1"><br>
    Segundo número: <input type="number" name="n2"><br>
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($_POST['n1']) && isset($_POST['n2'])) {
    $a = $_POST['n1'];
    $b = $_POST['n2'];

    while ($b != 0) {
        $resto = $a % $b;
        $a = $b;
        $b = $resto;
    }

    echo "MDC = $a";
}
?>