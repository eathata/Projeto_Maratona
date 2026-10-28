<?php
for ($num = 2; $num <= 50; $num++) {
    $primo = 1;

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $primo = 0;
        }
    }

    if ($primo == 1) {
        echo "$num ";
    }
}
?>