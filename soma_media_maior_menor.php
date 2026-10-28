<?php
if (isset($_POST['n1']) && isset($_POST['n2']) &&
    isset($_POST['n3']) && isset($_POST['n4']) &&
    isset($_POST['n5'])) {

    $numeros = [
        $_POST['n1'], $_POST['n2'], $_POST['n3'],
        $_POST['n4'], $_POST['n5']
    ];

    $soma = 0;
    $maior = $numeros[0];
    $menor = $numeros[0];

    for ($i = 0; $i < 5; $i++) {
        $soma = $soma + $numeros[$i];

        if ($numeros[$i] > $maior) {
            $maior = $numeros[$i];
        }

        if ($numeros[$i] < $menor) {
            $menor = $numeros[$i];
        }
    }

    $media = $soma / 5;

    echo "Soma: $soma <br>";
    echo "Média: $media <br>";
    echo "Maior: $maior <br>";
    echo "Menor: $menor";
}
?>