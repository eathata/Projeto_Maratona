<form method="POST">
    Temperatura em Celsius:
    <input type="number" name="celsius">
    <input type="submit" value="Converter">
</form>

<?php
if (isset($_POST['celsius'])) {
    $celsius = $_POST['celsius'];

    $fahrenheit = ($celsius * 9 / 5) + 32;

    echo "Temperatura em Fahrenheit: $fahrenheit °F";
}
?>