<form method="POST">
    Digite um número:
    <input type="number" name="num">
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($_POST['num'])) {
    $num = $_POST['num'];

    for ($i = 10; $i >= 1; $i--) {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
}
?>