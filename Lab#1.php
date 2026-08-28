<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio #1</title>
</head>
<body>
    <h1>Laboratorio #1</h1>

    <!-- Formulario para ingresar datos por teclado -->
    <form method="GET" action="">
        <label for="radio">Ingrese el radio del círculo:</label><br>
        <input type="number" step="any" name="radio" id="radio" required><br><br>

        <label for="pulgadas">Ingrese las pulgadas a convertir:</label><br>
        <input type="number" step="any" name="pulgadas" id="pulgadas" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <hr>

<?php
if (isset($_GET['radio']) && isset($_GET['pulgadas'])) {
    // Captura de datos ingresados
    $radio = floatval($_GET['radio']);
    $pulgadas = floatval($_GET['pulgadas']);

    // 1. CÁLCULO DE ÁREA Y PERÍMETRO DEL CÍRCULO
    $area = M_PI * pow($radio, 2);
    $perimetro = 2 * M_PI * $radio;

    echo "<h3>Resultados del Círculo:</h3>";
    echo "Radio ingresado: " . $radio . "<br>";
    echo "El área de la circunferencia es: " . round($area, 2) . "<br>";
    echo "El perímetro de la circunferencia es: " . round($perimetro, 2) . "<br><br>";

    // 2. CONVERSIÓN DE PULGADAS A CENTÍMETROS
    $centimetros = $pulgadas * 2.54;

    echo "<h3>Conversión de Longitud:</h3>";
    echo "Pulgadas ingresadas: " . $pulgadas . " in<br>";
    echo "El resultado en centímetros es: " . round($centimetros, 2) . " cm<br>";
}
?>

</body>
</html>