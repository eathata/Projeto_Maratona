<form method="POST">
    Digite uma palavra:
    <input type="text" name="palavra">
    <input type="submit" value="Contar">
</form>

<?php
if (isset($_POST['palavra'])) {
    $palavra = strtolower($_POST['palavra']);
    $vogais = 0;

    for ($i = 0; $i < strlen($palavra); $i++) {
        $letra = $palavra[$i];

        if ($letra == "a" || $letra == "e" ||
            $letra == "i" || $letra == "o" ||
            $letra == "u") {
            $vogais++;
        }
    }

    echo "Quantidade de vogais: $vogais";
}
?>