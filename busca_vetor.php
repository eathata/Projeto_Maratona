<form method="POST">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "Número $i: <input type='number' name='n$i'><br>";
    }
    ?>
    Número para procurar:
    <input type="number" name="busca"><br>
    <input type="submit" value="Procurar">
</form>

<?php
if (isset($_POST['busca'])) {
    $vetor = [
        $_POST['n1'], $_POST['n2'], $_POST['n3'],
        $_POST['n4'], $_POST['n5'], $_POST['n6'],
        $_POST['n7'], $_POST['n8'], $_POST['n9'],
        $_POST['n10']
    ];

    $busca = $_POST['busca'];
    $encontrou = 0;

    for ($i = 0; $i < 10; $i++) {
        if ($vetor[$i] == $busca) {
            $encontrou = 1;
        }
    }

    if ($encontrou == 1) {
        echo "Número encontrado!";
    } else {
        echo "Número não encontrado.";
    }
}
?>