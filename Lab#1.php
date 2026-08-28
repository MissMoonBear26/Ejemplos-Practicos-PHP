<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio #1</title>
</head>
<body>

    <h2>Laboratorio #1</h2>

    <form method="GET" action="">
        <label>Radio del círculo:</label><br>
        <input type="number" step="any" name="radio" required><br><br>

        <label>Pulgadas a convertir:</label><br>
        <input type="number" step="any" name="pulgadas" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <hr>

<?php
if (isset($_GET['radio']) && isset($_GET['pulgadas'])) {
    $radio = $_GET['radio'];
    $pulgadas = $_GET['pulgadas'];

    // Cálculos
    $area = 3.1416 * ($radio * $radio);
    $perimetro = 2 * 3.1416 * $radio;
    $centimetros = $pulgadas * 2.54;

    // Mostrar resultados
    echo "<h3>Resultados:</h3>";
    echo "Área del círculo: " . round($area, 2) . "<br>";
    echo "Perímetro del círculo: " . round($perimetro, 2) . "<br>";
    echo "Conversión a centímetros: " . round($centimetros, 2) . " cm";
}
?>

</body>
</html>