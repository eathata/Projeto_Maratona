<?php
$a = 2;
$b = 5;
$c = 2;

if ($a == 0) {
    echo "O valor de A deve ser diferente de zero.";
} else {
    $delta = ($b * $b) - (4 * $a * $c);

    if ($delta < 0) {
        echo "Não existem raízes reais.";
    } else {
        if ($delta == 0) {
            $x = -$b / (2 * $a);
            echo "Raiz única: $x";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);

            echo "X1 = $x1 <br>";
            echo "X2 = $x2";
        }
    }
}
?>