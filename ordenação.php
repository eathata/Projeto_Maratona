<?php
$numeros = [8, 3, 10, 1, 5];

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4 - $i; $j++) {
        if ($numeros[$j] > $numeros[$j + 1]) {
            $temp = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $temp;
        }
    }
}

for ($i = 0; $i < 5; $i++) {
    echo $numeros[$i] . " ";
}
?>