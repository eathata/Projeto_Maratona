<form method="POST">
    Digite uma palavra:
    <input type="text" name="palavra">
    <input type="submit" value="Verificar">
</form>

<?php
if (isset($_POST['palavra'])) {
    $palavra = strtolower($_POST['palavra']);
    $tamanho = strlen($palavra);

    $i = 0;
    $j = $tamanho - 1;
    $palindromo = 1;

    while ($i < $j) {
        if ($palavra[$i] != $palavra[$j]) {
            $palindromo = 0;
        }

        $i++;
        $j--;
    }

    if ($palindromo == 1) {
        echo "É um palíndromo!";
    } else {
        echo "Não é um palíndromo.";
    }
}
?>