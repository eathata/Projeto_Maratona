<?php
$n1 = 10;
$n2 = 25;
$n3 = 15;

if ($n1 >= $n2 && $n1 >= $n3) {
    $maior = $n1;
} else {
    if ($n2 >= $n1 && $n2 >= $n3) {
        $maior = $n2;
    } else {
        $maior = $n3;
    }
}

echo "O maior número é: $maior";
?>